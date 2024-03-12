<?php

/**
 * Template Name:  職員について
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="staff">

  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>
  <!-- staff-about -->
  <section class="p-staff-about l-staff-about" id="">
    <div class="p-staff-about__inner inner">
      <div class="p-staff-about__wrap">
        <h2 class="p-staff-about__title main-title">いこいの里の職員について</h2>
        <p class="p-staff-about__text-top">
          いこいの里ではスタッフ教育に力を入れているので<br class="forSP" />メディアで取り上げられました
        </p>
        <div class="p-youtube" id="custom-youtube-player" data-embed="KiY9kG39JMs">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff/youtube_mv.png" alt="動画を再生する" class="youtube-thumbnail" />
          <div class="youtube-iframe"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- staff-info -->
  <section class="p-staff-info l-staff-info" id="">
    <div class="p-staff-info__inner inner">
      <div class="p-staff-info__wrap">
        <h2 class="p-staff-info__title main-title">職員の採用についてのこだわり</h2>

        <div class="p-staff-info__content">
          <div class="p-staff-info__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="" />
          </div>
          <div class="p-staff-info__textBox">
            <h3 class="p-staff-info__subTitle">
              接遇やコミュニケーションを重視した採用基準
            </h3>
            <p class="p-staff-info__text">
              資格・経験も大事ですが、接遇やコミュニケーションを重視した採用基準を設けています。社会人としてのしっかりとした考えを持ち、質の高いサービスが提供できる人材が必要となります。それは日常的に入居者様と交わす笑顔や会話が入居者様の生活の質の向上につながると考えているからです。
            </p>
          </div>
        </div>

        <div class="p-staff-info__content">
          <div class="p-staff-info__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="" />
          </div>
          <div class="p-staff-info__textBox">
            <h3 class="p-staff-info__subTitle">
              中途採用の方でもチャンス！
            </h3>
            <p class="p-staff-info__text">
              また介護は多岐にわたるニーズに対応するため、柔軟性が求められチームとの協力が得られる人材を採用しています。研修や指導・評価の仕組みは介護士が手掛け、実施していますので中途採用の方でもチャンスはいっぱいです！
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- staff-info -->
  <section class="p-staff-info l-staff-info" id="">
    <div class="p-staff-info__inner inner">
      <div class="p-staff-info__wrap">
        <h2 class="p-staff-info__title main-title">職員の教育についてのこだわり</h2>
        <div class="p-staff-info__content">
          <div class="p-staff-info__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="" />
          </div>
          <div class="p-staff-info__textBox">
            <h3 class="p-staff-info__subTitle">
              成長できる体制を整えています！
            </h3>
            <p class="p-staff-info__text">
              介護の基礎知識から実践トレーニング、コミュニケーションスキル・認知症ケア・感染症対策のトレーニング・スタッフのスキル向上とモチベーションの向上に寄与し、介護のプロとして、職員が成長できる体制を整えています。
            </p>
          </div>
        </div>

        <div class="p-staff-info__content">
          <div class="p-staff-info__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="" />
          </div>
          <div class="p-staff-info__textBox">
            <h3 class="p-staff-info__subTitle">
              自分の将来を考え安心できます
            </h3>
            <p class="p-staff-info__text">
              介護経験のない方、基本的な知識と技術の習得のための研修がありますので、自分の将来を考え安心できます。また、入居者様のプライバシーの尊重やコンプライアンスについても学び、倫理的なケアが提供できるよう継続的な教育と研修を行うことで、変化する状況に適応した最新の介護アプローチに対応できる能力を保持しています。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- staff-hero -->
  <section class="p-staff-hero l-staff-hero  " id="">
    <div class="p-staff-hero__inner inner">
      <h3 class="p-staff-hero__title">
        職員が夢に向かう姿が入居者様の<br class="forSP">元気・活力に繋がっています
      </h3>
      <div class="p-staff-hero__wrap">
        <p class="p-staff-hero__text">
          高齢者様の経済的な負担を軽減した『いこいの里シリーズ』はライフスタイルに合わせて選べる様々なカタチの住宅型有料老人ホームです。 <br>
          <br>
          入居者様の個々の性格や個性、人生観を大切にした生活支援は勿論、地域のお祭りに参加するなど繋がりや絆を尊重した社会との交流を大切にしています。さらに 職員の夢に向かうハツラツとした姿勢を真近で見ることで、入居者様の心に輝きや活力を与えるような好循環も生まれつつあります。<br>
          <br>
          職員の幸せが生み出す、こころのある介護が『いこいの里』の魅力なのです。 また医師による往診・服薬、お薬の管理、協力病院との連携など手厚い介護サポートを提供することで、ご家族様に大変喜ばれています。
        </p>
      </div>
    </div>
  </section>

  <!-- staf-concept -->
  <section class="p-staff-concept l-staff-concept  " id="">
    <div class="p-staff-concept__inner inner">
      <div class="p-staff-concept__wrap">
        <h2 class="p-staff-concept__title main-title">
          『いこいの里』の介護基本理念
        </h2>
        <ul class="p-staff-concept__list p-staf-concept-list">
          <li class="p-staff-concept-list__item">
            <div class="p-staff-concept-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-concept-list__item-text-wrap">
              <div class="p-staff-concept-list__item-box">
                <h3 class="p-staff-concept-list__item-title">私たちが目指す社会</h3>
                <p class="p-staff-concept-list__item-text">
                  介護を必要とする人、それを支える人、全ての人の尊厳を守り、幸せな日々を続けられる事を喜び合える社会を創造します。
                </p>
              </div>
              <div class="p-staff-concept-list__item-box">
                <h3 class="p-staff-concept-list__item-title">
                  私たちが目指す職場
                </h3>
                <p class="p-staff-concept-list__item-text">
                  ・全ての社員が生活と心に豊かさを持てる職場<br>
                  ・お客様の笑顔と社員の笑顔が循環する職場
                </p>
              </div>
              <div class="p-staff-concept-list__item-box">
                <h3 class="p-staff-concept-list__item-title">
                  入居者様の尊厳
                </h3>
                <p class="p-staff-concept-list__item-text">
                  お客様それぞれの価値観に寄りそうために、ひとりの人間として敬意と関心を持って入居者様と接し、深く耳を傾け、思いを感じ取り、ご意向を確認しています。
                </p>
              </div>
            </div>
          </li>

          <li class="p-staff-concept-list__item">
            <div class="p-stfaf-concept-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-concept-list__item-text-wrap">
              <div class="p-staff-concept-list__item-box">
                <h3 class="p-staff-concept-list__item-title">私たちの使命</h3>
                <p class="p-staff-concept-list__item-text">
                  人としての想いと接遇、介護のプロとしての知識と技術をもって家庭では実現できない安心で豊かな生活を提供します！
                </p>
              </div>
              <div class="p-staff-concept-list__item-box">
                <h3 class="p-staff-concept-list__item-title">
                  私たちのあり方
                </h3>
                <p class="p-staff-concept-list__item-text">
                  【3原則】 <br>
                  嘘をつかない（正直・素直）<br>
                  約束は守る<br>
                  主体的に成長する
                </p>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>


  <!-- p-staff-value -->
  <section class="p-staff-value l-staff-value" id="">
    <div class="p-staff-value__inner inner">
      <div class="p-staff-value__wrap">
        <h2 class="p-staff-value__title main-title">
          『いこいの里』のバリュー
        </h2>
        <ol class="p-staff-value__list p-staff-value-list">
          <!-- 1 -->
          <li class="p-staff-value-list__item">
            <div class="p-staff-value-list__item-titleBox">
              <span class="num"></span>
              <p class="p-staff-value-list__item-title">お客様への想い</p>
            </div>
            <div class="p-staff-value-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-value-list__item-text">
              <p>
                入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
              </p>
            </div>
          </li>
          <!-- 2 -->
          <li class="p-staff-value-list__item">
            <div class="p-staff-value-list__item-titleBox">
              <span class="num"></span>
              <p class="p-staff-value-list__item-title">お客様への想い</p>
            </div>
            <div class="p-staff-value-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-value-list__item-text">
              <p>
                入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
              </p>
            </div>
          </li>
          <!-- 3 -->
          <li class="p-staff-value-list__item">
            <div class="p-staff-value-list__item-titleBox">
              <span class="num"></span>
              <p class="p-staff-value-list__item-title">お客様への想い</p>
            </div>
            <div class="p-staff-value-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-value-list__item-text">
              <p>
                入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
              </p>
            </div>
          </li>
          <!-- 4 -->
          <li class="p-staff-value-list__item">
            <div class="p-staff-value-list__item-titleBox">
              <span class="num"></span>
              <p class="p-staff-value-list__item-title">お客様への想い</p>
            </div>
            <div class="p-staff-value-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-value-list__item-text">
              <p>
                入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
              </p>
            </div>
          </li>
          <!-- 5 -->
          <li class="p-staff-value-list__item">
            <div class="p-staff-value-list__item-titleBox">
              <span class="num"></span>
              <p class="p-staff-value-list__item-title">お客様への想い</p>
            </div>
            <div class="p-staff-value-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-value-list__item-text">
              <p>
                入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
              </p>
            </div>
          </li>
          <!-- 6 -->
          <li class="p-staff-value-list__item">
            <div class="p-staff-value-list__item-titleBox">
              <span class="num"></span>
              <p class="p-staff-value-list__item-title">お客様への想い</p>
            </div>
            <div class="p-staff-value-list__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="省略">
            </div>
            <div class="p-staff-value-list__item-text">
              <p>
                入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
              </p>
            </div>
          </li>

        </ol>
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


<script>
  document.getElementById('custom-youtube-player').addEventListener('click', function() {
    var iframeContainer = this.querySelector('.youtube-iframe');
    if (!iframeContainer.hasChildNodes()) { // Check if the iframe has already been added
      var videoId = this.getAttribute('data-embed');
      var iframe = document.createElement('iframe');

      iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
      iframe.setAttribute('frameborder', '0');
      iframe.setAttribute('allowfullscreen', '');
      iframe.setAttribute('width', '1280'); // Set iframe width
      iframe.setAttribute('height', '720'); // Set iframe height
      iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');

      iframeContainer.appendChild(iframe); // Add the iframe to the container
      iframeContainer.style.display = 'block'; // Show the iframe
    }
    // Hide the thumbnail
    var thumbnail = this.querySelector('img');
    thumbnail.style.visibility = 'hidden';
  });
</script>
