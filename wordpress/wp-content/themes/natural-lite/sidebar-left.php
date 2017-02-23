<?php
/**
 * The left sidebar template for our theme.
 * This template is used to display the sidebar on three column page template.
 *
 * @package Natural Lite
 * @since Natural Lite 1.0
 */

?>

<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>

	<div class="sidebar left">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</div>

<?php endif; ?>
