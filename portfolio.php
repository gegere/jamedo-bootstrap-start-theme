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
<?php if ( $post->ID == 48 ) { 
// Photo gallery index page
$thumb_size = 240;
?>
<h2>Photo Gallery</h2>
<?php } else { 
$thumb_size = 140;
?>
<h2>Additional Photo Galleries</h2>
<?php } ?>
</div>


<div class="row">

<?php if ( $post->ID == 48 ) { 
########################### PHOTO GALLERY LAYOUT
?>
<div class="photo-gallery-index">
<div class="col-xs-12 col-sm-4 col-md-4 text-center">
	<div class="thumbnail">
<p><a href="/photo-gallery-crack-sealing" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" class="link">Crack Sealing</a></p>
	</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4 text-center">
	<div class="thumbnail">
<p><a href="/photo-gallery-seal-coating" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/212.jpg" width="<?= $thumb_size ?>" class="link">Seal Coating</a></p>
	</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4 text-center">
	<div class="thumbnail">
<p><a href="/photo-gallery-asphalt-patching/" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/214.jpg" width="<?= $thumb_size ?>" class="link">Asphalt Patching</a></p>
	</div>
</div>

<div class="hidden-xs"><p>&nbsp;</p></div>

<div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 text-center">
	<div class="thumbnail">
<p><a href="/photo-gallery-equipment" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/218.jpg" width="<?= $thumb_size ?>" class="link">Job Equipment</a></p>
	</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4 text-center">
	<div class="thumbnail">
<p><a href="/photo-gallery-beautiful-asphalt" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/216.jpg" width="<?= $thumb_size ?>" class="link">Beautiful Asphalt</a></p>
	</div>
</div>
</div>
<?php } ?>






<?php if ( $post->ID != 48 ) { 
########################### INDIVIDUAL GALLERIES
?>
<div class="photo-gallery">
<div class="col-xs-12 col-sm-4 col-md-3 text-center">
	<div class="thumbnail"><p>
	<?php ( $post->ID == 210 ) ? $class = 'class="select"' : $class = 'class="link"'; ?>
	<?php if ( $post->ID == 210 ) { ?>
	<img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Crack Sealing
	<?php } else { ?>
	<a href="/photo-gallery-crack-sealing" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Crack Sealing</a>
	<?php } ?>
	</p>
	</div>
</div>


<div class="col-xs-12 col-sm-4 col-md-3 text-center">
	<div class="thumbnail"><p>
	<?php ( $post->ID == 212 ) ? $class = 'class="select"' : $class = 'class="link"'; ?>
	<?php if ( $post->ID == 212 ) { ?>
	<img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Seal Coating
	<?php } else { ?>
	<a href="/photo-gallery-seal-coating" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/212.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Seal Coating</a>
	<?php } ?>
	</p>
	</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-3 text-center">
	<div class="thumbnail"><p>
	<?php ( $post->ID == 214 ) ? $class = 'class="select"' : $class = 'class="link"'; ?>
	<?php if ( $post->ID == 214 ) { ?>
	<img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Asphalt Patching
	<?php } else { ?>
	<a href="/photo-gallery-asphalt-patching/" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/214.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Asphalt Patching</a>
	<?php } ?>
	</p>
	</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-3 text-center">
	<div class="thumbnail"><p>
	<?php ( $post->ID == 218 ) ? $class = 'class="select"' : $class = 'class="link"'; ?>
	<?php if ( $post->ID == 218 ) { ?>
	<img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Job Equipment
	<?php } else { ?>
	<a href="/photo-gallery-equipment" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/218.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Job Equipment</a>
	<?php } ?>
	</p>
	</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-3 text-center">
	<div class="thumbnail"><p>
	<?php ( $post->ID == 216 ) ? $class = 'class="select"' : $class = 'class="link"'; ?>
	<?php if ( $post->ID == 216 ) { ?>
	<img src="<?=get_template_directory_uri() ?>/assets/img/210.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Beautiful Asphalt
	<?php } else { ?>
	<a href="/photo-gallery-beautiful-asphalt" class="link"><img src="<?=get_template_directory_uri() ?>/assets/img/216.jpg" width="<?= $thumb_size ?>" <?= $class ?>>Beautiful Asphalt</a>
	<?php } ?>
	</p>
	</div>
</div>
</div>


<?php } ?>


</div>

<p>&nbsp;</p>

<p>&nbsp;</p>

</div><!-- content END -->

<?php 
do_action( 'jbst_after_content_page' );
get_footer(); 
?>
