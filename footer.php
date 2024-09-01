<footer class="p-footer l-footer" id="footer">
  <div class="p-footer__inner inner">
    <div class="p-footer__wrap">
      <!-- <div class="p-footer__logo">
        <a href="#">
          <img src="./images/common/logo.svg" alt="省略">
        </a>
      </div> -->
      <nav class="p-footer__nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer', // メニューの位置を指定。'primary' をあなたのメニュー位置識別子に変更してください
          'walker'         => new Custom_Walker_Nav_Menu(),
          'menu_class'     => 'p-footer__nav-items', // ここにメニュークラスを追加
          'container'      => false, // ulを囲むコンテナはなし
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'li_class' => 'p-footer__nav-item',
          'a_class' => '',
        ));
        ?>
        <!-- <ul class="p-footer__nav-items">
              <li class="p-footer__nav-item">
                <a href="/" class="active">トップ</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="facilities.html">
                  施設一覧<br class="forPC" />
                  空室確認
                </a>
              </li>
              <li class="p-footer__nav-item">
                <a href="price.html">入居料金計算</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="flow.html">入居の流れ・条件</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="staff.html"> いこいの里の<br class="forPC" />職員教育 </a>
              </li>
              <li class="p-footer__nav-item">
                <a href="faq.html">よくあるご質問</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="recruit.html">採用情報</a>
              </li>
              <li class="p-footer__nav-item">
                <a href="contact.html">お問い合わせ</a>
              </li>
            </ul> -->
      </nav>
    </div>
  </div>
  <small class="p-footer__copyright">&copy;2024 <span>株式会社ウキシロケアセンター</span></small>
</footer>
<?php get_template_part('template-parts/fixed-btn') ?>
<?php wp_footer(); ?>
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
wpcf7.cached = 0;
</script>
<!-- <script src="js/script.js"></script> -->
</body>

</html>
