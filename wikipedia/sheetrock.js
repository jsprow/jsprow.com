! function(e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define("sheetrock", [], t) : "object" == typeof exports ? exports.sheetrock = t() : e.sheetrock = t()
}(this, function() {
    return function(e) {
        function t(n) {
            if (r[n]) return r[n].exports;
            var o = r[n] = {
                exports: {},
                id: n,
                loaded: !1
            };
            return e[n].call(o.exports, o, o.exports, t), o.loaded = !0, o.exports
        }
        var r = {};
        return t.m = e, t.c = r, t.p = "", t(0)
    }([function(e, t, r) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o() {
            function e(e) {
                if (e && "SheetrockError" === e.name && o && o.update && o.update({
                        failed: !0
                    }), t.callback) return void t.callback(e, n, s);
                if (e) throw e
            }
            var t = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0],
                r = arguments.length <= 1 || void 0 === arguments[1] ? null : arguments[1],
                n = null,
                o = null,
                s = null;
            try {
                n = new i["default"](a({
                    target: this
                }, t), (!!r)), o = new l["default"](n), s = new c["default"](o)
            } catch (u) {
                e(u)
            }
            return r ? s.loadData(r, e) : n && o && s && (0, h["default"])(s, e), this
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var r = arguments[t];
                    for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
                }
                return e
            },
            s = r(1),
            i = n(s),
            u = r(5),
            l = n(u),
            f = r(6),
            c = n(f),
            d = r(2),
            p = r(8),
            h = n(p),
            y = "1.1.0";
        a(o, {
            defaults: d.defaults,
            version: y
        });
        try {
            window.jQuery.fn.sheetrock = o
        } catch (b) {}
        t["default"] = o, e.exports = t["default"]
    }, function(e, t, r) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o(e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e)
                for (var r in e) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
            return t["default"] = e, t
        }

        function a(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        function s(e) {
            var t = {};
            return Object.keys(e).forEach(function(r) {
                ({}).hasOwnProperty.call(c.legacyOptions, r) ? t[c.legacyOptions[r]] = e[r] : t[r] = e[r]
            }), t
        }

        function i(e) {
            var t = {};
            if (t.target = (0, d.extractElement)(e.target), t.fetchSize = Math.max(0, parseInt(e.fetchSize, 10) || 0), !t.target && !e.callback) throw new h["default"]("No element targeted or callback provided.");
            return l({}, c.defaults, e, t)
        }

        function u(e, t) {
            if (t) return {
                data: t
            };
            var r = null;
            if (Object.keys(c.sheetTypes).forEach(function(t) {
                    var n = c.sheetTypes[t];
                    n.keyFormat.test(e.url) && n.gidFormat.test(e.url) && (r = n)
                }), r) {
                var n = e.url.match(r.keyFormat)[1];
                return {
                    key: n,
                    gid: e.url.match(r.gidFormat)[1],
                    apiEndpoint: r.apiEndpoint.replace("%key%", n)
                }
            }
            throw new h["default"]("No key/gid in the provided URL.")
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var l = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var r = arguments[t];
                    for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
                }
                return e
            },
            f = r(2),
            c = o(f),
            d = r(3),
            p = r(4),
            h = n(p),
            y = function b() {
                var e = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0],
                    t = !(arguments.length <= 1 || void 0 === arguments[1]) && arguments[1];
                a(this, b), this.user = i(s(e)), this.request = u(this.user, t), this.requestIndex = this.request.key + "_" + this.request.gid + "_" + this.user.query
            };
        t["default"] = y, e.exports = t["default"]
    }, function(e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = {
                url: "",
                query: "",
                target: null,
                fetchSize: 0,
                labels: [],
                rowTemplate: null,
                callback: null,
                reset: !1
            },
            n = {
                sql: "query",
                resetStatus: "reset",
                chunkSize: "fetchSize",
                rowHandler: "rowTemplate"
            },
            o = {
                2014: {
                    apiEndpoint: "https://docs.google.com/spreadsheets/d/%key%/gviz/tq?",
                    keyFormat: new RegExp("spreadsheets/d/([^/#]+)", "i"),
                    gidFormat: new RegExp("gid=([^/&#]+)", "i")
                },
                2010: {
                    apiEndpoint: "https://spreadsheets.google.com/tq?key=%key%&",
                    keyFormat: new RegExp("key=([^&#]+)", "i"),
                    gidFormat: new RegExp("gid=([^/&#]+)", "i")
                }
            };
        t.defaults = r, t.legacyOptions = n, t.sheetTypes = o
    }, function(e, t) {
        "use strict";

        function r(e) {
            var t = e ? e.f || e.v || e : "";
            return t instanceof Array && (t = t.join("")), "object" === ("undefined" == typeof t ? "undefined" : l(t)) ? "" : ("" + t).replace(/^\s+|\s+$/, "")
        }

        function n(e) {
            var t = e;
            return "object" === ("undefined" == typeof t ? "undefined" : l(t)) && t.jquery && t.length && (t = t[0]), t && t.nodeType && 1 === t.nodeType ? t : null
        }

        function o(e, t) {
            e && e.insertAdjacentHTML && e.insertAdjacentHTML("beforeEnd", t)
        }

        function a(e, t) {
            var r = " " + e.className + " ";
            return r.indexOf(" " + t + " ") !== -1
        }

        function s(e) {
            return e && "TABLE" === e.tagName
        }

        function i(e, t) {
            return "<" + t + ">" + e + "</" + t + ">"
        }

        function u(e) {
            var t = e.num ? "td" : "th",
                r = "";
            return Object.keys(e.cells).forEach(function(n) {
                r += i(e.cells[n], t)
            }), i(r, "tr")
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var l = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol ? "symbol" : typeof e
        };
        t.append = o, t.extractElement = n, t.getCellValue = r, t.hasClass = a, t.isTable = s, t.toHTML = u, t.wrapTag = i
    }, function(e, t) {
        "use strict";

        function r(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        function n(e, t) {
            if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function o(e, t) {
            if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = function(e) {
            function t() {
                var e = arguments.length <= 0 || void 0 === arguments[0] ? "" : arguments[0],
                    o = arguments.length <= 1 || void 0 === arguments[1] ? null : arguments[1];
                r(this, t);
                var a = n(this, Object.getPrototypeOf(t).call(this));
                return a.name = "SheetrockError", a.code = o, a.message = e, a
            }
            return o(t, e), t
        }(Error);
        t["default"] = a, e.exports = t["default"]
    }, function(e, t, r) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var r = arguments[t];
                    for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
                }
                return e
            },
            s = function() {
                function e(e, t) {
                    for (var r = 0; r < t.length; r++) {
                        var n = t[r];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }
                return function(t, r, n) {
                    return r && e(t.prototype, r), n && e(t, n), t
                }
            }(),
            i = r(4),
            u = n(i),
            l = {
                defaults: {
                    failed: !1,
                    header: 0,
                    labels: null,
                    loaded: !1,
                    offset: 0
                },
                store: {}
            },
            f = function() {
                function e(t) {
                    if (o(this, e), this.options = t, this.index = t.requestIndex, this.state.failed) throw new u["default"]("A previous request for this resource failed.");
                    if (this.state.loaded) throw new u["default"]("No more rows to load!")
                }
                return s(e, [{
                    key: "update",
                    value: function() {
                        var e = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0];
                        l.store[this.index] = a(this.state, e)
                    }
                }, {
                    key: "state",
                    get: function() {
                        var e = this.options.user.reset || this.options.request.data;
                        return {}.hasOwnProperty.call(l.store, this.index) && !e || (l.store[this.index] = a({}, l.defaults)), l.store[this.index]
                    }
                }, {
                    key: "url",
                    get: function() {
                        var e = this.options.user.fetchSize,
                            t = e ? " limit " + (e + 1) + " offset " + this.state.offset : "",
                            r = ["gid=" + encodeURIComponent(this.options.request.gid), "tq=" + encodeURIComponent(this.options.user.query + t)];
                        return this.options.request.apiEndpoint + r.join("&")
                    }
                }]), e
            }();
        t["default"] = f, e.exports = t["default"]
    }, function(e, t, r) {
        "use strict";

        function n(e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e)
                for (var r in e) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
            return t["default"] = e, t
        }

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = function() {
                function e(e, t) {
                    for (var r = 0; r < t.length; r++) {
                        var n = t[r];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }
                return function(t, r, n) {
                    return r && e(t.prototype, r), n && e(t, n), t
                }
            }(),
            i = r(7),
            u = o(i),
            l = r(4),
            f = o(l),
            c = r(3),
            d = n(c),
            p = function() {
                function e(t) {
                    a(this, e), this.request = t, this.options = t.options
                }
                return s(e, [{
                    key: "setAttributes",
                    value: function() {
                        var e = this.options.user.fetchSize,
                            t = this.raw.table.rows,
                            r = this.raw.table.cols,
                            n = {
                                last: t.length - 1,
                                rowNumberOffset: this.request.state.header || 0
                            },
                            o = this.request.state.labels;
                        this.request.state.offset || (o = r.map(function(e, r) {
                            return e.label ? e.label.replace(/\s/g, "") : (n.last += 1, n.rowNumberOffset = 1, d.getCellValue(t[0].c[r]) || e.id)
                        }), this.request.update({
                            header: n.rowNumberOffset,
                            labels: o,
                            offset: this.request.state.offset + n.rowNumberOffset
                        })), (!e || t.length - n.rowNumberOffset < e) && (n.last += 1, this.request.update({
                            loaded: !0
                        }));
                        var a = this.options.user.labels,
                            s = a && a.length === o.length;
                        n.labels = s ? a : o, this.attributes = n
                    }
                }, {
                    key: "setOutput",
                    value: function() {
                        var e = this;
                        this.rows = [], this.request.state.offset || this.attributes.rowNumberOffset || this.rows.push(new u["default"](0, this.attributes.labels, this.attributes.labels)), this.raw.table.rows.forEach(function(t, r) {
                            if (t.c && r < e.attributes.last) {
                                var n = e.request.state.offset + r + 1 - e.attributes.rowNumberOffset;
                                e.rows.push(new u["default"](n, t.c, e.attributes.labels))
                            }
                        }), this.request.update({
                            offset: this.request.state.offset + this.options.user.fetchSize
                        })
                    }
                }, {
                    key: "setHTML",
                    value: function() {
                        var e = this.options.user.target,
                            t = this.options.user.rowTemplate || d.toHTML,
                            r = d.isTable(e),
                            n = e && d.hasClass(e, "sheetrock-header"),
                            o = "",
                            a = "";
                        this.rows.forEach(function(e) {
                            e.num ? a += t(e) : (r || n) && (o += t(e))
                        }), r && (o = d.wrapTag(o, "thead"), a = d.wrapTag(a, "tbody")), d.append(e, o + a), this.html = o + a
                    }
                }, {
                    key: "loadData",
                    value: function(e, t) {
                        var r = null;
                        try {
                            this.raw = e, this.setAttributes(), this.setOutput(), this.setHTML()
                        } catch (n) {
                            r = new f["default"]("Unexpected API response format.")
                        }
                        t(r)
                    }
                }]), e
            }();
        t["default"] = p, e.exports = t["default"]
    }, function(e, t, r) {
        "use strict";

        function n(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = function() {
                function e(e, t) {
                    for (var r = 0; r < t.length; r++) {
                        var n = t[r];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }
                return function(t, r, n) {
                    return r && e(t.prototype, r), n && e(t, n), t
                }
            }(),
            a = r(3),
            s = function() {
                function e(t, r, o) {
                    n(this, e), this.num = t, this.cellsArray = r.map(a.getCellValue), this.labels = o
                }
                return o(e, [{
                    key: "cells",
                    get: function() {
                        var e = this,
                            t = {};
                        return this.labels.forEach(function(r, n) {
                            t[r] = e.cellsArray[n]
                        }), t
                    }
                }]), e
            }();
        t["default"] = s, e.exports = t["default"]
    }, function(e, t, r) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o(e, t) {
            function r() {
                i.removeChild(a), delete window[l]
            }

            function n(n) {
                r(), e.loadData(n, t)
            }

            function o() {
                r(), t(new s["default"]("Request failed."))
            }
            var a = window.document.createElement("script"),
                l = "_sheetrock_callback_" + u;
            u += 1, window[l] = n, a.addEventListener && (a.addEventListener("error", o, !1), a.addEventListener("abort", o, !1)), a.type = "text/javascript", a.src = e.request.url + "&tqx=responseHandler:" + l, i.appendChild(a)
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = r(4),
            s = n(a),
            i = window.document.getElementsByTagName("head")[0],
            u = 0;
        t["default"] = o, e.exports = t["default"]
    }]);

});
//# sourceMappingURL=sheetrock.min.js.map