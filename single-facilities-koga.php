<?php

/**
 * Template Name: 施設詳細ページ いこいの里 古賀
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
                いこいの里の介護サービスは、「家庭の延長線」です。<br>
                「入って良かった」と喜んでいただけるホームを目指します。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里古賀は、古賀市役所近くの住宅地の中にあります。いこいの里は、ご入居者様も、離れて暮らすご家族様も安心の生活空間。<br>
                  <br>
                  困ったとき、不安なとき、辛いとき、そこにはいつも頼れる人がいる。<br>
                  <br>
                  うれしいとき、楽しいときには一緒に笑ってくれる人がいる。そんなお一人おひとりの気持ちに寄り添うケアを心がけています。
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6636.601277574703!2d130.4740736113367!3d33.7270412758038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDQzJzM4LjAiTiAxMzDCsDI4JzI2LjYiRQ!5e0!3m2!1sja!2sjp!4v1593492486917!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/cX6R4ZZpGn7VubNu6" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒811-3117<br class="forSP"> 福岡県古賀市今の庄2丁目15番10号<br>
                    TEL：092-943-6677<br class="forSP"> FAX：092-943-6655
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
                    <td class="align_r forPC2 pr">
                      0円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      共済会費<span class='caution'>※1</span>
                      <span class="forSP">20,000円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      20,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      備品代<span class="itemS"><br class="forSP">(防炎ｶｰﾃﾝ・ﾁｪｽﾄ代)</span>
                      <span class="forSP">20,000円</span>
                    </td>
                    <td class="forPC2 pr align_r">20,000円</td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td class="left pl">
                      家賃
                      <span class="forSP">32,000円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      32,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食材費
                      <span class="forSP">16,500円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      16,500円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食堂管理費
                      <span class="forSP">27,000円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      27,000円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      管理費
                      <span class="forSP">30,200円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      30,200円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n left pl">
                      <strong>月額合計<span class="forSP">105,700円</span></strong>
                    </td>
                    <td class="align_r forPC2 pr color_orange border_n "><strong>
                        105,700円
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
                      105,700円
                    </td>
                    <td class="align_c">要介護1 <br class="forSP">16,765円</td>
                    <td class="align_c">
                      122,465円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 <br class="forSP">19,705円</td>
                    <td class="align_c">
                      125,405円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 <br class="forSP">27,048円</td>
                    <td class="align_c">
                      132,748円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 <br class="forSP">30,938円</td>
                    <td class="align_c">
                      136,638円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 <br class="forSP">36,217円</td>
                    <td class="align_c border_n">
                      141,917円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります。詳しくは各事業所にお問い合わせください。</span><br>
              <span class='listMark-grid'>※診療代、お薬代、おむつ代等は各自でのご負担となります。</span><br>
              <span class='listMark-grid'>※別途、衛生管理費として月1,650円、口腔衛生費として月1,100円、洗濯代として月4,400円、ﾚﾝﾀﾙ寝具代として月1,650円かかります。
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
                      福津訪問クリニック
                    </th>
                    <td>
                      内科・精神科・心療内科
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
