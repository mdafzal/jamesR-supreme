<?php
/**
 * Header Sidebar Template
 *
 * Displays widgets for the Header dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package supreme
 * @subpackage Template
 */

if ( is_active_sidebar( 'header' ) ) : ?>

	<?php do_atomic( 'before_sidebar_header' ); // supreme_before_sidebar_header ?>

	<div id="sidebar-header" class="sidebar">

		<?php do_atomic( 'open_sidebar_header' ); // supreme_open_sidebar_header ?>

		<?php dynamic_sidebar( 'header' ); ?>

		<?php do_atomic( 'close_sidebar_header' ); // supreme_close_sidebar_header ?>

	</div><!-- #sidebar-header -->

	<?php do_atomic( 'after_sidebar_header' ); // supreme_after_sidebar_header ?>

<?php endif; ?>