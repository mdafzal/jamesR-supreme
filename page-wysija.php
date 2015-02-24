<?php
/*
Template Name: Template - WYSIJA Form
*/
/**
 * Page for use with the WYSIJA Subscription Form
 *
 * This template is used to create custom WYSIJA subscription forms with HTML.
 * It contains the WYSIJA JavaScript functions needed by the form.
 *
 * @package supreme
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>
<!--START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="http://medtechboston.com/wp-includes/js/jquery/jquery.js?ver=2.6.6"></script>
<script type="text/javascript" src="http://medtechboston.com/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.6.6"></script>
<script type="text/javascript" src="http://medtechboston.com/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.6.6"></script>
<script type="text/javascript" src="http://medtechboston.com/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.6"></script>
<script type="text/javascript">
                /* <![CDATA[ */
                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://medtechboston.com/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
                /* ]]> */
                </script><script type="text/javascript" src="http://medtechboston.com/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.6"></script>
<script type ="text/javascript">
function CheckboxClick() {
	document.getElementById("ChosenLists").value = "";
	
	if (document.getElementById("WeeklyDigest").checked) {
		document.getElementById("ChosenLists").value = "3";
	}
	if (document.getElementById("Announcements").checked) {
		document.getElementById("ChosenLists").value = "8";
	}
	if (document.getElementById("Announcements").checked && document.getElementById("WeeklyDigest").checked) {
		document.getElementById("ChosenLists").value = "3,8";
	}
	
	if (document.getElementById("ChosenLists").value == "") {
		alert("You must choose at least one newsletter!.");
	}
}
	
	
		

</script>
<!--END Scripts-->



<?php do_atomic( 'before_content' ); // supreme_before_content ?>

<div id="content">

	<?php do_atomic( 'open_content' ); // supreme_open_content ?>
	
	<div class="hfeed">
	
	<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>
	
	<?php get_sidebar( 'before-content' ); // Loads the sidebar-before-content.php template. ?>
	
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php do_atomic( 'before_entry' ); // supreme_before_entry ?>
			
					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // supreme_open_entry ?>

						<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
						
						<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __('Published by [entry-author] on [entry-published] [entry-comments-link zero="Respond" one="%1$s" more="%1$s"] [entry-edit-link] [entry-permalink]', 'supreme' ) . '</div>'); ?>

						<?php get_sidebar( 'entry' ); // Loads the sidebar-entry.php template. ?>
						
						<div class="entry-content">
							
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'supreme' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'supreme' ), 'after' => '</p>' ) ); ?>

						</div><!-- .entry-content -->

						<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( 'Filed under: [entry-terms taxonomy="category"] [entry-terms taxonomy="post_tag" before="and Tagged: "]', 'supreme' ) . '</div>' ); ?>

						<?php do_atomic( 'close_entry' ); // supreme_close_entry ?>

					</div><!-- .hentry -->
			
			<?php do_atomic( 'after_entry' ); // supreme_after_entry ?>
			
				<?php endwhile; ?>

			<?php else : ?>
			
				<div class="<?php hybrid_entry_class(); ?>">

					<h2 class="entry-title"><?php _e( 'No Entries', 'supreme' ); ?></h2>
				
					<div class="entry-content">
						<p><?php _e( 'Apologies, but no entries were found.', 'supreme' ); ?></p>
					</div>
				
				</div><!-- .hentry .error -->

		<?php endif; ?>
		
	<?php get_sidebar( 'after-content' ); // Loads the sidebar-after-content.php template. ?>
		
	</div><!-- .hfeed -->
	
	<?php do_atomic( 'close_content' ); // supreme_close_content ?>
	
	<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

</div><!-- #content -->

<?php do_atomic( 'after_content' ); // supreme_after_content ?>

<?php get_footer(); // Loads the header.php template. ?>
