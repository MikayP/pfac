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
		<video autoplay loop muted>
			<source src="<?php echo $video_file; ?>" type="video/mp4">
			Your browser does not support the video tag.
        </video>
        <div class="background_layer_dark"></div>
        <div data-aos="fade-down" data-aos-duration="1000" class=" col-md-9 justify-content-center h1-container">
        <h1 class="center-txt mb-3"><?php the_title(); ?></h1>
        <a href="<?php echo get_field('subheading_url'); ?>">
     
           <div class="inner-container row">

                <h4 class="col-md-7 left"><?php echo $sub_header; ?></h4> <h4 class="col-md-5 right"> <?php echo get_field('right_subheader_text'); ?><i class="fas fa-arrow-right"></i> </h4>
          
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

            

	</div>


    <?php get_footer(); ?>
</div>


<div class="h-100 border-radius_global p-0 col-12 background_layer" style="background-image: url('/wp-content/uploads/2022/01/henrik-donnestad-t2Sai-AqIpI-unsplash.jpg');" data-aos="fade-down" data-aos-duration="500">
<div class="background_layer_dark_global background_layer_dark_global_z_index_1"></div>
</div>