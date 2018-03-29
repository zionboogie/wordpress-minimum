<?php
/*
パーツ：フッター
*/
?>
<!-- ページフッタ -->
<footer id="site-footer">
		<p id="copyright" class="wrapper">&copy; ... Ltd. All Rights Reserved.</p>
</footer>
<!-- /ページフッタ -->

<?php wp_footer(); ?>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</body>
</html>
