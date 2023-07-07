<script>
(function(a) {
    var r = a.fn.domManip,
        d = "_tmplitem",
        q = /^[^<]*(<[\w\W]+>)[^>]*$|\{\{\! /,
        b = {},
        f = {},
        e,
        p = {
            key: 0,
            data: {}
        },
        h = 0,
        c = 0,
        l = [];

    function g(e, d, g, i) {
        var c = {
            data: i || (d ? d.data : {}),
            _wrap: d ? d._wrap : null,
            tmpl: null,
            parent: d || null,
            nodes: [],
            calls: u,
            nest: w,
            wrap: x,
            html: v,
            update: t
        };
        e && a.extend(c, e, {
            nodes: [],
            parent: d
        });
        if (g) {
            c.tmpl = g;
            c._ctnt = c._ctnt || c.tmpl(a, c);
            c.key = ++h;
            (l.length ? f : b)[h] = c;
        }
        return c;
    }
    a.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(f, d) {
        a.fn[f] = function(n) {
            var g = [],
                i = a(n),
                k,
                h,
                m,
                l,
                j = this.length === 1 && this[0].parentNode;
            e = b || {};
            if (j && j.nodeType === 11 && j.childNodes.length === 1 && i.length === 1) {
                i[d](this[0]);
                g = this;
            } else {
                for (h = 0, m = i.length; h < m; h++) {
                    c = h;
                    k = (h > 0 ? this.clone(true) : this).get();
                    a.fn[d].apply(a(i[h]), k);
                    g = g.concat(k);
                }
                c = 0;
                g = this.pushStack(g, f, i.selector);
            }
            l = e;
            e = null;
            a.tmpl.complete(l);
            return g;
        };
    });
    a.fn.extend({
        tmpl: function(d, c, b) {
            return a.tmpl(this[0], d, c, b);
        },
        tmplItem: function() {
            return a.tmplItem(this[0]);
        },
        template: function(b) {
            return a.template(b, this[0]);
        },
        domManip: function(d, l, j) {
            if (d[0] && d[0].nodeType) {
                var f = a.makeArray(arguments),
                    g = d.length,
                    i = 0,
                    h;
                while (i < g && !(h = a.data(d[i++], "tmplItem")));
                if (g > 1) f[0] = [a.makeArray(d)];
                if (h && c)
                    f[2] = function(b) {
                        a.tmpl.afterManip(this, b, j);
                    };
                r.apply(this, f);
            } else r.apply(this, arguments);
            c = 0;
            !e && a.tmpl.complete(b);
            return this;
        },
    });
    a.extend({
        tmpl: function(d, h, e, c) {
            var j,
                k = !c;
            if (k) {
                c = p;
                d = a.template[d] || a.template(null, d);
                f = {};
            } else if (!d) {
                d = c.tmpl;
                b[c.key] = c;
                c.nodes = [];
                c.wrapped && n(c, c.wrapped);
                return a(i(c, null, c.tmpl(a, c)));
            }
            if (!d) return [];
            if (typeof h === "function") h = h.call(c || {});
            e && e.wrapped && n(e, e.wrapped);
            j = a.isArray(h) ?
                a.map(h, function(a) {
                    return a ? g(e, c, d, a) : null;
                }) :
                [g(e, c, d, h)];
            return k ? a(i(c, null, j)) : j;
        },
        tmplItem: function(b) {
            var c;
            if (b instanceof a) b = b[0];
            while (b && b.nodeType === 1 && !(c = a.data(b, "tmplItem")) && (b = b.parentNode));
            return c || p;
        },
        template: function(c, b) {
            if (b) {
                if (typeof b === "string") b = o(b);
                else if (b instanceof a) b = b[0] || {};
                if (b.nodeType) b = a.data(b, "tmpl") || a.data(b, "tmpl", o(b.innerHTML));
                return typeof c === "string" ? (a.template[c] = b) : b;
            }
            return c ? (typeof c !== "string" ? a.template(null, c) : a.template[c] || a.template(null,
                q.test(c) ? c : a(c))) : null;
        },
        encode: function(a) {
            return ("" + a).split("<").join("&lt;").split(">").join("&gt;").split('"').join("&#34;")
                .split("'").join("&#39;");
        },
    });
    a.extend(a.tmpl, {
        tag: {
            tmpl: {
                _default: {
                    $2: "null"
                },
                open: "if($notnull_1){_=_.concat($item.nest($1,$2));}"
            },
            wrap: {
                _default: {
                    $2: "null"
                },
                open: "$item.calls(_,$1,$2);_=[];",
                close: "call=$item.calls();_=call._.concat($item.wrap(call,_));"
            },
            each: {
                _default: {
                    $2: "$index, $value"
                },
                open: "if($notnull_1){$.each($1a,function($2){with(this){",
                close: "}});}"
            },
            if: {
                open: "if(($notnull_1) && $1a){",
                close: "}"
            },
            else: {
                _default: {
                    $1: "true"
                },
                open: "}else if(($notnull_1) && $1a){"
            },
            html: {
                open: "if($notnull_1){_.push($1a);}"
            },
            "=": {
                _default: {
                    $1: "$data"
                },
                open: "if($notnull_1){_.push($.encode($1a));}"
            },
            "!": {
                open: ""
            },
        },
        complete: function() {
            b = {};
        },
        afterManip: function(f, b, d) {
            var e = b.nodeType === 11 ? a.makeArray(b.childNodes) : b.nodeType === 1 ? [b] : [];
            d.call(f, b);
            m(e);
            c++;
        },
    });

    function i(e, g, f) {
        var b,
            c = f ?
            a.map(f, function(a) {
                return typeof a === "string" ? (e.key ? a.replace(/(<\w+)(?=[\s>])(?![^>]*_tmplitem)([^>]*)/g,
                    "$1 " + d + '="' + e.key + '" $2') : a) : i(a, e, a._ctnt);
            }) :
            e;
        if (g) return c;
        c = c.join("");
        c.replace(/^\s*([^<\s][^<]*)?(<[\w\W]+>)([^>]*[^>\s])?\s*$/, function(f, c, e, d) {
            b = a(e).get();
            m(b);
            if (c) b = j(c).concat(b);
            if (d) b = b.concat(j(d));
        });
        return b ? b : j(c);
    }

    function j(c) {
        var b = document.createElement("div");
        b.innerHTML = c;
        return a.makeArray(b.childNodes);
    }

    function o(b) {
        return new Function(
            "jQuery",
            "$item",
            "var $=jQuery,call,_=[],$data=$item.data;with($data){_.push('" +
            a
            .trim(b)
            .replace(/([\\'])/g, "\\$1")
            .replace(/[\r\t\n]/g, " ")
            .replace(/\$\{([^\}]*)\}/g, "{{= $1}}")
            .replace(
                /\{\{(\/?)(\w+|.)(?:\(((?:[^\}]|\}(?!\}))*?)?\))?(?:\s+(.*?)?)?(\(((?:[^\}]|\}(?!\}))*?)\))?\s*\}\}/g,
                function(m, l, j, d, b, c, e) {
                    var i = a.tmpl.tag[j],
                        h,
                        f,
                        g;
                    if (!i) throw "Template command not found: " + j;
                    h = i._default || [];
                    if (c && !/\w$/.test(b)) {
                        b += c;
                        c = "";
                    }
                    if (b) {
                        b = k(b);
                        e = e ? "," + k(e) + ")" : c ? ")" : "";
                        f = c ? (b.indexOf(".") > -1 ? b + c : "(" + b + ").call($item" + e) : b;
                        g = c ? f : "(typeof(" + b + ")==='function'?(" + b + ").call($item):(" + b + "))";
                    } else g = f = h.$1 || "null";
                    d = k(d);
                    return (
                        "');" +
                        i[l ? "close" : "open"]
                        .split("$notnull_1")
                        .join(b ? "typeof(" + b + ")!=='undefined' && (" + b + ")!=null" : "true")
                        .split("$1a")
                        .join(g)
                        .split("$1")
                        .join(f)
                        .split("$2")
                        .join(
                            d ?
                            d.replace(/\s*([^\(]+)\s*(\((.*?)\))?/g, function(d, c, b, a) {
                                a = a ? "," + a + ")" : b ? ")" : "";
                                return a ? "(" + c + ").call($item" + a : d;
                            }) :
                            h.$2 || ""
                        ) +
                        "_.push('"
                    );
                }) +
            "');}return _;"
        );
    }

    function n(c, b) {
        c._wrap = i(c, true, a.isArray(b) ? b : [q.test(b) ? b : a(b).html()]).join("");
    }

    function k(a) {
        return a ? a.replace(/\\'/g, "'").replace(/\\\\/g, "\\") : null;
    }

    function s(b) {
        var a = document.createElement("div");
        a.appendChild(b.cloneNode(true));
        return a.innerHTML;
    }

    function m(o) {
        var n = "_" + c,
            k,
            j,
            l = {},
            e,
            p,
            i;
        for (e = 0, p = o.length; e < p; e++) {
            if ((k = o[e]).nodeType !== 1) continue;
            j = k.getElementsByTagName("*");
            for (i = j.length - 1; i >= 0; i--) m(j[i]);
            m(k);
        }

        function m(j) {
            var p,
                i = j,
                k,
                e,
                m;
            if ((m = j.getAttribute(d))) {
                while (i.parentNode && (i = i.parentNode).nodeType === 1 && !(p = i.getAttribute(d)));
                if (p !== m) {
                    i = i.parentNode ? (i.nodeType === 11 ? 0 : i.getAttribute(d) || 0) : 0;
                    if (!(e = b[m])) {
                        e = f[m];
                        e = g(e, b[i] || f[i], null, true);
                        e.key = ++h;
                        b[h] = e;
                    }
                    c && o(m);
                }
                j.removeAttribute(d);
            } else if (c && (e = a.data(j, "tmplItem"))) {
                o(e.key);
                b[e.key] = e;
                i = a.data(j.parentNode, "tmplItem");
                i = i ? i.key : 0;
            }
            if (e) {
                k = e;
                while (k && k.key != i) {
                    k.nodes.push(j);
                    k = k.parent;
                }
                delete e._ctnt;
                delete e._wrap;
                a.data(j, "tmplItem", e);
            }

            function o(a) {
                a = a + n;
                e = l[a] = l[a] || g(e, b[e.parent.key + n] || e.parent, null, true);
            }
        }
    }

    function u(a, d, c, b) {
        if (!a) return l.pop();
        l.push({
            _: a,
            tmpl: d,
            item: this,
            data: c,
            options: b
        });
    }

    function w(d, c, b) {
        return a.tmpl(a.template(d), c, b, this);
    }

    function x(b, d) {
        var c = b.options || {};
        c.wrapped = d;
        return a.tmpl(a.template(b.tmpl), b.data, c, b.item);
    }

    function v(d, c) {
        var b = this._wrap;
        return a.map(a(a.isArray(b) ? b.join("") : b).filter(d || "*"), function(a) {
            return c ? a.innerText || a.textContent : a.outerHTML || s(a);
        });
    }

    function t() {
        var b = this.nodes;
        a.tmpl(null, null, null, this).insertBefore(b[0]);
        a(b).remove();
    }
})(jQuery);
</script>


