<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-3H94STZJ3V"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-3H94STZJ3V');
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php
  // ページ共通のディスクリプション
  $mw_description = 'Webコーダー Minami Gouda のポートフォリオ。思い込みで進めず、確認しながら、保守しやすく丁寧なHTML/CSS/SCSS/JavaScript実装を行います。';
  ?>
  <meta name="description" content="<?php echo esc_attr( $mw_description ); ?>" />

  <meta property="og:site_name" content="Minami Gouda | Web Coder Portfolio" />
  <meta property="og:title" content="Minami Gouda | Web Coder Portfolio" />
  <meta property="og:description" content="<?php echo esc_attr( $mw_description ); ?>" />
  <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <?php // OGP画像はSNSのクローラ向けなのでWebPではなくJPEGにしている ?>
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() . '/img/ogimage.jpg' ); ?>" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="800" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.ico' ); ?>" sizes="any" />
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/apple-touch-icon.png' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500&family=Noto+Sans+JP:wght@300;400;500&display=swap"
    rel="stylesheet"
  />
  <?php
  // ファイルの更新日時を ?ver= に付けて、古いCSSがキャッシュされ続けるのを防ぐ
  $mw_dir = get_template_directory();
  $mw_uri = get_template_directory_uri();
  ?>
  <link rel="stylesheet" href="<?php echo esc_url( $mw_uri . '/css/reset.css?ver=' . filemtime( $mw_dir . '/css/reset.css' ) ); ?>" />
  <link rel="stylesheet" href="<?php echo esc_url( $mw_uri . '/css/style.css?ver=' . filemtime( $mw_dir . '/css/style.css' ) ); ?>" />

  <?php if ( is_front_page() ) : ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfilePage",
    "mainEntity": {
      "@type": "Person",
      "name": "Minami Gouda",
      "jobTitle": "Web Coder",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "image": "<?php echo esc_url( get_template_directory_uri() . '/img/minami-icon.webp' ); ?>",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "北海道",
        "addressCountry": "JP"
      },
      "knowsAbout": ["HTML", "CSS", "Sass", "JavaScript", "WordPress", "Figma", "BEM"],
      "sameAs": [
        "https://github.com/minami-works",
        "https://x.com/mnm_codes"
      ]
    }
  }
  </script>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>
<body>
<div class="site">
  <header class="header">
    <nav class="header__nav" aria-label="メインナビゲーション">
      <a class="header__nav-name" href="#top">Minami Gouda</a>

      <button
        class="header__hamburger"
        type="button"
        aria-expanded="false"
        aria-controls="header-nav-links"
        aria-label="メニューを開く"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

      <ul class="header__nav-links" id="header-nav-links">
        <li><a class="header__nav-link" href="#about">About</a></li>
        <li><a class="header__nav-link" href="#skills">Skills</a></li>
        <li><a class="header__nav-link" href="#works">Works</a></li>
        <li><a class="header__nav-link" href="#price">Price</a></li>
        <li><a class="header__nav-link" href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="header__overlay"></div>