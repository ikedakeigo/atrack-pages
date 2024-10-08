<?php

/**
 * Template Name: お問い合わせ
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="contact">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <?php get_template_part('template-parts/contact-item'); ?>

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <!-- contact-botton -->
  <section class="p-contact-botton l-contact-botton" id="">
    <div class="p-contact-botton__inner inner">
      <div class="p-contact-botton__menu">
        <ul class="p-contact-botton__menu-list">
          <a href="/contact/" class="p-contact-botton__menu-item">
            <li class="p-contact-botton__menu-link">
              <!-- お問い合わせ -->
              <span>お問い合わせ</span>
            </li>
          </a>
          <a href="tel:093-871-5800" class="p-contact-botton__menu-item ">
            <li class=" p-contact-botton__menu-link">
              <!-- 電話番号 -->
              <span>電話する</span>
            </li>
          </a>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
