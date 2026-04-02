<?php

/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', '', "1.0.1", true);

	wp_enqueue_style('my', get_template_directory_uri() . '/css/styles.css', array(), filemtime(get_theme_file_path('/css/styles.css')), 'all');
	wp_enqueue_script('gsap', '//cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', '', "1.0.1", true);
	wp_enqueue_script('scrollTrigger', '//cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js', '', "1.0.1", true);
	wp_enqueue_script('splitText', '//cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js', '', "1.0.1", true);
	wp_enqueue_script('js-gsap', get_template_directory_uri() . '/js/gsap.js', array('jquery'), filemtime(get_theme_file_path('/js/gsap.js')), true);

	if (is_page('contact')) {
		wp_enqueue_script('js-contact-form', get_template_directory_uri() . '/js/contact-form.js', array('jquery'), filemtime(get_theme_file_path('/js/contact-form.js')), true);
		wp_localize_script('js-contact-form', 'TELEX_CONTACT', array(
			'thanksUrl' => esc_url(home_url('/contact-thanks/')),
		));
	}

	if (is_front_page() || is_singular('shop')) {
		wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), filemtime(get_theme_file_path('/css/swiper-bundle.min.css')), 'all');
		wp_enqueue_script('js-swiper-bundle', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), filemtime(get_theme_file_path('/js/swiper.min.js')), true);
		wp_enqueue_script('js-swiper-init', get_template_directory_uri() . '/js/swiper.js', array('jquery'), filemtime(get_theme_file_path('/js/swiper.js')), true);
	}
	
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');







/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title($title)
{

	if (is_home()) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif (is_category()) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title('', false) . '';
	} elseif (is_tag()) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title('', false) . '';
	} elseif (is_post_type_archive()) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title('', false) . '';
	} elseif (is_tax()) { /* タームアーカイブの場合 */
		$title = '' . single_term_title('', false);
	} elseif (is_search()) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html(get_query_var('s')) . '」の検索結果';
	} elseif (is_author()) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif (is_date()) { /* 日付アーカイブの場合 */
		$title = '';
		if (get_query_var('year')) {
			$title .= get_query_var('year') . '年';
		}
		if (get_query_var('monthnum')) {
			$title .= get_query_var('monthnum') . '月';
		}
		if (get_query_var('day')) {
			$title .= get_query_var('day') . '日';
		}
	}
	return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length($length)
{
	return 80;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);
/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');

function breadcrumb()
{
	$home = '<li class="c-breadcrumbs__list"><a class="c-breadcrumbs__link" href="' . get_bloginfo('url') . '" >HOME</a></li>';

	echo '<ul class="c-breadcrumbs__lists">';
	if (is_front_page()) {
		// トップページの場合
	} else if (is_category()) {
		// カテゴリページの場合
		$cat = get_queried_object();
		$cat_id = $cat->parent;
		$cat_list = array();
		while ($cat_id != 0) {
			$cat = get_category($cat_id);
			$cat_link = get_category_link($cat_id);
			array_unshift($cat_list, '<li class="c-breadcrumbs__list"><a class="c-breadcrumbs__link" href="' . $cat_link . '">' . $cat->name . '</a></li>');
			$cat_id = $cat->parent;
		}
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		foreach ($cat_list as $value) {
			echo $value;
		}
		the_archive_title('<li class="c-breadcrumbs__list">', '</li>');
	} else if (is_archive()) {
		// 月別アーカイブ・タグページの場合
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		the_archive_title('<li class="c-breadcrumbs__list">', '</li>');
	} else if (is_home()) {
		// 月別アーカイブ・タグページの場合
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		the_archive_title('<li class="c-breadcrumbs__list">', '</li>');
	} else if (is_single()) {
		// 投稿ページの場合
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		echo "<a href=" . "/blog-all" . ">ブログ</a>";
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow c-breadcrumbs__arrow--2"><</li>';
		the_title('<li class="c-breadcrumbs__list c-breadcrumbs__list--mt2">', '</li>');
	} else if (is_page()) {
		// 固定ページの場合
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		the_title('<li class="c-breadcrumbs__list">', '</li>');
	} else if (is_search()) {
		// 検索ページの場合
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		echo '<li class="c-breadcrumbs__list">「' . get_search_query() . '」の検索結果</li>';
	} else if (is_404()) {
		// 404ページの場合
		echo $home;
		echo '<li class="c-breadcrumbs__list c-breadcrumbs__arrow"><</li>';
		echo '<li class="c-breadcrumbs__list">ページが見つかりません</li>';
	}
	echo "</ul>";
}

// アーカイブの余計なタイトルを削除
add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_month()) {
		$title = single_month_title('', false);
	}
	return $title;
});

add_filter('wpcf7_autop_or_not', '__return_false');

