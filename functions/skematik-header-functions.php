<?php
/*
==========================================================
THE FUNCTIONS IN THIS FILE ALL TIE INTO THE
'skematik_header' ACTION HOOK WHICH IS CALLED IN header.php
FILE. DEVELOPERS CAN REMOVE ANYTHING HERE WITH A SIMPLE
'remove_action' CALL.
==========================================================
*/



/*
==========================================================
Skematik Doc Type
==========================================================
*/
// Create the doc type and initial meta tags
add_action( 'skematik_header', 'skematik_doc_type', 9 );
function skematik_doc_type() {
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php
}



/*
==========================================================
Skematik Title
==========================================================
*/
// Create the title attribute for each page
add_action( 'skematik_header', 'skematik_doc_title', 20 );
function skematik_doc_title() {
?>
<title>
	<?php
	/* Print the <title> tag based on what is being viewed.*/
	global $page, $paged;
	
	wp_title( '|', true, 'right' );

	// Add the blog name.
	//bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'jamedo-bootstrap-start-theme' ), max( $paged, $page ) );
	?>
</title>
<?php
}



/*
==========================================================
Skematik Head
==========================================================
*/
// 
add_action( 'skematik_header', 'skematik_head_after', 30 );
function skematik_head_after() {
?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/library/assets/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/library/assets/js/respond.min.js"></script>
    <![endif]-->
<?php
do_action('skematik_head');
wp_head();
global $woocommerce;?>
</head>
<?php
}



/*
==========================================================
Skematik BODY
==========================================================
*/
// 
add_action( 'skematik_header', 'skematik_body_open', 40 );
function skematik_body_open() {
?>
<body <?php body_class(); ?>>
<?php do_action( 'skematik_before' ); ?>
<div class="skematik-site-wrap">
<?php
}

/*
==========================================================
Logo out side navar
==========================================================
*/
//       


function jbst_logooustside()
{
	$extraclasses = apply_filters('jbst_logooustside_classes',array());
	$string  = '<div class="logo-outside-nav container'.(($extraclasses)?' '.implode('',$extraclasses):'').'">';
	$string .=  skematik_logo();
	$string .=  '</div>';	
	return $string;
}

/*
==========================================================
Skematik Main Nav
==========================================================
*/
// 


add_action( 'skematik_header', 'skematik_main_navbar', 50 );
function skematik_main_navbar() { 
	
	$fixed = preg_match('/fixed/',get_theme_mod( 'navbar_style' ));
	
	if(	get_theme_mod('logo_image_position', 'in-nav') == 'outside-nav' && !$fixed ) 
	{
	echo apply_filters('jbst_logooustside',jbst_logooustside());
	}  
	
	if(get_theme_mod( 'navbar_style' ) == '') {?><div class="container"><?php } ?>
	
	<nav role="navigation" class="navbar navbar-default <?php echo get_theme_mod( 'navbar_style', '' );?> <?php //echo get_theme_mod( 'navbar_color', 'navbar-default' );?>" id="skematik-top-nav">
      <?php if(get_theme_mod( 'navbar_style' ) != '') {?><div class="container"><?php } ?>
       <div class="navbar-header">
		<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
			<? if(get_theme_mod('logo_image_position', 'in-nav') == 'in-nav') {skematik_logo();} ?>
       </div>
         
        <!-- main navigation -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php skematik_main_nav(); // Adjust using Menus in Wordpress Admin ?>
		</div>


       <?php if(get_theme_mod( 'navbar_style' ) != '') {?></div><?php } ?>
    </nav>
    <?php if(get_theme_mod( 'navbar_style' ) == '') {?></div><?php } ?>
	<?php
	
	if(	get_theme_mod('logo_image_position', 'in-nav') == 'outside-nav' && 	$fixed)
	{
		echo apply_filters('jbst_logooustside',jbst_logooustside());
	}  
	
echo '<div class="container"><div class="pull-right">
		<h3 style="margin-top:0px;"><a href="tel:8008797602" style="text-decoration:none; color:#333;">(800) 879-7602</a></h3>
 		</div></div>';	
	
} // END skematik_main_navbar



/*
==========================================================
Skematik Main Nav
==========================================================
*/
// 


