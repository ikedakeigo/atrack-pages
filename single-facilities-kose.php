<?php

/**
 * Template Name: 施設詳細ページ いこいの里 巨勢
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
                手厚い介護サービスと低料金にこだわった「いこいの里シリーズ」。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里 巨勢は、モラ―ジュ佐賀から徒歩5分と佐賀市の中心にあるので佐賀市はもちろん、市外の方でも簡単にアクセスできます。<br>
                  <br>
                  玄関を入ると、開放感のある明るいデイルームが広がり、皆様を職員の笑顔でお迎えいたします。<br>
                  <br>
                  要介護度の高い方や認知症の方でも安心して生活していただけるよう、24時間365日、手厚い介護サービスを提供いたします。
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2359.345920149151!2d130.31753726187267!3d33.25028357306608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541b58d8a3710e5%3A0xebec9abbdf4c9d6b!2z44GE44GT44GE44Gu6YeMIOW3qOWLog!5e0!3m2!1sja!2sjp!4v1566451104681!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/VYY2k61CjFatmd547" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒840-0008<br class="forSP"> 佐賀県佐賀市巨勢町大字牛島681-1<br>
                    TEL：0952-27-0001<br class="forSP"> FAX：0952-27-0011
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    アクセス
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    高尾バス停より0.8km
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
                      <p class="pl">敷金</p>
                      <span class="forSP">0円</span>
                    </td>
                    <td class="align_r forPC2 pr re">
                      <p>0円</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      <p class="pl">共済会費
                        <!-- <span class='caution'>※1</span> -->
                      </p>
                      <span class="forSP">0円</span>
                    </td>
                    <td class="align_r forPC2 pr re">
                      <p>0円</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      <p class="pl">備品代<span class="itemS"><br class="forSP">(防炎カーテン代)</span></p>
                      <span class="forSP">8,000円</span>
                    </td>
                    <td class="forPC2 pr align_r re">
                      <p>8,000円</p>
                    </td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td class="left pl">
                      <p class="pl">家賃</p>
                      <span class="forSP">30,000円</span>
                    </td>
                    <td class="align_r forPC2 pr re">
                      <p class="pl">30,000円</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      <p class="pl">食材費</p>
                      <span class="forSP">16,500円</span>
                    </td>
                    <td class="align_r forPC2 pr re">
                      <p class="pr">16,500円</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      <p class="pl">食堂管理費</p>
                      <span class="forSP">33,000円</span>
                    </td>
                    <td class="align_r forPC2 pr re">
                      <p class="pr">33,000円</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      <p class="pl">管理費</p>
                      <span class="forSP">20,000円</span>
                    </td>
                    <td class="align_r forPC2 pr re">
                      <p class="pr">20,000円</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n left pl">
                      <p class="pl"><strong>月額合計<span class="forSP">99,500円</span></strong></p>
                    </td>
                    <td class="align_r forPC2 pr color_orange border_n re">
                      <p class="pr">
                        <strong>
                          99,500円
                        </strong>
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- <span class='listMark-grid'>※1 万一火災等に対して補償が受けられます。なお、掛け金は掛け捨てです。</span> -->
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
                      99,500円
                    </td>
                    <td class="align_c">要介護1 <br class="forSP">16,765円</td>
                    <td class="align_c">
                      116,265円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 <br class="forSP">19,705円</td>
                    <td class="align_c">
                      119,205円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 <br class="forSP">27,048円</td>
                    <td class="align_c">
                      126,548円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 <br class="forSP">30,938円</td>
                    <td class="align_c">
                      130,438円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 <br class="forSP">36,217円</td>
                    <td class="align_c border_n">
                      135,717円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります。詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <span class='listMark-grid'>※別途、衛生管理費として月1,650円、口腔衛生費として月1,100円、洗濯代として月3,900円、ｼｬﾝﾌﾟｰ代として月500円、ﾚﾝﾀﾙ寝具代として月1,650円かかります。
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
                    <th class="w33per left">
                      矢ヶ部医院
                    </th>
                    <td>
                      内科・外科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      諸隈病院
                    </th>
                    <td>
                      内科・消化器科・呼吸器科・循環器科
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
