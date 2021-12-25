<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
 		<?php $theTitle = get_the_title();
		$theTitleExplode = explode(' ' ,trim($theTitle)); 
		$theTitleImplode = implode('-',$theTitleExplode); ?>
        <main id="page-<?php echo $theTitleImplode; ?>">
			<div class="container my-5">
				<?php $featuredImage = get_the_post_thumbnail();
				if ($featuredImage) : ?>
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</main>
	
	<?php endwhile;
 
endif;
 
get_footer();
 
?>