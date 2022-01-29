<!DOCTYPE html>
<html <?php language_attributes(); $uploads = wp_upload_dir();  ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<header class="d-flex align-items-center container-fluid desktop-nav " data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <a class="image-container center-txt" href="/">
                <img src="<?php echo  esc_url( $uploads['baseurl'] . '/2022/01/Transparent-PfAC-Logo-Text.png'); ?> " alt="logo">
            </a>
            <nav class="navigation-menu">
                <?php $args = [ 'theme_location' => 'primary' ];
                wp_nav_menu( $args ) ?>
            </nav>
            <div id="burger-nav" role="button" aria-label="Open navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<nav class="mobile-nav d-flex
justify-content-center align-items-center">
<?php $primary = [ 'theme_location' => 'primary' ];
        wp_nav_menu( $primary ) ?>
</nav>
 
<body <?php body_class(); ?>>
 