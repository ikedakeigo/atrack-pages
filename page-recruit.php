
<?php
/**
 * Template Name: 採用情報
 */
get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>

<main id="recruit">
      <!-- ページTop -->
      <div class="l-page-top c-page-top js-page-top">top</div>
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
      <section class="p-access l-access" id="">
        <div class="p-access__inner inner">
          <div class="p-access__map-wrap">
            <h2 class="p-access__title main-title">拠点マップ</h2>
            <p class="p-access__text">
              複数事業所を運営しておりますので、急な対応や緊急の状況にもいずれかの施設にてご対応が可能です。<br />
              詳しくはお問い合わせください。
            </p>
            <div class="p-access__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207763.07103716696!2d139.41831505122724!3d35.5463421778204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b563b00109f%3A0x337328def1e2ab26!2z5riL6LC36aeF!5e0!3m2!1sja!2sjp!4v1688630714995!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- location -->
      <section class="p-location-list l-location" id="">
        <div class="p-location-list__inner inner">
          <div class="p-location-list__wrap">
            <h2 class="p-location-list__title main-title">所在地一覧</h2>
            <div class="p-location-list__grid">
              <ul class="p-location-list__list">
                <!-- 1 -->
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title">グループホーム いこいの里 中原</a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> グループホーム いこいの里 宇佐町 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 若園 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 曽根壱番館 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 曽根弐番館 </a>
                </li>
              </ul>

              <!-- 2 -->
              <ul class="p-location-list__list">
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 介護付有料老人ホーム いこいの里 小波瀬 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> グループホーム いこいの里 小波瀬 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 糸島 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 古賀 </a>
                </li>
              </ul>

              <!-- 3 -->
              <ul class="p-location-list__list">
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 徳吉 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 永犬丸 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 本城壱番館 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 本城弐番館 </a>
                </li>
              </ul>

              <!-- 4 -->
              <ul class="p-location-list__list">
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 伊万里 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 唐津 </a>
                </li>
                <li class="p-location-list__item">
                  <a href="" class="p-location-list__item-title"> 住宅型有料老人ホーム いこいの里 巨勢 </a>
                </li>
              </ul>
            </div>
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
