<?php get_header(); ?>

<main id="top">

  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>
  <!-- mv -->
  <section class="p-mv l-mv">
    <div class="p-mv__inner">
      <div class="p-mv__title-wrap">
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
  <section class="p-about l-about" id="">
    <div class="p-about__inner inner">
      <div class="p-about__wrap">
        <h2 class="p-about__title main-title u-textMdCenter">いこいの里ってどんな施設？</h2>
        <p class="p-about__text u-w700">高齢者様の経済的な負担を軽減した『いこいの里シリーズ』は、ライフスタイルに合わせて選べる様々なカタチの住宅型有料老人ホームです。入居者様の個々の性格や個性、人生観を大切にした生活支援はもちろん、地域のお祭りに参加するなど、「繋がり」や「絆」を尊重した社会との交流を大切にしています。<br>
          <br>
          さらに職員の夢に向かうハツラツとした姿勢を真近で見ることで、入居者様の心に輝きや活力を与えるような好循環も生まれつつあります。職員の幸せが生み出す、こころのある介護が『いこいの里』の魅力です。<br>
          <br>
          要介護1〜5の幅広い介護ニーズ、病院受診・服薬管理などの医療的ニーズの両面で、安心してご入居いただける体制を整えております。
        </p>
        <div class="p-about__text--main">
          <h2 class="u-font32 u-w500">
            『いこいの里』はこれまで<span class="u-font40 u-w700 xl"><br class="forSP"><span class="red">20</span>年以上<span class="l">に渡って</span></span><br>
            色々な地域で大勢の方に<br class="forSP">選んでいただいています。
          </h2>
        </div>
        <div class="p-about__listBox">
          <ol class="p-about__list p-about-list">
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_01.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">01</span>
                <h3 class="p-about-list__item-title u-w900">
                  私たちが目指す社会
                </h3>
                <p class="p-about-list__item-text">
                  介護を必要とする人、それを支える人、全ての人の尊厳を守り、幸せな日々を続けられる事を喜び合える社会を創造します。
                </p>
              </div>
            </li>
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_01.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">02</span>
                <h3 class="p-about-list__item-title u-w900">お客様への想い</h3>
                <p class="p-about-list__item-text">
                  入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組んでいます。
                </p>
              </div>
            </li>
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_01.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">03</span>
                <h3 class="p-about-list__item-title u-w900">入居者様の尊厳</h3>
                <p class="p-about-list__item-text">
                  お客様それぞれの価値観に寄りそうために、ひとりの人間として敬意と関心を持って入居者様と接し、深く耳を傾け、思いを感じ取り、ご意向を確認しています。
                </p>
              </div>
            </li>
          </ol>
        </div>


        <div class="p-about__img innerWidth">
          <span>ブログバナー</span>
        </div>
        <div class="p-about__text-box">
          <h3 class="p-about__subtitle">TOPICS</h3>
          <div class="p-about__note" id="news">
            <!-- トピックスの内容 -->
            <dl>
              <!-- 最新記事を3つ表示させる -->
              <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3 // 表示件数
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
                'posts_per_page' => 3 // 表示件数
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

        <div class="p-about__content">
          <div class="p-about__content-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/map.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- feature -->
  <section class="p-feature l-feature" id="">
    <div class="p-feature__inner inner">
      <div class="p-feature__wrap">
        <h2 class="p-feature__title main-title iconHome u-textMdCenter">いこいの里が選ばれる理由</h2>

        <ol class="cords__list cords-list">
          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cords_01.png" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">第一優先：接遇</p>
                </div>
                <p class="cords-list__item-text u-w400">
                  円滑なコミュニケーションや信頼関係を築くために
                  入居者様の目線に立ち、一人ひとりに寄り添ったサポートを心がけています。
                  職員の接遇スキルや知識を身につけることで、より高い接遇が実現します。

                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cords_01.png" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">言葉遣い</p>
                </div>
                <p class="cords-list__item-text u-w400">
                  入居者様へは敬語がお約束です。心地よい声のトーンとスピードを意識し、表情と目線を合わせて会話にも安心感を心がけます。
                  また意見や要望に真摯に耳を傾け、聴く姿勢を大切にします。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cords_01.png" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">立ち振舞い</p>
                </div>
                <p class="cords-list__item-text u-w400">入居者様やその家族、同僚、他の職員に対して、尊重と礼儀正しい態度を持つことが大切です。職員は敬意を払いポジティブな雰囲気を醸し出します。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cords_01.png" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700 sp-Pl">医療的なサポートについて</p>
                </div>
                <p class="cords-list__item-text u-w400">
                  協力医療機関による訪問診療、提携薬局からのお薬の配達、看護職員による服薬管理などの医療的なサポート体制を整えております。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cords_01.png" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">自慢の手作り食事</p>
                </div>
                <p class="cords-list__item-text u-w400">入居者様にとって食事は毎日の生活の中で最も生きる活力に繋がるもの。だからこそ、 いこいの里ではご入居されるまでにご家庭で食べていらっしゃったような、温かい料理、食べやすい料理、季節感を取り入れた料理を、手作りしてご提供しています。 入居者様のご状態に合わせた刻み食・嚥下食なども、もちろん対応しております。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cords_01.png" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <div class="cords-list__item-titleBox">
                  <span class="num forPC"></span>
                  <p class="cords-list__item-title u-font20 u-w700">介護サービスについて</p>
                </div>
                <p class="cords-list__item-text u-w400">
                  たしかな知識と技術をもって、入居者様の尊厳を大切にした介護サービスを提供しています。 特に排泄・入浴に関しての同性介護（同性の職員が対応する）にはこだわりを持って取り組んでいます。<br>
                  <br>
                  また、いすに座れる方にはいすに座ってもらう、歩ける方には歩いていただく、など 「本人ができないこと」に目を向けるのではなく、「本人ができること」に目を向けた介護サービスを徹底しています。<br>
                  <br>
                  いこいの里は、終の住処としてターミナルケア（終末期介護）まで心のこもったお付き合いをさせていただきます。
                </p>
              </div>
            </a>
          </li>
        </ol>
      </div>
    </div>
  </section>


  <!-- product -->
  <section class="p-product l-product" id="">
    <div class="p-product__inner inner">
      <div class="p-product__wrap">
        <h2 class="p-product__title main-title">
          <span class="num">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/num_4.png" alt="4">
          </span>
          <span>
            いこいの里<br>
            つのお約束
          </span>
        </h2>
        <p class="p-product__text">人が介護の価値を磨きます</p>
        <ul class="p-product__list">
          <li class="p-product-list__item">
            <h3 class="p-product-list__item-title">お約束1</h3>
            <p class="p-product-list__item-text">
              お客さまへは敬語
            </p>
          </li>
          <li class="p-product-list__item">
            <h3 class="p-product-list__item-title">
              お約束2
            </h3>
            <p class="p-product-list__item-text">
              挨拶は立ち止まって
            </p>
          </li>
          <li class="p-product-list__item">
            <h3 class="p-product-list__item-title">
              お約束3
            </h3>
            <p class="p-product-list__item-text">
              同性介護が基本
            </p>
          </li>
          <li class="p-product-list__item">
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
  <section class="p-terms l-terms" id="">
    <div class="p-terms__inner inner">
      <div class="p-terms__wrap">
        <h2 class="p-terms__title main-title iconHome u-textMdCenter">入居条件</h2>

        <div class="p-terms__content">
          <div class="p-terms__content-inner">
            <h3 class="p-terms__subTitle u-font32 u-w700">原則</h3>
            <ol class="p-terms__list">
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  症状が安定しており、一定の医療行為の継続状態にあること
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  訪問診療医の診察で治療のできる状態にあること
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  症状がやや不安定であっても、入院の受け入れ体制の調整が可能な状態にあること
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  医療提供において、積極的な治療希望が本人、家族にない状態にあること
                </p>
              </li>
            </ol>
          </div>
        </div>

        <?php get_template_part('template-parts/terms-tables') ?>

        <div class="p-terms__content">
          <div class="p-terms__content-inner">
            <h3 class="p-terms__subTitle u-w700 u-textMdCenter">入居困難及び相談が必要な方</h3>
            <ol class="p-terms__list">
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  夜間帯の鼻腔内吸引
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  自傷行為・他害行為
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  アルコール依存症
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  頻繁な徘徊により、医療チューブを触る可能性のある方
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text">
                  重度認知症
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
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
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/after-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>

</main>

<?php get_footer(); ?>
