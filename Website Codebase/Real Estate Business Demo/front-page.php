<?php get_header(); ?>
<div class="global-container">

<!-- Hero Section -->
<div class="site-container">
<section class="hero">
<div class="container-fluid">
    <div class="row align-items-center position-relative">
        <!-- Top Centered Image -->
        <div class="top-center-image-wrapper">
            <a href="https://example.com" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/circle-banner-btn.png" alt="Clickable Image" />
            </a>
        </div>

        <!-- Text Content -->
        <div class="col-lg-6 col-12 hero-text-column">
            <h1 class="hero-title">Discover Your Dream Property with Estatein</h1>
            <p class="hero-subtitle lead mt-4">Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
            <div class="hero-buttons mt-5">
                <a href="#cta" class="btn btn-outline me-2">Get Started</a>
                <a href="#more-info" class="btn btn-primary">Learn More</a>
            </div>

            <!-- Stats Cards Below Buttons -->
            <div class="row mt-5">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="stat-card">
                        <div class="stat-number" data-count="120"><i class="fas fa-plus"></i> 200</div>
                        <p class="stat-description">Properties Listed</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="stat-card">
                        <div class="stat-number" data-count="50"><i class="fas fa-plus"></i> 10k</div>
                        <p class="stat-description">Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="stat-card">
                        <div class="stat-number" data-count="30"><i class="fas fa-plus"></i> 16</div>
                        <p class="stat-description">Properties Sold</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image -->
        <div class="col-lg-6 col-12">
            <div class="hero-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hero-banner.jpg" alt="Hero Image" class="full-width-img">
            </div>
        </div>
    </div>
</div>

</section>


<!-- Services Properties Section -->
<section class="service-section">
    <div class="service-row full-width-row">
        <div class="service-card">
            <div class="service-card-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/service-1.svg" alt="Service Icon 1" class="service-icon">
                <div class="service-arrow-icon">→</div>
            </div>
            <div class="service-card-description">Description for card 1</div>
        </div>
        <div class="service-card">
            <div class="service-card-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/service-2.svg" alt="Service Icon 2" class="service-icon">
                <div class="service-arrow-icon">→</div>
            </div>
            <div class="service-card-description">Description for card 2</div>
        </div>
        <div class="service-card">
            <div class="service-card-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/service-3.svg" alt="Service Icon 3" class="service-icon">
                <div class="service-arrow-icon">→</div>
            </div>
            <div class="service-card-description">Description for card 3</div>
        </div>
        <div class="service-card">
            <div class="service-card-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/service-4.svg" alt="Service Icon 4" class="service-icon">
                <div class="service-arrow-icon">→</div>
            </div>
            <div class="service-card-description">Description for card 4</div>
        </div>
    </div>
</section>






<!-- Featured Properties Section -->
<section class="featured-properties">
    <div class="featured-properties-container">
        <div class="image-column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/prehead-icon.svg" alt="Pre-heading-icon" class="pre-heading-icon">
        </div>
        
 <div class="intro-wrapper py-5">
    <div class="text-column">
        <h2>Featured Properties</h2>
        <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</p>
    </div>

    <div class="button-column">
        <a href="#" class="btn-outline">View All Properties</a>
    </div>
