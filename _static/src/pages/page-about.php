<?php
$pageId = 'page';
include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>


<main class="about">
  <div class="inner-block">
    <div class="p-page-fv">
      <div class="p-page-fv__wrapper">
        <div class="p-page-fv__container">
          <div class="p-page-fv__img-wrapper">
            <img src="../img/common/about.jpg" alt="Laviere" class="p-page-fv__img">
          </div>
          <div class="p-page-fv__text-wrapper">
            <div class="p-page-fv__title-wrapper">
              <h1 class="p-page__primary-title p-page__primary-title--right">ABOUT US</h1>
            </div>
            <div class="p-page-fv__contents">
              <h2 class="p-page-fv__sub-title p-page-fv__sub-title--sm">
                光輝く人生をデザインする – Laviere(ラヴィエール)の約束
              </h2>
              <p class="p-page-fv__text c-content__text">
                “Laviere(ラヴィエール)”は、「人生（vie）」と「光（lumière）」を組み合わせたフランス語から生まれた言葉で、「輝く人生」という意味を持ちます。<br>
                この名前に込められた思いを体現できるよう、私たちは<br>
                お客様の人生を明るく照らすことができるようなスタイリングに尽力しています。<br>
                技術力には自信があり、お客様一人ひとりに寄り添ったカウンセリングを重視し、<br>
                それぞれのニーズに応えることを心掛けています。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-page-about">
      <div class="p-page-about__wrapper">
        <div class="p-page-about__youtube">
          <iframe  src="https://www.youtube.com/embed/nfaZLtUBmII?si=l7YKz3ekg8QKxdvD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/section-address.php'); ?>
  </div><!-- /.inner-block -->
</main>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
