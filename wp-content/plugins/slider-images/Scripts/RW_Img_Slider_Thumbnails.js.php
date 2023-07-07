<script>
    (function (b, r, ea) {
    function c(a, f, c) {
        a = r.createElement(a);
        f && (a.id = q + f);
        c && (a.style.cssText = c);
        return b(a);
    }
    function M(a) {
        var b = j.length;
        a = (p + a) % b;
        return 0 > a ? b + a : a;
    }
    function n(a, b) {
        return Math.round((/%/.test(a) ? ("x" === b ? m.width() : m.height()) / 100 : 1) * parseInt(a, 10));
    }
    function fa(b) {
        return a.photo || /\.(gif|png|jp(e|g|eg)|bmp|ico)((#|\?).*)?$/i.test(b);
    }
    function ga() {
        var B,
            f = b.data(k, v);
        null == f ? ((a = b.extend({}, R)), console && console.log && console.log("Error: cboxElement missing settings object")) : (a = b.extend({}, f));
        for (B in a) b.isFunction(a[B]) && "on" !== B.slice(0, 2) && (a[B] = a[B].call(k));
        a.rel = a.rel || k.rel || b(k).data("rel") || "nofollow";
        a.href = a.href || b(k).attr("href");
        a.title = a.title || k.title;
        "string" === typeof a.href && (a.href = b.trim(a.href));
    }
    function D(a, f) {
        b(r).trigger(a);
        b("*", h).trigger(a);
        f && f.call(k);
    }
    function ma() {
        var b,
            f = q + "Slideshow_",
            c = "click." + q,
            e,
            t;
        a.slideshow && j[1]
            ? ((e = function () {
                  G.html(a.slideshowStop)
                      .unbind(c)
                      .bind(S, function () {
                          if (a.loop || j[p + 1]) b = setTimeout(g.next, a.slideshowSpeed);
                      })
                      .bind(T, function () {
                          clearTimeout(b);
                      })
                      .one(c + " " + U, t);
                  h.removeClass(f + "off").addClass(f + "on");
                  b = setTimeout(g.next, a.slideshowSpeed);
              }),
              (t = function () {
                  clearTimeout(b);
                  G.html(a.slideshowStart)
                      .unbind([S, T, U, c].join(" "))
                      .one(c, function () {
                          g.next();
                          e();
                      });
                  h.removeClass(f + "on").addClass(f + "off");
              }),
              a.slideshowAuto ? e() : t())
            : h.removeClass(f + "off " + f + "on");
    }
    function ha(c) {
        N ||
            ((k = c),
            ga(),
            (j = b(k)),
            (p = 0),
            "nofollow" !== a.rel &&
                ((j = b("." + F).filter(function () {
                    var c = b.data(this, v),
                        B;
                    c && (B = b(this).data("rel") || c.rel || this.rel);
                    return B === a.rel;
                })),
                (p = j.index(k)),
                -1 === p && ((j = j.add(k)), (p = j.length - 1))),
            w ||
                ((w = H = !0),
                h.show(),
                a.returnFocus &&
                    (b(k).blur(),
                    b(r).one(ia, function () {
                        b(k).focus();
                    })),
                C.css({ opacity: +a.opacity, cursor: a.overlayClose ? "pointer" : "auto" }).show(),
                (a.w = n(a.initialWidth, "x")),
                (a.h = n(a.initialHeight, "y")),
                g.position(),
                O &&
                    m
                        .bind("resize." + P + " scroll." + P, function () {
                            C.css({ width: m.width(), height: m.height(), top: m.scrollTop(), left: m.scrollLeft() });
                        })
                        .trigger("resize." + P),
                D(ja, a.onOpen),
                V.add(W).hide(),
                X.html(a.close).show()),
            g.load(!0));
    }
    function ka() {
        !h &&
            r.body &&
            ((Y = !1),
            (m = b(ea)),
            (h = c(e)
                .attr({ id: v, class: I ? q + (O ? "IE6" : "IE") : "" })
                .hide()),
            (C = c(e, "Overlay", O ? "position:absolute" : "").hide()),
            (Z = c(e, "LoadingOverlay").add(c(e, "LoadingGraphic"))),
            (E = c(e, "Wrapper")),
            (u = c(e, "Content").append(
                (l = c(e, "LoadedContent", "width:0; height:0; overflow:hidden")),
                (W = c(e, "Title")),
                ($ = c(e, "Current")),
                (J = c(e, "Next")),
                (K = c(e, "Previous")),
                (G = c(e, "Slideshow").bind(ja, ma)),
                (X = c(e, "Close"))
            )),
            E.append(
                c(e).append(c(e, "TopLeft"), (aa = c(e, "TopCenter")), c(e, "TopRight")),
                c(e, !1, "clear:left").append((ba = c(e, "MiddleLeft")), u, (ca = c(e, "MiddleRight"))),
                c(e, !1, "clear:left").append(c(e, "BottomLeft"), (da = c(e, "BottomCenter")), c(e, "BottomRight"))
            )
                .find("div div")
                .css({ float: "left" }),
            (L = c(e, !1, "position:absolute; width:9999px; visibility:hidden; display:none")),
            (V = J.add(K).add($).add(G)),
            b(r.body).append(C, h.append(E, L)));
    }
    var R = {
            transition: "elastic",
            speed: 300,
            width: !1,
            initialWidth: "600",
            innerWidth: !1,
            maxWidth: !1,
            height: !1,
            initialHeight: "450",
            innerHeight: !1,
            maxHeight: !1,
            scalePhotos: !0,
            scrolling: !0,
            inline: !1,
            html: !1,
            iframe: !1,
            fastIframe: !0,
            photo: !1,
            href: !1,
            title: !1,
            rel: !1,
            opacity: 0.9,
            preloading: !0,
            current: "image {current} of {total}",
            previous: "previous",
            next: "next",
            close: "close",
            xhrError: "This content failed to load.",
            imgError: "This image failed to load.",
            open: !1,
            returnFocus: !0,
            reposition: !0,
            loop: !0,
            slideshow: !1,
            slideshowAuto: !0,
            slideshowSpeed: 2500,
            slideshowStart: "start slideshow",
            slideshowStop: "stop slideshow",
            onOpen: !1,
            onLoad: !1,
            onComplete: !1,
            onCleanup: !1,
            onClosed: !1,
            overlayClose: !0,
            escKey: !0,
            arrowKey: !0,
            top: !1,
            bottom: !1,
            left: !1,
            right: !1,
            fixed: !1,
            data: void 0,
        },
        v = "colorbox",
        q = "cbox",
        F = q + "Element",
        ja = q + "_open",
        T = q + "_load",
        S = q + "_complete",
        U = q + "_cleanup",
        ia = q + "_closed",
        Q = q + "_purge",
        I = !b.support.leadingWhitespace,
        O = I && !ea.XMLHttpRequest,
        P = q + "_IE6",
        C,
        h,
        E,
        u,
        aa,
        ba,
        ca,
        da,
        j,
        m,
        l,
        L,
        Z,
        W,
        $,
        G,
        J,
        K,
        X,
        V,
        a,
        x,
        y,
        z,
        A,
        k,
        p,
        d,
        w,
        H,
        N,
        la,
        g,
        e = "div",
        Y;
    b.colorbox ||
        (b(ka),
        (g = b.fn[v] = b[v] = function (c, e) {
            var d = this;
            c = c || {};
            ka();
            var s;
            h
                ? (Y ||
                      ((Y = !0),
                      (x = aa.height() + da.height() + u.outerHeight(!0) - u.height()),
                      (y = ba.width() + ca.width() + u.outerWidth(!0) - u.width()),
                      (z = l.outerHeight(!0)),
                      (A = l.outerWidth(!0)),
                      J.click(function () {
                          g.next();
                      }),
                      K.click(function () {
                          g.prev();
                      }),
                      X.click(function () {
                          g.close();
                      }),
                      C.click(function () {
                          a.overlayClose && g.close();
                      }),
                      b(r).bind("keydown." + q, function (b) {
                          var c = b.keyCode;
                          w && a.escKey && 27 === c && (b.preventDefault(), g.close());
                          w && a.arrowKey && j[1] && (37 === c ? (b.preventDefault(), K.click()) : 39 === c && (b.preventDefault(), J.click()));
                      }),
                      b(r).delegate("." + F, "click", function (a) {
                          1 < a.which || a.shiftKey || a.altKey || a.metaKey || (a.preventDefault(), ha(this));
                      })),
                  (s = !0))
                : (s = !1);
            if (s) {
                if (b.isFunction(d)) (d = b("<a/>")), (c.open = !0);
                else if (!d[0]) return d;
                e && (c.onComplete = e);
                d.each(function () {
                    b.data(this, v, b.extend({}, b.data(this, v) || R, c));
                }).addClass(F);
                ((b.isFunction(c.open) && c.open.call(d)) || c.open) && ha(d[0]);
            }
            return d;
        }),
        (g.position = function (b, c) {
            function e(a) {
                aa[0].style.width = da[0].style.width = u[0].style.width = parseInt(a.style.width, 10) - y + "px";
                u[0].style.height = ba[0].style.height = ca[0].style.height = parseInt(a.style.height, 10) - x + "px";
            }
            var d,
                j = (d = 0),
                l = h.offset(),
                p,
                k;
            m.unbind("resize." + q);
            h.css({ top: -9e4, left: -9e4 });
            p = m.scrollTop();
            k = m.scrollLeft();
            a.fixed && !O ? ((l.top -= p), (l.left -= k), h.css({ position: "fixed" })) : ((d = p), (j = k), h.css({ position: "absolute" }));
            j = !1 !== a.right ? j + Math.max(m.width() - a.w - A - y - n(a.right, "x"), 0) : !1 !== a.left ? j + n(a.left, "x") : j + Math.round(Math.max(m.width() - a.w - A - y, 0) / 2);
            d = !1 !== a.bottom ? d + Math.max(m.height() - a.h - z - x - n(a.bottom, "y"), 0) : !1 !== a.top ? d + n(a.top, "y") : d + Math.round(Math.max(m.height() - a.h - z - x, 0) / 2);
            h.css({ top: l.top, left: l.left });
            b = h.width() === a.w + A && h.height() === a.h + z ? 0 : b || 0;
            E[0].style.width = E[0].style.height = "9999px";
            d = { width: a.w + A + y, height: a.h + z + x, top: d, left: j };
            0 === b && h.css(d);
            h.dequeue().animate(d, {
                duration: b,
                complete: function () {
                    e(this);
                    H = !1;
                    E[0].style.width = a.w + A + y + "px";
                    E[0].style.height = a.h + z + x + "px";
                    a.reposition &&
                        setTimeout(function () {
                            m.bind("resize." + q, g.position);
                        }, 1);
                    c && c();
                },
                step: function () {
                    e(this);
                },
            });
        }),
        (g.resize = function (b) {
            w &&
                ((b = b || {}),
                b.width && (a.w = n(b.width, "x") - A - y),
                b.innerWidth && (a.w = n(b.innerWidth, "x")),
                l.css({ width: a.w }),
                b.height && (a.h = n(b.height, "y") - z - x),
                b.innerHeight && (a.h = n(b.innerHeight, "y")),
                !b.innerHeight && !b.height && (l.css({ height: "auto" }), (a.h = l.height())),
                l.css({ height: a.h }),
                g.position("none" === a.transition ? 0 : a.speed));
        }),
        (g.prep = function (k) {
            function f() {
                a.w = a.w || l.width();
                a.w = a.mw && a.mw < a.w ? a.mw : a.w;
                return a.w;
            }
            function m() {
                a.h = a.h || l.height();
                a.h = a.mh && a.mh < a.h ? a.mh : a.h;
                return a.h;
            }
            if (w) {
                var n,
                    t = "none" === a.transition ? 0 : a.speed;
                l.remove();
                l = c(e, "LoadedContent").append(k);
                l.hide()
                    .appendTo(L.show())
                    .css({ width: f(), overflow: a.scrolling ? "auto" : "hidden" })
                    .css({ height: m() })
                    .prependTo(u);
                L.hide();
                b(d).css({ float: "none" });
                n = function () {
                    function e() {
                        I && h[0].style.removeAttribute("filter");
                    }
                    var g = j.length,
                        f,
                        k;
                    w &&
                        ((k = function () {
                            clearTimeout(la);
                            Z.detach().hide();
                            D(S, a.onComplete);
                        }),
                        I && d && l.fadeIn(100),
                        W.html(a.title).add(l).show(),
                        1 < g
                            ? ("string" === typeof a.current && $.html(a.current.replace("{current}", p + 1).replace("{total}", g)).show(),
                              J[a.loop || p < g - 1 ? "show" : "hide"]().html(a.next),
                              K[a.loop || p ? "show" : "hide"]().html(a.previous),
                              a.slideshow && G.show(),
                              a.preloading &&
                                  b.each([M(-1), M(1)], function () {
                                      var a, c;
                                      c = j[this];
                                      (a = b.data(c, v)) && a.href ? ((a = a.href), b.isFunction(a) && (a = a.call(c))) : (a = c.href);
                                      fa(a) && ((c = new Image()), (c.src = a));
                                  }))
                            : V.hide(),
                        a.iframe
                            ? ((f = c("iframe")[0]),
                              "frameBorder" in f && (f.frameBorder = 0),
                              "allowTransparency" in f && (f.allowTransparency = "true"),
                              a.scrolling || (f.scrolling = "no"),
                              b(f)
                                  .attr({ src: a.href, name: new Date().getTime(), class: q + "Iframe", allowFullScreen: !0, webkitAllowFullScreen: !0, mozallowfullscreen: !0 })
                                  .one("load", k)
                                  .appendTo(l),
                              b(r).one(Q, function () {
                                  f.src = "//about:blank";
                              }),
                              a.fastIframe && b(f).trigger("load"))
                            : k(),
                        "fade" === a.transition ? h.fadeTo(t, 1, e) : e());
                };
                "fade" === a.transition
                    ? h.fadeTo(t, 0, function () {
                          g.position(0, n);
                      })
                    : g.position(t, n);
            }
        }),
        (g.load = function (h) {
            var f,
                m,
                s = g.prep,
                t;
            H = !0;
            d = !1;
            k = j[p];
            h || ga();
            D(Q);
            D(T, a.onLoad);
            a.h = a.height ? n(a.height, "y") - z - x : a.innerHeight && n(a.innerHeight, "y");
            a.w = a.width ? n(a.width, "x") - A - y : a.innerWidth && n(a.innerWidth, "x");
            a.mw = a.w;
            a.mh = a.h;
            a.maxWidth && ((a.mw = n(a.maxWidth, "x") - A - y), (a.mw = a.w && a.w < a.mw ? a.w : a.mw));
            a.maxHeight && ((a.mh = n(a.maxHeight, "y") - z - x), (a.mh = a.h && a.h < a.mh ? a.h : a.mh));
            f = a.href;
            la = setTimeout(function () {
                Z.show().appendTo(u);
            }, 100);
            a.inline
                ? ((t = c(e).hide().insertBefore(b(f)[0])),
                  b(r).one(Q, function () {
                      t.replaceWith(l.children());
                  }),
                  s(b(f)))
                : a.iframe
                ? s(" ")
                : a.html
                ? s(a.html)
                : fa(f)
                ? (b((d = new Image()))
                      .addClass(q + "Photo")
                      .bind("error", function () {
                          a.title = !1;
                          s(c(e, "Error").html(a.imgError));
                      })
                      .load(function () {
                          var b;
                          d.onload = null;
                          a.scalePhotos &&
                              ((m = function () {
                                  d.height -= d.height * b;
                                  d.width -= d.width * b;
                              }),
                              a.mw && d.width > a.mw && ((b = (d.width - a.mw) / d.width), m()),
                              a.mh && d.height > a.mh && ((b = (d.height - a.mh) / d.height), m()));
                          a.h && (d.style.marginTop = Math.max(a.h - d.height, 0) / 2 + "px");
                          if (j[1] && (a.loop || j[p + 1]))
                              (d.style.cursor = "pointer"),
                                  (d.onclick = function () {
                                      g.next();
                                  });
                          I && (d.style.msInterpolationMode = "bicubic");
                          setTimeout(function () {
                              s(d);
                          }, 1);
                      }),
                  setTimeout(function () {
                      d.src = f;
                  }, 1))
                : f &&
                  L.load(f, a.data, function (d, f) {
                      s("error" === f ? c(e, "Error").html(a.xhrError) : b(this).contents());
                  });
        }),
        (g.next = function () {
            if (!H && j[1] && (a.loop || j[p + 1])) (p = M(1)), g.load();
        }),
        (g.prev = function () {
            if (!H && j[1] && (a.loop || p)) (p = M(-1)), g.load();
        }),
        (g.close = function () {
            w &&
                !N &&
                ((N = !0),
                (w = !1),
                D(U, a.onCleanup),
                m.unbind("." + q + " ." + P),
                C.fadeTo(200, 0),
                h.stop().fadeTo(300, 0, function () {
                    h.add(C).css({ opacity: 1, cursor: "auto" }).hide();
                    D(Q);
                    l.remove();
                    setTimeout(function () {
                        N = !1;
                        D(ia, a.onClosed);
                    }, 1);
                }));
        }),
        (g.remove = function () {
            b([]).add(h).add(C).remove();
            h = null;
            b("." + F)
                .removeData(v)
                .removeClass(F);
            b(r).undelegate("." + F);
        }),
        (g.element = function () {
            return b(k);
        }),
        (g.settings = R));
})(jQuery, document, window);

</script>

<script type="text/javascript">
					(function( $, window, undefined ) {

						jQuery(document).ready(function(){
							var Rich_Web_Thumb_Photos<?php echo $Rich_Web_Slider_Manager[0]->id;?>=new Array();
							<?php for($i=0;$i<count($Rich_Web_Slider_Images);$i++){ 
								if(strpos($Rich_Web_Slider_Images[$i]->Sl_Img_Url, 'youtube') > 0)
								{
									$rest_vImg_url = substr($Rich_Web_Slider_Images[$i]->Sl_Img_Url, 0, -13);
									$link_vImg_sl = $rest_vImg_url.'maxresdefault.jpg';
									if (!@fopen("$link_vImg_sl",'r')) { $link_vImg_sl = $Rich_Web_Slider_Images[$i]->Sl_Img_Url; }
								}
								else
								{
									$link_vImg_sl = $Rich_Web_Slider_Images[$i]->Sl_Img_Url;
								}
							 ?>
								Rich_Web_Thumb_Photos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[<?php echo $i;?>]="<?php echo $link_vImg_sl;?>";
							<?php } ?>
							var Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()
							var Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()
							var Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()
							var Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()
							var Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()
							var Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()
							var Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(".Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>").val()

							if(Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							if(Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							if(Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							if(Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							if(Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							if(Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							if(Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>== "true"){
								Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>=true;
							}else{
								Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>=false;
							}

							function onlrs<?php echo $Rich_Web_Slider_Manager[0]->id;?>(){
								jQuery('#RichWeb_TSL_slider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>({
									theme<?php echo $Rich_Web_Slider_Manager[0]->id;?>           : 'metallic',
									mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>            : '<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_CM;?>',
									toggleArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>    : Rich_Web_Sl_TSL_TA<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									autoPlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>        : Rich_Web_Sl_TSL_AP<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									pauseOnHover<?php echo $Rich_Web_Slider_Manager[0]->id;?>    : Rich_Web_Sl_TSL_PH<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>       : Rich_Web_Sl_TSL_Loop<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									delay           : <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_PT*1000;?>,
									animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>   : <?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_CS;?>,
									buildArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>     : Rich_Web_Sl_TSL_Arr_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?> : Rich_Web_Sl_TSL_Nav_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									buildStartStop  : Rich_Web_Sl_TSL_SS_Show<?php echo $Rich_Web_Slider_Manager[0]->id;?>,
									navigationFormatter : function(i, panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>){
										return '<img src="'+Rich_Web_Thumb_Photos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[i-1]+'">';
									}
								}).find('.panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>:not(.cloned) img').attr('rel','group<?php echo $Rich_Web_Slider_Manager[0]->id;?>').colorbox({
									width: '80%',
									height: '70%',
									previous: "<i class='rich_web rich_web-<?php echo  $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Pop_ArrType;?>-left'></i>",
									next: "<i class='rich_web rich_web-<?php echo  $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Pop_ArrType;?>-right'></i>",
									close: "<i class='rich_web rich_web-<?php echo  $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_CIT;?>'></i>",
									href: function(){ return jQuery(this).attr('src'); },
									title: function(){ return jQuery(this).attr('title'); },
									rel: 'group<?php echo $Rich_Web_Slider_Manager[0]->id;?>'
								});
								console.log("1111");
							}
							onlrs<?php echo $Rich_Web_Slider_Manager[0]->id;?>();
							jQuery(window).on('load resize', function(){
								onlrs<?php echo $Rich_Web_Slider_Manager[0]->id;?>();
								setTimeout(function(){
									onlrs<?php echo $Rich_Web_Slider_Manager[0]->id;?>();
								}, 1000)
							})
						});
					})( jQuery, window );
				</script>
				<script type="text/javascript">
					(function( $, window, undefined ) {
						;(function(d,l,n){d.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>=function(m,p){var a=this,b,k;a.el=m;a.$el=d(m).addClass("anythingBase<?php echo $Rich_Web_Slider_Manager[0]->id; ?>").wrap('<div class="anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>"><div class="anythingWindow anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?>" /></div>');a.$el.data("AnythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>",a);a.init=function(){a.options=b=d.extend({},d.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>.defaults,p);a.initialized=!1;d.isFunction(b.onBeforeInitialize)&&a.$el.bind("before_initialize",b.onBeforeInitialize);a.$el.trigger("before_initialize",a);d('\x3c!--[if lte IE 8]><script>jQuery("body").addClass("as-oldie");\x3c/script><![endif]--\x3e').appendTo("body").remove();
						a.$wrapper=a.$el.parent().closest("div.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>").addClass("anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-"+b.theme<?php echo $Rich_Web_Slider_Manager[0]->id;?>);a.$outer=a.$wrapper.parent();a.$window=a.$el.closest("div.anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?>");a.$win=d(l);a.$controls=d('<div class="anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?>"></div>');a.$nav=d('<ul class="thumbNav<?php echo $Rich_Web_Slider_Manager[0]->id;?>"><li><a><span></span></a></li></ul>');a.$startStop=d('<a href="#" class="start-stop"></a>');(b.buildStartStop||b.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>)&&a.$controls.appendTo(b.appendControlsTo&&d(b.appendControlsTo).length?d(b.appendControlsTo):a.$wrapper);b.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&
						a.$nav.appendTo(b.appendNavigationTo&&d(b.appendNavigationTo).length?d(b.appendNavigationTo):a.$controls);b.buildStartStop&&a.$startStop.appendTo(b.appendStartStopTo&&d(b.appendStartStopTo).length?d(b.appendStartStopTo):a.$controls);a.runTimes=d(".anythingBase<?php echo $Rich_Web_Slider_Manager[0]->id; ?>").length;a.regex=b.hashTags?new RegExp("panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>"+a.runTimes+"-(\\d+)","i"):null;1===a.runTimes&&a.makeActive();a.flag=!1;b.autoPlayLocked&&(b.autoPlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>=!0);a.playing=b.autoPlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>;a.slideshow=!1;a.hovered=!1;a.panelSize=[];a.currentPage=a.targetPage=
						b.startPanel=parseInt(b.startPanel,10)||1;b.changeBy=parseInt(b.changeBy,10)||1;k=(b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>||"h").toLowerCase().match(/(h|v|f)/);k=b.vertical?"v":(k||["h"])[0];b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>="v"===k?"vertical":"f"===k?"fade":"horizontal";"f"===k&&(b.showMultiple=1,b.infiniteSlides=!1);a.adj=b.infiniteSlides?0:1;a.adjustMultiple=0;b.playRtl&&a.$wrapper.addClass("rtl");b.buildStartStop&&a.buildAutoPlay();b.buildArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&a.buildNextBackButtons();a.$lastPage=a.$targetPage=a.$currentPage;if(b.expand){if(!0===b.aspectRatio)b.aspectRatio=
						a.$el.width()/a.$el.height();else if("string"===typeof b.aspectRatio&&-1!==b.aspectRatio.indexOf(":")){var c=b.aspectRatio.split(":");b.aspectRatio=c[0]/c[1]}0<b.aspectRatio&&1<b.showMultiple&&(b.aspectRatio*=b.showMultiple)}a.updateSlider();b.expand&&(a.$window.css({width:"100%",height:"100%"}),a.checkResize());d.isFunction(d.easing[b.easing])||(b.easing="swing");b.pauseOnHover<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&a.$wrapper.hover(function(){a.playing&&(a.$el.trigger("slideshow_paused",a),a.clearTimer(!0))},function(){a.playing&&(a.$el.trigger("slideshow_unpaused",
						a),a.startStop(a.playing,!0))});a.slideControls(!1);a.$wrapper.bind("mouseenter mouseleave",function(b){d(this)["mouseenter"===b.type?"addClass":"removeClass"]("anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-hovered");a.hovered="mouseenter"===b.type?!0:!1;a.slideControls(a.hovered)});d(n).keyup(function(c){if(b.enableKeyboard&&a.$wrapper.hasClass("activeSlider")&&!c.target.tagName.match("TEXTAREA|INPUT|SELECT")&&("vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>||38!==c.which&&40!==c.which))switch(c.which){case 39:case 40:a.goForward();break;case 37:case 38:a.goBack()}});
						a.currentPage=(b.hashTags?a.gotoHash():"")||b.startPanel||1;a.gotoPage(a.currentPage,!1,null,-1);var f="slideshow_resized slideshow_paused slideshow_unpaused slide_init slide_begin slideshow_stop slideshow_start initialized swf_completed".split(" ");d.each("onSliderResize onShowPause onShowUnpause onSlideInit onSlideBegin onShowStop onShowStart onInitialized onSWFComplete".split(" "),function(c,h){d.isFunction(b[h])&&a.$el.bind(f[c],b[h])});d.isFunction(b.onSlideComplete)&&a.$el.bind("slide_complete",
						function(){setTimeout(function(){b.onSlideComplete(a)},0);return!1});a.initialized=!0;a.$el.trigger("initialized",a);a.startStop(b.autoPlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>)};a.updateSlider=function(){a.$el.children(".cloned").remove();a.navTextVisible="hidden"!==a.$nav.find("span:first").css("visibility");a.$nav.empty();a.currentPage=a.currentPage||1;a.$items=a.$el.children();a.pages=a.$items.length;a.dir="vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?"top":"left";b.showMultiple=parseInt(b.showMultiple,10)||1;b.navigationSize=!1===b.navigationSize?0:parseInt(b.navigationSize,
						10)||0;a.$items.find("a").unbind("focus.AnythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>").bind("focus.AnythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>",function(c){var f=d(this).closest(".panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>"),f=a.$items.index(f)+a.adj;a.$items.find(".focusedLink").removeClass("focusedLink");d(this).addClass("focusedLink");a.$window.scrollLeft(0).scrollTop(0);-1!==f&&(f>=a.currentPage+b.showMultiple||f<a.currentPage)&&(a.gotoPage(f),c.preventDefault())});1<b.showMultiple&&(b.showMultiple>a.pages&&(b.showMultiple=a.pages),a.adjustMultiple=b.infiniteSlides&&1<a.pages?0:b.showMultiple-
						1);a.$controls.add(a.$nav).add(a.$startStop).add(a.$forward).add(a.$back)[1>=a.pages?"hide":"show"]();1<a.pages&&a.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>();"fade"!==b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&b.infiniteSlides&&1<a.pages&&(a.$el.prepend(a.$items.filter(":last").clone().addClass("cloned")),1<b.showMultiple?a.$el.append(a.$items.filter(":lt("+b.showMultiple+")").clone().addClass("cloned multiple")):a.$el.append(a.$items.filter(":first").clone().addClass("cloned")),a.$el.find(".cloned").each(function(){d(this).find("a,input,textarea,select,button,area,form").attr({disabled:"disabled",
						name:""});d(this).find("[id]")[d.fn.addBack?"addBack":"andSelf"]().removeAttr("id")}));a.$items=a.$el.addClass(b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>).children().addClass("panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>");a.setDimensions();b.resizeContents?(a.$items.css("width",a.width),a.$wrapper.css("width",a.getDim(a.currentPage)[0]).add(a.$items).css("height",a.height)):a.$win.load(function(){a.setDimensions();k=a.getDim(a.currentPage);a.$wrapper.css({width:k[0],height:k[1]});a.setCurrentPage(a.currentPage,!1)});a.currentPage>a.pages&&(a.currentPage=a.pages);a.setCurrentPage(a.currentPage,
						!1);a.$nav.find("a").eq(a.currentPage-1).addClass("cur");"fade"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&(k=a.$items.eq(a.currentPage-1),b.resumeOnVisible?k.css({opacity:1,visibility:"visible"}).siblings().css({opacity:0,visibility:"hidden"}):(a.$items.css("opacity",1),k.fadeIn(0).siblings().fadeOut(0)))};a.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>=function(){if(b.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&1<a.pages){var c,f,e,h,g;a.$items.filter(":not(.cloned)").each(function(q){g=d("<li/>");e=q+1;f=(1===e?" first":"")+(e===a.pages?" last":"");c='<a class="panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>'+e+(a.navTextVisible?
						'"':" "+b.tooltipClass+'" title="@"')+' href="#"><span>@</span></a>';d.isFunction(b.navigationFormatter)?(h=b.navigationFormatter(e,d(this)),"string"===typeof h?g.html(c.replace(/@/g,h)):g=d("<li/>",h)):g.html(c.replace(/@/g,e));g.appendTo(a.$nav).addClass(f).data("index",e)});a.$nav.children("li").bind(b.clickControls,function(c){!a.flag&&b.enableNavigation&&(a.flag=!0,setTimeout(function(){a.flag=!1},100),a.gotoPage(d(this).data("index")));c.preventDefault()});b.navigationSize&&b.navigationSize<
						a.pages&&(a.$controls.find(".anythingNavWindow").length||a.$nav.before('<ul><li class="prev"><a href="#"><span>'+b.backText+"</span></a></li></ul>").after('<ul><li class="next"><a href="#"><span>'+b.forwardText+"</span></a></li></ul>").wrap('<div class="anythingNavWindow"></div>'),a.navWidths=a.$nav.find("li").map(function(){return d(this).outerWidth(!0)+Math.ceil(parseInt(d(this).find("span").css("left"),10)/2||0)}).get(),a.navLeft=1,a.$nav.width(a.navWidth(1,a.pages+1)+25),a.$controls.find(".anythingNavWindow").width(a.navWidth(1,
						b.navigationSize+1)).end().find(".prev,.next").bind(b.clickControls,function(c){a.flag||(a.flag=!0,setTimeout(function(){a.flag=!1},200),a.navWindow(a.navLeft+b.navigationSize*(d(this).is(".prev")?-1:1)));c.preventDefault()}))}};
						
						a.navWidth=function(b,f){var e,d=Math.max(b,f),g=0;for(e=Math.min(b,f);e<d;e++)g+=a.navWidths[e-1]||0;return g};a.navWindow=function(c){if(b.navigationSize&&b.navigationSize<a.pages&&a.navWidths){var f=a.pages-b.navigationSize+1;c=1>=c?1:1<c&&c<f?c:f;c!==a.navLeft&&(a.$controls.find(".anythingNavWindow").animate({scrollLeft:a.navWidth(1,
						c),width:a.navWidth(c,c+b.navigationSize)},{queue:!1,duration:b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>}),a.navLeft=c)}};a.buildNextBackButtons=function(){a.$forward=d('<span class="arrow forward"><a href="#"><span>'+b.forwardText+"</span></a></span>");a.$back=d('<span class="arrow back"><a href="#"><span>'+b.backText+"</span></a></span>");a.$back.bind(b.clickBackArrow,function(c){b.enableArrows&&!a.flag&&(a.flag=!0,setTimeout(function(){a.flag=!1},100),a.goBack());c.preventDefault()});document.querySelector('.anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?>').addEventListener('touchstart', handleTouchStart, false);document.querySelector('.anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?>').addEventListener('touchmove', handleTouchMove, false);var xDown = null;var yDown = null;function handleTouchStart(evt) {xDown = evt.touches[0].clientX;yDown = evt.touches[0].clientY};function handleTouchMove(evt) {if ( ! xDown || ! yDown ) { return};var xUp = evt.touches[0].clientX;var yUp = evt.touches[0].clientY;var xDiff = xDown - xUp;var yDiff = yDown - yUp;if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/if ( xDiff > 0 ) {function back(){b.enableArrows&&!a.flag&&(a.flag=!0,setTimeout(function(){a.flag=!1},100),a.goBack())};back()} else {function forward(){b.enableArrows&&!a.flag&&(a.flag=!0,setTimeout(function(){a.flag=!1},100),a.goForward())}forward()}} else { if ( yDiff > 0 ) { /* up swipe */  } else {  /* down swipe */}}/* reset values */xDown = null;yDown = null};function respThumb<?php echo $Rich_Web_Slider_Manager[0]->id;?>(){var clientWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?> = document.querySelector('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').clientWidth;var clientHeight<?php echo $Rich_Web_Slider_Manager[0]->id;?> = clientWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>*<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_H/$Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_W;?>;document.querySelector('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?> ul').style.maxHeight = clientHeight<?php echo $Rich_Web_Slider_Manager[0]->id;?> + "px";document.querySelector('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?> ul li').style.minWidth = clientWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>};respThumb<?php echo $Rich_Web_Slider_Manager[0]->id;?>();a.$forward.bind(b.clickForwardArrow,function(c){b.enableArrows&&!a.flag&&(a.flag=!0,setTimeout(function(){a.flag=!1},100),a.goForward());c.preventDefault()});a.$back.add(a.$forward).find("a").bind("focusin focusout",function(){d(this).toggleClass("hover")});a.$back.appendTo(b.appendBackTo&&d(b.appendBackTo).length?d(b.appendBackTo):a.$wrapper);a.$forward.appendTo(b.appendForwardTo&&d(b.appendForwardTo).length?d(b.appendForwardTo):a.$wrapper);a.arrowWidth=a.$forward.width();a.arrowRight=parseInt(a.$forward.css("right"),10);a.arrowLeft=parseInt(a.$back.css("left"),10)};a.buildAutoPlay=function(){a.$startStop.html("<span>"+(a.playing?b.stopText:b.startText)+"</span>").bind(b.clickSlideshow,function(c){b.enableStartStop&&(a.startStop(!a.playing),a.makeActive(),a.playing&&!b.autoPlayDelayed&&a.goForward(!0,b.playRtl));c.preventDefault()}).bind("focusin focusout",function(){d(this).toggleClass("hover")})};a.checkResize=function(b){var f=!!(n.hidden||n.webkitHidden||n.mozHidden||n.msHidden);clearTimeout(a.resizeTimer);a.resizeTimer=setTimeout(function(){var e=a.$outer.width(),d="BODY"===a.$outer[0].tagName?a.$win.height():a.$outer.height();f||a.lastDim[0]===e&&a.lastDim[1]===d||(a.setDimensions(),a.$el.trigger("slideshow_resized",a),a.gotoPage(a.currentPage,a.playing,null,-1));"undefined"===typeof b&&a.checkResize()},f?2E3:500)};a.setDimensions=function(){a.$wrapper.find(".anythingWindow<?php echo $Rich_Web_Slider_Manager[0]->id;?>, .anythingBase<?php echo $Rich_Web_Slider_Manager[0]->id; ?>, .panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>")[d.fn.addBack?"addBack":"andSelf"]().css({width:"",height:""});a.width=a.$el.width();a.height=a.$el.height();a.outerPad=[a.$wrapper.innerWidth()-a.$wrapper.width(),a.$wrapper.innerHeight()-a.$wrapper.height()];var c,f,e,h,g=0,m={width:"100%",height:"100%"},k=1<b.showMultiple&&"horizontal"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?a.width||a.$window.width()/b.showMultiple:a.$window.width(),n=1<b.showMultiple&&"vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?a.height/b.showMultiple||a.$window.height()/b.showMultiple:a.$window.height();if(b.expand){a.lastDim=[a.$outer.width(),a.$outer.height()];c=a.lastDim[0]-a.outerPad[0];f=a.lastDim[1]-a.outerPad[1];if(b.aspectRatio&&b.aspectRatio<
						a.width){var l=f*b.aspectRatio;l<c?c=l:(l=c/b.aspectRatio,l<f&&(f=l))}a.$wrapper.add(a.$window).css({width:c,height:f});a.height=f=1<b.showMultiple&&"vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?n:f;a.width=k=1<b.showMultiple&&"horizontal"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?c/b.showMultiple:c;a.$items.css({width:k,height:n})}a.$items.each(function(l){h=d(this);e=h.children();b.resizeContents?(c=a.width,f=a.height,h.css({width:c,height:f}),e.length&&("EMBED"===e[0].tagName&&e.attr(m),"OBJECT"===e[0].tagName&&e.find("embed").attr(m),1===e.length&&e.css(m))):
						("vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?(c=h.css("display","inline-block").width(),h.css("display","")):c=h.width()||a.width,1===e.length&&c>=k&&(c=e.width()>=k?k:e.width(),e.css("max-width",c)),h.css({width:c,height:""}),f=1===e.length?e.outerHeight(!0):h.height(),f<=a.outerPad[1]&&(f=a.height),h.css("height",f));a.panelSize[l]=[c,f,g];g+="vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?f:c});a.$el.css("vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?"height":"width","fade"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?a.width:g)};a.getDim=function(c){var f,e,d=a.width,g=a.height;if(1>a.pages||isNaN(c))return[d,
						g];c=b.infiniteSlides&&1<a.pages?c:c-1;if(e=a.panelSize[c])d=e[0]||d,g=e[1]||g;if(1<b.showMultiple)for(e=1;e<b.showMultiple;e++)f=c+e,"vertical"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?(d=Math.max(d,a.panelSize[f][0]),g+=a.panelSize[f][1]):(d+=a.panelSize[f][0],g=Math.max(g,a.panelSize[f][1]));return[d,g]};a.goForward=function(c,d){a.gotoPage(a[b.allowRapidChange?"targetPage":"currentPage"]+b.changeBy*(d?-1:1),c)};a.goBack=function(c){a.gotoPage(a[b.allowRapidChange?"targetPage":"currentPage"]-b.changeBy,c)};a.gotoPage=function(c,
						f,e,h){!0!==f&&(f=!1,a.startStop(!1),a.makeActive());/^[#|.]/.test(c)&&d(c).length&&(c=d(c).closest(".panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>").index()+a.adj);if(1!==b.changeBy){var g=a.pages-a.adjustMultiple;1>c&&(c=b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>?1:b.infiniteSlides?a.pages+c:b.showMultiple>1-c?1:g);c>a.pages?c=b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>?a.pages:b.showMultiple>1-c?1:c-=g:c>=g&&(c=g)}1>=a.pages||(a.$lastPage=a.$currentPage,"number"!==typeof c&&(c=parseInt(c,10)||b.startPanel,a.setCurrentPage(c)),f&&b.isVideoPlaying(a)||(b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&!b.infiniteSlides&&c>a.pages-b.showMultiple&&
						(c=a.pages-b.showMultiple+1),a.exactPage=c,c>a.pages+1-a.adj&&(c=b.infiniteSlides||b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>?a.pages:1),c<a.adj&&(c=b.infiniteSlides||b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>?1:a.pages),b.infiniteSlides||(a.exactPage=c),a.currentPage=c>a.pages?a.pages:1>c?1:a.currentPage,a.$currentPage=a.$items.eq(a.currentPage-a.adj),a.targetPage=0===c?a.pages:c>a.pages?1:c,a.$targetPage=a.$items.eq(a.targetPage-a.adj),h="undefined"!==typeof h?h:b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>,0<=h&&a.$el.trigger("slide_init",a),0<h&&!0===b.toggleControls&&a.slideControls(!0),
						b.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&a.setNavigation(a.targetPage),!0!==f&&(f=!1),(!f||b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&c===a.pages)&&a.startStop(!1),0<=h&&a.$el.trigger("slide_begin",a),setTimeout(function(d){var f,g=!0;b.allowRapidChange&&a.$wrapper.add(a.$el).add(a.$items).stop(!0,!0);b.resizeContents||(f=a.getDim(c),d={},a.$wrapper.width()!==f[0]&&(d.width=f[0]||a.width,g=!1),a.$wrapper.height()!==f[1]&&(d.height=f[1]||a.height,g=!1),g||a.$wrapper.filter(":not(:animated)").animate(d,{queue:!1,duration:0>h?0:h,easing:b.easing}));"fade"===
						b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?a.$lastPage[0]!==a.$targetPage[0]?(a.fadeIt(a.$lastPage,0,h),a.fadeIt(a.$targetPage,1,h,function(){a.endAnimation(c,e,h)})):a.endAnimation(c,e,h):(d={},d[a.dir]=-a.panelSize[b.infiniteSlides&&1<a.pages?c:c-1][2],"vertical"!==b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>||b.resizeContents||(d.width=f[0]),a.$el.filter(":not(:animated)").animate(d,{queue:!1,duration:0>h?0:h,easing:b.easing,complete:function(){a.endAnimation(c,e,h)}}))},parseInt(b.delayBeforeAnimate,10)||0)))};a.endAnimation=function(c,d,e){0===c?(a.$el.css(a.dir,"fade"===
						b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?0:-a.panelSize[a.pages][2]),c=a.pages):c>a.pages&&(a.$el.css(a.dir,"fade"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?0:-a.panelSize[1][2]),c=1);a.exactPage=c;a.setCurrentPage(c,!1);"verti"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&a.fadeIt(a.$items.not(":eq("+(c-a.adj)+")"),0,0);a.hovered||a.slideControls(!1);b.hashTags&&a.setHash(c);0<=e&&a.$el.trigger("slide_complete",a);"function"===typeof d&&d(a);b.autoPlayLocked&&!a.playing&&setTimeout(function(){a.startStop(!0)},b.resumeDelay-(b.autoPlayDelayed?b.delay:0))};a.fadeIt=function(a,f,e,h){var g=a.filter(":not(:animated)");
						a=0>e?0:e;if(b.resumeOnVisible)1===f&&g.css("visibility","visible"),g.fadeTo(a,f,function(){0===f&&g.css("visibility","hidden");d.isFunction(h)&&h()});else g[0===f?"fadeOut":"fadeIn"](a,h)};a.setCurrentPage=function(c,d){c=parseInt(c,10);if(!(1>a.pages||0===c||isNaN(c))){c>a.pages+1-a.adj&&(c=a.pages-a.adj);c<a.adj&&(c=1);b.buildArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&!b.infiniteSlides&&b.stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&(a.$forward[c===a.pages-a.adjustMultiple?"addClass":"removeClass"]("disabled"),a.$back[1===c?"addClass":"removeClass"]("disabled"),
						c===a.pages&&a.playing&&a.startStop());if(!d){var e=a.getDim(c);a.$wrapper.css({width:e[0],height:e[1]}).add(a.$window).scrollLeft(0).scrollTop(0);a.$el.css(a.dir,"fade"===b.mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>?0:-a.panelSize[b.infiniteSlides&&1<a.pages?c:c-1][2])}a.currentPage=c;a.$currentPage=a.$items.removeClass("activePage").eq(c-a.adj).addClass("activePage");b.buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&a.setNavigation(c)}};a.setNavigation=function(b){a.$nav.find(".cur").removeClass("cur").end().find("a").eq(b-1).addClass("cur")};a.makeActive=function(){a.$wrapper.hasClass("activeSlider")||
						(d(".activeSlider").removeClass("activeSlider"),a.$wrapper.addClass("activeSlider"))};a.gotoHash=function(){var c=l.location.hash,f=c.indexOf("&"),e=c.match(a.regex);null!==e||/^#&/.test(c)||/#!?\//.test(c)||/\=/.test(c)?null!==e&&(e=b.hashTags?parseInt(e[1],10):null):(c=c.substring(0,0<=f?f:c.length),e=d(c).length&&d(c).closest(".anythingBase<?php echo $Rich_Web_Slider_Manager[0]->id; ?>")[0]===a.el?a.$items.index(d(c).closest(".panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>"))+a.adj:null);return e};a.setHash=function(b){};a.slideControls=function(c){var d=c?"slideDown":"slideUp",e=c?0:b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>,h=c?b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>:0,g=c?1:0;c=c?0:1;b.toggleControls&&a.$controls.stop(!0,!0).delay(e)[d](b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>/2).delay(h);b.buildArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&b.toggleArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>&&(!a.hovered&&a.playing&&(c=1,g=0),a.$forward.stop(!0,!0).delay(e).animate({right:a.arrowRight+c*a.arrowWidth,opacity:g},b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>/2),a.$back.stop(!0,!0).delay(e).animate({left:a.arrowLeft+
						c*a.arrowWidth,opacity:g},b.animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>/2))};a.clearTimer=function(b){a.timer&&(l.clearInterval(a.timer),!b&&a.slideshow&&(a.$el.trigger("slideshow_stop",a),a.slideshow=!1))};a.startStop=function(c,d){!0!==c&&(c=!1);(a.playing=c)&&!d&&(a.$el.trigger("slideshow_start",a),a.slideshow=!0);b.buildStartStop&&(a.$startStop.toggleClass("playing",c).find("span").html(c?b.stopText:b.startText),"hidden"===a.$startStop.find("span").css("visibility")&&a.$startStop.addClass(b.tooltipClass).attr("title",c?b.stopText:
						b.startText));c?(a.clearTimer(!0),a.timer=l.setInterval(function(){n.hidden||n.webkitHidden||n.mozHidden||n.msHidden?b.autoPlayLocked||a.startStop():b.isVideoPlaying(a)?b.resumeOnVideoEnd||a.startStop():a.goForward(!0,b.playRtl)},b.delay)):a.clearTimer()};a.init()};d.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>.defaults={theme<?php echo $Rich_Web_Slider_Manager[0]->id;?>:"default",mode<?php echo $Rich_Web_Slider_Manager[0]->id;?>:"horiz",expand:!1,resizeContents:!0,showMultiple:!1,easing:"swing",buildArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>:!0,buildNavigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>:!0,buildStartStop:!0,toggleArrows<?php echo $Rich_Web_Slider_Manager[0]->id;?>:!1,toggleControls:!1,startText:"Start",stopText:"Stop",
						forwardText:"&raquo;",backText:"&laquo;",tooltipClass:"tooltip",enableArrows:!0,enableNavigation:!0,enableStartStop:!0,enableKeyboard:!0,startPanel:1,changeBy:1,hashTags:!0,infiniteSlides:!0,navigationFormatter:null,navigationSize:!1,autoPlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>:!1,autoPlayLocked:!1,autoPlayDelayed:!1,pauseOnHover<?php echo $Rich_Web_Slider_Manager[0]->id;?>:!0,stopAtEnd<?php echo $Rich_Web_Slider_Manager[0]->id;?>:!1,playRtl:!1,delay:3E3,resumeDelay:15E3,animationTime<?php echo $Rich_Web_Slider_Manager[0]->id;?>:600,delayBeforeAnimate:0,clickForwardArrow:"click",clickBackArrow:"click",clickControls:"click focusin",clickSlideshow:"click",allowRapidChange:!1,
						resumeOnVideoEnd:!0,resumeOnVisible:!0,isVideoPlaying:function(d){return!1}};d.fn.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>=function(m,l){return this.each(function(){var a,b=d(this).data("AnythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>");(typeof m).match("object|undefined")?b?b.updateSlider():new d.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>(this,m):/\d/.test(m)&&!isNaN(m)&&b?(a="number"===typeof m?m:parseInt(d.trim(m),10),1<=a&&a<=b.pages&&b.gotoPage(a,!1,l)):/^[#|.]/.test(m)&&d(m).length&&b.gotoPage(m,!1,l)})}})(jQuery,window,document);
					})( jQuery, window );
				</script>
				<script type='text/javascript'>
					(function( $, window, undefined ) {
						jQuery(document).ready(function(){
							jQuery("#RichWeb_TSL_slider<?php echo $Rich_Web_Slider_Manager[0]->id;?>").parent().parent().css("display","none");
							var slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
							var slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
							var countImgs<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.countImgs<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
							var arrW<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.arrW<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val(); 
							var imgSmW<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.imgSmW<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val(); 
							var imgSmH<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.imgSmH<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val(); 
							var autPLW<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.autPLW<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val(); 
							var autPLH<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.autPLH<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
							var slShType<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery('.slShType<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
							jQuery('.arrow').click(function(){ resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>(); })
							function resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>(){
								jQuery("#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>").css("max-height",Math.floor(jQuery("#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>").width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
								if(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()<=400 && slShType<?php echo $Rich_Web_Slider_Manager[0]->id;?>!='horizontal')
								{
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('min-width','100%');
								}
								else
								{
									// jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('min-width','100%');
									// jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('min-width',Math.floor(slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								}

								
								

								// jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('max-width',Math.floor(slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('min-height',Math.floor(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('max-height',Math.floor(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));

								// jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> li').css('height',Math.floor(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
								






								if(slShType<?php echo $Rich_Web_Slider_Manager[0]->id;?>=='fade')
								{
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('height',Math.floor(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('max-height',Math.floor(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('width',jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('width'));
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('max-width',jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('width'));
								}
								else if(slShType<?php echo $Rich_Web_Slider_Manager[0]->id;?>=='vertical')
								{
									// jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?> .panel<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('min-width',jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('width'));
								}
								jQuery('.contImgWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('max-width',jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('width'));
								jQuery('.contImgWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('max-height',Math.floor(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()*slHresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>/slWresp<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .thumbNav<?php echo $Rich_Web_Slider_Manager[0]->id;?> a').css('width',Math.floor(imgSmW<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .thumbNav<?php echo $Rich_Web_Slider_Manager[0]->id;?> a').css('height',Math.floor(imgSmH<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .thumbNav<?php echo $Rich_Web_Slider_Manager[0]->id;?> a span').css('width',Math.floor(imgSmW<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .thumbNav<?php echo $Rich_Web_Slider_Manager[0]->id;?> a span').css('height',Math.floor(imgSmH<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('height',Math.floor(imgSmH<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000+5));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('min-height','23px');
								if(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width()<=300)
								{
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('bottom','5px')
								}
								else
								{
									jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css('bottom','15px')
								}
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .arrow a').css('width',Math.floor(arrW<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .arrow a').css('height',Math.floor(arrW<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/1000));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?> .start-stop').css('width',Math.floor(autPLW<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()+100)));
								jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>-metallic .anythingControls<?php echo $Rich_Web_Slider_Manager[0]->id;?> .start-stop').css('height',Math.floor(autPLH<?php echo $Rich_Web_Slider_Manager[0]->id;?>*jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()/(jQuery('.anythingSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>').parent().width()+100)));
							}
							var array_thumbnail<?php echo $Rich_Web_Slider;?>=[];
							jQuery(".contImgWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>").each(function(){
								if( jQuery(this).attr("src") != "" ) { array_thumbnail<?php echo $Rich_Web_Slider;?>.push(jQuery(this).attr("src")); }
							})
							var y_thumbnail<?php echo $Rich_Web_Slider;?>=0;
							for(i=0;i<array_thumbnail<?php echo $Rich_Web_Slider;?>.length;i++)
							{
								jQuery("<img class='contImgWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>' />").attr('src', array_thumbnail<?php echo $Rich_Web_Slider;?>[i]).on("load",function(){
									y_thumbnail<?php echo $Rich_Web_Slider;?>++;
									if(y_thumbnail<?php echo $Rich_Web_Slider;?> == array_thumbnail<?php echo $Rich_Web_Slider;?>.length)
									{
										setTimeout(function(){
											jQuery("#RichWeb_TSL_slider<?php echo $Rich_Web_Slider_Manager[0]->id;?>").fadeIn(1000);
											jQuery("#RichWeb_TSL_slider<?php echo $Rich_Web_Slider_Manager[0]->id;?>").parent().parent().fadeIn(1000);
											jQuery("#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>").remove();
											resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>();
										},100)
									}
								})
							}

							jQuery(window).on("load resize",function(){
								resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>();
							})
							jQuery(window).resize(function(){ resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>(); })
							 resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>();
						})
					})( jQuery, window );
				</script>
				<script type="text/javascript">
					// (function( $, window, undefined ) {

						function resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>(el){
				    		el.style.maxHeight = el.clientWidth*56.25/100+"px";
				    		if(parseInt(el.style.maxHeight)>window.innerHeight){
				    			el.style.maxHeight = window.innerHeight+"px";
				    			el.style.maxWidth = window.innerHeight*16/9+"px";
				    			document.querySelector(".slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.add("center");
				    			document.querySelector(".counter<?php echo $Rich_Web_Slider_Manager[0]->id;?>").style.display = "none";
				    			document.querySelector(".thumbHeader<?php echo $Rich_Web_Slider_Manager[0]->id;?>").style.display = "none";
				    			document.querySelector(".rw_thumb_delete").style.display = "none";
				    			document.querySelector(".thumb_arrow_right").classList.add("right");
				    		}else{
				    			el.style.maxWidth = "100%";
				    			el.style.maxHeight = el.clientWidth*56.25/100+"px";
				    			document.querySelector(".slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.remove("center");
				    			document.querySelector(".counter<?php echo $Rich_Web_Slider_Manager[0]->id;?>").style.display = "inline-block";
				    			document.querySelector(".thumbHeader<?php echo $Rich_Web_Slider_Manager[0]->id;?>").style.display = "inline-block";
				    			document.querySelector(".rw_thumb_delete").style.display = "inline-block";
				    			document.querySelector(".thumb_arrow_right").classList.remove("right");
				    		}
				    	}

						var images<?php echo $Rich_Web_Slider_Manager[0]->id;?> = document.querySelectorAll(".contImgWidth<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
						var videos<?php echo $Rich_Web_Slider_Manager[0]->id;?> = [];
						var titeles<?php echo $Rich_Web_Slider_Manager[0]->id;?> = [];
						for(var i = 0; i < images<?php echo $Rich_Web_Slider_Manager[0]->id;?>.length; i++){
							videos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[i] = images<?php echo $Rich_Web_Slider_Manager[0]->id;?>[i].dataset.video;
							titeles<?php echo $Rich_Web_Slider_Manager[0]->id;?>[i] = images<?php echo $Rich_Web_Slider_Manager[0]->id;?>[i].getAttribute('title');
						}
						var count = 0;
						
						function creatPopup<?php echo $Rich_Web_Slider_Manager[0]->id;?>(vSrc,n){
							count = n;
							var thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?> = document.createElement("div");
							thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>.setAttribute("class","thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							document.body.appendChild(thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>);
							var thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?> = document.createElement("div");
							 thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>.setAttribute("class","thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							document.body.appendChild( thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>);
							var thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?> = document.createElement("img");
							thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>.setAttribute("class","thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>.setAttribute("src",images<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count].getAttribute("src"));
							thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>.setAttribute("onclick","plVideo('"+vSrc+"')");
							 thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>.appendChild(thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>);
							var thumbContentvIc = document.createElement("i");
							thumbContentvIc.setAttribute("class","vIcContent vIcContentPopup rich_web rich_web-play");
							thumbContentvIc.setAttribute("onclick","plVideo('"+vSrc+"')");
							 thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>.appendChild(thumbContentvIc);
							if(!vSrc) {
								thumbContentvIc.style.display = "none";
							}
							var thumbContentVideo = document.createElement("iframe");
							thumbContentVideo.setAttribute("class","thumbContentVideo<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							thumbContentVideo.setAttribute("src","");
							 thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>.appendChild(thumbContentVideo);
							thumbContentVideo.setAttribute("webkitAllowFullScreen","webkitAllowFullScreen");
							thumbContentVideo.setAttribute("mozallowfullscreen","mozallowfullscreen");
							thumbContentVideo.setAttribute("allowFullScreen","allowFullScreen");
							var slOptions = document.createElement('div');
							slOptions.setAttribute("class","slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							document.body.appendChild(slOptions);
							position( thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>,slOptions);
							var prev = document.createElement("i")
							prev.setAttribute("class","thumb_arrow thumb_arrow_left  rich_web rich_web-<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Pop_ArrType;?>-left");
							prev.setAttribute("onclick","prevThumb<?php echo $Rich_Web_Slider_Manager[0]->id;?>()");
							slOptions.appendChild(prev);
							var next = document.createElement("i")
							next.setAttribute("class","thumb_arrow thumb_arrow_right  rich_web rich_web-<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_Pop_ArrType;?>-right");
							next.setAttribute("onclick","nextThumb<?php echo $Rich_Web_Slider_Manager[0]->id;?>()");
							slOptions.appendChild(next);
							var span = document.createElement("span");
							var counter = document.createTextNode((count+1) + " of " + images<?php echo $Rich_Web_Slider_Manager[0]->id;?>.length);
							span.setAttribute("class","counter<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							span.appendChild(counter);
							slOptions.appendChild(span);
							var title = document.createElement("span");
							var text = document.createTextNode(titeles<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count]);
							title.setAttribute("class","thumbHeader<?php echo $Rich_Web_Slider_Manager[0]->id;?>");
							title.appendChild(text);
							slOptions.appendChild(title);
							var delIcon = document.createElement("i")
							delIcon.setAttribute("class","rw_thumb_delete rich_web rich_web-<?php echo $Rich_Web_Slider_Effect[0]->Rich_Web_Sl_TSL_CIT;?>");
							slOptions.appendChild(delIcon);
							resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>( thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>);
							window.onresize = function(event) {
							   resp<?php echo $Rich_Web_Slider_Manager[0]->id;?>( thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>);
							};
							setTimeout(function(){
								document.querySelector(".thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.add("thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>_anim");
								document.querySelector(".thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.add("thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>_anim");
								document.querySelector(".slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.add("slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>_anim")
							},100)

							function deletePopup(){
								document.querySelector(".thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.remove("thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>_anim");
								document.querySelector(".thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.remove("thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>_anim");
								document.querySelector(".slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>").classList.remove("slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>_anim");
								thumbContentVideo.style.display = "none";
								thumbContentVideo.setAttribute("src","");
								setTimeout(function(){
									document.querySelector(".thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>").remove();
									document.querySelector(".thumbContent<?php echo $Rich_Web_Slider_Manager[0]->id;?>").remove();
									document.querySelector(".slOptions<?php echo $Rich_Web_Slider_Manager[0]->id;?>").remove();	
								},300)
							}
							delIcon.onclick = function(){
								deletePopup();
							}
							thumbOverlay<?php echo $Rich_Web_Slider_Manager[0]->id;?>.onclick = function(){
								deletePopup();
							}
						}



						function position(cont,el){
							var smClientRect = cont.getBoundingClientRect();
							el.style.top = smClientRect.top + smClientRect.height + 40 + 'px';
							el.style.width = smClientRect.width + 'px';
						}

						function changeSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>(){
							document.querySelector(".thumbContentVideo<?php echo $Rich_Web_Slider_Manager[0]->id;?>").setAttribute("src","");
							document.querySelector(".thumbContentVideo<?php echo $Rich_Web_Slider_Manager[0]->id;?>").style.display = "none";
							
							document.querySelector(".thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>").setAttribute("src",images<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count].getAttribute("src"));
							document.querySelector(".thumbContentImg<?php echo $Rich_Web_Slider_Manager[0]->id;?>").setAttribute("onclick","plVideo('"+videos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count]+"')");
							document.querySelector(".vIcContentPopup").setAttribute("onclick","plVideo('"+videos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count]+"')");
							document.querySelector(".thumbHeader<?php echo $Rich_Web_Slider_Manager[0]->id;?>").innerText = titeles<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count];
							document.querySelector(".counter<?php echo $Rich_Web_Slider_Manager[0]->id;?>").innerText = (count+1) + " of " + images<?php echo $Rich_Web_Slider_Manager[0]->id;?>.length;
							videos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count] ? document.querySelector(".vIcContentPopup").style.display = 'inline' : document.querySelector(".vIcContentPopup").style.display = 'none'; 
							console.log(videos<?php echo $Rich_Web_Slider_Manager[0]->id;?>[count]);
						}

						function prevThumb<?php echo $Rich_Web_Slider_Manager[0]->id;?>(){
							count--;
							if(count == -1){
								count = images<?php echo $Rich_Web_Slider_Manager[0]->id;?>.length-1;
							}
							changeSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>()
						}


						function nextThumb<?php echo $Rich_Web_Slider_Manager[0]->id;?>(){
							count++;
							if(count === images<?php echo $Rich_Web_Slider_Manager[0]->id;?>.length){
								count = 0;
							}
							changeSlider<?php echo $Rich_Web_Slider_Manager[0]->id;?>()
						}

						function plVideo(src) {
							if(src){
								document.querySelector(".thumbContentVideo<?php echo $Rich_Web_Slider_Manager[0]->id;?>").setAttribute("src",src + "?rel=0&amp;autoplay=1");
								document.querySelector(".thumbContentVideo<?php echo $Rich_Web_Slider_Manager[0]->id;?>").style.display = "block";
							}
						}
					// })( jQuery, window );
				</script>