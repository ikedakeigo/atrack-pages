<?php

/**
 * Template Name: 入居料金計算
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="price">
  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <!-- price-calculator -->
  <section class="p-price-calculator l-price" id="">
    <div class="p-price-calculator__inner inner">
      <div class="p-price-calculator__wrap">
        <h2 class="p-price-calculator__title main-title iconMath u-textMdCenter">入居料金計算</h2>
        <form class="p-price-calculator__form">
          <div class="p-price-calculator__field">
            <label for="serviceType" class="p-price-calculator__label">介護度区分</label>
            <select id="serviceType" name="serviceType" class="p-price-calculator__select">
              <?php
              $care_levels = get_post_meta("262", 'care_level', true);
              if (is_array($care_levels)) :
                foreach ($care_levels as $care_level_value) :
              ?>
                  <option value="<?php echo esc_attr($care_level_value); ?>">
                    <?php echo esc_html($care_level_value); ?>
                  </option>
              <?php
                endforeach;
              endif;
              ?>
            </select>
          </div>
          <div class="p-price-calculator__field">
            <label for="roomType" class="p-price-calculator__label">施設を選択</label>
            <select id="roomType" name="roomType" class="p-price-calculator__select">
              <?php
              $insurance_burdens = get_post_meta("262", 'insurance_burden', true);
              if (is_array($insurance_burdens)) :
                foreach ($insurance_burdens as $insurance_burden_value) :
              ?>
                  <option value="<?php echo esc_attr($insurance_burden_value); ?>">
                    <?php echo esc_html($insurance_burden_value); ?>
                  </option>
              <?php
                endforeach;
              endif;
              ?>
            </select>
          </div>
          <div class="u-bottom-line"></div>
          <p class="p-price-calculator__description u-lh20">シミュレーションは北九州エリアの内容、料金はエリアにより異なります。また、入居者様やご家族の皆様の状況に合わせた各種減額プランも準備しておりますので、お気軽にご相談ください。</p>
          <div class="p-price-calculator__button">
            <input type="submit" value="料金を表示する" />
          </div>

        </form>


        <!-- 計算結果表示エリア -->
        <div class="p-price-calculator__result js-modal p-modal" id="1">
          <button class="p-modal__close-button js-modal-close"><span></span>閉じる</button>
          <div class="p-modal__inner inner">
            <h2 class="main-title u-textCenter">入居料金の目安</h2>
            <p class="p-price-calculator__text-small u-textCenter">
              より詳細な料金を<br class="forSP">お知りになりたい方は<br class="forSP">お問合せください。<br class="forSP">093-871-5800
            </p>
            <div class="p-price-calculator__result-content">
              <div class="p-price-calculator__result-head">
                <p class="col1">■初期費用</p>
                <p class="col2" id="totalMonthlyCost">
                  <!-- totalMonthlyCost -->
                </p>
              </div>
              <div class="p-price-calculator__result-body">
                <div class="head">内訳</div>
                <div class="body">
                  <div class="row">
                    <p class="t_left">敷金</p>
                    <p class="t_right" id="deposit">
                      <!-- deposit -->
                    </p>
                  </div>
                  <div class="row">
                    <p class="t_left">共済会</p>
                    <p class="t_right" id="mutualAid">
                      <!-- mutualAid -->
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="border"></div>

            <div class="p-price-calculator__result-content">
              <div class="p-price-calculator__result-head">
                <p class="col1">■毎月の費用</p>
                <p class="col2" id="monthlyCost2">
                  <!-- monthlyCost2 -->
                </p>
              </div>
              <div class="p-price-calculator__result-body">
                <div class="head">内訳</div>
                <div class="body">
                  <div class="row">
                    <p class="t_left">月額費用</p>
                    <p class="t_right" id="monthlyFee">
                      <!-- monthlyFee -->
                    </p>
                  </div>
                  <div class="row">
                    <p class="t_left" id="careLevelLabel">
                      <!-- careLevelLabel -->
                    </p>
                    <p class="t_right" id="careLevelCost">
                      <!-- careLevelCost -->
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="p-price-calculator__box">
              <div class='dl_Block01'>
                <dl>
                  <dt>施　設　名</dt>
                  <dd id="roomType2"></dd>
                </dl>
                <dl>
                  <dt>介護度区分</dt>
                  <dd id="serviceType2"></dd>
                </dl>
              </div>
            </div>

          </div>

        </div>

      </div>
  </section>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
