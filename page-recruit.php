<?php

/**
 * Template Name: 採用情報
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="recruit">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <!-- recrut-top -->
  <section class="p-recrut-top l-recrut-top  delay" id="">
    <div class="p-recrut-top__inner inner">
      <div class="p-recrut-top__wrap">
        <h2 class="p-recruit__title main-title iconHome u-textCenter delay">いこいの里 採用情報</h2>
        <div class="p-about__listBox">
<<<<<<< HEAD
          <?php get_template_part('template-parts/about-item'); ?>
=======
          <ol class="p-about__list p-about-list delay">
            <li class="p-about-list__item delay">
              <div class="p-about-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_01.jpg" alt="私たちが目指す社会">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">01</span>
                <h3 class="p-about-list__item-title u-w900">
                  私たちが目指す社会
                </h3>
                <p class="p-about-list__item-text u-lh20">
                  介護を必要とする人、それを支える人、全ての人の尊厳を守り、幸せな日々を続けられる事を喜び合える社会を創造します。
                </p>
              </div>
            </li>
            <li class="p-about-list__item delay">
              <div class="p-about-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_02.jpg" alt="私たちが目指す職場">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">02</span>
                <h3 class="p-about-list__item-title u-w900">私たちが目指す職場</h3>
                <p class="p-about-list__item-text u-lh20">
                  ・全ての社員が生活と心に豊かさを持てる職場<br>
                  ・お客様の笑顔と社員の笑顔が循環する職場<br>
                  ・彩りのある思い出が残るサービスを提供できる職場を追求し、より魅力的な職場を実現します！
                </p>
              </div>
            </li>
            <li class="p-about-list__item delay">
              <div class="p-about-list__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_03.jpg" alt="私たちの使命">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">03</span>
                <h3 class="p-about-list__item-title u-w900">私たちの使命</h3>
                <p class="p-about-list__item-text u-lh20">
                人としての想いと接遇、介護のプロとしての知識と技術をもって家庭では実現できない安心で豊かな生活を提供します。
                </p>
              </div>
            </li>
          </ol>

>>>>>>> 8b88864 (first commit)
        </div>
      </div>
    </div>
  </section>

  <!-- recrut-vision -->
  <section class="p-recrut-vision l-recrut-vision delay" id="">
    <div class="p-recrut-vision__inner inner">
      <div class="p-recrut-vision__wrap">
        <h2 class="p-recruit__title main-title iconVision u-textCenter delay">ビジョン</h2>
        <p class="p-recruit-vision__text u-w700 delay u-lh20">
          私たちは介護を必要とする人、それを支える人全ての人の尊厳を守り幸せな日々を続けられる事を喜び合える社会を創造します。
        </p>
        <div class="p-recruit-vision__content delay">
          <div class="p-recruit-vision__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recrut/recrut_01.jpg" alt=" 私たちは介護を必要とする人、それを支える人全ての人の尊厳を守り幸せな日々を続けられる事を喜び合える社会を創造します。">
          </div>
          <div class="p-recruit-vision__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recrut/recrut_02.jpg" alt=" 私たちは介護を必要とする人、それを支える人全ての人の尊厳を守り幸せな日々を続けられる事を喜び合える社会を創造します。">
          </div>
          <div class="p-recruit-vision__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recrut/recrut_03.jpg" alt=" 私たちは介護を必要とする人、それを支える人全ての人の尊厳を守り幸せな日々を続けられる事を喜び合える社会を創造します。">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- recruit -->
  <section class="p-recruit l-recruit delay" id="">
    <div class="p-recruit__inner inner">
      <h2 class="p-recruit__title main-title iconHome u-textCenter delay">
        募集要項<span>私たちに共感いただいた方だけ</span>
      </h2>
      <p class="p-recruit__text u-lh20 delay">
        いこいの里では新しいメンバーを迎え入れ、一緒に入居者様の生活をサポートする仲間を募集しています。<br>
        「介護経験のある方」「久しぶりの方」「未経験の方」も基本的な知識と技術の習得のための研修制度を整えていますのでご安心ください。<br>
        <br>
        社会人としてしっかりとした考えをお持ちの方、大募集です。私たちは地域社会に根差し、質の高い介護を提供することを使命としています。新しい介護体制を共に考え実践して行きましょう。
      </p>
      <div class="p-recruit__profile p-recruit-profile">
        <dl class="p-recruit-profile__list delay">
          <dt class="p-recruit-profile__term delay">
            募集<br>
            職種
          </dt>
          <dd class="p-recruit-profile__description delay">
            常勤介護スタッフ <br>
            パート介護スタッフ <br>
            ケアマネージャー（介護支援専門員） <br>
            常勤看護師 <br>
<<<<<<< HEAD
            生活相談員・サービス提供責任者 <br>
            調理スタッフ <br>
            パート調理スタッフ
=======
            生活相談員・サービス提供責任者 
>>>>>>> 8b88864 (first commit)
          </dd>
        </dl>
        <dl class="p-recruit-profile__list delay">
          <dt class="p-recruit-profile__term">
            募集エリア<br>
            （勤務地）
          </dt>
          <dd class="p-recruit-profile__description lh2">
            北九州市（戸畑区、小倉北区、小倉南区、八幡西区） <br>
            苅田町、糸島市、古賀市 <br>
<<<<<<< HEAD
            佐賀県：佐賀市、伊万里市、唐津市 <br>
            <span class='listMark-grid'>※上記は勤務可能地です。ご本人の希望がない限り異動・転勤はありません。</span>
=======
            佐賀県：佐賀市、伊万里市、唐津市
>>>>>>> 8b88864 (first commit)
          </dd>

        </dl>
        <dl class="p-recruit-profile__list delay">
          <dt class="p-recruit-profile__term">福利厚生</dt>
          <dd class="p-recruit-profile__description lh2">
            各社会保険、制服貸与、社宅有、退職金制度（規定有）、確定拠出年金、入居者家族割引、社内奨学金制度等
          </dd>

        </dl>
        <dl class="p-recruit-profile__list delay">
          <dt class="p-recruit-profile__term">本社<br>所在地</dt>
          <dd class="p-recruit-profile__description">
            株式会社ウキシロケアセンター<br>
            〒804-0053 福岡県北九州市戸畑区牧山2丁目3番5号<br>
            TEL：093-871-5800 FAX：093-881-8020
          </dd>
        </dl>
        <dl class="p-recruit-profile__list delay">
          <dt class="p-recruit-profile__term">Q&A</dt>
          <dd class="p-recruit-profile__description">
            <p class="p-recruit-list__item-question">
              <span>Q.</span>
              新入社員の教育はどうなっていますか
            </p>
            <p class="p-recruit-list__item-answer">
              <span>A.</span>
              各職種とも業務に応じて入社から1～3ヶ月間の新入社員研修が入念に行われます。
            </p>
            <p class="p-recruit-list__item-question">
              <span>Q.</span>
              転勤はありますか？
            </p>
            <p class="p-recruit-list__item-answer">
              <span>A.</span>
              地域ごとでの採用を行っているため、原則として転居を伴う転勤はありません。
            </p>
          </dd>
        </dl>

        <dl class="p-recruit-profile__list delay">
          <dt class="p-recruit-profile__term">法人</dt>
          <dd class="p-recruit-profile__description lh2">
<<<<<<< HEAD
            株式会社いこいの里佐賀<br>
            株式会社ウキシロケアセンター<br>
            株式会社ウキシロホールディングス<br>
=======
            株式会社ウキシロホールディングス<br>
            株式会社ウキシロケアセンター<br>
            株式会社いこいの里佐賀<br>
>>>>>>> 8b88864 (first commit)
            <br>
            3社で運営。<br>
            スケールメリットを活かした経営を心がけています。
          </dd>
        </dl>
      </div>
      <div class="p-recruit__submit">
        <a href="/contact">応募・お問い合わせ</a>
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
