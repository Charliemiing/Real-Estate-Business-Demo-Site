<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <!-- Top Header -->
    <div class="top-header bg-image">
        <div class="container d-flex align-items-center position-relative">
            <!-- Centered Text -->
            <span class="mb-0 top-header-text">✨Discover Your Dream Property with Estatein <a href="#">Learn More</a></span>
            <!-- Toggle Button -->
            <button class="btn-close top-header-toggle" aria-label="Close">&times;</button>
        </div>
    </div>



    <!-- Main Header -->
    <div class="main-header">
        <div class="container">
                <div class="row align-items-center">
                    <!-- Logo Column -->
                    <div class="col-4 logo-column">
                        <a href="/" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Site Logo" class="logo-img">
                        </a>
                    </div>

                    <!-- Menu Column -->
                    <div class="col-4 menu-column">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'main-menu',
                            'container' => false
                        ));
                        ?>
                    </div>

                    <!-- Button Column -->
                    <div class="col-4 button-column text-end">
                        <a href="#cta" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
            </div>
    </div>

</header>