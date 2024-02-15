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
  <!-- recruit -->
  <section class="p-recruit l-recruit" id="">
    <div class="p-recruit__inner inner">
      <h2 class="p-recruit__title main-title">いこいの里 採用情報</h2>
      <div class="p-recruit-vision">
        <h3 class="main-title">
          理念<br />
          ↓<br />
          ビジョン
        </h3>
      </div>
      <div class="p-recruit__profile p-recruit-profile">
        <dl class="p-recruit-profile__list">
          <dt class="p-recruit-profile__term">募集要項</dt>
          <dd class="p-recruit-profile__description">
            『いこいの里』では、新しいメンバーを迎え入れ、一緒に入居者様の生活をサポートする仲間を募集しています。<br />
            介護経験のある方、久しぶりの方、未経験の方も基本的な知識と技術の習得のための研修制度を整えていますのでご安心ください。<br />
            社会人としてしっかりとした考えをお持ちの方、大募集です。<br />
            私たちは地域社会に根差し、質の高い介護を提供することを使命としています。<br />
            新しい介護体制を共に考え実践して行きましょう。
          </dd>
        </dl>
        <dl class="p-recruit-profile__list">
          <dt class="p-recruit-profile__term">就業拠点</dt>
          <dd class="p-recruit-profile__description lh2">
            グループホーム いこいの里 中原 <br />
            グループホーム いこいの里 宇佐町 <br />
            住宅型有料老人ホーム いこいの里 若園 <br />
            住宅型有料老人ホーム いこいの里 曽根壱番館 <br />
            住宅型有料老人ホーム いこいの里 曽根弐番館 <br />
            住宅型有料老人ホーム いこいの里 徳吉 <br />
            住宅型有料老人ホーム いこいの里 永犬丸 <br />
            住宅型有料老人ホーム いこいの里 本城壱番館 <br />
            住宅型有料老人ホーム いこいの里 本城弐番館 <br />
            介護付有料老人ホーム いこいの里 小波瀬 <br />
            グループホーム いこいの里 小波瀬 <br />
            住宅型有料老人ホーム いこいの里 糸島 <br />
            住宅型有料老人ホーム いこいの里 古賀 <br />
            住宅型有料老人ホーム いこいの里 伊万里 <br />
            住宅型有料老人ホーム いこいの里 唐津 <br />
            住宅型有料老人ホーム いこいの里 巨勢
          </dd>
        </dl>
        <dl class="p-recruit-profile__list">
          <dt class="p-recruit-profile__term">本社所在地</dt>
          <dd class="p-recruit-profile__description">
            株式会社ウキシロケアセンター <br />
            〒804-0053 福岡県北九州市戸畑区牧山2丁目3番5号 <br />
            TEL：093-871-5800 FAX：093-881-8020
          </dd>
        </dl>
        <dl class="p-recruit-profile__list">
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
            <p class="p-recruit-list__item-question">
              <span>Q.</span>
              社宅には入寮できますか？
            </p>
            <p class="p-recruit-list__item-answer">
              <span>A.</span>
              原則として入寮できる方は正社員に限らせていただいていますが、詳細は面接時にご相談ください。
            </p>
          </dd>
        </dl>

        <dl class="p-recruit-profile__list">
          <dt class="p-recruit-profile__term">法人</dt>
          <dd class="p-recruit-profile__description lh2">
            株式会社いこいの里佐賀<br />
            株式会社ウキシロケアセンター<br />
            株式会社ウキシロホールディングス<br />
            3社で運営。スケールメリットを活かした経営を心がけています
          </dd>
        </dl>
      </div>
      <div class="p-form__submit p-form-submit">
        <input type="submit" value="応募・お問い合わせ" placeholder="応募・お問い合わせ" />
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
