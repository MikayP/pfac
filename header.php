<!DOCTYPE html>
<html <?php language_attributes(); $uploads = wp_upload_dir();  ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name=viewport content="width=device-width, initial-scale=1" content="noindex, nofollow">
    <title><?php echo get_the_title($post->ID); ?></title>
    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<header  class="justify-content-center  container-fluid desktop-nav ">
    <div class="center-txt">
            <a class="image-container center-txt" href="/">
                <img src="<?php echo  esc_url( $uploads['baseurl'] . '/2022/01/Transparent-PfAC-Logo-Text.png'); ?> " alt="logo">
            </a>
            <nav class="navigation-menu">
                <?php $args = [ 'theme_location' => 'primary' ];
                wp_nav_menu( $args ) ?>
            </nav>
            <a class="menu-social-icon" href="https://www.facebook.com/groups/PflugervilleArts/"><i class="fab fa-facebook-f"></i></a>
            <div id="burger-nav" role="button" aria-label="Open navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>

        </div>
    </div>
</header>
<nav class="mobile-nav d-flex
justify-content-center ">
<a class="image-container center-txt" href="/">
                <img src="<?php echo  esc_url( $uploads['baseurl'] . '/2022/01/Transparent-PfAC-Logo-Text.png'); ?> " alt="logo">
            </a>
<?php $primary = [ 'theme_location' => 'primary' ];
        wp_nav_menu( $primary ) ?>
                    <a class="menu-social-icon" href="https://www.facebook.com/groups/PflugervilleArts/"><i class="fab fa-facebook-f"></i></a>
</nav>
 
<body <?php body_class(); ?>>
<a id="button-to-top"></a>
<div class="main-wrapper">