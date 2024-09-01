<?php

/**
 * Template Name: 施設詳細ページ いこいの里 若園
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
                  住宅型有料老人ホーム いこいの里 若園
                </span>
              </h1>
              <p class="p-facilities-single-top__sub-title">
                安心・安全・快適な暮らしのために選ばれた、くつろぎの住環境をご提供。<br>
                まわりは閑静な住宅街です。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里 若園は、閑静な住宅街の中にあります。<br>
                  <br>
                  確かな技術とノウハウで安心のサービスを提供させていただきます。<br>
                  <br>
                  施設は開放感たっぷりで、天気の良い日などには、施設周辺の広い日本庭園を散策します。緑の中でゆっくりとおくつろぎいただけます。
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- facilities-single-access -->
        <section class="p-facilities-single-access l-facilities-single-access  delay" id="">
          <div class="p-facilities-single-access__inner inner">
            <div class="p-facilities-single-access__title-wrap">
              <h2 class="p-facilities-single__title main-title iconMap">
                <span>アクセス</span>
              </h2>
            </div>
            <div class="p-facilities-single-access__wrap">
              <div class="p-facilities-single-access__map-wrap">
                <div class="p-facilities-single-access__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1656.8044277840856!2d130.8899682935509!3d33.848196491139625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543c0c6fa3022a5%3A0x32e489d1b2757aec!2z44GE44GT44GE44Gu6YeM6Iul5ZyS!5e0!3m2!1sja!2sjp!4v1566451589530!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/uetTiaNRNypxkFMq7" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒802-0816<br class="forSP"> 福岡県北九州市小倉南区若園3丁目11-1 <br>
                    TEL：093-932-5820<br class="forSP"> FAX：093-932-5821
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    JRをご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    最寄のJR駅は、「日豊本線 城野駅」距離1.8km
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    車をご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    若園インターから車で3分
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
                      <p>敷金</p>
                      <span class="forSP">0円</span>
                    </td>
                    <td class="align_r forPC22 pr">
                      <p>0円</p>
                    </td>
                  </tr>
                  <td class="left pl">
                    共済会費<span class='caution'>※1</span>
                    <span class="forSP">20,000円</span>
                  </td>
                  <td class="align_r forPC22 pr">
                    20,000円
                  </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      備品代
                      <span class="forSP">0円</span>
                    </td>
                    <td class="forPC22 pr align_r">0円</td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td class="left pl">
                      家賃 <br class="">
                      <span class='listMark-grid'>※居室のタイプによって料金が変わります。</span>
                      <span class="forSP">52,000～88,000円</span>
                    </td>
                    <td class="align_r forPC22 pr">
                      52,000～<br class="forSP">88,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食材費
                      <span class="forSP">25,500円</span>
                    </td>
                    <td class="align_r forPC22 pr">
                      25,500円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食堂管理費
                      <span class="forSP">30,500円</span>
                    </td>
                    <td class="align_r forPC22 pr">
                      30,500円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      管理費
                      <span class="forSP">28,700円</span>
                    </td>
                    <td class="align_r forPC22 pr">
                      28,700円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      共益費
                      <span class="forSP">17,000円</span>
                    </td>
                    <td class="align_r forPC22 pr">
                      17,000円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n left pl">
                      <strong>月額合計<span class="forSP">153,700～<br class="forSP">189,700円</span></strong>
                    </td>
                    <td class="align_r forPC22 pr color_orange border_n "><strong>
                        153,700～<br class="forSP">189,700円</strong></td>
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
                      153,700～<br class="forSP">189,700円
                    </td>
                    <td class="align_c">要介護1 <br class="forSP">16,765円</td>
                    <td class="align_c">
                      170,465～<br class="forSP">206,465円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 <br class="forSP">19,705円</td>
                    <td class="align_c">
                      173,405～<br class="forSP">209,405円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 <br class="forSP">27,048円</td>
                    <td class="align_c">
                      180,748～<br class="forSP">216,748円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 <br class="forSP">30,938円</td>
                    <td class="align_c">
                      184,638～<br class="forSP">220,638円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 <br class="forSP">36,217円</td>
                    <td class="align_c border_n">
                      189,917～<br class="forSP">225,917円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります。詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <span class='listMark-grid'>※別途、口腔衛生費として月1,000円、洗濯代として月1,000円、ﾚﾝﾀﾙ寝具代として月1,500円かかります。</span>
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
                      重見医院
                    </th>
                    <td>
                      内科・小児科（毎週 月・金曜日 往診）
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      北九州総合病院
                    </th>
                    <td>
                      内科・小児科・外科 消化器センター・産婦人科・放射線科・整形外科 脊椎脊髄病センター <br>
                      形成外科・脳神経外科 脳卒中センター・泌尿器科・耳鼻咽喉科・リハビリテーション科
                    </td>
                  </tr>
                  <tr>

                    <th class="w33per left">
                      良永医院
                    </th>
                    <td>
                      内科・循環器内科・呼吸器内科・小児科（第2・4水曜日 往診）
                    </td>
                  </tr>
                  <tr>
                    <th class="border_n w33per left">ますゆき皮フ科クリニック</th>
                    <td class="border_n">
                      皮膚科（第2・4 木曜日 往診）
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
