jQuery(function ($) {
    // ハンバーガーメニュー
    $(function () {
        $(".js-hamburger").on("click", function () {
            $(this).toggleClass("is-open");
            if ($(this).hasClass("is-open")) {
                openDrawer();
            } else {
                closeDrawer();
            }
        });

        // backgroundまたはページ内リンクをクリックで閉じる
        $(".js-drawer a[href]").on("click", function () {
            closeDrawer();
        });

        // resizeイベント
        $(window).on('resize', function() {
            if (window.matchMedia("(min-width: 768px)").matches) {
                closeDrawer();
            }
        });
    });

    function openDrawer() {
        $(".js-drawer").addClass("is-open");
        $(".js-hamburger").addClass("is-open");
    }

    function closeDrawer() {
        $(".js-drawer").removeClass("is-open");
        $(".js-hamburger").removeClass("is-open");
    }
});

jQuery(function ($) {
    const mv_swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        speed: 2000,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });
});
