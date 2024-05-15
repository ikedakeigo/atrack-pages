<?php

/**
 * Template Name: 施設詳細ページ いこいの里 伊万里
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
                  佐賀県内で初めてのいこいの里 伊万里は市役所にも近く、閑静な住宅街の中で運営いたします。<br>
                  <br>
                  玄関を入ると、開放感のある明るいデイルームが広がり皆様を職員の笑顔でお迎え致します。<br>
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.7580889484243!2d129.8888450109143!3d33.25941966837264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356a846fe504ab87%3A0xb4cb14de0ec090c8!2z44GE44GT44GE44Gu6YeM5LyK5LiH6YeM!5e0!3m2!1sja!2sjp!4v1566450937113!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/8pynE91PHjCSbnFc6" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒848-0027<br class="forSP"> 佐賀県伊万里市立花町2394-1<br>
                    TEL：0955-22-7700<br class="forSP"> FAX：0955-22-7705
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    アクセス
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    JR筑肥線伊万里駅より2.1km
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
                  <!-- <tr>
                    <th class="w35per" rowspan="2">
                      入居費用
                    </th>
                    <td>共済会費</td>
                    <td class="align_r">
                      20,000円
                    </td>
                  </tr>
                  <tr>
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
                      28,000円
                    </td>
                  </tr>
                  <tr>
                    <td>食材費</td>
                    <td class="align_r">
                      13,000円</td>
                  </tr>
                  <tr>
                    <td>食堂管理費</td>
                    <td class="align_r">
                      28,500円</td>
                  </tr>
                  <tr>
                    <td>管理費</td>
                    <td class="align_r">
                      4,200円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n"><strong>月額合計</strong></td>
                    <td class="align_r color_orange border_n "><strong>
                        73,700円
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
                      73,700円
                    </td>
                    <td class="align_c">要介護1 16,765円</td>
                    <td class="align_c">
                      99,265円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 19,705円</td>
                    <td class="align_c">
                      102,205円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 27,048円</td>
                    <td class="align_c">
                      109,548円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 30,938円</td>
                    <td class="align_c">
                      113,438円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 36,217円</td>
                    <td class="align_c border_n">
                      118,717円
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
                      医療法人加茂医院
                    </th>
                    <td>
                      内科・外科・胃腸科・整形外科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      上田歯科医院
                    </th>
                    <td>
                      歯科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per">
                      世戸医院
                    </th>
                    <td>
                      眼科
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
