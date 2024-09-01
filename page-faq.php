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
      <?php
      function display_faq_category($category_name)
      {

        $args = array(
          'post_type' => 'faq',
          'posts_per_page' => -30, // 表示する件数
          'orderby' => 'menu_order', // 並び順
          'order' => 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'faq-cat',
              'field' => 'slug',
              'terms' => $category_name
            )
          )
        );
        $faq_query = new WP_Query($args);
        if ($faq_query->have_posts()) :
          echo "<ul class=\"p-faq__list p-faq-list delay\">";
          echo "<h3 class=\"p-faq-title inner\">{$category_name}</h3>";
          while ($faq_query->have_posts()) :
            $faq_query->the_post();
            echo "<li class=\"p-faq-list__item\">";
            echo "<p class=\"p-faq-list__item-question js-faq-question\">";
            echo "<span>Q.</span>";
            the_title();
            echo "</p>";
            echo "<div class=\"p-faq-list__item-answer\">";
            echo "<span>A.</span>";
            the_content();
            echo "</div>";
            echo "</li>";
          endwhile;
          echo "</ul>";
        endif;
        wp_reset_postdata();
      }
      ?>
      <?php display_faq_category("ご入居までのご質問") ?>
      <?php display_faq_category("医療、介護に関するご質問") ?>
      <?php display_faq_category("施設のサービスに関するご質問") ?>
      <?php display_faq_category("その他のご質問") ?>


      <!--
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
-->


    </div>
  </section>

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
