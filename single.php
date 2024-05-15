<?php
if (has_term('blog', 'category', $post)) {  // タクソノミーを確認してください
  include(get_template_directory() . '/single-blog.php');
} elseif (is_singular('facilities')) {  // 正しいカスタム投稿タイプのスラッグを使用
  include(get_template_directory() . '/single-facilities.php');  // ファイル名のタイプミスも修正
} else {
  include(get_template_directory() . '/single-news.php');
}