<script>
(function(window, $, undefined) {
    var y;
    $.Slideshow = function(options, element) {
        this.$el = $(element);
        this.$preloader = $('<div class="cn-loading">Loading...</div>');
        // images
        this.$images = this.$el.find('div.cn-images > img').hide();
        // total number of images
        this.imgCount = this.$images.length;
        this.isAnimating = false;
        this._init(options);
        console.log(this.imgCount);
    };
    $.Slideshow.defaults = {
        current: 0
    };
    $.Slideshow.prototype = {
        _init: function(options) {
            this.options = $.extend(true, {}, $.Slideshow.defaults, options);
            // validate options
            this._validate();
            this.current = this.options.current;
            this.$preloader.appendTo(this.$el);
            var instance = this;
            this._preloadImages(function() {
                instance.$preloader.hide();
                instance.$images.eq(instance.current).show();
                instance.bar = new $.NavigationBar(instance.imgCount, instance._getStatus());
                instance.bar.getElement().appendTo(instance.$el);
                instance._initEvents();
            });
            y = this.current
        },
        _preloadImages: function(callback) {
            var loaded = 0,
                instance = this;
            this.$images.each(function(i) {
                var $img = $(this);
                // large image
                $('<img />').load(function() {
                    // ++loaded;
                    // if( loaded === instance.imgCount * 2 ) 
                    callback.call();
                }).attr('src', $img.attr('src'));
                // thumb
                $('<img />').load(function() {
                    // ++loaded;
                    // if( loaded === instance.imgCount * 2 ) 
                    callback.call();
                }).attr('src', $img.data('thumb'));
            });
        },
        _validate: function() {
            if (this.options.current < 0 || this.options.current >= this.imgCount)
                this.options.current = 0;
        },
        _getStatus: function() {
            var $currentImg = this.$images.eq(this.current),
                $nextImg, $prevImg;
            (this.current === 0) ? $prevImg = this.$images.eq(this.imgCount - 1): $prevImg = $currentImg
                .prev();
            (this.current === this.imgCount - 1) ? $nextImg = this.$images.eq(0): $nextImg = $currentImg
                .next();
            return {
                prevSource: $prevImg.data('thumb'),
                nextSource: $nextImg.data('thumb'),
                prevTitle: $prevImg.attr('title'),
                currentTitle: $currentImg.attr('title'),
                nextTitle: $nextImg.attr('title')
            };
        },
        _initEvents: function() {
            var instance = this;
            var count = 0;


            this.bar.$navPrev.bind('click.slideshow', function(event) {
                instance._navigate('prev');
                return false;
            });

            this.bar.$navNext.bind('click.slideshow', function(event) {
                instance._navigate('next');
                return false;
            });

            document.onkeydown = checkKey;

            function checkKey(e) {

                e = e || window.event;

                if (e.keyCode == '37') {
                    instance._navigate('prev');
                    document.querySelector('.rw_iframe_circle').style.display = "none";
                    document.querySelector(".rw_icons_circle").style.display = "none";
                    document.querySelector('.rw_iframe_circle').setAttribute("src", "");
                } else if (e.keyCode == '39') {
                    instance._navigate('next');
                    document.querySelector('.rw_iframe_circle').style.display = "none";
                    document.querySelector(".rw_icons_circle").style.display = "none";
                    document.querySelector('.rw_iframe_circle').setAttribute("src", "");
                }

            }

            document.querySelector('.wrapper').addEventListener('touchstart', handleTouchStart, false);
            document.querySelector('.wrapper').addEventListener('touchmove', handleTouchMove, false);

            var xDown = null;
            var yDown = null;



            function handleTouchStart(evt) {
                xDown = evt.touches[0].clientX;
                yDown = evt.touches[0].clientY;
            };



            function handleTouchMove(evt) {
                if (!xDown || !yDown) {
                    return;
                }

                var xUp = evt.touches[0].clientX;
                var yUp = evt.touches[0].clientY;

                var xDiff = xDown - xUp;
                var yDiff = yDown - yUp;

                if (Math.abs(xDiff) > Math.abs(yDiff)) {
                    /*most significant*/
                    if (xDiff > 0) {
                        instance._navigate('prev');
                    } else {
                        instance._navigate('next');
                    }
                } else {
                    if (yDiff > 0) {
                        /* up swipe */
                    } else {
                        /* down swipe */
                    }
                }
                /* reset values */
                xDown = null;
                yDown = null;
            };
        },
        _navigate: function(dir) {
            if (this.isAnimating) return false;
            this.isAnimating = true;
            var $curr = this.$images.eq(this.current).css('z-index', 998),
                instance = this;
            (dir === 'prev') ?
            (this.current === 0) ? this.current = this.imgCount - 1: --this.current: (this.current === this
                .imgCount - 1) ? this.current = 0 : ++this.current;

            var icon = document.querySelector(".circleVIcon");
            var el = document.querySelectorAll(".rw_circle_img")[this.current];

            if (!el.getAttribute("onclick")) {
                icon.style.display = "none";
            } else {
                icon.style.display = "inline";
            }
            y = this.current;

            this.$images.eq(this.current).show();
            $curr.fadeOut(400, function() {
                $(this).css('z-index', 1);
                instance.isAnimating = false;
            });
            this.bar.set(this._getStatus());

        }
    };
    document.querySelector(".circleVIcon").onclick = function() {
        var el = document.querySelectorAll(".rw_circle_img")[y];
        var vSrc = el.getAttribute("data-video");
        document.querySelector('.rw_iframe_circle').style.display = "block";
        document.querySelector('.rw_iframe_circle').setAttribute("src", vSrc + "?rel=0&amp;autoplay=1");
        setTimeout(function() {
            document.querySelector(".rw_icons_circle").style.display = "inline";
        }, 1000)
    }

    $.NavigationBar = function(imgCount, status) {
        this._init(imgCount, status);
    };
    $.NavigationBar.prototype = {
        _init: function(imgCount, status) {
            this.$el = $('#barTmpl').tmpl(status);
            // navigation
            this.$navPrev = this.$el.find('a.cn-nav-prev');
            this.$thumbPrev = this.$navPrev.children('div');
            this.$navNext = this.$el.find('a.cn-nav-next');
            this.$thumbNext = this.$navNext.children('div');
            // navigation status
            this.$statusPrev = this.$el.find('div.cn-nav-content-prev > h3');
            this.$statusCurrent = this.$el.find('div.cn-nav-content-current > h2');
            this.$statusNext = this.$el.find('div.cn-nav-content-next > h3');
            // just show current image description if only one image
            if (imgCount <= 1) {
                this.$navPrev.hide();
                this.$navNext.hide();
                this.$statusPrev.parent().hide();
                this.$statusNext.parent().hide();
            }
        },
        getElement: function() {
            return this.$el;
        },
        // set the current, previous and next descriptions, and also the previous and next thumbs
        set: function(status) {
            this.$thumbPrev.css('background-image', 'url(' + status.prevSource + ')');
            this.$thumbNext.css('background-image', 'url(' + status.nextSource + ')');
            this.$statusPrev.text(status.prevTitle);
            this.$statusCurrent.text(status.currentTitle);
            this.$statusNext.text(status.nextTitle);
        }
    };
    var logError = function(message) {
        if (this.console) {
            console.error(message);
        }
    };
    $.fn.slideshow = function(options) {
        if (typeof options === 'string') {
            var args = Array.prototype.slice.call(arguments, 1);
            this.each(function() {
                var instance = $.data(this, 'slideshow');
                if (!instance) {
                    logError("cannot call methods on slideshow prior to initialization; " +
                        "attempted to call method '" + options + "'");
                    return;
                }
                if (!$.isFunction(instance[options]) || options.charAt(0) === "_") {
                    logError("no such method '" + options + "' for slideshow instance");
                    return;
                }
                instance[options].apply(instance, args);
            });
        } else {
            this.each(function() {
                var instance = $.data(this, 'slideshow');
                if (!instance) {
                    $.data(this, 'slideshow', new $.Slideshow(options, this));
                }
            });
        }
        return this;
    };
})(window, jQuery);
</script>


