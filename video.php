<?php
/**
* Template Name: Video Header
*/
?> 

<?php get_header();

$video_file = get_field('video_file_url');
?>

<div id="video-template">
<video autoplay controls muted>
<source src="<?php echo $video_file; ?>" type="video/mp4">
Your browser does not support the video tag.
</video>

<h1></h1>


<p><?php the_content(); ?></p>


</div>
<?php get_footer(); ?>