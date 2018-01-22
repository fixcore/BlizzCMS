//- Core site Javascript file
var Page = {
  MOMENT_MONTH_FORMAT: 'MMM',
  MOMENT_DAY_MONTH: 'DM',
  MOMENT_MONTH_DAY: 'MD',

  init: function (context) {
    if (!context) {
      $('.Home-gameGridRow').scroll(Page.galleryResize);
      $('.Home-gameGridScrollLeft').click(Page.galleryLeft);
      $('.Home-gameGridScrollRight').click(Page.galleryRight);

      $('.Home-promotedCarouselItem').on('animateout.CarouselItem', Page.topCarouselOut);

      if ($('body').attr('data-device') === 'desktop') {
        $('.Home-gameGridTileContainer').on('mouseover', Page.gameTileHover);
      }
      Page.initMoment();
    }
  },
  initMoment: function () {
    // Use user's locale so we can properly format strings

    var dateFormat = $('.Home-eventsTable').attr('data-date-format');
    var dayFormat = $('.Home-eventsTable').attr('data-day-format');

    // Change the time to the user's local timezone
    $('.Home-eventsTableRow').each(function (index, row) {
      var $row = $(row);
      var isPartialDayEvent = 'true' === $row.attr('data-partial');
      var startString = $row.attr('data-start');
      var startTime = moment(startString).local();
      var endString = $row.attr('data-end');
      var endTime = endString ? moment(endString).local() : null;
      var startTimeMonth = startTime.format(Page.MOMENT_MONTH_FORMAT).toUpperCase();
      var startTimeDay = startTime.format(dayFormat);
      var displayFunctionParameters = {
        $row: $row,
        startTimeMonth: startTimeMonth,
        startTimeDay: startTimeDay,
        startTime: startTime,
        endTime: endTime,
        dateFormat: dateFormat,
        dayFormat: dayFormat
      };

      if (isPartialDayEvent || !endTime) {
        Page.displayPartialOrSingleDayEvent(displayFunctionParameters);
      } else {
        if (endTime.month() !== startTime.month()) {
          // Cross-month display (OCT 31 - NOV 3)
          Page.displayCrossMonthEvent(displayFunctionParameters);
        } else {
          Page.displaySingleDayOrDateRangeWithinSameMonth(displayFunctionParameters);
        }
      }

      var $eventTime = $row.find('.Home-eventTime');
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
    }, 500);
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
  },
  displayPartialOrSingleDayEvent: function (parms) {
    var $heading1 = parms.$row.find('.Home-eventsTableDateHeading1');
    $heading1.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? parms.startTimeMonth : parms.startTimeDay);

    var $heading2 = parms.$row.find('.Home-eventsTableDateHeading2');
    $heading2.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? parms.startTimeDay : parms.startTimeMonth);
  },
  displayCrossMonthEvent: function (parms) {
    var endTimeMonth = parms.endTime.format(Page.MOMENT_MONTH_FORMAT).toUpperCase();
    var endTimeDay = parms.endTime.format(parms.dayFormat);

    var $startDateHeading1 = parms.$row.find('.Home-eventsTableStartDate .Home-eventsTableDateHeading1');
    $startDateHeading1.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? parms.startTimeMonth : parms.startTimeDay);

    var $startDateHeading2 = parms.$row.find('.Home-eventsTableStartDate .Home-eventsTableDateHeading2');
    $startDateHeading2.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? parms.startTimeDay : parms.startTimeMonth);

    var $endDateHeading1 = parms.$row.find('.Home-eventsTableEndDate .Home-eventsTableDateHeading1');
    $endDateHeading1.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? endTimeMonth : endTimeDay);

    var $endDateHeading2 = parms.$row.find('.Home-eventsTableEndDate .Home-eventsTableDateHeading2');
    $endDateHeading2.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? endTimeDay : endTimeMonth);
  },
  displaySingleDayOrDateRangeWithinSameMonth: function (parms) {
    var dateRange = parms.startTimeDay; // Initialize to single day (NOV 3)
    var endTimeDay = parms.endTime.format(parms.dayFormat);

    // Same-month, date-range display (NOV 3-4)
    if (parms.endTime.date() !== parms.startTime.date()) {
      dateRange = parms.startTimeDay + '-' + endTimeDay;
    }

    var $heading1 = parms.$row.find('.Home-eventsTableDateHeading1');
    $heading1.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? parms.startTimeMonth : dateRange);

    var $heading2 = parms.$row.find('.Home-eventsTableDateHeading2');
    $heading2.text(parms.dateFormat === Page.MOMENT_MONTH_DAY ? dateRange : parms.startTimeMonth);
  }
};

UI.register(Page);