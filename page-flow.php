<?php

/**
 * Template Name: 入居の流れ・条件
 */
get_header(); ?>

<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="flow">

  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <?php get_template_part('template-parts/flow-item'); ?>

  <!-- flow-vision -->
  <section class="p-flow-vision l-flow-vision" id="">
    <div class="p-flow-vision__inner inner">
      <div class="p-flow-vision__wrap">
        <h2 class="p-flow__title main-title">いこいの里の理念</h2>
        <p class="p-flow-vision__text">
          高齢化社会の課題を解決する。だから、入居者様それぞれの色々な状況に対応します。<br />
          <span class="listMark-grid">※経営理念再構築のため、柔軟な変更が可能な状態にいたします。</span>
        </p>
      </div>
    </div>
  </section>

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

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
