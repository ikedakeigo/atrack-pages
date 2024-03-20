<?php

/**
 * Template Name: よくあるご質問
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="faq">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>
  <!-- faq -->
  <section class="p-faq l-faq delay" id="">
    <div class="p-faq__inner inner">
      <h2 class="p-faq__title main-title iconQa u-textMdCenter delay">いこいの里に関するよくある質問</h2>
      <ul class="p-faq__list p-faq-list delay">
        <?php $args = array(
          'post_type' => 'faq',
          'posts_per_page' => -30, // 表示する件数
          'orderby' => 'date', // 日付でソート
          'order' => 'ASC', // DESCで最新から表示、ASCで最古から表示
        );
        $the_query =  new WP_Query($args);

        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) :
            $the_query->the_post();
        ?>

            <li class="p-faq-list__item">
              <p class="p-faq-list__item-question js-faq-question">
                <span>Q.</span>
                <?php the_title(); ?>
              </p>
              <div class="p-faq-list__item-answer">
                <span>A.</span>
                <?php the_content(); ?>
              </div>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>
    </div>
  </section>

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
