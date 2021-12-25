<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <?php $theTitle = get_the_title();
    $theTitleExplode = explode(' ' ,trim($theTitle)); 
    $theTitleImplode = implode('-',$theTitleExplode); ?>
    <main id="page-<?php echo $theTitleImplode; ?>">
        <div class="hero container-fluid full-bg center-txt white-txt d-flex align-items-center justify-content-center" style="background-image:url('/wp-content/themes/BlankStarter/images/blank_theme_hero.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 z-index-1">
                        <h1>Blank Theme</h1>
                        <p>You did it! You installed the blank theme! Now customize it to your heart's content. ✌️</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </main>

    <? endwhile;
endif; ?>

<?php get_footer(); ?>