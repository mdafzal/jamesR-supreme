<?php
/**
 * Entry Sidebar Template
 *
 * Displays widgets for the Entry dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package rainbow
 * @subpackage Template
 */

if ( is_active_sidebar( 'entry' ) ) : ?>

	<?php do_atomic( 'before_sidebar_entry' ); // rainbow_before_sidebar_entry ?>

	<div id="sidebar-entry" class="sidebar">

		<?php do_atomic( 'open_sidebar_entry' ); // rainbow_open_sidebar_entry ?>

		<?php dynamic_sidebar( 'entry' ); ?>

		<?php do_atomic( 'close_sidebar_entry' ); // rainbow_close_sidebar_entry ?>

	</div><!-- #sidebar-entry -->

	<?php do_atomic( 'after_sidebar_entry' ); // rainbow_after_sidebar_entry ?>

<?php endif; ?>