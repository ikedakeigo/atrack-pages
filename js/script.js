jQuery(function ($) {
    // ハンバーガーメニュー
    $(function () {
        $('.js-hamburger').on('click', function () {
            $(this).toggleClass('is-open');
            if ($(this).hasClass('is-open')) {
                openDrawer();
            } else {
                closeDrawer();
            }
            // メニューを固定する
            if ($('body').css('overflow') === 'hidden') {
                // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
                $('body').css({ height: '', overflow: '' });
            } else {
                // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
                $('body').css({ height: '100%', overflow: 'hidden' });
            }
        });

        // backgroundまたはページ内リンクをクリックで閉じる
        $('.js-drawer a[href]').on('click', function () {
            closeDrawer();
        });

        // resizeイベント
        $(window).on('resize', function () {
            if (window.matchMedia('(min-width: 768px)').matches) {
                closeDrawer();
            }
        });
    });

    function openDrawer() {
        $('.js-drawer').addClass('is-open');
        $('.js-hamburger').addClass('is-open');
        $('#mask').addClass('is-open');
    }

    function closeDrawer() {
        $('.js-drawer').removeClass('is-open');
        $('.js-hamburger').removeClass('is-open');
        $('#mask').removeClass('is-open');
    }
});

jQuery(function ($) {
    const mv_swiper = new Swiper('.js-mv-swiper', {
        loop: true,
        speed: 2000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        }
    });
});

jQuery(function ($) {
    $('.js-faq-question').on('click', function () {
        $(this).next().slideToggle();
        $(this).toggleClass('is-open');
    });
});

jQuery(function ($) {
    // ページトップに戻るボタンのクリックイベント
    $('.js-page-top').on('click', function () {
        $('body,html').animate(
            {
                scrollTop: 0
            },
            500
        );
        return false;
    });

    // スクロールイベントを監視
    $(window).on('scroll', function () {
        // スクロール位置が200pxを超えたらボタンを表示、それ未満なら非表示
        if ($(this).scrollTop() > 200) {
            $('.js-page-top').fadeIn();
        } else {
            $('.js-page-top').fadeOut();
        }
    });
});

jQuery(document).ready(function ($) {
    $('.wp-pagenavi').addClass('wp-pagenavi-list');
});

jQuery(document).ready(function ($) {
    $('.p-price-calculator__form').on('submit', function (e) {
        e.preventDefault(); // フォームのデフォルト送信動作を防止

        var roomType = $('#roomType').val(); // 介護度区分の値を取得
        var serviceType = $('#serviceType').val(); // 介護保険の負担割合の値を取得

        // ここで料金計算を行う
        var price = calculatePrice(roomType, serviceType); // calculatePriceは実際の計算を行う関数
        // priceが文字列の場合はアラートを表示
        if (typeof price === 'string') {
            alert(price);
            return;
        }
        // 句読点を挿入
        var priceNow = price.toLocaleString();
        // 計算結果を表示エリアに挿入
        $('#priceResult').text('計算結果: ' + priceNow + '円');
    });
});

function calculatePrice(roomType, serviceType) {
    // 実際の計算ロジックを実装
    // 数字かどうかをチェック
    if (isNaN(roomType) || isNaN(serviceType)) {
        return '数値を入力してください';
    }
    return parseInt(roomType) + parseInt(serviceType);
}

// 特定のボタンをクリックした際に#contactセクションへ移動

jQuery('.wpcf7-previous').on('click', function () {
    $('html, body').animate(
        {
            scrollTop: $('#wpcf7-f43-o1').offset().top
        },
        8000
    );
});

function delayScrollAnime() {
    var time = 0.2; // 遅延時間を増やす秒数の値
    var value = time;
    $('.delay').each(function () {
        var parent = this; // 親要素を取得
        var elemPos = $(this).offset().top; // 要素の位置まで来たら
        var scroll = $(window).scrollTop(); // スクロール値を取得
        var windowHeight = $(window).height(); // 画面の高さを取得
        var childs = $(this).children(); // 子要素を取得

        // スクロールが要素の位置に達したか、またはそれを超えたかチェック
        // かつ、スクロールが要素の下端よりも上にあるかチェック（要素が完全にビューポートから消えたらアニメーションを停止）
        if (
            scroll >= elemPos - windowHeight &&
            scroll <= elemPos + $(parent).outerHeight() &&
            !$(parent).hasClass('play')
        ) {
            $(childs).each(function () {
                if (!$(this).hasClass('fadeUp')) {
                    $(parent).addClass('play'); // 親要素にクラス名playを追加
                    $(this).css('animation-delay', value + 's'); // アニメーション遅延のCSS animation-delayを追加
                    $(this).addClass('fadeUp'); // アニメーションのクラス名を追加
                    value = value + time; // delay時間を増加させる

                    var index = $(childs).index(this);
                    if (childs.length - 1 == index) {
                        $(parent).removeClass('play');
                    }
                }
            });
        }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
jQuery(window).scroll(function () {
    delayScrollAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
jQuery(window).on('load', function () {
    delayScrollAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

// 以下追加0320
jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        // 例: スクロール位置が50pxを超えたらクラスを追加
        if (scroll >= 50) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const headerHeight = document.querySelector('.header').offsetHeight;

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const targetPositon =
                    targetElement.getBoundingClientRect().top +
                    window.pageYOffset -
                    headerHeight;
                window.scrollTo({
                    top: targetPositon,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// 追従ボタンフワッと消す
jQuery(function ($) {
    if (window.matchMedia('(max-width: 768px)').matches) {
        // windowのサイズが768px以下
        $(window).on('scroll', function () {
            var scrollPos = $(this).scrollTop(); // 現在のスクロール位置
            var windowHeight = $(this).height(); // ウィンドウの高さ
            var docHeight = $(document).height(); // ドキュメントの高さ

            // ページの最下部に達したか判定
            if (scrollPos + windowHeight >= docHeight - 200) {
                // 最下部に達する少し前にボタンを消す場合は200を調整
                $('#fixedMenu').fadeOut(); // ボタンを非表示
            } else {
                $('#fixedMenu').fadeIn(); // ボタンを表示
            }
        });
    }
});
