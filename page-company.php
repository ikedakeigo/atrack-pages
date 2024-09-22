<?php

/**
 * Template Name:  会社概要
 */
get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_content();
  endwhile;
endif; ?>

<main id="company">

  <!-- ページTop -->
  <?php get_template_part('template-parts/pageTop-item') ?>

  <!-- company-top -->
  <section class="p-company-top l-company-top delay" id="">
    <div class="p-company-top__inner inner">
      <div class="p-company-top__title-wrap">
        <h2 class="p-company-top__title main-title">
          <span>会社概要</span>
        </h2>
      </div>
      <div class="p-company-top__wrap">
        <p class="p-company-top__info">
          いこいの里会社概要のご案内です。 <br />
          いこいの里各施設へのご質問は<br class="forSP">「<a href="/contact" class="textLink">お問い合わせ</a>」ページからお気軽にお問い合わせ下さい。
        </p>
      </div>
    </div>
  </section>

  <!-- company-image -->
  <section class="p-company-image l-company-image delay" id="">
    <div class="p-company-image__inner inner">
      <div class="p-company-image__title-wrap">
        <h2 class="p-company-image__title main-title">
          <span>ウキシログループ</span>
        </h2>
      </div>
      <div class="p-company-image__wrap">
        <div class="p-company-image__text">
          <p class="p-company-image__info">
            当社は福岡県北九州市にて昭和28年に設立され、浮城興産株式会社を主体とした「ウキシログループ」のグループ
            企業です。他業種のメリットとスケールを活かすことで、入居者様に使いやすい介護サービスを実現しています。
          </p>
        </div>
        <div class="p-company-image__img">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company_image.svg"
            alt="ウキシログループ" />
        </div>
      </div>
    </div>
  </section>

  <!-- company-profile -->
  <section class="p-company-profile l-company-profile delay" id="">
    <div class="p-company-profile__inner inner">
      <div class="p-company-profile__title-wrap">
        <h3 class="p-company-profile__title main-title">
          <span>株式会社ウキシロケアセンター</span>
        </h3>
      </div>
      <div class="p-company-profile__wrap">
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">設立</dt>
          <dd class="p-company-profile__description">
            平成14年9月
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">本社所在地</dt>
          <dd class="p-company-profile__description">
            〒804-0053 <br class="forSP">福岡県北九州市戸畑区牧山2丁目3番5号
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">連絡先</dt>
          <dd class="p-company-profile__description">
            TEL：<br class="forSP">093-871-5800 <br class="forSP"><br class="forSP">FAX：<br class="forSP">093-881-8020
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">資本金</dt>
          <dd class="p-company-profile__description">
            35,000,000円
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">事業内容</dt>
          <dd class="p-company-profile__description">
            介護サービス事業
            <ul class="p-company-profile__listChild">
              <li class="p-company-profile__item">
                <a href="/nakabaru">
                  <span>
                    グループホーム いこいの里 中原
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/usamachi">
                  <span>
                    グループホーム いこいの里 宇佐町
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/wakazono">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    若園
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/tokuyoshi">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    徳吉
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/sone">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    曽根壱番館
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/einomaru">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    永犬丸
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/honjo">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    本城壱番館
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/honjo02">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    本城弐番館
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/obase">
                  <span>
                    介護付き有料老人ホーム
                    いこいの里 小波瀬
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/obase02">
                  <span>
                    グループホーム いこいの里 小波瀬
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/itoshima">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    糸島
                  </span>
                </a>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">役員</dt>
          <dd class="p-company-profile__description">
            代表取締役：浮城 守
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <!-- company-profile -->
  <section class="p-company-profile l-company-profile delay" id="">
    <div class="p-company-profile__inner inner">
      <div class="p-company-profile__title-wrap">
        <h3 class="p-company-profile__title main-title">
          <span>株式会社いこいの里佐賀</span>
        </h3>
      </div>
      <div class="p-company-profile__wrap">
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">設立</dt>
          <dd class="p-company-profile__description">
            平成23年10月
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">本社所在地</dt>
          <dd class="p-company-profile__description">
            〒848-0027 <br class="forSP">佐賀県伊万里市立花町2394-1
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">連絡先</dt>
          <dd class="p-company-profile__description">
            TEL：<br class="forSP">0955-23-3575 <br class="forSP"><br class="forSP">FAX：<br class="forSP">0955-22-7705
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">資本金</dt>
          <dd class="p-company-profile__description">
            10,000,000円
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">事業内容</dt>
          <dd class="p-company-profile__description">
            介護サービス事業
            <ul class="p-company-profile__listChild">
              <li class="p-company-profile__item">
                <a href="/imari">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    伊万里
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/karatsu">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    唐津
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/kose">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    巨勢
                  </span>
                </a>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">役員</dt>
          <dd class="p-company-profile__description">
            代表取締役：浮城 守
          </dd>
        </dl>
      </div>
    </div>
  </section>
  <!-- company-profile -->
  <section class="p-company-profile l-company-profile delay" id="">
    <div class="p-company-profile__inner inner">
      <div class="p-company-profile__title-wrap">
        <h3 class="p-company-profile__title main-title">
          <span>株式会社ウキシロホールディングス</span>
        </h3>
      </div>
      <div class="p-company-profile__wrap">
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">設立</dt>
          <dd class="p-company-profile__description">
            平成21年1月
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">本社所在地</dt>
          <dd class="p-company-profile__description">
            〒804-0053 <br class="forSP">福岡県北九州市戸畑区牧山2丁目3番5号
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">連絡先</dt>
          <dd class="p-company-profile__description">
            TEL：<br class="forSP">093-871-5800 <br class="forSP"><br class="forSP">FAX：<br class="forSP">093-881-8020
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">資本金</dt>
          <dd class="p-company-profile__description">
            10,000,000円
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">事業内容</dt>
          <dd class="p-company-profile__description">
            介護サービス事業
            <ul class="p-company-profile__listChild">
              <li class="p-company-profile__item">
                <a href="/sone02">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    曽根弐番館
                  </span>
                </a>
              </li>
              <li class="p-company-profile__item">
                <a href="/koga">
                  <span>
                    住宅型有料老人ホーム いこいの里
                    古賀
                  </span>
                </a>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="p-company-profile__list">
          <dt class="p-company-profile__term">役員</dt>
          <dd class="p-company-profile__description">
            代表取締役：浮城 守
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <!-- comany-bank -->
  <section class="p-comany-bank l-comany-bank delay" id="">
    <div class="p-comany-bank__inner inner">
      <div class="p-comany-bank__title-wrap">
        <h4 class="p-comany-bank__title main-title">
          <span>取引銀行</span>
        </h4>
      </div>
      <div class="p-comany-bank__wrap">
        <ul class="p-company-bank__list">
          <li class="p-company-bank__item">
            <span> 西日本シティ銀行 </span>
          </li>
          <li class="p-company-bank__item">
            <span> 三井住友銀行 </span>
          </li>
          <li class="p-company-bank__item">
            <span> 西京銀行 </span>
          </li>
          <li class="p-company-bank__item">
            <span> 遠賀信用金庫 </span>
          </li>
        </ul>
        <ul class="p-company-bank__list">
          <li class="p-company-bank__item">
            <span> 伊万里信用金庫 </span>
          </li>
          <li class="p-company-bank__item">
            <span> 唐津信用金庫 </span>
          </li>
          <li class="p-company-bank__item">
            <span> 佐賀信用金庫 </span>
          </li>
        </ul>
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
