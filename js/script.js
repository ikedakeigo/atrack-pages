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
<<<<<<< HEAD
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
=======
>>>>>>> 8b88864 (first commit)
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

<<<<<<< HEAD
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
=======
jQuery(function ($) {
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
});
>>>>>>> 8b88864 (first commit)

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
<<<<<<< HEAD
=======

jQuery(function ($) {
    // 計算する
    function calculatePrice(roomType, serviceType) {
        let initialCost = 0; // 敷金
        let monthlyCost = 0; // 共済費
        let careCost = 0; // 要介護費用
        let monthlyFee = 0; // 月額費用
        let totalMonthlyCost = 0; // 総月額費用

        // 施設と要介護レベルに応じて料金を決定
        if (roomType === 'いこいの里小波瀬') {
            initialCost = 100000;
            monthlyCost = 20000;

            if (serviceType === '要介護1') {
                careCost = 16140;
            } else if (serviceType === '要介護2') {
                careCost = 18120;
            } else if (serviceType === '要介護3') {
                careCost = 20220;
            } else if (serviceType === '要介護4') {
                careCost = 22140;
            } else if (serviceType === '要介護5') {
                careCost = 24210;
            }

            monthlyFee = 92000;
        } else if (roomType === 'グループホーム小波瀬') {
            initialCost = 100000;
            monthlyCost = 0;

            if (serviceType === '要介護1') {
                careCost = 22560;
            } else if (serviceType === '要介護2') {
                careCost = 23610;
            } else if (serviceType === '要介護3') {
                careCost = 24330;
            } else if (serviceType === '要介護4') {
                careCost = 24810;
            } else if (serviceType === '要介護5') {
                careCost = 25320;
            }

            monthlyFee = 95000;
        } else if (roomType === 'グループホーム中原') {
            initialCost = 100000;
            monthlyCost = 0;

            if (serviceType === '要介護1') {
                careCost = 22560;
            } else if (serviceType === '要介護2') {
                careCost = 23610;
            } else if (serviceType === '要介護3') {
                careCost = 24330;
            } else if (serviceType === '要介護4') {
                careCost = 24810;
            } else if (serviceType === '要介護5') {
                careCost = 25320;
            }

            monthlyFee = 117850;
        } else if (roomType === 'グループホーム宇佐町') {
            initialCost = 100000;
            monthlyCost = 0;

            if (serviceType === '要介護1') {
                careCost = 22920;
            } else if (serviceType === '要介護2') {
                careCost = 24000;
            } else if (serviceType === '要介護3') {
                careCost = 24690;
            } else if (serviceType === '要介護4') {
                careCost = 25200;
            } else if (serviceType === '要介護5') {
                careCost = 25740;
            }

            monthlyFee = 135200;
        } else if (roomType === 'いこいの里若園') {
            initialCost = 0;
            monthlyCost = 20000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 153700;
        } else if (roomType === 'いこいの里赤犬丸') {
            initialCost = 0;
            monthlyCost = 20000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 81200;
        } else if (roomType === 'いこいの里本城壱番館') {
            initialCost = 0;
            monthlyCost = 20000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 88200;
        } else if (roomType === 'いこいの里本城弐番館') {
            initialCost = 0;
            monthlyCost = 20000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 107200;
        } else if (roomType === 'いこいの里本城徳吉') {
            initialCost = 0;
            monthlyCost = 20000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 105700;
        } else if (roomType === 'いこいの里曽根壱番館') {
            initialCost = 0;
            monthlyCost = 40000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 105700;
        } else if (roomType === 'いこいの里曽根弐番館') {
            initialCost = 0;
            monthlyCost = 40000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 95700;
        } else if (roomType === 'いこいの里古賀') {
            initialCost = 0;
            monthlyCost = 40000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 105700;
        } else if (roomType === 'いこいの里糸島') {
            initialCost = 0;
            monthlyCost = 40000;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 98700;
        } else if (roomType === 'いこいの里伊万里') {
            initialCost = 0;
            monthlyCost = 0;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 73700;
        } else if (roomType === 'いこいの里唐津') {
            initialCost = 0;
            monthlyCost = 0;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 89700;
        } else if (roomType === 'いこいの里巨勢') {
            initialCost = 0;
            monthlyCost = 0;

            if (serviceType === '要介護1') {
                careCost = 16765;
            } else if (serviceType === '要介護2') {
                careCost = 19705;
            } else if (serviceType === '要介護3') {
                careCost = 27048;
            } else if (serviceType === '要介護4') {
                careCost = 30938;
            } else if (serviceType === '要介護5') {
                careCost = 36217;
            }

            monthlyFee = 99500;
        }

        totalMonthlyCost = initialCost + monthlyCost;
        let monthlyCost2 = monthlyFee + careCost;

        return {
            initialCost,
            monthlyCost,
            careCost,
            totalMonthlyCost,
            monthlyCost2,
            monthlyFee
        };
    }

    $('.p-price-calculator__form').on('submit', function (e) {
        e.preventDefault();

        var roomType = $('#roomType').val();
        var serviceType = $('#serviceType').val();

        var price = calculatePrice(roomType, serviceType);

        // 結果を表示
        $('#totalMonthlyCost').text(
            `${price.totalMonthlyCost.toLocaleString()}円`
        );
        $('#deposit').text(`${price.initialCost.toLocaleString()}円`);
        $('#mutualAid').text(`${price.monthlyCost.toLocaleString()}円`);
        $('#monthlyCost2').text(`${price.monthlyCost2.toLocaleString()}円`);
        $('#monthlyFee').text(`${price.monthlyFee.toLocaleString()}円`);
        $('#careLevelLabel').text(serviceType);
        $('#careLevelCost').text(`${price.careCost.toLocaleString()}円`);

        $('#roomType2').text('「' + roomType + '」');
        $('#serviceType2').text('「' + serviceType + '」');

        // モーダルを表示
        $('#1').fadeIn();
        $('html,body').css('overflow', 'hidden');
        $('body').append('<div class="maskModal"></div>');
    });

    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        $('html,body').css('overflow', 'visible');
        $('.maskModal').remove();
    });
});
>>>>>>> 8b88864 (first commit)
