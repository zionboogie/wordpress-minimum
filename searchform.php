<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="検索したいワードを入力してください" value="<?php echo get_search_query(); ?>" name="s" title="検索" />
	<button type="submit" class="search-submit">検索</button>
</form>
</form>
