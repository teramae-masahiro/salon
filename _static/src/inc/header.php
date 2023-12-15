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
          <?php if ($pageId === 'home') : ?>
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
          <?php else : ?>
            <a href="/"><?php echo $siteData["siteInfo"]["name"]; ?></a>
          <?php endif; ?>
        </div><!-- /inner-block -->
        <div class="p-header__hamburger">
            <span class="bar-top">MENU</span>
            <span class="bar-mid"></span>
            <span class="bar-bottom"></span>
        </div>
      </div>
    </header>
