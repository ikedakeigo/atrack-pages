<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );

// wp_head()でのtitleタグ出力を止めておく
remove_action('wp_head', '_wp_render_title_tag', 1);

// メニューの並び替え
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
    return array(
        'index.php', // ダッシュボード
        'separator1', // 仕切り
        'edit.php', // 投稿
		'edit.php?post_type=blog', // ブログ
        'edit.php?post_type=print', // 印刷商品
        'edit.php?post_type=page', // 固定ページ
        'separator-last', // 仕切り
        'upload.php', // メディア
    );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = '特集・お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = '特集・お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


//ログイン画面設定

function my_login_logo() { ?>

<style type="text/css">

body.login div#login h1 a {

background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/base/logo.png);

background-size:280px 60px;

width: 280px;

height: 60px;

padding-bottom: 30px;

}

</style>

<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );



add_action( 'init', 'create_post_type' );
function create_post_type() {
	/* カスタム投稿タイプ　ブログ */
  register_post_type(
    'blog',
    array(
      'labels' => array(
        'name' => __( 'ブログ' ),
        'singular_name' => __( 'ブログ' ),
		  'all_items' => __( 'ブログ一覧' ),
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
		'supports' => array(
        'title',
        'editor',
        'author',
        'custom-fields',
        'thumbnail',
      ),
    )
  );
register_taxonomy(
        'blog-cat', //カテゴリー名（任意）
        'blog', //カスタム投稿名
        array(
          'hierarchical' => true, //カテゴリータイプの指定
          'update_count_callback' => '_update_post_term_count',
          //ダッシュボードに表示させる名前
          'public'            => true,
    'hierarchical'      => true,
    'label'             => 'カテゴリー',
    'show_ui'           => true,
    'query_var'         => true,
    'singular_label'    => 'カテゴリー名',
    'show_in_rest'      => true, //追記
    'show_admin_column' => true
        )
      );
/* カスタム投稿タイプ　印刷商品 */
  register_post_type(
    'print',
    array(
      'labels' => array(
        'name' => __( '印刷商品' ),
        'singular_name' => __( '印刷商品' ),
		  'all_items' => __( '印刷商品一覧' ),
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
		'supports' => array(
        'title',
        'editor',
        'author',
        'custom-fields',
        'thumbnail',
      ),
    )
  );
register_taxonomy(
        'print-cat', //カテゴリー名（任意）
        'print', //カスタム投稿名
        array(
          'hierarchical' => true, //カテゴリータイプの指定
          'update_count_callback' => '_update_post_term_count',
          //ダッシュボードに表示させる名前
          'public'            => true,
    'hierarchical'      => true,
    'label'             => 'カテゴリー',
    'show_ui'           => true,
    'query_var'         => true,
    'singular_label'    => 'カテゴリー名',
    'show_in_rest'      => true, //追記
    'show_admin_column' => true
        )
      );
}
global $wp_rewrite;
$wp_rewrite->flush_rules();


//画像パスを相対パスに
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');


//TOPページの相対パス
add_shortcode('hurl', 'shortcode_hurl');
	function shortcode_hurl() {
	return home_url( '/' );
}

function theme_slug_widgets_init() {
  register_sidebar( array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );


function add_link_files() {
  // CSSの読み込み
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');

  // JavaScriptの読み込み
  wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '3.6.4');
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/script.js', array());
}
add_action('wp_enqueue_scripts', 'add_link_files');


function my_menu_init(){
  register_nav_menus(
    array(
      "global" => "ヘッダーメニュー",
      "footer" => "フッターメニュー",
      "drawer" => "ドロワーメニュー",
      "header-top" => "ヘッダートップメニュー",
    )
    );
}
add_action("init", "my_menu_init");




class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	// サブメニューの開始タグを定義
	function start_lvl(&$output, $depth = 0, $args = null) {
			if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
					$t = '';
					$n = '';
			} else {
					$t = "\t";
					$n = "\n";
			}
			$indent = str_repeat($t, $depth);
			$classes = array('header__nav-modal');

			$class_names = join(' ', $classes);
			$class_names = ' class="' . esc_attr($class_names) . '"';

			$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}
}


// wp_nav_menuの<li>にクラスを追加する関数
function add_class_on_li($classes, $item, $args) {
  if (isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_class_on_li', 1, 3);

/* wp_nav_menuの<a>にクラスを追加する関数 */
function add_class_on_a($atts, $item, $args) {
  if (isset($args->a_class)) {
    $atts['class'] = $args->a_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_on_a', 1, 3);


/* メニューのタイトルにHTMLを許可する */
function allow_html_in_menu_items($title, $item, $args, $depth) {
  return wp_kses($title, array(
      'br' => array('class' => array()),
      // 必要に応じて他のタグも許可できます
  ));
}
add_filter('nav_menu_item_title', 'allow_html_in_menu_items', 10, 4);


/* カスタム投稿タイプの追加 */
function create_slider_post_type() {
  register_post_type('slider', array(
      'labels' => array('name' => __('スライダー')),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'thumbnail'), // 画像フィールドをサポート
  ));
}
add_action('init', 'create_slider_post_type');
