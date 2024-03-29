<?php
/**
 * Subsidiary Menu Template
 *
 * Displays the Subsidiary Menu if it has active menu items.
 *
 * @package supreme
 * @subpackage Template
 */

if ( has_nav_menu( 'subsidiary' ) ) : ?>

	<?php do_atomic( 'before_menu_subsidiary' ); // supreme_before_menu_subsidiary ?>

	<div id="menu-subsidiary" class="menu-container">

		<div class="wrap">
		
			<div id="menu-subsidiary-title">
				<?php _e( 'Menu', 'supreme' ); ?>
			</div><!-- #menu-subsidiary-title" -->

			<?php do_atomic( 'open_menu_subsidiary' ); // supreme_open_menu_subsidiary ?>

			<?php wp_nav_menu( array( 'theme_location' => 'subsidiary', 'container_class' => 'menu', 'menu_class' => '', 'menu_id' => 'menu-subsidiary-items', 'fallback_cb' => '' ) ); ?>

			<?php do_atomic( 'close_menu_subsidiary' ); // supreme_close_menu_subsidiary ?>

		</div>

	</div><!-- #menu-subsidiary .menu-container -->

	<?php do_atomic( 'after_menu_subsidiary' ); // supreme_after_menu_subsidiary ?>

<?php endif; ?>