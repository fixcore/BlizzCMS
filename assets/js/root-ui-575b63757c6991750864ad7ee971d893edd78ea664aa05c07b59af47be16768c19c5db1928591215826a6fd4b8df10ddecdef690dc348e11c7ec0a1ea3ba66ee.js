//- Core site Javascript file
var Page = {
  MOMENT_MONTH_FORMAT: 'MMM',

  init: function (context) {
    $('.Home-gameGridRow').scroll(Page.galleryResize);
    $('.Home-gameGridScrollLeft').click(Page.galleryLeft);
    $('.Home-gameGridScrollRight').click(Page.galleryRight);

    $('.Home-promotedCarouselItem').on('animateout.CarouselItem', Page.topCarouselOut);

    if ($('body').attr('data-device') === 'desktop') {
      $('.Home-gameGridTileContainer').on('mouseover', Page.gameTileHover);
    }
    Page.initMoment();

    // WMBLZ-743 - Temporary ICP code solution, replace when Global Nav accepts arbitrary content ( WMBLZ-790 )
    if (blizzard.chinaMode) {
      $('.NavbarFooter-additionalLegal:nth-child(3)').after('<div class="NavbarFooter-additionalLegal NavbarFooter-additionalLegalPull"><div class="NavbarFooter-additionalLegalLine">沪ICP备16024552号</div></div>');
    }
  },
  initMoment: function () {
    // Use user's locale so we can properly format strings
    moment.locale(blizzard.locale);

    // Change the time to the user's local timezone
    $('.Home-eventsTableRow').each(function (index, row) {
      var $row = $(row);
      var isPartialDayEvent = 'true' === $row.attr('data-partial');
      var startString = $row.attr('data-start');
      var startTime = moment(startString).local();
      var endString = $row.attr('data-end');
      var endTime = endString ? moment(endString).local() : null;

      if (isPartialDayEvent || !endTime) {
        var $month = $row.find('.Home-eventsTableDateHeading');
        $month.text(startTime.format(Page.MOMENT_MONTH_FORMAT).toUpperCase());

        var $day = $row.find('.Home-eventsTableDateRange');
        $day.text(startTime.date());
      } else {
        // Cross-month display (OCT 31 - NOV 3)
        if (endTime.month() !== startTime.month()) {
          var $startMonth = $row.find('.Home-eventsTableStartDate .Home-eventsTableDateHeading');
          $startMonth.text(startTime.format(Page.MOMENT_MONTH_FORMAT).toUpperCase());

          var $startDay = $row.find('.Home-eventsTableStartDate .Home-eventsTableDateRange');
          $startDay.text(startTime.date());

          var $endMonth = $row.find('.Home-eventsTableEndDate .Home-eventsTableDateHeading');
          $endMonth.text(endTime.format(Page.MOMENT_MONTH_FORMAT).toUpperCase());

          var $endDay = $row.find('.Home-eventsTableEndDate .Home-eventsTableDateRange');
          $endDay.text(endTime.date());
        } else {
          var $month = $row.find('.Home-eventsTableDateHeading');
          $month.text(startTime.format(Page.MOMENT_MONTH_FORMAT).toUpperCase());

          var $day = $row.find('.Home-eventsTableDateRange');

          // Same-month, date-range display (NOV 3-4)
          if (endTime.date() !== startTime.date()) {
            $day.text(startTime.date() + '-' + endTime.date());
          }
          // Single-day display (NOV 3)
          else {
              $day.text(startTime.date());
            }
        }
      }

      var $eventTime = $row.find('.Home-eventTime');
      if ($eventTime.length !== 0) {
        $eventTime.text(startTime.format(blizzard.localizedTimeFormat));
      }
    });

    // Update timezone display
    var $timezone = $('.Home-timezone');
    $timezone.text(moment().tz(moment.tz.guess()).format('z'));
  },
  afterLoad: function () {
    Page.resize();
  },
  resize: function (context) {
    Page.syncGallery();
    Page.syncTopStories();
  },

  topCarouselOut: function (event) {
    var $root = $(event.target).closest('.Home-promotedCarouselItem');
    $root.addClass('is-out');
    setTimeout(function () {
      $root.removeClass('is-out');
    }, 2000);
  },

  getGalleryInner: function () {
    var inner = 0;
    $('.Home-gameGridCell').each(function (index, elem) {
      inner += $(elem).outerWidth();
    });
    return inner;
  },
  syncGallery: function (position) {
    if (UI.getCurrentBreakpoint() === UI.BREAKPOINTS.XS) {
      var $container = $('.Home-gameGridRow');
      var inner = Page.getGalleryInner();
      var max = inner - $container.width();
      if (position == null) {
        position = $container.scrollLeft();
      }
      $('.Home-gameGridScrollLeft').toggleClass('hide', position <= 0);
      $('.Home-gameGridScrollRight').toggleClass('hide', position >= max);
    }
  },
  syncTopStories: function () {
    UI.syncHeight($('.Home-topStoriesGalleryCard'));
    if (UI.getCurrentBreakpoint() >= UI.BREAKPOINTS.XS) {
      UI.syncHeight($('.Home-topStoriesGalleryCard, .Home-topStoriesFeaturedCardContent'), $('.Home-topStoriesFeatured'));
    } else {
      UI.clearHeight($('.Home-topStoriesFeatured'));
    }
  },
  galleryLeft: function () {
    var $container = $('.Home-gameGridRow');
    var inner = Page.getGalleryInner();
    var max = inner - $container.width();
    var dest = Math.max(0, Math.min($container.scrollLeft() - $container.width(), max));
    Page.syncGallery(dest);

    $container.animate({ scrollLeft: dest }, { duration: Gallery.ANIMATION_DURATION, easing: 'easeOutCubic' });
  },
  galleryRight: function () {
    var $container = $('.Home-gameGridRow');
    var inner = Page.getGalleryInner();
    var max = inner - $container.width();
    var dest = Math.max(0, Math.min($container.scrollLeft() + $container.width(), max));
    Page.syncGallery(dest);

    $container.animate({ scrollLeft: dest }, { duration: Gallery.ANIMATION_DURATION, easing: 'easeOutCubic' });
  },
  gameTileHover: function (event) {
    var $root = $(event.target || event.originalEvent.target).closest('.Home-gameGridTileContainer');
    var $gallery = $root.closest('.Gallery-container');
    if ($gallery && $gallery.length) {
      var rect = $root[0].getBoundingClientRect();
      var galleryRect = $gallery[0].getBoundingClientRect();
      var offset = null;
      if (rect.left < galleryRect.left) {
        offset = $gallery.scrollLeft() - (galleryRect.left - rect.left);
      } else if (rect.right > galleryRect.right) {
        offset = $gallery.scrollLeft() + (rect.right - galleryRect.right);
      }
      if (offset !== null) {
        $gallery.animate({
          scrollLeft: offset
        }, {
          duration: Gallery.ANIMATION_DURATION,
          easing: 'easeOutCubic',
          done: function () {
            Gallery.checkLimits($root, offset);
          }
        });
      }
    }
  }
};

UI.register(Page);