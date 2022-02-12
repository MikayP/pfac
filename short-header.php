<?php
/**
* Template Name: Short Header
*/
?>

<?php get_header();

$video_file = get_field('video_file_url');
$sub_header = get_field('subheading');

?>

<div class="short-header">
	<div class="short-header_top_container row justify-content-center"
    style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
		<div class="background_layer_dark_global"></div>
		<div data-aos="fade-up" data-aos-duration="1000"    data-aos-delay="500"  class="col-12 justify-content-center h1-container  d-flex ">
			<h1 class="content "><?php the_title(); ?></h1>
		</div>
	</div>

    </div>

        <div data-aos="fade-down" data-aos-duration="1000"    data-aos-delay="500" class="short-header-bottom-content col-md-10 mx-auto ">


    <?php    if(have_posts()) while (have_posts() ) : the_post();

            the_content();
        
        endwhile;
?>

            

	</div>



</div>
<?php get_footer(); ?>
