<?php
/**
 * Secondary Sidebar Template
 *
 * Displays widgets for the Secondary dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package supreme
 * @subpackage Template
 */

if ( is_active_sidebar( 'secondary' ) ) : ?>

	<?php do_atomic( 'before_sidebar_secondary' ); // supreme_before_sidebar_secondary ?>

	<div id="sidebar-secondary" class="sidebar">

		<?php do_atomic( 'open_sidebar_secondary' ); // supreme_open_sidebar_secondary ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

		<?php do_atomic( 'close_sidebar_secondary' ); // supreme_close_sidebar_secondary ?>

	</div><!-- #sidebar-secondary -->

	<?php do_atomic( 'after_sidebar_secondary' ); // supreme_after_sidebar_secondary ?>

<?php endif; ?>