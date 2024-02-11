<?php
/**
 * Template Name: 施設一覧・空室確認
 */
get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>

<main id="facilities">
      <!-- ページTop -->
      <div class="l-page-top c-page-top js-page-top">top</div>
      <!-- access -->
      <section class="p-access l-access" id="">
        <div class="p-access__inner inner">
          <div class="p-access__map-wrap">
            <h2 class="p-access__title main-title">拠点マップ</h2>
            <p class="p-access__text">私達が目指しているのは、「家庭の延長線にあるホーム」です。人としての関わりを大切にしながら午後からの入浴や日々の生活援助など、今まで営んできた生活リズムにできる限り近づけられるよう、またご本人が生きがい・自分でできたという達成感を感じられる介護を心がけながらお手伝いさせていただいております。</p>
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

      <!-- facility -->
      <section class="p-facility l-facility" id="">
        <div class="p-facility__inner inner">
          <div class="p-facility__wrap">
            <h2 class="p-facility__title main-title">施設一覧</h2>
            <p class="p-facility__update">最終更新日：2023年12月30日</p>
            <ul class="p-facility__list">
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">グループホーム いこいの里 中原</p>
                    <p class="p-facility-list__item-text">〒804-0011 福岡県北九州市戸畑区中原西2丁目7-8</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-873-3151 <br />
                      FAX：093-873-3156
                    </p>
                  </div>
                </a>
              </li>

              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">グループホーム いこいの里 宇佐町</p>
                    <p class="p-facility-list__item-text">〒802-0016 福岡県北九州市小倉北区宇佐町1丁目9-36</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-513-1266 <br />
                      FAX：093-513-1267
                    </p>
                  </div>
                </a>
              </li>

              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 若園</p>
                    <p class="p-facility-list__item-text">〒802-0816 福岡県北九州市小倉南区若園3丁目11-1</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-932-5820 <br />
                      FAX：093-932-5821
                    </p>
                  </div>
                </a>
              </li>

              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 曽根壱番館</p>
                    <p class="p-facility-list__item-text">〒800-0229 福岡県北九州市小倉南区曽根北町2番5号</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-474-3100 <br />
                      FAX：093-474-3120
                    </p>
                  </div>
                </a>
              </li>

              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 曽根弐番館</p>
                    <p class="p-facility-list__item-text">〒800-0229 福岡県北九州市小倉南区曽根北町2番6号</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-474-0111 <br />
                      FAX：093-474-0112
                    </p>
                  </div>
                </a>
              </li>

              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 徳吉</p>
                    <p class="p-facility-list__item-text">〒803-0278 福岡県北九州市小倉南区徳吉西3丁目2-6</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-452-3993 <br />
                      FAX：093-452-3988
                    </p>
                  </div>
                </a>
              </li>

              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 永犬丸</p>
                    <p class="p-facility-list__item-text">〒807-0846 福岡県北九州市八幡西区里中2丁目1-28</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-611-3155 <br />
                      FAX：093-611-3172
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 本城壱番館</p>
                    <p class="p-facility-list__item-text">〒807-0815 福岡県北九州市八幡西区本城東4丁目4-42</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-693-5977 <br />
                      FAX：093-692-4020
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 本城弐番館</p>
                    <p class="p-facility-list__item-text">〒807-0815 福岡県北九州市八幡西区本城東4丁目4-3</p>
                    <p class="p-facility-list__item-text">
                      TEL：093-693-5111 <br />
                      FAX：093-693-5110
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">介護付有料老人ホーム いこいの里 小波瀬</p>
                    <p class="p-facility-list__item-text">〒800-0344 福岡県京都郡苅田町大字新津1519-1</p>
                    <p class="p-facility-list__item-text">
                      TEL：0930-24-8892 <br />
                      FAX：0930-24-8893
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">グループホーム いこいの里 小波瀬</p>
                    <p class="p-facility-list__item-text">〒800-0345 福岡県京都郡苅田町大字新津1505-27</p>
                    <p class="p-facility-list__item-text">
                      TEL：0930-24-9051 <br />
                      FAX：0930-24-9052
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 糸島</p>
                    <p class="p-facility-list__item-text">〒819-1121 福岡県糸島市荻浦5丁目10-1</p>
                    <p class="p-facility-list__item-text">TEL：092-330-7700</p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 古賀</p>
                    <p class="p-facility-list__item-text">〒811-3117 福岡県古賀市今の庄2丁目15番10号</p>
                    <p class="p-facility-list__item-text">
                      TEL：092-943-6677 <br />
                      FAX：092-943-6655
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 伊万里</p>
                    <p class="p-facility-list__item-text">〒848-0027 佐賀県伊万里市立花町2394-1</p>
                    <p class="p-facility-list__item-text">
                      TEL：0955-22-7700 <br />
                      FAX：0955-22-7705
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 唐津</p>
                    <p class="p-facility-list__item-text">〒847-0081 佐賀県唐津市和多田南先石7-15</p>
                    <p class="p-facility-list__item-text">
                      TEL：0955-65-7755 <br />
                      FAX：0955-65-7750
                    </p>
                  </div>
                </a>
              </li>
              <li class="p-facility-list__item">
                <a href="#">
                  <div class="p-facility-list__item-img">
                    <img src="assets/img/common/dummy.jpg" alt="省略" />
                  </div>
                  <div class="p-facility-list__item-content">
                    <p class="p-facility-list__item-title">住宅型有料老人ホーム いこいの里 巨勢</p>
                    <p class="p-facility-list__item-text">〒840-0008 佐賀県佐賀市巨勢町大字牛島681-1</p>
                    <p class="p-facility-list__item-text">
                      TEL：0952-27-0001 <br />
                      FAX：0952-27-0011
                    </p>
                  </div>
                </a>
              </li>
            </ul>

            <p class="p-facility__info-text forPC">
              複数事業所を運営しておりますので、急な対応や緊急の状況にもいずれかの施設にてご対応が可能です。<br />
              詳しくはお問い合わせください。
            </p>
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
