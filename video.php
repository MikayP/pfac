<?php
/**
* Template Name: Video Header
*/

?>

<?php get_header();

$video_file_url_1 = get_field('video_file_url_1');
$video_file_url_2 = get_field('video_file_url_2');
$video_file_url_3 = get_field('video_file_url_3');

$link_1 = get_field('link_1');
$link_2 = get_field('link_2');
$link_3 = get_field('link_3');

$slider_text_1 = get_field('slider_text_1');
$slider_text_2 = get_field('slider_text_2');
$slider_text_3 = get_field('slider_text_3');

$sub_header = get_field('subheading');

$artist_credit_1 = get_field('artist_credit_1');
$artist_credit_2 = get_field('artist_credit_2');
$artist_credit_3 = get_field('artist_credit_3');

?>
<div class="video-template ">
	<div class="video-container left-padding-wrapper" >
    <div class="carousel" id="flickity" data-flickity='{ "draggable": false }'>
   
    <div class="carousel-cell">
    	<video muted preload="metadata" poster="">
			<source src="<?php echo $video_file_url_1; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <?php if( $artist_credit_1)?>
         <p class="video-credit"><?php {echo the_field('artist_credit_1') ;}?> </p>
        <div class="background_layer_dark"> </div>  
        <div class="z-index">
        <a class=" slider-header" href="<?php echo $link_1 ?>"><h1 ><?php echo $slider_text_1 ?> <i class="fas fa-arrow-right"></i></h1></a>
        <svg class="arrows">
							<path class="a1" d="M0 0 L30 32 L60 0"></path>
							<path class="a2" d="M0 20 L30 52 L60 20"></path>
							<path class="a3" d="M0 40 L30 72 L60 40"></path>
						</svg>
    </div>
    
    </div>
    <div class="carousel-cell">
    <video muted preload="metadata" poster="">
			<source src="<?php echo $video_file_url_2; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <div class="background_layer_dark"> </div>  
        <div class="z-index">
        <a class=" slider-header" href="<?php echo $link_2 ?>"> <h2 ><?php echo $slider_text_2 ?> <i class="fas fa-arrow-right"></i></h2> </a>
        <svg class="arrows">
							<path class="a1" d="M0 0 L30 32 L60 0"></path>
							<path class="a2" d="M0 20 L30 52 L60 20"></path>
							<path class="a3" d="M0 40 L30 72 L60 40"></path>
						</svg>
    </div>
    </div>  
    
    <div class="carousel-cell">
        <video muted preload="metadata" poster="">
			<source src="<?php echo $video_file_url_3; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <div class="background_layer_dark"> </div>  
        <div class="z-index">
        <a class=" slider-header" href="<?php echo $link_3 ?>"><h2  ><?php echo $slider_text_3 ?> <i class="fas fa-arrow-right"></i></h2></a>
        <svg class="arrows">
							<path class="a1" d="M0 0 L30 32 L60 0"></path>
							<path class="a2" d="M0 20 L30 52 L60 20"></path>
							<path class="a3" d="M0 40 L30 72 L60 40"></path>
						</svg>
    </div>
    </div>


    </div>

        </div>
   
        <div class="video-template-content left-padding-wrapper col-md-10 mx-auto ">
   
		<?php
  

        if(have_posts()) while (have_posts() ) : the_post();

            the_content();
        
        endwhile;
?>


	


    <?php get_footer(); ?>

   