
<?php
/**
 * Template Name: 入居の流れ・条件
 */
get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>

<main id="flow">
      
      <!-- ページTop -->
      <div class="l-page-top c-page-top js-page-top">top</div>
      <!-- flow -->
      <section class="p-flow l-flow" id="">
        <div class="p-flow__inner inner">
          <h2 class="p-flow__title main-title">入居までの流れ</h2>
          <ol class="p-flow__list p-flow-list">
            <li class="p-flow-list__item">
              <div class="p-flow-list__item-wrap">
                <img src="assets/img/common/1.svg" class="forPC" alt="" />
                <div class="p-flow-list__item-box">
                  <p class="p-flow-list__item-title">お問い合わせ</p>
                  <p class="p-flow-list__item-text">
                    まずは0120-000-000 までお電話ください。<br />
                    弊社の担当者から入居について説明させていただきます。<br />
                    その際、面談の日程を調整させていただきます。
                  </p>
                </div>
              </div>
            </li>
            <li class="p-flow-list__item">
              <div class="p-flow-list__item-wrap">
                <img src="assets/img/common/2.svg" class="forPC" alt="" />
                <div class="p-flow-list__item-box">
                  <p class="p-flow-list__item-title">見学・申し込み</p>
                  <p class="p-flow-list__item-text">
                    サービス内容・設備・契約料金等について説明します。<br />
                    ご納得いただいたうえでお申し込みをいただきます。<br />
                    見学は24時間365日可能です。
                  </p>
                </div>
              </div>
            </li>
            <li class="p-flow-list__item">
              <div class="p-flow-list__item-wrap">
                <img src="assets/img/common/3.svg" class="forPC" alt="" />
                <div class="p-flow-list__item-box">
                  <p class="p-flow-list__item-title">面談</p>
                  <p class="p-flow-list__item-text">
                    診断書等の作成依頼と提出<br />
                    こちらからきっちりとサービス提供するために、ご本人様の状況を確認させていただき、ご入居いただけるかどうかを判断させていただきます。ご自宅や病院にお伺いすることもできますし、来ていただいても結構ですし、ご要望があれば無料でお迎えにも上がります。
                  </p>
                </div>
              </div>
            </li>
            <li class="p-flow-list__item">
              <div class="p-flow-list__item-wrap">
                <img src="assets/img/common/4.svg" class="forPC" alt="" />
                <div class="p-flow-list__item-box">
                  <p class="p-flow-list__item-title">入居日の決定</p>
                  <p class="p-flow-list__item-text">
                    入居するかどうかを決めていただいたら、入居者様のご都合に合わせて入居日を決めていただきます。<br />
                    コミュニケーションの中でヒアリングします。<br />
                    緊急性の高いご家庭の場合は、面談当日入居をいただくことも可能です。ご状況によっては、退院前等の一時的預かり等も対応させていただいております。ぜひご遠慮なくお申し付けください。
                  </p>
                </div>
              </div>
            </li>
          </ol>
        </div>
      </section>

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

      <!-- after -->
      <section class="p-after l-after" id="">
        <div class="p-after__inner inner">
          <div class="p-after__wrap">
            <h2 class="p-after__title main-title">入居後の生活イメージ</h2>
            <p class="btnBlock01 innerWidth">
              <a class="btn--black btnWFull" href="">
                <span>行事・レクリエーション</span>
              </a>
            </p>
            <p class="btnBlock01 innerWidth">
              <a class="btn--black btnWFull" href="">
                <span>食事について</span>
              </a>
            </p>
            <p class="btnBlock01 innerWidth">
              <a class="btn--black btnWFull" href="">
                <span>機能訓練</span>
              </a>
            </p>

            <div class="p-after__content">
              <ul class="cords__list cords-list">
                <li class="cords-list__item">
                  <a href="#">
                    <div class="cords-list__item-img">
                      <img src="assets/img/common/dummy.jpg" alt="省略" />
                    </div>
                    <div class="cords-list__item-content">
                      <p class="cords-list__item-title">入浴</p>
                      <p class="cords-list__item-text">
                        入浴時は同性介護が基本です。<br />
                        入居者様の状況やライフスタイルにあわせて週に3回、毎日、など入浴介助致します。
                      </p>
                    </div>
                  </a>
                </li>

                <li class="cords-list__item">
                  <a href="#">
                    <div class="cords-list__item-img">
                      <img src="assets/img/common/dummy.jpg" alt="省略" />
                    </div>
                    <div class="cords-list__item-content">
                      <p class="cords-list__item-title">感染症対策</p>
                      <p class="cords-list__item-text">外部からの感染リスクを最小限に抑えるための対策及び、入居者様の健康状態を定期的にモニタリングし、発熱や呼吸器症状などがみられる場合は速やかに対応します。</p>
                    </div>
                  </a>
                </li>

                <li class="cords-list__item">
                  <a href="#">
                    <div class="cords-list__item-img">
                      <img src="assets/img/common/dummy.jpg" alt="省略" />
                    </div>
                    <div class="cords-list__item-content">
                      <p class="cords-list__item-title">外出について</p>
                      <p class="cords-list__item-text">元々は24時間可能でしたが、現在は、新型コロナウイルス・インフルエンザの蔓延防止に伴い、施設ごとの対応をとっております。詳しくはお尋ねください。</p>
                    </div>
                  </a>
                </li>

                <li class="cords-list__item">
                  <a href="#">
                    <div class="cords-list__item-img">
                      <img src="assets/img/common/dummy.jpg" alt="省略" />
                    </div>
                    <div class="cords-list__item-content">
                      <p class="cords-list__item-title">受診対応</p>
                      <p class="cords-list__item-text">検査等で通院する必要がある場合は、ご家族付き添いをお願いしております。有料ですが施設の職員で対応することも可能。1,050円/30分。詳細についてはお問い合わせください。</p>
                    </div>
                  </a>
                </li>

                <li class="cords-list__item">
                  <a href="#">
                    <div class="cords-list__item-img">
                      <img src="assets/img/common/dummy.jpg" alt="省略" />
                    </div>
                    <div class="cords-list__item-content">
                      <p class="cords-list__item-title">服薬管理</p>
                      <p class="cords-list__item-text">薬局から施設へお薬を宅配してもらいます。施設職員で管理・服薬支援を行います。</p>
                    </div>
                  </a>
                </li>

                <li class="cords-list__item">
                  <a href="#">
                    <div class="cords-list__item-img">
                      <img src="assets/img/common/dummy.jpg" alt="省略" />
                    </div>
                    <div class="cords-list__item-content">
                      <p class="cords-list__item-title">緊急時対応</p>
                      <p class="cords-list__item-text">緊急時は迅速に主治医と連携をとり、救急搬送の手配を行います。</p>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
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
