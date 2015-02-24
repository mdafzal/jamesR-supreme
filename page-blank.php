<?php
/**
Template Name: Blank Page

 * Page Template
 *
 * A completely blank templage 
 *
 * @package supreme
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php if ( current_theme_supports( 'breadcrumb-trail' ) && hybrid_get_setting('supreme_show_breadcrumb')) breadcrumb_trail( array( 'separator' => '&raquo;' ) ); ?>

	<div id="content">

		<div class="hfeed">
			
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<div class="entry-content">
							
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'supreme' ) ); ?>

						</div><!-- .entry-content -->
						
					</div><!-- .hentry -->

				<?php endwhile; ?>

			<?php endif; ?>
			
		</div><!-- .hfeed -->

	</div><!-- #content -->

