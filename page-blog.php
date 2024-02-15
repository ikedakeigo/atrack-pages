<?php

/**
 * Template Name: ブログ
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>


<main id="blog">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <section class="p-single-blog l-single-blog">
    <div class="p-single-blog__inner inner">
      <div class="p-single-blog__mv">
        <img src="assets/img/common/dummy.jpg" alt="省略" />
      </div>
      <h2 class="p-p-single-blog__title main-title">いこいの里ブログ</h2>
      <div class="p-single-blog__meta">
        <time class="p-single-blog__date" datetime="2024-01-01">2024.01.01</time>
        <!-- <p class="p-single-blog__category">カテゴリ</p> -->
      </div>
      <!-- <h1 class="p-single-blog__title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1> -->

      <div class="p-single-blog__content">
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <p>本文テキストが入ります。本文テキストが入ります。本文テキストが入ります。</p>
        <div class="p-single-blog__bottom-img">
          <figure>
            <img src="assets/img/common/dummy.jpg" alt="省略" />
          </figure>
          <figure>
            <img src="assets/img/common/dummy.jpg" alt="省略" />
          </figure>
          <figure>
            <img src="assets/img/common/dummy.jpg" alt="省略" />
          </figure>
        </div>
      </div>

      <div class="p-pagenavi">
        <div class="p-pagenavi__inner">
          <!-- WP-PageNaviで出力される部分 ここから -->
          <div class="wp-pagenavi" role="navigation">
            <!-- <span class="pages">1 / 100</span> -->
            <!-- <a class="first" href="#">«</a> -->
            <a class="previouspostslink" rel="prev" href="#"></a>
            <a class="page larger" href="#">一覧に戻る</a>
            <a class="nextpostslink" rel="next" href="#"></a>
            <!-- <a class="last" href="#">»</a> -->
          </div>
          <!-- WP-PageNaviで出力される部分 ここまで -->
        </div>
      </div>
    </div>
  </section>

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>

<?php get_footer(); ?>
