<?php
/*
テーマのための関数
*/

// メインコンテンツの横幅
if ( ! isset( $content_width ) ) $content_width = 700;

// フィードのlink要素を自動出力する
add_theme_support( 'automatic-feed-links' );
// 投稿ページにてアイキャッチ画像の欄を表示
add_theme_support( 'post-thumbnails' );
// html5で出力
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );
// 投稿フォーマットのサポート
add_theme_support( 'post-formats', array(
	'aside',	//アサイド
	'gallery',	//ギャラリー
	'image',	//画像
	'link',		//リンク
	'quote',	//引用
	'status',	//ステータス
	'video',	//動画
	'audio',	//音声
	'chat',		//チャット
) );


// TITLE要素用
function my_wp_title($title) {

    if( is_front_page() && is_home() ){
        return get_bloginfo('name');
    } else {
        return $title."|". get_bloginfo('name');
    }
}
add_filter( 'wp_title', 'my_wp_title');

// 日付の出力
function smart_entry_date() {
	// 日付
	printf( '<time class="entry-date published" datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( ) ),
		get_the_date()
	);
}

// カテゴリの出力
function smart_entry_category($pretag="", $endtag="") {
	$categories_list = get_the_category_list( ', ' );
	if ( $categories_list ) {
		printf( $pretag.'%1$s'.$endtag,
			$categories_list
		);
	}
}

// タグの出力
function smart_entry_tag($pretag="", $endtag="") {
	$tags_list = get_the_tag_list( '', ', ' );
	if ( $tags_list ) {
		printf( $pretag.'%1$s'.$endtag,
			$tags_list
		);
	}
}