//add_action( 'skematik_header', 'skematik_services_navbar', 50 );
function skematik_services_navbar() { 
	
	$fixed = preg_match('/fixed/',get_theme_mod( 'navbar_style' ));
	
	if(	get_theme_mod('logo_image_position', 'in-nav') == 'outside-nav' && !$fixed ) 
	{
	echo apply_filters('jbst_logooustside',jbst_logooustside());
	}  
	
	if(get_theme_mod( 'navbar_style' ) == '') {?><div class="container"><?php } ?>
	
	<nav role="navigation" class="navbar navbar-default <?php echo get_theme_mod( 'navbar_style', '' );?> <?php //echo get_theme_mod( 'navbar_color', 'navbar-default' );?>" id="skematik-top-nav">
      <?php if(get_theme_mod( 'navbar_style' ) != '') {?><div class="container"><?php } ?>
       <div class="navbar-header">
		<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
			<? if(get_theme_mod('logo_image_position', 'in-nav') == 'in-nav') {skematik_logo();} ?>
       </div>
         
        <!-- main navigation -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php skematik_services_nav(); // Adjust using Menus in Wordpress Admin ?>
		</div>


       <?php if(get_theme_mod( 'navbar_style' ) != '') {?></div><?php } ?>
    </nav>
    <?php if(get_theme_mod( 'navbar_style' ) == '') {?></div><?php } ?>
	<?php
	
	if(	get_theme_mod('logo_image_position', 'in-nav') == 'outside-nav' && 	$fixed)
	{
		echo apply_filters('jbst_logooustside',jbst_logooustside());
	}  
	
	
} // END skematik_services_navbar



function skematik_nav_styles() {
	if(get_theme_mod( 'navbar_style' ) == '') { //default
	echo '
	body { padding-top: 30px; }
    .navbar { margin-bottom: 30px; }
	';
	}
	if(get_theme_mod( 'navbar_style') == 'navbar-static-top') {
	echo '
	.navbar-static-top {  margin-bottom: 19px; }
	';
	}
	if(get_theme_mod( 'navbar_style') == 'navbar-fixed-top') {
	echo '
	body {  padding-top: 70px; }
	';
	}
	if(get_theme_mod( 'navbar_style') == 'navbar-fixed-bottom') {
	echo '
	body {  padding-padding-bottom: 70px; }
	';
	}
	
	$navbar_background_color = get_theme_mod( 'navbar_background_color');
	if(!empty($navbar_background_color))
	{
		echo '.navbar {background-color: '.$navbar_background_color.';}';
	}	
    
    $navbar_border_color = get_theme_mod( 'navbar_border_color');
	if(!empty($navbar_border_color))
	{
		echo '.navbar {border-color: '.$navbar_border_color.';}';
    }
    
    $navbar_link_color = get_theme_mod( 'navbar_link_color');
	if(!empty($navbar_link_color))
	{
		echo '.navbar .navbar-nav > li > a {
    color: '.$navbar_link_color.';
}';
    }
    
    $navbar_linkhover_color = get_theme_mod( 'navbar_linkhover_color');
	if(!empty($navbar_linkhover_color))
	{
		echo '.navbar .navbar-nav > li > a:hover {
    color: '.$navbar_linkhover_color.';
}';
    }	
    
    $navbar_activelink_color = get_theme_mod( 'navbar_activelink_color');
	if(!empty($navbar_activelink_color))
	{
		echo '.navbar .navbar-nav > .active > a, .nav .navbar-nav > .active > a:hover {
    color: '.$navbar_activelink_color.';
}';
    }	
    
    $navbar_activebackground_color = get_theme_mod( 'navbar_activebackground_color');
	if(!empty($navbar_activebackground_color))
	{
		echo '.navbar .navbar-nav > .active > a, .nav .navbar-nav > .active > a:hover {
    background-color: '.$navbar_activebackground_color.';
}';
    }
    
    /* LOGO */

    $logo_link_color = get_theme_mod( 'logo_link_color');
	if(!empty($logo_link_color))
	{
		echo '.navbar-brand {
    color: '.$logo_link_color.';
}';
    }
    
    $logo_linkhover_color = get_theme_mod( 'logo_linkhover_color');
	if(!empty($logo_linkhover_color))
	{
		echo '.navbar-brand:hover {
    color: '.$logo_linkhover_color.';
}';
    }
    
    
}
add_action('skematik_add_to_custom_style','skematik_nav_styles');

/*
==========================================================
Skematik Content Wrappers
==========================================================
*/
// Create content wrapper HTML
add_action( 'skematik_header', 'skematik_top_content_wrapper', 60 );
function skematik_top_content_wrapper() {
	echo '
	<div id="contentwrap">
		<div id="page" class="hfeed site container">
			<div id="main">
				<div class="row">';
}



/*
==========================================================
Skematik Left Sidebar
==========================================================
*/
// Call the left sidebar if this template has one.
add_action( 'skematik_header', 'skematik_left_sidebar', 80 );



/*
==========================================================
Skematik BuddyPress Top Content Wrapper
==========================================================
*/
// 
add_action( 'skematik_before_buddypress', 'skematik_buddypress_top_content_wrapper', 10 );
function skematik_buddypress_top_content_wrapper() {
?>
	<div id="primary" class="site-content <?php do_action('jbstmaingridclass'); ?>">
		<div id="content" role="main">
<?php
}
