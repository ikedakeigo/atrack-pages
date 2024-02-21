<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');

//カスタムメニュー
register_nav_menu('header-nav',  ' ヘッダーナビゲーション ');

// wp_head()でのtitleタグ出力を止めておく
remove_action('wp_head', '_wp_render_title_tag', 1);

// メニューの並び替え
function custom_menu_order($menu_ord)
{
  if (!$menu_ord) return true;
  return array(
    'index.php', // ダッシュボード
    'separator1', // 仕切り
    'edit.php?post_type=news', // 投稿
    'edit.php?post_type=blog', // ブログ
    'edit.php?post_type=facilitie', // 施設
    'edit.php?post_type=faq', // よくあるご質問
    'edit.php?post_type=page', // 固定ページ
    'separator-last', // 仕切り
    'edit.php?post_type=slider', // スライダー
    'upload.php', // メディア
    'separator2',
  );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新規' . $name . '投稿';
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');


//-----------------------------------------------------
// 投稿メニューを非表示 投稿を消す
//-----------------------------------------------------
function remove_menus () {
  remove_menu_page( 'edit.php' );
}
add_action('admin_menu', 'remove_menus');


//ログイン画面設定

function my_login_logo()
{ ?>

  <style type="text/css">
    body.login div#login h1 a {

      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/base/logo.png);

      background-size: 280px 60px;

      width: 280px;

      height: 60px;

      padding-bottom: 30px;

    }
  </style>

<?php }

add_action('login_enqueue_scripts', 'my_login_logo');




