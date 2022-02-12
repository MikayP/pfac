<?php
/**
* Template Name: Video Header
*/
?>

<?php get_header();

$video_file = get_field('video_file_url');
$sub_header = get_field('subheading');

?>
<div class="video-template">
	<div class="video-container" style="background-image:url('https://source.unsplash.com/user/c_v_r/600x300')">
    <div class="carousel" id="flickity" data-flickity>
        <div class="carousel-cell">
    	<video muted preload="metadata" poster="">>
			<source src="<?php echo $video_file; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
    </div>
    <div class="carousel-cell">
    	<video muted preload="metadata" poster="">>
			<source src="<?php echo $video_file; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
    </div>
    <div class="carousel-cell">
    	<video muted preload="metadata" poster="">>
			<source src="<?php echo $video_file; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
    </div>
    </div>
    
        <div class="background_layer_dark"></div>
        <div data-aos="fade-down" data-aos-duration="1000" class=" col-md-9 justify-content-center h1-container">
        <h1 class="center-txt mb-3"><?php the_title(); ?></h1>
        <a href="<?php echo get_field('subheading_url'); ?>">
           <div class="inner-container row">

                <h4 class="col-md-6 left"><?php echo $sub_header; ?></h4> <h4 class="col-md-6 right"> <?php echo get_field('right_subheader_text'); ?><i class="fas fa-arrow-right"></i> </h4>
          
            </div>
            </a>
            </div>
        </div>
   
        <div class="video-template-content col-md-10 mx-auto ">
   
		<?php
  

        if(have_posts()) while (have_posts() ) : the_post();

            the_content();
        
        endwhile;
?>


	


    <?php get_footer(); ?>

   