<script type="text/javascript">
jQuery(function() {
    jQuery('#cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').slideshow(
        <?php echo $Rich_Web_Slider_Manager[0]->id;?>);
});
</script>
<script>
jQuery(document).ready(function() {
    var respSLWidth_<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(
        '.respSLWidth_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
    var respSLHeight_<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(
        '.respSLHeight_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();
    var respSLTitleFS_<?php echo $Rich_Web_Slider_Manager[0]->id;?> = jQuery(
        '.respSLTitleFS_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').val();

    function resp() {
        jQuery(
                '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>,#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>')
            .css('height', Math.floor(jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>')
                .width() * respSLHeight_<?php echo $Rich_Web_Slider_Manager[0]->id;?> /
                respSLWidth_<?php echo $Rich_Web_Slider_Manager[0]->id;?>));
        if (jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() <= 500) {
            jQuery(".cn-nav-next div").addClass("cn-nav-none_div");
            jQuery(".cn-nav-prev div").addClass("cn-nav-none_div");
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content h3')
                .css('font-size', Math.floor(respSLTitleFS_<?php echo $Rich_Web_Slider_Manager[0]->id;?> *
                    jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() / (jQuery(
                        '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() + 150)));
            jQuery(
                    '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content .cn-nav-content-current h2')
                .css('font-size', Math.floor((parseInt(
                    respSLTitleFS_<?php echo $Rich_Web_Slider_Manager[0]->id;?>) + 5) * jQuery(
                    '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() / (jQuery(
                    '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() + 100)));
            jQuery('#nCl').css('display', 'none');
            jQuery('#pCl').css('display', 'none');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar').addClass(
                'cn-bar-anim_<?php echo $Rich_Web_Slider_Manager[0]->id;?>');
            jQuery('.cn-nav-content_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').addClass(
                'cn-nav-content-anim_<?php echo $Rich_Web_Slider_Manager[0]->id;?>');
            jQuery('.cn-nav-content-prev, .cn-nav-content-next').css('display', 'none');
            jQuery(
                    '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content .cn-nav-content-current h2')
                .css('margin-top', Math.floor(respSLHeight_<?php echo $Rich_Web_Slider_Manager[0]->id;?> *
                    jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() / 2000));
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a').hover(
                function() {
                    jQuery(this).find('span').css({
                        'width': '46px',
                        'height': '46px',
                        'margin': '-23px 0 0 -23px'
                    })
                    jQuery(this).find('div').css({
                        'width': '36px',
                        'height': '36px',
                        'margin': '-18px 0 0 -18px'
                    })
                },
                function() {
                    jQuery(this).find('span').css({
                        'width': '46px',
                        'height': '46px',
                        'margin': '-23px 0 0 -23px'
                    })
                    jQuery(this).find('div').css({
                        'width': '0px',
                        'height': '0px',
                        'margin': '0px 0 0 0px'
                    })
                })
        } else {
            jQuery('#nCl').css('display', 'block');
            jQuery('#pCl').css('display', 'block');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar').removeClass(
                'cn-bar-anim_<?php echo $Rich_Web_Slider_Manager[0]->id;?>');
            jQuery('.cn-nav-content_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').removeClass(
                'cn-nav-content-anim_<?php echo $Rich_Web_Slider_Manager[0]->id;?>');
            jQuery('.cn-nav-content-prev, .cn-nav-content-next').css('display', 'block');
            jQuery(
                    '.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content .cn-nav-content-current h2')
                .css('margin-top', '10px')
        }
        if (jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').width() <= 300) {
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a.cn-nav-prev')
                .css('left', '0px');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a.cn-nav-next')
                .css('right', '0px');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content')
                .addClass('cn-nav-content-anim2_<?php echo $Rich_Web_Slider_Manager[0]->id;?>');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css("max-width",
                "calc(100% - 46px)");
        } else {
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a.cn-nav-prev')
                .css('left', '35px');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav a.cn-nav-next')
                .css('right', '35px');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?> .cn-bar .cn-nav-content')
                .removeClass('cn-nav-content-anim2_<?php echo $Rich_Web_Slider_Manager[0]->id;?>');
            jQuery('.cn-slideshow_<?php echo $Rich_Web_Slider_Manager[0]->id;?>').css("max-width", "100%");
        }
    }
    var array_circle<?php echo $Rich_Web_Slider;?> = [];
    jQuery(".rw_circle_img<?php echo $Rich_Web_Slider_Manager[0]->id;?>").each(function() {
        if (jQuery(this).attr("src") != "") {
            array_circle<?php echo $Rich_Web_Slider;?>.push(jQuery(this).attr("src"));
        }
    })
    var y_circle<?php echo $Rich_Web_Slider;?> = 0;
    for (i = 0; i < array_circle<?php echo $Rich_Web_Slider;?>.length; i++) {
        jQuery("<img class='RW_Fashion_IMG<?php echo $Rich_Web_Slider_Manager[0]->id;?>' />").attr('src',
            array_circle<?php echo $Rich_Web_Slider;?>[i]).on("load", function() {
            y_circle<?php echo $Rich_Web_Slider;?>++;
            if (y_circle<?php echo $Rich_Web_Slider;?> == array_circle<?php echo $Rich_Web_Slider;?>
                .length) {
                jQuery(".wrapper<?php echo $Rich_Web_Slider_Manager[0]->id;?>").fadeIn(1000);
                jQuery("#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider_Manager[0]->id;?>")
                    .remove();
            }
        })
    }
    resp();
    jQuery(window).resize(function() {
        resp();
    })
    jQuery(window).load(function() {
        resp();
    })
})
</script>
<script type="text/javascript">
function rw_circle_video_cl<?php echo $Rich_Web_Slider_Manager[0]->id;?>(vSrc, el) {
    document.querySelector('.rw_iframe_circle').style.display = "block";
    document.querySelector('.rw_iframe_circle').setAttribute("src", vSrc + "?rel=0&amp;autoplay=1");
    setTimeout(function() {
        document.querySelector(".rw_icons_circle").style.display = "inline";
    }, 1000)
}
document.querySelector(".rw_icons_circle").onclick = function() {
    document.querySelector('.rw_iframe_circle').style.display = "none";
    document.querySelector(".rw_icons_circle").style.display = "none";
    document.querySelector('.rw_iframe_circle').setAttribute("src", "");
}
</script>