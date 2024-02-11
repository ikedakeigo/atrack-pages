<?php get_header(); ?>

<main id="top">

<!-- ページTop -->
<div class="l-page-top c-page-top js-page-top">top</div>
<!-- mv -->
<section class="p-mv l-mv">
  <div class="p-mv__inner">
    <div class="p-mv__title-wrap">
      <h2 class="p-mv__main-title">メインタイトル</h2>
      <p class="p-mv__sub-title">ここにサブタイトルが入ります。<br />ここにサzzzブタイトルが入ります。</p>
    </div>
    <div class="p-mv__swiper swiper js-mv-swiper">
      <div class="swiper-wrapper">
      <?php
        $args = array('post_type' => 'slider', 'posts_per_page' => -1);
        $slider_query = new WP_Query($args);

        if ($slider_query->have_posts()) :
            while ($slider_query->have_posts()) : $slider_query->the_post();
                $image_url = get_the_post_thumbnail_url();
                if ($image_url) : ?>
                    <div class="swiper-slide">
                      <div class="swiper-img">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                      </div>
                    </div>
                <?php endif;
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>


<!-- about -->
<section class="p-about l-about" id="">
  <div class="p-about__inner inner">
    <div class="p-about__wrap">
      <h2 class="p-about__title main-title">いこいの里ってどんな施設？</h2>
      <p class="p-about__text">ご高齢者様の経済的な負担を軽減した『いこいの里シリーズ』はライフスタイルに合わせて選べる様々なカタチの住宅型有料老人ホームです。 入居者様の個々の性格や個性、人生観を大切にした生活支援は勿論、地域のお祭りに参加するなど繋がりや絆を尊重した社会との交流を大切にしています。さらに 職員の夢に向かうハツラツとした姿勢を真近で見ることで、入居者様の心に輝きや活力を与えるような好循環も生まれつつあります。職員の幸せが生み出す、こころのある介護が『いこいの里』の魅力なのです。 また医師による往診・服薬、お薬の管理、協力病院との連携など手厚い介護サポートを提供することで、ご家族様に大変喜ばれています。</p>
      <div class="p-about__img innerWidth">
        <span>ブログバナー</span>
      </div>
      <div class="p-about__text-box">
        <h3 class="p-about__subtitle">TOPICS</h3>
        <div class="p-about__note">
          <!-- トピックスの内容 -->
          <dl>
            <dt>2024.01.31</dt>
            <dd><a href="#">トピックタイトル</a></dd>

            <dt>2024.01.31</dt>
            <dd><a href="#">トピックタイトル</a></dd>

            <dt>2024.01.31</dt>
            <dd><a href="#">トピックタイトル</a></dd>
          </dl>
        </div>
        <h3 class="p-about__subtitle">BLOG</h3>
        <div class="p-about__note">
          <!-- ブログの内容 -->
          <dl>
            <dt>2024.01.31</dt>
            <dd><a href="#">ブログタイトル</a></dd>
            <dt>2024.01.31</dt>
            <dd><a href="#">ブログタイトル</a></dd>
            <dt>2024.01.31</dt>
            <dd><a href="#">ブログタイトル</a></dd>
          </dl>
        </div>
      </div>
      <div class="p-about__content">
        <div class="p-about__left-column">
          <h3 class="p-about__left-title forPC">
            めんたいワイド［8分36秒］ <br />
            めんたいワイドのドキュめんのコーナーで放送されました。
          </h3>
          <h4>その他情報</h4>
          <div class="p-about__left-text">
            <span class="forPC">いこいの里ではお客様の安心を第一に考えます。</span>
            <ul class="listMemo01">
              <li style="font-size: unset" class="forSP"><span class="listMark01"></span>いこいの里では4つのお約束があります。</li>
              <li style="font-size: unset"><span class="listMark01"></span>お客様第一主義を実現します</li>
              <li style="font-size: unset"><span class="listMark01"></span>介護はお客様が主体となるものです</li>
              <li style="font-size: unset"><span class="listMark01"></span>お客様の安心感を最大化します</li>
              <li style="font-size: unset" class="forSP"><span class="listMark01"></span>人が介護の価値を磨きます。</li>
            </ul>
            <span class="forPC">人と人の繋がりを重視します</span>
          </div>
        </div>
        <div class="p-about__right-column">施設所在地</div>
      </div>
    </div>
  </div>
</section>

