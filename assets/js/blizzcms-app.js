UI.afterInitHandlers.push(function (context) {
  if (typeof context === 'undefined') {
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
      var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', window.blizzard['gtmId']);

    !function (i, d, e, n) {
      i[e] = i[e] || {}, i[e][n] || (i[e][n] = function (i, e, n) {
        if (void 0 !== i) {
          e = void 0 === e ? 0 : e, n = void 0 === n ? 0 : n;
          var a = d.createElement("iframe");
          a.width = e, a.height = n, a.hidden = !0, a.src = i, d.body.appendChild(a);
        }
      });
    }(window, document, "analytics", "appendFrame");
  }
});
var Site = {
  init: function (context) {
    if (!context) {

      // WMBLZ-743 - Temporary ICP code solution, replace when Global Nav accepts arbitrary content ( WMBLZ-790 )
      if (blizzard.chinaMode) {
        var $legal = $('.NavbarFooter-legal');
        $legal.append('<div class="NavbarFooter-additionalLegal NavbarFooter-additionalLegalPull"><div class="NavbarFooter-additionalLegalLine">沪ICP备16024552号</div></div>');
        $legal.append('<div class="NavbarFooter-additionalLegal NavbarFooter-additionalLegalPull"><div class="NavbarFooter-additionalLegalLine"><img class="NavbarFooter-additionalLegalCNIcon" src="' + blizzard.chinaModeLogalIconUrl + '" alt=""/>沪公网安备 31011502006954号</div></div>');
      }
    }
  }
};
UI.register(Site);