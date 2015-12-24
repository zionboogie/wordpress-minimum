<?php
/*
パーツ：記事一覧のループ部分
*/
?>
<article class="entry" <?php post_class(); ?>>
	<!-- entry-header -->
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="post-meta">
			<span class="post-date"><?php smart_entry_date(); ?></span>
			<span class="link-category"><?php smart_entry_category(); ?></span>
			<span class="link-tag"><?php smart_entry_tag(); ?></span>
			<?php edit_post_link('<span class="edit-link">[編集]</span>'); ?>
		</p>
	</header>
	<!-- /entry-header -->

	<!-- entry-content -->
	<div class="entry-content">
		<?php the_content( "続きを読む" ); ?>
		<?php wp_link_pages(); ?>
	</div>
	<!-- /entry-content -->

	<!-- entry-footer -->
	<footer class="entry-footer">

		<!-- コメントの表示 -->
		<?php comments_template(); ?>

	</footer>
	<!-- /entry-footer -->
</article>