// titleタグの削除
function remove_title_tag()
{
	remove_action('wp_head', '_wp_render_title_tag', 1);
}
add_action('init', 'remove_title_tag');


// 管理画面上「投稿」の名前変更
function Change_menulabel()
{
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name . '一覧';
	$submenu['edit.php'][10][0] = '新しい' . $name;
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

//ログイン画面のロゴ変更
function login_logo()
{
	echo '<style type="text/css">
	  #login h1 a {
		background: url(' . get_template_directory_uri() . '/images/common/login_logo.png) no-repeat top center;
		background-size:100% auto;
		width: 70px; //ログインの幅
		height: 70px; //ログインの高さ
	  }
	  body{
		background: url(' . get_template_directory_uri() . '/images/top/mv/mv-main.webp) no-repeat top center;
		background-color:rgba(255,255,255,0.5);
		background-blend-mode:lighten;
		background-size: cover;
		
	  }
	</style>';
}
add_action('login_head', 'login_logo');

function custom_pagination()
{
	global $wp_query;
	$big = 999999999;
	$pages = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array',
		'prev_next'   => true,
		'prev_text'   => '<',
		'next_text'   => '>',
	));
	if (is_array($pages)) {
		$paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
		echo '<div class="p-work__pager p-pager"><ul class="p-pager__lists">';
		foreach ($pages as $page) {
			echo "<li class='p-pager__list'>$page</li>";
		}
		echo '</ul></div>';
	}
}

function exclude_multiple_categories_from_homepage($query)
{
	if ($query->is_home() && $query->is_main_query()) {
		$query->set('cat', '-1,-8,-9,-10');
	}
}
add_action('pre_get_posts', 'exclude_multiple_categories_from_homepage');

add_filter('wpcf7_validate_text', 'custom_hiragana_validation_filter', 20, 2);
add_filter('wpcf7_validate_text*', 'custom_hiragana_validation_filter', 20, 2);

function custom_hiragana_validation_filter($result, $tag)
{
	if ('your-hiragana-field' == $tag->name) {
		$value = isset($_POST[$tag->name]) ? trim(wp_unslash(strtr((string)$_POST[$tag->name], "\n", " "))) : '';

		if (!preg_match("/^[ぁ-ん]+$/u", $value)) {
			$result->invalidate($tag, "ひらがなで入力してください。");
		}
	}

	return $result;
}

//投稿タイプの作成(カスタム投稿)
register_post_type(
	'shop',
	array(
		'labels' => array(
			'name' => __('店舗'),
			'singular_name' => __('店舗')
		),
		'supports' => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'comments',
			'categories'
		),
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
	)
);
register_taxonomy('shop_category', array('shop'), array(
	'hierarchical' => true,
	'label' => 'カテゴリー',
	'show_ui' => true,
	'public' => true
));
register_taxonomy('shop_tag', 'shop', array(
	'hierarchical' => false,
	'label' => 'タグ',
	'show_ui' => true,
	'public' => true,
	'show_in_rest' => true,
));

add_filter('body_class', function ($classes) {
	if (is_front_page()) {
		$classes[] = 'home';
	}
	return $classes;
});

/**
 * WebP画像のサポートを追加
 */
function enable_webp_upload($mimes)
{
	$mimes['webp'] = 'image/webp';
	return $mimes;
}
add_filter('mime_types', 'enable_webp_upload');

