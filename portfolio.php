<?php

/**
 * Template Name: Portfolio
 *
 *
 * @package skematik
 * @since skematik 1.0
 */
get_header();

do_action( 'jbst_before_content_page' );
?>
		<?php if ( have_posts() ) : ?>
				<?php 
					if ( is_page() ) { get_template_part( 'content', 'page' );}
					elseif ( is_single() ) {get_template_part( 'content', 'single' );}
					elseif ( is_search() ) {get_template_part( 'content', 'search' );}
					else {get_template_part( 'content', get_post_format() );}
				 ?>
		<?php else : ?>
		<?php get_template_part( 'no-results', 'content' ); ?>
		<?php endif; ?>


<div id="content" role="main">

<div class="row">
<?php if ( $post->ID == 48 ) { ?>
<h2>Photo Gallery</h2>
<?php } else { ?>
<h2>Additional Photo Galleries</h2>
<?php } ?>
</div>


<div class="row">


<div class="col-lg-2 col-md-4 text-center">
<?php if ( $post->ID == 210 ) { ?>
<img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="140" height="100" class="link select">
<?php } else { ?>
<a href="/photo-gallery-crack-sealing"><img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="140" height="100" class="link"></a>
<p><a href="/photo-gallery-crack-sealing" class="link">Crack Sealing</a></p>
<?php } ?>
</div>


<div class="col-lg-2 col-md-4 text-center">
<?php if ( $post->ID == 212 ) { ?>
<img src="<?=get_template_directory_uri() ?>/assets/img/212.jpg" width="140" height="100" class="link select">
<?php } else { ?>
<a href="/photo-gallery-seal-coating"><img src="<?=get_template_directory_uri() ?>/assets/img/212.jpg" width="140" height="100" class="link"></a>
<p><a href="/photo-gallery-seal-coating" class="link">Seal Coating</a></p>
<?php } ?>
</div>

<div class="col-lg-2 col-md-4 text-center">
<?php if ( $post->ID == 214 ) { ?>
<img src="<?=get_template_directory_uri() ?>/assets/img/214.jpg" width="140" height="100" class="link select">
<?php } else { ?>
<a href="/photo-gallery-asphalt-patching/"><img src="<?=get_template_directory_uri() ?>/assets/img/214.jpg" width="140" height="100" class="link"></a>
<p><a href="/photo-gallery-asphalt-patching/" class="link">Asphalt Patching</a></p>
<?php } ?>
</div>

<div class="col-lg-2 col-md-4 text-center">
<?php if ( $post->ID == 218 ) { ?>
<img src="<?=get_template_directory_uri() ?>/assets/img/218.jpg" width="140" height="100" class="link select">
<?php } else { ?>
<a href="/photo-gallery-equipment"><img src="<?=get_template_directory_uri() ?>/assets/img/218.jpg" width="140" height="100" class="link"></a>
<p><a href="/photo-gallery-equipment" class="link">Job Equipment</a></p>
<?php } ?>
</div>

<div class="col-lg-2 col-md-4 text-center">
<?php if ( $post->ID == 216 ) { ?>
<img src="<?=get_template_directory_uri() ?>/assets/img/216.jpg" width="140" height="100" class="link select">
<?php } else { ?>
<a href="/photo-gallery-beautiful-asphalt"><img src="<?=get_template_directory_uri() ?>/assets/img/216.jpg" width="140" height="100" class="link"></a>
<p><a href="/photo-gallery-beautiful-asphalt" class="link">Beautiful Asphalt</a></p>
<?php } ?>
</div>


</div>

<p>&nbsp;</p>

<p>&nbsp;</p>

</div><!-- content END -->

<?php 
do_action( 'jbst_after_content_page' );
get_footer(); 
?>
