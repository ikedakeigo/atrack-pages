
<?php
/**
 * Template Name:  職員について
 */
get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>

<main id="staff">
      <!-- ページTop -->
      <div class="l-page-top c-page-top js-page-top">top</div>
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