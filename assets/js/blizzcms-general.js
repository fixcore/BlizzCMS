/*!
 * jQuery JavaScript Library v2.2.4
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-05-20T17:23Z
 */
function polyfill(e, t, n) {
  e[t] || Object.defineProperty(e, t, { enumerable: !1, configurable: !0, writable: !0, value: n });
}function DOMTokenList(e) {
  this.element = e;var t = e.className.trim().split(/\s+/);Array.prototype.push.apply(this, t);
}function CustomEvent(e, t) {
  t = t || { bubbles: !1, cancelable: !1, detail: void 0 };var n = document.createEvent("CustomEvent");return n.initCustomEvent(e, t.bubbles, t.cancelable, t.detail), n;
}function trigger(e) {
  var t;switch (e) {case "resize":
      "function" == typeof UIEvent ? t = new UIEvent(e) : (t = document.createEvent("UIEvent"), t.initUIEvent(e, !0, !0, window, 1));break;default:
      t = new CustomEvent(e);}this.dispatchEvent(t);
}function updateIfFullscreen() {
  var e = window.outerWidth == window.screen.width && window.outerHeight == window.screen.height;document.body.classList[e ? "add" : "remove"]("is-fullscreen");
}function querySelectorAlways(e, t) {
  function n() {
    querySelectorAlways.init();querySelectorAlways.addSelector(e, t);
  }if (!t) throw new Error("querySelectorAlways expects a callback");n();
}function Animation(e) {
  this.fn = e, this.paused = !0, this.timestamp = 0, this.update = this.update.bind(this);
}function SVG(e) {
  if (this.elem = e, this.href = e.getAttribute("xlink:href"), this.href) {
    var t = this.href.indexOf("#");this.url = this.href.substr(0, t), this.id = this.href.substr(t + 1), this.init();
  }
}!function (e, t) {
  "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) {
    if (!e.document) throw new Error("jQuery requires a window with a document");return t(e);
  } : t(e);
}("undefined" != typeof window ? window : this, function (e, t) {
  function n(e) {
    var t = !!e && "length" in e && e.length,
        n = re.type(e);return "function" !== n && !re.isWindow(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e);
  }function i(e, t, n) {
    if (re.isFunction(t)) return re.grep(e, function (e, i) {
      return !!t.call(e, i, e) !== n;
    });if (t.nodeType) return re.grep(e, function (e) {
      return e === t !== n;
    });if ("string" == typeof t) {
      if (me.test(t)) return re.filter(t, e, n);t = re.filter(t, e);
    }return re.grep(e, function (e) {
      return J.call(t, e) > -1 !== n;
    });
  }function o(e, t) {
    for (; (e = e[t]) && 1 !== e.nodeType;);return e;
  }function r(e) {
    var t = {};return re.each(e.match(be) || [], function (e, n) {
      t[n] = !0;
    }), t;
  }function a() {
    Z.removeEventListener("DOMContentLoaded", a), e.removeEventListener("load", a), re.ready();
  }function s() {
    this.expando = re.expando + s.uid++;
  }function u(e, t, n) {
    var i;if (void 0 === n && 1 === e.nodeType) if (i = "data-" + t.replace(De, "-$&").toLowerCase(), n = e.getAttribute(i), "string" == typeof n) {
      try {
        n = "true" === n || "false" !== n && ("null" === n ? null : +n + "" === n ? +n : Ce.test(n) ? re.parseJSON(n) : n);
      } catch (o) {}Ae.set(e, t, n);
    } else n = void 0;return n;
  }function l(e, t, n, i) {
    var o,
        r = 1,
        a = 20,
        s = i ? function () {
      return i.cur();
    } : function () {
      return re.css(e, t, "");
    },
        u = s(),
        l = n && n[3] || (re.cssNumber[t] ? "" : "px"),
        c = (re.cssNumber[t] || "px" !== l && +u) && ke.exec(re.css(e, t));if (c && c[3] !== l) {
      l = l || c[3], n = n || [], c = +u || 1;do r = r || ".5", c /= r, re.style(e, t, c + l); while (r !== (r = s() / u) && 1 !== r && --a);
    }return n && (c = +c || +u || 0, o = n[1] ? c + (n[1] + 1) * n[2] : +n[2], i && (i.unit = l, i.start = c, i.end = o)), o;
  }function c(e, t) {
    var n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [];return void 0 === t || t && re.nodeName(e, t) ? re.merge([e], n) : n;
  }function p(e, t) {
    for (var n = 0, i = e.length; n < i; n++) Se.set(e[n], "globalEval", !t || Se.get(t[n], "globalEval"));
  }function d(e, t, n, i, o) {
    for (var r, a, s, u, l, d, f = t.createDocumentFragment(), h = [], m = 0, v = e.length; m < v; m++) if (r = e[m], r || 0 === r) if ("object" === re.type(r)) re.merge(h, r.nodeType ? [r] : r);else if (He.test(r)) {
      for (a = a || f.appendChild(t.createElement("div")), s = (Le.exec(r) || ["", ""])[1].toLowerCase(), u = Pe[s] || Pe._default, a.innerHTML = u[1] + re.htmlPrefilter(r) + u[2], d = u[0]; d--;) a = a.lastChild;re.merge(h, a.childNodes), a = f.firstChild, a.textContent = "";
    } else h.push(t.createTextNode(r));for (f.textContent = "", m = 0; r = h[m++];) if (i && re.inArray(r, i) > -1) o && o.push(r);else if (l = re.contains(r.ownerDocument, r), a = c(f.appendChild(r), "script"), l && p(a), n) for (d = 0; r = a[d++];) _e.test(r.type || "") && n.push(r);return f;
  }function f() {
    return !0;
  }function h() {
    return !1;
  }function m() {
    try {
      return Z.activeElement;
    } catch (e) {}
  }function v(e, t, n, i, o, r) {
    var a, s;if ("object" == typeof t) {
      "string" != typeof n && (i = i || n, n = void 0);for (s in t) v(e, s, n, i, t[s], r);return e;
    }if (null == i && null == o ? (o = n, i = n = void 0) : null == o && ("string" == typeof n ? (o = i, i = void 0) : (o = i, i = n, n = void 0)), o === !1) o = h;else if (!o) return e;return 1 === r && (a = o, o = function (e) {
      return re().off(e), a.apply(this, arguments);
    }, o.guid = a.guid || (a.guid = re.guid++)), e.each(function () {
      re.event.add(this, t, o, i, n);
    });
  }function g(e, t) {
    return re.nodeName(e, "table") && re.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr") ? e.getElementsByTagName("tbody")[0] || e.appendChild(e.ownerDocument.createElement("tbody")) : e;
  }function y(e) {
    return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e;
  }function w(e) {
    var t = We.exec(e.type);return t ? e.type = t[1] : e.removeAttribute("type"), e;
  }function x(e, t) {
    var n, i, o, r, a, s, u, l;if (1 === t.nodeType) {
      if (Se.hasData(e) && (r = Se.access(e), a = Se.set(t, r), l = r.events)) {
        delete a.handle, a.events = {};for (o in l) for (n = 0, i = l[o].length; n < i; n++) re.event.add(t, o, l[o][n]);
      }Ae.hasData(e) && (s = Ae.access(e), u = re.extend({}, s), Ae.set(t, u));
    }
  }function b(e, t) {
    var n = t.nodeName.toLowerCase();"input" === n && Me.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue);
  }function T(e, t, n, i) {
    t = V.apply([], t);var o,
        r,
        a,
        s,
        u,
        l,
        p = 0,
        f = e.length,
        h = f - 1,
        m = t[0],
        v = re.isFunction(m);if (v || f > 1 && "string" == typeof m && !ie.checkClone && Be.test(m)) return e.each(function (o) {
      var r = e.eq(o);v && (t[0] = m.call(this, o, r.html())), T(r, t, n, i);
    });if (f && (o = d(t, e[0].ownerDocument, !1, e, i), r = o.firstChild, 1 === o.childNodes.length && (o = r), r || i)) {
      for (a = re.map(c(o, "script"), y), s = a.length; p < f; p++) u = o, p !== h && (u = re.clone(u, !0, !0), s && re.merge(a, c(u, "script"))), n.call(e[p], u, p);if (s) for (l = a[a.length - 1].ownerDocument, re.map(a, w), p = 0; p < s; p++) u = a[p], _e.test(u.type || "") && !Se.access(u, "globalEval") && re.contains(l, u) && (u.src ? re._evalUrl && re._evalUrl(u.src) : re.globalEval(u.textContent.replace(Ye, "")));
    }return e;
  }function E(e, t, n) {
    for (var i, o = t ? re.filter(t, e) : e, r = 0; null != (i = o[r]); r++) n || 1 !== i.nodeType || re.cleanData(c(i)), i.parentNode && (n && re.contains(i.ownerDocument, i) && p(c(i, "script")), i.parentNode.removeChild(i));return e;
  }function I(e, t) {
    var n = re(t.createElement(e)).appendTo(t.body),
        i = re.css(n[0], "display");return n.detach(), i;
  }function S(e) {
    var t = Z,
        n = Xe[e];return n || (n = I(e, t), "none" !== n && n || ($e = ($e || re("<iframe frameborder='0' width='0' height='0'/>")).appendTo(t.documentElement), t = $e[0].contentDocument, t.write(), t.close(), n = I(e, t), $e.detach()), Xe[e] = n), n;
  }function A(e, t, n) {
    var i,
        o,
        r,
        a,
        s = e.style;return n = n || Ge(e), a = n ? n.getPropertyValue(t) || n[t] : void 0, "" !== a && void 0 !== a || re.contains(e.ownerDocument, e) || (a = re.style(e, t)), n && !ie.pixelMarginRight() && Ze.test(a) && Ke.test(t) && (i = s.width, o = s.minWidth, r = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = i, s.minWidth = o, s.maxWidth = r), void 0 !== a ? a + "" : a;
  }function C(e, t) {
    return { get: function () {
        return e() ? void delete this.get : (this.get = t).apply(this, arguments);
      } };
  }function D(e) {
    if (e in it) return e;for (var t = e[0].toUpperCase() + e.slice(1), n = nt.length; n--;) if (e = nt[n] + t, e in it) return e;
  }function N(e, t, n) {
    var i = ke.exec(t);return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : t;
  }function k(e, t, n, i, o) {
    for (var r = n === (i ? "border" : "content") ? 4 : "width" === t ? 1 : 0, a = 0; r < 4; r += 2) "margin" === n && (a += re.css(e, n + Oe[r], !0, o)), i ? ("content" === n && (a -= re.css(e, "padding" + Oe[r], !0, o)), "margin" !== n && (a -= re.css(e, "border" + Oe[r] + "Width", !0, o))) : (a += re.css(e, "padding" + Oe[r], !0, o), "padding" !== n && (a += re.css(e, "border" + Oe[r] + "Width", !0, o)));return a;
  }function O(e, t, n) {
    var i = !0,
        o = "width" === t ? e.offsetWidth : e.offsetHeight,
        r = Ge(e),
        a = "border-box" === re.css(e, "boxSizing", !1, r);if (o <= 0 || null == o) {
      if (o = A(e, t, r), (o < 0 || null == o) && (o = e.style[t]), Ze.test(o)) return o;i = a && (ie.boxSizingReliable() || o === e.style[t]), o = parseFloat(o) || 0;
    }return o + k(e, t, n || (a ? "border" : "content"), i, r) + "px";
  }function R(e, t) {
    for (var n, i, o, r = [], a = 0, s = e.length; a < s; a++) i = e[a], i.style && (r[a] = Se.get(i, "olddisplay"), n = i.style.display, t ? (r[a] || "none" !== n || (i.style.display = ""), "" === i.style.display && Re(i) && (r[a] = Se.access(i, "olddisplay", S(i.nodeName)))) : (o = Re(i), "none" === n && o || Se.set(i, "olddisplay", o ? n : re.css(i, "display"))));for (a = 0; a < s; a++) i = e[a], i.style && (t && "none" !== i.style.display && "" !== i.style.display || (i.style.display = t ? r[a] || "" : "none"));return e;
  }function M(e, t, n, i, o) {
    return new M.prototype.init(e, t, n, i, o);
  }function L() {
    return e.setTimeout(function () {
      ot = void 0;
    }), ot = re.now();
  }function _(e, t) {
    var n,
        i = 0,
        o = { height: e };for (t = t ? 1 : 0; i < 4; i += 2 - t) n = Oe[i], o["margin" + n] = o["padding" + n] = e;return t && (o.opacity = o.width = e), o;
  }function P(e, t, n) {
    for (var i, o = (F.tweeners[t] || []).concat(F.tweeners["*"]), r = 0, a = o.length; r < a; r++) if (i = o[r].call(n, t, e)) return i;
  }function H(e, t, n) {
    var i,
        o,
        r,
        a,
        s,
        u,
        l,
        c,
        p = this,
        d = {},
        f = e.style,
        h = e.nodeType && Re(e),
        m = Se.get(e, "fxshow");n.queue || (s = re._queueHooks(e, "fx"), null == s.unqueued && (s.unqueued = 0, u = s.empty.fire, s.empty.fire = function () {
      s.unqueued || u();
    }), s.unqueued++, p.always(function () {
      p.always(function () {
        s.unqueued--, re.queue(e, "fx").length || s.empty.fire();
      });
    })), 1 === e.nodeType && ("height" in t || "width" in t) && (n.overflow = [f.overflow, f.overflowX, f.overflowY], l = re.css(e, "display"), c = "none" === l ? Se.get(e, "olddisplay") || S(e.nodeName) : l, "inline" === c && "none" === re.css(e, "float") && (f.display = "inline-block")), n.overflow && (f.overflow = "hidden", p.always(function () {
      f.overflow = n.overflow[0], f.overflowX = n.overflow[1], f.overflowY = n.overflow[2];
    }));for (i in t) if (o = t[i], at.exec(o)) {
      if (delete t[i], r = r || "toggle" === o, o === (h ? "hide" : "show")) {
        if ("show" !== o || !m || void 0 === m[i]) continue;h = !0;
      }d[i] = m && m[i] || re.style(e, i);
    } else l = void 0;if (re.isEmptyObject(d)) "inline" === ("none" === l ? S(e.nodeName) : l) && (f.display = l);else {
      m ? "hidden" in m && (h = m.hidden) : m = Se.access(e, "fxshow", {}), r && (m.hidden = !h), h ? re(e).show() : p.done(function () {
        re(e).hide();
      }), p.done(function () {
        var t;Se.remove(e, "fxshow");for (t in d) re.style(e, t, d[t]);
      });for (i in d) a = P(h ? m[i] : 0, i, p), i in m || (m[i] = a.start, h && (a.end = a.start, a.start = "width" === i || "height" === i ? 1 : 0));
    }
  }function U(e, t) {
    var n, i, o, r, a;for (n in e) if (i = re.camelCase(n), o = t[i], r = e[n], re.isArray(r) && (o = r[1], r = e[n] = r[0]), n !== i && (e[i] = r, delete e[n]), a = re.cssHooks[i], a && "expand" in a) {
      r = a.expand(r), delete e[i];for (n in r) n in e || (e[n] = r[n], t[n] = o);
    } else t[i] = o;
  }function F(e, t, n) {
    var i,
        o,
        r = 0,
        a = F.prefilters.length,
        s = re.Deferred().always(function () {
      delete u.elem;
    }),
        u = function () {
      if (o) return !1;for (var t = ot || L(), n = Math.max(0, l.startTime + l.duration - t), i = n / l.duration || 0, r = 1 - i, a = 0, u = l.tweens.length; a < u; a++) l.tweens[a].run(r);return s.notifyWith(e, [l, r, n]), r < 1 && u ? n : (s.resolveWith(e, [l]), !1);
    },
        l = s.promise({ elem: e, props: re.extend({}, t), opts: re.extend(!0, { specialEasing: {}, easing: re.easing._default }, n), originalProperties: t, originalOptions: n, startTime: ot || L(), duration: n.duration, tweens: [], createTween: function (t, n) {
        var i = re.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);return l.tweens.push(i), i;
      }, stop: function (t) {
        var n = 0,
            i = t ? l.tweens.length : 0;if (o) return this;for (o = !0; n < i; n++) l.tweens[n].run(1);return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this;
      } }),
        c = l.props;for (U(c, l.opts.specialEasing); r < a; r++) if (i = F.prefilters[r].call(l, e, c, l.opts)) return re.isFunction(i.stop) && (re._queueHooks(l.elem, l.opts.queue).stop = re.proxy(i.stop, i)), i;return re.map(c, P, l), re.isFunction(l.opts.start) && l.opts.start.call(e, l), re.fx.timer(re.extend(u, { elem: e, anim: l, queue: l.opts.queue })), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always);
  }function q(e) {
    return e.getAttribute && e.getAttribute("class") || "";
  }function j(e) {
    return function (t, n) {
      "string" != typeof t && (n = t, t = "*");var i,
          o = 0,
          r = t.toLowerCase().match(be) || [];if (re.isFunction(n)) for (; i = r[o++];) "+" === i[0] ? (i = i.slice(1) || "*", (e[i] = e[i] || []).unshift(n)) : (e[i] = e[i] || []).push(n);
    };
  }function z(e, t, n, i) {
    function o(s) {
      var u;return r[s] = !0, re.each(e[s] || [], function (e, s) {
        var l = s(t, n, i);return "string" != typeof l || a || r[l] ? a ? !(u = l) : void 0 : (t.dataTypes.unshift(l), o(l), !1);
      }), u;
    }var r = {},
        a = e === At;return o(t.dataTypes[0]) || !r["*"] && o("*");
  }function B(e, t) {
    var n,
        i,
        o = re.ajaxSettings.flatOptions || {};for (n in t) void 0 !== t[n] && ((o[n] ? e : i || (i = {}))[n] = t[n]);return i && re.extend(!0, e, i), e;
  }function W(e, t, n) {
    for (var i, o, r, a, s = e.contents, u = e.dataTypes; "*" === u[0];) u.shift(), void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type"));if (i) for (o in s) if (s[o] && s[o].test(i)) {
      u.unshift(o);break;
    }if (u[0] in n) r = u[0];else {
      for (o in n) {
        if (!u[0] || e.converters[o + " " + u[0]]) {
          r = o;break;
        }a || (a = o);
      }r = r || a;
    }if (r) return r !== u[0] && u.unshift(r), n[r];
  }function Y(e, t, n, i) {
    var o,
        r,
        a,
        s,
        u,
        l = {},
        c = e.dataTypes.slice();if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a];for (r = c.shift(); r;) if (e.responseFields[r] && (n[e.responseFields[r]] = t), !u && i && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = r, r = c.shift()) if ("*" === r) r = u;else if ("*" !== u && u !== r) {
      if (a = l[u + " " + r] || l["* " + r], !a) for (o in l) if (s = o.split(" "), s[1] === r && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
        a === !0 ? a = l[o] : l[o] !== !0 && (r = s[0], c.unshift(s[1]));break;
      }if (a !== !0) if (a && e["throws"]) t = a(t);else try {
        t = a(t);
      } catch (p) {
        return { state: "parsererror", error: a ? p : "No conversion from " + u + " to " + r };
      }
    }return { state: "success", data: t };
  }function $(e, t, n, i) {
    var o;if (re.isArray(t)) re.each(t, function (t, o) {
      n || kt.test(e) ? i(e, o) : $(e + "[" + ("object" == typeof o && null != o ? t : "") + "]", o, n, i);
    });else if (n || "object" !== re.type(t)) i(e, t);else for (o in t) $(e + "[" + o + "]", t[o], n, i);
  }function X(e) {
    return re.isWindow(e) ? e : 9 === e.nodeType && e.defaultView;
  }var K = [],
      Z = e.document,
      G = K.slice,
      V = K.concat,
      Q = K.push,
      J = K.indexOf,
      ee = {},
      te = ee.toString,
      ne = ee.hasOwnProperty,
      ie = {},
      oe = "2.2.4",
      re = function (e, t) {
    return new re.fn.init(e, t);
  },
      ae = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
      se = /^-ms-/,
      ue = /-([\da-z])/gi,
      le = function (e, t) {
    return t.toUpperCase();
  };re.fn = re.prototype = { jquery: oe, constructor: re, selector: "", length: 0, toArray: function () {
      return G.call(this);
    }, get: function (e) {
      return null != e ? e < 0 ? this[e + this.length] : this[e] : G.call(this);
    }, pushStack: function (e) {
      var t = re.merge(this.constructor(), e);return t.prevObject = this, t.context = this.context, t;
    }, each: function (e) {
      return re.each(this, e);
    }, map: function (e) {
      return this.pushStack(re.map(this, function (t, n) {
        return e.call(t, n, t);
      }));
    }, slice: function () {
      return this.pushStack(G.apply(this, arguments));
    }, first: function () {
      return this.eq(0);
    }, last: function () {
      return this.eq(-1);
    }, eq: function (e) {
      var t = this.length,
          n = +e + (e < 0 ? t : 0);return this.pushStack(n >= 0 && n < t ? [this[n]] : []);
    }, end: function () {
      return this.prevObject || this.constructor();
    }, push: Q, sort: K.sort, splice: K.splice }, re.extend = re.fn.extend = function () {
    var e,
        t,
        n,
        i,
        o,
        r,
        a = arguments[0] || {},
        s = 1,
        u = arguments.length,
        l = !1;for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || re.isFunction(a) || (a = {}), s === u && (a = this, s--); s < u; s++) if (null != (e = arguments[s])) for (t in e) n = a[t], i = e[t], a !== i && (l && i && (re.isPlainObject(i) || (o = re.isArray(i))) ? (o ? (o = !1, r = n && re.isArray(n) ? n : []) : r = n && re.isPlainObject(n) ? n : {}, a[t] = re.extend(l, r, i)) : void 0 !== i && (a[t] = i));return a;
  }, re.extend({ expando: "jQuery" + (oe + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) {
      throw new Error(e);
    }, noop: function () {}, isFunction: function (e) {
      return "function" === re.type(e);
    }, isArray: Array.isArray, isWindow: function (e) {
      return null != e && e === e.window;
    }, isNumeric: function (e) {
      var t = e && e.toString();return !re.isArray(e) && t - parseFloat(t) + 1 >= 0;
    }, isPlainObject: function (e) {
      var t;if ("object" !== re.type(e) || e.nodeType || re.isWindow(e)) return !1;if (e.constructor && !ne.call(e, "constructor") && !ne.call(e.constructor.prototype || {}, "isPrototypeOf")) return !1;for (t in e);return void 0 === t || ne.call(e, t);
    }, isEmptyObject: function (e) {
      var t;for (t in e) return !1;return !0;
    }, type: function (e) {
      return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? ee[te.call(e)] || "object" : typeof e;
    }, globalEval: function (e) {
      var t,
          n = eval;e = re.trim(e), e && (1 === e.indexOf("use strict") ? (t = Z.createElement("script"), t.text = e, Z.head.appendChild(t).parentNode.removeChild(t)) : n(e));
    }, camelCase: function (e) {
      return e.replace(se, "ms-").replace(ue, le);
    }, nodeName: function (e, t) {
      return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
    }, each: function (e, t) {
      var i,
          o = 0;if (n(e)) for (i = e.length; o < i && t.call(e[o], o, e[o]) !== !1; o++);else for (o in e) if (t.call(e[o], o, e[o]) === !1) break;return e;
    }, trim: function (e) {
      return null == e ? "" : (e + "").replace(ae, "");
    }, makeArray: function (e, t) {
      var i = t || [];return null != e && (n(Object(e)) ? re.merge(i, "string" == typeof e ? [e] : e) : Q.call(i, e)), i;
    }, inArray: function (e, t, n) {
      return null == t ? -1 : J.call(t, e, n);
    }, merge: function (e, t) {
      for (var n = +t.length, i = 0, o = e.length; i < n; i++) e[o++] = t[i];return e.length = o, e;
    }, grep: function (e, t, n) {
      for (var i, o = [], r = 0, a = e.length, s = !n; r < a; r++) i = !t(e[r], r), i !== s && o.push(e[r]);return o;
    }, map: function (e, t, i) {
      var o,
          r,
          a = 0,
          s = [];if (n(e)) for (o = e.length; a < o; a++) r = t(e[a], a, i), null != r && s.push(r);else for (a in e) r = t(e[a], a, i), null != r && s.push(r);return V.apply([], s);
    }, guid: 1, proxy: function (e, t) {
      var n, i, o;if ("string" == typeof t && (n = e[t], t = e, e = n), re.isFunction(e)) return i = G.call(arguments, 2), o = function () {
        return e.apply(t || this, i.concat(G.call(arguments)));
      }, o.guid = e.guid = e.guid || re.guid++, o;
    }, now: Date.now, support: ie }), "function" == typeof Symbol && (re.fn[Symbol.iterator] = K[Symbol.iterator]), re.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
    ee["[object " + t + "]"] = t.toLowerCase();
  });var ce = /*!
              * Sizzle CSS Selector Engine v2.2.1
              * http://sizzlejs.com/
              *
              * Copyright jQuery Foundation and other contributors
              * Released under the MIT license
              * http://jquery.org/license
              *
              * Date: 2015-10-17
              */
  function (e) {
    function t(e, t, n, i) {
      var o,
          r,
          a,
          s,
          u,
          l,
          p,
          f,
          h = t && t.ownerDocument,
          m = t ? t.nodeType : 9;if (n = n || [], "string" != typeof e || !e || 1 !== m && 9 !== m && 11 !== m) return n;if (!i && ((t ? t.ownerDocument || t : q) !== R && O(t), t = t || R, L)) {
        if (11 !== m && (l = ge.exec(e))) if (o = l[1]) {
          if (9 === m) {
            if (!(a = t.getElementById(o))) return n;if (a.id === o) return n.push(a), n;
          } else if (h && (a = h.getElementById(o)) && U(t, a) && a.id === o) return n.push(a), n;
        } else {
          if (l[2]) return Q.apply(n, t.getElementsByTagName(e)), n;if ((o = l[3]) && b.getElementsByClassName && t.getElementsByClassName) return Q.apply(n, t.getElementsByClassName(o)), n;
        }if (b.qsa && !Y[e + " "] && (!_ || !_.test(e))) {
          if (1 !== m) h = t, f = e;else if ("object" !== t.nodeName.toLowerCase()) {
            for ((s = t.getAttribute("id")) ? s = s.replace(we, "\\$&") : t.setAttribute("id", s = F), p = S(e), r = p.length, u = de.test(s) ? "#" + s : "[id='" + s + "']"; r--;) p[r] = u + " " + d(p[r]);f = p.join(","), h = ye.test(e) && c(t.parentNode) || t;
          }if (f) try {
            return Q.apply(n, h.querySelectorAll(f)), n;
          } catch (v) {} finally {
            s === F && t.removeAttribute("id");
          }
        }
      }return C(e.replace(se, "$1"), t, n, i);
    }function n() {
      function e(n, i) {
        return t.push(n + " ") > T.cacheLength && delete e[t.shift()], e[n + " "] = i;
      }var t = [];return e;
    }function i(e) {
      return e[F] = !0, e;
    }function o(e) {
      var t = R.createElement("div");try {
        return !!e(t);
      } catch (n) {
        return !1;
      } finally {
        t.parentNode && t.parentNode.removeChild(t), t = null;
      }
    }function r(e, t) {
      for (var n = e.split("|"), i = n.length; i--;) T.attrHandle[n[i]] = t;
    }function a(e, t) {
      var n = t && e,
          i = n && 1 === e.nodeType && 1 === t.nodeType && (~t.sourceIndex || X) - (~e.sourceIndex || X);if (i) return i;if (n) for (; n = n.nextSibling;) if (n === t) return -1;return e ? 1 : -1;
    }function s(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();return "input" === n && t.type === e;
      };
    }function u(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();return ("input" === n || "button" === n) && t.type === e;
      };
    }function l(e) {
      return i(function (t) {
        return t = +t, i(function (n, i) {
          for (var o, r = e([], n.length, t), a = r.length; a--;) n[o = r[a]] && (n[o] = !(i[o] = n[o]));
        });
      });
    }function c(e) {
      return e && "undefined" != typeof e.getElementsByTagName && e;
    }function p() {}function d(e) {
      for (var t = 0, n = e.length, i = ""; t < n; t++) i += e[t].value;return i;
    }function f(e, t, n) {
      var i = t.dir,
          o = n && "parentNode" === i,
          r = z++;return t.first ? function (t, n, r) {
        for (; t = t[i];) if (1 === t.nodeType || o) return e(t, n, r);
      } : function (t, n, a) {
        var s,
            u,
            l,
            c = [j, r];if (a) {
          for (; t = t[i];) if ((1 === t.nodeType || o) && e(t, n, a)) return !0;
        } else for (; t = t[i];) if (1 === t.nodeType || o) {
          if (l = t[F] || (t[F] = {}), u = l[t.uniqueID] || (l[t.uniqueID] = {}), (s = u[i]) && s[0] === j && s[1] === r) return c[2] = s[2];if (u[i] = c, c[2] = e(t, n, a)) return !0;
        }
      };
    }function h(e) {
      return e.length > 1 ? function (t, n, i) {
        for (var o = e.length; o--;) if (!e[o](t, n, i)) return !1;return !0;
      } : e[0];
    }function m(e, n, i) {
      for (var o = 0, r = n.length; o < r; o++) t(e, n[o], i);return i;
    }function v(e, t, n, i, o) {
      for (var r, a = [], s = 0, u = e.length, l = null != t; s < u; s++) (r = e[s]) && (n && !n(r, i, o) || (a.push(r), l && t.push(s)));return a;
    }function g(e, t, n, o, r, a) {
      return o && !o[F] && (o = g(o)), r && !r[F] && (r = g(r, a)), i(function (i, a, s, u) {
        var l,
            c,
            p,
            d = [],
            f = [],
            h = a.length,
            g = i || m(t || "*", s.nodeType ? [s] : s, []),
            y = !e || !i && t ? g : v(g, d, e, s, u),
            w = n ? r || (i ? e : h || o) ? [] : a : y;if (n && n(y, w, s, u), o) for (l = v(w, f), o(l, [], s, u), c = l.length; c--;) (p = l[c]) && (w[f[c]] = !(y[f[c]] = p));if (i) {
          if (r || e) {
            if (r) {
              for (l = [], c = w.length; c--;) (p = w[c]) && l.push(y[c] = p);r(null, w = [], l, u);
            }for (c = w.length; c--;) (p = w[c]) && (l = r ? ee(i, p) : d[c]) > -1 && (i[l] = !(a[l] = p));
          }
        } else w = v(w === a ? w.splice(h, w.length) : w), r ? r(null, a, w, u) : Q.apply(a, w);
      });
    }function y(e) {
      for (var t, n, i, o = e.length, r = T.relative[e[0].type], a = r || T.relative[" "], s = r ? 1 : 0, u = f(function (e) {
        return e === t;
      }, a, !0), l = f(function (e) {
        return ee(t, e) > -1;
      }, a, !0), c = [function (e, n, i) {
        var o = !r && (i || n !== D) || ((t = n).nodeType ? u(e, n, i) : l(e, n, i));return t = null, o;
      }]; s < o; s++) if (n = T.relative[e[s].type]) c = [f(h(c), n)];else {
        if (n = T.filter[e[s].type].apply(null, e[s].matches), n[F]) {
          for (i = ++s; i < o && !T.relative[e[i].type]; i++);return g(s > 1 && h(c), s > 1 && d(e.slice(0, s - 1).concat({ value: " " === e[s - 2].type ? "*" : "" })).replace(se, "$1"), n, s < i && y(e.slice(s, i)), i < o && y(e = e.slice(i)), i < o && d(e));
        }c.push(n);
      }return h(c);
    }function w(e, n) {
      var o = n.length > 0,
          r = e.length > 0,
          a = function (i, a, s, u, l) {
        var c,
            p,
            d,
            f = 0,
            h = "0",
            m = i && [],
            g = [],
            y = D,
            w = i || r && T.find.TAG("*", l),
            x = j += null == y ? 1 : Math.random() || .1,
            b = w.length;for (l && (D = a === R || a || l); h !== b && null != (c = w[h]); h++) {
          if (r && c) {
            for (p = 0, a || c.ownerDocument === R || (O(c), s = !L); d = e[p++];) if (d(c, a || R, s)) {
              u.push(c);break;
            }l && (j = x);
          }o && ((c = !d && c) && f--, i && m.push(c));
        }if (f += h, o && h !== f) {
          for (p = 0; d = n[p++];) d(m, g, a, s);if (i) {
            if (f > 0) for (; h--;) m[h] || g[h] || (g[h] = G.call(u));g = v(g);
          }Q.apply(u, g), l && !i && g.length > 0 && f + n.length > 1 && t.uniqueSort(u);
        }return l && (j = x, D = y), m;
      };return o ? i(a) : a;
    }var x,
        b,
        T,
        E,
        I,
        S,
        A,
        C,
        D,
        N,
        k,
        O,
        R,
        M,
        L,
        _,
        P,
        H,
        U,
        F = "sizzle" + 1 * new Date(),
        q = e.document,
        j = 0,
        z = 0,
        B = n(),
        W = n(),
        Y = n(),
        $ = function (e, t) {
      return e === t && (k = !0), 0;
    },
        X = 1 << 31,
        K = {}.hasOwnProperty,
        Z = [],
        G = Z.pop,
        V = Z.push,
        Q = Z.push,
        J = Z.slice,
        ee = function (e, t) {
      for (var n = 0, i = e.length; n < i; n++) if (e[n] === t) return n;return -1;
    },
        te = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
        ne = "[\\x20\\t\\r\\n\\f]",
        ie = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
        oe = "\\[" + ne + "*(" + ie + ")(?:" + ne + "*([*^$|!~]?=)" + ne + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + ie + "))|)" + ne + "*\\]",
        re = ":(" + ie + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + oe + ")*)|.*)\\)|)",
        ae = new RegExp(ne + "+", "g"),
        se = new RegExp("^" + ne + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ne + "+$", "g"),
        ue = new RegExp("^" + ne + "*," + ne + "*"),
        le = new RegExp("^" + ne + "*([>+~]|" + ne + ")" + ne + "*"),
        ce = new RegExp("=" + ne + "*([^\\]'\"]*?)" + ne + "*\\]", "g"),
        pe = new RegExp(re),
        de = new RegExp("^" + ie + "$"),
        fe = { ID: new RegExp("^#(" + ie + ")"), CLASS: new RegExp("^\\.(" + ie + ")"), TAG: new RegExp("^(" + ie + "|[*])"), ATTR: new RegExp("^" + oe), PSEUDO: new RegExp("^" + re), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ne + "*(even|odd|(([+-]|)(\\d*)n|)" + ne + "*(?:([+-]|)" + ne + "*(\\d+)|))" + ne + "*\\)|)", "i"), bool: new RegExp("^(?:" + te + ")$", "i"), needsContext: new RegExp("^" + ne + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ne + "*((?:-\\d)?\\d*)" + ne + "*\\)|)(?=[^-]|$)", "i") },
        he = /^(?:input|select|textarea|button)$/i,
        me = /^h\d$/i,
        ve = /^[^{]+\{\s*\[native \w/,
        ge = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
        ye = /[+~]/,
        we = /'|\\/g,
        xe = new RegExp("\\\\([\\da-f]{1,6}" + ne + "?|(" + ne + ")|.)", "ig"),
        be = function (e, t, n) {
      var i = "0x" + t - 65536;return i !== i || n ? t : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320);
    },
        Te = function () {
      O();
    };try {
      Q.apply(Z = J.call(q.childNodes), q.childNodes), Z[q.childNodes.length].nodeType;
    } catch (Ee) {
      Q = { apply: Z.length ? function (e, t) {
          V.apply(e, J.call(t));
        } : function (e, t) {
          for (var n = e.length, i = 0; e[n++] = t[i++];);e.length = n - 1;
        } };
    }b = t.support = {}, I = t.isXML = function (e) {
      var t = e && (e.ownerDocument || e).documentElement;return !!t && "HTML" !== t.nodeName;
    }, O = t.setDocument = function (e) {
      var t,
          n,
          i = e ? e.ownerDocument || e : q;return i !== R && 9 === i.nodeType && i.documentElement ? (R = i, M = R.documentElement, L = !I(R), (n = R.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", Te, !1) : n.attachEvent && n.attachEvent("onunload", Te)), b.attributes = o(function (e) {
        return e.className = "i", !e.getAttribute("className");
      }), b.getElementsByTagName = o(function (e) {
        return e.appendChild(R.createComment("")), !e.getElementsByTagName("*").length;
      }), b.getElementsByClassName = ve.test(R.getElementsByClassName), b.getById = o(function (e) {
        return M.appendChild(e).id = F, !R.getElementsByName || !R.getElementsByName(F).length;
      }), b.getById ? (T.find.ID = function (e, t) {
        if ("undefined" != typeof t.getElementById && L) {
          var n = t.getElementById(e);return n ? [n] : [];
        }
      }, T.filter.ID = function (e) {
        var t = e.replace(xe, be);return function (e) {
          return e.getAttribute("id") === t;
        };
      }) : (delete T.find.ID, T.filter.ID = function (e) {
        var t = e.replace(xe, be);return function (e) {
          var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");return n && n.value === t;
        };
      }), T.find.TAG = b.getElementsByTagName ? function (e, t) {
        return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : b.qsa ? t.querySelectorAll(e) : void 0;
      } : function (e, t) {
        var n,
            i = [],
            o = 0,
            r = t.getElementsByTagName(e);if ("*" === e) {
          for (; n = r[o++];) 1 === n.nodeType && i.push(n);return i;
        }return r;
      }, T.find.CLASS = b.getElementsByClassName && function (e, t) {
        if ("undefined" != typeof t.getElementsByClassName && L) return t.getElementsByClassName(e);
      }, P = [], _ = [], (b.qsa = ve.test(R.querySelectorAll)) && (o(function (e) {
        M.appendChild(e).innerHTML = "<a id='" + F + "'></a><select id='" + F + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && _.push("[*^$]=" + ne + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || _.push("\\[" + ne + "*(?:value|" + te + ")"), e.querySelectorAll("[id~=" + F + "-]").length || _.push("~="), e.querySelectorAll(":checked").length || _.push(":checked"), e.querySelectorAll("a#" + F + "+*").length || _.push(".#.+[+~]");
      }), o(function (e) {
        var t = R.createElement("input");t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && _.push("name" + ne + "*[*^$|!~]?="), e.querySelectorAll(":enabled").length || _.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), _.push(",.*:");
      })), (b.matchesSelector = ve.test(H = M.matches || M.webkitMatchesSelector || M.mozMatchesSelector || M.oMatchesSelector || M.msMatchesSelector)) && o(function (e) {
        b.disconnectedMatch = H.call(e, "div"), H.call(e, "[s!='']:x"), P.push("!=", re);
      }), _ = _.length && new RegExp(_.join("|")), P = P.length && new RegExp(P.join("|")), t = ve.test(M.compareDocumentPosition), U = t || ve.test(M.contains) ? function (e, t) {
        var n = 9 === e.nodeType ? e.documentElement : e,
            i = t && t.parentNode;return e === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(i)));
      } : function (e, t) {
        if (t) for (; t = t.parentNode;) if (t === e) return !0;return !1;
      }, $ = t ? function (e, t) {
        if (e === t) return k = !0, 0;var n = !e.compareDocumentPosition - !t.compareDocumentPosition;return n ? n : (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & n || !b.sortDetached && t.compareDocumentPosition(e) === n ? e === R || e.ownerDocument === q && U(q, e) ? -1 : t === R || t.ownerDocument === q && U(q, t) ? 1 : N ? ee(N, e) - ee(N, t) : 0 : 4 & n ? -1 : 1);
      } : function (e, t) {
        if (e === t) return k = !0, 0;var n,
            i = 0,
            o = e.parentNode,
            r = t.parentNode,
            s = [e],
            u = [t];if (!o || !r) return e === R ? -1 : t === R ? 1 : o ? -1 : r ? 1 : N ? ee(N, e) - ee(N, t) : 0;if (o === r) return a(e, t);for (n = e; n = n.parentNode;) s.unshift(n);for (n = t; n = n.parentNode;) u.unshift(n);for (; s[i] === u[i];) i++;return i ? a(s[i], u[i]) : s[i] === q ? -1 : u[i] === q ? 1 : 0;
      }, R) : R;
    }, t.matches = function (e, n) {
      return t(e, null, null, n);
    }, t.matchesSelector = function (e, n) {
      if ((e.ownerDocument || e) !== R && O(e), n = n.replace(ce, "='$1']"), b.matchesSelector && L && !Y[n + " "] && (!P || !P.test(n)) && (!_ || !_.test(n))) try {
        var i = H.call(e, n);if (i || b.disconnectedMatch || e.document && 11 !== e.document.nodeType) return i;
      } catch (o) {}return t(n, R, null, [e]).length > 0;
    }, t.contains = function (e, t) {
      return (e.ownerDocument || e) !== R && O(e), U(e, t);
    }, t.attr = function (e, t) {
      (e.ownerDocument || e) !== R && O(e);var n = T.attrHandle[t.toLowerCase()],
          i = n && K.call(T.attrHandle, t.toLowerCase()) ? n(e, t, !L) : void 0;return void 0 !== i ? i : b.attributes || !L ? e.getAttribute(t) : (i = e.getAttributeNode(t)) && i.specified ? i.value : null;
    }, t.error = function (e) {
      throw new Error("Syntax error, unrecognized expression: " + e);
    }, t.uniqueSort = function (e) {
      var t,
          n = [],
          i = 0,
          o = 0;if (k = !b.detectDuplicates, N = !b.sortStable && e.slice(0), e.sort($), k) {
        for (; t = e[o++];) t === e[o] && (i = n.push(o));for (; i--;) e.splice(n[i], 1);
      }return N = null, e;
    }, E = t.getText = function (e) {
      var t,
          n = "",
          i = 0,
          o = e.nodeType;if (o) {
        if (1 === o || 9 === o || 11 === o) {
          if ("string" == typeof e.textContent) return e.textContent;for (e = e.firstChild; e; e = e.nextSibling) n += E(e);
        } else if (3 === o || 4 === o) return e.nodeValue;
      } else for (; t = e[i++];) n += E(t);return n;
    }, T = t.selectors = { cacheLength: 50, createPseudo: i, match: fe, attrHandle: {}, find: {}, relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } }, preFilter: { ATTR: function (e) {
          return e[1] = e[1].replace(xe, be), e[3] = (e[3] || e[4] || e[5] || "").replace(xe, be), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4);
        }, CHILD: function (e) {
          return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]), e;
        }, PSEUDO: function (e) {
          var t,
              n = !e[6] && e[2];return fe.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && pe.test(n) && (t = S(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3));
        } }, filter: { TAG: function (e) {
          var t = e.replace(xe, be).toLowerCase();return "*" === e ? function () {
            return !0;
          } : function (e) {
            return e.nodeName && e.nodeName.toLowerCase() === t;
          };
        }, CLASS: function (e) {
          var t = B[e + " "];return t || (t = new RegExp("(^|" + ne + ")" + e + "(" + ne + "|$)")) && B(e, function (e) {
            return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "");
          });
        }, ATTR: function (e, n, i) {
          return function (o) {
            var r = t.attr(o, e);return null == r ? "!=" === n : !n || (r += "", "=" === n ? r === i : "!=" === n ? r !== i : "^=" === n ? i && 0 === r.indexOf(i) : "*=" === n ? i && r.indexOf(i) > -1 : "$=" === n ? i && r.slice(-i.length) === i : "~=" === n ? (" " + r.replace(ae, " ") + " ").indexOf(i) > -1 : "|=" === n && (r === i || r.slice(0, i.length + 1) === i + "-"));
          };
        }, CHILD: function (e, t, n, i, o) {
          var r = "nth" !== e.slice(0, 3),
              a = "last" !== e.slice(-4),
              s = "of-type" === t;return 1 === i && 0 === o ? function (e) {
            return !!e.parentNode;
          } : function (t, n, u) {
            var l,
                c,
                p,
                d,
                f,
                h,
                m = r !== a ? "nextSibling" : "previousSibling",
                v = t.parentNode,
                g = s && t.nodeName.toLowerCase(),
                y = !u && !s,
                w = !1;if (v) {
              if (r) {
                for (; m;) {
                  for (d = t; d = d[m];) if (s ? d.nodeName.toLowerCase() === g : 1 === d.nodeType) return !1;h = m = "only" === e && !h && "nextSibling";
                }return !0;
              }if (h = [a ? v.firstChild : v.lastChild], a && y) {
                for (d = v, p = d[F] || (d[F] = {}), c = p[d.uniqueID] || (p[d.uniqueID] = {}), l = c[e] || [], f = l[0] === j && l[1], w = f && l[2], d = f && v.childNodes[f]; d = ++f && d && d[m] || (w = f = 0) || h.pop();) if (1 === d.nodeType && ++w && d === t) {
                  c[e] = [j, f, w];break;
                }
              } else if (y && (d = t, p = d[F] || (d[F] = {}), c = p[d.uniqueID] || (p[d.uniqueID] = {}), l = c[e] || [], f = l[0] === j && l[1], w = f), w === !1) for (; (d = ++f && d && d[m] || (w = f = 0) || h.pop()) && ((s ? d.nodeName.toLowerCase() !== g : 1 !== d.nodeType) || !++w || (y && (p = d[F] || (d[F] = {}), c = p[d.uniqueID] || (p[d.uniqueID] = {}), c[e] = [j, w]), d !== t)););return w -= o, w === i || w % i === 0 && w / i >= 0;
            }
          };
        }, PSEUDO: function (e, n) {
          var o,
              r = T.pseudos[e] || T.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);return r[F] ? r(n) : r.length > 1 ? (o = [e, e, "", n], T.setFilters.hasOwnProperty(e.toLowerCase()) ? i(function (e, t) {
            for (var i, o = r(e, n), a = o.length; a--;) i = ee(e, o[a]), e[i] = !(t[i] = o[a]);
          }) : function (e) {
            return r(e, 0, o);
          }) : r;
        } }, pseudos: { not: i(function (e) {
          var t = [],
              n = [],
              o = A(e.replace(se, "$1"));return o[F] ? i(function (e, t, n, i) {
            for (var r, a = o(e, null, i, []), s = e.length; s--;) (r = a[s]) && (e[s] = !(t[s] = r));
          }) : function (e, i, r) {
            return t[0] = e, o(t, null, r, n), t[0] = null, !n.pop();
          };
        }), has: i(function (e) {
          return function (n) {
            return t(e, n).length > 0;
          };
        }), contains: i(function (e) {
          return e = e.replace(xe, be), function (t) {
            return (t.textContent || t.innerText || E(t)).indexOf(e) > -1;
          };
        }), lang: i(function (e) {
          return de.test(e || "") || t.error("unsupported lang: " + e), e = e.replace(xe, be).toLowerCase(), function (t) {
            var n;do if (n = L ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return n = n.toLowerCase(), n === e || 0 === n.indexOf(e + "-"); while ((t = t.parentNode) && 1 === t.nodeType);return !1;
          };
        }), target: function (t) {
          var n = e.location && e.location.hash;return n && n.slice(1) === t.id;
        }, root: function (e) {
          return e === M;
        }, focus: function (e) {
          return e === R.activeElement && (!R.hasFocus || R.hasFocus()) && !!(e.type || e.href || ~e.tabIndex);
        }, enabled: function (e) {
          return e.disabled === !1;
        }, disabled: function (e) {
          return e.disabled === !0;
        }, checked: function (e) {
          var t = e.nodeName.toLowerCase();return "input" === t && !!e.checked || "option" === t && !!e.selected;
        }, selected: function (e) {
          return e.parentNode && e.parentNode.selectedIndex, e.selected === !0;
        }, empty: function (e) {
          for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;return !0;
        }, parent: function (e) {
          return !T.pseudos.empty(e);
        }, header: function (e) {
          return me.test(e.nodeName);
        }, input: function (e) {
          return he.test(e.nodeName);
        }, button: function (e) {
          var t = e.nodeName.toLowerCase();return "input" === t && "button" === e.type || "button" === t;
        }, text: function (e) {
          var t;return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase());
        }, first: l(function () {
          return [0];
        }), last: l(function (e, t) {
          return [t - 1];
        }), eq: l(function (e, t, n) {
          return [n < 0 ? n + t : n];
        }), even: l(function (e, t) {
          for (var n = 0; n < t; n += 2) e.push(n);return e;
        }), odd: l(function (e, t) {
          for (var n = 1; n < t; n += 2) e.push(n);return e;
        }), lt: l(function (e, t, n) {
          for (var i = n < 0 ? n + t : n; --i >= 0;) e.push(i);return e;
        }), gt: l(function (e, t, n) {
          for (var i = n < 0 ? n + t : n; ++i < t;) e.push(i);return e;
        }) } }, T.pseudos.nth = T.pseudos.eq;for (x in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) T.pseudos[x] = s(x);for (x in { submit: !0, reset: !0 }) T.pseudos[x] = u(x);return p.prototype = T.filters = T.pseudos, T.setFilters = new p(), S = t.tokenize = function (e, n) {
      var i,
          o,
          r,
          a,
          s,
          u,
          l,
          c = W[e + " "];if (c) return n ? 0 : c.slice(0);for (s = e, u = [], l = T.preFilter; s;) {
        i && !(o = ue.exec(s)) || (o && (s = s.slice(o[0].length) || s), u.push(r = [])), i = !1, (o = le.exec(s)) && (i = o.shift(), r.push({ value: i, type: o[0].replace(se, " ") }), s = s.slice(i.length));for (a in T.filter) !(o = fe[a].exec(s)) || l[a] && !(o = l[a](o)) || (i = o.shift(), r.push({ value: i, type: a, matches: o }), s = s.slice(i.length));if (!i) break;
      }return n ? s.length : s ? t.error(e) : W(e, u).slice(0);
    }, A = t.compile = function (e, t) {
      var n,
          i = [],
          o = [],
          r = Y[e + " "];if (!r) {
        for (t || (t = S(e)), n = t.length; n--;) r = y(t[n]), r[F] ? i.push(r) : o.push(r);r = Y(e, w(o, i)), r.selector = e;
      }return r;
    }, C = t.select = function (e, t, n, i) {
      var o,
          r,
          a,
          s,
          u,
          l = "function" == typeof e && e,
          p = !i && S(e = l.selector || e);if (n = n || [], 1 === p.length) {
        if (r = p[0] = p[0].slice(0), r.length > 2 && "ID" === (a = r[0]).type && b.getById && 9 === t.nodeType && L && T.relative[r[1].type]) {
          if (t = (T.find.ID(a.matches[0].replace(xe, be), t) || [])[0], !t) return n;l && (t = t.parentNode), e = e.slice(r.shift().value.length);
        }for (o = fe.needsContext.test(e) ? 0 : r.length; o-- && (a = r[o], !T.relative[s = a.type]);) if ((u = T.find[s]) && (i = u(a.matches[0].replace(xe, be), ye.test(r[0].type) && c(t.parentNode) || t))) {
          if (r.splice(o, 1), e = i.length && d(r), !e) return Q.apply(n, i), n;break;
        }
      }return (l || A(e, p))(i, t, !L, n, !t || ye.test(e) && c(t.parentNode) || t), n;
    }, b.sortStable = F.split("").sort($).join("") === F, b.detectDuplicates = !!k, O(), b.sortDetached = o(function (e) {
      return 1 & e.compareDocumentPosition(R.createElement("div"));
    }), o(function (e) {
      return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href");
    }) || r("type|href|height|width", function (e, t, n) {
      if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
    }), b.attributes && o(function (e) {
      return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value");
    }) || r("value", function (e, t, n) {
      if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue;
    }), o(function (e) {
      return null == e.getAttribute("disabled");
    }) || r(te, function (e, t, n) {
      var i;if (!n) return e[t] === !0 ? t.toLowerCase() : (i = e.getAttributeNode(t)) && i.specified ? i.value : null;
    }), t;
  }(e);re.find = ce, re.expr = ce.selectors, re.expr[":"] = re.expr.pseudos, re.uniqueSort = re.unique = ce.uniqueSort, re.text = ce.getText, re.isXMLDoc = ce.isXML, re.contains = ce.contains;var pe = function (e, t, n) {
    for (var i = [], o = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;) if (1 === e.nodeType) {
      if (o && re(e).is(n)) break;i.push(e);
    }return i;
  },
      de = function (e, t) {
    for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);return n;
  },
      fe = re.expr.match.needsContext,
      he = /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,
      me = /^.[^:#\[\.,]*$/;re.filter = function (e, t, n) {
    var i = t[0];return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === i.nodeType ? re.find.matchesSelector(i, e) ? [i] : [] : re.find.matches(e, re.grep(t, function (e) {
      return 1 === e.nodeType;
    }));
  }, re.fn.extend({ find: function (e) {
      var t,
          n = this.length,
          i = [],
          o = this;if ("string" != typeof e) return this.pushStack(re(e).filter(function () {
        for (t = 0; t < n; t++) if (re.contains(o[t], this)) return !0;
      }));for (t = 0; t < n; t++) re.find(e, o[t], i);return i = this.pushStack(n > 1 ? re.unique(i) : i), i.selector = this.selector ? this.selector + " " + e : e, i;
    }, filter: function (e) {
      return this.pushStack(i(this, e || [], !1));
    }, not: function (e) {
      return this.pushStack(i(this, e || [], !0));
    }, is: function (e) {
      return !!i(this, "string" == typeof e && fe.test(e) ? re(e) : e || [], !1).length;
    } });var ve,
      ge = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
      ye = re.fn.init = function (e, t, n) {
    var i, o;if (!e) return this;if (n = n || ve, "string" == typeof e) {
      if (i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : ge.exec(e), !i || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);if (i[1]) {
        if (t = t instanceof re ? t[0] : t, re.merge(this, re.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : Z, !0)), he.test(i[1]) && re.isPlainObject(t)) for (i in t) re.isFunction(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);return this;
      }return o = Z.getElementById(i[2]), o && o.parentNode && (this.length = 1, this[0] = o), this.context = Z, this.selector = e, this;
    }return e.nodeType ? (this.context = this[0] = e, this.length = 1, this) : re.isFunction(e) ? void 0 !== n.ready ? n.ready(e) : e(re) : (void 0 !== e.selector && (this.selector = e.selector, this.context = e.context), re.makeArray(e, this));
  };ye.prototype = re.fn, ve = re(Z);var we = /^(?:parents|prev(?:Until|All))/,
      xe = { children: !0, contents: !0, next: !0, prev: !0 };re.fn.extend({ has: function (e) {
      var t = re(e, this),
          n = t.length;return this.filter(function () {
        for (var e = 0; e < n; e++) if (re.contains(this, t[e])) return !0;
      });
    }, closest: function (e, t) {
      for (var n, i = 0, o = this.length, r = [], a = fe.test(e) || "string" != typeof e ? re(e, t || this.context) : 0; i < o; i++) for (n = this[i]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && re.find.matchesSelector(n, e))) {
        r.push(n);break;
      }return this.pushStack(r.length > 1 ? re.uniqueSort(r) : r);
    }, index: function (e) {
      return e ? "string" == typeof e ? J.call(re(e), this[0]) : J.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
    }, add: function (e, t) {
      return this.pushStack(re.uniqueSort(re.merge(this.get(), re(e, t))));
    }, addBack: function (e) {
      return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
    } }), re.each({ parent: function (e) {
      var t = e.parentNode;return t && 11 !== t.nodeType ? t : null;
    }, parents: function (e) {
      return pe(e, "parentNode");
    }, parentsUntil: function (e, t, n) {
      return pe(e, "parentNode", n);
    }, next: function (e) {
      return o(e, "nextSibling");
    }, prev: function (e) {
      return o(e, "previousSibling");
    }, nextAll: function (e) {
      return pe(e, "nextSibling");
    }, prevAll: function (e) {
      return pe(e, "previousSibling");
    }, nextUntil: function (e, t, n) {
      return pe(e, "nextSibling", n);
    }, prevUntil: function (e, t, n) {
      return pe(e, "previousSibling", n);
    }, siblings: function (e) {
      return de((e.parentNode || {}).firstChild, e);
    }, children: function (e) {
      return de(e.firstChild);
    }, contents: function (e) {
      return e.contentDocument || re.merge([], e.childNodes);
    } }, function (e, t) {
    re.fn[e] = function (n, i) {
      var o = re.map(this, t, n);return "Until" !== e.slice(-5) && (i = n), i && "string" == typeof i && (o = re.filter(i, o)), this.length > 1 && (xe[e] || re.uniqueSort(o), we.test(e) && o.reverse()), this.pushStack(o);
    };
  });var be = /\S+/g;re.Callbacks = function (e) {
    e = "string" == typeof e ? r(e) : re.extend({}, e);var t,
        n,
        i,
        o,
        a = [],
        s = [],
        u = -1,
        l = function () {
      for (o = e.once, i = t = !0; s.length; u = -1) for (n = s.shift(); ++u < a.length;) a[u].apply(n[0], n[1]) === !1 && e.stopOnFalse && (u = a.length, n = !1);e.memory || (n = !1), t = !1, o && (a = n ? [] : "");
    },
        c = { add: function () {
        return a && (n && !t && (u = a.length - 1, s.push(n)), function i(t) {
          re.each(t, function (t, n) {
            re.isFunction(n) ? e.unique && c.has(n) || a.push(n) : n && n.length && "string" !== re.type(n) && i(n);
          });
        }(arguments), n && !t && l()), this;
      }, remove: function () {
        return re.each(arguments, function (e, t) {
          for (var n; (n = re.inArray(t, a, n)) > -1;) a.splice(n, 1), n <= u && u--;
        }), this;
      }, has: function (e) {
        return e ? re.inArray(e, a) > -1 : a.length > 0;
      }, empty: function () {
        return a && (a = []), this;
      }, disable: function () {
        return o = s = [], a = n = "", this;
      }, disabled: function () {
        return !a;
      }, lock: function () {
        return o = s = [], n || (a = n = ""), this;
      }, locked: function () {
        return !!o;
      }, fireWith: function (e, n) {
        return o || (n = n || [], n = [e, n.slice ? n.slice() : n], s.push(n), t || l()), this;
      }, fire: function () {
        return c.fireWith(this, arguments), this;
      }, fired: function () {
        return !!i;
      } };return c;
  }, re.extend({ Deferred: function (e) {
      var t = [["resolve", "done", re.Callbacks("once memory"), "resolved"], ["reject", "fail", re.Callbacks("once memory"), "rejected"], ["notify", "progress", re.Callbacks("memory")]],
          n = "pending",
          i = { state: function () {
          return n;
        }, always: function () {
          return o.done(arguments).fail(arguments), this;
        }, then: function () {
          var e = arguments;return re.Deferred(function (n) {
            re.each(t, function (t, r) {
              var a = re.isFunction(e[t]) && e[t];o[r[1]](function () {
                var e = a && a.apply(this, arguments);e && re.isFunction(e.promise) ? e.promise().progress(n.notify).done(n.resolve).fail(n.reject) : n[r[0] + "With"](this === i ? n.promise() : this, a ? [e] : arguments);
              });
            }), e = null;
          }).promise();
        }, promise: function (e) {
          return null != e ? re.extend(e, i) : i;
        } },
          o = {};return i.pipe = i.then, re.each(t, function (e, r) {
        var a = r[2],
            s = r[3];i[r[1]] = a.add, s && a.add(function () {
          n = s;
        }, t[1 ^ e][2].disable, t[2][2].lock), o[r[0]] = function () {
          return o[r[0] + "With"](this === o ? i : this, arguments), this;
        }, o[r[0] + "With"] = a.fireWith;
      }), i.promise(o), e && e.call(o, o), o;
    }, when: function (e) {
      var t,
          n,
          i,
          o = 0,
          r = G.call(arguments),
          a = r.length,
          s = 1 !== a || e && re.isFunction(e.promise) ? a : 0,
          u = 1 === s ? e : re.Deferred(),
          l = function (e, n, i) {
        return function (o) {
          n[e] = this, i[e] = arguments.length > 1 ? G.call(arguments) : o, i === t ? u.notifyWith(n, i) : --s || u.resolveWith(n, i);
        };
      };if (a > 1) for (t = new Array(a), n = new Array(a), i = new Array(a); o < a; o++) r[o] && re.isFunction(r[o].promise) ? r[o].promise().progress(l(o, n, t)).done(l(o, i, r)).fail(u.reject) : --s;return s || u.resolveWith(i, r), u.promise();
    } });var Te;re.fn.ready = function (e) {
    return re.ready.promise().done(e), this;
  }, re.extend({ isReady: !1, readyWait: 1, holdReady: function (e) {
      e ? re.readyWait++ : re.ready(!0);
    }, ready: function (e) {
      (e === !0 ? --re.readyWait : re.isReady) || (re.isReady = !0, e !== !0 && --re.readyWait > 0 || (Te.resolveWith(Z, [re]), re.fn.triggerHandler && (re(Z).triggerHandler("ready"), re(Z).off("ready"))));
    } }), re.ready.promise = function (t) {
    return Te || (Te = re.Deferred(), "complete" === Z.readyState || "loading" !== Z.readyState && !Z.documentElement.doScroll ? e.setTimeout(re.ready) : (Z.addEventListener("DOMContentLoaded", a), e.addEventListener("load", a))), Te.promise(t);
  }, re.ready.promise();var Ee = function (e, t, n, i, o, r, a) {
    var s = 0,
        u = e.length,
        l = null == n;if ("object" === re.type(n)) {
      o = !0;for (s in n) Ee(e, t, s, n[s], !0, r, a);
    } else if (void 0 !== i && (o = !0, re.isFunction(i) || (a = !0), l && (a ? (t.call(e, i), t = null) : (l = t, t = function (e, t, n) {
      return l.call(re(e), n);
    })), t)) for (; s < u; s++) t(e[s], n, a ? i : i.call(e[s], s, t(e[s], n)));return o ? e : l ? t.call(e) : u ? t(e[0], n) : r;
  },
      Ie = function (e) {
    return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType;
  };s.uid = 1, s.prototype = { register: function (e, t) {
      var n = t || {};return e.nodeType ? e[this.expando] = n : Object.defineProperty(e, this.expando, { value: n, writable: !0, configurable: !0 }), e[this.expando];
    }, cache: function (e) {
      if (!Ie(e)) return {};var t = e[this.expando];return t || (t = {}, Ie(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, { value: t, configurable: !0 }))), t;
    }, set: function (e, t, n) {
      var i,
          o = this.cache(e);if ("string" == typeof t) o[t] = n;else for (i in t) o[i] = t[i];return o;
    }, get: function (e, t) {
      return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][t];
    }, access: function (e, t, n) {
      var i;return void 0 === t || t && "string" == typeof t && void 0 === n ? (i = this.get(e, t), void 0 !== i ? i : this.get(e, re.camelCase(t))) : (this.set(e, t, n), void 0 !== n ? n : t);
    }, remove: function (e, t) {
      var n,
          i,
          o,
          r = e[this.expando];if (void 0 !== r) {
        if (void 0 === t) this.register(e);else {
          re.isArray(t) ? i = t.concat(t.map(re.camelCase)) : (o = re.camelCase(t), t in r ? i = [t, o] : (i = o, i = i in r ? [i] : i.match(be) || [])), n = i.length;for (; n--;) delete r[i[n]];
        }(void 0 === t || re.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]);
      }
    }, hasData: function (e) {
      var t = e[this.expando];return void 0 !== t && !re.isEmptyObject(t);
    } };var Se = new s(),
      Ae = new s(),
      Ce = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
      De = /[A-Z]/g;re.extend({ hasData: function (e) {
      return Ae.hasData(e) || Se.hasData(e);
    }, data: function (e, t, n) {
      return Ae.access(e, t, n);
    }, removeData: function (e, t) {
      Ae.remove(e, t);
    }, _data: function (e, t, n) {
      return Se.access(e, t, n);
    }, _removeData: function (e, t) {
      Se.remove(e, t);
    } }), re.fn.extend({ data: function (e, t) {
      var n,
          i,
          o,
          r = this[0],
          a = r && r.attributes;if (void 0 === e) {
        if (this.length && (o = Ae.get(r), 1 === r.nodeType && !Se.get(r, "hasDataAttrs"))) {
          for (n = a.length; n--;) a[n] && (i = a[n].name, 0 === i.indexOf("data-") && (i = re.camelCase(i.slice(5)), u(r, i, o[i])));Se.set(r, "hasDataAttrs", !0);
        }return o;
      }return "object" == typeof e ? this.each(function () {
        Ae.set(this, e);
      }) : Ee(this, function (t) {
        var n, i;if (r && void 0 === t) {
          if (n = Ae.get(r, e) || Ae.get(r, e.replace(De, "-$&").toLowerCase()), void 0 !== n) return n;if (i = re.camelCase(e), n = Ae.get(r, i), void 0 !== n) return n;if (n = u(r, i, void 0), void 0 !== n) return n;
        } else i = re.camelCase(e), this.each(function () {
          var n = Ae.get(this, i);Ae.set(this, i, t), e.indexOf("-") > -1 && void 0 !== n && Ae.set(this, e, t);
        });
      }, null, t, arguments.length > 1, null, !0);
    }, removeData: function (e) {
      return this.each(function () {
        Ae.remove(this, e);
      });
    } }), re.extend({ queue: function (e, t, n) {
      var i;if (e) return t = (t || "fx") + "queue", i = Se.get(e, t), n && (!i || re.isArray(n) ? i = Se.access(e, t, re.makeArray(n)) : i.push(n)), i || [];
    }, dequeue: function (e, t) {
      t = t || "fx";var n = re.queue(e, t),
          i = n.length,
          o = n.shift(),
          r = re._queueHooks(e, t),
          a = function () {
        re.dequeue(e, t);
      };"inprogress" === o && (o = n.shift(), i--), o && ("fx" === t && n.unshift("inprogress"), delete r.stop, o.call(e, a, r)), !i && r && r.empty.fire();
    }, _queueHooks: function (e, t) {
      var n = t + "queueHooks";return Se.get(e, n) || Se.access(e, n, { empty: re.Callbacks("once memory").add(function () {
          Se.remove(e, [t + "queue", n]);
        }) });
    } }), re.fn.extend({ queue: function (e, t) {
      var n = 2;return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? re.queue(this[0], e) : void 0 === t ? this : this.each(function () {
        var n = re.queue(this, e, t);re._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && re.dequeue(this, e);
      });
    }, dequeue: function (e) {
      return this.each(function () {
        re.dequeue(this, e);
      });
    }, clearQueue: function (e) {
      return this.queue(e || "fx", []);
    }, promise: function (e, t) {
      var n,
          i = 1,
          o = re.Deferred(),
          r = this,
          a = this.length,
          s = function () {
        --i || o.resolveWith(r, [r]);
      };for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;) n = Se.get(r[a], e + "queueHooks"), n && n.empty && (i++, n.empty.add(s));return s(), o.promise(t);
    } });var Ne = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
      ke = new RegExp("^(?:([+-])=|)(" + Ne + ")([a-z%]*)$", "i"),
      Oe = ["Top", "Right", "Bottom", "Left"],
      Re = function (e, t) {
    return e = t || e, "none" === re.css(e, "display") || !re.contains(e.ownerDocument, e);
  },
      Me = /^(?:checkbox|radio)$/i,
      Le = /<([\w:-]+)/,
      _e = /^$|\/(?:java|ecma)script/i,
      Pe = { option: [1, "<select multiple='multiple'>", "</select>"], thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""] };Pe.optgroup = Pe.option, Pe.tbody = Pe.tfoot = Pe.colgroup = Pe.caption = Pe.thead, Pe.th = Pe.td;var He = /<|&#?\w+;/;!function () {
    var e = Z.createDocumentFragment(),
        t = e.appendChild(Z.createElement("div")),
        n = Z.createElement("input");n.setAttribute("type", "radio"), n.setAttribute("checked", "checked"), n.setAttribute("name", "t"), t.appendChild(n), ie.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, t.innerHTML = "<textarea>x</textarea>", ie.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue;
  }();var Ue = /^key/,
      Fe = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
      qe = /^([^.]*)(?:\.(.+)|)/;re.event = { global: {}, add: function (e, t, n, i, o) {
      var r,
          a,
          s,
          u,
          l,
          c,
          p,
          d,
          f,
          h,
          m,
          v = Se.get(e);if (v) for (n.handler && (r = n, n = r.handler, o = r.selector), n.guid || (n.guid = re.guid++), (u = v.events) || (u = v.events = {}), (a = v.handle) || (a = v.handle = function (t) {
        return "undefined" != typeof re && re.event.triggered !== t.type ? re.event.dispatch.apply(e, arguments) : void 0;
      }), t = (t || "").match(be) || [""], l = t.length; l--;) s = qe.exec(t[l]) || [], f = m = s[1], h = (s[2] || "").split(".").sort(), f && (p = re.event.special[f] || {}, f = (o ? p.delegateType : p.bindType) || f, p = re.event.special[f] || {}, c = re.extend({ type: f, origType: m, data: i, handler: n, guid: n.guid, selector: o, needsContext: o && re.expr.match.needsContext.test(o), namespace: h.join(".") }, r), (d = u[f]) || (d = u[f] = [], d.delegateCount = 0, p.setup && p.setup.call(e, i, h, a) !== !1 || e.addEventListener && e.addEventListener(f, a)), p.add && (p.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), o ? d.splice(d.delegateCount++, 0, c) : d.push(c), re.event.global[f] = !0);
    }, remove: function (e, t, n, i, o) {
      var r,
          a,
          s,
          u,
          l,
          c,
          p,
          d,
          f,
          h,
          m,
          v = Se.hasData(e) && Se.get(e);if (v && (u = v.events)) {
        for (t = (t || "").match(be) || [""], l = t.length; l--;) if (s = qe.exec(t[l]) || [], f = m = s[1], h = (s[2] || "").split(".").sort(), f) {
          for (p = re.event.special[f] || {}, f = (i ? p.delegateType : p.bindType) || f, d = u[f] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = r = d.length; r--;) c = d[r], !o && m !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || i && i !== c.selector && ("**" !== i || !c.selector) || (d.splice(r, 1), c.selector && d.delegateCount--, p.remove && p.remove.call(e, c));a && !d.length && (p.teardown && p.teardown.call(e, h, v.handle) !== !1 || re.removeEvent(e, f, v.handle), delete u[f]);
        } else for (f in u) re.event.remove(e, f + t[l], n, i, !0);re.isEmptyObject(u) && Se.remove(e, "handle events");
      }
    }, dispatch: function (e) {
      e = re.event.fix(e);var t,
          n,
          i,
          o,
          r,
          a = [],
          s = G.call(arguments),
          u = (Se.get(this, "events") || {})[e.type] || [],
          l = re.event.special[e.type] || {};if (s[0] = e, e.delegateTarget = this, !l.preDispatch || l.preDispatch.call(this, e) !== !1) {
        for (a = re.event.handlers.call(this, e, u), t = 0; (o = a[t++]) && !e.isPropagationStopped();) for (e.currentTarget = o.elem, n = 0; (r = o.handlers[n++]) && !e.isImmediatePropagationStopped();) e.rnamespace && !e.rnamespace.test(r.namespace) || (e.handleObj = r, e.data = r.data, i = ((re.event.special[r.origType] || {}).handle || r.handler).apply(o.elem, s), void 0 !== i && (e.result = i) === !1 && (e.preventDefault(), e.stopPropagation()));return l.postDispatch && l.postDispatch.call(this, e), e.result;
      }
    }, handlers: function (e, t) {
      var n,
          i,
          o,
          r,
          a = [],
          s = t.delegateCount,
          u = e.target;if (s && u.nodeType && ("click" !== e.type || isNaN(e.button) || e.button < 1)) for (; u !== this; u = u.parentNode || this) if (1 === u.nodeType && (u.disabled !== !0 || "click" !== e.type)) {
        for (i = [], n = 0; n < s; n++) r = t[n], o = r.selector + " ", void 0 === i[o] && (i[o] = r.needsContext ? re(o, this).index(u) > -1 : re.find(o, this, null, [u]).length), i[o] && i.push(r);i.length && a.push({ elem: u, handlers: i });
      }return s < t.length && a.push({ elem: this, handlers: t.slice(s) }), a;
    }, props: "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "), fixHooks: {}, keyHooks: { props: "char charCode key keyCode".split(" "), filter: function (e, t) {
        return null == e.which && (e.which = null != t.charCode ? t.charCode : t.keyCode), e;
      } }, mouseHooks: { props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "), filter: function (e, t) {
        var n,
            i,
            o,
            r = t.button;return null == e.pageX && null != t.clientX && (n = e.target.ownerDocument || Z, i = n.documentElement, o = n.body, e.pageX = t.clientX + (i && i.scrollLeft || o && o.scrollLeft || 0) - (i && i.clientLeft || o && o.clientLeft || 0), e.pageY = t.clientY + (i && i.scrollTop || o && o.scrollTop || 0) - (i && i.clientTop || o && o.clientTop || 0)), e.which || void 0 === r || (e.which = 1 & r ? 1 : 2 & r ? 3 : 4 & r ? 2 : 0), e;
      } }, fix: function (e) {
      if (e[re.expando]) return e;var t,
          n,
          i,
          o = e.type,
          r = e,
          a = this.fixHooks[o];for (a || (this.fixHooks[o] = a = Fe.test(o) ? this.mouseHooks : Ue.test(o) ? this.keyHooks : {}), i = a.props ? this.props.concat(a.props) : this.props, e = new re.Event(r), t = i.length; t--;) n = i[t], e[n] = r[n];return e.target || (e.target = Z), 3 === e.target.nodeType && (e.target = e.target.parentNode), a.filter ? a.filter(e, r) : e;
    }, special: { load: { noBubble: !0 }, focus: { trigger: function () {
          if (this !== m() && this.focus) return this.focus(), !1;
        }, delegateType: "focusin" }, blur: { trigger: function () {
          if (this === m() && this.blur) return this.blur(), !1;
        }, delegateType: "focusout" }, click: { trigger: function () {
          if ("checkbox" === this.type && this.click && re.nodeName(this, "input")) return this.click(), !1;
        }, _default: function (e) {
          return re.nodeName(e.target, "a");
        } }, beforeunload: { postDispatch: function (e) {
          void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result);
        } } } }, re.removeEvent = function (e, t, n) {
    e.removeEventListener && e.removeEventListener(t, n);
  }, re.Event = function (e, t) {
    return this instanceof re.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && e.returnValue === !1 ? f : h) : this.type = e, t && re.extend(this, t), this.timeStamp = e && e.timeStamp || re.now(), void (this[re.expando] = !0)) : new re.Event(e, t);
  }, re.Event.prototype = { constructor: re.Event, isDefaultPrevented: h, isPropagationStopped: h, isImmediatePropagationStopped: h, isSimulated: !1, preventDefault: function () {
      var e = this.originalEvent;this.isDefaultPrevented = f, e && !this.isSimulated && e.preventDefault();
    }, stopPropagation: function () {
      var e = this.originalEvent;this.isPropagationStopped = f, e && !this.isSimulated && e.stopPropagation();
    }, stopImmediatePropagation: function () {
      var e = this.originalEvent;this.isImmediatePropagationStopped = f, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation();
    } }, re.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function (e, t) {
    re.event.special[e] = { delegateType: t, bindType: t, handle: function (e) {
        var n,
            i = this,
            o = e.relatedTarget,
            r = e.handleObj;return o && (o === i || re.contains(i, o)) || (e.type = r.origType, n = r.handler.apply(this, arguments), e.type = t), n;
      } };
  }), re.fn.extend({ on: function (e, t, n, i) {
      return v(this, e, t, n, i);
    }, one: function (e, t, n, i) {
      return v(this, e, t, n, i, 1);
    }, off: function (e, t, n) {
      var i, o;if (e && e.preventDefault && e.handleObj) return i = e.handleObj, re(e.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;if ("object" == typeof e) {
        for (o in e) this.off(o, t, e[o]);return this;
      }return t !== !1 && "function" != typeof t || (n = t, t = void 0), n === !1 && (n = h), this.each(function () {
        re.event.remove(this, e, n, t);
      });
    } });var je = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,
      ze = /<script|<style|<link/i,
      Be = /checked\s*(?:[^=]|=\s*.checked.)/i,
      We = /^true\/(.*)/,
      Ye = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;re.extend({ htmlPrefilter: function (e) {
      return e.replace(je, "<$1></$2>");
    }, clone: function (e, t, n) {
      var i,
          o,
          r,
          a,
          s = e.cloneNode(!0),
          u = re.contains(e.ownerDocument, e);if (!(ie.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || re.isXMLDoc(e))) for (a = c(s), r = c(e), i = 0, o = r.length; i < o; i++) b(r[i], a[i]);if (t) if (n) for (r = r || c(e), a = a || c(s), i = 0, o = r.length; i < o; i++) x(r[i], a[i]);else x(e, s);return a = c(s, "script"), a.length > 0 && p(a, !u && c(e, "script")), s;
    }, cleanData: function (e) {
      for (var t, n, i, o = re.event.special, r = 0; void 0 !== (n = e[r]); r++) if (Ie(n)) {
        if (t = n[Se.expando]) {
          if (t.events) for (i in t.events) o[i] ? re.event.remove(n, i) : re.removeEvent(n, i, t.handle);n[Se.expando] = void 0;
        }n[Ae.expando] && (n[Ae.expando] = void 0);
      }
    } }), re.fn.extend({ domManip: T, detach: function (e) {
      return E(this, e, !0);
    }, remove: function (e) {
      return E(this, e);
    }, text: function (e) {
      return Ee(this, function (e) {
        return void 0 === e ? re.text(this) : this.empty().each(function () {
          1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e);
        });
      }, null, e, arguments.length);
    }, append: function () {
      return T(this, arguments, function (e) {
        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
          var t = g(this, e);t.appendChild(e);
        }
      });
    }, prepend: function () {
      return T(this, arguments, function (e) {
        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
          var t = g(this, e);t.insertBefore(e, t.firstChild);
        }
      });
    }, before: function () {
      return T(this, arguments, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this);
      });
    }, after: function () {
      return T(this, arguments, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
      });
    }, empty: function () {
      for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (re.cleanData(c(e, !1)), e.textContent = "");return this;
    }, clone: function (e, t) {
      return e = null != e && e, t = null == t ? e : t, this.map(function () {
        return re.clone(this, e, t);
      });
    }, html: function (e) {
      return Ee(this, function (e) {
        var t = this[0] || {},
            n = 0,
            i = this.length;if (void 0 === e && 1 === t.nodeType) return t.innerHTML;if ("string" == typeof e && !ze.test(e) && !Pe[(Le.exec(e) || ["", ""])[1].toLowerCase()]) {
          e = re.htmlPrefilter(e);try {
            for (; n < i; n++) t = this[n] || {}, 1 === t.nodeType && (re.cleanData(c(t, !1)), t.innerHTML = e);t = 0;
          } catch (o) {}
        }t && this.empty().append(e);
      }, null, e, arguments.length);
    }, replaceWith: function () {
      var e = [];return T(this, arguments, function (t) {
        var n = this.parentNode;re.inArray(this, e) < 0 && (re.cleanData(c(this)), n && n.replaceChild(t, this));
      }, e);
    } }), re.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (e, t) {
    re.fn[e] = function (e) {
      for (var n, i = [], o = re(e), r = o.length - 1, a = 0; a <= r; a++) n = a === r ? this : this.clone(!0), re(o[a])[t](n), Q.apply(i, n.get());return this.pushStack(i);
    };
  });var $e,
      Xe = { HTML: "block", BODY: "block" },
      Ke = /^margin/,
      Ze = new RegExp("^(" + Ne + ")(?!px)[a-z%]+$", "i"),
      Ge = function (t) {
    var n = t.ownerDocument.defaultView;return n && n.opener || (n = e), n.getComputedStyle(t);
  },
      Ve = function (e, t, n, i) {
    var o,
        r,
        a = {};for (r in t) a[r] = e.style[r], e.style[r] = t[r];o = n.apply(e, i || []);for (r in t) e.style[r] = a[r];return o;
  },
      Qe = Z.documentElement;!function () {
    function t() {
      s.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", s.innerHTML = "", Qe.appendChild(a);var t = e.getComputedStyle(s);n = "1%" !== t.top, r = "2px" === t.marginLeft, i = "4px" === t.width, s.style.marginRight = "50%", o = "4px" === t.marginRight, Qe.removeChild(a);
    }var n,
        i,
        o,
        r,
        a = Z.createElement("div"),
        s = Z.createElement("div");s.style && (s.style.backgroundClip = "content-box", s.cloneNode(!0).style.backgroundClip = "", ie.clearCloneStyle = "content-box" === s.style.backgroundClip, a.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", a.appendChild(s), re.extend(ie, { pixelPosition: function () {
        return t(), n;
      }, boxSizingReliable: function () {
        return null == i && t(), i;
      }, pixelMarginRight: function () {
        return null == i && t(), o;
      }, reliableMarginLeft: function () {
        return null == i && t(), r;
      }, reliableMarginRight: function () {
        var t,
            n = s.appendChild(Z.createElement("div"));return n.style.cssText = s.style.cssText = "-webkit-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", n.style.marginRight = n.style.width = "0", s.style.width = "1px", Qe.appendChild(a), t = !parseFloat(e.getComputedStyle(n).marginRight), Qe.removeChild(a), s.removeChild(n), t;
      } }));
  }();var Je = /^(none|table(?!-c[ea]).+)/,
      et = { position: "absolute", visibility: "hidden", display: "block" },
      tt = { letterSpacing: "0", fontWeight: "400" },
      nt = ["Webkit", "O", "Moz", "ms"],
      it = Z.createElement("div").style;re.extend({ cssHooks: { opacity: { get: function (e, t) {
          if (t) {
            var n = A(e, "opacity");return "" === n ? "1" : n;
          }
        } } }, cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 }, cssProps: { "float": "cssFloat" }, style: function (e, t, n, i) {
      if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
        var o,
            r,
            a,
            s = re.camelCase(t),
            u = e.style;return t = re.cssProps[s] || (re.cssProps[s] = D(s) || s), a = re.cssHooks[t] || re.cssHooks[s], void 0 === n ? a && "get" in a && void 0 !== (o = a.get(e, !1, i)) ? o : u[t] : (r = typeof n, "string" === r && (o = ke.exec(n)) && o[1] && (n = l(e, t, o), r = "number"), null != n && n === n && ("number" === r && (n += o && o[3] || (re.cssNumber[s] ? "" : "px")), ie.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (u[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, i)) || (u[t] = n)), void 0);
      }
    }, css: function (e, t, n, i) {
      var o,
          r,
          a,
          s = re.camelCase(t);return t = re.cssProps[s] || (re.cssProps[s] = D(s) || s), a = re.cssHooks[t] || re.cssHooks[s], a && "get" in a && (o = a.get(e, !0, n)), void 0 === o && (o = A(e, t, i)), "normal" === o && t in tt && (o = tt[t]), "" === n || n ? (r = parseFloat(o), n === !0 || isFinite(r) ? r || 0 : o) : o;
    } }), re.each(["height", "width"], function (e, t) {
    re.cssHooks[t] = { get: function (e, n, i) {
        if (n) return Je.test(re.css(e, "display")) && 0 === e.offsetWidth ? Ve(e, et, function () {
          return O(e, t, i);
        }) : O(e, t, i);
      }, set: function (e, n, i) {
        var o,
            r = i && Ge(e),
            a = i && k(e, t, i, "border-box" === re.css(e, "boxSizing", !1, r), r);return a && (o = ke.exec(n)) && "px" !== (o[3] || "px") && (e.style[t] = n, n = re.css(e, t)), N(e, n, a);
      } };
  }), re.cssHooks.marginLeft = C(ie.reliableMarginLeft, function (e, t) {
    if (t) return (parseFloat(A(e, "marginLeft")) || e.getBoundingClientRect().left - Ve(e, { marginLeft: 0 }, function () {
      return e.getBoundingClientRect().left;
    })) + "px";
  }), re.cssHooks.marginRight = C(ie.reliableMarginRight, function (e, t) {
    if (t) return Ve(e, { display: "inline-block" }, A, [e, "marginRight"]);
  }), re.each({ margin: "", padding: "", border: "Width" }, function (e, t) {
    re.cssHooks[e + t] = { expand: function (n) {
        for (var i = 0, o = {}, r = "string" == typeof n ? n.split(" ") : [n]; i < 4; i++) o[e + Oe[i] + t] = r[i] || r[i - 2] || r[0];return o;
      } }, Ke.test(e) || (re.cssHooks[e + t].set = N);
  }), re.fn.extend({ css: function (e, t) {
      return Ee(this, function (e, t, n) {
        var i,
            o,
            r = {},
            a = 0;if (re.isArray(t)) {
          for (i = Ge(e), o = t.length; a < o; a++) r[t[a]] = re.css(e, t[a], !1, i);return r;
        }return void 0 !== n ? re.style(e, t, n) : re.css(e, t);
      }, e, t, arguments.length > 1);
    }, show: function () {
      return R(this, !0);
    }, hide: function () {
      return R(this);
    }, toggle: function (e) {
      return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
        Re(this) ? re(this).show() : re(this).hide();
      });
    } }), re.Tween = M, M.prototype = { constructor: M, init: function (e, t, n, i, o, r) {
      this.elem = e, this.prop = n, this.easing = o || re.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = i, this.unit = r || (re.cssNumber[n] ? "" : "px");
    }, cur: function () {
      var e = M.propHooks[this.prop];return e && e.get ? e.get(this) : M.propHooks._default.get(this);
    }, run: function (e) {
      var t,
          n = M.propHooks[this.prop];return this.options.duration ? this.pos = t = re.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : M.propHooks._default.set(this), this;
    } }, M.prototype.init.prototype = M.prototype, M.propHooks = { _default: { get: function (e) {
        var t;return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = re.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0);
      }, set: function (e) {
        re.fx.step[e.prop] ? re.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[re.cssProps[e.prop]] && !re.cssHooks[e.prop] ? e.elem[e.prop] = e.now : re.style(e.elem, e.prop, e.now + e.unit);
      } } }, M.propHooks.scrollTop = M.propHooks.scrollLeft = { set: function (e) {
      e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
    } }, re.easing = { linear: function (e) {
      return e;
    }, swing: function (e) {
      return .5 - Math.cos(e * Math.PI) / 2;
    }, _default: "swing" }, re.fx = M.prototype.init, re.fx.step = {};var ot,
      rt,
      at = /^(?:toggle|show|hide)$/,
      st = /queueHooks$/;re.Animation = re.extend(F, { tweeners: { "*": [function (e, t) {
        var n = this.createTween(e, t);return l(n.elem, e, ke.exec(t), n), n;
      }] }, tweener: function (e, t) {
      re.isFunction(e) ? (t = e, e = ["*"]) : e = e.match(be);for (var n, i = 0, o = e.length; i < o; i++) n = e[i], F.tweeners[n] = F.tweeners[n] || [], F.tweeners[n].unshift(t);
    }, prefilters: [H], prefilter: function (e, t) {
      t ? F.prefilters.unshift(e) : F.prefilters.push(e);
    } }), re.speed = function (e, t, n) {
    var i = e && "object" == typeof e ? re.extend({}, e) : { complete: n || !n && t || re.isFunction(e) && e, duration: e, easing: n && t || t && !re.isFunction(t) && t };return i.duration = re.fx.off ? 0 : "number" == typeof i.duration ? i.duration : i.duration in re.fx.speeds ? re.fx.speeds[i.duration] : re.fx.speeds._default, null != i.queue && i.queue !== !0 || (i.queue = "fx"), i.old = i.complete, i.complete = function () {
      re.isFunction(i.old) && i.old.call(this), i.queue && re.dequeue(this, i.queue);
    }, i;
  }, re.fn.extend({ fadeTo: function (e, t, n, i) {
      return this.filter(Re).css("opacity", 0).show().end().animate({ opacity: t }, e, n, i);
    }, animate: function (e, t, n, i) {
      var o = re.isEmptyObject(e),
          r = re.speed(t, n, i),
          a = function () {
        var t = F(this, re.extend({}, e), r);(o || Se.get(this, "finish")) && t.stop(!0);
      };return a.finish = a, o || r.queue === !1 ? this.each(a) : this.queue(r.queue, a);
    }, stop: function (e, t, n) {
      var i = function (e) {
        var t = e.stop;delete e.stop, t(n);
      };return "string" != typeof e && (n = t, t = e, e = void 0), t && e !== !1 && this.queue(e || "fx", []), this.each(function () {
        var t = !0,
            o = null != e && e + "queueHooks",
            r = re.timers,
            a = Se.get(this);if (o) a[o] && a[o].stop && i(a[o]);else for (o in a) a[o] && a[o].stop && st.test(o) && i(a[o]);for (o = r.length; o--;) r[o].elem !== this || null != e && r[o].queue !== e || (r[o].anim.stop(n), t = !1, r.splice(o, 1));!t && n || re.dequeue(this, e);
      });
    }, finish: function (e) {
      return e !== !1 && (e = e || "fx"), this.each(function () {
        var t,
            n = Se.get(this),
            i = n[e + "queue"],
            o = n[e + "queueHooks"],
            r = re.timers,
            a = i ? i.length : 0;for (n.finish = !0, re.queue(this, e, []), o && o.stop && o.stop.call(this, !0), t = r.length; t--;) r[t].elem === this && r[t].queue === e && (r[t].anim.stop(!0), r.splice(t, 1));for (t = 0; t < a; t++) i[t] && i[t].finish && i[t].finish.call(this);delete n.finish;
      });
    } }), re.each(["toggle", "show", "hide"], function (e, t) {
    var n = re.fn[t];re.fn[t] = function (e, i, o) {
      return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(_(t, !0), e, i, o);
    };
  }), re.each({ slideDown: _("show"), slideUp: _("hide"), slideToggle: _("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (e, t) {
    re.fn[e] = function (e, n, i) {
      return this.animate(t, e, n, i);
    };
  }), re.timers = [], re.fx.tick = function () {
    var e,
        t = 0,
        n = re.timers;for (ot = re.now(); t < n.length; t++) e = n[t], e() || n[t] !== e || n.splice(t--, 1);n.length || re.fx.stop(), ot = void 0;
  }, re.fx.timer = function (e) {
    re.timers.push(e), e() ? re.fx.start() : re.timers.pop();
  }, re.fx.interval = 13, re.fx.start = function () {
    rt || (rt = e.setInterval(re.fx.tick, re.fx.interval));
  }, re.fx.stop = function () {
    e.clearInterval(rt), rt = null;
  }, re.fx.speeds = { slow: 600, fast: 200, _default: 400 }, re.fn.delay = function (t, n) {
    return t = re.fx ? re.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, i) {
      var o = e.setTimeout(n, t);i.stop = function () {
        e.clearTimeout(o);
      };
    });
  }, function () {
    var e = Z.createElement("input"),
        t = Z.createElement("select"),
        n = t.appendChild(Z.createElement("option"));e.type = "checkbox", ie.checkOn = "" !== e.value, ie.optSelected = n.selected, t.disabled = !0, ie.optDisabled = !n.disabled, e = Z.createElement("input"), e.value = "t", e.type = "radio", ie.radioValue = "t" === e.value;
  }();var ut,
      lt = re.expr.attrHandle;re.fn.extend({ attr: function (e, t) {
      return Ee(this, re.attr, e, t, arguments.length > 1);
    }, removeAttr: function (e) {
      return this.each(function () {
        re.removeAttr(this, e);
      });
    } }), re.extend({ attr: function (e, t, n) {
      var i,
          o,
          r = e.nodeType;if (3 !== r && 8 !== r && 2 !== r) return "undefined" == typeof e.getAttribute ? re.prop(e, t, n) : (1 === r && re.isXMLDoc(e) || (t = t.toLowerCase(), o = re.attrHooks[t] || (re.expr.match.bool.test(t) ? ut : void 0)), void 0 !== n ? null === n ? void re.removeAttr(e, t) : o && "set" in o && void 0 !== (i = o.set(e, n, t)) ? i : (e.setAttribute(t, n + ""), n) : o && "get" in o && null !== (i = o.get(e, t)) ? i : (i = re.find.attr(e, t), null == i ? void 0 : i));
    }, attrHooks: { type: { set: function (e, t) {
          if (!ie.radioValue && "radio" === t && re.nodeName(e, "input")) {
            var n = e.value;return e.setAttribute("type", t), n && (e.value = n), t;
          }
        } } }, removeAttr: function (e, t) {
      var n,
          i,
          o = 0,
          r = t && t.match(be);if (r && 1 === e.nodeType) for (; n = r[o++];) i = re.propFix[n] || n, re.expr.match.bool.test(n) && (e[i] = !1), e.removeAttribute(n);
    } }), ut = { set: function (e, t, n) {
      return t === !1 ? re.removeAttr(e, n) : e.setAttribute(n, n), n;
    } }, re.each(re.expr.match.bool.source.match(/\w+/g), function (e, t) {
    var n = lt[t] || re.find.attr;lt[t] = function (e, t, i) {
      var o, r;return i || (r = lt[t], lt[t] = o, o = null != n(e, t, i) ? t.toLowerCase() : null, lt[t] = r), o;
    };
  });var ct = /^(?:input|select|textarea|button)$/i,
      pt = /^(?:a|area)$/i;re.fn.extend({ prop: function (e, t) {
      return Ee(this, re.prop, e, t, arguments.length > 1);
    }, removeProp: function (e) {
      return this.each(function () {
        delete this[re.propFix[e] || e];
      });
    } }), re.extend({ prop: function (e, t, n) {
      var i,
          o,
          r = e.nodeType;if (3 !== r && 8 !== r && 2 !== r) return 1 === r && re.isXMLDoc(e) || (t = re.propFix[t] || t, o = re.propHooks[t]), void 0 !== n ? o && "set" in o && void 0 !== (i = o.set(e, n, t)) ? i : e[t] = n : o && "get" in o && null !== (i = o.get(e, t)) ? i : e[t];
    }, propHooks: { tabIndex: { get: function (e) {
          var t = re.find.attr(e, "tabindex");return t ? parseInt(t, 10) : ct.test(e.nodeName) || pt.test(e.nodeName) && e.href ? 0 : -1;
        } } }, propFix: { "for": "htmlFor", "class": "className" } }), ie.optSelected || (re.propHooks.selected = { get: function (e) {
      var t = e.parentNode;return t && t.parentNode && t.parentNode.selectedIndex, null;
    }, set: function (e) {
      var t = e.parentNode;t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
    } }), re.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
    re.propFix[this.toLowerCase()] = this;
  });var dt = /[\t\r\n\f]/g;re.fn.extend({ addClass: function (e) {
      var t,
          n,
          i,
          o,
          r,
          a,
          s,
          u = 0;if (re.isFunction(e)) return this.each(function (t) {
        re(this).addClass(e.call(this, t, q(this)));
      });if ("string" == typeof e && e) for (t = e.match(be) || []; n = this[u++];) if (o = q(n), i = 1 === n.nodeType && (" " + o + " ").replace(dt, " ")) {
        for (a = 0; r = t[a++];) i.indexOf(" " + r + " ") < 0 && (i += r + " ");s = re.trim(i), o !== s && n.setAttribute("class", s);
      }return this;
    }, removeClass: function (e) {
      var t,
          n,
          i,
          o,
          r,
          a,
          s,
          u = 0;if (re.isFunction(e)) return this.each(function (t) {
        re(this).removeClass(e.call(this, t, q(this)));
      });if (!arguments.length) return this.attr("class", "");if ("string" == typeof e && e) for (t = e.match(be) || []; n = this[u++];) if (o = q(n), i = 1 === n.nodeType && (" " + o + " ").replace(dt, " ")) {
        for (a = 0; r = t[a++];) for (; i.indexOf(" " + r + " ") > -1;) i = i.replace(" " + r + " ", " ");s = re.trim(i), o !== s && n.setAttribute("class", s);
      }return this;
    }, toggleClass: function (e, t) {
      var n = typeof e;return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : re.isFunction(e) ? this.each(function (n) {
        re(this).toggleClass(e.call(this, n, q(this), t), t);
      }) : this.each(function () {
        var t, i, o, r;if ("string" === n) for (i = 0, o = re(this), r = e.match(be) || []; t = r[i++];) o.hasClass(t) ? o.removeClass(t) : o.addClass(t);else void 0 !== e && "boolean" !== n || (t = q(this), t && Se.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || e === !1 ? "" : Se.get(this, "__className__") || ""));
      });
    }, hasClass: function (e) {
      var t,
          n,
          i = 0;for (t = " " + e + " "; n = this[i++];) if (1 === n.nodeType && (" " + q(n) + " ").replace(dt, " ").indexOf(t) > -1) return !0;return !1;
    } });var ft = /\r/g,
      ht = /[\x20\t\r\n\f]+/g;re.fn.extend({ val: function (e) {
      var t,
          n,
          i,
          o = this[0];{
        if (arguments.length) return i = re.isFunction(e), this.each(function (n) {
          var o;1 === this.nodeType && (o = i ? e.call(this, n, re(this).val()) : e, null == o ? o = "" : "number" == typeof o ? o += "" : re.isArray(o) && (o = re.map(o, function (e) {
            return null == e ? "" : e + "";
          })), t = re.valHooks[this.type] || re.valHooks[this.nodeName.toLowerCase()], t && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o));
        });if (o) return t = re.valHooks[o.type] || re.valHooks[o.nodeName.toLowerCase()], t && "get" in t && void 0 !== (n = t.get(o, "value")) ? n : (n = o.value, "string" == typeof n ? n.replace(ft, "") : null == n ? "" : n);
      }
    } }), re.extend({ valHooks: { option: { get: function (e) {
          var t = re.find.attr(e, "value");return null != t ? t : re.trim(re.text(e)).replace(ht, " ");
        } }, select: { get: function (e) {
          for (var t, n, i = e.options, o = e.selectedIndex, r = "select-one" === e.type || o < 0, a = r ? null : [], s = r ? o + 1 : i.length, u = o < 0 ? s : r ? o : 0; u < s; u++) if (n = i[u], (n.selected || u === o) && (ie.optDisabled ? !n.disabled : null === n.getAttribute("disabled")) && (!n.parentNode.disabled || !re.nodeName(n.parentNode, "optgroup"))) {
            if (t = re(n).val(), r) return t;a.push(t);
          }return a;
        }, set: function (e, t) {
          for (var n, i, o = e.options, r = re.makeArray(t), a = o.length; a--;) i = o[a], (i.selected = re.inArray(re.valHooks.option.get(i), r) > -1) && (n = !0);return n || (e.selectedIndex = -1), r;
        } } } }), re.each(["radio", "checkbox"], function () {
    re.valHooks[this] = { set: function (e, t) {
        if (re.isArray(t)) return e.checked = re.inArray(re(e).val(), t) > -1;
      } }, ie.checkOn || (re.valHooks[this].get = function (e) {
      return null === e.getAttribute("value") ? "on" : e.value;
    });
  });var mt = /^(?:focusinfocus|focusoutblur)$/;re.extend(re.event, { trigger: function (t, n, i, o) {
      var r,
          a,
          s,
          u,
          l,
          c,
          p,
          d = [i || Z],
          f = ne.call(t, "type") ? t.type : t,
          h = ne.call(t, "namespace") ? t.namespace.split(".") : [];if (a = s = i = i || Z, 3 !== i.nodeType && 8 !== i.nodeType && !mt.test(f + re.event.triggered) && (f.indexOf(".") > -1 && (h = f.split("."), f = h.shift(), h.sort()), l = f.indexOf(":") < 0 && "on" + f, t = t[re.expando] ? t : new re.Event(f, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = h.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : re.makeArray(n, [t]), p = re.event.special[f] || {}, o || !p.trigger || p.trigger.apply(i, n) !== !1)) {
        if (!o && !p.noBubble && !re.isWindow(i)) {
          for (u = p.delegateType || f, mt.test(u + f) || (a = a.parentNode); a; a = a.parentNode) d.push(a), s = a;s === (i.ownerDocument || Z) && d.push(s.defaultView || s.parentWindow || e);
        }for (r = 0; (a = d[r++]) && !t.isPropagationStopped();) t.type = r > 1 ? u : p.bindType || f, c = (Se.get(a, "events") || {})[t.type] && Se.get(a, "handle"), c && c.apply(a, n), c = l && a[l], c && c.apply && Ie(a) && (t.result = c.apply(a, n), t.result === !1 && t.preventDefault());return t.type = f, o || t.isDefaultPrevented() || p._default && p._default.apply(d.pop(), n) !== !1 || !Ie(i) || l && re.isFunction(i[f]) && !re.isWindow(i) && (s = i[l], s && (i[l] = null), re.event.triggered = f, i[f](), re.event.triggered = void 0, s && (i[l] = s)), t.result;
      }
    }, simulate: function (e, t, n) {
      var i = re.extend(new re.Event(), n, { type: e, isSimulated: !0 });re.event.trigger(i, null, t);
    } }), re.fn.extend({ trigger: function (e, t) {
      return this.each(function () {
        re.event.trigger(e, t, this);
      });
    }, triggerHandler: function (e, t) {
      var n = this[0];if (n) return re.event.trigger(e, t, n, !0);
    } }), re.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (e, t) {
    re.fn[t] = function (e, n) {
      return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t);
    };
  }), re.fn.extend({ hover: function (e, t) {
      return this.mouseenter(e).mouseleave(t || e);
    } }), ie.focusin = "onfocusin" in e, ie.focusin || re.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
    var n = function (e) {
      re.event.simulate(t, e.target, re.event.fix(e));
    };re.event.special[t] = { setup: function () {
        var i = this.ownerDocument || this,
            o = Se.access(i, t);o || i.addEventListener(e, n, !0), Se.access(i, t, (o || 0) + 1);
      }, teardown: function () {
        var i = this.ownerDocument || this,
            o = Se.access(i, t) - 1;o ? Se.access(i, t, o) : (i.removeEventListener(e, n, !0), Se.remove(i, t));
      } };
  });var vt = e.location,
      gt = re.now(),
      yt = /\?/;re.parseJSON = function (e) {
    return JSON.parse(e + "");
  }, re.parseXML = function (t) {
    var n;if (!t || "string" != typeof t) return null;try {
      n = new e.DOMParser().parseFromString(t, "text/xml");
    } catch (i) {
      n = void 0;
    }return n && !n.getElementsByTagName("parsererror").length || re.error("Invalid XML: " + t), n;
  };var wt = /#.*$/,
      xt = /([?&])_=[^&]*/,
      bt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
      Tt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
      Et = /^(?:GET|HEAD)$/,
      It = /^\/\//,
      St = {},
      At = {},
      Ct = "*/".concat("*"),
      Dt = Z.createElement("a");Dt.href = vt.href, re.extend({ active: 0, lastModified: {}, etag: {}, ajaxSettings: { url: vt.href, type: "GET", isLocal: Tt.test(vt.protocol), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": Ct, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": re.parseJSON, "text xml": re.parseXML }, flatOptions: { url: !0, context: !0 } }, ajaxSetup: function (e, t) {
      return t ? B(B(e, re.ajaxSettings), t) : B(re.ajaxSettings, e);
    }, ajaxPrefilter: j(St), ajaxTransport: j(At), ajax: function (t, n) {
      function i(t, n, i, s) {
        var l,
            p,
            y,
            w,
            b,
            E = n;2 !== x && (x = 2, u && e.clearTimeout(u), o = void 0, a = s || "", T.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, i && (w = W(d, T, i)), w = Y(d, w, T, l), l ? (d.ifModified && (b = T.getResponseHeader("Last-Modified"), b && (re.lastModified[r] = b), b = T.getResponseHeader("etag"), b && (re.etag[r] = b)), 204 === t || "HEAD" === d.type ? E = "nocontent" : 304 === t ? E = "notmodified" : (E = w.state, p = w.data, y = w.error, l = !y)) : (y = E, !t && E || (E = "error", t < 0 && (t = 0))), T.status = t, T.statusText = (n || E) + "", l ? m.resolveWith(f, [p, E, T]) : m.rejectWith(f, [T, E, y]), T.statusCode(g), g = void 0, c && h.trigger(l ? "ajaxSuccess" : "ajaxError", [T, d, l ? p : y]), v.fireWith(f, [T, E]), c && (h.trigger("ajaxComplete", [T, d]), --re.active || re.event.trigger("ajaxStop")));
      }"object" == typeof t && (n = t, t = void 0), n = n || {};var o,
          r,
          a,
          s,
          u,
          l,
          c,
          p,
          d = re.ajaxSetup({}, n),
          f = d.context || d,
          h = d.context && (f.nodeType || f.jquery) ? re(f) : re.event,
          m = re.Deferred(),
          v = re.Callbacks("once memory"),
          g = d.statusCode || {},
          y = {},
          w = {},
          x = 0,
          b = "canceled",
          T = { readyState: 0, getResponseHeader: function (e) {
          var t;if (2 === x) {
            if (!s) for (s = {}; t = bt.exec(a);) s[t[1].toLowerCase()] = t[2];t = s[e.toLowerCase()];
          }return null == t ? null : t;
        }, getAllResponseHeaders: function () {
          return 2 === x ? a : null;
        }, setRequestHeader: function (e, t) {
          var n = e.toLowerCase();return x || (e = w[n] = w[n] || e, y[e] = t), this;
        }, overrideMimeType: function (e) {
          return x || (d.mimeType = e), this;
        }, statusCode: function (e) {
          var t;if (e) if (x < 2) for (t in e) g[t] = [g[t], e[t]];else T.always(e[T.status]);return this;
        }, abort: function (e) {
          var t = e || b;return o && o.abort(t), i(0, t), this;
        } };if (m.promise(T).complete = v.add, T.success = T.done, T.error = T.fail, d.url = ((t || d.url || vt.href) + "").replace(wt, "").replace(It, vt.protocol + "//"), d.type = n.method || n.type || d.method || d.type, d.dataTypes = re.trim(d.dataType || "*").toLowerCase().match(be) || [""], null == d.crossDomain) {
        l = Z.createElement("a");try {
          l.href = d.url, l.href = l.href, d.crossDomain = Dt.protocol + "//" + Dt.host != l.protocol + "//" + l.host;
        } catch (E) {
          d.crossDomain = !0;
        }
      }if (d.data && d.processData && "string" != typeof d.data && (d.data = re.param(d.data, d.traditional)), z(St, d, n, T), 2 === x) return T;c = re.event && d.global, c && 0 === re.active++ && re.event.trigger("ajaxStart"), d.type = d.type.toUpperCase(), d.hasContent = !Et.test(d.type), r = d.url, d.hasContent || (d.data && (r = d.url += (yt.test(r) ? "&" : "?") + d.data, delete d.data), d.cache === !1 && (d.url = xt.test(r) ? r.replace(xt, "$1_=" + gt++) : r + (yt.test(r) ? "&" : "?") + "_=" + gt++)), d.ifModified && (re.lastModified[r] && T.setRequestHeader("If-Modified-Since", re.lastModified[r]), re.etag[r] && T.setRequestHeader("If-None-Match", re.etag[r])), (d.data && d.hasContent && d.contentType !== !1 || n.contentType) && T.setRequestHeader("Content-Type", d.contentType), T.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + ("*" !== d.dataTypes[0] ? ", " + Ct + "; q=0.01" : "") : d.accepts["*"]);for (p in d.headers) T.setRequestHeader(p, d.headers[p]);if (d.beforeSend && (d.beforeSend.call(f, T, d) === !1 || 2 === x)) return T.abort();b = "abort";for (p in { success: 1, error: 1, complete: 1 }) T[p](d[p]);if (o = z(At, d, n, T)) {
        if (T.readyState = 1, c && h.trigger("ajaxSend", [T, d]), 2 === x) return T;d.async && d.timeout > 0 && (u = e.setTimeout(function () {
          T.abort("timeout");
        }, d.timeout));try {
          x = 1, o.send(y, i);
        } catch (E) {
          if (!(x < 2)) throw E;i(-1, E);
        }
      } else i(-1, "No Transport");return T;
    }, getJSON: function (e, t, n) {
      return re.get(e, t, n, "json");
    }, getScript: function (e, t) {
      return re.get(e, void 0, t, "script");
    } }), re.each(["get", "post"], function (e, t) {
    re[t] = function (e, n, i, o) {
      return re.isFunction(n) && (o = o || i, i = n, n = void 0), re.ajax(re.extend({ url: e, type: t, dataType: o, data: n, success: i }, re.isPlainObject(e) && e));
    };
  }), re._evalUrl = function (e) {
    return re.ajax({ url: e, type: "GET", dataType: "script", async: !1, global: !1, "throws": !0 });
  }, re.fn.extend({ wrapAll: function (e) {
      var t;return re.isFunction(e) ? this.each(function (t) {
        re(this).wrapAll(e.call(this, t));
      }) : (this[0] && (t = re(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
        for (var e = this; e.firstElementChild;) e = e.firstElementChild;return e;
      }).append(this)), this);
    }, wrapInner: function (e) {
      return re.isFunction(e) ? this.each(function (t) {
        re(this).wrapInner(e.call(this, t));
      }) : this.each(function () {
        var t = re(this),
            n = t.contents();n.length ? n.wrapAll(e) : t.append(e);
      });
    }, wrap: function (e) {
      var t = re.isFunction(e);return this.each(function (n) {
        re(this).wrapAll(t ? e.call(this, n) : e);
      });
    }, unwrap: function () {
      return this.parent().each(function () {
        re.nodeName(this, "body") || re(this).replaceWith(this.childNodes);
      }).end();
    } }), re.expr.filters.hidden = function (e) {
    return !re.expr.filters.visible(e);
  }, re.expr.filters.visible = function (e) {
    return e.offsetWidth > 0 || e.offsetHeight > 0 || e.getClientRects().length > 0;
  };var Nt = /%20/g,
      kt = /\[\]$/,
      Ot = /\r?\n/g,
      Rt = /^(?:submit|button|image|reset|file)$/i,
      Mt = /^(?:input|select|textarea|keygen)/i;re.param = function (e, t) {
    var n,
        i = [],
        o = function (e, t) {
      t = re.isFunction(t) ? t() : null == t ? "" : t, i[i.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t);
    };if (void 0 === t && (t = re.ajaxSettings && re.ajaxSettings.traditional), re.isArray(e) || e.jquery && !re.isPlainObject(e)) re.each(e, function () {
      o(this.name, this.value);
    });else for (n in e) $(n, e[n], t, o);return i.join("&").replace(Nt, "+");
  }, re.fn.extend({ serialize: function () {
      return re.param(this.serializeArray());
    }, serializeArray: function () {
      return this.map(function () {
        var e = re.prop(this, "elements");return e ? re.makeArray(e) : this;
      }).filter(function () {
        var e = this.type;return this.name && !re(this).is(":disabled") && Mt.test(this.nodeName) && !Rt.test(e) && (this.checked || !Me.test(e));
      }).map(function (e, t) {
        var n = re(this).val();return null == n ? null : re.isArray(n) ? re.map(n, function (e) {
          return { name: t.name, value: e.replace(Ot, "\r\n") };
        }) : { name: t.name, value: n.replace(Ot, "\r\n") };
      }).get();
    } }), re.ajaxSettings.xhr = function () {
    try {
      return new e.XMLHttpRequest();
    } catch (t) {}
  };var Lt = { 0: 200, 1223: 204 },
      _t = re.ajaxSettings.xhr();ie.cors = !!_t && "withCredentials" in _t, ie.ajax = _t = !!_t, re.ajaxTransport(function (t) {
    var n, i;if (ie.cors || _t && !t.crossDomain) return { send: function (o, r) {
        var a,
            s = t.xhr();if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) s[a] = t.xhrFields[a];t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest");
        for (a in o) s.setRequestHeader(a, o[a]);n = function (e) {
          return function () {
            n && (n = i = s.onload = s.onerror = s.onabort = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? r(0, "error") : r(s.status, s.statusText) : r(Lt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? { binary: s.response } : { text: s.responseText }, s.getAllResponseHeaders()));
          };
        }, s.onload = n(), i = s.onerror = n("error"), void 0 !== s.onabort ? s.onabort = i : s.onreadystatechange = function () {
          4 === s.readyState && e.setTimeout(function () {
            n && i();
          });
        }, n = n("abort");try {
          s.send(t.hasContent && t.data || null);
        } catch (u) {
          if (n) throw u;
        }
      }, abort: function () {
        n && n();
      } };
  }), re.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function (e) {
        return re.globalEval(e), e;
      } } }), re.ajaxPrefilter("script", function (e) {
    void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET");
  }), re.ajaxTransport("script", function (e) {
    if (e.crossDomain) {
      var t, n;return { send: function (i, o) {
          t = re("<script>").prop({ charset: e.scriptCharset, src: e.url }).on("load error", n = function (e) {
            t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type);
          }), Z.head.appendChild(t[0]);
        }, abort: function () {
          n && n();
        } };
    }
  });var Pt = [],
      Ht = /(=)\?(?=&|$)|\?\?/;re.ajaxSetup({ jsonp: "callback", jsonpCallback: function () {
      var e = Pt.pop() || re.expando + "_" + gt++;return this[e] = !0, e;
    } }), re.ajaxPrefilter("json jsonp", function (t, n, i) {
    var o,
        r,
        a,
        s = t.jsonp !== !1 && (Ht.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Ht.test(t.data) && "data");if (s || "jsonp" === t.dataTypes[0]) return o = t.jsonpCallback = re.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Ht, "$1" + o) : t.jsonp !== !1 && (t.url += (yt.test(t.url) ? "&" : "?") + t.jsonp + "=" + o), t.converters["script json"] = function () {
      return a || re.error(o + " was not called"), a[0];
    }, t.dataTypes[0] = "json", r = e[o], e[o] = function () {
      a = arguments;
    }, i.always(function () {
      void 0 === r ? re(e).removeProp(o) : e[o] = r, t[o] && (t.jsonpCallback = n.jsonpCallback, Pt.push(o)), a && re.isFunction(r) && r(a[0]), a = r = void 0;
    }), "script";
  }), re.parseHTML = function (e, t, n) {
    if (!e || "string" != typeof e) return null;"boolean" == typeof t && (n = t, t = !1), t = t || Z;var i = he.exec(e),
        o = !n && [];return i ? [t.createElement(i[1])] : (i = d([e], t, o), o && o.length && re(o).remove(), re.merge([], i.childNodes));
  };var Ut = re.fn.load;re.fn.load = function (e, t, n) {
    if ("string" != typeof e && Ut) return Ut.apply(this, arguments);var i,
        o,
        r,
        a = this,
        s = e.indexOf(" ");return s > -1 && (i = re.trim(e.slice(s)), e = e.slice(0, s)), re.isFunction(t) ? (n = t, t = void 0) : t && "object" == typeof t && (o = "POST"), a.length > 0 && re.ajax({ url: e, type: o || "GET", dataType: "html", data: t }).done(function (e) {
      r = arguments, a.html(i ? re("<div>").append(re.parseHTML(e)).find(i) : e);
    }).always(n && function (e, t) {
      a.each(function () {
        n.apply(this, r || [e.responseText, t, e]);
      });
    }), this;
  }, re.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
    re.fn[t] = function (e) {
      return this.on(t, e);
    };
  }), re.expr.filters.animated = function (e) {
    return re.grep(re.timers, function (t) {
      return e === t.elem;
    }).length;
  }, re.offset = { setOffset: function (e, t, n) {
      var i,
          o,
          r,
          a,
          s,
          u,
          l,
          c = re.css(e, "position"),
          p = re(e),
          d = {};"static" === c && (e.style.position = "relative"), s = p.offset(), r = re.css(e, "top"), u = re.css(e, "left"), l = ("absolute" === c || "fixed" === c) && (r + u).indexOf("auto") > -1, l ? (i = p.position(), a = i.top, o = i.left) : (a = parseFloat(r) || 0, o = parseFloat(u) || 0), re.isFunction(t) && (t = t.call(e, n, re.extend({}, s))), null != t.top && (d.top = t.top - s.top + a), null != t.left && (d.left = t.left - s.left + o), "using" in t ? t.using.call(e, d) : p.css(d);
    } }, re.fn.extend({ offset: function (e) {
      if (arguments.length) return void 0 === e ? this : this.each(function (t) {
        re.offset.setOffset(this, e, t);
      });var t,
          n,
          i = this[0],
          o = { top: 0, left: 0 },
          r = i && i.ownerDocument;if (r) return t = r.documentElement, re.contains(t, i) ? (o = i.getBoundingClientRect(), n = X(r), { top: o.top + n.pageYOffset - t.clientTop, left: o.left + n.pageXOffset - t.clientLeft }) : o;
    }, position: function () {
      if (this[0]) {
        var e,
            t,
            n = this[0],
            i = { top: 0, left: 0 };return "fixed" === re.css(n, "position") ? t = n.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), re.nodeName(e[0], "html") || (i = e.offset()), i.top += re.css(e[0], "borderTopWidth", !0), i.left += re.css(e[0], "borderLeftWidth", !0)), { top: t.top - i.top - re.css(n, "marginTop", !0), left: t.left - i.left - re.css(n, "marginLeft", !0) };
      }
    }, offsetParent: function () {
      return this.map(function () {
        for (var e = this.offsetParent; e && "static" === re.css(e, "position");) e = e.offsetParent;return e || Qe;
      });
    } }), re.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (e, t) {
    var n = "pageYOffset" === t;re.fn[e] = function (i) {
      return Ee(this, function (e, i, o) {
        var r = X(e);return void 0 === o ? r ? r[t] : e[i] : void (r ? r.scrollTo(n ? r.pageXOffset : o, n ? o : r.pageYOffset) : e[i] = o);
      }, e, i, arguments.length);
    };
  }), re.each(["top", "left"], function (e, t) {
    re.cssHooks[t] = C(ie.pixelPosition, function (e, n) {
      if (n) return n = A(e, t), Ze.test(n) ? re(e).position()[t] + "px" : n;
    });
  }), re.each({ Height: "height", Width: "width" }, function (e, t) {
    re.each({ padding: "inner" + e, content: t, "": "outer" + e }, function (n, i) {
      re.fn[i] = function (i, o) {
        var r = arguments.length && (n || "boolean" != typeof i),
            a = n || (i === !0 || o === !0 ? "margin" : "border");return Ee(this, function (t, n, i) {
          var o;return re.isWindow(t) ? t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? re.css(t, n, a) : re.style(t, n, i, a);
        }, t, r ? i : void 0, r, null);
      };
    });
  }), re.fn.extend({ bind: function (e, t, n) {
      return this.on(e, null, t, n);
    }, unbind: function (e, t) {
      return this.off(e, null, t);
    }, delegate: function (e, t, n, i) {
      return this.on(t, e, n, i);
    }, undelegate: function (e, t, n) {
      return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n);
    }, size: function () {
      return this.length;
    } }), re.fn.andSelf = re.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
    return re;
  });var Ft = e.jQuery,
      qt = e.$;return re.noConflict = function (t) {
    return e.$ === re && (e.$ = qt), t && e.jQuery === re && (e.jQuery = Ft), re;
  }, t || (e.jQuery = e.$ = re), re;
}), function (e) {
  "function" == typeof define && define.amd ? define(["jquery"], function (t) {
    return e(t);
  }) : "object" == typeof module && "object" == typeof module.exports ? exports = e(require("jquery")) : e(jQuery);
}(function (e) {
  function t(e) {
    var t = 7.5625,
        n = 2.75;return e < 1 / n ? t * e * e : e < 2 / n ? t * (e -= 1.5 / n) * e + .75 : e < 2.5 / n ? t * (e -= 2.25 / n) * e + .9375 : t * (e -= 2.625 / n) * e + .984375;
  }e.easing.jswing = e.easing.swing;var n = Math.pow,
      i = Math.sqrt,
      o = Math.sin,
      r = Math.cos,
      a = Math.PI,
      s = 1.70158,
      u = 1.525 * s,
      l = s + 1,
      c = 2 * a / 3,
      p = 2 * a / 4.5;e.extend(e.easing, { def: "easeOutQuad", swing: function (t) {
      return e.easing[e.easing.def](t);
    }, easeInQuad: function (e) {
      return e * e;
    }, easeOutQuad: function (e) {
      return 1 - (1 - e) * (1 - e);
    }, easeInOutQuad: function (e) {
      return e < .5 ? 2 * e * e : 1 - n(-2 * e + 2, 2) / 2;
    }, easeInCubic: function (e) {
      return e * e * e;
    }, easeOutCubic: function (e) {
      return 1 - n(1 - e, 3);
    }, easeInOutCubic: function (e) {
      return e < .5 ? 4 * e * e * e : 1 - n(-2 * e + 2, 3) / 2;
    }, easeInQuart: function (e) {
      return e * e * e * e;
    }, easeOutQuart: function (e) {
      return 1 - n(1 - e, 4);
    }, easeInOutQuart: function (e) {
      return e < .5 ? 8 * e * e * e * e : 1 - n(-2 * e + 2, 4) / 2;
    }, easeInQuint: function (e) {
      return e * e * e * e * e;
    }, easeOutQuint: function (e) {
      return 1 - n(1 - e, 5);
    }, easeInOutQuint: function (e) {
      return e < .5 ? 16 * e * e * e * e * e : 1 - n(-2 * e + 2, 5) / 2;
    }, easeInSine: function (e) {
      return 1 - r(e * a / 2);
    }, easeOutSine: function (e) {
      return o(e * a / 2);
    }, easeInOutSine: function (e) {
      return -(r(a * e) - 1) / 2;
    }, easeInExpo: function (e) {
      return 0 === e ? 0 : n(2, 10 * e - 10);
    }, easeOutExpo: function (e) {
      return 1 === e ? 1 : 1 - n(2, -10 * e);
    }, easeInOutExpo: function (e) {
      return 0 === e ? 0 : 1 === e ? 1 : e < .5 ? n(2, 20 * e - 10) / 2 : (2 - n(2, -20 * e + 10)) / 2;
    }, easeInCirc: function (e) {
      return 1 - i(1 - n(e, 2));
    }, easeOutCirc: function (e) {
      return i(1 - n(e - 1, 2));
    }, easeInOutCirc: function (e) {
      return e < .5 ? (1 - i(1 - n(2 * e, 2))) / 2 : (i(1 - n(-2 * e + 2, 2)) + 1) / 2;
    }, easeInElastic: function (e) {
      return 0 === e ? 0 : 1 === e ? 1 : -n(2, 10 * e - 10) * o((10 * e - 10.75) * c);
    }, easeOutElastic: function (e) {
      return 0 === e ? 0 : 1 === e ? 1 : n(2, -10 * e) * o((10 * e - .75) * c) + 1;
    }, easeInOutElastic: function (e) {
      return 0 === e ? 0 : 1 === e ? 1 : e < .5 ? -(n(2, 20 * e - 10) * o((20 * e - 11.125) * p)) / 2 : n(2, -20 * e + 10) * o((20 * e - 11.125) * p) / 2 + 1;
    }, easeInBack: function (e) {
      return l * e * e * e - s * e * e;
    }, easeOutBack: function (e) {
      return 1 + l * n(e - 1, 3) + s * n(e - 1, 2);
    }, easeInOutBack: function (e) {
      return e < .5 ? n(2 * e, 2) * (2 * (u + 1) * e - u) / 2 : (n(2 * e - 2, 2) * ((u + 1) * (2 * e - 2) + u) + 2) / 2;
    }, easeInBounce: function (e) {
      return 1 - t(1 - e);
    }, easeOutBounce: t, easeInOutBounce: function (e) {
      return e < .5 ? (1 - t(1 - 2 * e)) / 2 : (1 + t(2 * e - 1)) / 2;
    } });
}), /*! Hammer.JS - v2.0.7 - 2016-04-22
    * http://hammerjs.github.io/
    *
    * Copyright (c) 2016 Jorik Tangelder;
    * Licensed under the MIT license */
function (e, t, n, i) {
  "use strict";
  function o(e, t, n) {
    return setTimeout(l(e, n), t);
  }function r(e, t, n) {
    return !!Array.isArray(e) && (a(e, n[t], n), !0);
  }function a(e, t, n) {
    var o;if (e) if (e.forEach) e.forEach(t, n);else if (e.length !== i) for (o = 0; o < e.length;) t.call(n, e[o], o, e), o++;else for (o in e) e.hasOwnProperty(o) && t.call(n, e[o], o, e);
  }function s(t, n, i) {
    var o = "DEPRECATED METHOD: " + n + "\n" + i + " AT \n";return function () {
      var n = new Error("get-stack-trace"),
          i = n && n.stack ? n.stack.replace(/^[^\(]+?[\n$]/gm, "").replace(/^\s+at\s+/gm, "").replace(/^Object.<anonymous>\s*\(/gm, "{anonymous}()@") : "Unknown Stack Trace",
          r = e.console && (e.console.warn || e.console.log);return r && r.call(e.console, o, i), t.apply(this, arguments);
    };
  }function u(e, t, n) {
    var i,
        o = t.prototype;i = e.prototype = Object.create(o), i.constructor = e, i._super = o, n && pe(i, n);
  }function l(e, t) {
    return function () {
      return e.apply(t, arguments);
    };
  }function c(e, t) {
    return typeof e == he ? e.apply(t ? t[0] || i : i, t) : e;
  }function p(e, t) {
    return e === i ? t : e;
  }function d(e, t, n) {
    a(v(t), function (t) {
      e.addEventListener(t, n, !1);
    });
  }function f(e, t, n) {
    a(v(t), function (t) {
      e.removeEventListener(t, n, !1);
    });
  }function h(e, t) {
    for (; e;) {
      if (e == t) return !0;e = e.parentNode;
    }return !1;
  }function m(e, t) {
    return e.indexOf(t) > -1;
  }function v(e) {
    return e.trim().split(/\s+/g);
  }function g(e, t, n) {
    if (e.indexOf && !n) return e.indexOf(t);for (var i = 0; i < e.length;) {
      if (n && e[i][n] == t || !n && e[i] === t) return i;i++;
    }return -1;
  }function y(e) {
    return Array.prototype.slice.call(e, 0);
  }function w(e, t, n) {
    for (var i = [], o = [], r = 0; r < e.length;) {
      var a = t ? e[r][t] : e[r];g(o, a) < 0 && i.push(e[r]), o[r] = a, r++;
    }return n && (i = t ? i.sort(function (e, n) {
      return e[t] > n[t];
    }) : i.sort()), i;
  }function x(e, t) {
    for (var n, o, r = t[0].toUpperCase() + t.slice(1), a = 0; a < de.length;) {
      if (n = de[a], o = n ? n + r : t, o in e) return o;a++;
    }return i;
  }function b() {
    return xe++;
  }function T(t) {
    var n = t.ownerDocument || t;return n.defaultView || n.parentWindow || e;
  }function E(e, t) {
    var n = this;this.manager = e, this.callback = t, this.element = e.element, this.target = e.options.inputTarget, this.domHandler = function (t) {
      c(e.options.enable, [e]) && n.handler(t);
    }, this.init();
  }function I(e) {
    var t,
        n = e.options.inputClass;return new (t = n ? n : Ee ? U : Ie ? j : Te ? B : H)(e, S);
  }function S(e, t, n) {
    var i = n.pointers.length,
        o = n.changedPointers.length,
        r = t & ke && i - o === 0,
        a = t & (Re | Me) && i - o === 0;n.isFirst = !!r, n.isFinal = !!a, r && (e.session = {}), n.eventType = t, A(e, n), e.emit("hammer.input", n), e.recognize(n), e.session.prevInput = n;
  }function A(e, t) {
    var n = e.session,
        i = t.pointers,
        o = i.length;n.firstInput || (n.firstInput = N(t)), o > 1 && !n.firstMultiple ? n.firstMultiple = N(t) : 1 === o && (n.firstMultiple = !1);var r = n.firstInput,
        a = n.firstMultiple,
        s = a ? a.center : r.center,
        u = t.center = k(i);t.timeStamp = ge(), t.deltaTime = t.timeStamp - r.timeStamp, t.angle = L(s, u), t.distance = M(s, u), C(n, t), t.offsetDirection = R(t.deltaX, t.deltaY);var l = O(t.deltaTime, t.deltaX, t.deltaY);t.overallVelocityX = l.x, t.overallVelocityY = l.y, t.overallVelocity = ve(l.x) > ve(l.y) ? l.x : l.y, t.scale = a ? P(a.pointers, i) : 1, t.rotation = a ? _(a.pointers, i) : 0, t.maxPointers = n.prevInput ? t.pointers.length > n.prevInput.maxPointers ? t.pointers.length : n.prevInput.maxPointers : t.pointers.length, D(n, t);var c = e.element;h(t.srcEvent.target, c) && (c = t.srcEvent.target), t.target = c;
  }function C(e, t) {
    var n = t.center,
        i = e.offsetDelta || {},
        o = e.prevDelta || {},
        r = e.prevInput || {};t.eventType !== ke && r.eventType !== Re || (o = e.prevDelta = { x: r.deltaX || 0, y: r.deltaY || 0 }, i = e.offsetDelta = { x: n.x, y: n.y }), t.deltaX = o.x + (n.x - i.x), t.deltaY = o.y + (n.y - i.y);
  }function D(e, t) {
    var n,
        o,
        r,
        a,
        s = e.lastInterval || t,
        u = t.timeStamp - s.timeStamp;if (t.eventType != Me && (u > Ne || s.velocity === i)) {
      var l = t.deltaX - s.deltaX,
          c = t.deltaY - s.deltaY,
          p = O(u, l, c);o = p.x, r = p.y, n = ve(p.x) > ve(p.y) ? p.x : p.y, a = R(l, c), e.lastInterval = t;
    } else n = s.velocity, o = s.velocityX, r = s.velocityY, a = s.direction;t.velocity = n, t.velocityX = o, t.velocityY = r, t.direction = a;
  }function N(e) {
    for (var t = [], n = 0; n < e.pointers.length;) t[n] = { clientX: me(e.pointers[n].clientX), clientY: me(e.pointers[n].clientY) }, n++;return { timeStamp: ge(), pointers: t, center: k(t), deltaX: e.deltaX, deltaY: e.deltaY };
  }function k(e) {
    var t = e.length;if (1 === t) return { x: me(e[0].clientX), y: me(e[0].clientY) };for (var n = 0, i = 0, o = 0; o < t;) n += e[o].clientX, i += e[o].clientY, o++;return { x: me(n / t), y: me(i / t) };
  }function O(e, t, n) {
    return { x: t / e || 0, y: n / e || 0 };
  }function R(e, t) {
    return e === t ? Le : ve(e) >= ve(t) ? e < 0 ? _e : Pe : t < 0 ? He : Ue;
  }function M(e, t, n) {
    n || (n = ze);var i = t[n[0]] - e[n[0]],
        o = t[n[1]] - e[n[1]];return Math.sqrt(i * i + o * o);
  }function L(e, t, n) {
    n || (n = ze);var i = t[n[0]] - e[n[0]],
        o = t[n[1]] - e[n[1]];return 180 * Math.atan2(o, i) / Math.PI;
  }function _(e, t) {
    return L(t[1], t[0], Be) + L(e[1], e[0], Be);
  }function P(e, t) {
    return M(t[0], t[1], Be) / M(e[0], e[1], Be);
  }function H() {
    this.evEl = Ye, this.evWin = $e, this.pressed = !1, E.apply(this, arguments);
  }function U() {
    this.evEl = Ze, this.evWin = Ge, E.apply(this, arguments), this.store = this.manager.session.pointerEvents = [];
  }function F() {
    this.evTarget = Qe, this.evWin = Je, this.started = !1, E.apply(this, arguments);
  }function q(e, t) {
    var n = y(e.touches),
        i = y(e.changedTouches);return t & (Re | Me) && (n = w(n.concat(i), "identifier", !0)), [n, i];
  }function j() {
    this.evTarget = tt, this.targetIds = {}, E.apply(this, arguments);
  }function z(e, t) {
    var n = y(e.touches),
        i = this.targetIds;if (t & (ke | Oe) && 1 === n.length) return i[n[0].identifier] = !0, [n, n];var o,
        r,
        a = y(e.changedTouches),
        s = [],
        u = this.target;if (r = n.filter(function (e) {
      return h(e.target, u);
    }), t === ke) for (o = 0; o < r.length;) i[r[o].identifier] = !0, o++;for (o = 0; o < a.length;) i[a[o].identifier] && s.push(a[o]), t & (Re | Me) && delete i[a[o].identifier], o++;return s.length ? [w(r.concat(s), "identifier", !0), s] : void 0;
  }function B() {
    E.apply(this, arguments);var e = l(this.handler, this);this.touch = new j(this.manager, e), this.mouse = new H(this.manager, e), this.primaryTouch = null, this.lastTouches = [];
  }function W(e, t) {
    e & ke ? (this.primaryTouch = t.changedPointers[0].identifier, Y.call(this, t)) : e & (Re | Me) && Y.call(this, t);
  }function Y(e) {
    var t = e.changedPointers[0];if (t.identifier === this.primaryTouch) {
      var n = { x: t.clientX, y: t.clientY };this.lastTouches.push(n);var i = this.lastTouches,
          o = function () {
        var e = i.indexOf(n);e > -1 && i.splice(e, 1);
      };setTimeout(o, nt);
    }
  }function $(e) {
    for (var t = e.srcEvent.clientX, n = e.srcEvent.clientY, i = 0; i < this.lastTouches.length; i++) {
      var o = this.lastTouches[i],
          r = Math.abs(t - o.x),
          a = Math.abs(n - o.y);if (r <= it && a <= it) return !0;
    }return !1;
  }function X(e, t) {
    this.manager = e, this.set(t);
  }function K(e) {
    if (m(e, lt)) return lt;var t = m(e, ct),
        n = m(e, pt);return t && n ? lt : t || n ? t ? ct : pt : m(e, ut) ? ut : st;
  }function Z() {
    if (!rt) return !1;var t = {},
        n = e.CSS && e.CSS.supports;return ["auto", "manipulation", "pan-y", "pan-x", "pan-x pan-y", "none"].forEach(function (i) {
      t[i] = !n || e.CSS.supports("touch-action", i);
    }), t;
  }function G(e) {
    this.options = pe({}, this.defaults, e || {}), this.id = b(), this.manager = null, this.options.enable = p(this.options.enable, !0), this.state = ft, this.simultaneous = {}, this.requireFail = [];
  }function V(e) {
    return e & yt ? "cancel" : e & vt ? "end" : e & mt ? "move" : e & ht ? "start" : "";
  }function Q(e) {
    return e == Ue ? "down" : e == He ? "up" : e == _e ? "left" : e == Pe ? "right" : "";
  }function J(e, t) {
    var n = t.manager;return n ? n.get(e) : e;
  }function ee() {
    G.apply(this, arguments);
  }function te() {
    ee.apply(this, arguments), this.pX = null, this.pY = null;
  }function ne() {
    ee.apply(this, arguments);
  }function ie() {
    G.apply(this, arguments), this._timer = null, this._input = null;
  }function oe() {
    ee.apply(this, arguments);
  }function re() {
    ee.apply(this, arguments);
  }function ae() {
    G.apply(this, arguments), this.pTime = !1, this.pCenter = !1, this._timer = null, this._input = null, this.count = 0;
  }function se(e, t) {
    return t = t || {}, t.recognizers = p(t.recognizers, se.defaults.preset), new ue(e, t);
  }function ue(e, t) {
    this.options = pe({}, se.defaults, t || {}), this.options.inputTarget = this.options.inputTarget || e, this.handlers = {}, this.session = {}, this.recognizers = [], this.oldCssProps = {}, this.element = e, this.input = I(this), this.touchAction = new X(this, this.options.touchAction), le(this, !0), a(this.options.recognizers, function (e) {
      var t = this.add(new e[0](e[1]));e[2] && t.recognizeWith(e[2]), e[3] && t.requireFailure(e[3]);
    }, this);
  }function le(e, t) {
    var n = e.element;if (n.style) {
      var i;a(e.options.cssProps, function (o, r) {
        i = x(n.style, r), t ? (e.oldCssProps[i] = n.style[i], n.style[i] = o) : n.style[i] = e.oldCssProps[i] || "";
      }), t || (e.oldCssProps = {});
    }
  }function ce(e, n) {
    var i = t.createEvent("Event");i.initEvent(e, !0, !0), i.gesture = n, n.target.dispatchEvent(i);
  }var pe,
      de = ["", "webkit", "Moz", "MS", "ms", "o"],
      fe = t.createElement("div"),
      he = "function",
      me = Math.round,
      ve = Math.abs,
      ge = Date.now;pe = "function" != typeof Object.assign ? function (e) {
    if (e === i || null === e) throw new TypeError("Cannot convert undefined or null to object");for (var t = Object(e), n = 1; n < arguments.length; n++) {
      var o = arguments[n];if (o !== i && null !== o) for (var r in o) o.hasOwnProperty(r) && (t[r] = o[r]);
    }return t;
  } : Object.assign;var ye = s(function (e, t, n) {
    for (var o = Object.keys(t), r = 0; r < o.length;) (!n || n && e[o[r]] === i) && (e[o[r]] = t[o[r]]), r++;return e;
  }, "extend", "Use `assign`."),
      we = s(function (e, t) {
    return ye(e, t, !0);
  }, "merge", "Use `assign`."),
      xe = 1,
      be = /mobile|tablet|ip(ad|hone|od)|android/i,
      Te = "ontouchstart" in e,
      Ee = x(e, "PointerEvent") !== i,
      Ie = Te && be.test(navigator.userAgent),
      Se = "touch",
      Ae = "pen",
      Ce = "mouse",
      De = "kinect",
      Ne = 25,
      ke = 1,
      Oe = 2,
      Re = 4,
      Me = 8,
      Le = 1,
      _e = 2,
      Pe = 4,
      He = 8,
      Ue = 16,
      Fe = _e | Pe,
      qe = He | Ue,
      je = Fe | qe,
      ze = ["x", "y"],
      Be = ["clientX", "clientY"];E.prototype = { handler: function () {}, init: function () {
      this.evEl && d(this.element, this.evEl, this.domHandler), this.evTarget && d(this.target, this.evTarget, this.domHandler), this.evWin && d(T(this.element), this.evWin, this.domHandler);
    }, destroy: function () {
      this.evEl && f(this.element, this.evEl, this.domHandler), this.evTarget && f(this.target, this.evTarget, this.domHandler), this.evWin && f(T(this.element), this.evWin, this.domHandler);
    } };var We = { mousedown: ke, mousemove: Oe, mouseup: Re },
      Ye = "mousedown",
      $e = "mousemove mouseup";u(H, E, { handler: function (e) {
      var t = We[e.type];t & ke && 0 === e.button && (this.pressed = !0), t & Oe && 1 !== e.which && (t = Re), this.pressed && (t & Re && (this.pressed = !1), this.callback(this.manager, t, { pointers: [e], changedPointers: [e], pointerType: Ce, srcEvent: e }));
    } });var Xe = { pointerdown: ke, pointermove: Oe, pointerup: Re, pointercancel: Me, pointerout: Me },
      Ke = { 2: Se, 3: Ae, 4: Ce, 5: De },
      Ze = "pointerdown",
      Ge = "pointermove pointerup pointercancel";e.MSPointerEvent && !e.PointerEvent && (Ze = "MSPointerDown", Ge = "MSPointerMove MSPointerUp MSPointerCancel"), u(U, E, { handler: function (e) {
      var t = this.store,
          n = !1,
          i = e.type.toLowerCase().replace("ms", ""),
          o = Xe[i],
          r = Ke[e.pointerType] || e.pointerType,
          a = r == Se,
          s = g(t, e.pointerId, "pointerId");o & ke && (0 === e.button || a) ? s < 0 && (t.push(e), s = t.length - 1) : o & (Re | Me) && (n = !0), s < 0 || (t[s] = e, this.callback(this.manager, o, { pointers: t, changedPointers: [e], pointerType: r, srcEvent: e }), n && t.splice(s, 1));
    } });var Ve = { touchstart: ke, touchmove: Oe, touchend: Re, touchcancel: Me },
      Qe = "touchstart",
      Je = "touchstart touchmove touchend touchcancel";u(F, E, { handler: function (e) {
      var t = Ve[e.type];if (t === ke && (this.started = !0), this.started) {
        var n = q.call(this, e, t);t & (Re | Me) && n[0].length - n[1].length === 0 && (this.started = !1), this.callback(this.manager, t, { pointers: n[0], changedPointers: n[1], pointerType: Se, srcEvent: e });
      }
    } });var et = { touchstart: ke, touchmove: Oe, touchend: Re, touchcancel: Me },
      tt = "touchstart touchmove touchend touchcancel";u(j, E, { handler: function (e) {
      var t = et[e.type],
          n = z.call(this, e, t);n && this.callback(this.manager, t, { pointers: n[0], changedPointers: n[1], pointerType: Se, srcEvent: e });
    } });var nt = 2500,
      it = 25;u(B, E, { handler: function (e, t, n) {
      var i = n.pointerType == Se,
          o = n.pointerType == Ce;if (!(o && n.sourceCapabilities && n.sourceCapabilities.firesTouchEvents)) {
        if (i) W.call(this, t, n);else if (o && $.call(this, n)) return;this.callback(e, t, n);
      }
    }, destroy: function () {
      this.touch.destroy(), this.mouse.destroy();
    } });var ot = x(fe.style, "touchAction"),
      rt = ot !== i,
      at = "compute",
      st = "auto",
      ut = "manipulation",
      lt = "none",
      ct = "pan-x",
      pt = "pan-y",
      dt = Z();X.prototype = { set: function (e) {
      e == at && (e = this.compute()), rt && this.manager.element.style && dt[e] && (this.manager.element.style[ot] = e), this.actions = e.toLowerCase().trim();
    }, update: function () {
      this.set(this.manager.options.touchAction);
    }, compute: function () {
      var e = [];return a(this.manager.recognizers, function (t) {
        c(t.options.enable, [t]) && (e = e.concat(t.getTouchAction()));
      }), K(e.join(" "));
    }, preventDefaults: function (e) {
      var t = e.srcEvent,
          n = e.offsetDirection;if (this.manager.session.prevented) return void t.preventDefault();var i = this.actions,
          o = m(i, lt) && !dt[lt],
          r = m(i, pt) && !dt[pt],
          a = m(i, ct) && !dt[ct];if (o) {
        var s = 1 === e.pointers.length,
            u = e.distance < 2,
            l = e.deltaTime < 250;if (s && u && l) return;
      }return a && r ? void 0 : o || r && n & Fe || a && n & qe ? this.preventSrc(t) : void 0;
    }, preventSrc: function (e) {
      this.manager.session.prevented = !0, e.preventDefault();
    } };var ft = 1,
      ht = 2,
      mt = 4,
      vt = 8,
      gt = vt,
      yt = 16,
      wt = 32;G.prototype = { defaults: {}, set: function (e) {
      return pe(this.options, e), this.manager && this.manager.touchAction.update(), this;
    }, recognizeWith: function (e) {
      if (r(e, "recognizeWith", this)) return this;var t = this.simultaneous;return e = J(e, this), t[e.id] || (t[e.id] = e, e.recognizeWith(this)), this;
    }, dropRecognizeWith: function (e) {
      return r(e, "dropRecognizeWith", this) ? this : (e = J(e, this), delete this.simultaneous[e.id], this);
    }, requireFailure: function (e) {
      if (r(e, "requireFailure", this)) return this;var t = this.requireFail;return e = J(e, this), g(t, e) === -1 && (t.push(e), e.requireFailure(this)), this;
    }, dropRequireFailure: function (e) {
      if (r(e, "dropRequireFailure", this)) return this;e = J(e, this);var t = g(this.requireFail, e);return t > -1 && this.requireFail.splice(t, 1), this;
    }, hasRequireFailures: function () {
      return this.requireFail.length > 0;
    }, canRecognizeWith: function (e) {
      return !!this.simultaneous[e.id];
    }, emit: function (e) {
      function t(t) {
        n.manager.emit(t, e);
      }var n = this,
          i = this.state;i < vt && t(n.options.event + V(i)), t(n.options.event), e.additionalEvent && t(e.additionalEvent), i >= vt && t(n.options.event + V(i));
    }, tryEmit: function (e) {
      return this.canEmit() ? this.emit(e) : void (this.state = wt);
    }, canEmit: function () {
      for (var e = 0; e < this.requireFail.length;) {
        if (!(this.requireFail[e].state & (wt | ft))) return !1;e++;
      }return !0;
    }, recognize: function (e) {
      var t = pe({}, e);return c(this.options.enable, [this, t]) ? (this.state & (gt | yt | wt) && (this.state = ft), this.state = this.process(t), void (this.state & (ht | mt | vt | yt) && this.tryEmit(t))) : (this.reset(), void (this.state = wt));
    }, process: function (e) {}, getTouchAction: function () {}, reset: function () {} }, u(ee, G, { defaults: { pointers: 1 }, attrTest: function (e) {
      var t = this.options.pointers;return 0 === t || e.pointers.length === t;
    }, process: function (e) {
      var t = this.state,
          n = e.eventType,
          i = t & (ht | mt),
          o = this.attrTest(e);return i && (n & Me || !o) ? t | yt : i || o ? n & Re ? t | vt : t & ht ? t | mt : ht : wt;
    } }), u(te, ee, { defaults: { event: "pan", threshold: 10, pointers: 1, direction: je }, getTouchAction: function () {
      var e = this.options.direction,
          t = [];return e & Fe && t.push(pt), e & qe && t.push(ct), t;
    }, directionTest: function (e) {
      var t = this.options,
          n = !0,
          i = e.distance,
          o = e.direction,
          r = e.deltaX,
          a = e.deltaY;return o & t.direction || (t.direction & Fe ? (o = 0 === r ? Le : r < 0 ? _e : Pe, n = r != this.pX, i = Math.abs(e.deltaX)) : (o = 0 === a ? Le : a < 0 ? He : Ue, n = a != this.pY, i = Math.abs(e.deltaY))), e.direction = o, n && i > t.threshold && o & t.direction;
    }, attrTest: function (e) {
      return ee.prototype.attrTest.call(this, e) && (this.state & ht || !(this.state & ht) && this.directionTest(e));
    }, emit: function (e) {
      this.pX = e.deltaX, this.pY = e.deltaY;var t = Q(e.direction);t && (e.additionalEvent = this.options.event + t), this._super.emit.call(this, e);
    } }), u(ne, ee, { defaults: { event: "pinch", threshold: 0, pointers: 2 }, getTouchAction: function () {
      return [lt];
    }, attrTest: function (e) {
      return this._super.attrTest.call(this, e) && (Math.abs(e.scale - 1) > this.options.threshold || this.state & ht);
    }, emit: function (e) {
      if (1 !== e.scale) {
        var t = e.scale < 1 ? "in" : "out";e.additionalEvent = this.options.event + t;
      }this._super.emit.call(this, e);
    } }), u(ie, G, { defaults: { event: "press", pointers: 1, time: 251, threshold: 9 }, getTouchAction: function () {
      return [st];
    }, process: function (e) {
      var t = this.options,
          n = e.pointers.length === t.pointers,
          i = e.distance < t.threshold,
          r = e.deltaTime > t.time;if (this._input = e, !i || !n || e.eventType & (Re | Me) && !r) this.reset();else if (e.eventType & ke) this.reset(), this._timer = o(function () {
        this.state = gt, this.tryEmit();
      }, t.time, this);else if (e.eventType & Re) return gt;return wt;
    }, reset: function () {
      clearTimeout(this._timer);
    }, emit: function (e) {
      this.state === gt && (e && e.eventType & Re ? this.manager.emit(this.options.event + "up", e) : (this._input.timeStamp = ge(), this.manager.emit(this.options.event, this._input)));
    } }), u(oe, ee, { defaults: { event: "rotate", threshold: 0, pointers: 2 }, getTouchAction: function () {
      return [lt];
    }, attrTest: function (e) {
      return this._super.attrTest.call(this, e) && (Math.abs(e.rotation) > this.options.threshold || this.state & ht);
    } }), u(re, ee, { defaults: { event: "swipe", threshold: 10, velocity: .3, direction: Fe | qe, pointers: 1 }, getTouchAction: function () {
      return te.prototype.getTouchAction.call(this);
    }, attrTest: function (e) {
      var t,
          n = this.options.direction;return n & (Fe | qe) ? t = e.overallVelocity : n & Fe ? t = e.overallVelocityX : n & qe && (t = e.overallVelocityY), this._super.attrTest.call(this, e) && n & e.offsetDirection && e.distance > this.options.threshold && e.maxPointers == this.options.pointers && ve(t) > this.options.velocity && e.eventType & Re;
    }, emit: function (e) {
      var t = Q(e.offsetDirection);t && this.manager.emit(this.options.event + t, e), this.manager.emit(this.options.event, e);
    } }), u(ae, G, { defaults: { event: "tap", pointers: 1, taps: 1, interval: 300, time: 250, threshold: 9, posThreshold: 10 }, getTouchAction: function () {
      return [ut];
    }, process: function (e) {
      var t = this.options,
          n = e.pointers.length === t.pointers,
          i = e.distance < t.threshold,
          r = e.deltaTime < t.time;if (this.reset(), e.eventType & ke && 0 === this.count) return this.failTimeout();if (i && r && n) {
        if (e.eventType != Re) return this.failTimeout();var a = !this.pTime || e.timeStamp - this.pTime < t.interval,
            s = !this.pCenter || M(this.pCenter, e.center) < t.posThreshold;this.pTime = e.timeStamp, this.pCenter = e.center, s && a ? this.count += 1 : this.count = 1, this._input = e;var u = this.count % t.taps;if (0 === u) return this.hasRequireFailures() ? (this._timer = o(function () {
          this.state = gt, this.tryEmit();
        }, t.interval, this), ht) : gt;
      }return wt;
    }, failTimeout: function () {
      return this._timer = o(function () {
        this.state = wt;
      }, this.options.interval, this), wt;
    }, reset: function () {
      clearTimeout(this._timer);
    }, emit: function () {
      this.state == gt && (this._input.tapCount = this.count, this.manager.emit(this.options.event, this._input));
    } }), se.VERSION = "2.0.7", se.defaults = { domEvents: !1, touchAction: at, enable: !0, inputTarget: null, inputClass: null, preset: [[oe, { enable: !1 }], [ne, { enable: !1 }, ["rotate"]], [re, { direction: Fe }], [te, { direction: Fe }, ["swipe"]], [ae], [ae, { event: "doubletap", taps: 2 }, ["tap"]], [ie]], cssProps: { userSelect: "none", touchSelect: "none", touchCallout: "none", contentZooming: "none", userDrag: "none", tapHighlightColor: "rgba(0,0,0,0)" } };var xt = 1,
      bt = 2;ue.prototype = { set: function (e) {
      return pe(this.options, e), e.touchAction && this.touchAction.update(), e.inputTarget && (this.input.destroy(), this.input.target = e.inputTarget, this.input.init()), this;
    }, stop: function (e) {
      this.session.stopped = e ? bt : xt;
    }, recognize: function (e) {
      var t = this.session;if (!t.stopped) {
        this.touchAction.preventDefaults(e);var n,
            i = this.recognizers,
            o = t.curRecognizer;(!o || o && o.state & gt) && (o = t.curRecognizer = null);for (var r = 0; r < i.length;) n = i[r], t.stopped === bt || o && n != o && !n.canRecognizeWith(o) ? n.reset() : n.recognize(e), !o && n.state & (ht | mt | vt) && (o = t.curRecognizer = n), r++;
      }
    }, get: function (e) {
      if (e instanceof G) return e;for (var t = this.recognizers, n = 0; n < t.length; n++) if (t[n].options.event == e) return t[n];return null;
    }, add: function (e) {
      if (r(e, "add", this)) return this;var t = this.get(e.options.event);return t && this.remove(t), this.recognizers.push(e), e.manager = this, this.touchAction.update(), e;
    }, remove: function (e) {
      if (r(e, "remove", this)) return this;if (e = this.get(e)) {
        var t = this.recognizers,
            n = g(t, e);n !== -1 && (t.splice(n, 1), this.touchAction.update());
      }return this;
    }, on: function (e, t) {
      if (e !== i && t !== i) {
        var n = this.handlers;return a(v(e), function (e) {
          n[e] = n[e] || [], n[e].push(t);
        }), this;
      }
    }, off: function (e, t) {
      if (e !== i) {
        var n = this.handlers;return a(v(e), function (e) {
          t ? n[e] && n[e].splice(g(n[e], t), 1) : delete n[e];
        }), this;
      }
    }, emit: function (e, t) {
      this.options.domEvents && ce(e, t);var n = this.handlers[e] && this.handlers[e].slice();if (n && n.length) {
        t.type = e, t.preventDefault = function () {
          t.srcEvent.preventDefault();
        };for (var i = 0; i < n.length;) n[i](t), i++;
      }
    }, destroy: function () {
      this.element && le(this, !1), this.handlers = {}, this.session = {}, this.input.destroy(), this.element = null;
    } }, pe(se, { INPUT_START: ke, INPUT_MOVE: Oe, INPUT_END: Re, INPUT_CANCEL: Me, STATE_POSSIBLE: ft, STATE_BEGAN: ht, STATE_CHANGED: mt, STATE_ENDED: vt, STATE_RECOGNIZED: gt, STATE_CANCELLED: yt, STATE_FAILED: wt, DIRECTION_NONE: Le, DIRECTION_LEFT: _e, DIRECTION_RIGHT: Pe, DIRECTION_UP: He, DIRECTION_DOWN: Ue, DIRECTION_HORIZONTAL: Fe, DIRECTION_VERTICAL: qe, DIRECTION_ALL: je, Manager: ue, Input: E, TouchAction: X, TouchInput: j, MouseInput: H, PointerEventInput: U, TouchMouseInput: B, SingleTouchInput: F, Recognizer: G, AttrRecognizer: ee, Tap: ae, Pan: te, Swipe: re, Pinch: ne, Rotate: oe, Press: ie, on: d, off: f, each: a, merge: we, extend: ye, assign: pe, inherit: u, bindFn: l, prefixed: x });var Tt = "undefined" != typeof e ? e : "undefined" != typeof self ? self : {};Tt.Hammer = se, "function" == typeof define && define.amd ? define(function () {
    return se;
  }) : "undefined" != typeof module && module.exports ? module.exports = se : e[n] = se;
}(window, document, "Hammer"), function (e) {
  "function" == typeof define && define.amd ? define(["jquery", "hammerjs"], e) : "object" == typeof exports ? e(require("jquery"), require("hammerjs")) : e(jQuery, Hammer);
}(function (e, t) {
  function n(n, i) {
    var o = e(n);o.data("hammer") || o.data("hammer", new t(o[0], i));
  }e.fn.hammer = function (e) {
    return this.each(function () {
      n(this, e);
    });
  }, t.Manager.prototype.emit = function (t) {
    return function (n, i) {
      t.call(this, n, i), e(this.element).trigger({ type: n, gesture: i });
    };
  }(t.Manager.prototype.emit);
}), function (e) {
  "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e(require("jquery")) : e(jQuery);
}(function (e) {
  "use strict";
  function t(t, o) {
    function r() {
      return h.update(), s(), h;
    }function a() {
      w.css(I, h.thumbPosition), v.css(I, -h.contentPosition), g.css(E, h.trackSize), y.css(E, h.trackSize), w.css(E, h.thumbSize);
    }function s() {
      x ? m[0].ontouchstart = function (e) {
        1 === e.touches.length && (e.stopPropagation(), c(e.touches[0]));
      } : (w.bind("mousedown", function (e) {
        e.stopPropagation(), c(e);
      }), y.bind("mousedown", function (e) {
        c(e, !0);
      })), e(window).resize(function () {
        h.update("relative");
      }), h.options.wheel && window.addEventListener ? t[0].addEventListener(b, p, !1) : h.options.wheel && (t[0].onmousewheel = p);
    }function u() {
      return h.contentPosition > 0;
    }function l() {
      return h.contentPosition <= h.contentSize - h.viewportSize - 5;
    }function c(t, n) {
      h.hasContentToSroll && (e("body").addClass("noSelect"), S = n ? w.offset()[I] : T ? t.pageX : t.pageY, x ? (document.ontouchmove = function (e) {
        (h.options.touchLock || u() && l()) && e.preventDefault(), d(e.touches[0]);
      }, document.ontouchend = f) : (e(document).bind("mousemove", d), e(document).bind("mouseup", f), w.bind("mouseup", f), y.bind("mouseup", f)), d(t));
    }function p(n) {
      if (h.hasContentToSroll) {
        var i = n || window.event,
            o = -(i.deltaY || i.detail || -1 / 3 * i.wheelDelta) / 40,
            r = 1 === i.deltaMode ? h.options.wheelSpeed : 1;h.contentPosition -= o * r * h.options.wheelSpeed, h.contentPosition = Math.min(h.contentSize - h.viewportSize, Math.max(0, h.contentPosition)), h.thumbPosition = h.contentPosition / h.trackRatio, t.trigger("move"), w.css(I, h.thumbPosition), v.css(I, -h.contentPosition), (h.options.wheelLock || u() && l()) && (i = e.event.fix(i), i.preventDefault());
      }
    }function d(e) {
      if (h.hasContentToSroll) {
        var n = T ? e.pageX : e.pageY,
            i = x ? S - n : n - S,
            o = Math.min(h.trackSize - h.thumbSize, Math.max(0, h.thumbPosition + i));h.contentPosition = o * h.trackRatio, t.trigger("move"), w.css(I, o), v.css(I, -h.contentPosition);
      }
    }function f() {
      h.thumbPosition = parseInt(w.css(I), 10) || 0, e("body").removeClass("noSelect"), e(document).unbind("mousemove", d), e(document).unbind("mouseup", f), w.unbind("mouseup", f), y.unbind("mouseup", f), document.ontouchmove = document.ontouchend = null;
    }this.options = e.extend({}, i, o), this._defaults = i, this._name = n;var h = this,
        m = t.find(".viewport"),
        v = t.find(".overview"),
        g = t.find(".scrollbar"),
        y = g.find(".track"),
        w = g.find(".thumb"),
        x = "ontouchstart" in document.documentElement,
        b = "onwheel" in document.createElement("div") ? "wheel" : void 0 !== document.onmousewheel ? "mousewheel" : "DOMMouseScroll",
        T = "x" === this.options.axis,
        E = T ? "width" : "height",
        I = T ? "left" : "top",
        S = 0;return this.contentPosition = 0, this.viewportSize = 0, this.contentSize = 0, this.contentRatio = 0, this.trackSize = 0, this.trackRatio = 0, this.thumbSize = 0, this.thumbPosition = 0, this.hasContentToSroll = !1, this.update = function (e) {
      var t = E.charAt(0).toUpperCase() + E.slice(1).toLowerCase();switch (this.viewportSize = m[0]["offset" + t], this.contentSize = v[0]["scroll" + t], this.contentRatio = this.viewportSize / this.contentSize, this.trackSize = this.options.trackSize || this.viewportSize, this.thumbSize = Math.min(this.trackSize, Math.max(this.options.thumbSizeMin, this.options.thumbSize || this.trackSize * this.contentRatio)), this.trackRatio = (this.contentSize - this.viewportSize) / (this.trackSize - this.thumbSize), this.hasContentToSroll = this.contentRatio < 1, g.toggleClass("disable", !this.hasContentToSroll), e) {case "bottom":
          this.contentPosition = Math.max(this.contentSize - this.viewportSize, 0);break;case "relative":
          this.contentPosition = Math.min(Math.max(this.contentSize - this.viewportSize, 0), Math.max(0, this.contentPosition));break;default:
          this.contentPosition = parseInt(e, 10) || 0;}return this.thumbPosition = this.contentPosition / this.trackRatio, a(), h;
    }, r();
  }var n = "tinyscrollbar",
      i = { axis: "y", wheel: !0, wheelSpeed: 40, wheelLock: !0, touchLock: !0, trackSize: !1, thumbSize: !1, thumbSizeMin: 20 };e.fn[n] = function (i) {
    return this.each(function () {
      e.data(this, "plugin_" + n) || e.data(this, "plugin_" + n, new t(e(this), i));
    });
  };
}), /*! PhotoSwipe Default UI - 4.1.1 - 2015-12-24
    * http://photoswipe.com
    * Copyright (c) 2015 Dmitry Semenov; */
!function (e, t) {
  "function" == typeof define && define.amd ? define(t) : "object" == typeof exports ? module.exports = t() : e.PhotoSwipeUI_Default = t();
}(this, function () {
  "use strict";
  var e = function (e, t) {
    var n,
        i,
        o,
        r,
        a,
        s,
        u,
        l,
        c,
        p,
        d,
        f,
        h,
        m,
        v,
        g,
        y,
        w,
        x,
        b = this,
        T = !1,
        E = !0,
        I = !0,
        S = { barsSize: { top: 44, bottom: "auto" }, closeElClasses: ["item", "caption", "zoom-wrap", "ui", "top-bar"], timeToIdle: 4e3, timeToIdleOutside: 1e3, loadingIndicatorDelay: 1e3, addCaptionHTMLFn: function (e, t) {
        return e.title ? (t.children[0].innerHTML = e.title, !0) : (t.children[0].innerHTML = "", !1);
      }, closeEl: !0, captionEl: !0, fullscreenEl: !0, zoomEl: !0, shareEl: !0, counterEl: !0, arrowEl: !0, preloaderEl: !0, tapToClose: !1, tapToToggleControls: !0, clickToCloseNonZoomable: !0, shareButtons: [{ id: "facebook", label: "Share on Facebook", url: "https://www.facebook.com/sharer/sharer.php?u={{url}}" }, { id: "twitter", label: "Tweet", url: "https://twitter.com/intent/tweet?text={{text}}&url={{url}}" }, { id: "pinterest", label: "Pin it", url: "http://www.pinterest.com/pin/create/button/?url={{url}}&media={{image_url}}&description={{text}}" }, { id: "download", label: "Download image", url: "{{raw_image_url}}", download: !0 }], getImageURLForShare: function () {
        return e.currItem.src || "";
      }, getPageURLForShare: function () {
        return window.location.href;
      }, getTextForShare: function () {
        return e.currItem.title || "";
      }, indexIndicatorSep: " / ", fitControlsWidth: 1200 },
        A = function (e) {
      if (g) return !0;e = e || window.event, v.timeToIdle && v.mouseUsed && !c && P();for (var n, i, o = e.target || e.srcElement, r = o.getAttribute("class") || "", a = 0; a < W.length; a++) n = W[a], n.onTap && r.indexOf("pswp__" + n.name) > -1 && (n.onTap(), i = !0);if (i) {
        e.stopPropagation && e.stopPropagation(), g = !0;var s = t.features.isOldAndroid ? 600 : 30;y = setTimeout(function () {
          g = !1;
        }, s);
      }
    },
        C = function () {
      return !e.likelyTouchDevice || v.mouseUsed || screen.width > v.fitControlsWidth;
    },
        D = function (e, n, i) {
      t[(i ? "add" : "remove") + "Class"](e, "pswp__" + n);
    },
        N = function () {
      var e = 1 === v.getNumItemsFn();e !== m && (D(i, "ui--one-slide", e), m = e);
    },
        k = function () {
      D(u, "share-modal--hidden", I);
    },
        O = function () {
      return I = !I, I ? (t.removeClass(u, "pswp__share-modal--fade-in"), setTimeout(function () {
        I && k();
      }, 300)) : (k(), setTimeout(function () {
        I || t.addClass(u, "pswp__share-modal--fade-in");
      }, 30)), I || M(), !1;
    },
        R = function (t) {
      t = t || window.event;var n = t.target || t.srcElement;return e.shout("shareLinkClick", t, n), !!n.href && (!!n.hasAttribute("download") || (window.open(n.href, "pswp_share", "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,top=100,left=" + (window.screen ? Math.round(screen.width / 2 - 275) : 100)), I || O(), !1));
    },
        M = function () {
      for (var e, t, n, i, o, r = "", a = 0; a < v.shareButtons.length; a++) e = v.shareButtons[a], n = v.getImageURLForShare(e), i = v.getPageURLForShare(e), o = v.getTextForShare(e), t = e.url.replace("{{url}}", encodeURIComponent(i)).replace("{{image_url}}", encodeURIComponent(n)).replace("{{raw_image_url}}", n).replace("{{text}}", encodeURIComponent(o)), r += '<a href="' + t + '" target="_blank" class="pswp__share--' + e.id + '"' + (e.download ? "download" : "") + ">" + e.label + "</a>", v.parseShareButtonOut && (r = v.parseShareButtonOut(e, r));u.children[0].innerHTML = r, u.children[0].onclick = R;
    },
        L = function (e) {
      for (var n = 0; n < v.closeElClasses.length; n++) if (t.hasClass(e, "pswp__" + v.closeElClasses[n])) return !0;
    },
        _ = 0,
        P = function () {
      clearTimeout(x), _ = 0, c && b.setIdle(!1);
    },
        H = function (e) {
      e = e ? e : window.event;var t = e.relatedTarget || e.toElement;t && "HTML" !== t.nodeName || (clearTimeout(x), x = setTimeout(function () {
        b.setIdle(!0);
      }, v.timeToIdleOutside));
    },
        U = function () {
      v.fullscreenEl && !t.features.isOldAndroid && (n || (n = b.getFullscreenAPI()), n ? (t.bind(document, n.eventK, b.updateFullscreen), b.updateFullscreen(), t.addClass(e.template, "pswp--supports-fs")) : t.removeClass(e.template, "pswp--supports-fs"));
    },
        F = function () {
      v.preloaderEl && (q(!0), p("beforeChange", function () {
        clearTimeout(h), h = setTimeout(function () {
          e.currItem && e.currItem.loading ? (!e.allowProgressiveImg() || e.currItem.img && !e.currItem.img.naturalWidth) && q(!1) : q(!0);
        }, v.loadingIndicatorDelay);
      }), p("imageLoadComplete", function (t, n) {
        e.currItem === n && q(!0);
      }));
    },
        q = function (e) {
      f !== e && (D(d, "preloader--active", !e), f = e);
    },
        j = function (e) {
      var n = e.vGap;if (C()) {
        var a = v.barsSize;if (v.captionEl && "auto" === a.bottom) {
          if (r || (r = t.createEl("pswp__caption pswp__caption--fake"), r.appendChild(t.createEl("pswp__caption__center")), i.insertBefore(r, o), t.addClass(i, "pswp__ui--fit")), v.addCaptionHTMLFn(e, r, !0)) {
            var s = r.clientHeight;n.bottom = parseInt(s, 10) || 44;
          } else n.bottom = a.top;
        } else n.bottom = "auto" === a.bottom ? 0 : a.bottom;n.top = a.top;
      } else n.top = n.bottom = 0;
    },
        z = function () {
      v.timeToIdle && p("mouseUsed", function () {
        t.bind(document, "mousemove", P), t.bind(document, "mouseout", H), w = setInterval(function () {
          _++, 2 === _ && b.setIdle(!0);
        }, v.timeToIdle / 2);
      });
    },
        B = function () {
      p("onVerticalDrag", function (e) {
        E && .95 > e ? b.hideControls() : !E && e >= .95 && b.showControls();
      });var e;p("onPinchClose", function (t) {
        E && .9 > t ? (b.hideControls(), e = !0) : e && !E && t > .9 && b.showControls();
      }), p("zoomGestureEnded", function () {
        e = !1, e && !E && b.showControls();
      });
    },
        W = [{ name: "caption", option: "captionEl", onInit: function (e) {
        o = e;
      } }, { name: "share-modal", option: "shareEl", onInit: function (e) {
        u = e;
      }, onTap: function () {
        O();
      } }, { name: "button--share", option: "shareEl", onInit: function (e) {
        s = e;
      }, onTap: function () {
        O();
      } }, { name: "button--zoom", option: "zoomEl", onTap: e.toggleDesktopZoom }, { name: "counter", option: "counterEl", onInit: function (e) {
        a = e;
      } }, { name: "button--close", option: "closeEl", onTap: e.close }, { name: "button--arrow--left", option: "arrowEl", onTap: e.prev }, { name: "button--arrow--right", option: "arrowEl", onTap: e.next }, { name: "button--fs", option: "fullscreenEl", onTap: function () {
        n.isFullscreen() ? n.exit() : n.enter();
      } }, { name: "preloader", option: "preloaderEl", onInit: function (e) {
        d = e;
      } }],
        Y = function () {
      var e,
          n,
          o,
          r = function (i) {
        if (i) for (var r = i.length, a = 0; r > a; a++) {
          e = i[a], n = e.className;for (var s = 0; s < W.length; s++) o = W[s], n.indexOf("pswp__" + o.name) > -1 && (v[o.option] ? (t.removeClass(e, "pswp__element--disabled"), o.onInit && o.onInit(e)) : t.addClass(e, "pswp__element--disabled"));
        }
      };r(i.children);var a = t.getChildByClass(i, "pswp__top-bar");a && r(a.children);
    };b.init = function () {
      t.extend(e.options, S, !0), v = e.options, i = t.getChildByClass(e.scrollWrap, "pswp__ui"), p = e.listen, B(), p("beforeChange", b.update), p("doubleTap", function (t) {
        var n = e.currItem.initialZoomLevel;e.getZoomLevel() !== n ? e.zoomTo(n, t, 333) : e.zoomTo(v.getDoubleTapZoom(!1, e.currItem), t, 333);
      }), p("preventDragEvent", function (e, t, n) {
        var i = e.target || e.srcElement;i && i.getAttribute("class") && e.type.indexOf("mouse") > -1 && (i.getAttribute("class").indexOf("__caption") > 0 || /(SMALL|STRONG|EM)/i.test(i.tagName)) && (n.prevent = !1);
      }), p("bindEvents", function () {
        t.bind(i, "pswpTap click", A), t.bind(e.scrollWrap, "pswpTap", b.onGlobalTap), e.likelyTouchDevice || t.bind(e.scrollWrap, "mouseover", b.onMouseOver);
      }), p("unbindEvents", function () {
        I || O(), w && clearInterval(w), t.unbind(document, "mouseout", H), t.unbind(document, "mousemove", P), t.unbind(i, "pswpTap click", A), t.unbind(e.scrollWrap, "pswpTap", b.onGlobalTap), t.unbind(e.scrollWrap, "mouseover", b.onMouseOver), n && (t.unbind(document, n.eventK, b.updateFullscreen), n.isFullscreen() && (v.hideAnimationDuration = 0, n.exit()), n = null);
      }), p("destroy", function () {
        v.captionEl && (r && i.removeChild(r), t.removeClass(o, "pswp__caption--empty")), u && (u.children[0].onclick = null), t.removeClass(i, "pswp__ui--over-close"), t.addClass(i, "pswp__ui--hidden"), b.setIdle(!1);
      }), v.showAnimationDuration || t.removeClass(i, "pswp__ui--hidden"), p("initialZoomIn", function () {
        v.showAnimationDuration && t.removeClass(i, "pswp__ui--hidden");
      }), p("initialZoomOut", function () {
        t.addClass(i, "pswp__ui--hidden");
      }), p("parseVerticalMargin", j), Y(), v.shareEl && s && u && (I = !0), N(), z(), U(), F();
    }, b.setIdle = function (e) {
      c = e, D(i, "ui--idle", e);
    }, b.update = function () {
      E && e.currItem ? (b.updateIndexIndicator(), v.captionEl && (v.addCaptionHTMLFn(e.currItem, o), D(o, "caption--empty", !e.currItem.title)), T = !0) : T = !1, I || O(), N();
    }, b.updateFullscreen = function (i) {
      i && setTimeout(function () {
        e.setScrollOffset(0, t.getScrollY());
      }, 50), t[(n.isFullscreen() ? "add" : "remove") + "Class"](e.template, "pswp--fs");
    }, b.updateIndexIndicator = function () {
      v.counterEl && (a.innerHTML = e.getCurrentIndex() + 1 + v.indexIndicatorSep + v.getNumItemsFn());
    }, b.onGlobalTap = function (n) {
      n = n || window.event;var i = n.target || n.srcElement;if (!g) if (n.detail && "mouse" === n.detail.pointerType) {
        if (L(i)) return void e.close();t.hasClass(i, "pswp__img") && (1 === e.getZoomLevel() && e.getZoomLevel() <= e.currItem.fitRatio ? v.clickToCloseNonZoomable && e.close() : e.toggleDesktopZoom(n.detail.releasePoint));
      } else if (v.tapToToggleControls && (E ? b.hideControls() : b.showControls()), v.tapToClose && (t.hasClass(i, "pswp__img") || L(i))) return void e.close();
    }, b.onMouseOver = function (e) {
      e = e || window.event;var t = e.target || e.srcElement;D(i, "ui--over-close", L(t));
    }, b.hideControls = function () {
      t.addClass(i, "pswp__ui--hidden"), E = !1;
    }, b.showControls = function () {
      E = !0, T || b.update(), t.removeClass(i, "pswp__ui--hidden");
    }, b.supportsFullscreen = function () {
      var e = document;return !!(e.exitFullscreen || e.mozCancelFullScreen || e.webkitExitFullscreen || e.msExitFullscreen);
    }, b.getFullscreenAPI = function () {
      var t,
          n = document.documentElement,
          i = "fullscreenchange";return n.requestFullscreen ? t = { enterK: "requestFullscreen", exitK: "exitFullscreen", elementK: "fullscreenElement", eventK: i } : n.mozRequestFullScreen ? t = { enterK: "mozRequestFullScreen", exitK: "mozCancelFullScreen", elementK: "mozFullScreenElement", eventK: "moz" + i } : n.webkitRequestFullscreen ? t = { enterK: "webkitRequestFullscreen", exitK: "webkitExitFullscreen", elementK: "webkitFullscreenElement", eventK: "webkit" + i } : n.msRequestFullscreen && (t = { enterK: "msRequestFullscreen", exitK: "msExitFullscreen", elementK: "msFullscreenElement", eventK: "MSFullscreenChange" }), t && (t.enter = function () {
        return l = v.closeOnScroll, v.closeOnScroll = !1, "webkitRequestFullscreen" !== this.enterK ? e.template[this.enterK]() : void e.template[this.enterK](Element.ALLOW_KEYBOARD_INPUT);
      }, t.exit = function () {
        return v.closeOnScroll = l, document[this.exitK]();
      }, t.isFullscreen = function () {
        return document[this.elementK];
      }), t;
    };
  };return e;
}), /*! PhotoSwipe - v4.1.1 - 2015-12-24
    * http://photoswipe.com
    * Copyright (c) 2015 Dmitry Semenov; */
!function (e, t) {
  "function" == typeof define && define.amd ? define(t) : "object" == typeof exports ? module.exports = t() : e.PhotoSwipe = t();
}(this, function () {
  "use strict";
  var e = function (e, t, n, i) {
    var o = { features: null, bind: function (e, t, n, i) {
        var o = (i ? "remove" : "add") + "EventListener";t = t.split(" ");for (var r = 0; r < t.length; r++) t[r] && e[o](t[r], n, !1);
      }, isArray: function (e) {
        return e instanceof Array;
      }, createEl: function (e, t) {
        var n = document.createElement(t || "div");return e && (n.className = e), n;
      }, getScrollY: function () {
        var e = window.pageYOffset;return void 0 !== e ? e : document.documentElement.scrollTop;
      }, unbind: function (e, t, n) {
        o.bind(e, t, n, !0);
      }, removeClass: function (e, t) {
        var n = new RegExp("(\\s|^)" + t + "(\\s|$)");e.className = e.className.replace(n, " ").replace(/^\s\s*/, "").replace(/\s\s*$/, "");
      }, addClass: function (e, t) {
        o.hasClass(e, t) || (e.className += (e.className ? " " : "") + t);
      }, hasClass: function (e, t) {
        return e.className && new RegExp("(^|\\s)" + t + "(\\s|$)").test(e.className);
      }, getChildByClass: function (e, t) {
        for (var n = e.firstChild; n;) {
          if (o.hasClass(n, t)) return n;n = n.nextSibling;
        }
      }, arraySearch: function (e, t, n) {
        for (var i = e.length; i--;) if (e[i][n] === t) return i;return -1;
      }, extend: function (e, t, n) {
        for (var i in t) if (t.hasOwnProperty(i)) {
          if (n && e.hasOwnProperty(i)) continue;e[i] = t[i];
        }
      }, easing: { sine: { out: function (e) {
            return Math.sin(e * (Math.PI / 2));
          }, inOut: function (e) {
            return -(Math.cos(Math.PI * e) - 1) / 2;
          } }, cubic: { out: function (e) {
            return --e * e * e + 1;
          } } }, detectFeatures: function () {
        if (o.features) return o.features;var e = o.createEl(),
            t = e.style,
            n = "",
            i = {};if (i.oldIE = document.all && !document.addEventListener, i.touch = "ontouchstart" in window, window.requestAnimationFrame && (i.raf = window.requestAnimationFrame, i.caf = window.cancelAnimationFrame), i.pointerEvent = navigator.pointerEnabled || navigator.msPointerEnabled, !i.pointerEvent) {
          var r = navigator.userAgent;if (/iP(hone|od)/.test(navigator.platform)) {
            var a = navigator.appVersion.match(/OS (\d+)_(\d+)_?(\d+)?/);a && a.length > 0 && (a = parseInt(a[1], 10), a >= 1 && 8 > a && (i.isOldIOSPhone = !0));
          }var s = r.match(/Android\s([0-9\.]*)/),
              u = s ? s[1] : 0;u = parseFloat(u), u >= 1 && (4.4 > u && (i.isOldAndroid = !0), i.androidVersion = u), i.isMobileOpera = /opera mini|opera mobi/i.test(r);
        }for (var l, c, p = ["transform", "perspective", "animationName"], d = ["", "webkit", "Moz", "ms", "O"], f = 0; 4 > f; f++) {
          n = d[f];for (var h = 0; 3 > h; h++) l = p[h], c = n + (n ? l.charAt(0).toUpperCase() + l.slice(1) : l), !i[l] && c in t && (i[l] = c);n && !i.raf && (n = n.toLowerCase(), i.raf = window[n + "RequestAnimationFrame"], i.raf && (i.caf = window[n + "CancelAnimationFrame"] || window[n + "CancelRequestAnimationFrame"]));
        }if (!i.raf) {
          var m = 0;i.raf = function (e) {
            var t = new Date().getTime(),
                n = Math.max(0, 16 - (t - m)),
                i = window.setTimeout(function () {
              e(t + n);
            }, n);return m = t + n, i;
          }, i.caf = function (e) {
            clearTimeout(e);
          };
        }return i.svg = !!document.createElementNS && !!document.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect, o.features = i, i;
      } };o.detectFeatures(), o.features.oldIE && (o.bind = function (e, t, n, i) {
      t = t.split(" ");for (var o, r = (i ? "detach" : "attach") + "Event", a = function () {
        n.handleEvent.call(n);
      }, s = 0; s < t.length; s++) if (o = t[s]) if ("object" == typeof n && n.handleEvent) {
        if (i) {
          if (!n["oldIE" + o]) return !1;
        } else n["oldIE" + o] = a;e[r]("on" + o, n["oldIE" + o]);
      } else e[r]("on" + o, n);
    });var r = this,
        a = 25,
        s = 3,
        u = { allowPanToNext: !0, spacing: .12, bgOpacity: 1, mouseUsed: !1, loop: !0, pinchToClose: !0, closeOnScroll: !0, closeOnVerticalDrag: !0, verticalDragRange: .75, hideAnimationDuration: 333, showAnimationDuration: 333, showHideOpacity: !1, focus: !0, escKey: !0, arrowKeys: !0, mainScrollEndFriction: .35, panEndFriction: .35, isClickableElement: function (e) {
        return "A" === e.tagName;
      }, getDoubleTapZoom: function (e, t) {
        return e ? 1 : t.initialZoomLevel < .7 ? 1 : 1.33;
      }, maxSpreadZoom: 1.33, modal: !0, scaleMode: "fit" };o.extend(u, i);var l,
        c,
        p,
        d,
        f,
        h,
        m,
        v,
        g,
        y,
        w,
        x,
        b,
        T,
        E,
        I,
        S,
        A,
        C,
        D,
        N,
        k,
        O,
        R,
        M,
        L,
        _,
        P,
        H,
        U,
        F,
        q,
        j,
        z,
        B,
        W,
        Y,
        $,
        X,
        K,
        Z,
        G,
        V,
        Q,
        J,
        ee,
        te,
        ne,
        ie,
        oe,
        re,
        ae,
        se,
        ue,
        le,
        ce,
        pe = function () {
      return { x: 0, y: 0 };
    },
        de = pe(),
        fe = pe(),
        he = pe(),
        me = {},
        ve = 0,
        ge = {},
        ye = pe(),
        we = 0,
        xe = !0,
        be = [],
        Te = {},
        Ee = !1,
        Ie = function (e, t) {
      o.extend(r, t.publicMethods), be.push(e);
    },
        Se = function (e) {
      var t = Jt();return e > t - 1 ? e - t : 0 > e ? t + e : e;
    },
        Ae = {},
        Ce = function (e, t) {
      return Ae[e] || (Ae[e] = []), Ae[e].push(t);
    },
        De = function (e) {
      var t = Ae[e];if (t) {
        var n = Array.prototype.slice.call(arguments);n.shift();for (var i = 0; i < t.length; i++) t[i].apply(r, n);
      }
    },
        Ne = function () {
      return new Date().getTime();
    },
        ke = function (e) {
      ue = e, r.bg.style.opacity = e * u.bgOpacity;
    },
        Oe = function (e, t, n, i, o) {
      (!Ee || o && o !== r.currItem) && (i /= o ? o.fitRatio : r.currItem.fitRatio), e[k] = x + t + "px, " + n + "px" + b + " scale(" + i + ")";
    },
        Re = function (e) {
      ie && (e && (y > r.currItem.fitRatio ? Ee || (dn(r.currItem, !1, !0), Ee = !0) : Ee && (dn(r.currItem), Ee = !1)), Oe(ie, he.x, he.y, y));
    },
        Me = function (e) {
      e.container && Oe(e.container.style, e.initialPosition.x, e.initialPosition.y, e.initialZoomLevel, e);
    },
        Le = function (e, t) {
      t[k] = x + e + "px, 0px" + b;
    },
        _e = function (e, t) {
      if (!u.loop && t) {
        var n = d + (ye.x * ve - e) / ye.x,
            i = Math.round(e - yt.x);(0 > n && i > 0 || n >= Jt() - 1 && 0 > i) && (e = yt.x + i * u.mainScrollEndFriction);
      }yt.x = e, Le(e, f);
    },
        Pe = function (e, t) {
      var n = wt[e] - ge[e];return fe[e] + de[e] + n - n * (t / w);
    },
        He = function (e, t) {
      e.x = t.x, e.y = t.y, t.id && (e.id = t.id);
    },
        Ue = function (e) {
      e.x = Math.round(e.x), e.y = Math.round(e.y);
    },
        Fe = null,
        qe = function () {
      Fe && (o.unbind(document, "mousemove", qe), o.addClass(e, "pswp--has_mouse"), u.mouseUsed = !0, De("mouseUsed")), Fe = setTimeout(function () {
        Fe = null;
      }, 100);
    },
        je = function () {
      o.bind(document, "keydown", r), F.transform && o.bind(r.scrollWrap, "click", r), u.mouseUsed || o.bind(document, "mousemove", qe), o.bind(window, "resize scroll", r), De("bindEvents");
    },
        ze = function () {
      o.unbind(window, "resize", r), o.unbind(window, "scroll", g.scroll), o.unbind(document, "keydown", r), o.unbind(document, "mousemove", qe), F.transform && o.unbind(r.scrollWrap, "click", r), $ && o.unbind(window, m, r), De("unbindEvents");
    },
        Be = function (e, t) {
      var n = un(r.currItem, me, e);return t && (ne = n), n;
    },
        We = function (e) {
      return e || (e = r.currItem), e.initialZoomLevel;
    },
        Ye = function (e) {
      return e || (e = r.currItem), e.w > 0 ? u.maxSpreadZoom : 1;
    },
        $e = function (e, t, n, i) {
      return i === r.currItem.initialZoomLevel ? (n[e] = r.currItem.initialPosition[e], !0) : (n[e] = Pe(e, i), n[e] > t.min[e] ? (n[e] = t.min[e], !0) : n[e] < t.max[e] && (n[e] = t.max[e], !0));
    },
        Xe = function () {
      if (k) {
        var t = F.perspective && !R;return x = "translate" + (t ? "3d(" : "("), void (b = F.perspective ? ", 0px)" : ")");
      }k = "left", o.addClass(e, "pswp--ie"), Le = function (e, t) {
        t.left = e + "px";
      }, Me = function (e) {
        var t = e.fitRatio > 1 ? 1 : e.fitRatio,
            n = e.container.style,
            i = t * e.w,
            o = t * e.h;n.width = i + "px", n.height = o + "px", n.left = e.initialPosition.x + "px", n.top = e.initialPosition.y + "px";
      }, Re = function () {
        if (ie) {
          var e = ie,
              t = r.currItem,
              n = t.fitRatio > 1 ? 1 : t.fitRatio,
              i = n * t.w,
              o = n * t.h;e.width = i + "px", e.height = o + "px", e.left = he.x + "px", e.top = he.y + "px";
        }
      };
    },
        Ke = function (e) {
      var t = "";u.escKey && 27 === e.keyCode ? t = "close" : u.arrowKeys && (37 === e.keyCode ? t = "prev" : 39 === e.keyCode && (t = "next")), t && (e.ctrlKey || e.altKey || e.shiftKey || e.metaKey || (e.preventDefault ? e.preventDefault() : e.returnValue = !1, r[t]()));
    },
        Ze = function (e) {
      e && (Z || K || oe || W) && (e.preventDefault(), e.stopPropagation());
    },
        Ge = function () {
      r.setScrollOffset(0, o.getScrollY());
    },
        Ve = {},
        Qe = 0,
        Je = function (e) {
      Ve[e] && (Ve[e].raf && L(Ve[e].raf), Qe--, delete Ve[e]);
    },
        et = function (e) {
      Ve[e] && Je(e), Ve[e] || (Qe++, Ve[e] = {});
    },
        tt = function () {
      for (var e in Ve) Ve.hasOwnProperty(e) && Je(e);
    },
        nt = function (e, t, n, i, o, r, a) {
      var s,
          u = Ne();et(e);var l = function () {
        if (Ve[e]) {
          if (s = Ne() - u, s >= i) return Je(e), r(n), void (a && a());r((n - t) * o(s / i) + t), Ve[e].raf = M(l);
        }
      };l();
    },
        it = { shout: De, listen: Ce, viewportSize: me, options: u, isMainScrollAnimating: function () {
        return oe;
      }, getZoomLevel: function () {
        return y;
      }, getCurrentIndex: function () {
        return d;
      }, isDragging: function () {
        return $;
      }, isZooming: function () {
        return J;
      }, setScrollOffset: function (e, t) {
        ge.x = e, U = ge.y = t, De("updateScrollOffset", ge);
      }, applyZoomPan: function (e, t, n, i) {
        he.x = t, he.y = n, y = e, Re(i);
      }, init: function () {
        if (!l && !c) {
          var n;r.framework = o, r.template = e, r.bg = o.getChildByClass(e, "pswp__bg"), _ = e.className, l = !0, F = o.detectFeatures(), M = F.raf, L = F.caf, k = F.transform, H = F.oldIE, r.scrollWrap = o.getChildByClass(e, "pswp__scroll-wrap"), r.container = o.getChildByClass(r.scrollWrap, "pswp__container"), f = r.container.style, r.itemHolders = I = [{ el: r.container.children[0], wrap: 0, index: -1 }, { el: r.container.children[1], wrap: 0, index: -1 }, { el: r.container.children[2], wrap: 0, index: -1 }], I[0].el.style.display = I[2].el.style.display = "none", Xe(), g = { resize: r.updateSize, scroll: Ge, keydown: Ke, click: Ze };var i = F.isOldIOSPhone || F.isOldAndroid || F.isMobileOpera;for (F.animationName && F.transform && !i || (u.showAnimationDuration = u.hideAnimationDuration = 0), n = 0; n < be.length; n++) r["init" + be[n]]();if (t) {
            var a = r.ui = new t(r, o);a.init();
          }De("firstUpdate"), d = d || u.index || 0, (isNaN(d) || 0 > d || d >= Jt()) && (d = 0), r.currItem = Qt(d), (F.isOldIOSPhone || F.isOldAndroid) && (xe = !1), e.setAttribute("aria-hidden", "false"), u.modal && (xe ? e.style.position = "fixed" : (e.style.position = "absolute", e.style.top = o.getScrollY() + "px")), void 0 === U && (De("initialLayout"), U = P = o.getScrollY());var p = "pswp--open ";for (u.mainClass && (p += u.mainClass + " "), u.showHideOpacity && (p += "pswp--animate_opacity "), p += R ? "pswp--touch" : "pswp--notouch", p += F.animationName ? " pswp--css_animation" : "", p += F.svg ? " pswp--svg" : "", o.addClass(e, p), r.updateSize(), h = -1, we = null, n = 0; s > n; n++) Le((n + h) * ye.x, I[n].el.style);H || o.bind(r.scrollWrap, v, r), Ce("initialZoomInEnd", function () {
            r.setContent(I[0], d - 1), r.setContent(I[2], d + 1), I[0].el.style.display = I[2].el.style.display = "block", u.focus && e.focus(), je();
          }), r.setContent(I[1], d), r.updateCurrItem(), De("afterInit"), xe || (T = setInterval(function () {
            Qe || $ || J || y !== r.currItem.initialZoomLevel || r.updateSize();
          }, 1e3)), o.addClass(e, "pswp--visible");
        }
      }, close: function () {
        l && (l = !1, c = !0, De("close"), ze(), tn(r.currItem, null, !0, r.destroy));
      }, destroy: function () {
        De("destroy"), Kt && clearTimeout(Kt), e.setAttribute("aria-hidden", "true"), e.className = _, T && clearInterval(T), o.unbind(r.scrollWrap, v, r), o.unbind(window, "scroll", r), It(), tt(), Ae = null;
      }, panTo: function (e, t, n) {
        n || (e > ne.min.x ? e = ne.min.x : e < ne.max.x && (e = ne.max.x), t > ne.min.y ? t = ne.min.y : t < ne.max.y && (t = ne.max.y)), he.x = e, he.y = t, Re();
      }, handleEvent: function (e) {
        e = e || window.event, g[e.type] && g[e.type](e);
      }, goTo: function (e) {
        e = Se(e);var t = e - d;we = t, d = e, r.currItem = Qt(d), ve -= t, _e(ye.x * ve), tt(), oe = !1, r.updateCurrItem();
      }, next: function () {
        r.goTo(d + 1);
      }, prev: function () {
        r.goTo(d - 1);
      }, updateCurrZoomItem: function (e) {
        if (e && De("beforeChange", 0), I[1].el.children.length) {
          var t = I[1].el.children[0];ie = o.hasClass(t, "pswp__zoom-wrap") ? t.style : null;
        } else ie = null;ne = r.currItem.bounds, w = y = r.currItem.initialZoomLevel, he.x = ne.center.x, he.y = ne.center.y, e && De("afterChange");
      }, invalidateCurrItems: function () {
        E = !0;for (var e = 0; s > e; e++) I[e].item && (I[e].item.needsUpdate = !0);
      }, updateCurrItem: function (e) {
        if (0 !== we) {
          var t,
              n = Math.abs(we);if (!(e && 2 > n)) {
            r.currItem = Qt(d), Ee = !1, De("beforeChange", we), n >= s && (h += we + (we > 0 ? -s : s), n = s);for (var i = 0; n > i; i++) we > 0 ? (t = I.shift(), I[s - 1] = t, h++, Le((h + 2) * ye.x, t.el.style), r.setContent(t, d - n + i + 1 + 1)) : (t = I.pop(), I.unshift(t), h--, Le(h * ye.x, t.el.style), r.setContent(t, d + n - i - 1 - 1));if (ie && 1 === Math.abs(we)) {
              var o = Qt(S);o.initialZoomLevel !== y && (un(o, me), dn(o), Me(o));
            }we = 0, r.updateCurrZoomItem(), S = d, De("afterChange");
          }
        }
      }, updateSize: function (t) {
        if (!xe && u.modal) {
          var n = o.getScrollY();if (U !== n && (e.style.top = n + "px", U = n), !t && Te.x === window.innerWidth && Te.y === window.innerHeight) return;Te.x = window.innerWidth, Te.y = window.innerHeight, e.style.height = Te.y + "px";
        }if (me.x = r.scrollWrap.clientWidth, me.y = r.scrollWrap.clientHeight, Ge(), ye.x = me.x + Math.round(me.x * u.spacing), ye.y = me.y, _e(ye.x * ve), De("beforeResize"), void 0 !== h) {
          for (var i, a, l, c = 0; s > c; c++) i = I[c], Le((c + h) * ye.x, i.el.style), l = d + c - 1, u.loop && Jt() > 2 && (l = Se(l)), a = Qt(l), a && (E || a.needsUpdate || !a.bounds) ? (r.cleanSlide(a), r.setContent(i, l), 1 === c && (r.currItem = a, r.updateCurrZoomItem(!0)), a.needsUpdate = !1) : -1 === i.index && l >= 0 && r.setContent(i, l), a && a.container && (un(a, me), dn(a), Me(a));E = !1;
        }w = y = r.currItem.initialZoomLevel, ne = r.currItem.bounds, ne && (he.x = ne.center.x, he.y = ne.center.y, Re(!0)), De("resize");
      }, zoomTo: function (e, t, n, i, r) {
        t && (w = y, wt.x = Math.abs(t.x) - he.x, wt.y = Math.abs(t.y) - he.y, He(fe, he));var a = Be(e, !1),
            s = {};$e("x", a, s, e), $e("y", a, s, e);var u = y,
            l = { x: he.x, y: he.y };Ue(s);var c = function (t) {
          1 === t ? (y = e, he.x = s.x, he.y = s.y) : (y = (e - u) * t + u, he.x = (s.x - l.x) * t + l.x, he.y = (s.y - l.y) * t + l.y), r && r(t), Re(1 === t);
        };n ? nt("customZoomTo", 0, 1, n, i || o.easing.sine.inOut, c) : c(1);
      } },
        ot = 30,
        rt = 10,
        at = {},
        st = {},
        ut = {},
        lt = {},
        ct = {},
        pt = [],
        dt = {},
        ft = [],
        ht = {},
        mt = 0,
        vt = pe(),
        gt = 0,
        yt = pe(),
        wt = pe(),
        xt = pe(),
        bt = function (e, t) {
      return e.x === t.x && e.y === t.y;
    },
        Tt = function (e, t) {
      return Math.abs(e.x - t.x) < a && Math.abs(e.y - t.y) < a;
    },
        Et = function (e, t) {
      return ht.x = Math.abs(e.x - t.x), ht.y = Math.abs(e.y - t.y), Math.sqrt(ht.x * ht.x + ht.y * ht.y);
    },
        It = function () {
      G && (L(G), G = null);
    },
        St = function () {
      $ && (G = M(St), jt());
    },
        At = function () {
      return !("fit" === u.scaleMode && y === r.currItem.initialZoomLevel);
    },
        Ct = function (e, t) {
      return !(!e || e === document) && !(e.getAttribute("class") && e.getAttribute("class").indexOf("pswp__scroll-wrap") > -1) && (t(e) ? e : Ct(e.parentNode, t));
    },
        Dt = {},
        Nt = function (e, t) {
      return Dt.prevent = !Ct(e.target, u.isClickableElement), De("preventDragEvent", e, t, Dt), Dt.prevent;
    },
        kt = function (e, t) {
      return t.x = e.pageX, t.y = e.pageY, t.id = e.identifier, t;
    },
        Ot = function (e, t, n) {
      n.x = .5 * (e.x + t.x), n.y = .5 * (e.y + t.y);
    },
        Rt = function (e, t, n) {
      if (e - j > 50) {
        var i = ft.length > 2 ? ft.shift() : {};i.x = t, i.y = n, ft.push(i), j = e;
      }
    },
        Mt = function () {
      var e = he.y - r.currItem.initialPosition.y;return 1 - Math.abs(e / (me.y / 2));
    },
        Lt = {},
        _t = {},
        Pt = [],
        Ht = function (e) {
      for (; Pt.length > 0;) Pt.pop();return O ? (ce = 0, pt.forEach(function (e) {
        0 === ce ? Pt[0] = e : 1 === ce && (Pt[1] = e), ce++;
      })) : e.type.indexOf("touch") > -1 ? e.touches && e.touches.length > 0 && (Pt[0] = kt(e.touches[0], Lt), e.touches.length > 1 && (Pt[1] = kt(e.touches[1], _t))) : (Lt.x = e.pageX, Lt.y = e.pageY, Lt.id = "", Pt[0] = Lt), Pt;
    },
        Ut = function (e, t) {
      var n,
          i,
          o,
          a,
          s = 0,
          l = he[e] + t[e],
          c = t[e] > 0,
          p = yt.x + t.x,
          d = yt.x - dt.x;return n = l > ne.min[e] || l < ne.max[e] ? u.panEndFriction : 1, l = he[e] + t[e] * n, !u.allowPanToNext && y !== r.currItem.initialZoomLevel || (ie ? "h" !== re || "x" !== e || K || (c ? (l > ne.min[e] && (n = u.panEndFriction, s = ne.min[e] - l, i = ne.min[e] - fe[e]), (0 >= i || 0 > d) && Jt() > 1 ? (a = p, 0 > d && p > dt.x && (a = dt.x)) : ne.min.x !== ne.max.x && (o = l)) : (l < ne.max[e] && (n = u.panEndFriction, s = l - ne.max[e], i = fe[e] - ne.max[e]), (0 >= i || d > 0) && Jt() > 1 ? (a = p, d > 0 && p < dt.x && (a = dt.x)) : ne.min.x !== ne.max.x && (o = l))) : a = p, "x" !== e) ? void (oe || V || y > r.currItem.fitRatio && (he[e] += t[e] * n)) : (void 0 !== a && (_e(a, !0), V = a !== dt.x), ne.min.x !== ne.max.x && (void 0 !== o ? he.x = o : V || (he.x += t.x * n)), void 0 !== a);
    },
        Ft = function (e) {
      if (!("mousedown" === e.type && e.button > 0)) {
        if (Vt) return void e.preventDefault();if (!Y || "mousedown" !== e.type) {
          if (Nt(e, !0) && e.preventDefault(), De("pointerDown"), O) {
            var t = o.arraySearch(pt, e.pointerId, "id");0 > t && (t = pt.length), pt[t] = { x: e.pageX, y: e.pageY, id: e.pointerId };
          }var n = Ht(e),
              i = n.length;Q = null, tt(), $ && 1 !== i || ($ = ae = !0, o.bind(window, m, r), B = le = se = W = V = Z = X = K = !1, re = null, De("firstTouchStart", n), He(fe, he), de.x = de.y = 0, He(lt, n[0]), He(ct, lt), dt.x = ye.x * ve, ft = [{ x: lt.x, y: lt.y }], j = q = Ne(), Be(y, !0), It(), St()), !J && i > 1 && !oe && !V && (w = y, K = !1, J = X = !0, de.y = de.x = 0, He(fe, he), He(at, n[0]), He(st, n[1]), Ot(at, st, xt), wt.x = Math.abs(xt.x) - he.x, wt.y = Math.abs(xt.y) - he.y, ee = te = Et(at, st));
        }
      }
    },
        qt = function (e) {
      if (e.preventDefault(), O) {
        var t = o.arraySearch(pt, e.pointerId, "id");if (t > -1) {
          var n = pt[t];n.x = e.pageX, n.y = e.pageY;
        }
      }if ($) {
        var i = Ht(e);if (re || Z || J) Q = i;else if (yt.x !== ye.x * ve) re = "h";else {
          var r = Math.abs(i[0].x - lt.x) - Math.abs(i[0].y - lt.y);Math.abs(r) >= rt && (re = r > 0 ? "h" : "v", Q = i);
        }
      }
    },
        jt = function () {
      if (Q) {
        var e = Q.length;if (0 !== e) if (He(at, Q[0]), ut.x = at.x - lt.x, ut.y = at.y - lt.y, J && e > 1) {
          if (lt.x = at.x, lt.y = at.y, !ut.x && !ut.y && bt(Q[1], st)) return;He(st, Q[1]), K || (K = !0, De("zoomGestureStarted"));var t = Et(at, st),
              n = $t(t);n > r.currItem.initialZoomLevel + r.currItem.initialZoomLevel / 15 && (le = !0);var i = 1,
              o = We(),
              a = Ye();if (o > n) {
            if (u.pinchToClose && !le && w <= r.currItem.initialZoomLevel) {
              var s = o - n,
                  l = 1 - s / (o / 1.2);ke(l), De("onPinchClose", l), se = !0;
            } else i = (o - n) / o, i > 1 && (i = 1), n = o - i * (o / 3);
          } else n > a && (i = (n - a) / (6 * o), i > 1 && (i = 1), n = a + i * o);0 > i && (i = 0), ee = t, Ot(at, st, vt), de.x += vt.x - xt.x, de.y += vt.y - xt.y, He(xt, vt), he.x = Pe("x", n), he.y = Pe("y", n), B = n > y, y = n, Re();
        } else {
          if (!re) return;if (ae && (ae = !1, Math.abs(ut.x) >= rt && (ut.x -= Q[0].x - ct.x), Math.abs(ut.y) >= rt && (ut.y -= Q[0].y - ct.y)), lt.x = at.x, lt.y = at.y, 0 === ut.x && 0 === ut.y) return;if ("v" === re && u.closeOnVerticalDrag && !At()) {
            de.y += ut.y, he.y += ut.y;var c = Mt();return W = !0, De("onVerticalDrag", c), ke(c), void Re();
          }Rt(Ne(), at.x, at.y), Z = !0, ne = r.currItem.bounds;var p = Ut("x", ut);p || (Ut("y", ut), Ue(he), Re());
        }
      }
    },
        zt = function (e) {
      if (F.isOldAndroid) {
        if (Y && "mouseup" === e.type) return;e.type.indexOf("touch") > -1 && (clearTimeout(Y), Y = setTimeout(function () {
          Y = 0;
        }, 600));
      }De("pointerUp"), Nt(e, !1) && e.preventDefault();var t;if (O) {
        var n = o.arraySearch(pt, e.pointerId, "id");if (n > -1) if (t = pt.splice(n, 1)[0], navigator.pointerEnabled) t.type = e.pointerType || "mouse";else {
          var i = { 4: "mouse", 2: "touch", 3: "pen" };t.type = i[e.pointerType], t.type || (t.type = e.pointerType || "mouse");
        }
      }var a,
          s = Ht(e),
          l = s.length;if ("mouseup" === e.type && (l = 0), 2 === l) return Q = null, !0;1 === l && He(ct, s[0]), 0 !== l || re || oe || (t || ("mouseup" === e.type ? t = { x: e.pageX, y: e.pageY, type: "mouse" } : e.changedTouches && e.changedTouches[0] && (t = { x: e.changedTouches[0].pageX, y: e.changedTouches[0].pageY, type: "touch" })), De("touchRelease", e, t));var c = -1;if (0 === l && ($ = !1, o.unbind(window, m, r), It(), J ? c = 0 : -1 !== gt && (c = Ne() - gt)), gt = 1 === l ? Ne() : -1, a = -1 !== c && 150 > c ? "zoom" : "swipe", J && 2 > l && (J = !1, 1 === l && (a = "zoomPointerUp"), De("zoomGestureEnded")), Q = null, Z || K || oe || W) if (tt(), z || (z = Bt()), z.calculateSwipeSpeed("x"), W) {
        var p = Mt();if (p < u.verticalDragRange) r.close();else {
          var d = he.y,
              f = ue;nt("verticalDrag", 0, 1, 300, o.easing.cubic.out, function (e) {
            he.y = (r.currItem.initialPosition.y - d) * e + d, ke((1 - f) * e + f), Re();
          }), De("onVerticalDrag", 1);
        }
      } else {
        if ((V || oe) && 0 === l) {
          var h = Yt(a, z);if (h) return;a = "zoomPointerUp";
        }if (!oe) return "swipe" !== a ? void Xt() : void (!V && y > r.currItem.fitRatio && Wt(z));
      }
    },
        Bt = function () {
      var e,
          t,
          n = { lastFlickOffset: {}, lastFlickDist: {}, lastFlickSpeed: {}, slowDownRatio: {}, slowDownRatioReverse: {}, speedDecelerationRatio: {}, speedDecelerationRatioAbs: {}, distanceOffset: {}, backAnimDestination: {}, backAnimStarted: {}, calculateSwipeSpeed: function (i) {
          ft.length > 1 ? (e = Ne() - j + 50, t = ft[ft.length - 2][i]) : (e = Ne() - q, t = ct[i]), n.lastFlickOffset[i] = lt[i] - t, n.lastFlickDist[i] = Math.abs(n.lastFlickOffset[i]), n.lastFlickDist[i] > 20 ? n.lastFlickSpeed[i] = n.lastFlickOffset[i] / e : n.lastFlickSpeed[i] = 0, Math.abs(n.lastFlickSpeed[i]) < .1 && (n.lastFlickSpeed[i] = 0), n.slowDownRatio[i] = .95, n.slowDownRatioReverse[i] = 1 - n.slowDownRatio[i], n.speedDecelerationRatio[i] = 1;
        }, calculateOverBoundsAnimOffset: function (e, t) {
          n.backAnimStarted[e] || (he[e] > ne.min[e] ? n.backAnimDestination[e] = ne.min[e] : he[e] < ne.max[e] && (n.backAnimDestination[e] = ne.max[e]), void 0 !== n.backAnimDestination[e] && (n.slowDownRatio[e] = .7, n.slowDownRatioReverse[e] = 1 - n.slowDownRatio[e], n.speedDecelerationRatioAbs[e] < .05 && (n.lastFlickSpeed[e] = 0, n.backAnimStarted[e] = !0, nt("bounceZoomPan" + e, he[e], n.backAnimDestination[e], t || 300, o.easing.sine.out, function (t) {
            he[e] = t, Re();
          }))));
        }, calculateAnimOffset: function (e) {
          n.backAnimStarted[e] || (n.speedDecelerationRatio[e] = n.speedDecelerationRatio[e] * (n.slowDownRatio[e] + n.slowDownRatioReverse[e] - n.slowDownRatioReverse[e] * n.timeDiff / 10), n.speedDecelerationRatioAbs[e] = Math.abs(n.lastFlickSpeed[e] * n.speedDecelerationRatio[e]), n.distanceOffset[e] = n.lastFlickSpeed[e] * n.speedDecelerationRatio[e] * n.timeDiff, he[e] += n.distanceOffset[e]);
        }, panAnimLoop: function () {
          return Ve.zoomPan && (Ve.zoomPan.raf = M(n.panAnimLoop), n.now = Ne(), n.timeDiff = n.now - n.lastNow, n.lastNow = n.now, n.calculateAnimOffset("x"), n.calculateAnimOffset("y"), Re(), n.calculateOverBoundsAnimOffset("x"), n.calculateOverBoundsAnimOffset("y"), n.speedDecelerationRatioAbs.x < .05 && n.speedDecelerationRatioAbs.y < .05) ? (he.x = Math.round(he.x), he.y = Math.round(he.y), Re(), void Je("zoomPan")) : void 0;
        } };return n;
    },
        Wt = function (e) {
      return e.calculateSwipeSpeed("y"), ne = r.currItem.bounds, e.backAnimDestination = {}, e.backAnimStarted = {}, Math.abs(e.lastFlickSpeed.x) <= .05 && Math.abs(e.lastFlickSpeed.y) <= .05 ? (e.speedDecelerationRatioAbs.x = e.speedDecelerationRatioAbs.y = 0, e.calculateOverBoundsAnimOffset("x"), e.calculateOverBoundsAnimOffset("y"), !0) : (et("zoomPan"), e.lastNow = Ne(), void e.panAnimLoop());
    },
        Yt = function (e, t) {
      var n;oe || (mt = d);var i;if ("swipe" === e) {
        var a = lt.x - ct.x,
            s = t.lastFlickDist.x < 10;a > ot && (s || t.lastFlickOffset.x > 20) ? i = -1 : -ot > a && (s || t.lastFlickOffset.x < -20) && (i = 1);
      }var l;i && (d += i, 0 > d ? (d = u.loop ? Jt() - 1 : 0, l = !0) : d >= Jt() && (d = u.loop ? 0 : Jt() - 1, l = !0), (!l || u.loop) && (we += i, ve -= i, n = !0));var c,
          p = ye.x * ve,
          f = Math.abs(p - yt.x);return n || p > yt.x == t.lastFlickSpeed.x > 0 ? (c = Math.abs(t.lastFlickSpeed.x) > 0 ? f / Math.abs(t.lastFlickSpeed.x) : 333, c = Math.min(c, 400), c = Math.max(c, 250)) : c = 333, mt === d && (n = !1), oe = !0, De("mainScrollAnimStart"), nt("mainScroll", yt.x, p, c, o.easing.cubic.out, _e, function () {
        tt(), oe = !1, mt = -1, (n || mt !== d) && r.updateCurrItem(), De("mainScrollAnimComplete");
      }), n && r.updateCurrItem(!0), n;
    },
        $t = function (e) {
      return 1 / te * e * w;
    },
        Xt = function () {
      var e = y,
          t = We(),
          n = Ye();t > y ? e = t : y > n && (e = n);var i,
          a = 1,
          s = ue;return se && !B && !le && t > y ? (r.close(), !0) : (se && (i = function (e) {
        ke((a - s) * e + s);
      }), r.zoomTo(e, 0, 200, o.easing.cubic.out, i), !0);
    };Ie("Gestures", { publicMethods: { initGestures: function () {
          var e = function (e, t, n, i, o) {
            A = e + t, C = e + n, D = e + i, N = o ? e + o : "";
          };O = F.pointerEvent, O && F.touch && (F.touch = !1), O ? navigator.pointerEnabled ? e("pointer", "down", "move", "up", "cancel") : e("MSPointer", "Down", "Move", "Up", "Cancel") : F.touch ? (e("touch", "start", "move", "end", "cancel"), R = !0) : e("mouse", "down", "move", "up"), m = C + " " + D + " " + N, v = A, O && !R && (R = navigator.maxTouchPoints > 1 || navigator.msMaxTouchPoints > 1), r.likelyTouchDevice = R, g[A] = Ft, g[C] = qt, g[D] = zt, N && (g[N] = g[D]), F.touch && (v += " mousedown", m += " mousemove mouseup", g.mousedown = g[A], g.mousemove = g[C], g.mouseup = g[D]), R || (u.allowPanToNext = !1);
        } } });var Kt,
        Zt,
        Gt,
        Vt,
        Qt,
        Jt,
        en,
        tn = function (t, n, i, a) {
      Kt && clearTimeout(Kt), Vt = !0, Gt = !0;var s;t.initialLayout ? (s = t.initialLayout, t.initialLayout = null) : s = u.getThumbBoundsFn && u.getThumbBoundsFn(d);var l = i ? u.hideAnimationDuration : u.showAnimationDuration,
          c = function () {
        Je("initialZoom"), i ? (r.template.removeAttribute("style"), r.bg.removeAttribute("style")) : (ke(1), n && (n.style.display = "block"), o.addClass(e, "pswp--animated-in"), De("initialZoom" + (i ? "OutEnd" : "InEnd"))), a && a(), Vt = !1;
      };if (!l || !s || void 0 === s.x) return De("initialZoom" + (i ? "Out" : "In")), y = t.initialZoomLevel, He(he, t.initialPosition), Re(), e.style.opacity = i ? 0 : 1, ke(1), void (l ? setTimeout(function () {
        c();
      }, l) : c());var f = function () {
        var n = p,
            a = !r.currItem.src || r.currItem.loadError || u.showHideOpacity;t.miniImg && (t.miniImg.style.webkitBackfaceVisibility = "hidden"), i || (y = s.w / t.w, he.x = s.x, he.y = s.y - P, r[a ? "template" : "bg"].style.opacity = .001, Re()), et("initialZoom"), i && !n && o.removeClass(e, "pswp--animated-in"), a && (i ? o[(n ? "remove" : "add") + "Class"](e, "pswp--animate_opacity") : setTimeout(function () {
          o.addClass(e, "pswp--animate_opacity");
        }, 30)), Kt = setTimeout(function () {
          if (De("initialZoom" + (i ? "Out" : "In")), i) {
            var r = s.w / t.w,
                u = { x: he.x, y: he.y },
                p = y,
                d = ue,
                f = function (t) {
              1 === t ? (y = r, he.x = s.x, he.y = s.y - U) : (y = (r - p) * t + p, he.x = (s.x - u.x) * t + u.x, he.y = (s.y - U - u.y) * t + u.y), Re(), a ? e.style.opacity = 1 - t : ke(d - t * d);
            };n ? nt("initialZoom", 0, 1, l, o.easing.cubic.out, f, c) : (f(1), Kt = setTimeout(c, l + 20));
          } else y = t.initialZoomLevel, He(he, t.initialPosition), Re(), ke(1), a ? e.style.opacity = 1 : ke(1), Kt = setTimeout(c, l + 20);
        }, i ? 25 : 90);
      };f();
    },
        nn = {},
        on = [],
        rn = { index: 0, errorMsg: '<div class="pswp__error-msg"><a href="%url%" target="_blank">The image</a> could not be loaded.</div>', forceProgressiveLoading: !1, preload: [1, 1], getNumItemsFn: function () {
        return Zt.length;
      } },
        an = function () {
      return { center: { x: 0, y: 0 }, max: { x: 0, y: 0 }, min: { x: 0, y: 0 } };
    },
        sn = function (e, t, n) {
      var i = e.bounds;i.center.x = Math.round((nn.x - t) / 2), i.center.y = Math.round((nn.y - n) / 2) + e.vGap.top, i.max.x = t > nn.x ? Math.round(nn.x - t) : i.center.x, i.max.y = n > nn.y ? Math.round(nn.y - n) + e.vGap.top : i.center.y, i.min.x = t > nn.x ? 0 : i.center.x, i.min.y = n > nn.y ? e.vGap.top : i.center.y;
    },
        un = function (e, t, n) {
      if (e.src && !e.loadError) {
        var i = !n;if (i && (e.vGap || (e.vGap = { top: 0, bottom: 0 }), De("parseVerticalMargin", e)), nn.x = t.x, nn.y = t.y - e.vGap.top - e.vGap.bottom, i) {
          var o = nn.x / e.w,
              r = nn.y / e.h;e.fitRatio = r > o ? o : r;var a = u.scaleMode;"orig" === a ? n = 1 : "fit" === a && (n = e.fitRatio), n > 1 && (n = 1), e.initialZoomLevel = n, e.bounds || (e.bounds = an());
        }if (!n) return;return sn(e, e.w * n, e.h * n), i && n === e.initialZoomLevel && (e.initialPosition = e.bounds.center), e.bounds;
      }return e.w = e.h = 0, e.initialZoomLevel = e.fitRatio = 1, e.bounds = an(), e.initialPosition = e.bounds.center, e.bounds;
    },
        ln = function (e, t, n, i, o, a) {
      t.loadError || i && (t.imageAppended = !0, dn(t, i, t === r.currItem && Ee), n.appendChild(i), a && setTimeout(function () {
        t && t.loaded && t.placeholder && (t.placeholder.style.display = "none", t.placeholder = null);
      }, 500));
    },
        cn = function (e) {
      e.loading = !0, e.loaded = !1;var t = e.img = o.createEl("pswp__img", "img"),
          n = function () {
        e.loading = !1, e.loaded = !0, e.loadComplete ? e.loadComplete(e) : e.img = null, t.onload = t.onerror = null, t = null;
      };return t.onload = n, t.onerror = function () {
        e.loadError = !0, n();
      }, t.src = e.src, t;
    },
        pn = function (e, t) {
      return e.src && e.loadError && e.container ? (t && (e.container.innerHTML = ""), e.container.innerHTML = u.errorMsg.replace("%url%", e.src), !0) : void 0;
    },
        dn = function (e, t, n) {
      if (e.src) {
        t || (t = e.container.lastChild);var i = n ? e.w : Math.round(e.w * e.fitRatio),
            o = n ? e.h : Math.round(e.h * e.fitRatio);e.placeholder && !e.loaded && (e.placeholder.style.width = i + "px", e.placeholder.style.height = o + "px"), t.style.width = i + "px", t.style.height = o + "px";
      }
    },
        fn = function () {
      if (on.length) {
        for (var e, t = 0; t < on.length; t++) e = on[t], e.holder.index === e.index && ln(e.index, e.item, e.baseDiv, e.img, !1, e.clearPlaceholder);on = [];
      }
    };Ie("Controller", { publicMethods: { lazyLoadItem: function (e) {
          e = Se(e);var t = Qt(e);t && (!t.loaded && !t.loading || E) && (De("gettingData", e, t), t.src && cn(t));
        }, initController: function () {
          o.extend(u, rn, !0), r.items = Zt = n, Qt = r.getItemAt, Jt = u.getNumItemsFn, en = u.loop, Jt() < 3 && (u.loop = !1), Ce("beforeChange", function (e) {
            var t,
                n = u.preload,
                i = null === e || e >= 0,
                o = Math.min(n[0], Jt()),
                a = Math.min(n[1], Jt());for (t = 1; (i ? a : o) >= t; t++) r.lazyLoadItem(d + t);for (t = 1; (i ? o : a) >= t; t++) r.lazyLoadItem(d - t);
          }), Ce("initialLayout", function () {
            r.currItem.initialLayout = u.getThumbBoundsFn && u.getThumbBoundsFn(d);
          }), Ce("mainScrollAnimComplete", fn), Ce("initialZoomInEnd", fn), Ce("destroy", function () {
            for (var e, t = 0; t < Zt.length; t++) e = Zt[t], e.container && (e.container = null), e.placeholder && (e.placeholder = null), e.img && (e.img = null), e.preloader && (e.preloader = null), e.loadError && (e.loaded = e.loadError = !1);on = null;
          });
        }, getItemAt: function (e) {
          return e >= 0 && void 0 !== Zt[e] && Zt[e];
        }, allowProgressiveImg: function () {
          return u.forceProgressiveLoading || !R || u.mouseUsed || screen.width > 1200;
        }, setContent: function (e, t) {
          u.loop && (t = Se(t));var n = r.getItemAt(e.index);n && (n.container = null);var i,
              a = r.getItemAt(t);if (!a) return void (e.el.innerHTML = "");De("gettingData", t, a), e.index = t, e.item = a;var s = a.container = o.createEl("pswp__zoom-wrap");if (!a.src && a.html && (a.html.tagName ? s.appendChild(a.html) : s.innerHTML = a.html), pn(a), un(a, me), !a.src || a.loadError || a.loaded) a.src && !a.loadError && (i = o.createEl("pswp__img", "img"), i.style.opacity = 1, i.src = a.src, dn(a, i), ln(t, a, s, i, !0));else {
            if (a.loadComplete = function (n) {
              if (l) {
                if (e && e.index === t) {
                  if (pn(n, !0)) return n.loadComplete = n.img = null, un(n, me), Me(n), void (e.index === d && r.updateCurrZoomItem());n.imageAppended ? !Vt && n.placeholder && (n.placeholder.style.display = "none", n.placeholder = null) : F.transform && (oe || Vt) ? on.push({ item: n, baseDiv: s, img: n.img, index: t, holder: e, clearPlaceholder: !0 }) : ln(t, n, s, n.img, oe || Vt, !0);
                }n.loadComplete = null, n.img = null, De("imageLoadComplete", t, n);
              }
            }, o.features.transform) {
              var c = "pswp__img pswp__img--placeholder";c += a.msrc ? "" : " pswp__img--placeholder--blank";var p = o.createEl(c, a.msrc ? "img" : "");a.msrc && (p.src = a.msrc), dn(a, p), s.appendChild(p), a.placeholder = p;
            }a.loading || cn(a), r.allowProgressiveImg() && (!Gt && F.transform ? on.push({ item: a, baseDiv: s, img: a.img, index: t, holder: e }) : ln(t, a, s, a.img, !0, !0));
          }Gt || t !== d ? Me(a) : (ie = s.style, tn(a, i || a.img)), e.el.innerHTML = "", e.el.appendChild(s);
        }, cleanSlide: function (e) {
          e.img && (e.img.onload = e.img.onerror = null), e.loaded = e.loading = e.img = e.imageAppended = !1;
        } } });var hn,
        mn = {},
        vn = function (e, t, n) {
      var i = document.createEvent("CustomEvent"),
          o = { origEvent: e, target: e.target, releasePoint: t, pointerType: n || "touch" };i.initCustomEvent("pswpTap", !0, !0, o), e.target.dispatchEvent(i);
    };Ie("Tap", { publicMethods: { initTap: function () {
          Ce("firstTouchStart", r.onTapStart), Ce("touchRelease", r.onTapRelease), Ce("destroy", function () {
            mn = {}, hn = null;
          });
        }, onTapStart: function (e) {
          e.length > 1 && (clearTimeout(hn), hn = null);
        }, onTapRelease: function (e, t) {
          if (t && !Z && !X && !Qe) {
            var n = t;if (hn && (clearTimeout(hn), hn = null, Tt(n, mn))) return void De("doubleTap", n);if ("mouse" === t.type) return void vn(e, t, "mouse");var i = e.target.tagName.toUpperCase();if ("BUTTON" === i || o.hasClass(e.target, "pswp__single-tap")) return void vn(e, t);He(mn, n), hn = setTimeout(function () {
              vn(e, t), hn = null;
            }, 300);
          }
        } } });var gn;Ie("DesktopZoom", { publicMethods: { initDesktopZoom: function () {
          H || (R ? Ce("mouseUsed", function () {
            r.setupDesktopZoom();
          }) : r.setupDesktopZoom(!0));
        }, setupDesktopZoom: function (t) {
          gn = {};var n = "wheel mousewheel DOMMouseScroll";Ce("bindEvents", function () {
            o.bind(e, n, r.handleMouseWheel);
          }), Ce("unbindEvents", function () {
            gn && o.unbind(e, n, r.handleMouseWheel);
          }), r.mouseZoomedIn = !1;var i,
              a = function () {
            r.mouseZoomedIn && (o.removeClass(e, "pswp--zoomed-in"), r.mouseZoomedIn = !1), 1 > y ? o.addClass(e, "pswp--zoom-allowed") : o.removeClass(e, "pswp--zoom-allowed"), s();
          },
              s = function () {
            i && (o.removeClass(e, "pswp--dragging"), i = !1);
          };Ce("resize", a), Ce("afterChange", a), Ce("pointerDown", function () {
            r.mouseZoomedIn && (i = !0, o.addClass(e, "pswp--dragging"));
          }), Ce("pointerUp", s), t || a();
        }, handleMouseWheel: function (e) {
          if (y <= r.currItem.fitRatio) return u.modal && (!u.closeOnScroll || Qe || $ ? e.preventDefault() : k && Math.abs(e.deltaY) > 2 && (p = !0, r.close())), !0;if (e.stopPropagation(), gn.x = 0, "deltaX" in e) 1 === e.deltaMode ? (gn.x = 18 * e.deltaX, gn.y = 18 * e.deltaY) : (gn.x = e.deltaX, gn.y = e.deltaY);else if ("wheelDelta" in e) e.wheelDeltaX && (gn.x = -.16 * e.wheelDeltaX), e.wheelDeltaY ? gn.y = -.16 * e.wheelDeltaY : gn.y = -.16 * e.wheelDelta;else {
            if (!("detail" in e)) return;gn.y = e.detail;
          }Be(y, !0);var t = he.x - gn.x,
              n = he.y - gn.y;(u.modal || t <= ne.min.x && t >= ne.max.x && n <= ne.min.y && n >= ne.max.y) && e.preventDefault(), r.panTo(t, n);
        }, toggleDesktopZoom: function (t) {
          t = t || { x: me.x / 2 + ge.x, y: me.y / 2 + ge.y };var n = u.getDoubleTapZoom(!0, r.currItem),
              i = y === n;r.mouseZoomedIn = !i, r.zoomTo(i ? r.currItem.initialZoomLevel : n, t, 333), o[(i ? "remove" : "add") + "Class"](e, "pswp--zoomed-in");
        } } });var yn,
        wn,
        xn,
        bn,
        Tn,
        En,
        In,
        Sn,
        An,
        Cn,
        Dn,
        Nn,
        kn = { history: !0, galleryUID: 1 },
        On = function () {
      return Dn.hash.substring(1);
    },
        Rn = function () {
      yn && clearTimeout(yn), xn && clearTimeout(xn);
    },
        Mn = function () {
      var e = On(),
          t = {};if (e.length < 5) return t;var n,
          i = e.split("&");for (n = 0; n < i.length; n++) if (i[n]) {
        var o = i[n].split("=");o.length < 2 || (t[o[0]] = o[1]);
      }if (u.galleryPIDs) {
        var r = t.pid;for (t.pid = 0, n = 0; n < Zt.length; n++) if (Zt[n].pid === r) {
          t.pid = n;break;
        }
      } else t.pid = parseInt(t.pid, 10) - 1;return t.pid < 0 && (t.pid = 0), t;
    },
        Ln = function () {
      if (xn && clearTimeout(xn), Qe || $) return void (xn = setTimeout(Ln, 500));bn ? clearTimeout(wn) : bn = !0;var e = d + 1,
          t = Qt(d);t.hasOwnProperty("pid") && (e = t.pid);var n = In + "&gid=" + u.galleryUID + "&pid=" + e;Sn || -1 === Dn.hash.indexOf(n) && (Cn = !0);var i = Dn.href.split("#")[0] + "#" + n;Nn ? "#" + n !== window.location.hash && history[Sn ? "replaceState" : "pushState"]("", document.title, i) : Sn ? Dn.replace(i) : Dn.hash = n, Sn = !0, wn = setTimeout(function () {
        bn = !1;
      }, 60);
    };Ie("History", { publicMethods: { initHistory: function () {
          if (o.extend(u, kn, !0), u.history) {
            Dn = window.location, Cn = !1, An = !1, Sn = !1, In = On(), Nn = "pushState" in history, In.indexOf("gid=") > -1 && (In = In.split("&gid=")[0], In = In.split("?gid=")[0]), Ce("afterChange", r.updateURL), Ce("unbindEvents", function () {
              o.unbind(window, "hashchange", r.onHashChange);
            });var e = function () {
              En = !0, An || (Cn ? history.back() : In ? Dn.hash = In : Nn ? history.pushState("", document.title, Dn.pathname + Dn.search) : Dn.hash = ""), Rn();
            };Ce("unbindEvents", function () {
              p && e();
            }), Ce("destroy", function () {
              En || e();
            }), Ce("firstUpdate", function () {
              d = Mn().pid;
            });var t = In.indexOf("pid=");t > -1 && (In = In.substring(0, t), "&" === In.slice(-1) && (In = In.slice(0, -1))), setTimeout(function () {
              l && o.bind(window, "hashchange", r.onHashChange);
            }, 40);
          }
        }, onHashChange: function () {
          return On() === In ? (An = !0, void r.close()) : void (bn || (Tn = !0, r.goTo(Mn().pid), Tn = !1));
        }, updateURL: function () {
          Rn(), Tn || (Sn ? yn = setTimeout(Ln, 800) : Ln());
        } } }), o.extend(r, it);
  };return e;
}), +function (e) {
  "use strict";
  function t(t) {
    var n = t.attr("data-target");n || (n = t.attr("href"), n = n && /#[A-Za-z]/.test(n) && n.replace(/.*(?=#[^\s]*$)/, ""));var i = n && e(n);return i && i.length ? i : t.parent();
  }function n(n) {
    n && 3 === n.which || (e(o).remove(), e(r).each(function () {
      var i = e(this),
          o = t(i),
          r = { relatedTarget: this };o.hasClass("open") && (n && "click" == n.type && /input|textarea/i.test(n.target.tagName) && e.contains(o[0], n.target) || (o.trigger(n = e.Event("hide.bs.dropdown", r)), n.isDefaultPrevented() || (i.attr("aria-expanded", "false"), o.removeClass("open").trigger(e.Event("hidden.bs.dropdown", r)))));
    }));
  }function i(t) {
    return this.each(function () {
      var n = e(this),
          i = n.data("bs.dropdown");i || n.data("bs.dropdown", i = new a(this)), "string" == typeof t && i[t].call(n);
    });
  }var o = ".dropdown-backdrop",
      r = '[data-toggle="dropdown"]',
      a = function (t) {
    e(t).on("click.bs.dropdown", this.toggle);
  };a.VERSION = "3.3.7", a.prototype.toggle = function (i) {
    var o = e(this);if (!o.is(".disabled, :disabled")) {
      var r = t(o),
          a = r.hasClass("open");if (n(), !a) {
        "ontouchstart" in document.documentElement && !r.closest(".navbar-nav").length && e(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(e(this)).on("click", n);var s = { relatedTarget: this };if (r.trigger(i = e.Event("show.bs.dropdown", s)), i.isDefaultPrevented()) return;o.trigger("focus").attr("aria-expanded", "true"), r.toggleClass("open").trigger(e.Event("shown.bs.dropdown", s));
      }return !1;
    }
  }, a.prototype.keydown = function (n) {
    if (/(38|40|27|32)/.test(n.which) && !/input|textarea/i.test(n.target.tagName)) {
      var i = e(this);if (n.preventDefault(), n.stopPropagation(), !i.is(".disabled, :disabled")) {
        var o = t(i),
            a = o.hasClass("open");if (!a && 27 != n.which || a && 27 == n.which) return 27 == n.which && o.find(r).trigger("focus"), i.trigger("click");var s = " li:not(.disabled):visible a",
            u = o.find(".dropdown-menu" + s);if (u.length) {
          var l = u.index(n.target);38 == n.which && l > 0 && l--, 40 == n.which && l < u.length - 1 && l++, ~l || (l = 0), u.eq(l).trigger("focus");
        }
      }
    }
  };var s = e.fn.dropdown;e.fn.dropdown = i, e.fn.dropdown.Constructor = a, e.fn.dropdown.noConflict = function () {
    return e.fn.dropdown = s, this;
  }, e(document).on("click.bs.dropdown.data-api", n).on("click.bs.dropdown.data-api", ".dropdown form", function (e) {
    e.stopPropagation();
  }).on("click.bs.dropdown.data-api", r, a.prototype.toggle).on("keydown.bs.dropdown.data-api", r, a.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", a.prototype.keydown);
}(jQuery), polyfill(Array, "from", function (e) {
  return Array.prototype.slice.call(e);
}), polyfill(Array.prototype, "forEach", function (e) {
  var t, n;if (null == this) throw new TypeError("this is null or not defined");var i = Object(this),
      o = i.length >>> 0;if ("function" != typeof e) throw new TypeError(e + " is not a function");for (arguments.length > 1 && (t = arguments[1]), n = 0; n < o;) {
    var r;n in i && (r = i[n], e.call(t, r, n, i)), n++;
  }
}), polyfill(Array.prototype, "each", Array.prototype.forEach), polyfill(Function.prototype, "bind", function (e) {
  function t() {}if ("function" != typeof this) throw new TypeError("Bind must be called on a function");var n = this,
      i = Array.from(arguments).slice(1),
      o = function () {
    var o = this instanceof t ? this : e;return n.apply(o, i.concat(Array.from(arguments)));
  };return t.prototype = n.prototype, o.prototype = new t(), o;
}), polyfill(Object, "assign", function (e, t) {
  function n(t, n) {
    var i = Object.getOwnPropertyDescriptor(t, n);void 0 !== i && i.enumerable && (e[n] = t[n]);
  }function i(e) {
    null != e && Object.keys(e).map(n.bind(e, e));
  }return e = null == e ? {} : Object(e), Array.from(arguments).slice(1).map(i), e;
}), polyfill(Element.prototype, "matches", Element.prototype.msMatchesSelector), ["indexOf", "slice", "forEach", "each", "map", "reduce", "filter", "every", "some"].each(function (e) {
  polyfill(NodeList.prototype, e, Array.prototype[e]);
}), polyfill(NodeList.prototype, "matches", function (e) {
  function t(t) {
    return t.matches(e);
  }return this.filter(t);
}), polyfill(NodeList.prototype, "match", function (e) {
  var t,
      n = this.length;for (t = 0; t < n; t++) if (this[t].matches(e)) return this[t];return null;
}), Object.defineProperty(Node.prototype, "textNodes", { enumerable: !1, configurable: !0, get: function () {
    for (var e, t = { SCRIPT: !0, NOSCRIPT: !0, STYLE: !0 }, n = [], i = document.createTreeWalker(this, NodeFilter.SHOW_TEXT, null, !1); e = i.nextNode();) t[e.parentNode.nodeName] || n.push(e);return n;
  } }), polyfill(Element.prototype, "attributeSelector", function (e) {
  var t = this,
      n = [];return Array.prototype.map.call(arguments, function (e) {
    var i = t.getAttribute(e);null == i || "" === i ? n.push("[" + e + "]") : n.push("[" + e + '="' + i + '"]');
  }), n.join("");
}), polyfill(Array.prototype, "sortBy", function (e, t) {
  if (!this.length) return this;var n,
      i,
      o = function () {
    return this;
  };e && (o = "function" == typeof e ? e : function () {
    return this[e];
  });var r = !t && "number" == typeof (e ? o.call(this[this.length - 1]) : this[this.length - 1]);return r && (t = function (e, t) {
    return e - t;
  }), e && (n = Object.prototype.toString, i = Array.prototype.toString, Object.prototype.toString = o, Array.prototype.toString = o), t ? Array.prototype.sort.call(this, t) : Array.prototype.sort.call(this), e && (Object.prototype.toString = n, Array.prototype.toString = i), this;
}), "classList" in document.documentElement || (DOMTokenList.prototype = { add: function (e) {
    this.contains(e) || (Array.prototype.push.call(this, e), this.element.className = this.toString());
  }, contains: function (e) {
    return (" " + this.element.className + " ").indexOf(" " + e + " ") >= 0;
  }, item: function (e) {
    return this[e] || null;
  }, remove: function (e) {
    if (this.contains(e)) {
      for (var t = 0; t < this.length; t++) this[t] == e && Array.prototype.splice.call(this, t--, 1);this.element.className = this.toString();
    }
  }, toString: function () {
    return Array.prototype.join.call(this, " ");
  }, toggle: function (e) {
    return this.contains(e) ? this.remove(e) : this.add(e), this.contains(e);
  } }, window.DOMTokenList = DOMTokenList, Object.defineProperty(Element.prototype, "classList", { get: function () {
    return new DOMTokenList(this);
  } })), CustomEvent.prototype = window.Event.prototype, window.CustomEvent = CustomEvent, polyfill(Element.prototype, "trigger", trigger), window.trigger = trigger, polyfill(Date, "now", function () {
  return new Date().getTime();
}), window.performance = window.performance || {}, polyfill(performance, "now", function () {
  return Date.now();
}), window.setImmediate || window.setImmediate || function (e) {
  setTimeout(e, 1);
}, function () {
  for (var e = 0, t = ["ms", "moz", "webkit", "o"], n = 0; n < t.length && !window.requestAnimationFrame; ++n) window.requestAnimationFrame = window[t[n] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[t[n] + "CancelAnimationFrame"] || window[t[n] + "CancelRequestAnimationFrame"];window.requestAnimationFrame || (window.requestAnimationFrame = function (t, n) {
    function i() {
      t(o + r);
    }var o = new Date().getTime(),
        r = Math.max(0, 16 - (o - e));return e = o + r, window.setTimeout(i, r);
  }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function (e) {
    clearTimeout(e);
  });
}(), window.addEventListener("resize", updateIfFullscreen), window.addEventListener("load", updateIfFullscreen), querySelectorAlways.attribute = "queryselectoralways", querySelectorAlways.init = function () {
  querySelectorAlways.style || (querySelectorAlways.style = document.createElement("style"), querySelectorAlways.style.id = "querySelectorAlways", querySelectorAlways.style.appendChild(document.createTextNode("")), document.head.appendChild(querySelectorAlways.style), ["animationstart", "MSAnimationStart", "webkitAnimationStart"].map(function (e) {
    document.addEventListener(e, querySelectorAlways.onanimationstart, !1);
  }), document.addEventListener("DOMContentLoaded", querySelectorAlways.update));
}, querySelectorAlways.selectors = {}, querySelectorAlways.callbacks = [], querySelectorAlways.addSelector = function (e, t) {
  e = e.trim();var n = querySelectorAlways.selectors[e];return n ? querySelectorAlways.callbacks[n].push(t) : (n = querySelectorAlways.callbacks.length, querySelectorAlways.selectors[e] = n, querySelectorAlways.callbacks[n] = [t], querySelectorAlways.install(n, e)), n;
}, querySelectorAlways.update = function () {
  var e, t;for (e in querySelectorAlways.selectors) {
    t = querySelectorAlways.selectors[e];var n = document.querySelectorAll(e);Array.prototype.map.call(n, function (e) {
      querySelectorAlways.addNode(t, e);
    });
  }
}, querySelectorAlways.install = function (e, t) {
  function n(e) {
    querySelectorAlways.style.textContent += "\n" + e;
  }var i = (querySelectorAlways.style, "querySelectorAlways" + e),
      o = "visibility:hidden!important;",
      r = ":not([" + querySelectorAlways.attribute + '~="' + e + '"])';t = t.replace(/(,|$)/g, function (e) {
    return r + e;
  }), n(t + " { " + o + " animation: 0.001ms " + i + "!important; -webkit-animation: 0.001ms " + i + "!important; }"), n("@keyframes " + i + " { from { opacity: 0.999; } to { opacity: 1; } }"), n("@-webkit-keyframes " + i + " { from { opacity: 0.999; } to { opacity: 1; } }\n");
}, querySelectorAlways.regexEvent = /querySelectorAlways(\d+)/, querySelectorAlways.onanimationstart = function (e) {
  var t = e.animationName.match(querySelectorAlways.regexEvent);if (t) {
    var n = parseInt(t[1]),
        i = e.target;querySelectorAlways.addNode.call(this, n, i);
  }
}, querySelectorAlways.addNode = function (e, t) {
  var n = t.getAttribute(querySelectorAlways.attribute),
      i = n ? n.split(" ") : [];if (i.indexOf(String(e)) < 0) {
    i.push(e), t.setAttribute(querySelectorAlways.attribute, i.join(" "));var o = querySelectorAlways.callbacks[e];o && o.map(function (e) {
      e(t);
    });
  }
}, document.querySelectorAlways = querySelectorAlways;var Mouse = { x: 0, y: 0, lastX: 0, lastY: 0, dX: 0, dY: 0, timestamp: 0, timeElapsed: 0, init: function () {
    window.addEventListener("mousemove", Mouse.update), window.addEventListener("touchstart", Mouse.update), window.addEventListener("touchmove", Mouse.update), Mouse.timestamp = Date.now(), requestAnimationFrame(Mouse.tick);
  }, update: function (e) {
    var t = e.changedTouches ? e.changedTouches[0] : e;Mouse.x = t.pageX, Mouse.y = t.pageY;
  }, snapshot: function () {
    return { x: Mouse.x, y: Mouse.y, lastX: Mouse.lastX, lastY: Mouse.lastY, dX: Mouse.dX, dY: Mouse.dY, timestamp: Mouse.timestamp, timeElapsed: Mouse.timeElapsed };
  }, tick: function () {
    var e = Mouse.snapshot(),
        t = Date.now();Mouse.dX = e.x - e.lastX, Mouse.dY = e.y - e.lastY, Mouse.lastX = e.x, Mouse.lastY = e.y, Mouse.timeElapsed = t - e.timestamp, Mouse.timestamp = t, requestAnimationFrame(Mouse.tick);
  } };Animation.prototype = { start: function () {
    this.paused && (this.paused = !1, this.timestamp = performance.now(), requestAnimationFrame(this.update));
  }, stop: function (e) {
    this.paused = !0, e !== !0 && (this.timestamp = 0);
  }, update: function (e) {
    if (this.timestamp) {
      var t = e - this.timestamp;this.timestamp = e, this.fn(t), this.paused || requestAnimationFrame(this.update);
    }
  } }, Object.assign(SVG, { svgs: {}, support: !/\bTrident\/\d+\b/.test(navigator.userAgent), init: function () {
    SVG.support || document.querySelectorAlways("svg use", SVG.create);
  }, create: function (e) {
    new SVG(e);
  } }), SVG.prototype = { init: function () {
    var e = this.svg();e instanceof XMLHttpRequest ? e.addEventListener("load", this.load.bind(this)) : this.load();
  }, svg: function () {
    var e = document;return this.url && (e = SVG.svgs[this.url], e || (e = SVG.svgs[this.url] = this.ajax(this.url))), e;
  }, ajax: function (e) {
    function t() {
      if (n.status < 400) {
        var t = document.implementation.createHTMLDocument("");t.body.innerHTML = n.responseText, SVG.svgs[e] = t.querySelector("svg");
      }
    }var n = new XMLHttpRequest();return n.open("GET", encodeURI(e), !0), n.addEventListener("load", t), n.send(), n;
  }, load: function () {
    this.set(this.svg().getElementById(this.id));
  }, set: function (e) {
    if (e) {
      for (var t = e.cloneNode(!0), n = document.createDocumentFragment(); t.firstChild;) n.appendChild(t.firstChild);this.elem.appendChild(n);
    }
  } }, SVG.init(); /*! Blizzard.com Corp Sites Scripts */
var UI = { KEY_BEFORE_INIT_HANDLER: "beforeInit", KEY_INIT_HANDLER: "init", KEY_AFTER_INIT_HANDLER: "afterInit", KEY_BEFORE_LOAD_HANDLER: "beforeLoad", KEY_LOAD_HANDLER: "load", KEY_AFTER_LOAD_HANDLER: "afterLoad", KEY_REFRESH_HANDLER: "refresh", KEY_RESIZE_HANDLER: "resize", KEY_SCROLL_HANDLER: "scroll", KEY_DOCUMENT_BLUR_HANDLER: "documentBlur", EVENTS_TRANSITION_END: "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", EVENTS_ANIMATION_END: "webkitAnimationEnd oanimationend msAnimationEnd animationend", DEFAULT_ANIMATION_DURATION: 200, DEFAULT_SLIDE_ANIMATION_DURATION: 250, DEFAULT_NAVIGATION_CONTAINER: "#nav-client-header", SCROLL_TARGET: $("html, body"), BREAKPOINTS: { BASE: 0, XS: 480, SM: 768, MD: 992, LG: 1200 }, components: [], beforeInitHandlers: [], initHandlers: [], afterInitHandlers: [], beforeLoadHandlers: [], loadHandlers: [], afterLoadHandlers: [], refreshHandlers: [], resizeHandlers: [], scrollHandlers: [], documentBlurHandlers: [], historyPopHandlers: [], resizing: !1, scrolling: !1, scrollingPage: !1, uuids: 0, lastTouchEvent: 0, DEFAULT_MILLISECONDS_FOR_TOUCH: 500, mouse: Mouse, registerHandler: function (e, t, n) {
    var i = e[t];$.isFunction(i) && n.push(i);
  }, register: function (e) {
    e && UI.components.indexOf(e) < 0 && (UI.registerHandler(e, UI.KEY_BEFORE_INIT_HANDLER, UI.beforeInitHandlers), UI.registerHandler(e, UI.KEY_INIT_HANDLER, UI.initHandlers), UI.registerHandler(e, UI.KEY_AFTER_INIT_HANDLER, UI.afterInitHandlers), UI.registerHandler(e, UI.KEY_BEFORE_LOAD_HANDLER, UI.beforeLoadHandlers), UI.registerHandler(e, UI.KEY_LOAD_HANDLER, UI.loadHandlers), UI.registerHandler(e, UI.KEY_AFTER_LOAD_HANDLER, UI.afterLoadHandlers), UI.registerHandler(e, UI.KEY_REFRESH_HANDLER, UI.refreshHandlers), UI.registerHandler(e, UI.KEY_RESIZE_HANDLER, UI.resizeHandlers), UI.registerHandler(e, UI.KEY_SCROLL_HANDLER, UI.scrollHandlers), UI.registerHandler(e, UI.KEY_DOCUMENT_BLUR_HANDLER, UI.documentBlurHandlers), UI.components.push(e));
  }, init: function (e) {
    UI.mouse.init(), $(document).on("touchend", function () {
      UI.handleTouchEnd();
    }), UI.beforeInitHandlers.forEach(function (t, n) {
      t(e);
    }), UI.initHandlers.forEach(function (t, n) {
      t(e);
    }), UI.refresh(e, !0), UI.afterInitHandlers.forEach(function (t, n) {
      t(e);
    }), e || ($(window).on("resize", UI.resize), $(window).on("scroll", UI.scroll), UI.SCROLL_TARGET.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup", UI.scrollInterrupt), $(document).on("visibilitychange", UI.handleDocumentBlur), $(window).on("popstate", UI.handleBrowserHistoryPop));
  }, load: function (e) {
    UI.beforeLoadHandlers.forEach(function (t, n) {
      t(e);
    }), UI.loadHandlers.forEach(function (t, n) {
      t(e);
    }), UI.afterLoadHandlers.forEach(function (t, n) {
      t(e);
    });
  }, refresh: function (e, t) {
    UI.refreshHandlers.forEach(function (n, i) {
      n(e, t);
    });
  }, resize: function () {
    UI.resizing || (UI.resizing = !0, requestAnimationFrame(UI.resizeRunner));
  }, resizeRunner: function () {
    UI.resizeHandlers.forEach(function (e) {
      e();
    }), UI.resizing = !1;
  }, scroll: function () {
    UI.scrolling || (UI.scrolling = !0, requestAnimationFrame(UI.scrollRunner));
  }, scrollRunner: function () {
    UI.scrollHandlers.forEach(function (e) {
      e();
    }), UI.scrolling = !1;
  }, scrollInterrupt: function (e) {
    e = e.originalEvent || e, (e.which > 0 || "mousedown" === e.type || "mousewheel" === e.type || "wheel" === e.type) && UI.scrollStop();
  }, handleDocumentBlur: function () {
    UI.documentBlurHandlers.forEach(function (e, t) {
      e();
    });
  }, generateUUID: function (e) {
    return e = e || "Object", e + ++UI.uuids + "-" + Date.now();
  }, isMatchBreakpoint: function (e) {
    return window.matchMedia("(min-width: " + e + "px)").matches;
  }, getCurrentBreakpoint: function () {
    if (window.matchMedia) return UI.isMatchBreakpoint(UI.BREAKPOINTS.LG) ? UI.BREAKPOINTS.LG : UI.isMatchBreakpoint(UI.BREAKPOINTS.MD) ? UI.BREAKPOINTS.MD : UI.isMatchBreakpoint(UI.BREAKPOINTS.SM) ? UI.BREAKPOINTS.SM : UI.isMatchBreakpoint(UI.BREAKPOINTS.XS) ? UI.BREAKPOINTS.XS : UI.BREAKPOINTS.BASE;var e = $(window).width();return e >= UI.BREAKPOINTS.LG ? UI.BREAKPOINTS.LG : e >= UI.BREAKPOINTS.MD ? UI.BREAKPOINTS.MD : e >= UI.BREAKPOINTS.SM ? UI.BREAKPOINTS.SM : e >= UI.BREAKPOINTS.XS ? UI.BREAKPOINTS.XS : UI.BREAKPOINTS.BASE;
  }, isAboveBreakpoint: function (e) {
    return UI.getCurrentBreakpoint() >= e;
  }, isBelowBreakpoint: function (e) {
    return UI.getCurrentBreakpoint() < e;
  }, onTransitionEnd: function (e, t, n) {
    var i = $(e);n ? i.one(UI.EVENTS_TRANSITION_END, t) : i.on(UI.EVENTS_TRANSITION_END, t);
  }, isFocusedInWindow: function (e) {
    var t = e.getBoundingClientRect(),
        n = window.innerHeight,
        i = n / 2;return t.top < i && n - t.bottom < i;
  }, updateBrowserHistory: function (e, t, n, i) {
    e = e || {}, i = i || "", window.history ? n ? window.history.pushState(e, i, t) : window.history.replaceState(e, i, t) : console.error("Fatal: unable to manipulate browser history");
  }, addBrowserHistoryHandler: function (e) {
    e && $.isFunction(e) && UI.historyPopHandlers.push(e);
  }, handleBrowserHistoryPop: function (e) {
    UI.historyPopHandlers.forEach(function (t) {
      t(e);
    });
  }, scrollIntoView: function (e, t, n) {
    if (e) {
      t = parseInt(t) || 0, UI.isBelowBreakpoint(UI.BREAKPOINTS.SM) && (t -= $(UI.DEFAULT_NAVIGATION_CONTAINER).outerHeight() || 0);var i,
          o = e.getBoundingClientRect();if (!(o.top < t || o.bottom > window.innerHeight)) return;i = $(e).offset().top + t, n = "number" == typeof n ? n : UI.DEFAULT_ANIMATION_DURATION, UI.scrollToHeight(i, n);
    }
  }, scrollTo: function (e, t, n) {
    if (e) {
      t = parseInt(t) || 0, UI.isBelowBreakpoint(UI.BREAKPOINTS.SM) && (t -= $(UI.DEFAULT_NAVIGATION_CONTAINER).outerHeight() || 0);var i = $(e).offset().top + t;n = "number" == typeof n ? n : UI.DEFAULT_ANIMATION_DURATION, UI.scrollToHeight(i, n);
    }
  }, scrollStop: function () {
    UI.scrollingPage && (UI.SCROLL_TARGET.stop(), UI.scrollingPage = !1);
  }, scrollToHeight: function (e, t) {
    UI.scrollStop(), UI.scrollingPage = !0, UI.SCROLL_TARGET.animate({ scrollTop: e }, { duration: t, easing: "easeOutCubic", complete: function () {
        UI.scrollingPage = !1;
      } });
  }, clearHeight: function (e) {
    var t = Array.prototype.slice.call(arguments);t && t.forEach(function (e) {
      e instanceof $ && e.height("");
    });
  }, syncHeight: function (e) {
    if (e && e.length > 0) {
      var t = null,
          n = Array.prototype.slice.call(arguments);n && n.forEach(function (e, n) {
        n > 0 && e instanceof $ && (t = t ? t.add(e) : e);
      }), UI.clearHeight(t || e);var i = Math.max.apply(null, e.map(function () {
        return $(this).outerHeight();
      }).get());return (t || e).css("height", i + "px"), i;
    }return 0;
  }, handleTouchEnd: function (e) {
    UI.lastTouchEvent = Date.now();
  }, isRecentTouch: function (e) {
    return void 0 === e && (e = UI.DEFAULT_MILLISECONDS_FOR_TOUCH), 0 === e ? 0 !== UI.lastTouchEvent : Date.now() - UI.lastTouchEvent <= e;
  }, toggleModalLock: function (e) {
    $("body").toggleClass("modal-lock", e);
  }, debounce: function (e, t, n) {
    var i;return function () {
      var o = this,
          r = arguments,
          a = function () {
        i = null, n || e.apply(o, r);
      },
          s = n && !i;clearTimeout(i), i = setTimeout(a, t), s && e.apply(o, r);
    };
  }, supports: { touch: "ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch, transitionEnd: function () {
      var e,
          t = document.createElement("fakeelement"),
          n = { transition: "transitionend", OTransition: "oTransitionEnd", MozTransition: "transitionend", WebkitTransition: "webkitTransitionEnd" };for (e in n) if (void 0 !== t.style[e]) return n[e];return !1;
    }(), video: function () {
      var e = document.createElement("video"),
          t = {};return t = "canPlayType" in e ? { webm: e.canPlayType("video/webm"), mp4: e.canPlayType("video/mp4") } : { webm: !1, mp4: !1 }, e = null, (t.webm || t.mp4) && !window.navigator.userAgent.match(/iPhone|iPad|iPod/i);
    }(), audioMp3: function () {
      var e = document.createElement("audio");return !(!e.canPlayType || !e.canPlayType("audio/mpeg;").replace(/no/, ""));
    }() } };window && void 0 === window.UI && (window.UI = UI), $(document).ready(function () {
  UI.init();
}), $(window).on("load", function () {
  UI.load();
}), UI.TouchScroll = { KEY_DATA: "UITouchScrollData", SCROLL_THRESHOLD: 10, ANIMATION_SNAP_DURATION: 100, DRAG_THRESHOLD_RESISTANCE: .75, DRAG_MOMENTUM_MULTIPLIER: 150, EXTRA_MARGIN: 160, bind: function (e) {
    e.$root && e.$wrapper && e.$container || console.error("Error: invalid bindings object"), e.$container.on("touchstart", UI.TouchScroll.handleStart.bind(null, e)), e.$container.on("touchend", UI.TouchScroll.handleEnd.bind(null, e));
  }, checkOverflows: function (e, t, n, i) {
    e.toggleClass("is-rightMax", t <= n), e.toggleClass("is-leftMax", t >= i);
  }, handleStart: function (e, t) {
    var n = e.$root,
        i = (e.$wrapper, e.$container);UI.mouse.update(t.originalEvent);var o = UI.mouse.snapshot();n.hasClass("is-constrained") && (n.data(UI.TouchScroll.KEY_DATA, { x: o.x, x0: o.x, left: i.position().left + UI.TouchScroll.EXTRA_MARGIN, active: !1 }), i.stop(!0), i.on("touchmove", UI.TouchScroll.handleMove.bind(null, e)));
  }, handleMove: function (e, t) {
    requestAnimationFrame(UI.TouchScroll.move.bind(null, e));
  }, move: function (e) {
    var t = e.$root,
        n = e.$wrapper,
        i = e.$container,
        o = UI.mouse.snapshot(),
        r = t.data(UI.TouchScroll.KEY_DATA),
        a = o.x - r.x;if (r.active || Math.abs(a) >= UI.TouchScroll.SCROLL_THRESHOLD) {
      r.active = !0, r.x = o.x;var s = i.width() - n.width(),
          u = 0,
          l = o.x - r.x0,
          c = r.left + l;c < -s ? c = -s - Math.pow(Math.abs(c + s), UI.TouchScroll.DRAG_THRESHOLD_RESISTANCE) : c > u && (c = u + Math.pow(Math.abs(c - u), UI.TouchScroll.DRAG_THRESHOLD_RESISTANCE)), c -= UI.TouchScroll.EXTRA_MARGIN, i.css("left", c + "px"), UI.TouchScroll.checkOverflows(t, c, -s, u);
    }
  }, handleEnd: function (e, t) {
    var n = e.$root,
        i = e.$wrapper,
        o = e.$container,
        r = n.data(UI.TouchScroll.KEY_DATA);o.off("touchmove");var a = UI.mouse.snapshot(),
        s = a.x - r.x,
        u = a.dX / a.timeElapsed,
        l = u * UI.TouchScroll.DRAG_MOMENTUM_MULTIPLIER;if (r.active || Math.abs(s) >= UI.TouchScroll.SCROLL_THRESHOLD) {
      r.active = !0, r.x = a.x;var c = o.width() - i.width(),
          p = 0,
          d = o.position().left + UI.TouchScroll.EXTRA_MARGIN,
          f = d + l;f < -c ? f = -c - Math.pow(Math.abs(f + c), UI.TouchScroll.DRAG_THRESHOLD_RESISTANCE) : f > p && (f = p + Math.pow(Math.abs(f - p), UI.TouchScroll.DRAG_THRESHOLD_RESISTANCE)), l = Math.abs(f - d) / 2, d = e.snap && "function" == typeof e.snap ? e.snap(f, p, c) : Math.min(p, Math.max(f, -c)), UI.TouchScroll.checkOverflows(n, d, -c, p), f -= UI.TouchScroll.EXTRA_MARGIN, d -= UI.TouchScroll.EXTRA_MARGIN, o.animate({ left: f }, { duration: l, easing: "easeOutCubic" }).animate({ left: d }, { duration: UI.TouchScroll.ANIMATION_SNAP_DURATION, easing: "easeOutCubic" }), t.preventDefault(), r.active && (t.stopPropagation(), r.active = !1);
    }
  }, isActive: function (e) {
    var t = e.data(UI.TouchScroll.KEY_DATA);return !(!t || !t.active);
  } };
var CardGroup = { syncHandlers: [], init: function (a) {
    var r = $(a || document).find(".CardGroup");r.each(function (a, r) {
      var n,
          d = $(r);d.hasClass("CardGroup--adaptiveLg") ? n = CardGroup.sync.bind(null, r, UI.BREAKPOINTS.LG) : d.hasClass("CardGroup--adaptiveMd") ? n = CardGroup.sync.bind(null, r, UI.BREAKPOINTS.MD) : d.hasClass("CardGroup--adaptiveSm") ? n = CardGroup.sync.bind(null, r, UI.BREAKPOINTS.SM) : d.hasClass("CardGroup--adaptive") && (n = CardGroup.sync.bind(null, r, null)), n && (UI.resizeHandlers.push(n), CardGroup.syncHandlers.push(n));
    });
  }, load: function (a) {
    CardGroup.syncHandlers.map(function (a) {
      a();
    });
  }, sync: function (a, r) {
    if (a) {
      var n = $(a),
          d = n.find(".Card.is-adaptive .Card-content");r && UI.isBelowBreakpoint(r) ? UI.clearHeight(d) : UI.syncHeight(d);
    }
  } };UI.register(CardGroup);
var Accordion = { getRootElement: function (e) {
    return $(e).closest(".Accordion");
  }, getItemElements: function (e) {
    return e.find(".AccordionItem");
  }, update: function (e) {
    var t = $(e.target).closest(".AccordionItem"),
        o = Accordion.getRootElement(e.target),
        a = o.attr("data-exclusive-above") || "";if (!a || UI.isAboveBreakpoint(UI.BREAKPOINTS[a.toUpperCase()])) {
      var c = o.attr("data-exclusive-below") || "";c && !UI.isBelowBreakpoint(UI.BREAKPOINTS[c.toUpperCase()]) || t.hasClass("is-open") && Accordion.closeAllBut(o, t);
    }
  }, closeAllBut: function (e, t) {
    var o = Accordion.getItemElements(e);o.each(function (e, o) {
      var a = $(o);a.is(t) || Expandable.close(a);
    });
  }, afterInit: function (e) {
    var t = e ? $(e).find(".Accordion") : $(".Accordion");t.each(function (e, t) {
      var o = $(t),
          a = o.attr("data-is-exclusive"),
          c = o.attr("data-exclusive-above") || "",
          n = o.attr("data-exclusive-below") || "";if (a || c || n) {
        var r = Accordion.getItemElements(o);r.each(function (e, t) {
          var o = $(t);Expandable.addClickHandler(o, Accordion.update);
        });
      }
    });
  } };UI.register(Accordion);
var Button = { getRootElement: function (t) {
    return $(t).closest(".Button");
  }, isDisabled: function (t) {
    var o = Button.getRootElement(t);return !!o.prop("disabled");
  }, isLoading: function (t) {
    var o = Button.getRootElement(t);return o.hasClass("is-loading");
  }, toggleDisabled: function (t, o) {
    var e = Button.getRootElement(t);void 0 === o && (o = !e.prop("disabled")), e.prop("disabled", !!o), e.toggleClass("is-disabled", !!o);
  }, toggleLoading: function (t, o) {
    var e = Button.getRootElement(t);void 0 === o && (o = !e.hasClass("is-loading")), e.toggleClass("is-loading", !!o);
  } };UI.register(Button);
var Card = { resize: function (a) {
    var r = $(a || document).find(".Card");r.each(function (a, r) {
      var i = $(r),
          t = parseInt(i.attr("data-offset")),
          e = parseFloat(i.attr("data-ratio"));if (!Card.isPrimary(i) || UI.isBelowBreakpoint(UI.BREAKPOINTS.XS)) {
        var s = i.outerWidth(),
            d = Math.floor((s + t) * e);Card.isAdaptive(i) ? i.find(".Card-imageWrapper").height(d) : i.height(d);
      } else Card.isAdaptive(i) ? i.find(".Card-imageWrapper").height("") : i.height("");if (i.attr("data-image-ratio")) {
        var n = parseFloat(i.attr("data-image-ratio")),
            h = 100 * (n / e);i.find(".Card-imageWrapper").css("height", h + "%");var o = 100 - h;i.find(".Card-content").css("height", o + "%");
      }
    });
  }, refresh: function (a) {
    Card.resize(a);
  }, isPrimary: function (a) {
    return a.hasClass("is-primary");
  }, isAdaptive: function (a) {
    return a.hasClass("is-adaptive");
  } };UI.register(Card);
var Carousel = { DEFAULT_IN_DELAY: 300, DEFAULT_OUT_DELAY: 300, DEFAULT_LOCKOUT_DELAY: 0, ANALYTICS_LEFT_ARROW_CLICKED_ACTION: "left", ANALYTICS_RIGHT_ARROW_CLICKED_ACTION: "right", ANALYTICS_SCROLL_BUTTON_CLICKED_ACTION: "square", getRootElement: function (e) {
    return $(e).closest(".Carousel");
  }, getContainerElement: function (e) {
    return e.children(".Carousel-container");
  }, getItemElements: function (e) {
    return e.children(".CarouselItem");
  }, getActiveElement: function (e) {
    return e.children(".CarouselItem.is-active");
  }, getScrollSelector: function (e) {
    return e.attr("data-scroll");
  }, isInfinite: function (e) {
    return e.hasClass("is-infinite");
  }, init: function (e) {
    var t = e ? $(e).find(".Carousel") : $(".Carousel");t.each(function (e, t) {
      var a = $(t),
          n = Carousel.getContainerElement(a),
          r = Carousel.getItemElements(n),
          l = a.find(".Carousel-prev"),
          o = a.find(".Carousel-next");r.length <= 1 ? ($(l).hide(), $(o).hide()) : ($(l).click(Carousel.prev), $(o).click(Carousel.next)), n.hammer().bind("swipeleft", Carousel.next), n.hammer().bind("swiperight", Carousel.prev);var i = Carousel.getActiveElement(n);i.length < 1 && r.length > 0 && CarouselItem.activate(r[0]);var s = Carousel.getScrollSelector(a);s && CarouselScroll.sync(s, Carousel.getData(t));
    });
  }, load: function (e) {
    var t = e ? $(e).find(".Carousel") : $(".Carousel");t.each(function (e, t) {
      var a = $(t),
          n = Carousel.getContainerElement(a),
          r = Carousel.getItemElements(n);if (r.length > 0 && Carousel.getActiveElement(n).length < 1) {
        CarouselItem.activate(r[0]), a.addClass("is-leftMax");var l = Carousel.getScrollSelector(a);l && CarouselScroll.activate(l, 0, { automatic: !0 });
      }var o = Carousel.getActiveElement(n),
          i = r.index(o);Carousel.checkBounds(a, r, i);
    });
  }, checkBounds: function (e, t, a) {
    e.toggleClass("is-leftMax", a < 1), e.toggleClass("is-rightMax", a > t.length - 2);
  }, resize: function (e) {
    var t = $(e || document).find(".Carousel");t.each(function (e, t) {
      var a = $(t),
          n = Carousel.getContainerElement(a),
          r = Carousel.getItemElements(n),
          l = UI.syncHeight(r);n.height(l);
    });
  }, refresh: function (e) {
    Carousel.resize(e);
  }, activate: function (e, t, a) {
    if (t < 0) return !1;a = a || {};var n = Carousel.getRootElement(e),
        r = Carousel.getContainerElement(n),
        l = Carousel.getItemElements(r),
        o = Carousel.getActiveElement(r);if (t >= l.length) return !1;if (n.hasClass("is-transitioning")) return !1;var i = l.index(o);if (t !== i) {
      n.addClass("is-transitioning");var s = n.attr("data-out");s = void 0 !== s ? parseInt(s) : Carousel.DEFAULT_OUT_DELAY;var C = n.attr("data-in");C = C ? parseInt(C) : Carousel.DEFAULT_IN_DELAY;var u = n.attr("data-lockout");u = u ? parseInt(u) : Carousel.DEFAULT_LOCKOUT_DELAY;var c = (a.direction ? a.direction : i > t ? "prev" : "next") || "next";CarouselItem.deactivate(o, s, function () {
        o = $(l[t]), o.addClass("is-active"), Carousel.checkBounds(n, l, t), CarouselItem.activate(o, { delay: C, callback: function () {
            u > 0 ? setTimeout(function () {
              n.removeClass("is-transitioning");
            }, u) : n.removeClass("is-transitioning");
          }, direction: c });
      });
    }var g = Carousel.getScrollSelector(n);return g && CarouselScroll.activate(g, t, a), a.analyticsEvent && Carousel.pushAnalyticsToDataLayer(n, e, t, a.analyticsEvent), !0;
  }, prev: function (e) {
    var t = Carousel.getRootElement(e.target),
        a = Carousel.getContainerElement(t),
        n = Carousel.getItemElements(a),
        r = Carousel.getActiveElement(a),
        l = n.index(r);l > 0 ? (l--, Carousel.activate(e.target, l, { direction: "prev", analyticsEvent: Carousel.ANALYTICS_LEFT_ARROW_CLICKED_ACTION })) : Carousel.isInfinite(t) && (l = n.length - 1, Carousel.activate(e.target, l, { direction: "prev", analyticsEvent: Carousel.ANALYTICS_LEFT_ARROW_CLICKED_ACTION }));
  }, next: function (e) {
    var t = Carousel.getRootElement(e.target),
        a = Carousel.getContainerElement(t),
        n = Carousel.getItemElements(a),
        r = Carousel.getActiveElement(a),
        l = n.index(r) + 1;l < n.length ? Carousel.activate(e.target, l, { direction: "next", analyticsEvent: Carousel.ANALYTICS_RIGHT_ARROW_CLICKED_ACTION }) : Carousel.isInfinite(t) && (l = 0, Carousel.activate(e.target, l, { direction: "next", analyticsEvent: Carousel.ANALYTICS_RIGHT_ARROW_CLICKED_ACTION }));
  }, getData: function (e) {
    var t = Carousel.getRootElement(e),
        a = Carousel.getContainerElement(t),
        n = Carousel.getItemElements(a),
        r = Carousel.getActiveElement(a);return { count: n.length, active: r.index() };
  }, pushAnalyticsToDataLayer: function (e, t, a, n) {
    var r = e.attr("data-analytics"),
        l = e.attr("data-analytics-placement");r && l && window.dataLayer && window.dataLayer.push({ event: r, dataAnalyticsPlacement: l + " || Homepage - position:" + a + " - " + n });
  } };UI.register(Carousel);
var CarouselScroll = { AUTOSCROLL_TIMEOUT: "autoscrollTimeout", DEFAULT_AUTOSCROLL_DELAY: 5e3, DEFAULT_TRANSITION_DELAY: 600, getRootElement: function (l) {
    return $(l).closest(".CarouselScroll");
  }, getContainerElement: function (l) {
    return l.children(".CarouselScroll-container");
  }, getItemTemplate: function (l) {
    return l.find(".CarouselScroll-template .CarouselScroll-item");
  }, getItemElements: function (l) {
    return l.children(".CarouselScroll-item");
  }, getActiveElement: function (l) {
    return l.children(".CarouselScroll-item.is-active");
  }, getCarouselSelector: function (l) {
    return l.attr("data-carousel");
  }, isAutoscroll: function (l) {
    return l.hasClass("is-autoscroll");
  }, isAutoscrollInterrupt: function (l) {
    return l.hasClass("is-autoscroll-interrupt");
  }, sync: function (l, o) {
    var e = CarouselScroll.getRootElement(l);if (!o) {
      var t = CarouselScroll.getCarouselSelector(e);t ? o = Carousel.getData(t) : console.error("Could not find data source for CarouselScroll component.");
    }var r = CarouselScroll.getContainerElement(e);r.empty();for (var a, s = CarouselScroll.getItemTemplate(e), c = null, n = 0; n < o.count; n++) a = s.clone(), a.click(CarouselScroll.click.bind(null, l, n)), n === o.active && (a.addClass("is-active"), c = a), r.append(a);CarouselScroll.isAutoscroll(e) && (CarouselScroll.stopAutoscroll(e), c && CarouselScroll.startAutoscroll(e, c));
  }, stopAutoscroll: function (l) {
    var o = l.data(CarouselScroll.AUTOSCROLL_TIMEOUT);o && clearTimeout(o);var e = CarouselScroll.getContainerElement(l),
        t = CarouselScroll.getItemElements(e);t.children(".CarouselScroll-inner").stop().css("width", "");
  }, startAutoscroll: function (l, o) {
    var e = l.attr("data-scroll-delay");e = void 0 === e ? CarouselScroll.DEFAULT_AUTOSCROLL_DELAY : parseInt(e);var t = l.attr("data-transition-delay");t = void 0 === t ? CarouselScroll.DEFAULT_TRANSITION_DELAY : parseInt(t);var r = setTimeout(CarouselScroll.autoscroll.bind(null, l), e + t);l.data(CarouselScroll.AUTOSCROLL_TIMEOUT, r);var a = o.find(".CarouselScroll-inner");t > 0 ? setTimeout(CarouselScroll.startAutoscrollAnimation.bind(null, a, e), t) : CarouselScroll.startAutoscrollAnimation(a, e);
  }, startAutoscrollAnimation: function (l, o) {
    l.css("width", 0), l.animate({ width: "100%" }, o, "linear");
  }, autoscroll: function (l) {
    var o = CarouselScroll.getContainerElement(l),
        e = CarouselScroll.getItemElements(o),
        t = CarouselScroll.getActiveElement(o),
        r = t.length ? t.index() + 1 : 0;r >= e.length && (r = 0);var a = CarouselScroll.getCarouselSelector(l);Carousel.activate(a, r, { automatic: !0 });
  }, click: function (l, o) {
    var e = CarouselScroll.getRootElement(l),
        t = CarouselScroll.getCarouselSelector(e);Carousel.activate(t, o, { analyticsEvent: Carousel.ANALYTICS_SCROLL_BUTTON_CLICKED_ACTION });
  }, select: function (l, o, e) {
    Carousel.activate(o, e);
  }, activate: function (l, o, e) {
    e = e || {};var t = CarouselScroll.getRootElement(l),
        r = CarouselScroll.getContainerElement(t),
        a = CarouselScroll.getItemElements(r);o = Math.max(0, Math.min(o, a.length - 1)), a.removeClass("is-active");var s = $(a[o]);s.addClass("is-active"), CarouselScroll.isAutoscroll(t) && (CarouselScroll.stopAutoscroll(t), s.stop(), !e.automatic && CarouselScroll.isAutoscrollInterrupt(t) || CarouselScroll.startAutoscroll(t, s));
  } };UI.register(CarouselScroll);
var CardFooter = { resize: function (e) {
    var r = $(e || document).find(".CardFooter.CardFooter--auto");r.each(function (e, r) {
      var a = $(r),
          o = a.find(".CardFooter-space");if (a.hasClass("CardFooter--adaptive") || a.hasClass("CardFooter--adaptiveXs") && UI.isAboveBreakpoint(UI.BREAKPOINTS.XS) || a.hasClass("CardFooter--adaptiveSm") && UI.isAboveBreakpoint(UI.BREAKPOINTS.SM)) {
        var t = a.find(".CardFooter-content"),
            i = t.height();o.css("height", i);
      } else UI.clearHeight(o);
    });
  }, refresh: function (e) {
    CardFooter.resize(e);
  } };UI.register(CardFooter);
var CarouselItem = { DEFAULT_TRANSITION_DELAY: 20, EVENT_ANIMATE_IN: "animatein.CarouselItem", EVENT_ANIMATE_OUT: "animateout.CarouselItem", getRootElement: function (e) {
    return $(e).closest(".CarouselItem");
  }, getContentElement: function (e) {
    return e.children(".CarouselItem-content");
  }, activate: function (e, t) {
    t = t || {};var i = parseInt(t.delay) || 0,
        s = t.callback,
        a = CarouselItem.getRootElement(e);a.removeClass("is-active is-in is-prev-in is-next-in"), a.addClass("is-active"), "prev" === t.direction ? a.addClass("is-prev-in") : "next" === t.direction ? a.addClass("is-next-in") : a.addClass("is-in"), i > 0 ? setTimeout(function () {
      a.trigger(CarouselItem.EVENT_ANIMATE_IN), $.isFunction(s) && (i > 0 ? setTimeout(s, i) : s());
    }, CarouselItem.DEFAULT_TRANSITION_DELAY) : (a.trigger(CarouselItem.EVENT_ANIMATE_IN), $.isFunction(s) && s());
  }, deactivate: function (e, t, i) {
    t = parseInt(t) || 0;var s = CarouselItem.getRootElement(e);s.trigger(CarouselItem.EVENT_ANIMATE_OUT), t > 0 ? setTimeout(function () {
      s.removeClass("is-active"), $.isFunction(i) && i();
    }, t) : (s.removeClass("is-active"), $.isFunction(i) && i());
  }, toggle: function (e) {
    var t = CarouselItem.getRootElement(e);t.hasClass("is-active") ? CarouselItem.deactivate(e) : CarouselItem.activate(e);
  } };UI.register(CarouselItem);
var Debug = { init: function (e) {
    var g = e ? $(e).find(".Debug") : $(".Debug");g.each(function (e, g) {
      $(g).children(".Debug-toggle").click(Debug.toggle);
    });
  }, toggle: function (e) {
    $(e.target).closest(".Debug").toggleClass("is-active");
  } };UI.register(Debug);
var Counter = { init: function (t) {
    var e = t ? $(t).find(".Counter") : $(".Counter");e.each(function (t, e) {
      $(e).children("input.Counter-input").change(Counter.update);
    });
  }, generateText: function (t, e, n) {
    var r = t.attr("data-replacement");return r ? e.replace(r, n) : n + " " + e;
  }, update: function (t) {
    var e,
        n,
        r = $(t.target).closest(".Counter"),
        a = r.children("input.Counter-input"),
        u = parseInt(a.val()) || 0;e = 0 == u && (n = r.attr("data-empty-text")) ? Counter.generateText(r, n, u) : 1 == u && (n = r.attr("data-singular-text")) ? Counter.generateText(r, n, u) : Counter.generateText(r, r.attr("data-text"), u), r.find(".Counter-text").text(e);
  }, getValue: function (t) {
    var e = $(t).closest(".Counter"),
        n = e.children("input.Counter-input");return parseInt(n.val());
  }, setValue: function (t, e) {
    var n = $(t).closest(".Counter"),
        r = n.children("input.Counter-input");"object" == typeof e ? r.val(e[r.attr("name")]) : r.val(e), r.change();
  } };UI.register(Counter);
var EmbeddedMedia = { init: function (e) {
    var d = $(e || document).find(".EmbeddedMedia");d.each(function (e, d) {
      UI.resizeHandlers.push(EmbeddedMedia.sync.bind(null, d)), $(d).find(".EmbeddedMedia-preview").click(EmbeddedMedia.activate.bind(null, d));
    });
  }, load: function (e) {
    var d = $(e || document).find(".EmbeddedMedia");d.each(function (e, d) {
      EmbeddedMedia.sync(d);
    });
  }, sync: function (e) {
    var d = $(e),
        a = d.attr("data-height") / d.attr("data-width");d.css("height", d.width() * a + "px"), d.children().css("height", d.width() * a + "px");
  }, activate: function (e) {
    var d = $(e),
        a = d.attr("data-type"),
        t = d.attr("data-name");switch (a) {case "youtube":default:
        d.html('<iframe class="EmbeddedMedia-frame" src="https://www.youtube.com/embed/' + t + '?autoplay=1" allowfullscreen></iframe>'), d.children().css("height", d.height() + "px");}
  } };UI.register(EmbeddedMedia);
var Expandable = { init: function (a) {
    var n = a ? $(a).find(".Expandable") : $(".Expandable");n.each(function (a, n) {
      var e = $(n),
          i = e.find(".Expandable-toggle");i.click(Expandable.toggle);
    });
  }, load: function (a) {
    var n = a ? $(a).find(".Expandable") : $(".Expandable");n.each(function (a, n) {
      Expandable.render(n);
    });
  }, render: function (a) {
    var n = $(a);if (n.hasClass("is-open")) {
      var e = n.find(".Expandable-container"),
          i = n.find(".Expandable-content");e.css("height", i.outerHeight());
    }
  }, refresh: function (a) {
    Expandable.resize(a);
  }, resize: function (a) {
    var n = $(a || document).find(".Expandable:visible");n.each(function (a, n) {
      Expandable.render(n);
    });
  }, toggle: function (a) {
    var n = $(a.target),
        e = n.closest(".Expandable");return e.hasClass("is-caretOnly") && UI.isAboveBreakpoint(UI.BREAKPOINTS.SM) && !n.hasClass("Expandable-caret") ? void a.stopImmediatePropagation() : (e.hasClass("is-open") ? Expandable.close(a.target) : Expandable.open(a.target), void a.preventDefault());
  }, reset: function (a) {
    var n = $(a.target).closest(".Expandable");n.removeClass("is-transitioning"), n.hasClass("is-open") && UI.scrollIntoView(n.find(".Expandable-toggle")[0]);
  }, open: function (a) {
    var n = $(a).closest(".Expandable");if (!n.hasClass("is-open")) {
      n.addClass("is-transitioning"), UI.onTransitionEnd(n, Expandable.reset, !0);var e = n.find(".Expandable-container"),
          i = n.find(".Expandable-content");e.css("height", i.outerHeight()), n.addClass("is-open");
    }
  }, close: function (a) {
    var n = $(a).closest(".Expandable");if (n.hasClass("is-open")) {
      n.addClass("is-transitioning"), UI.onTransitionEnd(n, Expandable.reset, !0);var e = n.find(".Expandable-container");e.css("height", ""), n.removeClass("is-open");
    }
  }, addClickHandler: function (a, n) {
    var e = $(a).find(".Expandable-toggle");e.on("click", n);
  } };UI.register(Expandable);
var FormField = { init: function (e) {
    var r = e ? $(e).find(".FormField") : $(".FormField");r.each(function (e, r) {
      var i = $(r),
          l = i.children(".FormField-clear");if (l.length > 0) {
        var F = i.children(".FormField-input");F.on("keyup", FormField.update), l.click(FormField.clear);
      }
    });
  }, update: function (e) {
    var r = $(e.target).closest(".FormField"),
        i = r.children(".FormField-input"),
        l = r.children(".FormField-clear"),
        F = i.val();l.toggleClass("hide", !F || F.length < 1);
  }, clear: function (e) {
    var r = $(e.target).closest(".FormField"),
        i = r.children(".FormField-input");i.val("").trigger("keyup");
  } };UI.register(FormField);
var Gallery = { CLASS_DISABLE_SNAP: "is-disableSnap", ANIMATION_DURATION: UI.DEFAULT_SLIDE_ANIMATION_DURATION, CENTERLINE_THRESHOLD: 50, getRootElement: function (e) {
    return $(e).closest(".Gallery");
  }, getWrapperElement: function (e) {
    return e.children(".Gallery-wrapper");
  }, getContainerElement: function (e) {
    return e.find(".Gallery-container");
  }, getInnerElement: function (e) {
    return e.find(".Gallery-inner");
  }, getItemElements: function (e) {
    return e.find(".GalleryItem");
  }, getFocusElement: function (e) {
    return e.find(".GalleryItem.is-focus");
  }, getData: function (e) {
    var t = Gallery.getRootElement(event.target),
        l = Gallery.getContainerElement(t),
        a = Gallery.getItemElements(l),
        n = Math.floor(l.width / a[0].offsetWidth);return { count: a.length, span: n };
  }, isAdaptive: function (e) {
    return e.hasClass("is-adaptive");
  }, init: function (e) {
    var t = $(e || document).find(".Gallery");t.each(function (e, t) {
      var l = $(t);l.find(".Gallery-left").click(Gallery.left), l.find(".Gallery-right").click(Gallery.right);var a = Gallery.getContainerElement(l),
          n = Gallery.getItemElements(a);n.click(Gallery.click), n.length < 2 && l.addClass("is-arrows-disabled");
    });
  }, load: function (e) {
    Gallery.resize();
  }, resize: function (e) {
    var t = $(e || document).find(".Gallery");t.each(function (e, t) {
      var l = $(t);if (l.is(":visible")) {
        var a = Gallery.getWrapperElement(l),
            n = Gallery.getContainerElement(l),
            r = Gallery.getFocusElement(n),
            i = Gallery.getItemElements(n);Gallery.isAdaptive(l) || i.each(function (e, t) {
          var l = $(this).children(".GalleryItem-image");if (l.length) l.height(a.height());else {
            var n = $(t);n.height(a.height()), UI.refresh(n);
          }
        }), GalleryItem.beforeLoad(n), n[0].scrollWidth > n[0].clientWidth ? l.addClass("is-constrained") : l.removeClass("is-constrained"), r.length > 0 ? Gallery.snapTo(r, i, l, n, a, !0) : Gallery.focus(l, a, n);
      }
    });
  }, refresh: function (e) {
    Gallery.resize(e);
  }, nearest: function (e, t, l) {
    var a = e[0].getBoundingClientRect().left + e.width() / 2,
        n = null,
        r = null;return l.each(function (e, t) {
      var l = t.getBoundingClientRect().left + $(t).width() / 2,
          i = a - l;(null === r || Math.abs(i) < Math.abs(n)) && (r = t, n = i);
    }), { $elem: $(r), distance: n };
  }, left: function (e) {
    var t = Gallery.getRootElement(e.target),
        l = Gallery.getContainerElement(t),
        a = Gallery.getWrapperElement(t),
        n = Gallery.getItemElements(l);if (t.hasClass(Gallery.CLASS_DISABLE_SNAP)) {
      var r = Gallery.getInnerElement(t),
          i = r.width() - l.width(),
          s = l.width(),
          o = Math.max(0, Math.min(l.scrollLeft() - s, i));Gallery.checkLimitsInner(t, o, i), l.animate({ scrollLeft: o }, { duration: Gallery.ANIMATION_DURATION, easing: "easeOutCubic" });
    } else {
      var c = Gallery.nearest(a, l, n),
          g = c.$elem.index();if (g >= 0) {
        var m = c.distance > Gallery.CENTERLINE_THRESHOLD ? $(n[g]) : $(n[g - 1]);Gallery.snapTo(m, n, t, l, a);
      }
    }
  }, right: function (e) {
    var t = Gallery.getRootElement(e.target),
        l = Gallery.getContainerElement(t),
        a = Gallery.getWrapperElement(t),
        n = Gallery.getItemElements(l);if (t.hasClass(Gallery.CLASS_DISABLE_SNAP)) {
      var r = Gallery.getInnerElement(t),
          i = r.width() - l.width(),
          s = l.width(),
          o = Math.max(0, Math.min(l.scrollLeft() + s, i));Gallery.checkLimitsInner(t, o, i), l.animate({ scrollLeft: o }, { duration: Gallery.ANIMATION_DURATION, easing: "easeOutCubic" });
    } else {
      var c = Gallery.nearest(a, l, n),
          g = c.$elem.index();if (g <= n.length - 1) {
        var m = c.distance < -Gallery.CENTERLINE_THRESHOLD ? $(n[g]) : $(n[g + 1]);Gallery.snapTo(m, n, t, l, a);
      }
    }
  }, checkLimits: function (e, t) {
    var l = Gallery.getRootElement(e),
        a = Gallery.getContainerElement(l),
        n = Gallery.getInnerElement(l),
        r = n.width() - a.width();Gallery.checkLimitsInner(l, t, r);
  }, checkLimitsInner: function (e, t, l) {
    e.toggleClass("is-leftMax", t <= 0), e.toggleClass("is-rightMax", t >= l);
  }, focus: function (e, t, l) {
    var a = Gallery.getItemElements(l);Gallery.snapTo($(a[0]), a, e, l, t);
  }, snapTo: function (e, t, l, a, n, r) {
    if (e && e.length > 0) {
      var i = n.width() / 2 - e.width() / 2,
          s = e[0].offsetLeft - i;t.removeClass("is-focus"), e.addClass("is-focus"), l.removeClass("is-leftMax is-rightMax"), 0 === t.index(e) ? l.addClass("is-leftMax") : t.index(e) === t.length - 1 && l.addClass("is-rightMax");var o = r ? 0 : Gallery.ANIMATION_DURATION;a.animate({ scrollLeft: s }, { duration: o, easing: "easeOutCubic" });
    }
  }, snapIndexLeft: function (e, t) {
    var l = Gallery.getRootElement(e),
        a = Gallery.getContainerElement(l),
        n = (Gallery.getWrapperElement(l), Gallery.getItemElements(a)),
        r = $(n[t]);if (r.length) {
      var i = r[0].getBoundingClientRect(),
          s = Gallery.getInnerElement(l),
          o = s.width() - a.width(),
          c = a.getBoundingClientRect().left - i.left;if (c > 0) {
        var g = Math.max(0, Math.min(a.scrollLeft() + c, o));l.toggleClass("is-leftMax", g <= 0), l.toggleClass("is-rightMax", g >= o), a.animate({ scrollLeft: g }, { duration: Gallery.ANIMATION_DURATION, easing: "easeOutCubic" });
      }
    }
  }, click: function (e) {
    var t = $(e.target).closest(".GalleryItem");if (null !== GalleryItem.getMetadata(t[0])) {
      var l = Gallery.getRootElement(e.target),
          a = Gallery.getContainerElement(l),
          n = Gallery.getItemElements(a);t.hasClass("is-focus") || (n.removeClass("is-focus"), t.addClass("is-focus"));var r = { items: [], modal: !0, index: 0 },
          i = 0,
          s = 0;n.each(function (e, l) {
        var a = GalleryItem.getMetadata(l);a && r.items.push(a), t.index() === e && (s = e, a.type === Lightbox.TYPE_YOUTUBE && (a.cancelAutoplay = !1)), i++;
      }), r.index = s, Lightbox.activate(r);
    }
  } };UI.register(Gallery);
var GalleryItem = { beforeLoad: function (t) {
    var e = $(t || document).find(".GalleryItem");e.each(function (t, e) {
      var a = $(e);a.css("width", GalleryItem.calcWidth(e) || "");
    });
  }, getMetadata: function (t) {
    var e = $(t).closest(".GalleryItem");if (!e) return null;var a,
        r = e.attr("data-videoUrl");if (r) return a = { type: Lightbox.TYPE_YOUTUBE, id: r, cancelAutoplay: !0, width: e.attr("data-videoWidth"), height: e.attr("data-videoHeight") };var i = e.children("img.GalleryItem-image");return i.length ? { url: i.attr("src"), width: i[0].naturalWidth, height: i[0].naturalHeight } : null;
  }, calcWidth: function (t) {
    var e = $(t),
        a = e.children(".GalleryItem-image"),
        r = e.attr("data-ratio");return r ? parseFloat(r) * (a.length ? a.height() : e.height()) : a.length ? a.width() : "";
  } };UI.register(GalleryItem);
var GalleryScroll = { getRootElement: function (l) {
    return $(l).closest(".GalleryScroll");
  }, getContainerElement: function (l) {
    return l.children(".GalleryScroll-container");
  }, getItemTemplate: function (l) {
    return l.find(".GalleryScroll-template .GalleryScroll-item");
  }, getItemElements: function (l) {
    return l.children(".GalleryScroll-item");
  }, getActiveElement: function (l) {
    return l.children(".GalleryScroll-item.is-active");
  }, getGallerySelector: function (l) {
    return l.attr("data-gallery");
  }, init: function (l) {
    var e = $(l || document).find(".GalleryScroll");e.each(function (l, e) {
      GalleryScroll.sync(e);
    });
  }, sync: function (l, e) {
    var t = GalleryScroll.getRootElement(l);if (!e) {
      var r = GalleryScroll.getGallerySelector(t);r ? e = Gallery.getData(r) : console.error("Could not find data source for GalleryScroll component.");
    }var a = GalleryScroll.getContainerElement(t);a.empty();for (var n, c = GalleryScroll.getItemTemplate(t), o = null, i = 0; i < e.count; i += e.span || 1) n = c.clone(), n.click(GalleryScroll.click.bind(null, l, i)), i === e.active && (n.addClass("is-active"), o = n), a.append(n);
  }, click: function (l, e) {
    var t = GalleryScroll.getRootElement(l),
        r = GalleryScroll.getGallerySelector(t);Gallery.activate(r, e);
  }, select: function (l, e, t) {
    Gallery.activate(e, t);
  }, activate: function (l, e) {
    var t = GalleryScroll.getRootElement(l),
        r = GalleryScroll.getContainerElement(t),
        a = GalleryScroll.getItemElements(r);e = Math.max(0, Math.min(e, a.length - 1)), a.removeClass("is-active");var n = $(a[e]);n.addClass("is-active");
  } };UI.register(GalleryScroll);
var Grid = { syncHandlers: [], getItemElements: function (n) {
    return n.children(".GridItem");
  }, init: function (n) {
    var s = $(n || document).find(".Grid");s.each(function (n, s) {
      var i,
          r = $(s);r.hasClass("Grid--syncLg") ? i = Grid.sync.bind(null, s, UI.BREAKPOINTS.LG) : r.hasClass("Grid--syncMd") ? i = Grid.sync.bind(null, s, UI.BREAKPOINTS.MD) : r.hasClass("Grid--syncSm") ? i = Grid.sync.bind(null, s, UI.BREAKPOINTS.SM) : r.hasClass("Grid--sync") && (i = Grid.sync.bind(null, s, null)), i && (UI.resizeHandlers.push(i), Grid.syncHandlers.push(i));
    });
  }, load: function (n) {
    Grid.syncHandlers.map(function (n) {
      n();
    });
  }, sync: function (n, s) {
    var i = $(n),
        r = Grid.getItemElements(i);!s || UI.isAboveBreakpoint(s) ? UI.syncHeight(r) : UI.clearHeight(r);
  } };UI.register(Grid);
var Hider = { toggle: function (e, i) {
    $(e).closest(".Hider").toggleClass("is-hidden", i);
  } };UI.register(Hider);
var ImageSlider = { DEFAULT_ANIMATION_DELAY: UI.DEFAULT_SLIDE_ANIMATION_DURATION, init: function (e) {
    var a = e ? $(e).find(".ImageSlider") : $(".ImageSlider");a.each(function (e, a) {
      var i = $(a),
          n = i.closest(".CarouselItem");n.length > 0 && (n.on(CarouselItem.EVENT_ANIMATE_IN, ImageSlider.animateIn.bind(null, a)), n.on(CarouselItem.EVENT_ANIMATE_OUT, ImageSlider.animateOut.bind(null, a)));var l = i.children(".ImageSlider-container").children(".ImageSlider-item");l.each(function (e, a) {
        var i = $(a);i.click(ImageSlider.clickHandler.bind(null, a, e));
      });
    });
  }, animateIn: function (e) {
    $(e).addClass("is-active");
  }, animateOut: function (e) {
    $(e).removeClass("is-active");
  }, clickHandler: function (e, a) {
    var i = $(e),
        n = i.closest(".Carousel");n.length > 0 && Carousel.activate(n, a);
  } };UI.register(ImageSlider);
var LightboxDeck = { activate: function (t) {
    var e = $(t).closest(".LightboxDeck");if (e.length > 0) {
      var i = e.children(".LightboxDeckItem"),
          a = { items: [], modal: !0, index: 0 };i.each(function (t, e) {
        a.items.push(LightboxDeckItem.getMetadata(e));
      }), Lightbox.activate(a);
    }
  } };UI.register(LightboxDeck);
var LightboxDeckItem = { TYPE_PAGE: "page", getMetadata: function (t) {
    var e = $(t).closest(".LightboxDeckItem");return e.attr("data-type") == LightboxDeckItem.TYPE_PAGE ? { type: LightboxDeckItem.TYPE_PAGE, html: e.html() } : { url: e.attr("data-url"), width: e.attr("data-width"), height: e.attr("data-height") };
  } };UI.register(LightboxDeckItem);
var Lightbox = { DEFAULT_IMAGE_WIDTH: 480, DEFAULT_IMAGE_HEIGHT: 320, TYPE_YOUTUBE: "youtube", TYPE_PAGE: "page", currentVideoId: null, processDeck: function (e, t) {
    for (var i = [], o = 0; o < t.items.length; ++o) {
      var a = t.items[o],
          l = {};if (Lightbox.TYPE_YOUTUBE == a.type) {
        var r = a.cancelAutoplay ? 0 : 1;l.html = "<div class='Lightbox-videoWrapper'><div class='Lightbox-video'><iframe data-id='" + a.id + "' width='" + (a.width || Lightbox.DEFAULT_IMAGE_WIDTH) + "' height='" + (a.height || Lightbox.DEFAULT_IMAGE_HEIGHT) + "' src='https://www.youtube.com/embed/" + a.id + "?enablejsapi=1&autoplay=" + r + "' frameborder='0' allowfullscreen></iframe></div></div>";
      } else Lightbox.TYPE_PAGE == a.type ? l.html = "<div class='Lightbox-pageWrapper'><div class='Lightbox-page'>" + a.html + "</div></div>" : (l.w = a.width || Lightbox.DEFAULT_IMAGE_WIDTH, l.h = a.height || Lightbox.DEFAULT_IMAGE_HEIGHT, l.src = a.url);i.push(l);
    }return i;
  }, stopVideo: function (e) {
    e.contentWindow.postMessage(JSON.stringify({ event: "command", func: "stopVideo", args: [] }), "*");
  }, activate: function (e) {
    var t = $(".Lightbox");if (t) {
      var i,
          o = { modal: !0, index: 0, history: !1, closeOnScroll: !1 };if ("string" == typeof e) {
        var a = t.attr("data-sets"),
            l = a ? JSON.parse(a) : {},
            r = l[e];"undefined" != typeof r.modal && (o.modal = !!r.modal), i = Lightbox.processDeck(t, r);
      } else i = Lightbox.processDeck(t, e), o.modal = e.modal, e.index && (o.index = e.index), 1 == e.items.length && "page" == e.items[0].type && (UI.toggleModalLock(!0), o.closeOnScroll = !1, o.closeOnVerticalDrag = !1);var n = Lightbox.gallery = new PhotoSwipe(t[0], PhotoSwipeUI_Default, i, o);n.listen("gettingData", function (e, t) {
        if (void 0 === t.html && void 0 === t.onloading && (t.w < 1 || t.h < 1)) {
          t.onloading = !0;var i = new Image();i.onload = function () {
            t.w = this.width, t.h = this.height, n.invalidateCurrItems(), n.updateSize(!0);
          }, i.src = t.src;
        }
      }), n.listen("destroy", function () {
        var e = Array.prototype.slice.call(n.container.getElementsByClassName("pswp__item"));e.forEach(function (e) {
          for (; e.lastChild;) e.removeChild(e.lastChild);
        }), UI.toggleModalLock(!1);
      });var d = this;n.listen("beforeChange", function () {
        var e;d.currentVideoId && (e = t.find("iframe[data-id=" + d.currentVideoId + "]"), e.length && (Lightbox.stopVideo(e[0]), d.currentVideoId = null));var i = n.currItem;e = $(i.html).find("iframe"), d.currentVideoId = e.length > 0 ? e.attr("data-id") : null;
      }), n.init(), t.find(".Lightbox-pageWrapper").on("click touchstart touchmove touchend mousedown mousemove mouseup wheel mousewheel DOMMouseScroll scroll", Lightbox.isolate);
    }
  }, deactivate: function () {
    Lightbox.gallery.close();
  }, isolate: function (e) {
    e.stopImmediatePropagation();
  } };
var MultiSelectDropdown = { KEY_CODE_TAB: 9, KEY_CODE_ENTER: 13, KEY_CODE_SPACE: 32, KEY_CODE_UP: 38, KEY_CODE_DOWN: 40, DOCUMENT_MARGIN: 20, SCROLLBAR_MARGIN: 10, SCROLL_THRESHOLD: 10, KEY_DATA: "touchData", getRootElement: function (e) {
    return $(e).closest(".MultiSelectDropdown");
  }, getToggleElement: function (e) {
    return e.children(".MultiSelectDropdown-toggle");
  }, getInputElement: function (e) {
    return e.children(".MultiSelectDropdown-input");
  }, getInputOptions: function (e, t) {
    return e.children("option" + (t ? ":selected" : ""));
  }, getListContainer: function (e) {
    return e.children(".MultiSelectDropdown-listContainer");
  }, getScrollable: function (e) {
    return e.find(".MultiSelectDropdown-scrollable");
  }, getListElement: function (e) {
    return e.find(".MultiSelectDropdown-list");
  }, getListOptions: function (e) {
    return e.children(".MultiSelectDropdown-option");
  }, getListSelectAll: function (e) {
    return e.children(".MultiSelectDropdown-selectAll");
  }, getListChildren: function (e) {
    return e.children(".MultiSelectDropdown-option, .MultiSelectDropdown-selectAll");
  }, init: function (e) {
    var t = e ? $(e).find(".MultiSelectDropdown") : $(".MultiSelectDropdown");t.each(function (e, t) {
      var l = $(t),
          o = MultiSelectDropdown.getToggleElement(l);o.on("touchstart", MultiSelectDropdown.handleStart), o.on("touchend", MultiSelectDropdown.handleEnd), o.click(MultiSelectDropdown.handleToggleClick);var n = MultiSelectDropdown.getInputElement(l);n.on("change", MultiSelectDropdown.render);var i = MultiSelectDropdown.getListElement(l),
          r = MultiSelectDropdown.getListOptions(i);r.click(MultiSelectDropdown.handleOptionClick);var d = MultiSelectDropdown.getListSelectAll(i);d.click(MultiSelectDropdown.handleSelectAllClick), l.on("keydown.selectDropdown", MultiSelectDropdown.handleKeyPress), l.on("shown.bs.dropdown", MultiSelectDropdown.render);
    });
  }, handleStart: function (e) {
    UI.mouse.update(e.originalEvent);var t = UI.mouse.snapshot(),
        l = MultiSelectDropdown.getRootElement(e.target);l.data(MultiSelectDropdown.KEY_DATA, { x: t.x, y: t.y, active: !1 }), l.on("touchmove", MultiSelectDropdown.handleMove);
  }, handleMove: function (e) {
    UI.mouse.update(e.originalEvent);var t = UI.mouse.snapshot(),
        l = MultiSelectDropdown.getRootElement(e.target),
        o = l.data(MultiSelectDropdown.KEY_DATA),
        n = t.x - o.x,
        i = t.y - o.y;(o.active || Math.abs(n) >= MultiSelectDropdown.SCROLL_THRESHOLD || Math.abs(i) >= MultiSelectDropdown.SCROLL_THRESHOLD) && (o.active = !0);
  }, handleEnd: function (e) {
    var t = MultiSelectDropdown.getRootElement(e.target);t.off("touchmove", MultiSelectDropdown.handleMove);var l = t.data(MultiSelectDropdown.KEY_DATA);l.active || (e.stopPropagation(), t.data("currentIndex", null), t.data("originalIndex", null));
  }, handleToggleClick: function (e) {
    if (UI.isRecentTouch()) return e.stopImmediatePropagation(), void e.preventDefault();var t = MultiSelectDropdown.getRootElement(e.target);t.data("currentIndex", null), t.data("originalIndex", null);
  }, handleOptionClick: function (e) {
    e.stopPropagation();var t = $(e.target).closest(".MultiSelectDropdown-option"),
        l = MultiSelectDropdown.getRootElement(e.target),
        o = MultiSelectDropdown.getInputElement(l),
        n = MultiSelectDropdown.getInputOptions(o),
        i = MultiSelectDropdown.getToggleElement(l),
        r = MultiSelectDropdown.getListElement(l),
        d = MultiSelectDropdown.getListOptions(r),
        a = d.index(t);if (l.data("currentIndex", a), !e.shiftKey) {
      l.data("originalIndex", a);var c = n.eq(a);c.prop("selected") ? c.prop("selected", !1) : c.prop("selected", !0);
    }i.focus(), o.change();
  }, handleSelectAllClick: function (e) {
    e.stopPropagation();var t = $(e.target),
        l = MultiSelectDropdown.getRootElement(e.target),
        o = MultiSelectDropdown.getInputElement(l),
        n = MultiSelectDropdown.getInputOptions(o),
        i = MultiSelectDropdown.getToggleElement(l),
        r = MultiSelectDropdown.getListElement(l),
        d = MultiSelectDropdown.getListChildren(r),
        a = d.index(t);if (l.data("currentIndex", a), !e.shiftKey) {
      l.data("originalIndex", l.data("currentIndex"));var c = MultiSelectDropdown.getInputOptions(o, !0);n.prop("selected", c.length < n.length);
    }i.focus(), o.change();
  }, handleKeyPress: function (e) {
    var t = MultiSelectDropdown.getRootElement(e.target),
        l = MultiSelectDropdown.getInputElement(t);if (t.hasClass("open")) {
      if (e.keyCode === MultiSelectDropdown.KEY_CODE_TAB && t.hasClass("open")) MultiSelectDropdown.getToggleElement(t).click();else {
        var o = MultiSelectDropdown.getListElement(t),
            n = MultiSelectDropdown.getListChildren(o),
            i = MultiSelectDropdown.getListSelectAll(o);if (!n.length) return;var r = t.data("currentIndex");if (e.keyCode === MultiSelectDropdown.KEY_CODE_UP || e.keyCode === MultiSelectDropdown.KEY_CODE_DOWN) {
          if (null === r) e.keyCode === MultiSelectDropdown.KEY_CODE_DOWN && (r = 0);else if (e.keyCode === MultiSelectDropdown.KEY_CODE_UP) {
            if (!(r > 0)) return MultiSelectDropdown.getToggleElement(t).click(), e.stopPropagation(), void e.preventDefault();r--;
          } else e.keyCode === MultiSelectDropdown.KEY_CODE_DOWN && r < n.length - 1 && r++;t.data("currentIndex", r), e.shiftKey || t.data("originalIndex", r);
        }var d = n.eq(r);d.focus(), n.removeClass("is-active"), d.addClass("is-active");var a = MultiSelectDropdown.getScrollable(t);if (Scrollable.scrollTo(a, d), e.keyCode === MultiSelectDropdown.KEY_CODE_ENTER || e.keyCode === MultiSelectDropdown.KEY_CODE_SPACE) {
          var c = t.data("currentIndex"),
              u = t.data("originalIndex");if (c < u) {
            var p = c;c = u, u = p;
          }var s = MultiSelectDropdown.getInputOptions(l);if (0 != i.length && c == n.index(i)) {
            var g = MultiSelectDropdown.getInputOptions(l, !0);s.prop("selected", g.length < s.length);
          } else {
            var D = s.slice(u, c + 1),
                S = D.filter(function () {
              return $(this).prop("selected");
            });D.prop("selected", S.length < D.length);
          }
        }e.stopPropagation(), e.preventDefault();
      }l.change();
    }
  }, setValue: function (e, t, l) {
    var o = MultiSelectDropdown.getRootElement(e),
        n = MultiSelectDropdown.getInputElement(o);n.val(t), l ? MultiSelectDropdown.render({ target: e }) : n.change();
  }, render: function (e) {
    var t = MultiSelectDropdown.getRootElement(e.target),
        l = MultiSelectDropdown.getInputElement(t),
        o = MultiSelectDropdown.getInputOptions(l),
        n = MultiSelectDropdown.getListContainer(t),
        i = MultiSelectDropdown.getListElement(t),
        r = MultiSelectDropdown.getListOptions(i),
        d = MultiSelectDropdown.getListSelectAll(i),
        a = MultiSelectDropdown.getListChildren(i),
        c = MultiSelectDropdown.getToggleElement(t),
        u = [];a.removeClass("is-active"), a.removeClass("is-selected");var p = l.val();p && (p.length == o.length ? (r.addClass("is-selected"), d.addClass("is-selected"), o.each(function (e) {
      u.push(r.eq(e).data("label"));
    })) : o.each(function (e, t) {
      if ($(t).prop("selected")) {
        var l = r.eq(e);l.addClass("is-selected"), u.push(l.data("label"));
      }
    }));var s = c.children("span.MultiSelectDropdown-label");0 == u.length ? c.data("default-text") ? s.text(c.data("default-text")) : s.text(" ") : null != t.data("select-all-label") && u.length == r.length ? s.text(t.data("select-all-label")) : s.text(u.join(", "));var g = t.data("currentIndex"),
        D = t.data("originalIndex");if (null != g) {
      if (g < D) {
        var S = g;g = D, D = S;
      }for (var M = D; M <= g; ++M) a.eq(M).addClass("is-active");
    }if (t.hasClass("open")) {
      i.height() < n.height() && n.height(i.height());var w = $("body").width(),
          h = i.width(),
          E = w - 2 * MultiSelectDropdown.DOCUMENT_MARGIN,
          f = i.find(".MultiSelectDropdown-optionText"),
          v = r.first().outerWidth() - r.first().width(),
          C = Math.max.apply(null, f.map(function () {
        return $(this).width();
      }).get()),
          m = C + v + MultiSelectDropdown.SCROLLBAR_MARGIN;m != h && (h = m, n.width(h)), (h > n.width() || E < h) && (h = Math.min(h, E), n.width(h));var I = n.offset().left - n.position().left,
          O = w - MultiSelectDropdown.DOCUMENT_MARGIN - (I + h);if (O < 0) {
        var _ = t.width() - h;I + _ >= MultiSelectDropdown.DOCUMENT_MARGIN && (O = _);
      }O = Math.max(O, MultiSelectDropdown.DOCUMENT_MARGIN - I), O = Math.min(O, 0), n.css({ left: O + "px" }), Scrollable.render(MultiSelectDropdown.getScrollable(t));
    }
  }, resize: function () {
    $(".MultiSelectDropdown.open").each(function (e, t) {
      MultiSelectDropdown.getToggleElement($(t)).click();
    });
  } };UI.register(MultiSelectDropdown);
var Navigation = { ANIMATION_DURATION: UI.DEFAULT_ANIMATION_DURATION, CONTAINER_PADDING: 40, SCROLL_ITEMS: 2, getRootElement: function (t) {
    return $(t).closest(".Navigation");
  }, getWrapperElement: function (t) {
    return t.find(".Navigation-wrapper");
  }, getContainerElement: function (t) {
    return t.find(".Navigation-container");
  }, init: function (t) {
    var i = t ? $(t).find(".Navigation") : $(".Navigation");i.each(function (t, i) {
      var e = $(i),
          a = Navigation.getContainerElement(e),
          n = { $root: e, $wrapper: Navigation.getWrapperElement(e), $container: a };UI.TouchScroll.bind(n), e.find(".Navigation-link").on("click", function (t) {
        UI.TouchScroll.isActive(e) && (t.stopImmediatePropagation(), t.preventDefault());
      }), e.find(".Navigation-scrollLeft").on("click", Navigation.scrollLeft), e.find(".Navigation-scrollRight").on("click", Navigation.scrollRight);
    });
  }, load: function (t) {
    Navigation.resize(), $(".Navigation", t).each(function (t, i) {
      var e = $(i),
          a = Navigation.getContainerElement(e),
          n = Navigation.getWrapperElement(e),
          o = a.find(".Navigation-link.is-selected");if (o.length > 0 && e.hasClass("is-constrained")) {
        var r = o[0].offsetParent ? o[0].offsetParent.offsetLeft : 0,
            l = a.width(),
            c = l - n.width(),
            s = 0,
            f = Math.min(Math.max(-c, -r), s);a.css("left", f - UI.TouchScroll.EXTRA_MARGIN + "px"), UI.TouchScroll.checkOverflows(e, f, -c, s);
      }
    });
  }, scrollLeft: function (t) {
    var i,
        e,
        a = Navigation.getRootElement(t.target),
        n = Navigation.getContainerElement(a),
        o = Navigation.getWrapperElement(a),
        r = n.position().left + UI.TouchScroll.EXTRA_MARGIN,
        l = n.find(".Navigation-item"),
        c = 0;for (e = l.length - 1; e > -1 && (i = l[e], i.offsetLeft <= Math.abs(r) && c++, !(c >= Navigation.SCROLL_ITEMS)); e--);if (i.offsetLeft < Math.abs(r)) {
      var s = n.width() - o.width(),
          f = 0,
          r = Math.min(-i.offsetLeft, f);UI.TouchScroll.checkOverflows(a, r, -s, f), r -= UI.TouchScroll.EXTRA_MARGIN, n.animate({ left: r }, { duration: Navigation.ANIMATION_DURATION, easing: "easeOutCubic" });
    }
  }, scrollRight: function (t) {
    var i,
        e,
        a = Navigation.getRootElement(t.target),
        n = Navigation.getContainerElement(a),
        o = Navigation.getWrapperElement(a),
        r = n.position().left + UI.TouchScroll.EXTRA_MARGIN,
        l = n.find(".Navigation-item"),
        c = 0;for (e = 0; e < l.length && (i = l[e], i.offsetLeft >= Math.abs(r) && c++, !(c >= Navigation.SCROLL_ITEMS)); e++);if (i.offsetLeft > Math.abs(r)) {
      var s = n.width() - o.width(),
          f = 0,
          r = Math.max(-i.offsetLeft, -s);UI.TouchScroll.checkOverflows(a, r, -s, f), r -= UI.TouchScroll.EXTRA_MARGIN, n.animate({ left: r }, { duration: Navigation.ANIMATION_DURATION, easing: "easeOutCubic" });
    }
  }, resize: function (t) {
    var i = $(t || document).find(".Navigation");i.each(function (t, i) {
      var e = $(i),
          a = Navigation.getContainerElement(e),
          n = Navigation.getWrapperElement(e),
          o = a.width(),
          r = n.width() - Navigation.CONTAINER_PADDING;if (o > r) {
        e.addClass("is-constrained"), o = a.width();var l = o - n.width(),
            c = 0,
            s = Math.min(Math.max(-l, a.position().left + UI.TouchScroll.EXTRA_MARGIN), c);a.css("left", s - UI.TouchScroll.EXTRA_MARGIN + "px"), UI.TouchScroll.checkOverflows(e, s, -l, c);
      } else e.hasClass("is-constrained") && a.css("left", ""), e.removeClass("is-constrained");
    });
  }, refresh: function (t) {
    Navigation.resize(t);
  }, changeSelectedItem: function (t, i) {
    var e = Navigation.getRootElement(t),
        a = e.find(".Navigation-link.is-selected");if (a.attr("data-name") !== i) {
      a.addClass("is-transitionOut");var n = e.find(".Navigation-link[data-name=" + i + "]");n.addClass("is-selected is-transitionIn");var o = e.find(".Navigation-selectDropdown");o.length && SelectDropdown.select(o, i, !0), setTimeout(function () {
        a.removeClass("is-selected is-transitionOut");
      }, 250);
    }
  } };UI.register(Navigation);
var Parallax = { afterLoad: function () {
    Parallax.sync();
  }, resize: function () {
    Parallax.sync();
  }, scroll: function () {
    Parallax.sync();
  }, sync: function () {
    var a = {};$(".Parallax").each(function (t, r) {
      var e = $(r),
          o = e.attr("data-group");o = o ? "" + o : null;var n;if (o && void 0 !== a[o]) n = a[o];else {
        var i = e.attr("data-viewport-target"),
            l = e.attr("data-anchor-target"),
            c = l ? $(l)[0].getBoundingClientRect() : r.getBoundingClientRect(),
            s = e.attr("data-viewport");s = s ? parseFloat(s) : 50;var v = e.attr("data-anchor");v = v ? parseFloat(v) : 50;var d,
            h = e.height() * v / 100;if (i) {
          var p = $(i);d = p[0].getBoundingClientRect().top + p.height() * s / 100;
        } else d = $(window).height() * s / 100;n = c.top + h - d, o && (a[o] = n);
      }var g = e.attr("data-distance");g = g ? parseFloat(g) : .5;var f = e.attr("data-direction") || "both",
          u = e.attr("data-opacity");u = u ? parseFloat(u) : 0;var x = e.attr("data-opacity-max");x = x ? parseFloat(x) : 1;var y = e.attr("data-opacity-min");y = y ? parseFloat(y) : 0;var b = {};if (n >= 0 && ("both" === f || "above" === f) || n < 0 && ("both" === f || "below" === f)) {
        var P = -g * n;if (b.transform = "translateY(" + P + "px)", u) {
          var m;m = u < 0 ? y - u * Math.abs(n) : x - u * Math.abs(n), m = Math.max(y, Math.min(m, x)), b.opacity = m;
        }
      } else b.transform = "translateY(0)", u && (b.opacity = x);var F = e.children(".Parallax-content");F.css(b);
    });
  } };UI.register(Parallax);
var Pagination = { getRootElement: function (n) {
    return $(n).closest(".Pagination");
  }, getInputElement: function (n) {
    return n.children("input.Pagination-input");
  }, getContainerElement: function (n) {
    return n.children(".Pagination-container");
  }, getHtmlForLink: function (n) {
    return '<a onclick="Pagination.update(event, ' + n + ')" class="Pagination-node Pagination-link">' + n + "</a>";
  }, init: function (n) {
    var t = n ? $(n).find(".Pagination") : $(".Pagination");t.each(function (n, t) {
      var a = Pagination.getRootElement(t),
          i = Pagination.getInputElement(a);i.change(Pagination.render), a.children(".Pagination-previous").click(Pagination.previous), a.children(".Pagination-next").click(Pagination.next);
    });
  }, render: function (n) {
    var t,
        a = Pagination.getRootElement(n.target),
        i = Pagination.getInputElement(a),
        e = Pagination.getContainerElement(a),
        o = parseInt(i.val()),
        g = parseInt(a.attr("data-pages")),
        r = parseInt(a.attr("data-range")),
        s = "",
        l = Math.min(g, o + r);for (t = Math.max(1, o - r); t < o; t++) s += Pagination.getHtmlForLink(t);for (s += '<div class="Pagination-node Pagination-current">' + o + "</div>", t = o + 1; t <= l; t++) s += Pagination.getHtmlForLink(t);e.html(s), a.find(".Pagination-previous").toggleClass("is-active", o > 1), a.find(".Pagination-next").toggleClass("is-active", o < g);
  }, updateAttributes: function (n, t) {
    if (t) {
      var a = Pagination.getRootElement(n);"undefined" != typeof t.pages && a.attr("data-pages", t.pages);
    }
  }, update: function (n, t) {
    var a = Pagination.getRootElement(n.target);if (!a.hasClass("is-disabled")) {
      var i = parseInt(a.attr("data-pages")),
          e = Pagination.getInputElement(a);t = Math.max(1, Math.min(t, i));var o = parseInt(e.val());t != o && e.val(t).change();
    }
  }, previous: function (n) {
    var t = Pagination.getRootElement(n.target);if (!t.hasClass("is-disabled")) {
      var a = Pagination.getInputElement(t),
          i = parseInt(a.val());i < 2 || Pagination.update(n, i - 1);
    }
  }, next: function (n) {
    var t = Pagination.getRootElement(n.target);if (!t.hasClass("is-disabled")) {
      var a = Pagination.getInputElement(t),
          i = parseInt(a.val()),
          e = parseInt(t.attr("data-pages"));i >= e || Pagination.update(n, i + 1);
    }
  } };UI.register(Pagination);
var Scrollable = { init: function (l) {
    var e = l ? $(l).find(".Scrollable") : $(".Scrollable");e.each(function (l, e) {
      var i = $(e),
          r = {};r.wheel = i.data("wheel"), i.tinyscrollbar(r);
    });
  }, refresh: function (l) {
    var e = l ? $(l).find(".Scrollable:visible") : $(".Scrollable:visible");e.each(function (l, e) {
      var i = $(e);Scrollable.render(i);
    });
  }, render: function (l) {
    l.data("plugin_tinyscrollbar").update("relative");
  }, scrollTo: function (l, e) {
    var i = l.data("plugin_tinyscrollbar"),
        r = e.position().top,
        n = r + e.height(),
        o = -1;r < i.contentPosition ? o = r : n > i.contentPosition + i.viewportSize && (o = n - i.viewportSize), o != -1 && i.update(o);
  } };UI.register(Scrollable);
var Slide = { DEFAULT_ANIMATION_DELAY: UI.DEFAULT_SLIDE_ANIMATION_DURATION, DEFAULT_TRANSITION_DELAY: 25, init: function (i) {
    var e = i ? $(i).find(".Slide") : $(".Slide");e.each(function (i, e) {
      var n = $(e),
          t = n.closest(".CarouselItem");t.length > 0 && (t.on(CarouselItem.EVENT_ANIMATE_IN, Slide.animateIn.bind(null, e)), t.on(CarouselItem.EVENT_ANIMATE_OUT, Slide.animateOut.bind(null, e)));
    });
  }, animateIn: function (i) {
    var e = $(i);e.addClass("is-transitionIn"), setTimeout(function () {
      e.addClass("is-active"), setTimeout(Slide.endAnimateIn.bind(null, i), Slide.DEFAULT_ANIMATION_DELAY);
    }, Slide.DEFAULT_TRANSITION_DELAY);
  }, animateOut: function (i) {
    var e = $(i);e.addClass("is-transitionOut"), setTimeout(function () {
      e.removeClass("is-active"), setTimeout(Slide.endAnimateOut.bind(null, i), Slide.DEFAULT_ANIMATION_DELAY);
    }, Slide.DEFAULT_TRANSITION_DELAY);
  }, endAnimateIn: function (i) {
    $(i).closest(".Slide").removeClass("is-transitionIn");
  }, endAnimateOut: function (i) {
    $(i).closest(".Slide").removeClass("is-transitionOut");
  } };UI.register(Slide);
var SelectDropdown = { KEY_CODE_TAB: 9, KEY_CODE_ENTER: 13, KEY_CODE_SPACE: 32, KEY_CODE_UP: 38, KEY_CODE_DOWN: 40, DOCUMENT_MARGIN: 20, SCROLLBAR_MARGIN: 10, SCROLL_THRESHOLD: 10, KEY_DATA: "touchData", getRootElement: function (e) {
    return $(e).closest(".SelectDropdown");
  }, getToggleElement: function (e) {
    return e.children(".SelectDropdown-toggle");
  }, getInputElement: function (e) {
    return e.children("select.SelectDropdown-input");
  }, getListContainer: function (e) {
    return e.children(".SelectDropdown-listContainer");
  }, getScrollable: function (e) {
    return e.find(".SelectDropdown-scrollable");
  }, getListElement: function (e) {
    return e.find(".SelectDropdown-list");
  }, getListOptions: function (e) {
    return e.children(".SelectDropdown-option");
  }, init: function (e) {
    var t = e ? $(e).find(".SelectDropdown") : $(".SelectDropdown");t.each(function (e, t) {
      var o = $(t),
          n = SelectDropdown.getToggleElement(o);o.on("touchstart", SelectDropdown.handleStart), n.on("touchstart", SelectDropdown.handleStart), n.on("touchend", SelectDropdown.handleEnd), n.click(SelectDropdown.handleToggleClick);var l = SelectDropdown.getListElement(o),
          r = SelectDropdown.getListOptions(l);r.click(SelectDropdown.handleOptionClick), o.on("keydown.selectDropdown", SelectDropdown.handleKeyPress), o.on("shown.bs.dropdown", SelectDropdown.render);
    });
  }, handleStart: function (e) {
    UI.mouse.update(e.originalEvent);var t = UI.mouse.snapshot(),
        o = SelectDropdown.getRootElement(e.target);o.data(SelectDropdown.KEY_DATA, { x: t.x, y: t.y, active: !1 }), o.on("touchmove", SelectDropdown.handleMove);
  }, handleMove: function (e) {
    UI.mouse.update(e.originalEvent);var t = UI.mouse.snapshot(),
        o = SelectDropdown.getRootElement(e.target),
        n = o.data(SelectDropdown.KEY_DATA),
        l = t.x - n.x,
        r = t.y - n.y;(n.active || Math.abs(l) >= SelectDropdown.SCROLL_THRESHOLD || Math.abs(r) >= SelectDropdown.SCROLL_THRESHOLD) && (n.active = !0);
  }, handleEnd: function (e) {
    var t = SelectDropdown.getRootElement(e.target);t.off("touchmove", SelectDropdown.handleMove);var o = t.data(SelectDropdown.KEY_DATA);if (!o.active) {
      e.stopPropagation(), t.data("currentIndex", null);var n = SelectDropdown.getListElement(t);n.children(".SelectDropdown-option").removeClass("is-active");
    }
  }, handleToggleClick: function (e) {
    if (UI.isRecentTouch()) return e.stopImmediatePropagation(), void e.preventDefault();var t = $(e.target);t.data("currentIndex", null);var o = SelectDropdown.getListElement(t);SelectDropdown.getListOptions(o).removeClass("is-active");
  }, handleOptionClick: function (e) {
    var t = SelectDropdown.getRootElement(e.target),
        o = $(e.target).closest(".SelectDropdown-option"),
        n = o.data("value");SelectDropdown.getInputElement(t).val(n).change();
  }, handleKeyPress: function (e) {
    var t = SelectDropdown.getRootElement(e.target),
        o = SelectDropdown.getInputElement(t);if (t.hasClass("open")) if (e.keyCode === SelectDropdown.KEY_CODE_TAB && t.hasClass("open")) SelectDropdown.getToggleElement(t).click();else {
      var n = SelectDropdown.getListOptions(SelectDropdown.getListElement(t));if (n.length < 1) return;var l = t.data("currentIndex");if (e.keyCode === SelectDropdown.KEY_CODE_UP || e.keyCode === SelectDropdown.KEY_CODE_DOWN) {
        if (null == l) e.keyCode === SelectDropdown.KEY_CODE_DOWN && (l = 0);else if (e.keyCode === SelectDropdown.KEY_CODE_UP) {
          if (!(l > 0)) return SelectDropdown.getToggleElement(t).click(), e.stopPropagation(), void e.preventDefault();l--;
        } else e.keyCode === SelectDropdown.KEY_CODE_DOWN && l < n.length - 1 && l++;t.data("currentIndex", l);
      }var r = n.eq(l);n.removeClass("is-active"), r.addClass("is-active");var a = SelectDropdown.getScrollable(t);if (a.length && Scrollable.scrollTo(a, r), e.keyCode === SelectDropdown.KEY_CODE_ENTER || e.keyCode === SelectDropdown.KEY_CODE_SPACE) {
        var c = t.data("currentIndex");o.val(n.eq(c).data("value")), o.change(), SelectDropdown.getToggleElement(t).click();
      }e.stopPropagation(), e.preventDefault();
    }
  }, addHandler: function (e, t) {
    var o = SelectDropdown.getRootElement(e),
        n = SelectDropdown.getInputElement(o);n.on("change", t);
  }, render: function (e) {
    var t = SelectDropdown.getRootElement(e.target),
        o = SelectDropdown.getListContainer(t),
        n = SelectDropdown.getListElement(t),
        l = SelectDropdown.getInputElement(t).val(),
        r = SelectDropdown.getListOptions(n);if (r.removeClass("is-active"), r.removeClass("is-selected"), r.each(function () {
      var e = $(this);e.data("value") == l && (SelectDropdown.getToggleElement(t).children("span.SelectDropdown-label").text(e.data("label")), e.addClass("is-selected"));
    }), null !== t.data("currentIndex") && r.eq(t.data("currentIndex")).addClass("is-active"), t.hasClass("open")) {
      n.height() < o.height() && o.height(n.height());var a = $("body").width(),
          c = n.width(),
          d = a - 2 * SelectDropdown.DOCUMENT_MARGIN,
          i = n.find(".SelectDropdown-optionText"),
          p = r.first().outerWidth() - r.first().width(),
          D = Math.max.apply(null, i.map(function () {
        return $(this).width();
      }).get()),
          s = D + p + SelectDropdown.SCROLLBAR_MARGIN;s != c && (c = s, o.width(c)), (c > o.width() || d < c) && (c = Math.min(c, d), o.width(c));var S = o.offset().left - o.position().left,
          g = a - SelectDropdown.DOCUMENT_MARGIN - (S + c);if (g < 0) {
        var w = t.width() - c;S + w >= SelectDropdown.DOCUMENT_MARGIN && (g = w);
      }g = Math.max(g, SelectDropdown.DOCUMENT_MARGIN - S), g = Math.min(g, 0), o.css({ left: g + "px" });var E = SelectDropdown.getScrollable(t);E.length && Scrollable.render(E);
    }
  }, select: function (e, t, o) {
    var n = SelectDropdown.getRootElement(e),
        l = SelectDropdown.getInputElement(n);l.val(t), o || l.change(), SelectDropdown.render({ target: e });
  }, resize: function () {
    $(".SelectDropdown.open").each(function (e, t) {
      SelectDropdown.getToggleElement($(t)).click();
    });
  } };UI.register(SelectDropdown);
var Spacer = { ELEMENT_HEIGHT: 1, refresh: function (e) {
    Spacer.resize(e);
  }, resize: function (e) {
    var t = $(e || document).find(".Spacer");t.each(function (e, t) {
      var r = $(t),
          a = r.attr("data-target");if (a) {
        var n = $(a),
            c = n.get(0).getBoundingClientRect(),
            i = t.getBoundingClientRect(),
            o = Math.max(0, c.bottom - (i.top + Spacer.ELEMENT_HEIGHT));r.css("height", o + "px");
      }
    });
  } };UI.register(Spacer);
var Slideshow = { DEFAULT_TRANSITION_DELAY: 2e3, DEFAULT_TRANSITION_SPEED: 3e3, getRootElement: function (e) {
    return $(e).closest(".Slideshow");
  }, getSlideElements: function (e) {
    return e.children(".Slideshow-slide");
  }, getActiveSlideElement: function (e) {
    var i = e.children(".Slideshow-slide.is-active");return i.length > 0 ? i : null;
  }, getDelay: function (e) {
    return parseInt(e.attr("data-delay") || Slideshow.DEFAULT_TRANSITION_DELAY);
  }, init: function (e) {
    var i = $(e || document).find(".Slideshow");i.each(function (e, i) {
      var t = $(i),
          s = Slideshow.getActiveSlideElement(t);s.length < 1 ? Slideshow.transition.call(t) : setTimeout(Slideshow.transition.bind(t), Slideshow.getDelay(t));
    });
  }, transition: function () {
    var e = Slideshow.getSlideElements(this),
        i = Slideshow.getActiveSlideElement(this) || $(e[0]),
        t = i.index(),
        s = t + 1;s = s < e.length ? s : 0;var n = $(e[s]);i.removeClass("is-active"), i.addClass("is-out"), n.addClass("is-animating is-active"), setTimeout(Slideshow.reset.bind(this, n, i), Slideshow.DEFAULT_TRANSITION_SPEED);
  }, reset: function (e, i) {
    i.removeClass("is-animating is-out is-active"), e.removeClass("is-animating"), setTimeout(Slideshow.transition.bind(this), Slideshow.getDelay(this));
  } };UI.register(Slideshow);
var SvgLoader = { init: function (e) {
    var r = e ? $(e).find(".SvgLoader") : $(".SvgLoader");r.each(function (e, r) {
      var a = $(r),
          t = a.attr("data-url");$.get(t, function (e) {
        a.html(new XMLSerializer().serializeToString(e.documentElement));
      });
    });
  } };UI.register(SvgLoader);
var TabControl = { ANIMATION_DURATION: 250, getRootElement: function (t) {
    return $(t).closest(".TabControl");
  }, getContainerElement: function (t) {
    return t.find(".TabControl-container");
  }, getIndicatorElement: function (t) {
    return t.children(".TabControl-indicator");
  }, getTabItems: function (t) {
    return t.find(".TabControlItem");
  }, getActiveTabItem: function (t) {
    return t.find(".TabControlItem.is-active");
  }, init: function (t) {
    $(t || document).find(".TabControl").each(function (t, n) {
      var e = $(n),
          o = TabControl.getTabItems(e);o.each(function (t, n) {
        var e = $(n);e.click(TabControl.clickHandler.bind(n));
      });var a = TabControl.getActiveTabItem(e);a.length ? TabControl.moveIndicator(e, a) : TabControl.clickHandler.call(o[0]);
    });
  }, clickHandler: function (t) {
    t.preventDefault();var n = $(this);if (!n.hasClass("is-disabled")) {
      var e = TabControl.getRootElement(n),
          o = TabControl.getActiveTabItem(e),
          a = e.attr("data-target");a && TabPanel && TabPanel.activate(a, n.index()), o.removeClass("is-active"), n.addClass("is-active"), TabControl.moveIndicator(e, n);
    }
  }, moveIndicator: function (t, n, e) {
    n = n || TabControl.getActiveTabItem(t);TabControl.getContainerElement(t);if (n.length) {
      var o = t[0].getBoundingClientRect(),
          a = n[0].getBoundingClientRect(),
          i = a.left - o.left,
          r = o.bottom - a.bottom,
          l = n.outerWidth(),
          c = TabControl.getIndicatorElement(t),
          b = { left: i + "px", bottom: r + "px", width: l + "px" };e ? c.css(b) : c.animate(b, TabControl.ANIMATION_DURATION, "easeOutCubic");
    }
  }, resize: function () {
    $(".TabControl").each(function (t, n) {
      var e = $(n);TabControl.moveIndicator(e, null, !0);
    });
  } };UI.register(TabControl);
var SyncHeight = { init: function (t) {
    var e = $(t || document).find(".SyncHeight");e.each(function (t, e) {
      UI.resizeHandlers.push(SyncHeight.sync.bind(null, e));
    });
  }, sync: function (t) {
    if (t) {
      var e = $(t),
          n = e.attr("data-selector"),
          i = e.attr("data-target"),
          a = e.attr("data-above"),
          c = e.attr("data-below"),
          r = n ? e.find(n) : e.children(),
          o = i ? e.find(i) : r;a && !UI.isAboveBreakpoint(UI.BREAKPOINTS[a.toUpperCase()]) || c && !UI.isBelowBreakpoint(UI.BREAKPOINTS[c.toUpperCase()]) ? UI.clearHeight(o) : UI.syncHeight(r, o);
    }
  }, load: function (t) {
    SyncHeight.refresh(t);
  }, refresh: function (t) {
    var e = $(t || document).find(".SyncHeight");e.each(function (t, e) {
      SyncHeight.sync(e);
    });
  } };UI.register(SyncHeight);
var Table = { init: function (i) {
    var e = $(".Table", i);e.each(function (i, e) {
      var a = $(e);a.find(".Table-item.is-mobileLink").click(Table.mobileLink);
    });
  }, filter: function (i, e) {
    var a = $(i),
        t = a.find(".Table-item");e ? t.each(function (i, a) {
      var t = $(a);t.toggleClass("hide", e != t.attr("data-filter"));
    }) : t.removeClass("hide");
  }, mobileLink: function (i) {
    if (UI.isBelowBreakpoint(UI.BREAKPOINTS.SM)) {
      var e = $(i.target).closest(".Table-item.is-mobileLink");window.location.href = e.attr("data-url");
    }
  } };UI.register(Table);
var TableFilter = { afterInit: function (e) {
    var t = $(e || document).find(".TableFilter");t.each(function (e, t) {
      SelectDropdown.addHandler(t, TableFilter.filter);
    });
  }, filter: function (e) {
    var t = $(e.target),
        a = t.closest(".TableFilter"),
        r = t.val();Table.filter(a.attr("data-target"), r);
  } };UI.register(TableFilter);
var TableHeader = { getRootElement: function (e) {
    var a = $(e);return a.hasClass("TableHeader") ? a : a.closest(".TableHeader");
  }, getInputElement: function (e) {
    return e.children("input.TableHeader-input");
  }, getColumn: function (e, a) {
    return e.children('div[data-name="' + a + '"]');
  }, sort: function (e, a) {
    var t = TableHeader.getInputElement(e),
        s = t.val();if (s) {
      var n = s.split(","),
          l = n[0].split(":");if (l[0] == a || null == a) l[1] = "asc" == l[1] ? "desc" : "asc", n[0] = l.join(":");else {
        var r, i;for (r = 1; r < n.length; r++) if (i = n[r], l = i.split(":"), l[0] == a) {
          n.splice(r, 1);break;
        }n.unshift([a, "asc"].join(":"));
      }s = n.join(",");
    } else s = a + ":asc";t.val(s).change();
  }, update: function (e) {
    var a = e.data ? e.data.suppress : e.suppress;if (!a) {
      var t = $(e.target),
          s = TableHeader.getRootElement(e.target);t.is("select") ? TableHeader.sort(s, t.val()) : t.hasClass("TableHeader-toggle") ? TableHeader.sort(s, null) : TableHeader.sort(s, t.attr("data-name"));
    }
  }, render: function (e) {
    var a = TableHeader.getRootElement(e.target),
        t = TableHeader.getInputElement(a);a.find(".TableHeader-item").removeClass("is-ascending is-descending");var s = t.val();if (s) {
      var n = s.split(","),
          l = n[0].split(":");a.find(".TableHeader-item[data-name='" + l[0] + "']").addClass("asc" == l[1] ? "is-ascending" : "is-descending"), a.find(".TableHeader-select select").val(l[0]).trigger({ type: "change", suppress: !0 }), a.find(".TableHeader-toggleOuter").toggleClass("is-ascending", "asc" == l[1]).toggleClass("is-descending", "asc" != l[1]);
    }
  } };
var TabPanel = { getRootElement: function (e) {
    return $(e).closest(".TabPanel");
  }, getContainerElement: function (e) {
    return e.find(".TabPanel-container");
  }, getTabItems: function (e) {
    return e.find(".TabPanelItem");
  }, getActiveTabItem: function (e) {
    return e.find(".TabPanelItem.is-active");
  }, init: function (e) {
    $(e || document).find(".TabPanel").each(function (e, t) {
      var n = $(t),
          a = TabPanel.getActiveTabItem(n);a.length < 1 && TabPanel.activate(n, 0);
    });
  }, activate: function (e, t) {
    var n = TabPanel.getRootElement(e);if (n.length < 1) return !1;var a = TabPanel.getTabItems(n);if (t < 0 || t >= a.length) return !1;var i = TabPanel.getActiveTabItem(n),
        r = $(a[t]);return i.removeClass("is-active"), r.addClass("is-active"), !0;
  } };UI.register(TabPanel);
var TextOverflow = { init: function (t) {
    t && TextOverflow.resize();
  }, afterLoad: function (t) {
    TextOverflow.resize();
  }, refresh: function (t, e) {
    if (!e) {
      var r = $(t || document).find(".TextOverflow");r.each(function (t, e) {
        TextOverflow.truncate(e);
      });
    }
  }, resize: function () {
    var t = $(".TextOverflow");t.each(function (t, e) {
      TextOverflow.truncate(e);
    });
  }, truncate: function (t) {
    if (t) {
      for (var e = $(t), r = e; r.children().length;) r = r.children().first();var a = $(e.parent()),
          i = a.children();e.attr("data-original-text") ? r.text(e.attr("data-original-text")) : e.attr("data-original-text", r.text());for (var n = e.attr("data-original-text").split(/\s+/).length, o = 0, f = 0; f < i.length; f++) {
        var l = $(i[f]);l.is(e) || (o += l.outerHeight(!0));
      }for (var c = Math.max(0, a.height() - o); n > 0 && c > 0 && e.outerHeight(!0) > c;) n--, r.text(function (t, e) {
        return e.replace(/\W*\s(\S)*$/, "...");
      });
    }
  } };UI.register(TextOverflow);
var TabSelect = { ANIMATION_DURATION: 250, getRootElement: function (e) {
    return $(e).closest(".TabSelect");
  }, getSelectElement: function (e) {
    return e.find(".TabSelect-selectDropdown");
  }, getWrapperElement: function (e) {
    return e.find(".TabSelect-tabItemWrapper");
  }, getContainerElement: function (e) {
    return e.find(".TabSelect-tabItemContainer");
  }, getIndicatorElement: function (e) {
    return e.find(".TabSelect-tabIndicator");
  }, getTabItems: function (e) {
    return e.find(".TabSelect-tabItem");
  }, getTabItemByValue: function (e, t) {
    return e.find(".TabSelect-tabItem[data-value=" + t + "]");
  }, getActiveTabItem: function (e) {
    return e.find(".TabSelect-tabItem.is-active");
  }, init: function (e) {
    $(e || document).find(".TabSelect").each(function (e, t) {
      var a = $(t),
          n = TabSelect.getSelectElement(a);SelectDropdown.addHandler(n, TabSelect.selectChangeHandler);var c = TabSelect.getTabItems(a);c.each(function (e, t) {
        var a = $(t);a.click(TabSelect.clickHandler.bind(t));
      });var l = TabSelect.getActiveTabItem(a);l.length ? TabSelect.moveIndicator(a, l) : TabSelect.clickHandler.call(c[0]);
    });
  }, selectChangeHandler: function (e) {
    var t = $(e.target).val(),
        a = TabSelect.getRootElement(e.target),
        n = TabSelect.getTabItemByValue(a, t);if (n.length && !n.hasClass("is-active")) {
      var c = TabSelect.getActiveTabItem(a);c.removeClass("is-active"), n.addClass("is-active"), TabSelect.moveIndicator(a, n);
    }
  }, clickHandler: function (e) {
    e.preventDefault();var t = $(this);if (!t.hasClass("is-disabled")) {
      var a = TabSelect.getRootElement(t),
          n = TabSelect.getActiveTabItem(a);n.removeClass("is-active"), t.addClass("is-active");var c = TabSelect.getSelectElement(a);SelectDropdown.select(c, t.attr("data-value")), TabSelect.moveIndicator(a, t);
    }
  }, addChangeHandler: function (e, t) {
    var a = TabSelect.getRootElement(e),
        n = TabSelect.getSelectElement(a);SelectDropdown.addHandler(n, t);
  }, moveIndicator: function (e, t, a) {
    t = t || TabSelect.getActiveTabItem(e);TabSelect.getContainerElement(e);if (t.length) {
      var n = e[0].getBoundingClientRect(),
          c = t[0].getBoundingClientRect(),
          l = c.left - n.left,
          i = n.bottom - c.bottom,
          r = t.outerWidth(),
          o = TabSelect.getIndicatorElement(e),
          b = { left: l + "px", bottom: i + "px", width: r + "px" };a ? o.css(b) : o.animate(b, TabSelect.ANIMATION_DURATION, "easeOutCubic", function () {
        TabSelect.moveIndicator(e, t, !0);
      });
    }
  }, resize: function () {
    $(".TabSelect").each(function (e, t) {
      var a = $(t),
          n = TabSelect.getWrapperElement(a),
          c = a.width() >= n.width();a.toggleClass("is-expanded", c), c && TabSelect.moveIndicator(a, null, !0);
    });
  }, load: function () {
    TabSelect.resize();
  } };UI.register(TabSelect);
var TileGroup = { init: function (i) {
    var e = $(i || document).find(".TileGroup");e.each(function (i, e) {
      UI.resizeHandlers.push(TileGroup.sync.bind(null, e));
    });
  }, sync: function (i) {
    if (i) {
      var e = $(i),
          n = e.find(".Tile"),
          r = e.find(".Tile-content");UI.isAboveBreakpoint(UI.BREAKPOINTS.XS) ? (UI.clearHeight(n), UI.syncHeight(r)) : (UI.clearHeight(r), UI.syncHeight(r, n));
    }
  }, refresh: function (i) {
    var e = $(i || document).find(".TileGroup");e.each(function (i, e) {
      TileGroup.sync(e);
    });
  } };UI.register(TileGroup);
var Tile = { resize: function (e) {
    var t = $(e || document).find(".Tile");t.each(function (e, t) {
      var i = $(t).outerWidth(),
          r = Math.floor((i + parseInt(t.getAttribute("data-offset"))) * parseFloat(t.getAttribute("data-ratio")));$(t).height(r);
    });
  }, refresh: function (e) {
    Tile.resize(e);
  } };UI.register(Tile);
var Tooltip = { getRootElement: function (o) {
    return $(o).closest(".Tooltip");
  }, getToggleElement: function (o) {
    return o.find(".Tooltip-toggle");
  }, getOverlayElement: function (o) {
    return o.find(".Tooltip-overlay");
  }, getCloseElement: function (o) {
    return o.find(".Tooltip-close");
  }, init: function () {
    $(".Tooltip").each(function (o, e) {
      var t = Tooltip.getRootElement(e),
          l = Tooltip.getToggleElement(t);l.click(Tooltip.handleToggle);var n = Tooltip.getCloseElement(t);n.click(Tooltip.handleClose);
    }), $(document).on("click.Tooltip", Tooltip.handleCloseAll);
  }, handleToggle: function (o) {
    var e = Tooltip.getRootElement(o.target),
        t = !e.hasClass("is-open");Tooltip.handleCloseAll(o), t && (e.addClass("is-open"), Tooltip.render(o.target)), o.stopPropagation();
  }, handleClose: function (o) {
    var e = Tooltip.getRootElement(o.target);e.removeClass("is-open"), o.stopPropagation();
  }, handleCloseAll: function (o) {
    $(".Tooltip").removeClass("is-open");
  }, render: function (o) {
    var e = Tooltip.getRootElement(o),
        t = Tooltip.getOverlayElement(e),
        l = t.get(0).getBoundingClientRect(),
        n = $(window).width() - l.right;n < 0 && t.css({ left: t.get(0).offsetLeft + n + "px" }), l.left < 0 && t.css({ left: t.get(0).offsetLeft - l.left + "px" });
  } };UI.register(Tooltip);
var VideoPane = { getVideoElements: function () {
    return $(document).find(".VideoPane-video");
  }, init: function () {
    VideoPane.toggleVideoPlay();
  }, resize: function () {
    VideoPane.toggleVideoPlay();
  }, documentBlur: function () {
    VideoPane.toggleVideoPlay();
  }, toggleVideoPlay: function () {
    var e = document.hidden,
        n = UI.isBelowBreakpoint(UI.BREAKPOINTS.SM);VideoPane.getVideoElements().each(function (o, i) {
      e ? i.pause() : n ? i.pause() : e || n || i.play();
    });
  } };UI.register(VideoPane);

//# sourceMappingURL=site.js.map
(function (f) {
	if (typeof exports === "object" && typeof module !== "undefined") {
		module.exports = f();
	} else if (typeof define === "function" && define.amd) {
		define([], f);
	} else {
		var g;if (typeof window !== "undefined") {
			g = window;
		} else if (typeof global !== "undefined") {
			g = global;
		} else if (typeof self !== "undefined") {
			g = self;
		} else {
			g = this;
		}g.navbar = f();
	}
})(function () {
	var define, module, exports;return function e(t, n, r) {
		function s(o, u) {
			if (!n[o]) {
				if (!t[o]) {
					var a = typeof require == "function" && require;if (!u && a) return a(o, !0);if (i) return i(o, !0);var f = new Error("Cannot find module '" + o + "'");throw f.code = "MODULE_NOT_FOUND", f;
				}var l = n[o] = { exports: {} };t[o][0].call(l.exports, function (e) {
					var n = t[o][1][e];return s(n ? n : e);
				}, l, l.exports, e, t, n, r);
			}return n[o].exports;
		}var i = typeof require == "function" && require;for (var o = 0; o < r.length; o++) s(r[o]);return s;
	}({ 1: [function (require, module, exports) {
			/*
    * classList.js: Cross-browser full element.classList implementation.
    * 1.1.20160811
    *
    * By Eli Grey, http://eligrey.com
    * License: Dedicated to the public domain.
    *   See https://github.com/eligrey/classList.js/blob/master/LICENSE.md
    */
			/*! @source http://purl.eligrey.com/github/classList.js/blob/master/classList.js */
			(function (win) {
				"use strict";

				if (!("document" in win)) return;
				// Full polyfill for browsers with no classList support
				// Including IE < Edge missing SVGElement.classList
				if (!("classList" in document.createElement("_")) || document.createElementNS && !("classList" in document.createElementNS("http://www.w3.org/2000/svg", "svg").appendChild(document.createElement("g")))) {
					if (!('Element' in win)) return;
					var classListProp = "classList",
					    protoProp = "prototype",
					    elemCtrProto = win.Element[protoProp],
					    objCtr = Object,
					    strTrim = String[protoProp].trim || function () {
						return this.replace(/^\s+|\s+$/g, "");
					},
					    arrIndexOf = Array[protoProp].indexOf || function (item) {
						var i = 0,
						    len = this.length;
						for (; i < len; i++) {
							if (i in this && this[i] === item) {
								return i;
							}
						}
						return -1;
					}
					// Vendors: please allow content code to instantiate DOMExceptions
					,
					    DOMEx = function (type, message) {
						this.name = type;
						this.code = DOMException[type];
						this.message = message;
					},
					    checkTokenAndGetIndex = function (classList, token) {
						if (token === "") {
							throw new DOMEx("SYNTAX_ERR", "An invalid or illegal string was specified");
						}
						if (/\s/.test(token)) {
							throw new DOMEx("INVALID_CHARACTER_ERR", "String contains an invalid character");
						}
						return arrIndexOf.call(classList, token);
					},
					    ClassList = function (elem) {
						var trimmedClasses = strTrim.call(elem.getAttribute("class") || ""),
						    classes = trimmedClasses ? trimmedClasses.split(/\s+/) : [],
						    i = 0,
						    len = classes.length;
						for (; i < len; i++) {
							this.push(classes[i]);
						}
						this._updateClassName = function () {
							elem.setAttribute("class", this.toString());
						};
					},
					    classListProto = ClassList[protoProp] = [],
					    classListGetter = function () {
						return new ClassList(this);
					};
					// Most DOMException implementations don't allow calling DOMException's toString()
					// on non-DOMExceptions. Error's toString() is sufficient here.
					DOMEx[protoProp] = Error[protoProp];
					classListProto.item = function (i) {
						return this[i] || null;
					};
					classListProto.contains = function (token) {
						token += "";
						return checkTokenAndGetIndex(this, token) !== -1;
					};
					classListProto.add = function () {
						var tokens = arguments,
						    i = 0,
						    l = tokens.length,
						    token,
						    updated = false;
						do {
							token = tokens[i] + "";
							if (checkTokenAndGetIndex(this, token) === -1) {
								this.push(token);
								updated = true;
							}
						} while (++i < l);
						if (updated) {
							this._updateClassName();
						}
					};
					classListProto.remove = function () {
						var tokens = arguments,
						    i = 0,
						    l = tokens.length,
						    token,
						    updated = false,
						    index;
						do {
							token = tokens[i] + "";
							index = checkTokenAndGetIndex(this, token);
							while (index !== -1) {
								this.splice(index, 1);
								updated = true;
								index = checkTokenAndGetIndex(this, token);
							}
						} while (++i < l);
						if (updated) {
							this._updateClassName();
						}
					};
					classListProto.toggle = function (token, force) {
						token += "";
						var result = this.contains(token),
						    method = result ? force !== true && "remove" : force !== false && "add";
						if (method) {
							this[method](token);
						}
						if (force === true || force === false) {
							return force;
						} else {
							return !result;
						}
					};
					classListProto.toString = function () {
						return this.join(" ");
					};
					if (objCtr.defineProperty) {
						var classListPropDesc = {
							get: classListGetter,
							enumerable: true,
							configurable: true
						};
						try {
							objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
						} catch (ex) {
							// IE 8 doesn't support enumerable:true
							if (ex.number === -0x7FF5EC54) {
								classListPropDesc.enumerable = false;
								objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
							}
						}
					} else if (objCtr[protoProp].__defineGetter__) {
						elemCtrProto.__defineGetter__(classListProp, classListGetter);
					}
				} else {
					// There is full or partial native classList support, so just check if we need
					// to normalize the add/remove and toggle APIs.
					var testElement = document.createElement("_");
					testElement.classList.add("c1", "c2");
					// Polyfill for IE 10/11 and Firefox <26, where classList.add and
					// classList.remove exist but support only one argument at a time.
					if (!testElement.classList.contains("c2")) {
						var createMethod = function (method) {
							var original = DOMTokenList.prototype[method];
							DOMTokenList.prototype[method] = function (token) {
								var i,
								    len = arguments.length;
								for (i = 0; i < len; i++) {
									token = arguments[i];
									original.call(this, token);
								}
							};
						};
						createMethod('add');
						createMethod('remove');
					}
					testElement.classList.toggle("c3", false);
					// Polyfill for IE 10 and Firefox <24, where classList.toggle does not
					// support the second argument.
					if (testElement.classList.contains("c3")) {
						var _toggle = DOMTokenList.prototype.toggle;
						DOMTokenList.prototype.toggle = function (token, force) {
							if (1 in arguments && !this.contains(token) === !force) {
								return force;
							} else {
								return _toggle.call(this, token);
							}
						};
					}
					testElement = null;
				}
			})(typeof window !== "undefined" ? window : {});

			// requestAnimationFrame polyfill by Erik M�ller. fixes from Paul Irish and Tino Zijdel
			// MIT license
			(function () {
				var lastTime = 0;
				var vendors = ['ms', 'moz', 'webkit', 'o'];
				for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
					window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
					window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
				}
				if (!window.requestAnimationFrame) {
					window.requestAnimationFrame = function (callback, element) {
						var currTime = new Date().getTime();

						function call() {
							callback(currTime + timeToCall);
						}

						var timeToCall = Math.max(0, 16 - (currTime - lastTime));
						lastTime = currTime + timeToCall;
						return window.setTimeout(call, timeToCall);
					};
				}
				if (!window.cancelAnimationFrame) {
					window.cancelAnimationFrame = function (id) {
						clearTimeout(id);
					};
				}
			})();
		}, {}], 2: [function (require, module, exports) {
			var Navbar = {
				TICK_MULTIPLIER: 1 / Math.cos(Math.PI / 4), // Width multiplier for CSS rotated "tick mark" element = 1 / cos(45deg)
				DEFAULT_ANIMATION_DURATION: 200, // 200ms, duration of most CSS animations for sync purposes
				DEFAULT_POPUP_DELAY: 1000, // 1s, delay before we check for promotions
				MAX_PROMOTION_LENGTH: 100, // 100 characters, max length of promotion popup body text

				MAX_NUM_GAMES_PER_ROW: 8, // max number of games per row in games dropdown, used for size calculations
				MARGIN_BETWEEN_GAMES: 20, // 20 pixels, amount of spacing between each game poster

				KEY_PROMOTIONS_READ: 'NavbarPromotionsRead', // Local storage key for read promotion IDs
				KEY_COOKIES_AGREED: 'CookiesAgreed', // Local storage key indicating that EU user has acknowledged cookies

				DATA_PROMOTION_ID: 'data-promotion-id', // Attribute key for promotion popup ID

				EXTERNAL_EVENTS: {
					CLOSE_ALL_MENUS: 'navbarCloseAllMenus', // Event that consuming apps can dispatch to close Navbar modals
					UPDATE_LOGIN_URL: 'updateLoginUrl' // Event that consuming apps can dispatch to update the Login endpoint e.g /login?redirect=http://targetUrl
				},
				MODE_SIMPLE: 'simple',
				MODE_COMPACT: 'compact',
				MODE_DEFAULT: 'default',
				WINDOW_LOAD_EVENT: 'load',

				DURATION_LOAD_DELAY: 500, // Duration to wait on the onLoad event

				viewportWidth: 0,
				viewportWidthFooter: 0,
				loadTimeoutId: null,
				lastUpdateTimestamp: 0,
				lastFooterUpdateTimestamp: 0,

				getCurrentMode: function () {
					var root = document.querySelector('.Navbar');

					if (!root) {
						return 'default';
					}

					if (root.classList.contains('is-compact')) {
						return Navbar.MODE_COMPACT;
					} else if (root.classList.contains('is-simple')) {
						return Navbar.MODE_SIMPLE;
					} else {
						return Navbar.MODE_DEFAULT;
					}
				},

				calcViewportWidth: function () {
					return Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
				},

				/**
     * Initialize the specified Navbar instance
     */
				init: function (root) {
					if (root.classList.contains('is-disabled')) return;

					// Close all modals when a click is registered on the transparent overlay behind the navbar
					Navbar.forEach(root.querySelectorAll('.Navbar-overlay'), function (overlay) {
						overlay.addEventListener('click', Navbar.closeModals.bind(root));
					});

					// Close all modals on window resize
					window.addEventListener('resize', Navbar.resize.bind(root));

					// Setup listeners for all External events
					Navbar.setupExternalEventListeners(root);

					// Add close handler for all modal panels
					Navbar.forEach(root.querySelectorAll('.Navbar-modalToggle'), function (toggle) {
						toggle.addEventListener('click', Navbar.toggleModal.bind({
							root: root,
							toggle: toggle
						}));
					});

					// Add event handlers for mobile slideout menus
					Navbar.forEach(root.querySelectorAll('.Navbar-modal'), function (modal) {
						if (modal.classList.contains('is-animated')) {
							modal.addEventListener('animationend', Navbar.setModalDisplayStateAfterAnimation.bind(modal));
							modal.addEventListener('transitionend', Navbar.setModalDisplayStateAfterAnimation.bind(modal));
						}
						Navbar.forEach(modal.querySelectorAll('.Navbar-modalClose, .Navbar-modalCloseGutter'), function (closer) {
							closer.addEventListener('click', Navbar.toggleModal.bind({
								root: root,
								target: modal
							}));
						});
					});

					// Add expandable toggles for mobile menu options
					Navbar.forEach(root.querySelectorAll('.Navbar-expandable'), function (expandable) {
						expandable.querySelector('.Navbar-expandableToggle').addEventListener('click', Navbar.toggleExpandable.bind(root, expandable));
					});

					// If in AJAX mode, get auth data from local webapp endpoint
					if (root.hasAttribute('data-ajax')) {
						Navbar.authenticate(root);
					}

					// Check support ticket count immediately if we're already authenticated via webapp
					if (root.classList.contains('is-authenticated')) {
						if (root.getAttribute('data-notification-count')) {
							Navbar.setSupportNotificationCount.call(Navbar, root, { total: parseInt(root.getAttribute('data-notification-count')) });
						} else {
							Navbar.checkSupportNotifications(root);
						}
					}

					// Highlight "current site" top nav element if it exists
					var currentSite = root.getAttribute('data-current-site');
					if (currentSite) {
						var current = root.querySelector('.Navbar-desktop .Navbar-item[data-name="' + currentSite + '"]');
						if (current) {
							current.classList.add('is-current');
						}
					}

					// iOS scroll fix
					var userAgent = navigator.userAgent.toLowerCase();
					var isIOS = userAgent.indexOf('iphone') >= 0 || userAgent.indexOf('ipad') >= 0;
					if (isIOS) {
						root.addEventListener('touchmove', Navbar.touchMoveHandler);
						root.addEventListener('touchend', Navbar.touchEndHandler);
						Navbar.forEach(root.querySelectorAll('.Navbar-accountModal .Navbar-modalContent, .Navbar-siteMenu .Navbar-modalContent'), function (content) {
							Navbar.forEach(content.querySelectorAll('a, .Navbar-expandableToggle'), function (clickable) {
								clickable.addEventListener('click', Navbar.touchClickHandler);
							});
						});
					}
				},

				initFooter: function (footer) {
					// Conditional on selector being enabled
					if (footer.querySelector('.NavbarFooter-selector')) {
						// Click handler for toggling locale selector
						var selectorToggle = footer.querySelector('.NavbarFooter-selectorToggle');
						if (selectorToggle) {
							selectorToggle.addEventListener('click', Navbar.toggleLocaleSelector.bind(footer));
						}

						// Click handler for locale selector close anchor (mobile)
						var selectorCloser = footer.querySelector('.NavbarFooter-selectorCloserAnchor');
						if (selectorCloser) {
							selectorCloser.addEventListener('click', Navbar.closeLocaleSelector.bind(footer));
						}

						// Close locale selector if overlay gets clicked
						var selectorOverlay = footer.querySelector('.NavbarFooter-overlay');
						if (selectorOverlay) {
							selectorOverlay.addEventListener('click', Navbar.closeLocaleSelector.bind(footer));
						}

						// Close locale selector on window resize
						window.addEventListener('resize', Navbar.resizeFooter.bind(footer));

						// If in hybrid or region-limited mode, add event handler for region switching
						if (footer.classList.contains('is-region-limited') || footer.classList.contains('is-region-hybrid')) {
							Navbar.forEach(footer.querySelectorAll('.NavbarFooter-selectorRegion:not(.is-external)'), function (link) {
								link.addEventListener('click', Navbar.changeFooterRegionLimit.bind(footer, link));
							});
						}

						// If in AJAX mode, get legal data from local webapp endpoint
						if (footer.hasAttribute('data-ajax-mode')) {
							Navbar.getLegal(footer);
						}
					}
				},

				updateNavbar: function (root, timestamp) {
					if (timestamp > Navbar.lastUpdateTimestamp) {
						Navbar.lastUpdateTimestamp = timestamp;
						var width = Navbar.calcViewportWidth();
						if (width === Navbar.viewportWidth) {
							return;
						}
						Navbar.viewportWidth = width;
						if (root && root.classList.contains('is-focused')) {
							Navbar.closeModals.call(root);
						}
						Navbar.testForOverlappingElementsAndSwitchToCollapsed();
					}
				},

				resize: function () {
					var _this = this;
					requestAnimationFrame(function (timestamp) {
						Navbar.updateNavbar(_this, timestamp);
					});
				},
				setupExternalEventListeners: function (root) {
					for (var eventKey in Navbar.EXTERNAL_EVENTS) {
						window.addEventListener(Navbar.EXTERNAL_EVENTS[eventKey], Navbar.handleExternalEvent.bind(root));
					}
				},
				handleExternalEvent: function (event) {
					switch (event.type) {
						case Navbar.EXTERNAL_EVENTS.CLOSE_ALL_MENUS:
							Navbar.closeModals.call(this);
							break;
						case Navbar.EXTERNAL_EVENTS.UPDATE_LOGIN_URL:
							Navbar.updateLoginUrl.call(this, event);
							break;
					}
				},
				testForOverlappingElementsAndSwitchToCollapsed: function () {
					var navbarItems = document.querySelector('.Navbar-desktop .Navbar-items');

					// Early bailout if the Mobile header is displaying.
					if (!navbarItems || navbarItems.offsetHeight == 0) {
						return;
					}

					var collapsedItems = document.querySelector('.Navbar-collapsedItems');
					if (collapsedItems) {
						if (Navbar.useCollapsedDesktop(navbarItems)) {
							navbarItems.classList.add('is-visible');
							collapsedItems.classList.remove('is-hidden');
						} else {
							navbarItems.classList.remove('is-visible');
							collapsedItems.classList.add('is-hidden');
						}
					}
				},
				useCollapsedDesktop: function (navbarItemsDiv) {
					var profileItemsRect = document.querySelector('.Navbar-desktop .Navbar-profileItems').getBoundingClientRect();
					var navbarItemsRect = navbarItemsDiv.getBoundingClientRect();
					var viewportWidth = Navbar.calcViewportWidth();
					var widthOfNavItems = navbarItemsRect.right;
					var widthOfAccountMenu = viewportWidth - profileItemsRect.left;
					var totalWidth = widthOfNavItems + widthOfAccountMenu;

					var isOverlapping = totalWidth >= viewportWidth;
					return isOverlapping;
				},

				/**
     * Root tag click handler
     */
				// Handlers for iOS scroll fix
				touchMoving: false,
				touchMoveHandler: function () {
					Navbar.touchMoving = true;
				},
				touchEndHandler: function () {
					Navbar.touchMoving = false;
				},
				touchClickHandler: function (event) {
					if (Navbar.touchMoving) {
						event.stopPropagation();
						event.preventDefault();
						return false;
					}
				},

				/**
     * Toggle a modal section (dropdowns, slide-out menus, etc)
     */
				toggleModal: function (event) {
					var toggle = this.toggle;
					var target = toggle ? toggle.getAttribute('data-target') : null;
					// The trigger is for a specific site mode (compact, etc); need to evaluate Navbar mode
					var evalSiteMode = toggle ? toggle.getAttribute('data-site-mode') : null;
					var navbarMode = Navbar.getCurrentMode();
					var isActive = false;
					Navbar.forEach(this.root.querySelectorAll('.Navbar-modal'), function (modal) {
						var toggle = this.toggle;
						var isCorrectMode = !evalSiteMode || modal.getAttribute('data-' + navbarMode + '-mode');

						if ((modal === this.target || modal.classList.contains(target)) && isCorrectMode) {
							// toggle targeted modal
							if (Navbar.isOpen(modal)) {
								Navbar.close(modal);
								if (modal.classList.contains('is-scroll-blocking')) {
									Navbar.unblockScrolling();
								}
								if (toggle) toggle.classList.remove('is-active');
							} else {
								Navbar.open(modal);
								if (modal.classList.contains('is-scroll-blocking')) {
									Navbar.blockScrolling();
								}

								if (toggle) toggle.classList.add('is-active');
								// sync tick mark
								var tick = modal.querySelector('.Navbar-tick');
								if (tick) {
									tick.style.left = '';
									var anchor = toggle.querySelector('.Navbar-dropdownIcon');
									if (!anchor || anchor.offsetLeft === 0) {
										anchor = toggle.querySelector('.Navbar-label');
									}
									if (!anchor || anchor.offsetLeft === 0) {
										anchor = toggle;
									}
									// align tick mark with dropdown arrow (or label if arrow isn't present)
									var diff = Navbar.setTickOffset(anchor, tick);

									// adjust opacity to match gradient if unconstrained
									if (!modal.classList.contains('is-constrained')) {
										var midpoint = modal.offsetWidth / 2;
										var adj = diff > midpoint ? diff - midpoint : midpoint - diff;
										var tan = modal.offsetHeight / midpoint;
										var angle = Math.atan(tan);
										var max = midpoint / Math.cos(angle);
										tick.querySelector('.Navbar-tickInner').style.opacity = adj / max;
									}
								}
								isActive = true;
							}
						} else {
							// close all other modals
							Navbar.close(modal);

							Navbar.forEach(this.root.querySelectorAll('.Navbar-modalToggle[data-name="' + modal.getAttribute('data-toggle') + '"]'), function (toggle) {
								toggle.classList.remove('is-active');
							});
						}
					}.bind(this));

					// Fade out other toggles
					Navbar.forEach(this.root.querySelectorAll('.Navbar-item'), function (modalToggle) {
						if (isActive) {
							if (modalToggle.getAttribute('data-target') === target) {
								modalToggle.classList.remove('is-faded');
							} else {
								modalToggle.classList.add('is-faded');
							}
						} else {
							modalToggle.classList.remove('is-faded');
						}
					}.bind(this));

					// Set focus on the root navbar tag to promote its layer
					this.root.classList.toggle('is-focused', isActive);

					// Close all expandables
					Navbar.toggleExpandable.call(this.root);

					event.stopPropagation();
					event.preventDefault();
					return false;
				},

				/**
     * Close all Navbar modals (dropdowns, slide-out menus, etc)
     */
				closeModals: function () {
					Navbar.forEach((this || document).querySelectorAll('.Navbar .Navbar-item'), function (modalToggle) {
						modalToggle.classList.remove('is-active');
						modalToggle.classList.remove('is-faded');
					});

					Navbar.forEach((this || document).querySelectorAll('.Navbar .Navbar-modal.is-open'), function (modal) {
						Navbar.close(modal);
					});

					if (this && this.classList) {
						this.classList.remove('is-focused');
					} else {
						Navbar.forEach(document.querySelectorAll('.Navbar'), function (navbar) {
							navbar.classList.remove('is-focused');
						});
					}

					// Close all expandables
					if (this) Navbar.toggleExpandable.call(this);

					Navbar.unblockScrolling();
				},

				/**
     * Changes the login 'a href' to the parameter specified in CustomeEvent.detail
     * Useful when page is switching and we want to redirect the user to the current page
     */
				updateLoginUrl: function (event) {
					Navbar.forEach((this || document).querySelectorAll('div.Navbar-accountDropdownLoggedOut > div > a'), function (anchor) {
						anchor.href = event.detail;
					});
				},

				isOpen: function (element) {
					return element.classList.contains('is-open');
				},
				open: function (element) {
					element.classList.add('is-open');
				},
				close: function (element) {
					element.classList.remove('is-open');
				},
				blockScrolling: function () {
					document.body.classList.add('Navbar-blockScrolling');
				},
				unblockScrolling: function () {
					document.body.classList.remove('Navbar-blockScrolling');
				},
				/**
     * Set appropriate display value for modal after animating/transitioning
     */
				setModalDisplayStateAfterAnimation: function (event) {
					if (Navbar.isOpen(this)) {
						Navbar.showModal(this);
					} else {
						Navbar.hideModal(this);
					}

					event.stopPropagation();
					event.preventDefault();
					return false;
				},
				/**
     * Helper methods for toggling modal display states
     */
				showModal: function (modal) {
					modal.classList.add('is-displayed');
				},
				hideModal: function (modal) {
					modal.classList.remove('is-displayed');
				},

				toggleExpandable: function (trigger) {
					Navbar.forEach(this.querySelectorAll('.Navbar-expandable'), function (expandable) {
						var container = expandable.querySelector('.Navbar-expandableContainer');
						// If this is the trigger and it's not open, open it
						if (expandable == trigger && !Navbar.isOpen(expandable)) {
							if (expandable.NavbarAnimationTimeout) clearTimeout(expandable.NavbarAnimationTimeout);
							container.style.height = '0px';
							Navbar.open(expandable);
							var content = expandable.querySelector('.Navbar-expandableContent');
							container.style.height = content.offsetHeight + 'px';
						}
						// Otherwise if it's open, close it
						else {
								container.style.height = '0px';
								expandable.NavbarAnimationTimeout = setTimeout(function () {
									Navbar.close(expandable);
								}.bind(expandable), Navbar.DEFAULT_ANIMATION_DURATION);
							}
					});
				},

				checkDisabled: function (root) {
					return root && root.classList && root.classList.contains('is-disabled');
				},

				hideToast: function () {
					if (this.hideToast) this.removeEventListener('animationend', this.hideToast);
					this.classList.remove('is-dismissed');
					this.classList.remove('is-open');
				},

				showCookieCompliance: function (root) {
					var popup = root.querySelector('.Navbar-cookieCompliance');
					var showAgreement = true;

					// Not an EU site
					if (!popup) {
						return;
					}

					if (localStorage) {
						agreedMillis = localStorage.getItem(Navbar.KEY_COOKIES_AGREED);
						if (agreedMillis) {
							// Ensure previous agreement was less than 1 calendar year ago
							var oneYearAgo = new Date(new Date().setFullYear(new Date().getFullYear() - 1)).getTime();
							if (agreedMillis > oneYearAgo) {
								showAgreement = false;
							}
						}
					}

					if (showAgreement) {
						popup.classList.add('is-open');
						popup.querySelector('#cookie-compliance-agree').addEventListener('click', Navbar.dismissCookieCompliance.bind(popup));
						popup.querySelector('.Navbar-toastClose').addEventListener('click', Navbar.dismissCookieCompliance.bind(popup, true));
					}
				},
				dismissCookieCompliance: function () {
					var hideToast = Navbar.hideToast.bind(this);
					this.hideToast = hideToast;
					this.addEventListener('animationend', hideToast);
					this.classList.add('is-dismissed');

					if (localStorage) {
						localStorage.setItem(Navbar.KEY_COOKIES_AGREED, new Date().getTime());
					}
				},

				/**
     * Helper method to execute a callback method against an array-like structure.
     *
     * @param collection An array-like structure to iterate over.
     * @param callback
     */
				forEach: function (collection, callback) {
					if (collection && collection.length && typeof callback === 'function') {
						for (var i = 0; i < collection.length; i++) {
							callback(collection[i], i, collection);
						}
					}
				},

				request: function (method, url, callback, error) {
					var xhr = new XMLHttpRequest();
					xhr.open(method, url);
					xhr.onreadystatechange = function (callback, error) {
						if (this.readyState === 4) {
							if (this.status === 200) {
								callback(this.responseText);
							} else {
								error(this.status);
							}
						}
					}.bind(xhr, callback, error);
					xhr.send();
				},

				get: function (url, callback, error) {
					return Navbar.request('GET', url, callback, error);
				},

				/**
     * Pull user account info via AJAX.
     */
				authenticate: function (root) {
					var authUrl = root.getAttribute('data-auth-url');
					Navbar.get(authUrl, function (res) {
						if (!res) {
							// not logged in
							return;
						}
						var user = {};
						try {
							user = JSON.parse(res);
							Navbar.login(root, user);
						} catch (err) {
							console.error(err);
						}
					}, function (err) {
						console.error('Couldn\'t verify user', err);
					});
				},

				login: function (root, user) {
					if (user) {
						var battleTagFull = '';
						var battleTagName = '';
						var battleTagCode = '';
						var email = (user.email || '').toLowerCase();

						if (user.account && user.account.battleTag) {
							battleTagFull = battleTagName = user.account.battleTag.name || battleTagName;
							battleTagCode = user.account.battleTag.code || battleTagCode;
							if (battleTagCode && battleTagCode.charAt(0) !== '#') {
								battleTagCode = '#' + battleTagCode;
							}
						} else if (user.battletag) {
							var tokens = user.battletag.split('#');
							battleTagFull = battleTagName = tokens[0] || battleTagName;
							battleTagCode = tokens[1] || battleTagCode;
							if (battleTagCode && battleTagCode.charAt(0) !== '#') {
								battleTagCode = '#' + battleTagCode;
							}
						} else if (email) {
							battleTagFull = email.length > 12 ? email.substring(0, 12) : email;
						}

						root.classList.add('is-authenticated');
						if (user.flags && user.flags.employee) {
							root.classList.add('is-employee');
						}

						// Account Dropdown button
						root.querySelector('.Navbar .Navbar-accountAuthenticated').innerHTML = battleTagFull;

						// Contents of Account Dropdown
						Navbar.forEach(root.querySelectorAll('.Navbar-accountDropdownLoggedIn'), function (accountSection) {
							accountSection.querySelector('.Navbar-accountDropdownBattleTag').innerHTML = battleTagName;
							accountSection.querySelector('.Navbar-accountDropdownBattleTagNumber').innerHTML = battleTagCode;
							accountSection.querySelector('.Navbar-accountDropdownEmail').innerHTML = email;
						});

						// Check support tickets after ajax auth
						Navbar.checkSupportNotifications(root);
					}
				},

				/**
     * Retrieve footer legal info via AJAX.
     */
				getLegal: function (root) {
					var locale = root.getAttribute('data-locale');

					var legalRootElem = (root || document).querySelector('.NavbarFooter-legal');
					var disableLegal = !!legalRootElem.getAttribute('data-disable');
					var disableAdditionalLegal = !!legalRootElem.getAttribute('data-disable-additional');
					var legalUrl = legalRootElem.getAttribute('data-legal-url') || '/{locale}/navbar/legal?id={legalId}';
					var legalId = legalRootElem.getAttribute('data-legal-id');
					var country = legalRootElem.getAttribute('data-country');

					legalUrl = legalUrl.replace('{locale}', locale);
					legalUrl = legalUrl.replace('{legalId}', legalId);
					legalUrl = legalUrl.replace('{country}', country);

					Navbar.get(legalUrl, function (res) {
						if (!res) {
							// not logged in
							return;
						}
						var legal = {};
						try {
							legal = JSON.parse(res);
							Navbar.generateLegal(legalRootElem, legal, disableLegal, disableAdditionalLegal);
						} catch (err) {
							console.error(err);
						}
					}, function (err) {
						console.error('Couldn\'t retrieve legal data', err);
					});
				},

				generateLegal: function (legalRoot, data, disableLegal, disableAdditionalLegal) {
					if (data.success) {
						if (!disableAdditionalLegal && data.additional && data.additional.length) {
							legalRoot.innerHTML = data.additional.join('');
						} else {
							while (legalRoot.lastChild) {
								legalRoot.removeChild(legalRoot.lastChild);
							}
						}

						if (!disableLegal) {
							// Add ratings
							var ratingsElem = document.createElement('div');
							ratingsElem.className = 'NavbarFooter-legalRatings';

							Navbar.forEach(data.ratings, function (rating) {
								var wrapperElem = document.createElement('div');
								wrapperElem.className = 'NavbarFooter-legalRatingWrapper';
								Navbar.forEach(rating.assets, function (asset) {
									var assetElem = document.createElement('a');
									assetElem.className = 'NavbarFooter-legalLink';
									assetElem.href = asset.url;

									var assetImage = document.createElement('img');
									assetImage.className = 'NavbarFooter-legalRatingDetailImage';
									assetImage.src = asset.imageUrl;
									assetImage.alt = asset.alt;
									assetImage.title = asset.alt;
									assetElem.appendChild(assetImage);

									wrapperElem.appendChild(assetElem);
								});
								if (rating.localizedDescriptors && rating.localizedDescriptors.length) {
									var descriptorWrapperElem = document.createElement('div');
									descriptorWrapperElem.className = 'NavbarFooter-legalRatingDescriptorsWrapper';

									Navbar.forEach(rating.localizedDescriptors, function (descriptor) {
										var descriptorElem = document.createElement('div');
										descriptorElem.className = 'NavbarFooter-esrbDescriptor';
										descriptorElem.title = descriptor.description;

										var descriptorText = document.createTextNode(descriptor.name);
										descriptorElem.appendChild(descriptorText);

										descriptorWrapperElem.appendChild(descriptorElem);
									});

									wrapperElem.appendChild(descriptorWrapperElem);
								}
								ratingsElem.appendChild(wrapperElem);
							});

							legalRoot.appendChild(ratingsElem);
						}
					}
				},

				setTickOffset: function (anchor, tick) {
					tick.style.left = '';
					var offset = anchor.offsetWidth / 2 + anchor.getBoundingClientRect().left - tick.getBoundingClientRect().left - Navbar.TICK_MULTIPLIER * tick.offsetWidth / 2;
					tick.style.left = offset + 'px';
					return offset;
				},

				setVerticalTickOffset: function (anchor, tick) {
					tick.style.top = '';
					// Anchor offsetHeight is ignored so we can top-align with row content
					var offset = tick.offsetHeight + anchor.getBoundingClientRect().top - tick.getBoundingClientRect().top - Navbar.TICK_MULTIPLIER * tick.offsetHeight / 2;
					tick.style.top = offset + 'px';
					return offset;
				},

				toggleLocaleSelector: function () {
					if (this.querySelector('.NavbarFooter-selector').classList.contains('is-open')) {
						Navbar.closeLocaleSelector.call(this);
					} else {
						Navbar.openLocaleSelector.call(this);
					}
				},

				openLocaleSelector: function () {
					this.classList.add('is-focused');
					this.querySelector('.NavbarFooter-selector').classList.add('is-open');
					var arrow = this.querySelector('.NavbarFooter-selectorToggleArrow');
					var tick = this.querySelector('.NavbarFooter-selectorTick');
					Navbar.setTickOffset(arrow, tick);

					if (this.classList.contains('is-region-limited') || this.classList.contains('is-region-hybrid')) {
						Navbar.changeFooterRegionLimit.call(this, this.querySelector('.NavbarFooter-selectorRegion.is-active'));
					}

					Navbar.blockScrolling();
				},
				closeLocaleSelector: function () {
					this.classList.remove('is-focused');
					this.querySelector('.NavbarFooter-selector').classList.remove('is-open');

					Navbar.unblockScrolling();
				},

				updateFooter: function (timestamp) {
					if (timestamp > Navbar.lastFooterUpdateTimestamp) {
						Navbar.lastFooterUpdateTimestamp = timestamp;

						var width = Navbar.calcViewportWidth();
						if (width === Navbar.viewportWidthFooter) {
							return;
						}
						Navbar.viewportWidthFooter = width;

						if (this && this.classList.contains('is-focused')) {
							Navbar.closeLocaleSelector.call(this);
						}
					}
				},
				resizeFooter: function () {
					var _this = this;
					requestAnimationFrame(function (timestamp) {
						Navbar.updateFooter.call(_this, timestamp);
					});
				},

				changeFooterRegionLimit: function (link) {
					var regionId = link.getAttribute('data-id');

					Navbar.forEach(this.querySelectorAll('.NavbarFooter-selectorSectionPage.is-open:not([data-region=\'' + regionId + '\'])'), function (page) {
						page.classList.remove('is-open');
					});
					this.querySelector('.NavbarFooter-selectorSectionPage[data-region=\'' + regionId + '\']').classList.add('is-open');

					Navbar.forEach(this.querySelectorAll('.NavbarFooter-selectorRegion.is-selected:not([data-id=\'' + regionId + '\'])'), function (page) {
						page.classList.remove('is-selected');
					});
					link.classList.add('is-selected');

					var tick = this.querySelector('.NavbarFooter-selectorRegionTick');
					var offset = Navbar.setVerticalTickOffset(link, tick);
					var tickOverlay = tick.querySelector('.NavbarFooter-selectorRegionTickOverlay');
					tickOverlay.style.opacity = offset / this.querySelector('.NavbarFooter-selectorRegions').offsetHeight;
				},

				getLocalDomainName: function () {
					var url = window.location.href;
					var domain;
					// find & remove protocol (http, ftp, etc.) and get domain
					if (url.indexOf("://") > -1) {
						domain = url.split('/')[2];
					} else {
						domain = url.split('/')[0];
					}
					// find & remove port number
					domain = domain.split(':')[0];

					return domain;
				},
				pushAnalyticsEvent: function (data) {
					if (!window.dataLayer) window.dataLayer = [];
					window.dataLayer.push(data);
				},
				pushGlobalNotificationAnalyticsEvent: function (event, id, title) {
					Navbar.pushAnalyticsEvent({
						event: 'globalNotification',
						analytics: {
							eventPlacement: event,
							eventPanel: 'id:' + id + ' || ' + title
						}
					});
				},
				loadHandler: function () {
					Navbar.testForOverlappingElementsAndSwitchToCollapsed();

					// Remove the timeout now that we've run the load test properly
					if (Navbar.loadTimeoutId) {
						clearTimeout(Navbar.loadTimeoutId);
						Navbar.loadTimeoutId = null;
					}
				}
			};

			(function () {
				var navbars = [];
				Navbar.forEach(document.querySelectorAll('.Navbar'), function (root) {
					Navbar.init(root);
					navbars.push(root);
				});

				Navbar.forEach(document.querySelectorAll('.NavbarFooter'), function (footer) {
					Navbar.initFooter(footer);
				});

				document.addEventListener("DOMContentLoaded", function (event) {
					Navbar.forEach(navbars, Navbar.updateNavbar);

					// Wait a reasonable time for the load event to occur. If it has not fired, then we will go ahead and run the overlap test
					Navbar.loadTimeoutId = setTimeout(Navbar.loadHandler, Navbar.DURATION_LOAD_DELAY);
				});

				// Try to wait on the Load event. Ideally, we hope to receive the event before the defined timeout
				window.addEventListener(Navbar.WINDOW_LOAD_EVENT, Navbar.loadHandler);
			})();

			if (module) module.exports = Navbar;
		}, {}] }, {}, [1, 2])(2);
});