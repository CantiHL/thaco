(() => { function e(e, n) { for (var o = 0; o < n.length; o++) { var r = n[o]; r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r) } } var n = function () { function n() { !function (e, n) { if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function") }(this, n) } var o, r; return o = n, (r = [{ key: "init", value: function () { $(".language-wrapper .dropdown .dropdown-toggle").off("click").on("click", (function (e) { e.preventDefault(); var n = $(e.currentTarget); n.hasClass("active") ? (n.closest(".language-wrapper").find(".dropdown .dropdown-menu").hide(), n.removeClass("active")) : (n.closest(".language-wrapper").find(".dropdown .dropdown-menu").show(), n.addClass("active")) })), $(document).on("click", (function (e) { var n = $(e.currentTarget); 0 === n.closest(".language-wrapper").length && (n.closest(".language-wrapper").find(".dropdown .dropdown-menu").hide(), n.closest(".language-wrapper").find(".dropdown .dropdown-toggle").removeClass("active")) })) } }]) && e(o.prototype, r), n }(); $(document).ready((function () { (new n).init() })) })();
