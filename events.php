<?php
/**
* Template Name: events
*/
?>

<?php get_header();

$video_file = get_field('video_file_url');
$sub_header = get_field('subheading');

?>

<div  class="short-header">
	<div class="short-header_top_container row justify-content-center " style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
        <div data-aos="fade-right" data-aos-duration="1500" class=" col-md-4 justify-content-center h1-container short-header_top_container_box short-header_top_container_box_1 d-flex">
            <div class="content"></div>
        </div>

        <div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500" class=" col-md-4 justify-content-center h1-container short-header_top_container_box short-header_top_container_box_2 d-flex">
            <h1 class="content"><?php the_title(); ?></h1>
        </div>
        <i class="fas fa-arrow-down down-arrow"></i>
    </div>

        <div data-aos="fade-down" data-aos-duration="1000"    data-aos-delay="500" class="short-header-bottom-content col-md-10 mx-auto ">


    <?php   echo do_shortcode('[ecs-list-events design="calendar"]');
?>

            

	</div>



</div>
<?php get_footer(); ?>
