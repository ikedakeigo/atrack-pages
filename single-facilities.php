<?php

/**
 * Template Name: 施設詳細ページ
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main id="p-facilities-single">
      <!-- ページTop -->
      <?php get_template_part('template-parts/pageTop-item') ?>
      <!-- facilities-single-top -->
      <div class="">
        <!-- カスタムフィールドの出力 -->

        <section class="p-facilities-single-top l-facilities-single-top  " id="">
          <div class="p-facilities-single-top__inner inner">
            <div class="p-facilities-single-top__title-wrap">
              <h1 class="p-facilities-single-top__title iconHome">
                <span><?php echo the_title(); ?></span>
              </h1>
              <p class="p-facilities-single-top__sub-title">
                <?php echo get_field('sub-title'); ?>
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php
                $image = get_field('top-image');
                if ($image) {
                  // 画像のURL
                  echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                }
                ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  <?php echo get_field('info-text') ?>
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- facilities-single-access -->
        <section class="p-facilities-single-access l-facilities-single-access  " id="">
          <div class="p-facilities-single-access__inner inner">
            <div class="p-facilities-single-access__title-wrap">
              <h2 class="p-facilities-single__title main-title iconMap">
                <span>アクセス</span>
              </h2>
            </div>
            <div class="p-facilities-single-access__wrap">
              <div class="p-facilities-single-access__map-wrap">
                <div class="p-facilities-single-access__map">
                  <?php
                  $map_iframe = get_field('single-map');
                  if ($map_iframe) {
                    echo $map_iframe; // iframeコードをそのまま出力
                  }
                  ?>

                </div>
                <p class="align_r mr10 mb10 font11"><a href="#" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    <?php
                    $custom_postNum = get_field('post_number');

                    if ($custom_postNum) {
                      $formatted_postNum = format_japanese_phone_number($custom_postNum);
                      echo '〒：' . esc_html($formatted_postNum);
                    }

                    echo get_post_meta(get_the_ID(), 'address', true);
                    echo '<br>';
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
                    <!-- 〒804-0011 福岡県北九州市戸畑区中原西2丁目7-8 <br>

                    TEL：093-873-3151 FAX：093-873-3156 -->
                  </dd>
                </dl>
                <?php if (get_field('jr_use')) { ?>
                  <dl class="p-facilities-single-access__list">
                    <dt class="p-facilities-single-access__item iconTrain">
                      JRをご利用の方
                    </dt>
                    <dd class="p-facilities-single-access__item">
                      <?php echo get_field('jr_use') ?>
                    </dd>
                  </dl>
                <?php } ?>
                <?php if (get_field('car_use')) { ?>
                  <dl class="p-facilities-single-access__list">
                    <dt class="p-facilities-single-access__item iconTrain">
                      車をご利用の方
                    </dt>
                    <dd class="p-facilities-single-access__item">
                      <?php echo get_field('car_use') ?>
                    </dd>
                  </dl>
                <?php } ?>
                <?php if (get_field('acs_use')) { ?>
                  <dl class="p-facilities-single-access__list">
                    <dt class="p-facilities-single-access__item iconTrain">
                      アクセス
                    </dt>
                    <dd class="p-facilities-single-access__item">
                      <?php echo get_field('acs_use') ?>
                    </dd>
                  </dl>
                <?php } ?>
              </div>
            </div>
          </div>
        </section>
        <!-- facilities-single-price -->
        <section class="p-facilities-single-price l-facilities-single-price  " id="">
          <div class="p-facilities-single-price__inner inner">
            <div class="p-facilities-single-price__title-wrap">
              <h2 class="p-facilities-single__title main-title iconMath">
                <span>料金のご案内</span>
              </h2>
            </div>
            <div class="p-facilities-single-price__wrap">
              <h3 class="p-facilities-single-price__subT">
                <span class="pl_titleInner">
                  入居費用
                </span>
              </h3>
              <!-- 料金テーブル -->
              <table class="p-facilities-single__table">
                <tbody>
                  <tr>
                    <th class="w35per">
                      <?php echo get_field('price_or'); ?>
                    </th>
                    <td>
                      <?php
                      $bool_value = get_field('boolan');
                      if ($bool_value) {
                        echo '共済会費';
                      } else {
                        echo '&nbsp';
                      }
                      ?>
                    </td>
                    <td class="align_r">
                      <?php
                      $price_1 = get_field('price_1');
                      if ($price_1 !== false && $price_1 !== null) {
                        echo number_format($price_1);
                      }
                      ?>
                      円
                    </td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="4">月額利用料</th>
                    <td>家賃</td>
                    <td class="align_r">
                      <?php
                      $price_2 = get_field('price_2');
                      if ($price_2 !== false && $price_2 !== null) {
                        echo number_format($price_2);
                      }
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td>食費</td>
                    <td class="align_r">
                      <?php
                      $price_3 = get_field('price_3');
                      if ($price_3 !== false && $price_3 !== null) {
                        echo number_format($price_3);
                      }
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td>管理費</td>
                    <td class="align_r">
                      <?php
                      $price_4 = get_field('price_4');
                      if ($price_4 !== false && $price_4 !== null) {
                        echo number_format($price_4);
                      }
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n"><strong>月額合計</strong></td>
                    <td class="align_r color_orange border_n "><strong>
                        <?php
                        $total_price =  $price_2 + $price_3 + $price_4;
                        echo number_format($total_price);
                        ?>
                        円</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facilities-single-price__wrap">
              <h3 class="p-facilities-single-price__subT">
                <span class="pl_titleInner">
                  月額費用の目安
                </span>
              </h3>
              <!-- 料金テーブル -->
              <table class="p-facilities-single__table">
                <thead>
                  <tr>
                    <th class="w33per">月額利用料</th>
                    <th class="w33per">介護保険料<br>
                      1割負担</th>
                    <th class="w25per">1ヶ月の<br>お支払い金額の目安</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="5" class="align_c border_n">
                      <?php echo number_format($total_price); ?>円
                    </td>
                    <td class="align_c">要介護1 <?php echo number_format(get_field('priceMonth_2'))  ?>円</td>
                    <td class="align_c">
                      <?php
                      $totalPriceMonth_1 = $total_price + get_field('priceMonth_2');
                      echo number_format($totalPriceMonth_1);
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 <?php echo number_format(get_field('priceMonth_3'))  ?>円</td>
                    <td class="align_c">
                      <?php
                      $totalPriceMonth_2 = $total_price + get_field('priceMonth_3');
                      echo number_format($totalPriceMonth_2);
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 <?php echo number_format(get_field('priceMonth_4'))  ?>円</td>
                    <td class="align_c">
                      <?php
                      $totalPriceMonth_3 = $total_price + get_field('priceMonth_4');
                      echo number_format($totalPriceMonth_3);
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 <?php echo number_format(get_field('priceMonth_5'))  ?>円</td>
                    <td class="align_c">
                      <?php
                      $totalPriceMonth_4 = $total_price + get_field('priceMonth_5');
                      echo number_format($totalPriceMonth_4);
                      ?>
                      円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 <?php echo number_format(get_field('priceMonth_6'))  ?>円</td>
                    <td class="align_c border_n">
                      <?php
                      $totalPriceMonth_5 = $total_price + get_field('priceMonth_6');
                      echo number_format($totalPriceMonth_5);
                      ?>
                      円</td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span>
            </div>
            <div class="p-facilities-single-price__wrap">
              <h3 class="p-facilities-single-price__subT">
                <span class="pl_titleInner">
                  協力医療機関
                </span>
              </h3>
              <p class="p-facilities-single-price__text">
                協力病院との連携により、健康保持につとめ必要に応じて受診・入院の適切な処遇を行います。
              </p>
              <!-- 料金テーブル -->
              <table class="p-facilities-single__table medical">
                <tbody>
                  <?php if (get_field('medical-title_1')) { ?>
                    <tr>
                      <th class="w33per">
                        <?php echo get_field('medical-title_1') ?>
                      </th>
                      <td>
                        <?php
                        $checkbox_value = get_field('medical-check_1');
                        if ($checkbox_value) {
                          // キーと値の両方をforeachで取得
                          foreach ($checkbox_value as $key => $value) {
                            // 最後の要素ではない場合は値の後に「・」を付ける
                            if ($key !== array_key_last($checkbox_value)) {
                              echo $value . '・';
                            } else {
                              // 最後の要素の場合は「・」を付けずに値だけを出力
                              echo $value;
                            }
                          }
                        }
                        ?>
                      </td>
                    </tr>
                  <?php } ?>
                  <?php if (get_field('medical-title_2')) { ?>
                    <tr>
                      <th><?php echo get_field('medical-title_2') ?></th>
                      <td>
                        <?php
                        $checkbox_value = get_field('medical-check_2');
                        if ($checkbox_value) {
                          // キーと値の両方をforeachで取得
                          foreach ($checkbox_value as $key => $value) {
                            // 最後の要素ではない場合は値の後に「・」を付ける
                            if ($key !== array_key_last($checkbox_value)) {
                              echo $value . '・';
                            } else {
                              // 最後の要素の場合は「・」を付けずに値だけを出力
                              echo $value;
                            }
                          }
                        }
                        ?>
                      </td>
                    </tr>
                  <?php } ?>
                  <?php if (get_field('medical-title_3')) { ?>
                    <tr>

                      <th><?php echo get_field('medical-title_3') ?></th>
                      <td>
                        <?php
                        $checkbox_value = get_field('medical-check_3');
                        if ($checkbox_value) {
                          // キーと値の両方をforeachで取得
                          foreach ($checkbox_value as $key => $value) {
                            // 最後の要素ではない場合は値の後に「・」を付ける
                            if ($key !== array_key_last($checkbox_value)) {
                              echo $value . '・';
                            } else {
                              // 最後の要素の場合は「・」を付けずに値だけを出力
                              echo $value;
                            }
                          }
                        }
                        ?>
                      </td>
                    </tr>
                  <?php } ?>
                  <?php if (get_field('medical-title_4')) { ?>
                    <tr>
                      <th class="border_n"><?php echo get_field('medical-title_4') ?></th>
                      <td class="border_n">
                        <?php
                        $checkbox_value = get_field('medical-check_4');
                        if ($checkbox_value) {
                          // キーと値の両方をforeachで取得
                          foreach ($checkbox_value as $key => $value) {
                            // 最後の要素ではない場合は値の後に「・」を付ける
                            if ($key !== array_key_last($checkbox_value)) {
                              echo $value . '・';
                            } else {
                              // 最後の要素の場合は「・」を付けずに値だけを出力
                              echo $value;
                            }
                          }
                        }
                        ?>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>

      <!-- サイドバー -->
      <?php get_sidebar('facilites'); ?>
    </main>

    <?php get_template_part('template-parts/contact-item'); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>
