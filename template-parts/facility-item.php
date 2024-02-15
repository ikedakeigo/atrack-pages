
    <li class="p-facility-list__item">
      <?php
      $url = get_field('url');
      ?>

      <a href="<?php the_field('url'); ?>">
        <div class="p-facility-list__item-img">
          <?php
          $image = get_field('image');
          if (!empty($image)) :
          ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt=" <?php echo esc_attr($image['alt']); ?>">
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/dummy.jpg" alt="ダミー" />
          <?php endif; ?>
        </div>
        <div class="p-facility-list__item-content">
          <p class="p-facility-list__item-title">
            <?php the_title(); ?>
            <?php the_post_thumbnail(); ?>
          </p>
          <p class="p-facility-list__item-text">
            <?php
            $custom_postNum = get_field('post_number');

            if ($custom_postNum) {
              $formatted_postNum = format_japanese_phone_number($custom_postNum);
              echo '〒：' . esc_html($formatted_postNum);
            }
            echo '<br>';
            echo get_post_meta(get_the_ID(), 'address', true);
            ?>
          </p>
          <p class="p-facility-list__item-text">
            <?php
            $custom_tel = get_field('tel');
            $custom_fax = get_field('fax');

            if ($custom_tel) {
              $formatted_tel = format_japanese_phone_number($custom_tel);
              echo 'TEL：' . esc_html($formatted_tel);
            }
            echo '<br>';
            if ($custom_fax) {
              $formatted_fax = format_japanese_phone_number($custom_fax);
              echo 'FAX：' . esc_html($formatted_fax);
            }
            ?>
          </p>
        </div>
      </a>
    </li>