<!-- feature -->
<section class="p-feature l-feature" id="">
  <div class="p-feature__inner inner">
    <div class="p-feature__wrap">
      <h2 class="p-feature__title main-title">いこいの里が選ばれる理由</h2>

      <ul class="cords__list cords-list">
        <li class="cords-list__item">
          <a href="#">
            <div class="cords-list__item-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
            </div>
            <div class="cords-list__item-content">
              <p class="cords-list__item-title">第一優先：接遇</p>
              <p class="cords-list__item-text">
                円滑なコミュニケーションや信頼関係を築くために 入居者様の目線に立ち、一人ひとりに寄り添ったサポートを心がけています。<br />
                職員の接遇スキルや知識を身につけることで、より高い接遇が実現します。
              </p>
            </div>
          </a>
        </li>

        <li class="cords-list__item">
          <a href="#">
            <div class="cords-list__item-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
            </div>
            <div class="cords-list__item-content">
              <p class="cords-list__item-title">言葉遣い</p>
              <p class="cords-list__item-text">
                入居者様へは敬語がお約束です。心地よい声のトーンとスピードを意識し、表情と目線を合わせて会話にも安心感を心がけます。<br />
                また意見や要望に真摯に耳を傾け、聴く姿勢を大切にします。
              </p>
            </div>
          </a>
        </li>

        <li class="cords-list__item">
          <a href="#">
            <div class="cords-list__item-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
            </div>
            <div class="cords-list__item-content">
              <p class="cords-list__item-title">立ち振舞い</p>
              <p class="cords-list__item-text">入居者様やその家族、同僚、他の職員に対して、尊重と礼儀正しい態度を持つことが大切です。職員は敬意を払いポジティブな雰囲気を醸し出します。</p>
            </div>
          </a>
        </li>

        <li class="cords-list__item">
          <a href="#">
            <div class="cords-list__item-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
            </div>
            <div class="cords-list__item-content">
              <p class="cords-list__item-title">医師による往診</p>
              <p class="cords-list__item-text">
                医師による往診・服薬、お薬の管理、協力病院との連携など手厚い介護サポートを提供しています。<br />
                寝たきりの方・医療サービスが必要な方・認知症の診断のある方もご入居いただけます。
              </p>
            </div>
          </a>
        </li>

        <li class="cords-list__item">
          <a href="#">
            <div class="cords-list__item-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
            </div>
            <div class="cords-list__item-content">
              <p class="cords-list__item-title">自慢の手作り食事</p>
              <p class="cords-list__item-text">入居者様にとって食事は毎日の生活の中で最も生きる活力に繋がるものだからこそ、どの施設でも専門職の料理人が季節感を取り入れた料理を手作りしています。</p>
            </div>
          </a>
        </li>

        <li class="cords-list__item">
          <a href="#">
            <div class="cords-list__item-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
            </div>
            <div class="cords-list__item-content">
              <p class="cords-list__item-title">ターミナルケア（終末期介護）</p>
              <p class="cords-list__item-text">看護師の資格をもつ職員も常駐していますので終の住処として最期まで心のこもったお付き合いをさせていただきます。</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- flow -->
<section class="p-flow l-flow" id="">
  <div class="p-flow__inner inner">
    <h2 class="p-flow__title main-title">入居までの流れ</h2>
    <ol class="p-flow__list p-flow-list">
      <li class="p-flow-list__item">
        <div class="p-flow-list__item-wrap">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/common/1.svg" class="forPC" alt="" />
          <div class="p-flow-list__item-box">
            <p class="p-flow-list__item-title">お問い合わせ</p>
            <p class="p-flow-list__item-text">
              まずは0120-000-000 までお電話ください。<br />
              弊社の担当者から入居について説明させていただきます。<br />
              その際、面談の日程を調整させていただきます。
            </p>
          </div>
        </div>
      </li>
      <li class="p-flow-list__item">
        <div class="p-flow-list__item-wrap">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/common/2.svg" class="forPC" alt="" />
          <div class="p-flow-list__item-box">
            <p class="p-flow-list__item-title">見学・申し込み</p>
            <p class="p-flow-list__item-text">
              サービス内容・設備・契約料金等について説明します。<br />
              ご納得いただいたうえでお申し込みをいただきます。<br />
              見学は24時間365日可能です。
            </p>
          </div>
        </div>
      </li>
      <li class="p-flow-list__item">
        <div class="p-flow-list__item-wrap">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/common/3.svg" class="forPC" alt="" />
          <div class="p-flow-list__item-box">
            <p class="p-flow-list__item-title">面談</p>
            <p class="p-flow-list__item-text">
              診断書等の作成依頼と提出<br />
              こちらからきっちりとサービス提供するために、ご本人様の状況を確認させていただき、ご入居いただけるかどうかを判断させていただきます。ご自宅や病院にお伺いすることもできますし、来ていただいても結構ですし、ご要望があれば無料でお迎えにも上がります。
            </p>
          </div>
        </div>
      </li>
      <li class="p-flow-list__item">
        <div class="p-flow-list__item-wrap">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/common/4.svg" class="forPC" alt="" />
          <div class="p-flow-list__item-box">
            <p class="p-flow-list__item-title">入居日の決定</p>
            <p class="p-flow-list__item-text">
              入居するかどうかを決めていただいたら、入居者様のご都合に合わせて入居日を決めていただきます。<br />
              コミュニケーションの中でヒアリングします。<br />
              緊急性の高いご家庭の場合は、面談当日入居をいただくことも可能です。ご状況によっては、退院前等の一時的預かり等も対応させていただいております。ぜひご遠慮なくお申し付けください。
            </p>
          </div>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- terms -->
