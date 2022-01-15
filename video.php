<?php
/**
* Template Name: Video Header
*/
?>

<?php get_header();

$video_file = get_field('video_file_url');
$sub_header = get_field('sub_header');

?>

<div id="video-template">
	<div class="video-container" style="background-image:url('https://source.unsplash.com/user/c_v_r/600x300')">
		<video autoplay controls muted>
			<source src="<?php echo $video_file; ?>" type="video/mp4">
			Your browser does not support the video tag.
		</video>
        <div class="col-md-8 justify-content-center h1-container">
            <h1 class=""><?php the_title(); ?></h1>
            <?php if($sub_header) ?><h2><?php if($sub_header) {echo $sub_header; ?></h2><?php } ?>
        </div>
		<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <h2><?php the_title(); ?></h2>
            <?php
            }
        }
?>
	</div>
	<p><?php the_content(); ?></p>


</div>
<?php get_footer(); ?>
