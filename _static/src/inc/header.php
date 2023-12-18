<?php require_once dirname(__FILE__) . '/../data/site.php'; ?>
<?php $title = ($pageId === 'home') ? $siteData["siteInfo"]["name"] : $siteData["pages"][$pageId]["name"] . ' | ' . $siteData["siteInfo"]["name"]; ?>
<?php $description = $siteData["pages"][$pageId]["description"]; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">

  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:url" content="<?php echo $siteData["siteInfo"]["siteUrl"] . $siteData["pages"][$pageId]["slug"]; ?>">
  <meta property="og:type" content="<?php echo $siteData["pages"][$pageId]["type"]; ?>">
  <meta property="og:local" content="ja_JP">
  <meta property="og:image" content="/common/og-image.jpg">
  <meta property="og:site_name" content="<?php echo $siteData["siteInfo"]["siteUrl"]; ?> ">

  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <script src="/js/lib/b_browser_switcher.js"></script>
</head>

<body>
  <div id="wrapper">
    <header id="header" class="p-header">
      <div class="p-header__wrapper">
        <div class="inner-block">
          <div class="p-header__cta-wrapper">
            <a href="" class="p-header__tel c-header__link">
              <img src="../img/svg/tel-white.svg" alt="tel">
              03-3842-0633
            </a>
            <a href="" class="p-header__reservation c-header__link">
              予約はこちらから
            </a>
            <a href="" class="p-header__instagram">
              <img src="../img/svg/instagram.svg" alt="instagram">
            </a>
          </div>
          <?php if ($pageId === 'page') : ?>
            <div class="p-nav page">
              <div class="p-nav__wrapper page">
                <div class="p-common__logo">
                  <a href="/" class="p-common__logo-link">
                    <img src="../img/common/logo.png" alt="ラヴィエール" class="p-common__logo-img">
                    <div class="p-common__logo-text">
                      <span class="p-common__logo--lg">Laviere</span><br><span class="p-common__logo--md">Hair Design</span>
                    </div>
                  </a>
                </div>
                <nav class="p-nav__wrapper">
                  <ul class="p-nav__list page">
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
          <?php endif; ?>
        </div><!-- /inner-block -->
        <div class="p-header__hamburger">
          <span class="bar-top">MENU</span>
          <span class="bar-mid"></span>
          <span class="bar-bottom"></span>
        </div>
      </div>
    </header>
