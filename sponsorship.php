<?php
/**
* Template Name: Sponsorship
*/
get_header();

get_template_part('/partials/secondary_header', 'header');
?>


<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

<?php $theTitle = get_the_title();
		$theTitleExplode = explode(' ' ,trim($theTitle)); 
		$theTitleImplode = implode('-',$theTitleExplode); ?>
<main id="post-<?php echo $theTitleImplode; ?>" class="post left-padding-wrapper"  data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="1500">
	<div class="container single-post_container ">
		<?php the_content(); ?>
	</div>
</main>

<?php endwhile; ?>
</div>


<?php endif;
 
get_footer();
 
?>
