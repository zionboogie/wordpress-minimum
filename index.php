<?php
/*
トップページ用テンプレート
*/
get_header(); ?>

		<?php if ( have_posts() ) : ?>

		<!-- entry -->
		<section class="entry-list">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', get_post_format() );
			}

			// ページナビゲーション
			the_posts_pagination( array(
				'prev_text'          => '&lt; PREV',
				'next_text'          => "NEXT &gt;",
			) );
		?>
		</section>
		<!-- /entry -->

		<?php endif; ?>

	</main>
	<!-- /main -->

	<!-- sidebar -->
<?php get_sidebar(); ?>
	<!-- /sidebar -->

</div>
<!-- /container -->

<?php get_footer(); ?>