<section class="p-terms l-terms" id="">
  <div class="p-terms__inner inner">
    <div class="p-terms__wrap">
      <h2 class="p-terms__title main-title">入居条件</h2>
      <div class="p-terms__content">
        <h3 class="p-terms__subtitle">原則</h3>
        <ul class="p-terms__list listMemo01">
          <li>
            <span class="listMark01">・</span>
            症状が安定しており、一定の医療行為の継続状態にあること
          </li>
          <li>
            <span class="listMark01">・</span>
            訪問診療医の診察で治療のできる状態にあること
          </li>
          <li>
            <span class="listMark01">・</span>
            症状がやや不安定であっても、入院の受け入れ体制の調整が可能な状態にあること
          </li>
          <li>
            <span class="listMark01">・</span>
            医療提供において、積極的な治療希望が本人、家族にない状態にあること
          </li>
        </ul>

        <h3 class="p-terms__subtitle">
          入居可能な医療処置内容及び状態
          <small class="forPC">(施設によって対応できない医療処置もございます)</small>
        </h3>
        <ul class="p-terms__list listMemo01">
          <li>
            <span class="listMark01">・</span>
            尿道留置カテーテル<br><span class="listMark-grid">※前立腺肥大症の場合は、入院先病院での交換が必須</span>
          </li>
          <li>
            <span class="listMark01">・</span>
            酸素吸入（経鼻・マスク）
          </li>
          <li>
            <span class="listMark01">・</span>
            胃ろう（PEG、NGチューブ）、及び腸ろう<br>
            <span class="listMark-grid">※チューブ類は入院先病院での交換が必須</span>
          </li>
          <li>
            <span class="listMark01">・</span>
            中心静脈栄養（IVH）及びポート埋め込み
          </li>
          <li>
            <span class="listMark01">・</span>
            人口呼吸器（ニップネーザル その他機器は、要相談）
          </li>
          <li>
            <span class="listMark01">・</span>
            腎ろう<br><span class="listMark-grid">※ステント交換は、入院先病院での交換が必須</span>
          </li>
          <li>
            <span class="listMark01">・</span>
            膀胱ろう（ウロストミー）
          </li>
          <li>
            <span class="listMark01">・</span>
            人工肛門（ストマ）
          </li>
          <li>
            <span class="listMark01">・</span>
            人工透析<br><span class="listMark-grid">※透析受診時、送迎サービスのある病院での施工が必須</span>
          </li>
          <li>
            <span class="listMark01">・</span>
            インシュリン注射及びデキスター測定
          </li>
          <li>
            <span class="listMark01">・</span>
            各種筋肉注射、皮下注射
          </li>
          <li>
            <span class="listMark01">・</span>
            口腔内吸引
          </li>
          <li>
            <span class="listMark01">・</span>
            末梢点滴<br><span class="listMark-grid">※1日500mlで14日間施工を限度とする 血管確保が困難になることを十分理解されていること</span>
          </li>
          <li>
            <span class="listMark01">・</span>
            抗がん剤の内服
          </li>
          <li>
            <span class="listMark01">・</span>
            麻薬の使用（内服・経皮）
          </li>
          <li>
            <span class="listMark01">・</span>
            ステロイドの内服など<br><span class="listMark-grid">※内服薬に関しての規制なし</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- after -->
