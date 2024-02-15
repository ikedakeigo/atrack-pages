<?php

/**
 * Template Name: よくあるご質問
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="faq">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>
  <!-- faq -->
  <section class="p-faq l-faq" id="">
    <div class="p-faq__inner inner">
      <h2 class="p-faq__title main-title">いこいの里に関するよくある質問</h2>
      <ul class="p-faq__list p-faq-list">
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            費用について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            お支払い方法
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            最期の看取りについて
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            毎月の病院受診に家族の付き添いは必要か？
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            入居までの流れ・期間例
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            身元引受人の必要・不要
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            連帯保証人の必要・不要
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            面会時間
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            外出・外泊についての記載事項
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            施設訪問してのサービスについて
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            食事についての特記事項①
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            食事についての特記事項②
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            食事についての特記事項③
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            居室について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            スタッフ教育について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            入居可能な医療処置内容及び状態
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            入居困難及び相談が必要な方
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            重度になったら退去しなくてはいけませんか？
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            施設見学の可否
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            体験入居の可否
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            病院への通院について特記事項
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            お薬について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            ご家族の宿泊について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            夜間の介護体制について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            レクリエーションについて
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            最期の看取りについて
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            月途中での入退去時の料金
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            インターネット環境について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
        <li class="p-faq-list__item">
          <p class="p-faq-list__item-question js-faq-question">
            <span>Q.</span>
            日用雑貨の販売について
          </p>
          <p class="p-faq-list__item-answer"><span>A.</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- access -->
  <?php get_template_part('template-parts/access-item'); ?>

  <!-- location -->
  <?php get_template_part('template-parts/location-item'); ?>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
