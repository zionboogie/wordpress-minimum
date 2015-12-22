<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comment">

	<?php if ( have_comments() ) : ?>
		<h3>コメント</h3>
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
				) );
			?>
		</ol>

		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php comment_form(); ?>

</div>
