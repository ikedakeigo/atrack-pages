<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?> | いこいの里</title>
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
              <span>ロゴ</span>
            </a>
          </h1>
          <div class="header__menu">
            <?php
                wp_nav_menu( array(
                  'theme_location' => 'header-top', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
                  'walker'         => new Custom_Walker_Nav_Menu(),
                  'menu_class'     => 'header__menu-list', // ここにメニュークラスを追加
                  'container'      => false, // ulを囲むコンテナはなし
                  'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'li_class' => 'header__menu-item',
                  'a_class' => 'header__menu-link',
                ) );
              ?>
            <!-- <ul class="header__menu-list">
              <li class="header__menu-item">

                <a href="contact.html" class="header__menu-link">
                  <span>お問い合わせ</span>
                </a>
              </li>
              <li class="header__menu-item">

                <a href="#" class="header__menu-link">
                  <span>電話番号</span>
                </a>
              </li>
            </ul> -->
          </div>
        </div>
        <!-- ナビゲーションメニュー -->
        <nav class="header__nav">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'global', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
              'walker'         => new Custom_Walker_Nav_Menu(),
              'menu_class'     => 'header__nav-items', // ここにメニュークラスを追加
              'container'      => false, // ulを囲むコンテナはなし
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ) );
          ?>
          <!-- <ul class="header__nav-items">
            <li class="header__nav-item active">
              <a href="/">トップ</a>
            </li>
            <li class="header__nav-item">
              <a href="facilities.html">施設一覧・空室確認</a>
            </li>
            <li class="header__nav-item">
              <a href="price.html">入居料金計算</a>
            </li>
            <li class="header__nav-item"><a href="flow.html">入居の流れ条件</a></li>
            <li class="header__nav-item">
              <a href="staff.html">いこいの里の<br />職員について</a>
            </li>
            <li class="header__nav-item">
              <a href="faq.html">よくあるご質問</a>
            </li>
            <li class="header__nav-item">
              <a href="recruit.html">採用情報</a>
            </li>
          </ul> -->
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
            wp_nav_menu( array(
              'theme_location' => 'drawer', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
              'walker'         => new Custom_Walker_Nav_Menu(),
              'menu_class'     => 'header__drawer-items', // ここにメニュークラスを追加
              'container'      => false, // ulを囲むコンテナはなし
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'li_class' => 'header__drawer-item',
              'a_class' => '',
            ) );
          ?>
            <!-- <ul class="header__drawer-items">
              <li class="header__drawer-item"><a href="/">トップページ</a></li>
              <li class="header__drawer-item"><a href="facilities.html">施設一覧・空室確認</a></li>
              <li class="header__drawer-item"><a href="price.html">入居料金計算</a></li>
              <li class="header__drawer-item"><a href="flow.html">入居の流れ・条件</a></li>
              <li class="header__drawer-item"><a href="staff.html">いこいの里の職員について</a></li>
              <li class="header__drawer-item"><a href="faq.html">よくあるご質問</a></li>
              <li class="header__drawer-item"><a href="recruit.html">採用情報</a></li>
              <li class="header__drawer-item"><a href="contact.html">お問い合わせ</a></li>
            </ul> -->
          </nav>
        </div>
      </div>

    </header>
