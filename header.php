<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Minami Gouda | Web Coder Portfolio</title>
  <meta
    name="description"
    content="Webコーダー Minami Gouda のポートフォリオ。思い込みで進めず、確認しながら、保守しやすく丁寧なHTML/CSS/SCSS/JavaScript実装を行います。"
  />
  <meta property="og:title" content="Minami Gouda | Web Coder Portfolio" />
<meta property="og:url" content="<?php echo home_url( '/' ); ?>" />
  <meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogimage.png" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
  <meta name="twitter:card" content="summary_large_image" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500&family=Noto+Sans+JP:wght@300;400;500&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <?php wp_head(); ?>
</head>
<body>
<div class="site">
  <header class="header">
    <nav class="header__nav" aria-label="メインナビゲーション">
      <a class="header__nav-name" href="#top">Minami Gouda</a>
      <ul class="header__nav-links">
        <li><a class="header__nav-link" href="#about">About</a></li>
        <li><a class="header__nav-link" href="#skills">Skills</a></li>
        <li><a class="header__nav-link" href="#works">Works</a></li>
        <li><a class="header__nav-link" href="#price">Price</a></li>
        <li><a class="header__nav-link" href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>