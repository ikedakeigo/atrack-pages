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
        <div class="p-staff-about__content">
          <p class="p-staff-about__text--top-sp">
            いこいの里ではスタッフ教育に力を入れているので<br />
            メディアで取り上げられました
          </p>
          <div class="p-staff-about__img innerWidth">
            <img src="assets/img/staff/staff-media.png" alt="" />
          </div>
          <p class="p-staff-about__text--bottom-sp">
            TV番組めんたいワイド［8分36秒］<br />
            めんたいワイドのドキュめんのコーナーで放送されました。<br />
            いこいの里の子育てサポート付社宅でキャリアアップ、収入アップ目指せます。
          </p>
          <div class="p-staff-about__text--pc">
            <p class="p-staff-about__text--top">
              いこいの里ではスタッフ教育に力を入れているので<br />
              メディアで取り上げられました
            </p>
            <p class="p-staff-about__text--bottom">
              TV番組めんたいワイド［8分36秒］<br />
              めんたいワイドのドキュめんのコーナーで放送されました。<br />
              いこいの里の子育てサポート付社宅でキャリアアップ、収入アップ目指せます。
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
        <h2 class="p-staff-info__title main-title">職員の採用についてのこだわり</h2>
        <p class="p-staff-info__text">
          資格・経験も大事ですが、接遇やコミュニケーションを重視した採用基準を設けています。社会人としてのしっかりとした考えを持ち、<br />
          質の高いサービスが提供できる人材が必要となります。<br />
          それは日常的に入居者様と交わす笑顔や会話が入居者様の生活の質の向上につながると考えているからです。<br />
          また介護は多岐にわたるニーズに対応するため、柔軟性が求められチームとの協力が得られる人材を採用しています。<br />
          研修や指導・評価の仕組みは介護士が手掛け、実施していますので中途採用の方でもチャンスはいっぱいです！
        </p>
        <div class="p-staff-img__content">
          <div class="p-staff-info__img">
            <img src="assets/img/common/dummy.jpg" alt="" />
          </div>
          <div class="p-staff-info__img">
            <img src="assets/img/common/dummy.jpg" alt="" />
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
        <p class="p-staff-info__text">
          介護の基礎知識から実践トレーニング、コミュニケーションスキル・認知症ケア・感染症対策のトレーニング・スタッフのスキル向上とモチベーションの向上に寄与し、介護のプロとして、職員が成長できる体制を整えています。<br />
          介護の仕事に興味があり介護経験のない方、基本的な知識と技術の習得のための研修がありますので自分の将来を考え安心できます。<br />
          また入居者様のプライバシーの尊重やコンプライアンスについても学び、倫理的なケアが提供できるよう継続的な教育と研修を行うことで、変化する状況に適応した最新の介護アプローチに対応できる能力を保持しています。
        </p>
        <div class="p-staff-img__content">
          <div class="p-staff-info__img">
            <img src="assets/img/common/dummy.jpg" alt="" />
          </div>
          <div class="p-staff-info__img">
            <img src="assets/img/common/dummy.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- staff-comment -->
  <section class="p-staff-comment l-staff-comment" id="">
    <div class="p-staff-comment__inner inner">
      <div class="p-staff-comment__wrap">
        <h2 class="p-staff-comment__title main-title">職員が夢に向かう姿が入居者様の元気・活力に繋がっています</h2>
        <p class="p-staff-comment__text">
          職員がポジティブで自分の夢に向かって成長している姿勢は、入居者様にとっても良い影響を与え、共に良い時間を過ごします。<br />
          このような相互作用は施設の雰囲気を向上させ、共に喜びや成就感を共有することができ入居者様と職員との絆が強化されます。<br />
          支え合いながら良い環境を築くことで良いケアやサポートの提供にもつながります。
        </p>
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
