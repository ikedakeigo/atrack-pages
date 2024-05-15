<?php

/**
 * Template Name: 施設詳細ページ いこいの里 小波瀬
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
                毎日のように外部の方々と触れ合いながら、笑い声のたえない施設は、<br>
                私のちょっとした自慢です。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  介護付有料老人ホーム いこいの里 小波瀬は、月に一度、御利用者様と話し合い、共に施設の運営を行っております。<br>
                  <br>
                  当施設では、朝のおはようから夜のおやすみまで、おじいさん、おばあさんに娘や孫と普通の家族のような関係です。<br>
                  <br>
                  何をするにも皆さん一緒の人としての関わりを大切にし、高齢になり少し体が不自由でも終の住み家として安心して生活できるようお手伝いをさせて頂いています。
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.592478740193!2d130.96927606234695!3d33.75630636055962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa4ff6a085d9c0b58!2z44GE44GT44GE44Gu6YeM5bCP5rOi54Cs!5e0!3m2!1sja!2sjp!4v1566451250427!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/mpdFyTnQEnYhfJ7VA" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒800-0344<br class="forSP"> 福岡県京都郡苅田町大字新津1519-1<br>
                    TEL：0930-24-8892<br class="forSP"> FAX：0930-24-8893
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    JRをご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    最寄のJR駅は、「小波瀬西工大前駅」距離約0.6km
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
                    <td>
                      敷金
                    </td>
                    <td class="align_r">
                      100,000円
                    </td>
                  </tr>
                  <tr>
                    <td>共済会費</td>
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
                      25,500円</td>
                  </tr>
                  <tr>
                    <td>食堂管理費</td>
                    <td class="align_r">
                      27,500円</td>
                  </tr>
                  <tr>
                    <td>管理費</td>
                    <td class="align_r">
                      7,000円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n"><strong>月額合計</strong></td>
                    <td class="align_r color_orange border_n "><strong>
                        92,000円
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
                      92,000円
                    </td>
                    <td class="align_c">要介護1 16,140円</td>
                    <td class="align_c">
                      115,840円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 18,120円</td>
                    <td class="align_c">
                      117,820円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 20,220円</td>
                    <td class="align_c">
                      119,920円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 22,140円</td>
                    <td class="align_c">
                      121,840円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 24,210円</td>
                    <td class="align_c border_n">
                      123,910円
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
                      重見医院
                    </th>
                    <td>
                      重見医院と介護師と看護師の連携により、夜間や急変時にもスピーディーで適切な医療処置が受けられるので安心です。<br>
                      内科・小児科（毎週水曜日　訪問診療）
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      小波瀬病院
                    </th>
                    <td>
                      内科・呼吸器科・整形外科・心療内科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      土屋整形外科
                    </th>
                    <td>
                      整形外科・リハビリテーション科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      苅田病院
                    </th>
                    <td>
                      内科・消化器科・呼吸器科・循環器科・リハビリテーション科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      行橋記念病院
                    </th>
                    <td>
                      内科・精神科・神経科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      大原病院
                    </th>
                    <td>
                      内科・呼吸器科・消化器科・循環器科・神経内科<br>
                      リハビリテーション科・放射線科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      健和会 京町病院
                    </th>
                    <td>
                      内科・小児科・外科・整形外科・婦人科・皮膚科・泌尿器科<br>
                      リハビリテーション科・放射線科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      森和会 行橋中央病院
                    </th>
                    <td>
                      内科・糖尿病内科・腎臓内科・循環器内科・リウマチ科・消化器内科・呼吸器内科・泌尿器科・人工透析内科・外科・消化器外科・整形外科・リハビリテーション科
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
