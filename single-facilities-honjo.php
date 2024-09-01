<?php

/**
 * Template Name: 施設詳細ページ いこいの里 本城壱番館
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
                ご入居頂くご本人様はもちろん、ご家族の方にも安心して頂ける。<br>
                そんな充実した施設創りをモットーにしております。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里 本城壱番館は、西鉄バス夜越バス停より徒歩約3分。北九州都市高速・黒崎ICより車で8分と、大変交通の便に優れた立地条件となっております。<br>
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d585.5911216126871!2d130.73560251363085!3d33.87410474115562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543c940717bd42f%3A0x84d264ba0998c2aa!2z44CSODA3LTA4MTUg56aP5bKh55yM5YyX5Lmd5bee5biC5YWr5bmh6KW_5Yy65pys5Z-O5p2x77yU5LiB55uu77yU!5e0!3m2!1sja!2sjp!4v1566450818085!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/y7p4ZMsCqy7TDjCM6" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒807-0815<br class="forSP"> 福岡県北九州市八幡西区本城東4丁目4-42<br>
                    TEL：093-693-5977<br class="forSP"> FAX：093-692-4020
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    西鉄バスをご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    夜越バス停より徒歩約3分
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
                    <th class="w35per" rowspan="3">
                      入居初期費用
                    </th>
                    <td class="left pl">
                      敷金
                      <span class="forSP">0円</span>
                    </td>
                    <td class="align_r pr forPC2">
                      0円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      共済会費<span class='caution'>※1</span>
                      <span class="forSP"> 20,000円</span>
                    </td>
                    <td class="align_r pr forPC2">
                      20,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      備品代<span class="itemS"><br class="forSP">(防炎カーテン代)</span>
                      <span class="forSP">8,000円</span>
                    </td>
                    <td class="forPC2 align_r pr">8,000円</td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td class="left pl">
                      家賃
                      <span class="forSP"> 29,000円</span>
                    </td>
                    <td class="align_r pr forPC2">
                      29,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食材費
                      <span class="forSP"> 16,500円</span>
                    </td>
                    <td class="align_r pr forPC2">
                      16,500円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食堂管理費
                      <span class="forSP"> 27,000円</span>
                    </td>
                    <td class="align_r pr forPC2">
                      27,000円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      管理費
                      <span class="forSP">15,700円</span>
                    </td>
                    <td class="align_r pr forPC2">
                      15,700円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n left pl">
                      <strong>月額合計 <span class="forSP">88,200円</span></strong>
                    </td>
                    <td class="align_r pr color_orange border_n forPC2"><strong>
                        88,200円
                      </strong></td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※1 万一火災等に対して補償が受けられます。なお、掛け金は掛け捨てです。</span>
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
                      88,200円
                    </td>
                    <td class="align_c">要介護1 <br class="forSP">16,765円</td>
                    <td class="align_c">
                      104,965円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 <br class="forSP">19,705円</td>
                    <td class="align_c">
                      107,905円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 <br class="forSP">27,048円</td>
                    <td class="align_c">
                      115,248円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 <br class="forSP">30,938円</td>
                    <td class="align_c">
                      119,138円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 <br class="forSP">36,217円</td>
                    <td class="align_c border_n">
                      124,417円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります。詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <span class='listMark-grid'>※別途、衛生管理費として月1,650円、口腔衛生費として月1,100円、洗濯代として月3,900円、ｼｬﾝﾌﾟｰ代として月500円、ﾚﾝﾀﾙ寝具代として月1,650円かかります。</span>
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
                    <th class="w33per left">
                      のむら内科・消化器科クリニック
                    </th>
                    <td>
                      のむら内科・消化器科クリニックと介護士、看護師の連携により、夜間や急変時にも迅速に適切な医療が受けられるので安心です。（定期訪問診療）
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      白井内科医院
                    </th>
                    <td>
                      内科・胃腸科・循環器科・リハビリテーション科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      てしば歯科クリニック
                    </th>
                    <td>
                      歯科（定期訪問診療）
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      済生会八幡総合病院
                    </th>
                    <td>
                      内科・神経科・消化器科・循環器科・整形外科・脳神経外科・皮膚科
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </section>
        <div class="forPC">
          <?php get_template_part('template-parts/contact-item'); ?>
        </div>
      </div>

      <!-- サイドバー -->
      <?php get_sidebar('facilites'); ?>
    </main>

    <div class="forSP">
      <?php get_template_part('template-parts/contact-item'); ?>
    </div>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>
