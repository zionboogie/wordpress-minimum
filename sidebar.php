<?php
/*
パーツ：サイドバー
*/
?>
<div id="sub">
	<!-- widget-category -->
	<aside class="widget widget-category">
		<h2 class="widget-title">カテゴリ</h2>
		<ul>
		<?php wp_list_categories('title_li=&hide_empty=0&orderby=count&order=asc') ?>
		</ul>
	</aside>
	<!-- /widget-category -->

	<!-- widget-tagcloud -->
	<aside class="widget widget-tagcloud">
		<h2 class="widget-title">タグクラウド</h2>
		<div class="box-tagcloud">
			<?php wp_tag_cloud('smallest=10&largest=10&orderby=count&order=DESC'); ?>
		</div>
	</aside>
	<!-- /widget-tagcloud -->

	<!-- widget-archives -->
	<aside class="widget widget-archives">
		<h2 class="widget-title">アーカイブ</h2>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</aside>
	<!-- /widget-archives -->
</div>