function create_post_type()
{

  /* カスタム投稿タイプ ブログ */
  register_post_type(
    'blog',
    array(
      'labels' => array(
        'name' => __('ブログ'),
        'singular_name' => __('ブログ'),
        'all_items' => __('ブログ一覧'),
      ),
      'rewrite' => array('slug' => 'blog', 'with_front' => false),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-format-aside',
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

  // カスタム投稿タイプ お知らせ
  register_post_type(
    'news',
    array(
      'labels' => array(
        'name' => __('お知らせ'),
        'singular_name' => __('お知らせ'),
        'all_items' => __('お知らせ一覧'),
      ),
      'rewrite' => array('slug' => 'news', 'with_front' => false),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-megaphone',
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
    'news-cat', //カテゴリー名（任意）
    'news', //カスタム投稿名
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
  // 施設の登録
  register_post_type(
    'facilitie', // ポストタイプのスラッグ
    array(
      'labels' => array(
        'name' => __('施設'), // ポストタイプの名前
        'singular_name' => __('施設'), // 単数形の名前
        'all_items' => __('施設一覧'), // 一覧ページのタイトル
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-building', // 管理画面のメニューに表示されるアイコン
      'supports' => array('title'), // サポートする機能
    )
  );
  // // カスタムタクソノミーの登録
  // register_taxonomy(
  //   'facilities-cat', // タクソノミーのスラッグ
  //   'facilities', // タクソノミーを関連付けるポストタイプ
  //   array(
  //     'hierarchical' => true, // 階層を持つかどうか
  //     'update_count_callback' => '_update_post_term_count', // タームの数を更新するコールバック関数
  //     'public' => true, // パブリックにするかどうか
  //     'show_ui' => true, // 管理画面にUIを表示するかどうか
  //     'query_var' => true, // クエリ変数を使うかどうか
  //     'singular_label' => '施設カテゴリー', // タクソノミーの名前
  //     'show_in_rest' => true, // REST APIで利用するかどうか
  //     'show_admin_column' => true, // 管理画面の一覧にカラムを追加するかどうか
  //   )
  // );
  register_post_type(
    'slider',
    array(
      'labels' => array(
        'name' => __('スライダー'),
        'singular_name' => __('スライダー'),
        'all_items' => __('スライダー一覧'),
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'supports' => array('title'),
    )
  );

  // よくあるご質問の登録
  register_post_type(
    'faq',
    array(
      'labels' => array(
        'name' => __('よくあるご質問'),
        'singular_name' => __('よくあるご質問'),
        'all_items' => __('よくあるご質問一覧'),
      ),
      'rewrite' => array('slug' => 'faq'),
      'public' => true,
      // 'has_archive' => true,
      'menu_icon' => 'dashicons-format-chat',
      'supports' => array('title', 'editor'),
    )
  );

  register_post_type(
    'price',
    array(
      'labels' => array(
        'name' => __('入居料金計'),
        'singular_name' => __('入居料金計'),
      ),
      'rewrite' => array('slug' => 'price'),
      'public' => true,
      // 'has_archive' => true,
      'menu_icon' => 'dashicons-money',
      'supports' => array('title'),
    )
  );
}
add_action('init', 'create_post_type');

// global $wp_rewrite;
// $wp_rewrite->flush_rules();


//画像パスを相対パスに
function replaceImagePath($arg)
{
  $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
  return $content;
}
add_action('the_content', 'replaceImagePath');


//TOPページの相対パス
add_shortcode('hurl', 'shortcode_hurl');
function shortcode_hurl()
{
  return home_url('/');
}

function theme_slug_widgets_init()
{
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
  ));
}
add_action('widgets_init', 'theme_slug_widgets_init');


/* スタイルシートの読み込み */
function add_link_files()
{
  // CSSの読み込み
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');

  // JavaScriptの読み込み
  wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '3.6.4');

  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/script.js', array());
}
add_action('wp_enqueue_scripts', 'add_link_files');


/* スクリプトの読み込み */
function my_menu_init()
{
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

/* カスタムウォーカー */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
  // サブメニューの開始タグを定義
  function start_lvl(&$output, $depth = 0, $args = null)
  {
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
function add_class_on_li($classes, $item, $args)
{
  if (isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_class_on_li', 1, 3);

/* wp_nav_menuの<a>にクラスを追加する関数 */
function add_class_on_a($atts, $item, $args)
{
  if (isset($args->a_class)) {
    $atts['class'] = $args->a_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_on_a', 1, 3);


/* メニューのタイトルにHTMLを許可する */
function allow_html_in_menu_items($title, $item, $args, $depth)
{
  return wp_kses($title, array(
    'br' => array('class' => array()),
    // 必要に応じて他のタグも許可できます
  ));
}
add_filter('nav_menu_item_title', 'allow_html_in_menu_items', 10, 4);



/* 電話版号のフォーマット */
function format_japanese_phone_number($number)
{
  $digits = preg_replace('/\D+/', '', $number);

  if (strlen($digits) === 10) {
    return substr($digits, 0, 2) . '-' . substr($digits, 2, 4) . '-' . substr($digits, 6);
  } elseif (strlen($digits) === 11) {
    return substr($digits, 0, 3) . '-' . substr($digits, 3, 4) . '-' . substr($digits, 7);
  } elseif (strlen($digits) === 7) {
    return substr($digits, 0, 3) . '-' . substr($digits, 3, 4);
  } else {
    return $number; // フォーマットに合わない場合は元の番号を返す
  }
}



function my_acf_save_post($post_id)
{
  // 処理を適用するフィールドのリスト
  $fields_to_clean = array('tel', 'post_number', 'address', 'fax');

  foreach ($fields_to_clean as $field_key) {
    // ACF フィールドから値を取得
    $value = get_field($field_key, $post_id, false);

    // 数字以外の文字を削除（ただし、'address' フィールドは除外）
    if ($field_key !== 'address') {
      $cleaned_value = preg_replace('/\D/', '', $value);
    } else {
      // 'address' フィールドの場合は、特定の処理を適用するか、そのまま使用する
      $cleaned_value = $value; // ここで 'address' に対する特定の処理を行うことも可能
    }

    // クリーニング後の値を更新
    update_field($field_key, $cleaned_value, $post_id);
  }
}

// ACF の save_post アクションにフック
add_action('acf/save_post', 'my_acf_save_post', 20);



// 記事一覧ページのURLを変更
// add_filter('register_post_type_args', function($args, $post_type) {
//   if ($post_type === 'post') {
//     $slug = 'blog';
//     $args['labels'] = array(
//       'name' => 'ブログ'
//     );
//     $args['has_archive'] = $slug;
//     $args['rewrite'] = array(
//       'slug' => $slug,
//       'with_front' => false,
//     );
//   }
//   return $args;
// }, 10, 2);


// ページネーションのクラスを変更
function add_class_to_previous_post_link($output) {
  $class = 'previouspostslink'; // 追加したいクラス名
  return str_replace('<a href=', '<a class="' . $class . '" href=', $output);
}
add_filter('previous_post_link', 'add_class_to_previous_post_link');

function add_class_to_next_post_link($output) {
  $class = 'nextpostslink'; // 追加したいクラス名
  return str_replace('<a href=', '<a class="' . $class . '" href=', $output);
}
add_filter('next_post_link', 'add_class_to_next_post_link');




// [blog]メディアボタンを非表示にする
function hide_media_button_for_pages() {
  global $current_screen;
  if ('blog' == $current_screen->id) {
      echo '<style type="text/css">#insert-media-button{display: none;}</style>';
  }
}
add_action('admin_head', 'hide_media_button_for_pages');
