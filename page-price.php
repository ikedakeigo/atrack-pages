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
        <h2 class="p-price-calculator__title main-title">入居料金計算</h2>
        <form class="p-price-calculator__form">
          <div class="p-price-calculator__field">
            <label for="roomType" class="p-price-calculator__label">介護度区分</label>
            <select id="roomType" name="roomType" class="p-price-calculator__select">
              <option value="選択してください"></option>
              <!-- 介護度区分のオプションを追加 -->
            </select>
          </div>
          <div class="p-price-calculator__field">
            <label for="serviceType" class="p-price-calculator__label">介護保険の負担割合</label>
            <select id="serviceType" name="serviceType" class="p-price-calculator__select">
              <option value="選択してください"></option>
              <!-- 介護保険の負担割合のオプションを追加 -->
            </select>
          </div>
          <div class="u-bottom-line"></div>
          <p class="p-price-calculator__description">シミュレーションは北九州エリアの内容、料金はエリアにより異なります。また、入居者様やご家族の皆様の状況に合わせた各種プランも準備しておりますので、気軽にご相談ください。</p>
          <div class="p-price-calculator__button">
            <input type="submit" value="料金を表示する" placeholder="料金を表示する" />
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact-item'); ?>
</main>
<?php get_footer(); ?>