<section class="p-after l-after" id="">
  <div class="p-after__inner inner">
    <div class="p-after__wrap">
      <h2 class="p-after__title main-title">入居後の生活イメージ</h2>
      <p class="btnBlock01 innerWidth">
        <a class="btn--black btnWFull" href="">
          <span>行事・レクリエーション</span>
        </a>
      </p>
      <p class="btnBlock01 innerWidth">
        <a class="btn--black btnWFull" href="">
          <span>食事について</span>
        </a>
      </p>
      <p class="btnBlock01 innerWidth">
        <a class="btn--black btnWFull" href="">
          <span>機能訓練</span>
        </a>
      </p>

      <div class="p-after__content">
        <ul class="cords__list cords-list">
          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">入浴</p>
                <p class="cords-list__item-text">
                  入浴時は同性介護が基本です。<br />
                  入居者様の状況やライフスタイルにあわせて週に3回、毎日、など入浴介助致します。
                </p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">感染症対策</p>
                <p class="cords-list__item-text">外部からの感染リスクを最小限に抑えるための対策及び、入居者様の健康状態を定期的にモニタリングし、発熱や呼吸器症状などがみられる場合は速やかに対応します。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">外出について</p>
                <p class="cords-list__item-text">元々は24時間可能でしたが、現在は、新型コロナウイルス・インフルエンザの蔓延防止に伴い、施設ごとの対応をとっております。詳しくはお尋ねください。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">受診対応</p>
                <p class="cords-list__item-text">検査等で通院する必要がある場合は、ご家族付き添いをお願いしております。有料ですが施設の職員で対応することも可能。1,050円/30分。詳細についてはお問い合わせください。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">服薬管理</p>
                <p class="cords-list__item-text">薬局から施設へお薬を宅配してもらいます。施設職員で管理・服薬支援を行います。</p>
              </div>
            </a>
          </li>

          <li class="cords-list__item">
            <a href="#">
              <div class="cords-list__item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/common/dummy.jpg" alt="省略" />
              </div>
              <div class="cords-list__item-content">
                <p class="cords-list__item-title">緊急時対応</p>
                <p class="cords-list__item-text">緊急時は迅速に主治医と連携をとり、救急搬送の手配を行います。</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- contact -->
<section class="p-contact l-contact">
  <div class="p-contact__inner inner">
    <h2 class="p-contact__title main-title">
      <span>入居のお問い合わせ</span>
      <p>下記の項目を入力して送信してください。</p>
    </h2>
    <form class="p-contact__form p-form" action="">
      <dl class="p-form__wrap">
        <dt class="p-form__label">お名前<span>必須</span></dt>
        <dd class="p-form__input p-form-input">
          <input type="text" placeholder="お名前をご記入ください" />
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label">メールアドレス<span>必須</span></dt>
        <dd class="p-form__input p-form-input">
          <input type="email" placeholder="メールアドレスをご記入ください" />
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label">電話番号<span>必須</span></dt>
        <dd class="p-form__input p-form-input">
          <input type="tel" placeholder="電話番号をご記入ください" />
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label">ご用件の種類</dt>
        <dd class="p-form__select p-form-select">
          <select>
            <option value="" disabled selected>--選択してください--</option>
            <option value="その他">その他</option>
            <option value="その他">その他</option>
            <option value="その他">その他</option>
            <option value="その他">その他</option>
          </select>
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label">希望施設</dt>
        <dd class="p-form__select p-form-select">
          <select>
            <option value="" disabled selected>--選択してください--</option>
            <option value="その他">その他</option>
          </select>
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label">介護度区分</dt>
        <dd class="p-form__select p-form-select">
          <select>
            <option value="" disabled selected>--選択してください--</option>
            <option value="その他">その他</option>
          </select>
        </dd>
      </dl>
      <dl class="p-form__wrap p-form__wrap--textarea">
        <dt class="p-form__label">お問い合わせ内容</dt>
        <dd class="p-form__textarea p-form-textarea">
          <textarea name="message" placeholder="こちらにお問い合わせ内容を記入してください"></textarea>
        </dd>
      </dl>
      <p class="p-contact__text">入力が終わりましたら下の『内容を確認する』を押して確認後、送信してください。</p>
      <div class="p-form__submit p-form-submit">
        <input type="submit" value="内容を確認する" placeholder="内容を確認する" />
      </div>
    </form>
  </div>
</section>
</main>

<?php get_footer(); ?>
