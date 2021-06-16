//   all ------------------
function initSolonick() {
    "use strict";
    //   loader ------------------
    jQuery(".pin").text("Loading");
    jQuery(".loader-wrap").fadeOut(300, function () {
        jQuery("#main").animate({
            opacity: "1"
        }, 300);
    });
	jQuery('#s').attr('placeholder','Type and hit enter...');
	jQuery(".widget #searchsubmit").replaceWith(function() { return "<button class='search-submit color-bg' id='submit_btn'><i class='fa fa-search'></i> </button>"; });
    //   Background image ------------------
    var a = jQuery(".bg");
    a.each(function (a) {
        if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
    });
    //   clone ------------------
    jQuery.fn.duplicate = function (a, b) {
        var c = [];
        for (var d = 0; d < a; d++) jQuery.merge(c, this.clone(b).get());
        return this.pushStack(c);
    };
    jQuery("<div class='container full-height'></div>").appendTo(".sec-lines");
    jQuery("<div class='line-item'></div>").duplicate(5).appendTo(".sec-lines .container");

    jQuery("<div class='half-bg-dec-item'></div>").duplicate(12).appendTo(".half-bg-dec");
    jQuery("<div class='hidden-works-item-dec'><i class='fal fa-arrow-left'></i></div>").appendTo(".hidden-works-item");
    var cr2 = jQuery(".card-popup-rainingvis");
    cr2.each(function (cr) {
        var starcount2 = jQuery(this).attr("data-starrating2");
        jQuery("<i class='fas fa-star'></i>").duplicate(starcount2).prependTo(this);
    });
    //   hero parallax hover ------------------
    var jQueryone = jQuery(".mm-parallax"),
        browserPrefix = "",
        usrAg = navigator.userAgent;
    if (usrAg.indexOf("Chrome") > -1 || usrAg.indexOf("Safari") > -1) browserPrefix = "-webkit-";
    else if (usrAg.indexOf("Opera") > -1) browserPrefix = "-o";
    else if (usrAg.indexOf("Firefox") > -1) browserPrefix = "-moz-";
    else if (usrAg.indexOf("MSIE") > -1) browserPrefix = "-ms-";
    jQuery(".hero-wrap").mousemove(function (a) {
        var b = Math.ceil(window.innerWidth / 1.5),
            c = Math.ceil(window.innerHeight / 1.5),
            d = a.pageX - b,
            e = a.pageY - c,
            f = e / c,
            g = -(d / b),
            h = Math.sqrt(Math.pow(f, 2) + Math.pow(g, 2)),
            i = 10 * h;
        jQueryone.css(browserPrefix + "transform", "rotate3d(" + f + ", " + g + ", 0, " + i + "deg)");
    });
    function heroAnim() {
        function a(a) {
            var b = a.length,
                c, d;
            while (b) {
                d = Math.floor(Math.random() * b--);
                c = a[b];
                a[b] = a[d];
                a[d] = c;
            }
            return a;
        }
        var b = jQuery(".half-bg-dec-item");
        jQuery(a(b).slice(0, jQuery(".half-bg-dec").data("ran"))).each(function (a) {
            var bc = jQuery(this);
            b.removeClass("half-bg-dec-vis")
            bc.addClass("half-bg-dec-vis");

        });
    }
    setInterval(function () {
        heroAnim();
    }, 2000);
    //   parallax thumbnails position  ------------------
    jQuery(".bg-parallax-module").each(function () {
        var tcp = jQuery(this),
            dpl = tcp.data("position-left"),
            dpt = tcp.data("position-top");
        tcp.css({
            "top": dpt + "%"
        });
        tcp.css({
            "left": dpl + "%",
        });
    });
    jQuery(".album-thumbnails div").each(function () {
        var dp2 = jQuery(this).data("position-left2"),
            dpt2 = jQuery(this).data("position-top2");
        jQuery(this).css({
            "top": dpt2 + "%"
        });

        jQuery(this).css({
            "left": dp2 + "%",
        });
    });
    jQuery(".section-subtitle").fitText(0.85);
    //   scrollToFixed  ------------------
    jQuery(".scroll-nav-wrap").scrollToFixed({
        minWidth: 569,
        zIndex: 12,
        preUnfixed: function () {
            jQuery(this).css("margin-top", "0");
        },
        preFixed: function () {
            if (jQuery(window).width() < 1064) jQuery(this).css("margin-top", "80px");
        }
    });
    jQuery(".hidden-info-wrap-bg").scrollToFixed({
        minWidth: 1064,
        zIndex: 12,
        marginTop: 80,
        removeOffsets: true,
        limit: function () {
            var a = jQuery(".limit-box").offset().top - jQuery(".hidden-info-wrap-bg").outerHeight(true);
            return a;
        }
    });
    jQuery(".fixed-column").scrollToFixed({
        minWidth: 1064,
        zIndex: 12,
        marginTop: 120,
        removeOffsets: true,
        limit: function () {
            var a = jQuery(".limit-box").offset().top - jQuery(".fixed-column").outerHeight(true) - 50;
            return a;
        }
    });
    if (jQuery(".fixed-bar").outerHeight(true) < jQuery(".post-container").outerHeight(true)) {
        jQuery(".fixed-bar").addClass("fixbar-action");
        jQuery(".fixbar-action").scrollToFixed({
            minWidth: 1064,
            marginTop: function () {
                var a = jQuery(window).height() - jQuery(".fixed-bar").outerHeight(true) - 100;
                if (a >= 0) return 20;
                return a;
            },
            removeOffsets: true,
            limit: function () {
                var a = jQuery(".limit-box").offset().top - jQuery(".fixed-bar").outerHeight() - 20;
                return a;
            }
        });
    } else jQuery(".fixed-bar").removeClass("fixbar-action");
    //   slick  ------------------
    var sbp = jQuery(".sp-cont-prev"),
        sbn = jQuery(".sp-cont-next"),
        ccsi = jQuery(".cur_carousel-slider-container"),
        scw = jQuery(".slider-carousel-wrap"),
        fetcarCounter = jQuery(".fet_pr-carousel-counter"),
        fpr = jQuery('.fet_pr-carousel'),
        scs = jQuery('.show-case-slider'),
        fcshinit = jQuery('.fullscreen-slider'),
        ssn = jQuery('.slider-nav'),
        ssnc = jQuery('.slider-nav-counter'),
        fssc = jQuery('.fullscreenslider-counter'),
        fshc = jQuery('.fs-carousel');
    scs.on("init", function (event, slick) {
        fetcarCounter.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);

    });
    scs.slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
        variableWidth: true,
    });
    scs.on("afterChange", function (event, slick, currentSlide) {
        var scsc = jQuery(".show-case-item.slick-active").data("curtext");
        var jQuerycaptproject = jQuery(".single-project-title .caption");
        jQuerycaptproject.text(scsc).shuffleLetters({});
        fetcarCounter.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    jQuery('.single-slider').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true
    });
    fcshinit.on("init", function (event, slick) {
        fssc.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    fcshinit.slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
		autoplaySpeed: jQuery('.fullscreen-slider').data('slider-auto-play-speed'),
		autoplay: jQuery('.fullscreen-slider').data('autoplay'),
		speed:jQuery('.fullscreen-slider').data('slider-speed'),
        arrows: false,
        adaptiveHeight: false
    });
    fcshinit.on("afterChange", function (event, slick, currentSlide) {
        fssc.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    jQuery('.slideshow-container').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 4000,
		pauseOnHover: false,
        arrows: false,
        fade: true,
        cssEase: 'ease-in',
        infinite: true,
        speed: 1000
    });
    fshc.on("init", function (event, slick) {
        ssnc.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    fshc.slick({
        infinite: true,
        slidesToShow: 3,
        dots: true,
		autoplaySpeed: jQuery('.fs-carousel').data('slider-auto-play-speed'),
		autoplay: jQuery('.fs-carousel').data('autoplay'),
		speed:jQuery('.fs-carousel').data('slider-speed'),
        arrows: false,
        centerMode: false,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]

    });
    fshc.on("afterChange", function (event, slick, currentSlide) {
        ssnc.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    jQuery(".fs-carousel-title h3 , .fs-carousel-link").on({
        mouseenter: function () {
            jQuery(this).parents(".fs-carousel-item").find(".bg").addClass("hov-rot");
        },
        mouseleave: function () {
            jQuery(this).parents(".fs-carousel-item").find(".bg").removeClass("hov-rot");
        }
    });
    jQuery('.serv-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        dots: true,
        arrows: false,
        centerMode: false,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]

    });
    jQuery('.half-slider-img').slick({
        arrows: false,
        infinite: true,
        fade: false,
        speed: 1000,
		autoplaySpeed: jQuery('.half-slider-img').data('slider-speed'),
		autoplay: jQuery('.half-slider-img').data('autoplay'),
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.slider-nav'
    });
    ssn.on("init", function (event, slick) {
        ssnc.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    jQuery('.slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.half-slider-img',
		autoplay: jQuery('.slider-nav').data('autoplay'),
        dots: true,
        arrows: false,
        centerMode: false,
        focusOnSelect: false,
        fade: true,
    });
    ssn.on("afterChange", function (event, slick, currentSlide) {
        ssnc.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    jQuery('.text-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
		autoplay:jQuery('.text-carousel').data('slider-play'),
		speed: jQuery('.text-carousel').data('slider-speed'),
        dots: true,
        arrows: false,
        centerPadding: "0",
        centerMode: true,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 2,
                }
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]

    });
    fpr.on("init", function (event, slick) {
        fetcarCounter.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    fpr.slick({
        infinite: true,
        slidesToShow: jQuery('.fet_pr-carousel').data('slide-show'),
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        slickCurrentSlide: 2,
        centerPadding: "0",
        centerMode: true,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 4,
                    centerMode: false,
                }
            },

            {
                breakpoint: 1084,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                }
            },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]

    });
    fpr.on("afterChange", function (event, slick, currentSlide) {
        fetcarCounter.text(Number(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });
    sbp.on("click", function () {
        jQuery(this).closest(scw).find(ccsi).slick('slickPrev');
    });
    sbn.on("click", function () {
        jQuery(this).closest(scw).find(ccsi).slick('slickNext');
    });
    //   Isotope------------------
    function n() {
        if (jQuery(".gallery-items").length) {
            var jQuerygrid = jQuery(".gallery-items").isotope({
                singleMode: true,
                columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three"
            });
            jQuerygrid.imagesLoaded(function () {
                jQuerygrid.isotope("layout");
            });
            jQuery(".gallery-filters").on("click", "a.gallery-filter", function (b) {
                b.preventDefault();
                var c = jQuery(this).attr("data-filter"),
                    d = jQuery(this).text();
                jQuerygrid.isotope({
                    filter: c
                });
                jQuery(".gallery-filters a").removeClass("gallery-filter-active");
                jQuery(this).addClass("gallery-filter-active");
            });
            var gat = jQuery(".gallery-filter-active").text();
        }

        jQuery(".gallery-items").isotope("on", "layoutComplete", function (a, b) {
            var b = a.length;
            jQuery(".num-album").html(b);
        });
        var b = jQuery(".gallery-item").length;
        jQuery(".all-album , .num-album").html(b);
    }
    n();
    function hoverdirInit() {
        jQuery(".hde  .portfolio_item , .hde .gallery-item").each(function () {
            jQuery(this).hoverdir();
        });
    }
    hoverdirInit();
    jQuery(".team-box").matchHeight();
    // folio hover------------------
    var hidworit = jQuery('.hidden-works-item'),
        hidworit_length = hidworit.length;
    jQuery("<div class='bg'></div>").duplicate(hidworit_length).appendTo(".bg-ser");
    var hidworit_actin = jQuery('.hidden-works-item:first-child'),
        actbgindex = hidworit_actin.data("bgscr");
    hidworit_actin.addClass("act-index");
    jQuery('.bg-ser .bg:first-child').addClass('active').css("background-image", "url(" + actbgindex + ")");
    jQuery('.hidden-works-item').on('mouseover', function () {
        jQuery('.hidden-works-item').removeClass("act-index");
        jQuery(this).addClass("act-index");
        var hidworit_index = jQuery('.hidden-works-item').index(this),
            hidworit_index_each = jQuery(this).data("bgscr");
        jQuery('.bg-ser .bg').removeClass('active').eq(hidworit_index).addClass('active').css("background-image", "url(" + hidworit_index_each + ")");
    });
    //   lightGallery------------------
    function lightGalleryInit() {
        jQuery(".image-popup").lightGallery({
            selector: "this",
            cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
            download: false,
            counter: false
        });
        var o = jQuery(".lightgallery"),
            p = o.data("looped");
        o.lightGallery({
            selector: ".lightgallery a.popup-image",
            cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
            download: false,
            loop: false,
            counter: false
        });
    }
    lightGalleryInit();
    //   appear------------------
    jQuery(".stats").appear(function () {
        jQuery(".num").countTo();
    });
    jQuery(".piechart-holder").appear(function () {
        jQuery(this).find(".chart").each(function () {
            var cbc = jQuery(".piechart-holder").attr("data-skcolor");
            jQuery(".chart").easyPieChart({
                barColor: cbc,
                trackColor: "#eee",
                scaleColor: "#eee",
                size: "150",
                lineWidth: "40",
                lineCap: "butt",
                animate: 3500,
                easing: "easeInBounce",
                onStep: function (a, b, c) {
                    jQuery(this.el).find(".percent").text(Math.round(c));
                }
            });
        });
    });
    jQuery(".skillbar-box").appear(function () {
        jQuery(this).find("div.skillbar-bg").each(function () {
            jQuery(this).find(".custom-skillbar").delay(600).animate({
                width: jQuery(this).attr("data-percent")
            }, 1500);
        });
    });
    //footer animation ------------------
    var n = jQuery(".partcile-dec").data("parcount");
    jQuery(".partcile-dec").jParticle({
        background: "rgba(255,255,255,0.0)",
        color: "rgba(255,255,255,0.081)",
        particlesNumber: n,
        particle: {
            speed: 20
        }
    });
    //   accordion ------------------
    jQuery(".accordion a.toggle").on("click", function (a) {
        a.preventDefault();
        jQuery(".accordion a.toggle").removeClass("act-accordion");
        jQuery(this).addClass("act-accordion");
        if (jQuery(this).next('div.accordion-inner').is(':visible')) {
            jQuery(this).next('div.accordion-inner').slideUp();
        } else {
            jQuery(".accordion a.toggle").next('div.accordion-inner').slideUp();
            jQuery(this).next('div.accordion-inner').slideToggle();
        }
    });
    jQuery('.cs-wrap .hero-wrap , .nav-holder').perfectScrollbar({});
    // twitter ------------------
    if (jQuery("#twitts-container").length > 0) {
        var config1 = {
            "profile": {
                "screenName": jQuery('#twitts-container').data('twitts-user')
            },
            "domId": 'twitts-container',
            "maxTweets": jQuery('#twitts-container').data('twitts-count'),
            "enableLinks": true,
            "showImages": false
        };
        twitterFetcher.fetch(config1);
    }
    //   Contact form------------------
    jQuery("#contactform").submit(function () {
        var a = jQuery(this).attr("action");
        jQuery("#message").slideUp(750, function () {
            jQuery("#message").hide();
            jQuery("#submit").attr("disabled", "disabled");
            jQuery.post(a, {
                name: jQuery("#name").val(),
                email: jQuery("#email").val(),
                phone: jQuery("#phone").val(),
                subject: jQuery('#subject').val(),
                comments: jQuery("#comments").val(),
                verify: jQuery('#verify').val()

            }, function (a) {
                document.getElementById("message").innerHTML = a;
                jQuery("#message").slideDown("slow");
                jQuery("#submit").removeAttr("disabled");
                if (null != a.match("success")) jQuery("#contactform").slideDown("slow");
            });
        });
        return false;
    });
    jQuery("#contactform input, #contactform textarea").keyup(function () {
        jQuery("#message").slideUp(1500);
    });
    jQuery('.chosen-select').selectbox();
    //   mailchimp------------------
    jQuery("#subscribe").ajaxChimp({
        language: "eng",
        url: "http://kwst.us18.list-manage.com/subscribe/post?u=42df802713d4826a4b137cd9e&id=815d11e811"
    });
    jQuery.ajaxChimp.translations.eng = {
        submit: "Submitting...",
        0: '<i class="fa fa-check"></i> We will be in touch soon!',
        1: '<i class="fa fa-warning"></i> You must enter a valid e-mail address.',
        2: '<i class="fa fa-warning"></i> E-mail address is not valid.',
        3: '<i class="fa fa-warning"></i> E-mail address is not valid.',
        4: '<i class="fa fa-warning"></i> E-mail address is not valid.',
        5: '<i class="fa fa-warning"></i> E-mail address is not valid.'
    };
 
    //   Video------------------
    var v = jQuery(".background-wrapper").data("vid");
    var f = jQuery(".background-wrapper").data("mv");
    jQuery(".background-wrapper").YTPlayer({
        fitToBackground: true,
        videoId: v,
        pauseOnScroll: true,
        mute: f,
        callback: function () {
            var a = jQuery(".background-video").data("ytPlayer").player;
        }
    });
    var w = jQuery(".background-vimeo").data("vim");
    jQuery(".background-vimeo").append('<iframe src="//player.vimeo.com/video/' + w + '?background=1"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>');
    jQuery(".video-holder").height(jQuery(".media-container").height());
    if (jQuery(window).width() > 1024) {
        if (jQuery(".video-holder").size() > 0)
            if (jQuery(".media-container").height() / 9 * 16 > jQuery(".media-container").width()) {
                jQuery(".background-vimeo iframe ").height(jQuery(".media-container").height()).width(jQuery(".media-container").height() / 9 * 16);
                jQuery(".background-vimeo iframe ").css({
                    "margin-left": -1 * jQuery("iframe").width() / 2 + "px",
                    top: "-75px",
                    "margin-top": "0px"
                });
            }
        else {
            jQuery(".background-vimeo iframe ").width(jQuery(window).width()).height(jQuery(window).width() / 16 * 9);
            jQuery(".background-vimeo iframe ").css({
                "margin-left": -1 * jQuery("iframe").width() / 2 + "px",
                "margin-top": -1 * jQuery("iframe").height() / 2 + "px",
                top: "50%"
            });
        }
    } else if (jQuery(window).width() < 760) {
        jQuery(".video-holder").height(jQuery(".media-container").height());
        jQuery(".background-vimeo iframe ").height(jQuery(".media-container").height());
    } else {
        jQuery(".video-holder").height(jQuery(".media-container").height());
        jQuery(".background-vimeo iframe ").height(jQuery(".media-container").height());
    }
    jQuery(".video-container").css("width", jQuery(window).width() + "px");
    jQuery(".video-container ").css("height",  720 / 1280 * jQuery(window).width()) + "px";
    if (jQuery(".video-container").height() < jQuery(window).height()) {
        jQuery(".video-container ").css("height", jQuery(window).height() + "px");
        jQuery(".video-container").css("width",  1280 / 720 * jQuery(window).height()) + "px";
    }
    jQuery(".nav-holder nav li a.act-link").closest("li").addClass("actli");
    jQuery(".nav-holder nav li ul").parent("li").append('<span class="nav-dec"></span>');
    jQuery(".nav-holder nav li").on("click", function () {
        jQuery(this).each(function () {
            jQuery(this).children("ul").stop().slideToggle(400);
        });
    });
    // Share   ------------------
    jQuery(".share-container").share({
        networks: ['facebook', 'pinterest', 'twitter', 'linkedin', 'email']
    });
    var shrcn = jQuery(".share-wrapper"),
        ssb = jQuery(".showshare");
    function showShare() {
        hideMenu();
        shrcn.fadeIn(1).removeClass("isShare").addClass("invis-share");
        jQuery(".share-title span").shuffleLetters({});
        ssb.addClass("clshbt");
        setTimeout(function () {
            jQuery(".soa").each(function (a) {
                var b = jQuery(this);
                setTimeout(function () {
                    b.addClass("soavis")
                }, 150 * a);
            });

        }, 300);
    }
    function hideShare() {
        shrcn.fadeOut(400).addClass("isShare").removeClass("invis-share");
        jQuery(".soa").removeClass("soavis");
        ssb.removeClass("clshbt");
    }
    jQuery(".close-share").on("click", function () {
        hideShare();
    });
    ssb.on("click", function () {

        if (shrcn.hasClass("isShare")) showShare();
        else hideShare();
        return false;
    });
    //   menu ------------------
    jQuery("#menu").menu();
    jQuery(".sliding-menu li a.nav").parent("li").addClass("submen-dec");
    var nbw = jQuery(".nav-button"),
        nhw = jQuery(".nav-holder"),
        nho = jQuery(".nav-overlay");
    function showMenu() {
        hideShare();
        nho.fadeIn(500);
        nhw.animate({
            left: "0",
            opacity: 1
        }, {
            queue: false,
            duration: 600,
            easing: "easeInOutExpo"
        });
        nbw.removeClass("but-hol").addClass("cmenu");
        setTimeout(function () {
            jQuery(".nav-title span").shuffleLetters({});
        }, 300);
    }
    function hideMenu() {
        nhw.animate({
            left: "-1064px",
            opacity: 0
        }, {
            queue: false,
            duration: 600,
            easing: "easeInOutExpo"
        });
        nbw.addClass("but-hol").removeClass("cmenu");
        nho.fadeOut(500);
    }
    nbw.on("click", function () {
        if (nbw.hasClass("but-hol")) showMenu();
        else hideMenu();
        return false;
    });
    nho.on("click", function () {
        hideMenu();
        return false;
    });
    
    var tooltips = document.querySelectorAll('.nav-overlay .tooltip');
    window.onmousemove = function (e) {
        var x = (e.clientX + 20) + 'px',
            y = (e.clientY + 20) + 'px';
        for (var i = 0; i < tooltips.length; i++) {
            tooltips[i].style.top = y;
            tooltips[i].style.left = x;
        }
    };
    // Styles ------------------
    function csselem() {
        jQuery(".height-emulator").css({
            height: jQuery(".fixed-footer").outerHeight(true)
        });
        jQuery(".show-case-slider .show-case-item").css({
            height: jQuery(".show-case-slider").outerHeight(true)
        });
        jQuery(".fullscreen-slider-item").css({
            height: jQuery(".fullscreen-slider").outerHeight(true)
        });
        jQuery(".half-slider-item").css({
            height: jQuery(".half-slider-wrap").outerHeight(true)
        });
        jQuery(".half-slider-img-item").css({
            height: jQuery(".half-slider-img").outerHeight(true)
        });
        jQuery(".hidden-info-wrap-bg").css({
            height: jQuery(window).outerHeight(true) - 80 + "px"
        });
        jQuery(".slideshow-item").css({
            height: jQuery(".slideshow-container").outerHeight(true)
        });
        jQuery(".fs-carousel-item").css({
            height: jQuery(".fs-carousel").outerHeight(true)
        });
    }
    csselem();
    var jQuerywindow = jQuery(window);
    jQuerywindow.resize(function () {
        csselem();
    });
    // Counter ------------------
    if (jQuery(".counter-widget").length > 0) {
        var countCurrent = jQuery(".counter-widget").attr("data-countDate");
        jQuery(".countdown").downCount({
            date: countCurrent,
            offset: 0
        });
    }
    //   scroll to------------------
    jQuery(".custom-scroll-link").on("click", function () {
        var a = 80;
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") || location.hostname === this.hostname) {
            var b = jQuery(this.hash);
            b = b.length ? b : jQuery("[name=" + this.hash.slice(1) + "]");
            if (b.length) {
                jQuery("html,body").animate({
                    scrollTop: b.offset().top - a
                }, {
                    queue: false,
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
                return false;
            }
        }
    });
    jQuery(".scroll-init  ul").singlePageNav({
        filter: ":not(.external)",
        updateHash: false,
        offset: 80,
        threshold: 120,
        speed: 1200,
        currentClass: "act-scrlink"
    });
    jQuery(".to-top").on("click", function (a) {
        a.preventDefault();
        jQuery("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    jQuery("<div class='to-top-letter'>t</div><div class='to-top-letter'>o</div><div class='to-top-letter'>p</div>").appendTo(".to-top span");
    //   Blog filter ------------------
    jQuery(".blog-btn").on("click", function () {
        jQuery(this).parent(".blog-btn-filter").find("ul").slideToggle(500);
        return false;
    });
    jQuery('.hero-decor-let').rotaterator({fadeSpeed:500, pauseSpeed:1200});
}
//   Parallax ------------------
function initparallax() {
    var a = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return a.Android() || a.BlackBerry() || a.iOS() || a.Opera() || a.Windows();
        }
    };
    trueMobile = a.any();
    if (null === trueMobile) {
        var b = new Scrollax();
        b.reload();
        b.init();
    }
    if (trueMobile) jQuery(".bgvid , .background-vimeo , .background-wrapper").remove();
}


   
    //   audio player ------------------
    if (jQuery(".audio-player-wrap").length > 0) {
        function initAudiolist() {
            audiojs.events.ready(function () {
                var a = audiojs.createAll({
                        trackEnded: function () {
                            var next = jQuery('.audio-player-wrap ol li.playing').next();
                            if (!next.length) next = jQuery('.audio-player-wrap ol li').first();
                            next.addClass('playing').siblings().removeClass('playing');
                            audio.load(jQuery('a.audio-link', next).attr('data-srcaudio'));
                            audio.play();
                        }
                    }),
                    audio = a[0],
                    ids = ['vol-0', 'vol-40', 'vol-70', 'vol-100'];
                for (var i = 0, ii = ids.length; i < ii; i++) {
                    var elem = document.getElementById(ids[i]),
                        volume = ids[i].split('-')[1];
                    elem.setAttribute('data-volume', volume / 100)
                    elem.onclick = function (e) {
                        audio.setVolume(this.getAttribute('data-volume'));
                        e.preventDefault();
                        return false;
                    }
                }
                var audio = a[0];
                first = jQuery('.audio-player-wrap ol a.audio-link').attr('data-srcaudio');
                jQuery('.audio-player-wrap ul li').first().addClass('playing');
                audio.load(first);
                jQuery('.audio-player-wrap ol li a.audio-link').on("click", function (e) {
                    e.preventDefault();
                    if (jQuery(this).parent("li").attr('class') === 'playing') {
                        jQuery(this).parent("li").addClass('pause');
                        audio.playPause();
                    } else {
                        jQuery(this).parent("li").removeClass('pause').addClass('playing').siblings().removeClass('playing').removeClass('pause');
                        audio.load(jQuery(this).attr('data-srcaudio'));
                        audio.play();
                    }
                });
            });
        }
        initAudiolist();
        jQuery('.volume-control span').on('click', function () {
            jQuery('.volume-control span').removeClass("allvolumne");
            var onStar = Number(jQuery(this).data('value'));
            var stars = jQuery(this).parent().children('span');
            for (i = 0; i < stars.length; i++) {
                jQuery(stars[i]).removeClass('selected');
            }
            for (i = 0; i < onStar; i++) {
                jQuery(stars[i]).addClass('selected');
            }
            if (jQuery(this).data("value") === 1) {
                jQuery(this).addClass('allvolumne');
            }
        });
        var alblisttitle = jQuery(".playlist-wrap ol").data("listalbumtitle");
        jQuery(".album-list-title").text("(" + alblisttitle + ")");
    }
    var audprev = jQuery("#preview-sound");
    jQuery('.album-preview').on({
        mouseenter: function () {
            var audioprevpath = jQuery(this).data("audiopath");
            audprev.attr("src", audioprevpath);
            audprev[0].play();
        },
        mouseleave: function () {
            audprev[0].pause();
            audprev[0].currentTime = 0;
        }
    });
//   Init All ------------------
jQuery(function () {
    initparallax();
    initSolonick();
});