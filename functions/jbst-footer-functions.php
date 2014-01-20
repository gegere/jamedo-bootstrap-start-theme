<?php
/*
==========================================================
THE FUNCTIONS IN THIS FILE ALL TIE INTO THE
'jbst_footer' ACTION HOOK WHICH IS CALLED IN footer.php
FILE. DEVELOPERS CAN REMOVE ANYTHING HERE WITH A SIMPLE
'remove_action' CALL.
==========================================================
*/



/*
==========================================================
JBST Right Sidebar
==========================================================
*/
// Call the right sidebar function
add_action( 'jbst_footer', 'jbst_right_sidebar', 9 );



/*
==========================================================
jbst Bottom Content Wrapper
==========================================================
*/
// Close the content wrapper html
add_action( 'jbst_footer', 'jbst_bottom_content_wrapper', 20 );
function jbst_bottom_content_wrapper() {
	echo '
				</div><!-- .row -->
		</div><!-- #page .hfeed .site -->
	</div><!-- #contentwrap -->';
}



/*
==========================================================
jbst FOOTER AREA
==========================================================
*/
// Call the footer area function (widget areas)
add_action( 'jbst_footer', 'jbst_footer_area', 30 );

function jbst_footer_area() {?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<?php jbst_footer_widgets();?>
			<div class="row">
				<div class="site-info <?php echo JBST_GRIDPREFIX;?>12">
					<?php do_action( 'jbst_credits' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- .site-footer .site-footer -->
<?php }



/*
==========================================================
FOOTER WIDGETS
==========================================================
*/
function jbst_footer_widgets() {
$ftr_widgets = get_theme_mod( 'footer_widgets_number', 4 );

# Default widget code has been commented out as there are more advance needs for the footer 
// if($ftr_widgets > 0) 
// {
// 	$span = 12 / $ftr_widgets;	
	
	
// 	$footer_widgets_array = array(
//         __('One','jamedo-bootstrap-start-theme'),
//         __('Two','jamedo-bootstrap-start-theme'),
//         __('Three','jamedo-bootstrap-start-theme')
//     );
	
// 	echo '<div class="row">';
		
// 	for ( $i=0; $i < $ftr_widgets; $i++ ) 
// 	{
// 		echo '<div class="'. JBST_GRIDPREFIX . $span.'">';
// 			if ( ! dynamic_sidebar( 'footer-widget-'.($i+1) ) ) :
// 				echo '<h4>';
// 				echo __( 'Footer Widget', 'jamedo-bootstrap-start-theme' ).' '.$footer_widgets_array[$i];
// 				echo '</h4>';
// 				echo '<p>';
// 				_e( 'You have activated a Footer Widget! You can deactivate this in the Theme Customizer or put content in it under "Appearance > Widgets".', 'jamedo-bootstrap-start-theme' );
// 				echo '</p>';
// 			endif;
// 		echo '</div>';
// 	}	
		
// 	echo '</div>';
// }
// }

echo '<div class="row">
		<div class="col-sm-4"><div class="textwidget"><a href="/c/quote"><img src="/wp-content/themes/bs3/assets/img/footer_wi@2x.jpg" width="280"></a></div></div>
		<div class="col-sm-4"><div class="textwidget"><a href="http://fb.com/pages/Asphalt-Seal-Repair/341749302525789"><img src="/wp-content/themes/bs3/assets/img/footer_fb_connect@2x.jpg" width="280"></a></div></div>
		<div class="col-sm-4"><div class="textwidget"><img src="/wp-content/themes/bs3/assets/img/footer_eco@2x.jpg" width="280"></div></div>
	</div>';
}


/*
==========================================================
FOOTER CREDITS
==========================================================
*/
function jbst_custom_credits() {
	if(get_theme_mod('footer_credits') <> "") {echo get_theme_mod('footer_credits');}
	else {?>
		<?php printf( __( '&copy;', 'jamedo-bootstrap-start-theme' )); ?> <?php echo date('Y');?> <?php echo bloginfo('name');?><span class="sep"> | </span><a target="_blank" href="<?php esc_attr_e( 'http://www.jbst.eu/', 'jamedo-bootstrap-start-theme' ); ?>" title="<?php esc_attr_e( 'Powered by JBST', 'jamedo-bootstrap-start-theme' ); ?>" rel="generator"><?php printf( __( 'Powered by JBST', 'jamedo-bootstrap-start-theme' ), 'jamedo-bootstrap-start-theme' ); ?></a>
	<?php }
}

add_action('jbst_credits', 'jbst_custom_credits');



/*
==========================================================
jbst Body Close
==========================================================
*/
// Create the doc type and initial meta tags
add_action( 'jbst_footer', 'jbst_body_close', 40 );
function jbst_body_close() {
?>
</div><!-- END jbst-site-wrap -->
<?php do_action( 'jbst_after' ); ?>
<?php wp_footer(); ?>
</body>
</html>
<?php
}



/*
==========================================================
jbst BuddyPress Bottom Content Wrapper
==========================================================
*/
// 
add_action( 'jbst_after_buddypress', 'jbst_buddypress_bottom_content_wrapper', 9 );
function jbst_buddypress_bottom_content_wrapper() {
?>
		</div><!-- #content -->
	</div><!-- #primary .site-content -->
<?php
}
