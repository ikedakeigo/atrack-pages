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
  <!-- <section class="p-flow-vision l-flow-vision" id="">
    <div class="p-flow-vision__inner inner">
      <div class="p-flow-vision__wrap">
        <h2 class="p-flow__title main-title">いこいの里の理念</h2>
        <p class="p-flow-vision__text">
          高齢化社会の課題を解決する。だから、入居者様それぞれの色々な状況に対応します。<br />
          <span class="listMark-grid">※経営理念再構築のため、柔軟な変更が可能な状態にいたします。</span>
        </p>
      </div>
    </div>
  </section> -->

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
                <p class="p-terms-list__item-text u-font24">
                  症状が安定しており、一定の医療行為の継続状態にあること
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  訪問診療医の診察で治療のできる状態にあること
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  症状がやや不安定であっても、入院の受け入れ体制の調整が可能な状態にあること
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  医療提供において、積極的な治療希望が本人、家族にない状態にあること
                </p>
              </li>
            </ol>
          </div>
        </div>

        <?php get_template_part('template-parts/terms-tables') ?>

        <div class="p-terms__content">
          <div class="p-terms__content-inner">
            <h3 class="p-terms__subTitle u-font32 u-w700">入居困難及び相談が必要な方</h3>
            <ol class="p-terms__list">
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  夜間帯の鼻腔内吸引
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  自傷行為・他害行為
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  アルコール依存症
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  頻繁な徘徊により、医療チューブを触る可能性のある方
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  重度認知症
                </p>
              </li>
              <li class="p-terms-list__item">
                <span class="num"></span>
                <p class="p-terms-list__item-text u-font24">
                  重度精神疾患
                </p>
              </li>
            </ol>
            <p>
              個別で判断が必要な場合には、個別で判断させていただきます。
            </p>
          </div>
        </div>

        <div class="p-about__listBox u-mt100 u-mtSp10">
          <h2 class="p-terms__title main-title iconHome u-textMdCenter">いこいの里の理念</h2>
          <ol class="p-about__list p-about-list">
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="https://placehold.jp/590x400.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">01</span>
                <h3 class="p-about-list__item-title u-w900">
                  私たちが目指す社会
                </h3>
                <p class="p-about-list__item-text u-font24">
                  介護を必要とする人、それを支える人、全ての人の尊厳を守り、幸せな日々を続けられる事を喜び合える社会を創造します。
                </p>
              </div>
            </li>
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="https://placehold.jp/590x400.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">02</span>
                <h3 class="p-about-list__item-title u-w900">お客様への想い</h3>
                <p class="p-about-list__item-text u-font24">
                  入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組んでいます。
                </p>
              </div>
            </li>
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="https://placehold.jp/590x400.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">03</span>
                <h3 class="p-about-list__item-title u-w900">お客様への想い</h3>
                <p class="p-about-list__item-text u-font24">
                  入居者様とそのご家族の両方を「お客様」とし、プロの視点で入居者一人ひとりに目を配り、全てのお客様に満足していただける親切で公平な介護に取り組みます。
                </p>
              </div>
            </li>
            <li class="p-about-list__item">
              <div class="p-about-list__item-img">
                <img src="https://placehold.jp/590x400.png" alt="省略">
              </div>
              <div class="p-about-list__item-text-wrap">
                <span class="num forPC">04</span>
                <h3 class="p-about-list__item-title u-w900">入居者様の尊厳</h3>
                <p class="p-about-list__item-text u-font24">
                  入居者様それぞれの価値観に寄りそうために、ひとりの人間として敬意と関心を持って入居者様と接し、深く耳を傾け（言語）、思いを感じ取り（非言語）、ご意向を（口頭で）確認しよう。汲み取り介護を実践しよう。介護につなげよう
                </p>
              </div>
            </li>
          </ol>
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
