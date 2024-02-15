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

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <!-- facility -->
  <section class="p-facility l-facility" id="">
    <div class="p-facility__inner inner">
      <div class="p-facility__wrap">
        <h2 class="p-facility__title main-title">施設一覧</h2>

        <p class="p-facility__update">
          最終更新日：<?php the_modified_date("Y年m月d日"); ?>
        </p>
        <ul class="p-facility__list">
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

        <p class="p-facility__info-text forPC">
          複数事業所を運営しておりますので、急な対応や緊急の状況にもいずれかの施設にてご対応が可能です。<br />
          詳しくはお問い合わせください。
        </p>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
