<script>
var Rich_Web_AnSL_ET<?php echo $Rich_Web_Slider;?> = parseInt(jQuery(".Rich_Web_AnSL_ET<?php echo $Rich_Web_Slider;?>")
    .val());
var Rich_Web_AnSL_SSh<?php echo $Rich_Web_Slider;?> = jQuery(".Rich_Web_AnSL_SSh<?php echo $Rich_Web_Slider;?>").val();
var Rich_Web_AnSL_SShChT<?php echo $Rich_Web_Slider;?> = parseInt(jQuery(
    ".Rich_Web_AnSL_SShChT<?php echo $Rich_Web_Slider;?>").val());
var animateEffect<?php echo $Rich_Web_Slider;?> = Rich_Web_AnSL_ET<?php echo $Rich_Web_Slider;?>;
var CountShort<?php echo $Rich_Web_Slider;?> = parseInt(jQuery(".CountShort<?php echo $Rich_Web_Slider;?>").val());
var count<?php echo $Rich_Web_Slider;?> = 1;
var y_y<?php echo $Rich_Web_Slider;?> = false;
var zIndex<?php echo $Rich_Web_Slider;?> = 0;
var thumbCount<?php echo $Rich_Web_Slider;?> = 1;
var anim_over<?php echo $Rich_Web_Slider;?> = 0;
var array<?php echo $Rich_Web_Slider;?> = [];
jQuery(".RW_ANMSL_Image<?php echo $Rich_Web_Slider;?>").each(function() {
    if (jQuery(this).attr("src") != "") {
        array<?php echo $Rich_Web_Slider;?>.push(jQuery(this).attr("src"));
    }
})
var y<?php echo $Rich_Web_Slider;?> = 0;
var Rich_Web_AnSL_H = parseInt(jQuery(".Rich_Web_AnSL_H<?php echo $Rich_Web_Slider;?>").val());

