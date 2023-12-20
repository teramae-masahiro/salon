<?php
$pageId = 'page';
include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>

<main class="single-shops">
  <div class="inner-block">
    <div class="p-page-fv">
      <div class="p-page-fv__wrapper p-page-fv__wrapper--single-post">
        <div class="p-page-fv__container">
          <div class="p-page-fv__text-wrapper p-page-fv__text-wrapper--single-post">
            <div class="p-page-fv__title-wrapper">
              <h1 class="p-page__primary-title p-page__primary-title--left">CONTACT</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-contact">
      <div class="p-contact__wrapper">
        <p class="p-contact__lead c-content__text">
          店舗の詳細や求人情報に関するご質問、どんなことでもお気軽にお問い合わせください。
        </p>
        <div class="p-contact__form">
          <form action="" class="p-contact__form-wrapper">
            <div class="p-contact__form-item">
              <label for="fullname" class="p-contact__form-label">お名前(フルネーム)</label>
              <input type="text" id="fullname" class="p-contact__form-input">
            </div>
            <div class="p-contact__form-item">
              <label for="email" class="p-contact__form-label">連絡先メールアドレス</label>
              <input type="email" id="email" class="p-contact__form-input">
            </div>
            <div class="p-contact__form-item">
              <div class="p-contact__form-label">ご要望詳細</div>
              <div class="custom-radio__wrapper">
                <div class="custom-radio">
                  <input type="radio" id="about_store" name="requestType" value="store">
                  <label for="about_store">店舗について</label>
                </div>
                <div class="custom-radio">
                  <input type="radio" id="about_recruitment" name="requestType" value="recruitment">
                  <label for="about_recruitment">求人について</label>
                </div>
                <div class="custom-radio">
                  <input type="radio" id="about_others" name="requestType" value="others">
                  <label for="about_others">その他</label>
                </div>
              </div>
            </div>
            <div class="p-contact__form-item">
              <label for="inquiry" class="p-contact__form-label">お問い合わせ内容</label>
              <textarea id="inquiry" cols="30" rows="10" class="p-contact__form-textarea"></textarea>
            </div>
            <div class="p-contact__form-item custom-checkbox">
              <input type="checkbox" id="privacy_policy_agreement" name="privacy_policy_agreement">
              <label for="privacy_policy_agreement">プライバシーポリシーに同意する</label>
            </div>
            <div class="p-contact__form-item p-contact__form-submit ">
              <input type="submit" value="送信する" class="c-link__btn">
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/section-address.php'); ?>
  </div><!-- /.inner-block -->
</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
