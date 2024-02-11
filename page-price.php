
<?php
/**
 * Template Name: 入居料金計算
 */
get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>

<main id="price">
      <!-- ページTop -->
      <div class="l-page-top c-page-top js-page-top">top</div>

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

      <!-- contact -->
      <section class="p-contact l-contact">
        <div class="p-contact__inner inner">
          <h2 class="p-contact__title main-title">
            <span>入居のお問い合わせ</span>
            <p>下記の項目を入力して送信してください。</p>
          </h2>
          <form class="p-contact__form p-form" action="">
            <dl class="p-form__wrap">
              <dt class="p-form__label">お名前<span>必須</span></dt>
              <dd class="p-form__input p-form-input">
                <input type="text" placeholder="お名前をご記入ください" />
              </dd>
            </dl>
            <dl class="p-form__wrap">
              <dt class="p-form__label">メールアドレス<span>必須</span></dt>
              <dd class="p-form__input p-form-input">
                <input type="email" placeholder="メールアドレスをご記入ください" />
              </dd>
            </dl>
            <dl class="p-form__wrap">
              <dt class="p-form__label">電話番号<span>必須</span></dt>
              <dd class="p-form__input p-form-input">
                <input type="tel" placeholder="電話番号をご記入ください" />
              </dd>
            </dl>
            <dl class="p-form__wrap">
              <dt class="p-form__label">ご用件の種類</dt>
              <dd class="p-form__select p-form-select">
                <select>
                  <option value="" disabled selected>--選択してください--</option>
                  <option value="その他">その他</option>
                  <option value="その他">その他</option>
                  <option value="その他">その他</option>
                  <option value="その他">その他</option>
                </select>
              </dd>
            </dl>
            <dl class="p-form__wrap">
              <dt class="p-form__label">希望施設</dt>
              <dd class="p-form__select p-form-select">
                <select>
                  <option value="" disabled selected>--選択してください--</option>
                  <option value="その他">その他</option>
                </select>
              </dd>
            </dl>
            <dl class="p-form__wrap">
              <dt class="p-form__label">介護度区分</dt>
              <dd class="p-form__select p-form-select">
                <select>
                  <option value="" disabled selected>--選択してください--</option>
                  <option value="その他">その他</option>
                </select>
              </dd>
            </dl>
            <dl class="p-form__wrap p-form__wrap--textarea">
              <dt class="p-form__label">お問い合わせ内容</dt>
              <dd class="p-form__textarea p-form-textarea">
                <textarea name="message" placeholder="こちらにお問い合わせ内容を記入してください"></textarea>
              </dd>
            </dl>
            <p class="p-contact__text">入力が終わりましたら下の『内容を確認する』を押して確認後、送信してください。</p>
            <div class="p-form__submit p-form-submit">
              <input type="submit" value="内容を確認する" placeholder="内容を確認する" />
            </div>
          </form>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
