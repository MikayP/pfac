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
        <div class="col-md-8 justify-content-center h1-container">
            <h1 class=""><?php the_title(); ?></h1>
            <?php if($sub_header) { ?><h4><?php echo $sub_header; ?></h4><?php } ?>
        </div>
        </div>
        <div class="video-template-content col-md-10 mx-auto">

		<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <a class="center-txt" href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <?php  
        }
        
        }


        if(have_posts()) while (have_posts() ) : the_post();

            the_content();
        
        endwhile;
?>

            

	</div>



</div>
<?php get_footer(); ?>
