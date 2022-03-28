<div class="short-header"  >
	<div class="short-header_top_container row justify-content-center"
    style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
		<div data-aos="fade-up" data-aos-duration="1000"    data-aos-delay="500"  class="col-12 justify-content-center h1-container  d-flex ">
			<h1 class="content "><?php the_title(); ?></h1>
		</div>
		<?php if ( get_post_type() === 'post' ) { get_template_part('/partials/social_icons', 'header'); } ?>

	</div>
    </div>