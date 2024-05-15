<?php

/**
 * Template Name: 施設詳細ページ いこいの里 糸島
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main id="p-facilities-single">
      <!-- ページTop -->
      <?php get_template_part('template-parts/pageTop-item') ?>
      <!-- facilities-single-top -->
      <div class="">
        <!-- カスタムフィールドの出力 -->

        <section class="p-facilities-single-top l-facilities-single-top delay " id="">
          <div class="p-facilities-single-top__inner inner">
            <div class="p-facilities-single-top__title-wrap">
              <h1 class="p-facilities-single-top__title iconHome">
                <span>
                  <?php echo get_the_title(); ?>
                </span>
              </h1>
              <p class="p-facilities-single-top__sub-title">
                快適で居心地の良い空間をご提供いたします
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  海、山、川、自然があふれる「伊都国」の閑静な住宅地にたたずむ、いこいの里糸島は要介護の方を対象とした定員84名の住宅型有料老人ホームです。目の前には公園があり、天気の良い日のレクリエーションには最適です。<br>
                  <br>
                  季節にあわせたイベントや外部の方にご協力いただく創作活動など、ご入居者様のお身体の状態やご要望にあわせた多彩なアクティビティをご用意しています。<br>
                  <br>
                  いこいの里は「家庭の延長」であり、「安心・安全・快適」な生活をお過ごし頂ける住まいです。入居者様お一人お一人がその人らしく充実した時間が過ごせるよう、生活のお手伝いをさせていただきます。
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- facilities-single-access -->
        <section class="p-facilities-single-access l-facilities-single-access delay " id="">
          <div class="p-facilities-single-access__inner inner">
            <div class="p-facilities-single-access__title-wrap">
              <h2 class="p-facilities-single__title main-title iconMap">
                <span>アクセス</span>
              </h2>
            </div>
            <div class="p-facilities-single-access__wrap">
              <div class="p-facilities-single-access__map-wrap">
                <div class="p-facilities-single-access__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2351.2698403021686!2d130.18457337311136!3d33.54823945563813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541c28056750e15%3A0xb9e8f8fe6385fd3f!2z44GE44GT44GE44Gu6YeMIOezuOWztg!5e0!3m2!1sja!2sjp!4v1566452666511!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/n7uffQrmJvZhDrA9A" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒819-1121<br class="forSP"> 福岡県糸島市荻浦5丁目10-1<br>
                    TEL：092-330-7700
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    アクセス
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    美咲が丘駅より徒歩約10分
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </section>
        <!-- facilities-single-price -->
        <section class="p-facilities-single-price l-facilities-single-price  delay" id="">
          <div class="p-facilities-single-price__inner inner">
            <div class="p-facilities-single-price__title-wrap">
              <h2 class="p-facilities-single__title main-title iconMath">
                <span>料金のご案内</span>
              </h2>
            </div>
            <div class="p-facilities-single-price__wrap">
              <h3 class="p-facilities-single-price__subT">
                <span class="pl_titleInner">
                  入居費用
                </span>
              </h3>
              <!-- 料金テーブル -->
              <table class="p-facilities-single__table">
                <tbody>
                  <tr>
                    <th class="w35per" rowspan="2">
                      入居初期費用
                    </th>
                    <!-- <td>&nbsp;</td> -->
                    <td>共済会費</td>
                    <td class="align_r">
                      20,000円
                    </td>
                  </tr>
                  <tr>
                    <td>備品代（カーテン、チェスト）</td>
                    <td class="align_r">
                      20,000円</td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td>
                      家賃
                    </td>
                    <td class="align_r">
                      32,000円
                    </td>
                  </tr>
                  <tr>
                    <td>食材費</td>
                    <td class="align_r">
                      16,500円</td>
                  </tr>
                  <tr>
                    <td>食堂管理費</td>
                    <td class="align_r">
                      27,000円</td>
                  </tr>
                  <tr>
                    <td>管理費</td>
                    <td class="align_r">
                      23,200円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n"><strong>月額合計</strong></td>
                    <td class="align_r color_orange border_n "><strong>
                        98,700円
                      </strong></td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※1 万一の火災等に対して補償が受けられます。なお、掛け金は掛け捨てです。</span>
            </div>
            <div class="p-facilities-single-price__wrap">
              <h3 class="p-facilities-single-price__subT">
                <span class="pl_titleInner">
                  月額費用の目安
                </span>
              </h3>
              <!-- 料金テーブル -->
              <table class="p-facilities-single__table">
                <thead>
                  <tr>
                    <th class="w33per">月額利用料</th>
                    <th class="w33per">介護保険料<br>
                      1割負担</th>
                    <th class="w25per">1ヶ月の<br>お支払い金額の目安</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="5" class="align_c border_n">
                      98,700円
                    </td>
                    <td class="align_c">要介護1 16,765円</td>
                    <td class="align_c">
                      124,485円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 19,705円</td>
                    <td class="align_c">
                      127,425円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 27,048円</td>
                    <td class="align_c">
                      134,768円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 30,938円</td>
                    <td class="align_c">
                      138,658円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 36,217円</td>
                    <td class="align_c border_n">
                      143,937円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <span class='listMark-grid'>※別途、洗濯代として月3,900円、。シャンプー代として月500円、レンタル寝具代として月1,650円、衛生消耗品費として月1,650円かかります。
              </span>
            </div>
            <div class="p-facilities-single-price__wrap">
              <h3 class="p-facilities-single-price__subT">
                <span class="pl_titleInner">
                  協力医療機関
                </span>
              </h3>
              <p class="p-facilities-single-price__text">
                協力病院との連携により、健康保持につとめ必要に応じて受診・入院の適切な処遇を行います。
              </p>
              <!-- 料金テーブル -->
              <table class="p-facilities-single__table medical">
                <tbody>
                  <tr>
                    <th class="w33per">
                      かのう歯科医院
                    </th>
                    <td>
                      歯科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      たなかクリニック
                    </th>
                    <td>
                      内科・外科・整形外科・乳腺外科・循環器内科・リハビリテーション科・糖尿病外来
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      田中みのる内科
                    </th>
                    <td>
                      内科・消化器科・循環器科・呼吸器科、アレルギー科・小児科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      さくらのクリニック
                    </th>
                    <td>
                      一般内科・一般外科・消火器内科・訪問診療
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      つつみクリニック
                    </th>
                    <td>
                      内科全般・整形外科・精神科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      いのうえ歯科医院
                    </th>
                    <td>
                      歯科
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>

      <!-- サイドバー -->
      <?php get_sidebar('facilites'); ?>
    </main>

    <?php get_template_part('template-parts/contact-item'); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>
