<?php get_header(); // ヘッダーを取得
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main id="blog">
      <!-- ページTop -->
      <?php get_template_part('template-parts/pageTop-item') ?>

      <section class="p-single-blog l-single-blog">
        <div class="p-single-blog__inner inner">

          <!-- 投稿のメイン画像 (アイキャッチ画像) -->
          <div class="p-single-blog__mv">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full', ['class' => 'p-single-blog__featured-image', 'alt' => get_the_title()]); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="デフォルト画像" />
            <?php endif; ?>
          </div>

          <!-- 投稿タイトル -->
          <h2 class="p-single-blog__title main-title"><?php the_title(); ?></h2>

          <!-- 投稿メタ情報 (日付とカテゴリー) -->
          <div class="p-single-blog__meta">
            <time class="p-single-blog__date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            <!-- カテゴリーの表示 -->
            <!-- <div class="p-single-blog__category">
              <?php the_category(', '); ?>
            </div> -->
          </div>

          <!-- 投稿コンテンツ -->
          <div class="p-single-blog__content">
            <?php the_content(); ?>
            <div class="p-single-blog__bottom-img">
              <?php for ($i = 1; $i <= 8; $i++) : ?>
                <?php $image = get_field('image_' . $i); ?>
                <?php if ($image) : // 画像があるか確認
                ?>
                  <figure>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </figure>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
          </div>


          <!-- ページナビゲーション -->
          <div class="p-pagenavi">
            <div class="p-pagenavi__inner">
              <div class="wp-pagenavi" role="navigation">
                <?php previous_post_link('%link', '');
                if (!get_previous_post_link()) {
                  echo '<a class="previouspostslink inactive" tabindex="-1" rel="prev" ></a>';
                }
                ?>
                <a class="page larger" href="/news">一覧に戻る</a>
                <?php next_post_link('%link', '');
                if (!get_next_post_link()) {
                  echo '<a class="nextpostslink inactive" tabindex="-1" rel="next" ></a>';
                }
                ?>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- access -->
      <?php get_template_part('template-parts/access-item');
      ?>

      <!-- location -->
      <?php get_template_part('template-parts/location-item');
      ?>

      <?php get_template_part('template-parts/contact-item'); ?>
    </main>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>
