<?php get_header(); ?>

<main id="top">

  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>
  <!-- mv -->
  <section class="p-mv l-mv">
    <div class="p-mv__inner">
      <div class="p-mv__title-wrap">
        <h2 class="p-mv__main-title">メインタイトル</h2>
        <p class="p-mv__sub-title">ここにサブタイトルが入ります。<br />ここにサzzzブタイトルが入ります。</p>
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
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>" />
                  </div>
                </div>
              <?php else : ?>
                <div class="swiper-slide">
                  <div class="swiper-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="ダミー" />
                  </div>
                </div>
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
        <h2 class="p-about__title main-title">いこいの里ってどんな施設？</h2>
        <p class="p-about__text">ご高齢者様の経済的な負担を軽減した『いこいの里シリーズ』はライフスタイルに合わせて選べる様々なカタチの住宅型有料老人ホームです。 入居者様の個々の性格や個性、人生観を大切にした生活支援は勿論、地域のお祭りに参加するなど繋がりや絆を尊重した社会との交流を大切にしています。さらに 職員の夢に向かうハツラツとした姿勢を真近で見ることで、入居者様の心に輝きや活力を与えるような好循環も生まれつつあります。職員の幸せが生み出す、こころのある介護が『いこいの里』の魅力なのです。 また医師による往診・服薬、お薬の管理、協力病院との連携など手厚い介護サポートを提供することで、ご家族様に大変喜ばれています。</p>
        <div class="p-about__img innerWidth">
          <span>ブログバナー</span>
        </div>
        <div class="p-about__text-box">
          <h3 class="p-about__subtitle">TOPICS</h3>
          <div class="p-about__note">
            <!-- トピックスの内容 -->
            <dl>
              <dt>2024.01.31</dt>
              <dd><a href="#">トピックタイトル</a></dd>

              <dt>2024.01.31</dt>
              <dd><a href="#">トピックタイトル</a></dd>

              <dt>2024.01.31</dt>
              <dd><a href="#">トピックタイトル</a></dd>
            </dl>
          </div>
          <h3 class="p-about__subtitle">BLOG</h3>
          <div class="p-about__note">
            <!-- ブログの内容 -->
            <dl>
              <dt>2024.01.31</dt>
              <dd><a href="#">ブログタイトル</a></dd>
              <dt>2024.01.31</dt>
              <dd><a href="#">ブログタイトル</a></dd>
              <dt>2024.01.31</dt>
              <dd><a href="#">ブログタイトル</a></dd>
            </dl>
          </div>
        </div>
        <div class="p-about__content">
          <div class="p-about__left-column">
            <h3 class="p-about__left-title forPC">
              めんたいワイド［8分36秒］ <br />
              めんたいワイドのドキュめんのコーナーで放送されました。
            </h3>
            <h4>その他情報</h4>
            <div class="p-about__left-text">
              <span class="forPC">いこいの里ではお客様の安心を第一に考えます。</span>
              <ul class="listMemo01">
                <li style="font-size: unset" class="forSP"><span class="listMark01"></span>いこいの里では4つのお約束があります。</li>
                <li style="font-size: unset"><span class="listMark01"></span>お客様第一主義を実現します</li>
                <li style="font-size: unset"><span class="listMark01"></span>介護はお客様が主体となるものです</li>
                <li style="font-size: unset"><span class="listMark01"></span>お客様の安心感を最大化します</li>
                <li style="font-size: unset" class="forSP"><span class="listMark01"></span>人が介護の価値を磨きます。</li>
              </ul>
              <span class="forPC">人と人の繋がりを重視します</span>
            </div>
          </div>
          <div class="p-about__right-column">施設所在地</div>
        </div>
      </div>
    </div>
  </section>

  <!-- feature -->
  <section class="p-feature l-feature" id="">
    <div class="p-feature__inner inner">
      <div class="p-feature__wrap">
        <h2 class="p-feature__title main-title">いこいの里が選ばれる理由</h2>

        <ul class="cords__list cords-list">
          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">第一優先：接遇</p>
                <p class="cords-list__item-text">
                  円滑なコミュニケーションや信頼関係を築くために 入居者様の目線に立ち、一人ひとりに寄り添ったサポートを心がけています。<br />
                  職員の接遇スキルや知識を身につけることで、より高い接遇が実現します。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">言葉遣い</p>
                <p class="cords-list__item-text">
                  入居者様へは敬語がお約束です。心地よい声のトーンとスピードを意識し、表情と目線を合わせて会話にも安心感を心がけます。<br />
                  また意見や要望に真摯に耳を傾け、聴く姿勢を大切にします。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">立ち振舞い</p>
                <p class="cords-list__item-text">入居者様やその家族、同僚、他の職員に対して、尊重と礼儀正しい態度を持つことが大切です。職員は敬意を払いポジティブな雰囲気を醸し出します。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">医師による往診</p>
                <p class="cords-list__item-text">
                  医師による往診・服薬、お薬の管理、協力病院との連携など手厚い介護サポートを提供しています。<br />
                  寝たきりの方・医療サービスが必要な方・認知症の診断のある方もご入居いただけます。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">自慢の手作り食事</p>
                <p class="cords-list__item-text">入居者様にとって食事は毎日の生活の中で最も生きる活力に繋がるものだからこそ、どの施設でも専門職の料理人が季節感を取り入れた料理を手作りしています。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">ターミナルケア（終末期介護）</p>
                <p class="cords-list__item-text">看護師の資格をもつ職員も常駐していますので終の住処として最期まで心のこもったお付き合いをさせていただきます。</p>
              </div>
            </a>
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
        <h2 class="p-terms__title main-title">入居条件</h2>
        <div class="p-terms__content">
          <h3 class="p-terms__subtitle">原則</h3>
          <ul class="p-terms__list listMemo01">
            <li>
              <span class="listMark01">・</span>
              症状が安定しており、一定の医療行為の継続状態にあること
            </li>
            <li>
              <span class="listMark01">・</span>
              訪問診療医の診察で治療のできる状態にあること
            </li>
            <li>
              <span class="listMark01">・</span>
              症状がやや不安定であっても、入院の受け入れ体制の調整が可能な状態にあること
            </li>
            <li>
              <span class="listMark01">・</span>
              医療提供において、積極的な治療希望が本人、家族にない状態にあること
            </li>
          </ul>

          <h3 class="p-terms__subtitle">
            入居可能な医療処置内容及び状態
            <small class="forPC">(施設によって対応できない医療処置もございます)</small>
          </h3>
          <ul class="p-terms__list listMemo01">
            <li>
              <span class="listMark01">・</span>
              尿道留置カテーテル<br><span class="listMark-grid">※前立腺肥大症の場合は、入院先病院での交換が必須</span>
            </li>
            <li>
              <span class="listMark01">・</span>
              酸素吸入（経鼻・マスク）
            </li>
            <li>
              <span class="listMark01">・</span>
              胃ろう（PEG、NGチューブ）、及び腸ろう<br>
              <span class="listMark-grid">※チューブ類は入院先病院での交換が必須</span>
            </li>
            <li>
              <span class="listMark01">・</span>
              中心静脈栄養（IVH）及びポート埋め込み
            </li>
            <li>
              <span class="listMark01">・</span>
              人口呼吸器（ニップネーザル その他機器は、要相談）
            </li>
            <li>
              <span class="listMark01">・</span>
              腎ろう<br><span class="listMark-grid">※ステント交換は、入院先病院での交換が必須</span>
            </li>
            <li>
              <span class="listMark01">・</span>
              膀胱ろう（ウロストミー）
            </li>
            <li>
              <span class="listMark01">・</span>
              人工肛門（ストマ）
            </li>
            <li>
              <span class="listMark01">・</span>
              人工透析<br><span class="listMark-grid">※透析受診時、送迎サービスのある病院での施工が必須</span>
            </li>
            <li>
              <span class="listMark01">・</span>
              インシュリン注射及びデキスター測定
            </li>
            <li>
              <span class="listMark01">・</span>
              各種筋肉注射、皮下注射
            </li>
            <li>
              <span class="listMark01">・</span>
              口腔内吸引
            </li>
            <li>
              <span class="listMark01">・</span>
              末梢点滴<br><span class="listMark-grid">※1日500mlで14日間施工を限度とする 血管確保が困難になることを十分理解されていること</span>
            </li>
            <li>
              <span class="listMark01">・</span>
              抗がん剤の内服
            </li>
            <li>
              <span class="listMark01">・</span>
              麻薬の使用（内服・経皮）
            </li>
            <li>
              <span class="listMark01">・</span>
              ステロイドの内服など<br><span class="listMark-grid">※内服薬に関しての規制なし</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/after-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>

</main>

<?php get_footer(); ?>
