<?php get_header(); // ヘッダーを取得
?>

<main id="news">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item'); ?>

  <!-- p-blog -->
  <section class="p-blog">
    <div class="inner">
      <h2 class="main-title">お知らせ一覧</h2>
      <div id="topics_block">
        <div class="">
          <div class="p-about__note">
            <!-- ブログの内容 -->
            <dl>
              <?php $args = array(
                'post_type' => 'news',
                'posts_per_page' => 10 // 表示件数
              );
              $news_query = new WP_Query($args);
              if ($news_query->have_posts()) :
                while ($news_query->have_posts()) :
                  $news_query->the_post();
              ?>
                  <dt>
                    <?php the_time('Y.m.j'); ?>
                  </dt>
                  <dd>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </dd>
              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </dl>
          </div>
        </div>

      </div>

      <!-- ページナビゲーション -->
      <div class="p-pagenavi-list">
      <div class="p-pagenavi-list__inner">
        <!-- WP-Pagenavi-listで出力される部分 ここから -->
        <?php wp_pagenavi(); ?>
        <!-- WP-Pagenavi-listで出力される部分 ここまで -->
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

<?php get_footer(); // フッターを取得
?>
