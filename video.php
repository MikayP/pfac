<?php
/**
* Template Name: Video Header
*/

?>

<?php get_header();

$video_file_url_1 = get_field('video_file_url_1');
$slider_text_1 = get_field('slider_text_1');
$slider_url_1 = get_field('slider_url_1');
$slider_url_1 = get_field('slider_url_1');

$video_file_url_2 = get_field('video_file_url_2');
$slider_text_2 = get_field('slider_text_2');
$slider_url_2 = get_field('slider_url_2');

$video_file_url_3 = get_field('video_file_url_3');
$slider_text_3 = get_field('slider_text_3');
$slider_url_3 = get_field('slider_url_3');

$sub_header = get_field('subheading');

?>
<div class="video-template">
	<div class="video-container" >
    <div class="carousel" id="flickity" data-flickity='{ "draggable": false }'>

    <div class="carousel-cell">
    <video muted preload="metadata" poster="">
			<source src="<?php echo $video_file_url_2; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
    </div>  
    <div class="carousel-cell">
        <video muted preload="metadata" poster="">
			<source src="<?php echo $video_file_url_3; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>

    </div>
    <div class="carousel-cell">
    	<video muted preload="metadata" poster="">
			<source src="<?php echo $video_file_url_1; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
    </div>
    </div>
    <div class="background_layer_dark"> </div>
   
   
        <div data-aos="fade-down" data-aos-duration="1000" class=" col-md-9 justify-content-center h1-container">
        <a id="video_h1" href="<?php echo $slider_url_1 ?>"><h1 class="center-txt mb-3"><?php echo $slider_text_1 ?></h1></a>

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


	<script>
    
    </script>


    <?php get_footer(); ?>

   