<?php

/**
 * Template Name: 施設詳細ページ いこいの里 永犬丸
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
                高齢者居住空間の新しい提案！終生の安心と明るい暮らしを。<br>
                要介護の高い方でも安心して過ごせる空間の提供を。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里 永犬丸は、筑豊電鉄・永犬丸電停より100m、北九州都市高速・引野ICより車で5分と、大変交通の便に優れた立地条件となっております。<br>
                  <br>
                  玄関を入ると、開放感のある明るいデイルームが広がり、皆様を職員の笑顔でお迎え致します。<br>
                  <br>
                  実績ある当社の介護職員が24時間・365日常駐し、要介護度の高い方でも安心して皆様の生活のお手伝いをさせて頂きます。
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1171.6609041220702!2d130.736958148582!3d33.83920710467241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543cec11f98ad0d%3A0x45f0af6ec3070a50!2z44GE44GT44GE44Gu6YeM5rC454qs5Li4!5e0!3m2!1sja!2sjp!4v1566450755194!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/VQ55NtqPfwErrXob7" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒807-0846<br class="forSP"> 福岡県北九州市八幡西区里中2丁目1-28<br>
                    TEL：093-611-3155<br class="forSP"> FAX：093-611-3172
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    JRをご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    JR黒崎駅より筑豊電鉄に乗り換え、「筑鉄 永犬丸駅」距離0.1km
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
                    <th class="w35per" rowspan="">
                      入居時の費用
                    </th>
                    <td>
                      共済会費
                    </td>
                    <td class="align_r">
                      20,000円
                    </td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td>
                      家賃
                    </td>
                    <td class="align_r">
                      29,000円
                    </td>
                  </tr>
                  <tr>
                    <td>食材費</td>
                    <td class="align_r">
                      15,500円</td>
                  </tr>
                  <tr>
                    <td>食堂管理費</td>
                    <td class="align_r">
                      27,000円</td>
                  </tr>
                  <tr>
                    <td>管理費</td>
                    <td class="align_r">
                      9,700円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n"><strong>月額合計</strong></td>
                    <td class="align_r color_orange border_n "><strong>
                        81,200円
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
                      81,200円
                    </td>
                    <td class="align_c">要介護1 16,765円</td>
                    <td class="align_c">
                      106,795円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 19,705円</td>
                    <td class="align_c">
                      109,705円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 27,048円</td>
                    <td class="align_c">
                      117,048円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 30,938円</td>
                    <td class="align_c">
                      120,938円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 36,217円</td>
                    <td class="align_c border_n">
                      126,217円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <span class='listMark-grid'>※別途、洗濯代として月3,900円、シャンプー代として月500円、口腔衛生費として月1,100円、レンタル寝具代として月1,650円、衛生消耗品費として月1,650円かかります。</span>
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
                      小田内科消化器科医院
                    </th>
                    <td>
                      医師と介護士、看護師の連携により、夜間や急変時にも迅速に適切な医療が受けられるので安心です。
                      内科・消化器科（毎週水曜日 訪問診療）（1名につき月2回 往診）
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      正和中央病院
                    </th>
                    <td>
                      外科・内視鏡内科・消化器外科・整形外科・リハビリテーション科・麻酔科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      たかむら歯科
                    </th>
                    <td>
                      歯科（毎週水曜日 訪問診療）
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
