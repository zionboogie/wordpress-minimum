<?php
/*
Template Name: smart
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
	<link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="container">

	<!-- ページヘッダ -->
	<header>
		<!-- ロゴ -->
		<?php if ( is_front_page() && is_home() ) : ?>
		<h1 id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
		<p id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
		<!-- /ロゴ -->

		<!-- 検索フォーム -->
		<?php get_search_form(); ?>
		<!-- /検索フォーム -->

		<!-- グローバルナビ -->
		<nav>
			<ul class="menu">
				<li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
			</ul>
		</nav>
		<!-- /グローバルナビ -->
	</header>
	<!-- /ページヘッダ -->

	<!-- main -->
	<main id="main">
