<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- GoogleAnalytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)

      [0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-69789978-1', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-29N90DKP7D"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-29N90DKP7D');
  </script>


  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="description" content="北九州・苅田・佐賀のグループホーム・老人ホーム「いこいの里」公式ホームページ" />
  <meta name="keywords" content="老人ホーム,グループホーム,介護施設,北九州,苅田,佐賀,介護,いこいの里,ウキシロケアセンター" />
  <!-- ogp -->
  <meta property="og:title" content="いこいの里 - 心安らぐ老人ホーム" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://ikoino-sato.com/" />
  <meta property="og:image" content="https://ikoino-sato.com/wp-content/uploads/2024/02/mv01.png" />
  <meta property="og:image:width" content="240" />
  <meta property="og:image:height" content="240" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:site_name" content="いこいの里" />
  <meta property="og:description" content="北九州・苅田・佐賀のグループホーム・老人ホーム「いこいの里」公式ホームページ" />

  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <link rel="apple-touch-icon" href="" />

  <?php wp_head(); ?>
</head>

<body>
  <header class="header l-header">
    <div class="header__inner">
      <!-- ロゴ部分 -->
      <div class="header__wrap">
        <h1 class="header__logo mainLogo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="いこいの里">
          </a>
        </h1>
        <div class="header__menu">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'header-top', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
            'walker'         => new Custom_Walker_Nav_Menu(),
            'menu_class'     => 'header__menu-list', // ここにメニュークラスを追加
            'container'      => false, // ulを囲むコンテナはなし
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'li_class' => 'header__menu-item',
            'a_class' => 'header__menu-link',

          ));
          ?>
        </div>
      </div>
      <!-- ナビゲーションメニュー -->
      <nav class="header__nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'global', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
          'walker'         => new Custom_Walker_Nav_Menu(),
          'menu_class'     => 'header__nav-items', // ここにメニュークラスを追加
          'container'      => false, // ulを囲むコンテナはなし
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ));
        ?>
      </nav>
      <div class="mask" id="mask"></div>
      <div class="header__sp-menu">
        <h1 class="header__logo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_sp.png" alt="いこいの里">
          </a>
        </h1>
        <!-- キャッチコピー -->
        <!-- <p class="header__catch">キャッチコピー</p> -->
        <!-- ハンバーガーメニューボタン -->
        <button class="header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <!-- ドロワーメニュー -->
      <div class="header__drawer js-drawer">
        <h2 class="header__drawer-title">メニュー</h2>
        <nav class="header__drawer-nav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'drawer', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
            'walker'         => new Custom_Walker_Nav_Menu(),
            'menu_class'     => 'header__drawer-items', // ここにメニュークラスを追加
            'container'      => false, // ulを囲むコンテナはなし
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'li_class' => 'header__drawer-item',
            'a_class' => '',
          ));
          ?>
        </nav>
      </div>
    </div>

  </header>


  <script>
    // リンクをクリックしたときのイベントリスナーを追加
    document.getElementById('menu-item-20').addEventListener('click', function(event) {
      // touchstartイベントが存在しない場合、PCと判断する
      if (!('ontouchstart' in window)) {

        alert('電話番号: 093-871-5800'); // ダイアログボックスを表示
      }
    });
  </script>
