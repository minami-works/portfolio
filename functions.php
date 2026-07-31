<?php
/**
 * minamiworks theme functions
 */

/* ==========================================================
 * テーマの基本設定
 * ========================================================== */
function minamiworks_setup() {
  // <title> をWordPressに出力させる（header.php のベタ書きは削除済み）
  add_theme_support( 'title-tag' );
  // アイキャッチ機能（今後 single-works.php を作るときに使う）
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'minamiworks_setup' );


/* ==========================================================
 * カスタム投稿タイプ：Works
 * 1ページ集約の構成なので、作品ごとの個別URLは作らない
 * ========================================================== */
function minamiworks_register_works_cpt() {
  register_post_type( 'works', array(
    'labels' => array(
      'name'          => 'Works',
      'singular_name' => 'Work',
      'add_new_item'  => '作品を追加',
      'edit_item'     => '作品を編集',
    ),
    'public'              => false, // 公開URLを作らない
    'show_ui'             => true,  // 管理画面には表示する
    'show_in_menu'        => true,
    'publicly_queryable'  => false, // /works/xxx/ でアクセスさせない
    'exclude_from_search' => true,  // サイト内検索の対象外
    'has_archive'         => false,
    'rewrite'             => false,
    'menu_icon'           => 'dashicons-portfolio',
    'supports'            => array( 'title' ),
    'show_in_rest'        => false,
  ) );
}
add_action( 'init', 'minamiworks_register_works_cpt' );


/* ==========================================================
 * 投稿（ブログ）を使っていないので、投稿由来のアーカイブを404にする
 *
 * カテゴリー・タグ・著者・日付・検索結果は、中身が空のまま
 * 200で表示されてしまうため、明示的に404を返す。
 * ブログや検索機能を追加するときは、この関数ごと削除する。
 * ========================================================== */
function minamiworks_disable_post_archives() {
  if ( is_admin() ) {
    return;
  }
  if ( is_category() || is_tag() || is_author() || is_date() || is_search() ) {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    nocache_headers();
  }
}
add_action( 'template_redirect', 'minamiworks_disable_post_archives' );


/* ==========================================================
 * <head> の整理
 * ========================================================== */

// トップページに canonical を出力する
// （固定ページがトップの場合はWordPressが自動で出すので、その時は出さない）
function minamiworks_canonical() {
  if ( is_front_page() && ! is_singular() ) {
    echo '<link rel="canonical" href="' . esc_url( home_url( '/' ) ) . '" />' . "\n";
  }
}
add_action( 'wp_head', 'minamiworks_canonical', 1 );

// タイトルの区切り文字を「|」にする
function minamiworks_title_separator() {
  return '|';
}
add_filter( 'document_title_separator', 'minamiworks_title_separator' );

// タイトルの組み立て
// トップ         → Minami Gouda | Web Coder Portfolio
// それ以外       → ページ名 | Minami Gouda
function minamiworks_document_title( $parts ) {
  if ( is_front_page() ) {
    return array(
      'title'   => 'Minami Gouda',
      'tagline' => 'Web Coder Portfolio',
    );
  }
  $parts['site'] = 'Minami Gouda';
  return $parts;
}
add_filter( 'document_title_parts', 'minamiworks_document_title' );

// 使っていないWordPress標準の出力を止める
function minamiworks_cleanup_head() {
  remove_action( 'wp_head', 'wp_generator' );                    // WPのバージョンを隠す
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // 絵文字用JS（6KB）
  remove_action( 'wp_print_styles', 'print_emoji_styles' );      // 絵文字用CSS
  remove_action( 'wp_head', 'wlwmanifest_link' );                // Windows Live Writer（廃止済み）
  remove_action( 'wp_head', 'rsd_link' );                        // リモート投稿用
}
add_action( 'init', 'minamiworks_cleanup_head' );
