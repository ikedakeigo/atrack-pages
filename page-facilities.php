<?php

/**
 * Template Name: 施設一覧・空室確認
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="facilities">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- facility-hero -->
  <section class="p-facility-hero l-facility-hero  " id="">
    <div class="p-facility-hero__inner inner">
      <div class="p-facility-hero__wrap">
        <h2 class="p-facility-hero__title u-w900">
          <span class="sp_S">私達が目指しているのは、</span><br class="forSP"><span>「家庭の延長線にあるホーム」です。</span>
        </h2>
        <p class="p-facility-hero__text u-w400">
          人としての関わりを大切にしながら午後からの入浴や日々の生活援助など、今まで営んできた生活リズムにできる限り近づけられるよう、またご本人が生きがい・自分でできたという達成感を感じられる介護を心がけながらお手伝いさせていただいております。
        </p>
      </div>
    </div>
  </section>

  <!-- location -->
  <section class="p-location-list l-location" id="">
    <div class="p-location-list__inner inner">
      <div class="p-location-list__wrap">
        <h2 class="p-location-list__title main-title iconMapIcon u-textMdCenter">所在地一覧</h2>
        <div class="p-location-list__grid">
          <ul class="p-location-list__list">
            <!-- 1 -->
            <li class="p-location-list__item">
              <a href="#nakahara" class="p-location-list__item-title">
                グループホーム いこいの里 中原
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#usamati" class="p-location-list__item-title">
                グループホーム いこいの里 宇佐町
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#wakasono" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 若園
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#soneitibankan" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 曽根壱番館
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#sonenibankan" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 曽根弐番館
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#tokuyoshi" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 徳吉
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#nagainumaru" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 永犬丸
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#honjoitibankan" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 本城壱番館
              </a>
            </li>
            <li class="p-location-list__item">
              <a href="#honjonibankan" class="p-location-list__item-title">
                住宅型有料老人ホーム いこいの里 本城弐番館
              </a>
            </li>
          </ul>

          <!-- 2 -->
          <div class="p-location-list__list-left">
            <ul class="p-location-list__list">
              <li class="p-location-list__item">
                <a href="#obato" class="p-location-list__item-title">
                  介護付有料老人ホーム いこいの里 小波瀬
                </a>
              </li>
              <li class="p-location-list__item">
                <a href="#obato_group" class="p-location-list__item-title">
                  グループホーム いこいの里 小波瀬
                </a>
              </li>
            </ul>

            <!-- 3 -->
            <ul class="p-location-list__list">
              <li class="p-location-list__item">
                <a href="#itoshima" class="p-location-list__item-title">
                  住宅型有料老人ホーム いこいの里 糸島
                </a>
              </li>
            </ul>

            <!-- 4 -->
            <ul class="p-location-list__list">
              <li class="p-location-list__item">
                <a href="#koga" class="p-location-list__item-title">
                  住宅型有料老人ホーム いこいの里 古賀
                </a>
              </li>
            </ul>

            <!-- 5 -->
            <ul class="p-location-list__list">
              <li class="p-location-list__item">
                <a href="#imari" class="p-location-list__item-title">
                  住宅型有料老人ホーム いこいの里 伊万里
                </a>
              </li>
              <li class="p-location-list__item">
                <a href="#karatu" class="p-location-list__item-title">
                  住宅型有料老人ホーム いこいの里 唐津
                </a>
              </li>
              <li class="p-location-list__item">
                <a href="#koseno" class="p-location-list__item-title">
                  住宅型有料老人ホーム いこいの里 巨勢
                </a>
              </li>
            </ul>

          </div>


        </div>
      </div>
    </div>
  </section>


  <!-- facility -->
  <section class="p-facility l-facility" id="">
    <div class="p-facility__inner inner">
      <div class="p-facility__wrap">
        <div class="p-facility-title__content">
          <h2 class="p-facility__title main-title iconHome">施設一覧</h2>
          <p class="p-facility__update forPC">
            最終更新日：<?php the_modified_date("Y年m月d日"); ?>
          </p>
        </div>
        <p class="p-facility__info-text  u-font24 u-w400 forPC">
          複数事業所を運営しておりますので、急な対応や緊急の状況にもいずれかの施設にてご対応が可能です。<br>
          詳しくはお問い合わせください。
        </p>
        <ul class="p-facility-btn__list forSP">
          <li class="p-facility-btn__item">
            <a href="#nakahara" class="p-facility-btn__link">
              北九州市
            </a>
          </li>
          <ul class="p-facility-btn__list-child">
            <li class="p-facility-btn__item">
              <a href="#usamati" class="p-facility-btn__link">
                苅田
              </a>
            </li>
            <li class="p-facility-btn__item">
              <a href="#usamati" class="p-facility-btn__link">
                糸島
              </a>
            </li>
            <li class="p-facility-btn__item">
              <a href="#usamati" class="p-facility-btn__link">
                古賀
              </a>
            </li>
            <li class="p-facility-btn__item">
              <a href="#usamati" class="p-facility-btn__link">
                佐賀
              </a>
            </li>
          </ul>
        </ul>
        <ul class="p-facility__list">
          <p class="p-facility__update forSP">
            最終更新日：<?php the_modified_date("Y年m月d日"); ?>
          </p>
          <?php
          $args = array(
            'post_type' => 'facilitie',
            'posts_per_page' => -1,
          );
          $facility = new WP_Query($args);
          if ($facility->have_posts()) :
            while ($facility->have_posts()) :
              $facility->the_post();

              // テンプレートパーツの読み込み
              get_template_part('template-parts/facility-item');
            endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </ul>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
