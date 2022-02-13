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
	<div class="video-container" >
    <div class="carousel" id="flickity" data-flickity='{ "draggable": false }'>
    <div class="carousel-cell">
    	<video muted preload="metadata" poster="">
			<source src="<?php echo $video_file; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <div class="background_layer_dark">   <a class="background_href" href="/calendar"><h3>Slider 1 Content</h3></a></div>
     
    </div>
    <div class="carousel-cell">
    <video muted preload="metadata" poster="">
			<source src="http://pflugarts.local/wp-content/uploads/2022/02/sample-5s.mp4" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <div class="background_layer_dark">   <a class="background_href" href="/calendar"><h3>Slider 2 Content</h3></a></div>
    </div>  
    <div class="carousel-cell">
        <video muted preload="metadata" poster="">
			<source src="/wp-content/uploads/2022/02/small.mp4" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <div class="background_layer_dark">   <a class="background_href" href="/calendar"><h3>Slider 3 Content</h3></a></div>

    </div>


    </div>
    
   
   
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

   