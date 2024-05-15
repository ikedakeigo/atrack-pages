<?php

/**
 * Template Name: 施設詳細ページ いこいの里 宇佐町
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
                開放感ある室内で心地よい生活を送っていただけるよう、<br>
                スタッフ一同頑張ります。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里 宇佐町は1ユニット9名で生活を送るグループホームです。<br>
                  <br>
                  リビングの天井が高く吹き抜けになっており、入居者様に開放感を提供できると思います。入居者様からも「ここは気持ちが良くていいよ」と好評です。料理も新鮮な魚をメインに一工夫したり、手作りのおやつもあります。<br>
                  <br>
                  また、市場が近いため散歩や、買物も入居者様と一緒に楽しみたいと思っております。活気ある生活を提供できるようにスタッフ一同頑張ります。
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984.8190993147963!2d130.8913901479894!3d33.87617162714516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543bf5b0a44599f%3A0xe79835113173c771!2z44CSODAyLTAwMTYg56aP5bKh55yM5YyX5Lmd5bee5biC5bCP5YCJ5YyX5Yy65a6H5L2Q55S677yR5LiB55uu77yZ4oiS77yT77yV!5e0!3m2!1sja!2sjp!4v1566451546823!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/Rn85foZfSmjFWMPDA" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒802-0016<br class="forSP"> 福岡県北九州市小倉北区宇佐町1丁目9-36 <br>
                    TEL：093-513-1266<br class="forSP"> FAX：093-513-1267
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    JRをご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    最寄のJR駅は、「小倉駅」距離2.1km
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
                      入居初期費用
                    </th>
                    <td>敷金</td>
                    <td class="align_r">
                      100,000円
                    </td>
                  </tr>
                  <!-- <tr>
                    <td>備品代（カーテン、チェスト）</td>
                    <td class="align_r">
                      20,000円</td>
                  </tr> -->
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td>
                      家賃
                    </td>
                    <td class="align_r">
                      58,000円
                    </td>
                  </tr>
                  <tr>
                    <td>食材費</td>
                    <td class="align_r">
                      53,000円</td>
                  </tr>
                  <tr>
                    <td>管理費</td>
                    <td class="align_r">
                      24,200円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n"><strong>月額合計</strong></td>
                    <td class="align_r color_orange border_n "><strong>
                        135,200円
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
                      135,200円
                    </td>
                    <td class="align_c">要介護1 22,920円</td>
                    <td class="align_c">
                      158,120円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 24,000円</td>
                    <td class="align_c">
                      159,200円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 24,690円</td>
                    <td class="align_c">
                      159,890円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 25,200円</td>
                    <td class="align_c">
                      160,400円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 25,740円</td>
                    <td class="align_c border_n">
                      160,940円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <!-- <span class='listMark-grid'>※別途、洗濯代として月3,900円、。シャンプー代として月500円、レンタル寝具代として月1,650円、衛生消耗品費として月1,650円かかります。
              </span> -->
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
                      健和会大手町病院
                    </th>
                    <td>
                      内科・呼吸器科・消化器科・循環器科・小児科・精神科・神経内科外科・心臓血管外科<br>
                      整形外科・形成外科・脳神経外科・産婦人科眼科・耳鼻咽喉科・皮膚科・泌尿器科・肛門科<br>
                      放射線科・麻酔科・リハビリテーション科
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
