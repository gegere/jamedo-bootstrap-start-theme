<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package crblueprint
 * @since crblueprint 1.0
 */
?>
		<!--<div id="secondary" class="widget-area <?php echo JBST_GRIDPREFIX;?>3" role="complementary">-->
			<?php do_action( 'skematik_before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<?php get_sidebar('default'); ?>

			<?php endif; // end sidebar widget area ?>
		<!--</div>-->
