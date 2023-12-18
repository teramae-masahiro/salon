<?php
$pageId = 'home';
include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>

<?php if ($pageId === 'home') : ?>
  <div class="wrapper">
    <div class="p-fv">
      <div class="p-fv__wrapper">
        <div class="p-fv__title-wrapper">
          <img src="../img/common/logo.png" alt="Laviere" class="p-common__logo">
          <h1 class="c-primary__title">
            <span class="c-primary__title c-primary__title--cat">あなたの人生に、</span><br>
            <span class="c-primary__title c-primary__title--main">光をPlus＋。</span>
          </h1>
        </div>
        <div class="p-fv__img-wrapper">
          <img src="../img/common/fv.jpg" alt="fv" class="p-fv__img">
        </div>
      </div>
    </div>
    <div class="p-nav">
      <nav class="p-nav__wrapper">
        <ul class="p-nav__list">
          <li class="p-nav__item">
            <a href="" class="p-nav__link">TOP</a>
          </li>
          <li class="p-nav__item">
            <a href="" class="p-nav__link">MENU</a>
          </li>
          <li class="p-nav__item">
            <a href="" class="p-nav__link">店舗紹介</a>
          </li>
          <li class="p-nav__item">
            <a href="" class="p-nav__link">よくある質問</a>
          </li>
          <li class="p-nav__item">
            <a href="" class="p-nav__link">企業情報</a>
          </li>
          <li class="p-nav__item">
            <a href="" class="p-nav__link">採用情報</a>
          </li>
          <li class="p-nav__item">
            <a href="" class="p-nav__link">ブログ</a>
          </li>
          <li class="p-nav__item p-nav__item--sp">
            <ul class="p-nav__secondary">
              <li class="p-nav__item">
                <a href="" class="p-nav__link">
                  <img src="../img/svg/instagram.svg" alt="instagram">
                </a>
              </li>
              <li class="p-nav__item p-nav__item--secondary">
                <a href="" class="p-nav__link p-nav__link--secondary">
                  <img src="../img/svg/tel-sp.svg" alt="tel">
                  03-3842-0633
                </a>
              </li>
              <li class="p-nav__item p-nav__item--secondary">
                <a href="" class="p-nav__link p-nav__link--secondary">
                  予約はこちらから
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

  </div>
  <div class="sticky">
    <a href="" class="sticky-btn"><img src="../img/svg/mail.svg" alt="お問い合わせ" class="sticky-img">お問い合わせ</a>
  </div>
  <main class="p-main">
    <section class="p-about">
      <div class="p-about__wrapper">
        <div class="p-about__img-wrapper">
          <img src="../img/common/content1.jpg" alt="Laviere" class="p-about__img">
        </div>
        <div class="p-about__container">
          <div class="p-about__text-wrapper">
            <div class="p-about__text-ttl">
              <h2 class="c-content__title--black">Laviere</h2>
              <span class="c-content__sub-title">あなたの人生に、光をPlus＋するサロン</span>
            </div>
            <div class="p-about__contents">
              <p class="p-about__text c-content__text">
                フランス語で<br>
                「人生（La vie）」と「光（Lumiere）」を組み合わせた言葉です。
              </p>
              <p class="p-about__text c-content__text">
                お客様一人ひとりの人生を<br>
                明るく照らし出すことが私たちの願いです。
              </p>
              <p class="p-about__text c-content__text">
                何よりも大切にしているのは、お客様と過ごす時間。<br>
                私たちは、気軽に足を運んでいただける、<br>
                温かみのあるカジュアルな空間を提供しています。<br>
                Laviereで、あなたの髪に光を。
              </p>
            </div>
            <div class="p-about__link">
              <a href="" class="c-link__btn">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-feature">
      <div class="p-feature__wrapper">
        <div class="p-feature__container">
          <div class="p-feature__content-box p-feature__content-box--left">
            <div class="p-feature__text-wrapper">
              <h3 class="c-content__title--green p-feature__content-title p-feature__content-title--left">髪質改善</h3>
              <p class="c-content__text">
                湿気や紫外線による髪のダメージに対応する、<br>
                うるツヤになれる「髪質改善トリートメント」を含む、<br>
                多様なトリートメントを提供。<br>
                髪の毛先まで潤いを与え、カラーやパーマの持ちを<br>
                向上させる効果もあり。
              </p>
            </div>
            <div class="p-feature__img-wrapper">
              <picture>
                <source media="(max-width: 400px)" srcset="../img/common/content2-sp.jpg">
                <img src="../img/common/content2.jpg" alt="髪質改善" class="p-feature__img">
              </picture>
            </div>
          </div>
          <div class="p-feature__content-box p-feature__content-box--right">
            <div class="p-feature__text-wrapper">
              <h3 class="c-content__title--green p-feature__content-title p-feature__content-title--right">専門性・技術力</h3>
              <p class="c-content__text">
                お客様の髪質、毛流れ、クセ、骨格、そして雰囲気を細やかに考慮し、自宅でのスタイリングも簡単になるように計算されたカットを得意としています。<br><br>

                さらに、髪に優しいカラー剤を用いて、トレンド感あふれるデザインカラーや白髪染めも人気です。<br>
                お客様の細かいニュアンスを汲み取る丁寧なヒアリングを通じて、それぞれの要望に合わせたカラーリングを実現し、美しい髪色の持続をお約束します。
              </p>
            </div>
            <div class="p-feature__img-wrapper p-feature__img-wrapper--right">
              <img src="../img/common/content3.jpg" alt="髪質改善" class="p-feature__img--right">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-detail">
      <div class="p-detail__wrapper">
        <div class="p-detail__container">
          <div class="p-detail__item">
            <a href="" class="p-detail__link">
              <img src="../img/common/menu-bg.jpg" alt="メニューへ" class="p-detail__img">
              <div class="p-detail__text">
                MENU
              </div>
            </a>
          </div>
          <div class="p-detail__item">
            <a href="" class="p-detail__link">
              <img src="../img/common/gallery-bg.jpg" alt="メニューへ" class="p-detail__img">
              <div class="p-detail__text">
                GALLERY
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/section-staff.php'); ?>

    <section class="p-recruit">
      <div class="p-recruit__wrapper">
        <div class="p-recruit__container">
          <div class="p-recruit__img-wrapper">
            <picture>
              <source media="(max-width: 400px)" srcset="../img/common/recruit-bg-sp.jpg">
              <img src="../img/common/recruit-bg.jpg" alt="Laviere" class="p-recruit__img">
            </picture>
          </div>
          <div class="p-recruit__lead-wrapper">
            <p class="p-recruit__lead-text">
              あなたの技術が光る。<br>
              次世代のトップスタイリスト募集中！
            </p>
          </div>
        </div>
        <div class="p-recruit__text-wrapper">
          <div class="p-recruit__text-ttl pc-only">
            <h2 class="p-recruit__ttl c-content__title--black">
              美のプロフェッショナルとして<br class="sp">成長しませんか？</h2>
          </div>
          <h2 class="p-recruit__text sp-only">
            <p class="p-recruit__text-ttl c-content__title--black">
              美のプロフェッショナルとして</p><br>
            <p class="p-recruit__text-ttl c-content__title--black">
              成長しませんか？</p>
          </h2>
          <div class="p-recruit__contents">
            <p class="p-recruit__text c-content__text">
              当サロンでは、新たな才能を求めています。<br>
              あなたの独創的なスタイリング技術と情熱を、私たちと共にお客様に提供しませんか？<br>
              あなたの技術をさらに磨き、キャリアを築くため、経験豊富なスタッフと共に、<br>
              お客様一人ひとりに合わせた最高のスタイルを創り出してください！！
            </p>
            <p class="p-recruit__text c-content__text">
              また、定期的な研修やワークショップを通じて、最新の技術やトレンドを学ぶ機会も豊富に用意しています。<br>
              美容師としての夢を、当サロンで実現しましょう
            </p>
          </div>
        </div>
        <div class="p-recruit__welfare">
          <div class="p-recruit__list">
            <div class="p-recruit__item">
              <div class="p-recruit__icon">
                <img src="../img/common/icon1.png" alt="最低保証あり" class="p-recruit__icon-img">
              </div>
              <div class="p-recruit__item-text">
                最低保証あり
              </div>
            </div>
            <div class="p-recruit__item">
              <div class="p-recruit__icon">
                <img src="../img/common/icon2.png" alt="交通費支給" class="p-recruit__icon-img">
              </div>
              <div class="p-recruit__item-text">
                交通費支給<br>
                <span class="p-recruit__text-sm">※15,000円まで</span>
              </div>
            </div>
            <div class="p-recruit__item">
              <div class="p-recruit__icon">
                <img src="../img/common/icon3.png" alt="週2日〜勤務OK" class="p-recruit__icon-img">
              </div>
              <div class="p-recruit__item-text">
                週2日〜<br>勤務OK
              </div>
            </div>
            <div class="p-recruit__item">
              <div class="p-recruit__icon">
                <img src="../img/common/icon4.png" alt="社会保障完備" class="p-recruit__icon-img">
              </div>
              <div class="p-recruit__item-text">
                社会保障完備
              </div>
            </div>
            <div class="p-recruit__item">
              <div class="p-recruit__icon">
                <img src="../img/common/icon5.png" alt="平均休日日数100日" class="p-recruit__icon-img">
              </div>
              <div class="p-recruit__item-text">
                平均休日日数<br>100日
              </div>
            </div>
            <div class="p-recruit__item">
              <div class="p-recruit__icon">
                <img src="../img/common/icon6.png" alt="完全週休2日制(有給休暇あり)" class="p-recruit__icon-img">
              </div>
              <div class="p-recruit__item-text">
                完全週休2日制<br>
                (有給休暇あり)
              </div>
            </div>
          </div>
        </div>
        <div class="p-recruit__cta">
          <div class="p-recruit__cta-container">
            <div class="p-recruit__cta-content">
              <div class="p-recruit__cta-img-wrapper">
                <img src="../img/common/fv.jpg" alt="Laviere" class="p-recruit__cta-img">
              </div>
              <div class="p-recruit__cta-text-wrapper">
                <p class="p-recruit__cta-text">創造性を活かせる場所、</p>
                <p class="p-recruit__cta-text">美容師としてのキャリアは当サロンで！</p>
                <div class="p-recruit__cta-link">
                  <a href="" class="c-link__btn">ENTRY</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/section-address.php'); ?>

  <?php endif; ?>
  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
