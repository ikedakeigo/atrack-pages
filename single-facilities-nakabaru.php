<?php

/**
 * Template Name: 施設詳細ページ いこいの里 中原
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
                ご本人が生きがい・自分でできたという達成感を<br>
                感じられる介護を心がけています。
              </p>
            </div>
            <div class="p-facilities-single-top__wrap">
              <div class="p-facilities-single-top__img">
                <?php echo the_post_thumbnail(); ?>
              </div>
              <div class="p-facilities-single-top__text">
                <p class="p-facilities-single-top__text-item">
                  いこいの里 中原では、一人一人の状態に合わせ、食事・排泄・入浴・趣味活動のお世話をさせていただいています。<br>
                  <br>
                  食事の際、噛む力が弱い・飲み込みが悪いといわれる方すべてにきざみ食やトロミをつけるということは致しません。ご本人の能力を的確に判断し、きざんで食べるおかず、トロミをつけて食べるおかず又は汁物をお出しします。<br>
                  <br>
                  過剰な介助をするのではなく、ご本人が持っている残存能力を最大限に発揮できるように心がけています。
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1655.8496938693936!2d130.8405544672044!3d33.897395133942915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543b886133eab1f%3A0x428e1d647adde565!2z44GE44GT44GE44Gu6YeM5Lit5Y6f!5e0!3m2!1sja!2sjp!4v1566451210349!5m2!1sja!2sjp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <p class="align_r mr10 mb10 font11"><a href="https://maps.app.goo.gl/RJyHgR7G3AzuRd7H7" target="_blank" class="a_link">大きな地図で見る</a></p>
              </div>
              <div class="p-facilities-single-access__text">
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconPin">
                    所在地
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    〒804-0011 <br class="forSP">福岡県北九州市戸畑区中原西2丁目7-8<br>
                    TEL：093-873-3151<br class="forSP"> FAX：093-873-3156
                  </dd>
                </dl>
                <dl class="p-facilities-single-access__list">
                  <dt class="p-facilities-single-access__item iconTrain">
                    JRをご利用の方
                  </dt>
                  <dd class="p-facilities-single-access__item">
                    JR鹿児島本線「九州工大前駅」より0.6km
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
                      敷金<span class='caution'>※1</span>
                      <span class="forSP">100,000円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      100,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      共済会費
                      <span class="forSP">0円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      0円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      備品代
                      <span class="forSP">0円</span>
                    </td>
                    <td class="forPC2 pr align_r">0円</td>
                  </tr>
                  <tr>
                    <th class="border_n" rowspan="6">月額利用料</th>
                    <td class="left pl">
                      家賃
                      <span class="forSP">39,000円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      39,000円
                    </td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      食費
                      <span class="forSP">53,000円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      53,000円</td>
                  </tr>
                  <tr>
                    <td class="left pl">
                      管理費
                      <span class="forSP">25,850円</span>
                    </td>
                    <td class="align_r forPC2 pr">
                      25,850円</td>
                  </tr>
                  <tr>
                    <td class="color_orange border_n left pl">
                      <strong>月額合計<span class="forSP">117,850円</span></strong>
                    </td>
                    <td class="align_r forPC2 pr color_orange border_n "><strong>
                        117,850円
                      </strong></td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※1 分割払いなどご相談に応じます。</span>
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
                      117,850円
                    </td>
                    <td class="align_c">要介護1 <br class="forSP">22,560円</td>
                    <td class="align_c">
                      140,410円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護2 <br class="forSP">23,610円</td>
                    <td class="align_c">
                      141,460円
                    </td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護3 <br class="forSP">24,330円</td>
                    <td class="align_c">
                      142,180円</td>
                  </tr>
                  <tr>
                    <td class="align_c">要介護4 <br class="forSP">24,810円</td>
                    <td class="align_c">
                      142,660円</td>
                  </tr>
                  <tr>
                    <td class="align_c border_n">要介護5 <br class="forSP">25,320円</td>
                    <td class="align_c border_n">
                      143,170円
                    </td>
                  </tr>
                </tbody>
              </table>
              <span class='listMark-grid'>※上記金額はあくまで目安になります。詳しくは各事業所にお問い合わせください。</span><br>
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
                    <th class="w33per left">
                      池園医院
                    </th>
                    <td>
                      胃腸科・内科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      戸畑けんわ病院
                    </th>
                    <td>
                      内科・循環器科・呼吸器科・外科

                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      牧山中央病院
                    </th>
                    <td>
                      内科・呼吸器科・外科・整形外科・脳神経外科
                    </td>
                  </tr>
                  <tr>
                    <th class="w33per left">
                      戸畑共立病院
                    </th>
                    <td>
                      内科・循環器内科・消火器外科・泌尿器科
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
