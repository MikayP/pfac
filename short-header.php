<?php
/**
* Template Name: Short Header
*/
?>

<?php get_header();

$video_file = get_field('video_file_url');
$sub_header = get_field('subheading');

get_template_part('/partials/secondary_header', 'header');
?>



        <div data-aos="fade-down" data-aos-duration="1000"    data-aos-delay="500" class="short-header-bottom-content 
         left-padding-wrapper col-md-10 mx-auto">


    <?php    if(have_posts()) while (have_posts() ) : the_post();

            the_content();
        
        endwhile;
?>

            

<?php get_footer(); ?>
