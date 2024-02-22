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

jQuery('.wpcf7-previous').on('click', function() {
  $('html, body').animate({
      scrollTop: $('#wpcf7-f43-o1').offset().top
  }, 8000);
});
