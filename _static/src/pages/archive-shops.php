<?php
$pageId = 'page';
include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>


<main class="archive-shops">
  <div class="inner-block">
    <div class="p-page-fv">
      <div class="p-page-fv__wrapper">
        <div class="p-page-fv__container">
          <div class="p-page-fv__img-wrapper">
            <img src="../img/common/shops.jpg" alt="Laviere" class="p-page-fv__img">
          </div>
          <div class="p-page-fv__text-wrapper">
            <div class="p-page-fv__title-wrapper">
              <h1 class="p-page__primary-title p-page__primary-title--right">SHOPS</h1>
            </div>
            <div class="p-page-fv__contents">
              <p class="p-page-fv__text c-content__text">
                日本一働きやすい、サロンを目指しています! <br>
                働く際の悩みを1つ1つ、しっかり解決し、<br>
                一般企業と変わらない待遇を提供したい。
              </p>
              <p class="p-page-fv__text c-content__text">
              そんな想いを込めてオープンしていきます!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-archive-shops">
      <div class="p-archive-shops__wrapper">
        <ul class="p-archive-shops__list">
          <li class="p-archive-shops__item">
            <img src="../img/common/shop1.jpg" alt="浅草店" class="p-archive-shops__img">
            <h2 class="p-archive-shops__title">浅草店</h2>
            <a href="" class="p-archive-shops__link">詳細はこちら</a>
          </li>
          <li class="p-archive-shops__item">
            <img src="../img/common/shop2.jpg" alt="三郷中央店" class="p-archive-shops__img">
            <h2 class="p-archive-shops__title">三郷中央店</h2>
            <a href="" class="p-archive-shops__link">詳細はこちら</a>
          </li>
          <li class="p-archive-shops__item">
            <img src="../img/common/shops.jpg" alt="八潮市店" class="p-archive-shops__img">
            <h2 class="p-archive-shops__title">【2024年OPEN】八潮市店</h2>
            <a href="" class="p-archive-shops__link">詳細はこちら</a>
          </li>
        </ul>
      </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/section-address.php'); ?>
  </div><!-- /.inner-block -->
</main>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
