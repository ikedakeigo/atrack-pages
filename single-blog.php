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
            <img class="forPC" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_mv.png" alt="mv" />
            <img class="forSP" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_mv_sp.png" alt="mv" />
          </div>

          <div class="p-single-blog__list">
            <article>
              <!-- 投稿メタ情報 (日付とカテゴリー) -->
              <div class="p-single-blog__meta-wrap">
                <div class="p-single-blog__meta">
                  <?php
                  $data = get_field('data');
                  // 日付が存在する場合はフォーマットを変更して表示
                  if ($data) {
                    // DateTimeオブジェクトを作成
                    $day = new DateTime($data);
                    // フォーマットを指定して出力
                    echo '<time datetime="' . esc_attr($day->format('c')) . '">' . esc_html($day->format('Y.m.d')) . '</time>';
                  }
                  ?>
                </div>
                <?php
                $post_id = get_the_ID(); // 現在の投稿のIDを取得
                $taxonomy = 'blog-cat'; // カスタムタクソノミーの名前を指定
                $terms = get_the_terms($post_id, $taxonomy);

                if ($terms && !is_wp_error($terms)) :
                  foreach ($terms as $term) :
                ?>
                    <div class="entry-item-tag"><?php echo $term->name; ?></div>
                <?php
                  endforeach;
                endif;
                ?>
              </div>
              <div class="p-single-blog__title-wrap">
                <!-- 投稿タイトル -->
                <h2 class="p-single-blog__title main-title">
                  <?php the_title(); ?>
                </h2>

              </div>

              <!-- 投稿コンテンツ -->
              <div class="p-single-blog__content">
                <?php the_field('textarea'); ?>
                <div class="p-single-blog__bottom-img">
                  <?php for ($i = 1; $i <= 8; $i++) : ?>
                    <?php $image = get_field('image_' . $i); ?>
                    <?php if ($image) : // 画像があるか確認

                    ?>
                      <figure class="js-modal-open" data-target="<?php echo $i; ?>">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </figure>
                      <div class="p-blog-list__modal p-modal-blog js-modal" id="<?php echo $i ?>">
                        <button class="p-modal__close-button js-modal-close"><span></span>close</button>
                        <div class="p-modal-blog__inner">
                          <figure>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          </figure>
                        </div>
                      </div>
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
                    <a class="page larger" href="<?php echo get_post_type_archive_link('blog'); ?>">一覧に戻る</a>
                    <?php next_post_link('%link', '');
                    if (!get_next_post_link()) {
                      echo '<a class="nextpostslink inactive" tabindex="-1" rel="next" ></a>';
                    }
                    ?>
                  </div>
                </div>
              </div>
            </article>
            <!-- サイドバー -->
            <?php get_sidebar(); ?>
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
