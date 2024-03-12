<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?> | いこいの里</title>
  <meta name="description" content="トップページの説明" />
  <meta name="keywords" content="キーワード" />
  <!-- ogp -->
  <meta property="og:title" content="いこいの里" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="サイトのドメイン" />
  <meta property="og:image" content="OGP IMAGE" />
  <meta property="og:site_name" content="サイトのドメイン" />
  <meta property="og:description" content="トップページの説明" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <link rel="apple-touch-icon" href="" />
  <!-- CSS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" /> -->
  <?php wp_head(); ?>
</head>

<body>
  <header class="header l-header">
    <div class="header__inner">
      <!-- ロゴ部分 -->
      <div class="header__wrap">
        <h1 class="header__logo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="いこいの里">
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
            <span>ロゴ</span>
          </a>
        </h1>
        <!-- キャッチコピー -->
        <p class="header__catch">キャッチコピー</p>
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