</div>

        <div class="carousel-wrapper">
            <?php
            $args = array(
                'post_type' => 'property',
                'posts_per_page' => 9, // 
                'post_status' => 'publish',
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                echo '<div class="carousel-container">'; 

                while ($query->have_posts()) : $query->the_post();
                   
                    $property_title = get_the_title();
                    $property_description = get_field('description');
                    $property_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $property_price = get_field('price');
                    $feature_one = get_field('feature_one');
                    $feature_two = get_field('feature_two');
                    $feature_three = get_field('feature_three');
                    ?>
                    <div class="property-card">
                        <div class="property-image">
                            <?php if ($property_image): ?>
                                <img src="<?php echo esc_url($property_image); ?>" alt="<?php echo esc_attr($property_title); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="property-details">
                            <h2><?php echo esc_html($property_title); ?></h2>
                            <?php if ($property_description): ?>
                                <p class="property-description"><?php echo esc_html($property_description); ?></p>
                            <?php endif; ?>

                            <div class="property-features">
                                <?php 
                                if ($feature_one): 
                                    $feature_one_parts = explode(' ', $feature_one);
                                    $icon_one = $feature_one_parts[0];
                                    $text_one = isset($feature_one_parts[1]) ? $feature_one_parts[1] : '';
                                    ?>
                                    <p class="feature"><i class="fas <?php echo esc_attr($icon_one); ?>"></i> <?php echo esc_html($text_one); ?></p>
                                <?php endif; ?>
                                <?php 
                                if ($feature_two): 
                                    $feature_two_parts = explode(' ', $feature_two);
                                    $icon_two = $feature_two_parts[0];
                                    $text_two = isset($feature_two_parts[1]) ? $feature_two_parts[1] : '';
                                    ?>
                                    <p class="feature"><i class="fas <?php echo esc_attr($icon_two); ?>"></i> <?php echo esc_html($text_two); ?></p>
                                <?php endif; ?>
                                <?php 
                                if ($feature_three): 
                                    $feature_three_parts = explode(' ', $feature_three);
                                    $icon_three = $feature_three_parts[0];
                                    $text_three = isset($feature_three_parts[1]) ? $feature_three_parts[1] : '';
                                    ?>
                                    <p class="feature"><i class="fas <?php echo esc_attr($icon_three); ?>"></i> <?php echo esc_html($text_three); ?></p>
                                <?php endif; ?>
                            </div>

                            <?php if ($property_price): ?>
                                <p class="property-price"><?php echo esc_html($property_price); ?></p>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>" class="view-property-btn">View Property</a>
                        </div>
                    </div>
                <?php endwhile;

                echo '</div>'; 
            else:
                echo '<p>No properties found.</p>';
            endif;

            wp_reset_postdata();
            ?>

            <!-- Carousel Controls -->
<!--             <div class="carousel-controls">
                <button class="prev-btn">Prev</button>
                <div class="pagination"></div>
                <button class="next-btn">Next</button>
            </div> -->
        </div>
    </div>
</section>











<section class="testimonial-section">
    <div class="testimonial-wrapper">
        <div class="image-column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/prehead-icon.svg" alt="Pre-heading-icon" class="pre-heading-icon">
        </div>
        
 <div class="intro-wrapper py-5">
    <div class="text-column">
        <h2>What Our Clients Say</h2>
        <p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
    </div>

    <div class="button-column">
        <a href="#" class="btn-outline">View All Testimonials</a>
    </div>
</div>
        <?php
   
        $args = array(
            'post_type' => 'testimonial', 
            'posts_per_page' => 3, // 
            'post_status' => 'publish',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            echo '<div class="testimonial-container">'; 
            while ($query->have_posts()) : $query->the_post();
               
                $star_rating = get_field('star_rating');
                $title = get_field('title');
                $description = get_field('description');
                $profile_image = get_field('profile_image');
                $author_name = get_field('author_name');
                $author_location = get_field('author_location');
        ?>
                <div class="testimonial-card">
                    <div class="star-rating">
                        <?php
                 
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $star_rating) {
                                echo '<i class="fas fa-star"></i>'; 
                            } else {
                                echo '<i class="far fa-star"></i>'; 
                            }
                        }
                        ?>
                    </div>
                    <h4><?php echo esc_html($title); ?></h4>
                    <p><?php echo esc_html($description); ?></p>
                    
                    <div class="author-info">
                        <?php if ($profile_image): ?>
                            <div class="profile-image">
                                <img src="<?php echo esc_url($profile_image['url']); ?>" alt="<?php echo esc_attr($author_name); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="author-details">
                            <p class="author-name"><?php echo esc_html($author_name); ?></p>
                            <p class="author-location"><?php echo esc_html($author_location); ?></p>
                        </div>
                    </div>
                </div>
        <?php endwhile;
            echo '</div>'; 
        else:
            echo '<p>No testimonials found.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </div>
</section>


<section class="faq-section">
    <div class="faq-cards-container">
        <?php
        
        $args = array(
            'post_type' => 'faq', 
            'posts_per_page' => 3, 
            'post_status' => 'publish',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                
                $title = get_field('title');
                $description = get_field('description');
                $button_text = get_field('button_text');
                $button_link = get_field('button_link');
        ?>
                <div class="faq-card">
                    <h4 class="faq-title"><?php echo esc_html($title); ?></h4>
                    <p class="faq-description"><?php echo esc_html($description); ?></p>
                    <?php if ($button_text && $button_link): ?>
                        <a href="<?php echo esc_url($button_link); ?>" class="faq-button"><?php echo esc_html($button_text); ?></a>
                    <?php endif; ?>
                </div>
        <?php endwhile;
        else:
            echo '<p>No FAQs found.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </div>
</section>


</div> <!-- End of site-container -->

<?php get_footer(); ?>
