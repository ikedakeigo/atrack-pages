<aside class="p-archive-blog__sidebar">
  <ul class="p-archive-blog__sidebar-list">
    <?php
    if (is_singular('blog')) {
      $post_type = 'blog';
      $title = 'ブログ';
    } elseif (is_singular('news')) {
      $post_type = 'news';
      $title = 'お知らせ';
    }

    if (isset($title)) :
    ?>
      <li class="p-archive-blog__sidebar-item">
        <h3 class="p-archive-blog__sidebar-title">
          <?php echo $title; ?>
        </h3>
        <ul class="p-archive-blog__title-list">
          <?php
          $args = array(
            'post_type' => $post_type,
            'posts_per_page' => 10 // 表示件数
          );
          $blog_query = new WP_Query($args);
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
              $blog_query->the_post();
          ?>
              <li class="p-archive-blog__title-item">
                <a class="p-archive-blog__title-link" href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...'); ?></a>
              </li>
          <?php
            endwhile;
          endif;
          wp_reset_postdata(); // クエリのリセット
          ?>
        </ul>
      </li>
    <?php endif; ?>
  </ul>
</aside>
