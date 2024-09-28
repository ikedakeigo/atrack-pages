<?php get_header(); ?>

<main id="top">

  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>
  <!-- mv -->
  <section class="p-mv l-mv delay">
    <div class="p-mv__inner">
      <div class="p-mv__title-wrap delay">
        <h2 class="p-mv__main-title">
          <span>幸</span>せな日々を続ける、<br>
          それを<span>喜</span>びあえる社会に
        </h2>
      </div>
      <div class="p-mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array('post_type' => 'slider', 'posts_per_page' => -1);
          $slider_query = new WP_Query($args);

          if ($slider_query->have_posts()) :
            while ($slider_query->have_posts()) : $slider_query->the_post();
              $image = get_field('image'); // ACF を使用している場合
              if (!empty($image)) : ?>
                <div class="swiper-slide">
                  <div class="swiper-img">
                    <?php
                    // 画像のIDから代替テキストを取得
                    $alt_text = get_post_meta($image['id'], '_wp_attachment_image_alt', true);
                    // 代替テキストが空の場合は、代わりのテキストを設定（例: 投稿のタイトル）
                    if (empty($alt_text)) {
                      $alt_text = get_the_title();
                    }
                    ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
                  </div>
                </div>

              <?php else : ?>

                <!-- <div class="swiper-slide">
                  <div class="swiper-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="ダミー" />
                  </div>
                </div> -->
          <?php endif;
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>


  <!-- about -->
  <section class="p-about l-about delay" id="">
    <div class="p-about__inner inner delay">
      <div class="p-about__wrap">
        <h2 class="p-about__title main-title u-textMdCenter delay">いこいの里ってどんな施設？</h2>
        <p class="p-about__text u-w700 delay u-lh20">
          「いこいの里」は、介護が必要な方が現在のライフスタイルに合わせて選べる有料老人ホームです。<br>
          <br>
          入居者様の個々の尊厳を大切にした介護サービスの提供は勿論、地域社会との繋がりや絆を尊重した交流を大切にしています。<br>
          <br>
          そして、いこいの里の一番のこだわりは、 入居者様の心に輝きや活力を生み出す高品質な介護サービスを提供する職員です。入居者様の幸せと職員の幸せの好循環が『いこいの里』の魅力なのです。
        </p>
        <div class="p-about__text--main delay">
          <h2 class="u-font32 u-w500 delay">
            『いこいの里』はこれまで<span class="u-font40 u-w700 xl"><br class="forSP"><span class="red">20</span>年以上<span class="l">に渡って</span></span><br>
            色々な地域で大勢の方に<br class="forSP">選んでいただいています。
          </h2>
        </div>
        <div class="p-about__listBox delay">
          <?php get_template_part('template-parts/about-item'); ?>
        </div>


        <div class="p-about__img innerWidth delay">
          <a href="/blog"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_mv.png" alt="" class=""></a>
        </div>
        <div class="p-about__text-box delay">
          <h3 class="p-about__subtitle">TOPICS</h3>
          <div class="p-about__note" id="news">
            <!-- トピックスの内容 -->
            <dl>
              <!-- 最新記事を3つ表示させる -->
              <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3, // 表示件数
                'orderby' => 'date', // 日付で並び替え
                'order' => 'DESC' // 降順に並び替え
              );
              $topics_query = new WP_Query($args);
              if ($topics_query->have_posts()) :
                while ($topics_query->have_posts()) :
                  $topics_query->the_post();
              ?>
                  <dt>
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
                    <?php
                    $post_id = get_the_ID(); // 現在の投稿のIDを取得
                    $taxonomy = 'news-cat'; // カスタムタクソノミーの名前を指定
                    $terms = get_the_terms($post_id, $taxonomy);

                    if ($terms && !is_wp_error($terms)) :
                      $category = $terms[0];
                    ?>
                      <span class="entry-item-tag">
                        <?php echo $category->name; ?>
                      </span>
                    <?php endif; ?>
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
          <h3 class="p-about__subtitle">BLOG</h3>
          <div class="p-about__note" id="blog">
            <!-- ブログの内容 -->
            <dl>
              <?php $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3, // 表示件数
                'orderby' => 'date', // 日付で並び替え
                'order' => 'DESC' // 降順に並び替え
              );
              $blog_query = new WP_Query($args);
              if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) :
                  $blog_query->the_post();
              ?>
                  <dt>
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
                    <?php
                    $post_id = get_the_ID(); // 現在の投稿のIDを取得
                    $taxonomy = 'blog-cat'; // カスタムタクソノミーの名前を指定
                    $terms = get_the_terms($post_id, $taxonomy);

                    if ($terms && !is_wp_error($terms)) :
                      $category = $terms[0];
                    ?>
                      <span class="entry-item-tag">
                        <?php echo $category->name; ?>
                      </span>
                    <?php endif; ?>
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

        <div class="p-about__content delay">
          <h3 class="p-about__subtitle-map">
            <span>福岡県および<br class="forSP">佐賀県の施設一覧</span>
          </h3>
          <div class="p-about__content-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/map.png" alt="福岡県および佐賀県の施設一覧">
            <span>福岡県および<br class="forSP">佐賀県の施設一覧</span>
            </h3>
          </div>

          <!-- jQuery -->
          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
          <!-- jQuery RWD Image Maps -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>

          <script>
            jQuery('img[usemap]').rwdImageMaps();
          </script>

        </div>
      </div>
  </section>

  <!-- feature -->
  <section class="p-feature l-feature delay" id="">
    <div class="p-feature__inner inner delay">
      <div class="p-feature__wrap">
        <h2 class="p-feature__title main-title iconHome u-textMdCenter delay">いこいの里が選ばれる理由</h2>

        <ol class="cords__list cords-list delay">
          <li class="cords-list__item delay">
            <a tabindex="-1">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/cords_01.jpg" alt="第一優先：接遇" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <h3 class="cords-list__item-title u-font20 u-w700">第一優先：接遇</h3>
                </div>
                <p class="cords-list__item-text u-w400 u-lh20">
                  円滑なコミュニケーションや信頼関係を築くために 入居者様の目線に立ち、一人ひとりに寄り添ったサポートを心がけています。 接遇を大切にすることでお客様によりよい生活を提供いたします。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item delay">
            <a tabindex="-1">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/cords_02.png" alt="言葉遣い" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">言葉遣い</p>
                </div>
                <p class="cords-list__item-text u-w400 u-lh20">
                  入居者様へは敬語がお約束です。心地よい声のトーンとスピードを意識し、表情と目線を合わせて会話にも安心感を心がけます。
                  また意見や要望に真摯に耳を傾け、聴く姿勢を大切にします。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item delay">
            <a tabindex="-1">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/cords_03.jpg" alt="立ち振舞い" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">立ち振舞い</p>
                </div>
                <p class="cords-list__item-text u-w400 u-lh20">
                  入居者様やご家族様、職員間においても互いを尊重し、敬意を払い、礼儀正しく接します。そのような人間関係によって心地よい住環境を作ります。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item delay">
            <a tabindex="-1">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/cords_04.jpg" alt="医療的なサポートについて" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700 sp-Pl">医療的なサポートについて</p>
                </div>
                <p class="cords-list__item-text u-w400 u-lh20">
                  協力医療機関による訪問診療、提携薬局から薬の配達、看護職員による服薬管理などの医療的なサポート体制を整えております。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item delay">
            <a tabindex="-1">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/cords_05.png" alt="自慢の手作り食事" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">自慢の手作り食事</p>
                </div>
                <p class="cords-list__item-text u-w400 u-lh20">
                  入居者様にとって食事は毎日の生活の中で最も生きる活力に繋がるもの。だからこそ、 いこいの里では入居されるまでにご家庭で召し上がられていたような、温かい料理、食べやすい料理、季節感を取り入れた料理を、手作りしてご提供しています。 入居者様の状態に合わせ、刻み食・嚥下食などにも対応しております。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item delay">
            <a tabindex="-1">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/cords_06.jpg" alt="介護サービスについて" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">介護サービスについて</p>
                </div>
                <p class="cords-list__item-text u-w400 u-lh20">
                  たしかな知識と技術をもって、入居者様の尊厳を大切にした介護サービスを提供しています。 特に排泄・入浴に関しての同性介護（同性の職員が対応する）にはこだわりを持って取り組んでいます。<br>
                  <br>
                  また、いこいの里では終の住処としてお過ごしいただくため、看取りまでの介護サービスを行っております。
                </p>
              </div>
            </a>
          </li>
        </ol>
      </div>
    </div>
  </section>


  <!-- product -->
  <section class="p-product l-product delay" id="">
    <div class="p-product__inner inner delay">
      <div class="p-product__wrap">
        <h2 class="p-product__title main-title delay">
          <span class="num">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/num_4.png" alt="4">
          </span>
          <span>
            いこいの里<br>
            つのお約束
          </span>
        </h2>
        <p class="p-product__text">人が介護の価値を磨きます</p>
        <ul class="p-product__list delay">
          <li class="p-product-list__item delay">
            <h3 class="p-product-list__item-title">お約束1</h3>
            <p class="p-product-list__item-text">
              お客さまへは敬語
            </p>
          </li>
          <li class="p-product-list__item delay">
            <h3 class="p-product-list__item-title">
              お約束2
            </h3>
            <p class="p-product-list__item-text">
              挨拶は立ち止まって
            </p>
          </li>
          <li class="p-product-list__item delay">
            <h3 class="p-product-list__item-title">
              お約束3
            </h3>
            <p class="p-product-list__item-text">
              同性介護が基本
            </p>
          </li>
          <li class="p-product-list__item delay">
            <h3 class="p-product-list__item-title">
              お約束4
            </h3>
            <p class="p-product-list__item-text">
              排泄はトイレで
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/flow-item'); ?>

  <!-- terms -->
  <section class="p-terms l-terms delay" id="">
    <div class="p-terms__inner inner">
      <div class="p-terms__wrap delay">
        <h2 class="p-terms__title main-title iconHome u-textMdCenter">入居条件</h2>

        <div class="p-terms__content delay">
          <div class="p-terms__content-inner">
            <h3 class="p-terms__subTitle u-font32 u-w700 delay">原則</h3>
            <ol class="p-terms__list  delay">
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  要介護認定を受けられていること。<br>
                  (申請準備中、申請中であっても入居可能です。)
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  症状が安定しており、在宅生活が可能な状況にあること。
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  自傷行動、他害行動がないこと。
                </p>
              </li>
            </ol>
          </div>
        </div>

        <?php get_template_part('template-parts/terms-tables') ?>
      </div>
    </div>
  </section>
  <!-- <div class="p-terms__content delay">
          <div class="p-terms__content-inner">
            <h3 class="p-terms__subTitle u-w700 u-textMdCenter delay">入居困難及び相談が必要な方</h3>
            <ol class="p-terms__list delay">
              <li class="p-terms-list__item">
                <span class="num-o"></span>
                <p class="p-terms-list__item-text">
                  夜間帯の鼻腔内吸引
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num-o"></span>
                <p class="p-terms-list__item-text">
                  自傷行為・他害行為
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num-o"></span>
                <p class="p-terms-list__item-text">
                  アルコール依存症
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num-o"></span>
                <p class="p-terms-list__item-text">
                  頻繁な徘徊により、医療チューブを触る可能性のある方
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num-o"></span>
                <p class="p-terms-list__item-text">
                  重度認知症
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num-o"></span>
                <p class="p-terms-list__item-text">
                  重度精神疾患
                </p>
              </li>
            </ol>
            <p>
              個別で判断が必要な場合には、個別で判断させていただきます。
            </p>
          </div>
        </div>




  <?php get_template_part('template-parts/after-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>

</main>

<?php get_footer(); ?>