function resp<?php echo $Rich_Web_Slider;?>() {
    jQuery(".cd-slider-wrapper<?php echo $Rich_Web_Slider;?>,#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>")
        .css("height", Math.floor(Rich_Web_AnSL_H * jQuery(".cd-slider-wrapper<?php echo $Rich_Web_Slider;?>").width() /
            1000));
}
jQuery(window).resize(function() {
    resp<?php echo $Rich_Web_Slider;?>();
})
for (i = 0; i < array<?php echo $Rich_Web_Slider;?>.length; i++) {
    jQuery("<img class='RW_ANMSL_Image<?php echo $Rich_Web_Slider;?>' />").attr('src',
        array<?php echo $Rich_Web_Slider;?>[i]).on("load", function() {
        y<?php echo $Rich_Web_Slider;?>++;
        if (y<?php echo $Rich_Web_Slider;?> == array<?php echo $Rich_Web_Slider;?>.length) {
            jQuery("#RW_Load_Content_Navigation<?php echo $Rich_Web_Slider;?>").remove();
            jQuery(".cd-slider-wrapper<?php echo $Rich_Web_Slider;?>").fadeIn(1000);
            jQuery(".cd-slider-navigation<?php echo $Rich_Web_Slider;?>").css("display", "block");
            jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?>").css("display", "block");
            jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>").css("borderRadius", "0% 0% 0% 0%");
            jQuery('.RW_Title<?php echo $Rich_Web_Slider;?>').hide();
            jQuery('.RW_Title_Ef<?php echo $Rich_Web_Slider;?>1').show();
            if (animateEffect<?php echo $Rich_Web_Slider;?> == 1 ||
                animateEffect<?php echo $Rich_Web_Slider;?> == 2 ||
                animateEffect<?php echo $Rich_Web_Slider;?> == 3 ||
                animateEffect<?php echo $Rich_Web_Slider;?> == 4 ||
                animateEffect<?php echo $Rich_Web_Slider;?> == 5) {
                anim_over<?php echo $Rich_Web_Slider;?> = 300;
            } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 14) {
                anim_over<?php echo $Rich_Web_Slider;?> = 0;
            } else {
                anim_over<?php echo $Rich_Web_Slider;?> = 1000;
            }
            jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>").addClass("RW_Im_An_Sl_RAnim" +
                animateEffect<?php echo $Rich_Web_Slider;?>);
            jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>1").removeClass("RW_Im_An_Sl_RAnim" +
                animateEffect<?php echo $Rich_Web_Slider;?>);

            function nextAnim<?php echo $Rich_Web_Slider;?>() {
                jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?> li").removeClass("selected");
                jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?> li").eq(
                    count<?php echo $Rich_Web_Slider;?> - 1).addClass("selected");
                if (animateEffect<?php echo $Rich_Web_Slider;?> == 1) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "0% 0% 0% 100%");
                } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 2) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "100% 0% 0% 0%");
                } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 3) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "100% 0% 0% 100%");
                } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 4) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "100% 100% 0% 0%");
                }
                jQuery('.RW_Title_Ef<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .slideDown(anim_over<?php echo $Rich_Web_Slider;?>);
                jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>).css(
                    "z-index", zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery(".cd-slider-navigation<?php echo $Rich_Web_Slider;?> li").css("z-index",
                    zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?>").css("z-index",
                    zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery(".RW_Title<?php echo $Rich_Web_Slider;?>").css("z-index",
                    zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .removeClass("RW_Im_An_Sl_RAnim" + animateEffect<?php echo $Rich_Web_Slider;?>);
                jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .addClass("RW_Im_An_Sl_AddAnim" + animateEffect<?php echo $Rich_Web_Slider;?>);
                if (animateEffect<?php echo $Rich_Web_Slider;?> == 1 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 2 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 3 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 12 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 13) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>").addClass("RW_Im_An_Sl_right");
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>").removeClass("RW_Im_An_Sl_left");
                }
                setTimeout(function() {
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>').removeClass(
                        "RW_Im_An_Sl_AddAnim" + animateEffect<?php echo $Rich_Web_Slider;?>);
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>').addClass("RW_Im_An_Sl_RAnim" +
                        animateEffect<?php echo $Rich_Web_Slider;?>);
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' +
                        count<?php echo $Rich_Web_Slider;?>).removeClass("RW_Im_An_Sl_RAnim" +
                        animateEffect<?php echo $Rich_Web_Slider;?>);
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' +
                        count<?php echo $Rich_Web_Slider;?>).addClass("RW_Im_An_Sl_AddAnim" +
                        animateEffect<?php echo $Rich_Web_Slider;?>);
                }, anim_over<?php echo $Rich_Web_Slider;?>)
                thumbCount<?php echo $Rich_Web_Slider;?> = count<?php echo $Rich_Web_Slider;?>;
                y_y<?php echo $Rich_Web_Slider;?> = true;
                setTimeout(function() {
                    y_y<?php echo $Rich_Web_Slider;?> = false;
                }, 500)
            }

            function prevAnim<?php echo $Rich_Web_Slider;?>() {
                jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?> li").removeClass("selected");
                jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?> li").eq(
                    count<?php echo $Rich_Web_Slider;?> - 1).addClass("selected");
                if (animateEffect<?php echo $Rich_Web_Slider;?> == 1) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "0% 0% 100% 0%");
                } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 2) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "0% 100% 0% 0%");
                } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 3) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "0% 100% 100% 0%");
                } else if (animateEffect<?php echo $Rich_Web_Slider;?> == 4) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>" + count<?php echo $Rich_Web_Slider;?>)
                        .css("borderRadius", "0% 0% 100% 100%");
                }
                jQuery('.RW_Title_Ef<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .slideDown(anim_over<?php echo $Rich_Web_Slider;?>);
                jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>).css(
                    "z-index", zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery(".cd-slider-navigation<?php echo $Rich_Web_Slider;?> li").css("z-index",
                    zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery(".cd-slider-controls<?php echo $Rich_Web_Slider;?>").css("z-index",
                    zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery(".RW_Title<?php echo $Rich_Web_Slider;?>").css("z-index",
                    zIndex<?php echo $Rich_Web_Slider;?>);
                jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .addClass("RW_Im_An_Sl_AddAnim" + animateEffect<?php echo $Rich_Web_Slider;?>);
                jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .removeClass("RW_Im_An_Sl_RAnim" + animateEffect<?php echo $Rich_Web_Slider;?>);
                if (animateEffect<?php echo $Rich_Web_Slider;?> == 1 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 2 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 3 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 12 ||
                    animateEffect<?php echo $Rich_Web_Slider;?> == 13) {
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>").addClass("RW_Im_An_Sl_left");
                    jQuery(".RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>").removeClass("RW_Im_An_Sl_right");
                }
                setTimeout(function() {
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>').removeClass(
                        "RW_Im_An_Sl_AddAnim" + animateEffect<?php echo $Rich_Web_Slider;?>);
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>').addClass("RW_Im_An_Sl_RAnim" +
                        animateEffect<?php echo $Rich_Web_Slider;?>);
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' +
                        count<?php echo $Rich_Web_Slider;?>).addClass("RW_Im_An_Sl_AddAnim" +
                        animateEffect<?php echo $Rich_Web_Slider;?>);
                    jQuery('.RW_Im_An_Sl<?php echo $Rich_Web_Slider;?>' +
                        count<?php echo $Rich_Web_Slider;?>).removeClass("RW_Im_An_Sl_RAnim" +
                        animateEffect<?php echo $Rich_Web_Slider;?>);
                }, anim_over<?php echo $Rich_Web_Slider;?>)
                thumbCount<?php echo $Rich_Web_Slider;?> = count<?php echo $Rich_Web_Slider;?>;
                y_y<?php echo $Rich_Web_Slider;?> = true;
                setTimeout(function() {
                    y_y<?php echo $Rich_Web_Slider;?> = false;
                }, 500)
            }

            function prev<?php echo $Rich_Web_Slider;?>() {
                if (y_y<?php echo $Rich_Web_Slider;?> == true) {
                    return;
                }
                if (animateEffect<?php echo $Rich_Web_Slider;?> == 4) {
                    jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo $Rich_Web_Slider;?>).css("top", "0%");
                }
                zIndex<?php echo $Rich_Web_Slider;?>++;
                jQuery('.RW_Title_Ef<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .slideUp(anim_over<?php echo $Rich_Web_Slider;?>);
                count<?php echo $Rich_Web_Slider;?>--;
                if (count<?php echo $Rich_Web_Slider;?> == 0) {
                    count<?php echo $Rich_Web_Slider;?> = CountShort<?php echo $Rich_Web_Slider;?>;
                }
                prevAnim<?php echo $Rich_Web_Slider;?>();
            }

            function next<?php echo $Rich_Web_Slider;?>() {
                if (y_y<?php echo $Rich_Web_Slider;?> == true) {
                    return;
                }
                if (animateEffect<?php echo $Rich_Web_Slider;?> == 4) {
                    jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo $Rich_Web_Slider;?>).css("top",
                        "100%");
                }
                zIndex<?php echo $Rich_Web_Slider;?>++;
                jQuery('.RW_Title_Ef<?php echo $Rich_Web_Slider;?>' + count<?php echo $Rich_Web_Slider;?>)
                    .slideUp(anim_over<?php echo $Rich_Web_Slider;?>);
                count<?php echo $Rich_Web_Slider;?>++;
                if (count<?php echo $Rich_Web_Slider;?> == CountShort<?php echo $Rich_Web_Slider;?> + 1) {
                    count<?php echo $Rich_Web_Slider;?> = 1;
                }
                nextAnim<?php echo $Rich_Web_Slider;?>();
            }

            function delVideo() {
                document.querySelector(".rw_delIc_animation").style.display = "none";
                document.querySelector(".cd-slider-controls").classList.remove("cd-slider-controls_anim");
                document.querySelector(".RW_Left_Anim_Sl").style.display = "block";
                document.querySelector(".RW_Right_Anim_Sl").style.display = "block";
                var icons = document.querySelectorAll(".plIc_animation");
                var videos = document.querySelectorAll(".rw_animation_video");
                for (var i = 0; i < icons.length; i++) {
                    icons[i].style.display = "block";
                }
                for (var i = 0; i < videos.length; i++) {
                    videos[i].style.display = "none";
                    videos[i].setAttribute("src", "");
                }
            }


            document.onkeydown = checkKey;

            function checkKey(e) {

                e = e || window.event;

                if (e.keyCode == '37') {
                    prev<?php echo $Rich_Web_Slider;?>();
                    delVideo()
                } else if (e.keyCode == '39') {
                    next<?php echo $Rich_Web_Slider;?>()
                    delVideo()
                }

            }

            document.querySelector('.cd-slider<?php echo $Rich_Web_Slider;?>').addEventListener('touchstart',
                handleTouchStart, false);
            document.querySelector('.cd-slider<?php echo $Rich_Web_Slider;?>').addEventListener('touchmove',
                handleTouchMove, false);

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
                        prev<?php echo $Rich_Web_Slider;?>();
                    } else {
                        next<?php echo $Rich_Web_Slider;?>()
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


            var Interval<?php echo $Rich_Web_Slider;?>;
            if (Rich_Web_AnSL_SSh<?php echo $Rich_Web_Slider;?> == "true") {
                Interval<?php echo $Rich_Web_Slider;?> = setInterval(function() {
                        next<?php echo $Rich_Web_Slider;?>();
                    }, (Rich_Web_AnSL_SShChT<?php echo $Rich_Web_Slider;?> / 10) *
                    CountShort<?php echo $Rich_Web_Slider;?> * 2)
                jQuery(".RW_CL_N<?php echo $Rich_Web_Slider;?>").bind("click", function() {
                    next<?php echo $Rich_Web_Slider;?>();
                })
                jQuery(".RW_CL_P<?php echo $Rich_Web_Slider;?>").bind("click", function() {
                    prev<?php echo $Rich_Web_Slider;?>();
                })
                jQuery(".cd-slider-wrapper<?php echo $Rich_Web_Slider;?>").mouseout(function() {
                    Interval<?php echo $Rich_Web_Slider;?> = setInterval(function() {
                            next<?php echo $Rich_Web_Slider;?>();
                        }, (Rich_Web_AnSL_SShChT<?php echo $Rich_Web_Slider;?> / 10) *
                        CountShort<?php echo $Rich_Web_Slider;?> * 2)
                }).mouseover(function() {
                    clearInterval(Interval<?php echo $Rich_Web_Slider;?>);
                })
            } else {
                jQuery(".RW_CL_N<?php echo $Rich_Web_Slider;?>").bind("click", function() {
                    next<?php echo $Rich_Web_Slider;?>();
                })
                jQuery(".RW_CL_P<?php echo $Rich_Web_Slider;?>").bind("click", function() {
                    prev<?php echo $Rich_Web_Slider;?>();
                })
            }
            jQuery(".RW_Thumb<?php echo $Rich_Web_Slider;?>").click(function() {
                count<?php echo $Rich_Web_Slider;?> = parseInt(jQuery(this).attr("name"));
                if (count<?php echo $Rich_Web_Slider;?> != thumbCount<?php echo $Rich_Web_Slider;?>) {
                    jQuery('.RW_Title<?php echo $Rich_Web_Slider;?>').slideUp(500);
                }
                zIndex<?php echo $Rich_Web_Slider;?>++;
                if (count<?php echo $Rich_Web_Slider;?> > thumbCount<?php echo $Rich_Web_Slider;?>) {
                    if (animateEffect<?php echo $Rich_Web_Slider;?> == 4) {
                        jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo $Rich_Web_Slider;?>).css(
                            "top", "100%");
                    }
                    nextAnim<?php echo $Rich_Web_Slider;?>();
                } else if (count<?php echo $Rich_Web_Slider;?> <
                    thumbCount<?php echo $Rich_Web_Slider;?>) {
                    if (animateEffect<?php echo $Rich_Web_Slider;?> == 4) {
                        jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo $Rich_Web_Slider;?>).css(
                            "top", "0%");
                    }
                    prevAnim<?php echo $Rich_Web_Slider;?>();
                }
                thumbCount<?php echo $Rich_Web_Slider;?> = count<?php echo $Rich_Web_Slider;?>;
                y_y<?php echo $Rich_Web_Slider;?> = true;
                setTimeout(function() {
                    y_y<?php echo $Rich_Web_Slider;?> = false;
                }, 500)
            })
            resp<?php echo $Rich_Web_Slider;?>();
        }
    })
}
</script>
<script type="text/javascript">
function rw_anim_video_cl<?php echo $Rich_Web_Slider;?>(vSrc, el) {
    el.children[0].style.display = "block";
    el.children[0].setAttribute("src", vSrc + "?rel=0&amp;autoplay=1");
    el.children[1].style.display = "none";
    var titles = document.querySelectorAll(".RW_Title");
    for (var i = 0; i < titles.length; i++) {
        titles[i].style.display = "none";
    }

    document.querySelector(".cd-slider-controls").classList.add("cd-slider-controls_anim");
    document.querySelector(".RW_Left_Anim_Sl").style.display = "none";
    document.querySelector(".RW_Right_Anim_Sl").style.display = "none";
    setTimeout(function() {
        document.querySelector(".rw_delIc_animation").style.display = "block";
    }, 1000)
}
document.querySelector(".rw_delIc_animation").onclick = function() {
    document.querySelector(".rw_delIc_animation").style.display = "none";
    document.querySelector(".cd-slider-controls").classList.remove("cd-slider-controls_anim");
    document.querySelector(".RW_Left_Anim_Sl").style.display = "block";
    document.querySelector(".RW_Right_Anim_Sl").style.display = "block";
    var icons = document.querySelectorAll(".plIc_animation");
    var videos = document.querySelectorAll(".rw_animation_video");
    for (var i = 0; i < icons.length; i++) {
        icons[i].style.display = "block";
    }
    for (var i = 0; i < videos.length; i++) {
        videos[i].style.display = "none";
        videos[i].setAttribute("src", "");
    }
}
</script>