// WebP画像のプレビュー表示を有効化
function webp_is_displayable($result, $path)
{
	if ($result === false) {
		$displayable_image_types = array(IMAGETYPE_WEBP);
		$info = @getimagesize($path);

		if (empty($info)) {
			$result = false;
		} elseif (!in_array($info[2], $displayable_image_types)) {
			$result = false;
		} else {
			$result = true;
		}
	}

	return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

// 一時的な店舗追加コード（追加後は自動的に無効化されます）
function auto_add_sample_shop() {
	// すでに実行済みかチェック
	if (get_option('sample_shop_added')) {
		return;
	}

	// 店舗投稿を作成
	$shop_data = array(
		'post_title'    => 'テレックス梅田店',
		'post_content'  => '',
		'post_status'   => 'publish',
		'post_type'     => 'shop',
		'post_author'   => 1,
	);

	$post_id = wp_insert_post($shop_data);

	if ($post_id && !is_wp_error($post_id)) {
		// ACFフィールドを設定
		if (function_exists('update_field')) {
			update_field('shop_area', '大阪', $post_id);
			update_field('shop_tel', '06-1234-5678', $post_id);
			update_field('shop_address', '大阪府大阪市北区梅田1-2-3 テレックスビル1F', $post_id);
			update_field('shop_business_hours', '10:00~19:00', $post_id);
			update_field('shop_holiday', '水曜日', $post_id);
			update_field('shop_parking', '有り（10台）', $post_id);
		}

		// 実行済みフラグを保存
		update_option('sample_shop_added', true);
	}
}
add_action('init', 'auto_add_sample_shop');

// 10店舗一括追加コード（追加後は自動的に無効化されます）
function auto_add_bulk_shops() {
	// すでに実行済みかチェック
	if (get_option('bulk_shops_added')) {
		return;
	}

	// 10店舗分のデータ
	$shops = array(
		array(
			'title' => 'テレックス京都店',
			'area' => '京都',
			'tel' => '075-123-4567',
			'address' => '京都府京都市下京区烏丸通四条下ル 京都ビル2F',
			'hours' => '10:00~19:00',
			'holiday' => '水曜日',
			'parking' => '有り（8台）'
		),
		array(
			'title' => 'テレックス神戸三宮店',
			'area' => '兵庫',
			'tel' => '078-234-5678',
			'address' => '兵庫県神戸市中央区三宮町1-2-3 三宮タワー1F',
			'hours' => '10:00~20:00',
			'holiday' => '木曜日',
			'parking' => '有り（15台）'
		),
		array(
			'title' => 'テレックス難波店',
			'area' => '大阪',
			'tel' => '06-2345-6789',
			'address' => '大阪府大阪市中央区難波2-3-4 なんばプラザ3F',
			'hours' => '11:00~20:00',
			'holiday' => '年中無休',
			'parking' => '無し'
		),
		array(
			'title' => 'テレックス天王寺店',
			'area' => '大阪',
			'tel' => '06-3456-7890',
			'address' => '大阪府大阪市天王寺区悲田院町3-4-5 天王寺MIO 2F',
			'hours' => '10:00~21:00',
			'holiday' => '年中無休',
			'parking' => '無し'
		),
		array(
			'title' => 'テレックス心斎橋店',
			'area' => '大阪',
			'tel' => '06-4567-8901',
			'address' => '大阪府大阪市中央区心斎橋筋1-5-6 心斎橋ビル1F',
			'hours' => '10:30~19:30',
			'holiday' => '火曜日',
			'parking' => '無し'
		),
		array(
			'title' => 'テレックス北大阪店',
			'area' => '北大阪',
			'tel' => '06-5678-9012',
			'address' => '大阪府豊中市本町6-7-8 豊中センタービル1F',
			'hours' => '10:00~19:00',
			'holiday' => '水曜日',
			'parking' => '有り（12台）'
		),
		array(
			'title' => 'テレックス姫路店',
			'area' => '兵庫',
			'tel' => '079-678-9012',
			'address' => '兵庫県姫路市駅前町7-8-9 姫路駅前ビル2F',
			'hours' => '10:00~19:00',
			'holiday' => '水曜日',
			'parking' => '有り（10台）'
		),
		array(
			'title' => 'テレックス奈良店',
			'area' => '奈良',
			'tel' => '0742-789-0123',
			'address' => '奈良県奈良市西大寺南町8-9-10 奈良プラザ1F',
			'hours' => '10:00~18:00',
			'holiday' => '水曜日・木曜日',
			'parking' => '有り（6台）'
		),
		array(
			'title' => 'テレックス和歌山店',
			'area' => '和歌山',
			'tel' => '073-890-1234',
			'address' => '和歌山県和歌山市友田町9-10-11 和歌山駅前ビル1F',
			'hours' => '10:00~19:00',
			'holiday' => '水曜日',
			'parking' => '有り（8台）'
		),
		array(
			'title' => 'テレックス滋賀店',
			'area' => '滋賀',
			'tel' => '077-901-2345',
			'address' => '滋賀県大津市中央10-11-12 大津駅前タワー2F',
			'hours' => '10:00~19:00',
			'holiday' => '水曜日',
			'parking' => '有り（10台）'
		),
	);

	// 各店舗を追加
	foreach ($shops as $shop) {
		$shop_data = array(
			'post_title'    => $shop['title'],
			'post_content'  => '',
			'post_status'   => 'publish',
			'post_type'     => 'shop',
			'post_author'   => 1,
		);

		$post_id = wp_insert_post($shop_data);

		if ($post_id && !is_wp_error($post_id)) {
			// ACFフィールドを設定
			if (function_exists('update_field')) {
				update_field('shop_area', $shop['area'], $post_id);
				update_field('shop_tel', $shop['tel'], $post_id);
				update_field('shop_address', $shop['address'], $post_id);
				update_field('shop_business_hours', $shop['hours'], $post_id);
				update_field('shop_holiday', $shop['holiday'], $post_id);
				update_field('shop_parking', $shop['parking'], $post_id);
			}
		}
	}

	// 実行済みフラグを保存
	update_option('bulk_shops_added', true);
}
add_action('init', 'auto_add_bulk_shops');
