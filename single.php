<?php
 
get_header();
?>
<div class="events-header single-post">
	<div class="single-post_top_container events-header_top_container row justify-content-center"
		style="background-image: url(&#039;http://pflugarts.local/wp-content/uploads/2022/01/steve-johnson-zkNT5mikUuo-unsplash-scaled.jpg&#039;);">
		<div class="background_layer_dark_global"></div>
		<div class="col-12 justify-content-center h1-container  d-flex ">
			<h1 class="content custom-fade-down"><?php the_title(); ?></h1>
		</div>
	</div>


<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

<?php $theTitle = get_the_title();
		$theTitleExplode = explode(' ' ,trim($theTitle)); 
		$theTitleImplode = implode('-',$theTitleExplode); ?>
<main id="post-<?php echo $theTitleImplode; ?>" class="post">
	<div class="container single-post_container">
		<?php $featuredImage = get_the_post_thumbnail();
				if ($featuredImage) : ?>
		<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
</main>

<?php endwhile; ?>
</div>




<?php endif;
 
get_footer();
 
?>
