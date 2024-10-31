// SCROLL TO TOP ON REFRESH
jQuery(function ($) {
    $(window).on("load", function () {
        setTimeout(function () {
            $(window).scrollTop(0);
        }, 100);
    });
});

// INDEX MARQUEE
jQuery(function ($) {
    $("#index-marquee .index-marquee").each(function () {
        var _this = $(this);
        var indexMarqueeWrapper = _this.closest(".index-marquee-wrapper");

        function initializeMarquee() {
            if ($(window).width() > 992) {
                if (!indexMarqueeWrapper.hasClass("initialized")) {
                    indexMarqueeWrapper.liMarquee({
                        circular: true,
                        startShow: true,
                        scrollDelay: 150,
                        scrollStop: false,
                        drag: false,
                    });
                    indexMarqueeWrapper.addClass("initialized");
                }
            } else {
                if (indexMarqueeWrapper.hasClass("initialized")) {
                    indexMarqueeWrapper.liMarquee("destroy");
                    indexMarqueeWrapper.removeClass("initialized");
                }
            }
        }

        onWindowResize(initializeMarquee, 300, true);
    });
});

// INDEX HERO SLIDE
jQuery(function ($) {
    $("#index-hero .swiper").each(function () {
        var _this = $(this);
        var swiper = new Swiper(_this[0], {
            slidesPerGroup: 1,
            navigation: {
                nextEl: ".index-hero-swiper-button-next",
                prevEl: ".index-hero-swiper-button-prev",
            },
            effect: "fade",
            loop: true,
            speed: 800,
            slidesPerView: "auto",
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
        });
    });
});

// INDEX BORDER ANIMATION
jQuery(function ($) {
    function applyAnimations(element) {
        element.find("> .left-border").addClass("verticalHeight");
        element.find("> .top-border").addClass("horizontalWidth");
        element.find("> .right-border").addClass("verticalHeight");
        element.find("> .bottom-border").addClass("horizontalWidth");
    }

    $("#register-form .border-wrapper").each(function () {
        const borderWrapper = $(this);
        $(window).on("scroll", function () {
            checkIfInView(
                1 / 2,
                $("#register-form .border-wrapper"),
                function () {
                    applyAnimations(borderWrapper);
                },
                () => {}
            );
        });
    });

    $("#index-location.border-wrapper").each(function () {
        const borderWrapper = $(this);
        const map = borderWrapper.find(".map");
        $(window).on("scroll", function () {
            checkIfInView(
                1 / 4,
                $("#index-location.border-wrapper"),
                function () {
                    applyAnimations(borderWrapper);
                },
                () => {}
            );

            checkIfInView(
                1 / 2,
                $("#index-location.border-wrapper .map"),
                function () {
                    applyAnimations(map);
                },
                () => {}
            );
        });
    });
});
