<?php
/*
Template Name: About
*/
    get_header(); 

    // Get featured images on homepage.
    $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );

    $args = array(
        'numberposts'      => -1,
        'orderby'          => 'date',
        'order'            => 'ASC',
        'post_type'        => 'our_team',
        'post_status'      => 'publish',
    );

    $our_teams = get_posts( $args );

    $testimonial_group = [
        ['author' => 'testimonial1_author', 'location' => 'testimonial1_location', 'comment' => 'testimonial1_comment', 'photo' => 'testimonial1_photo'],
        ['author' => 'testimonial2_author', 'location' => 'testimonial2_location', 'comment' => 'testimonial2_comment', 'photo' => 'testimonial2_photo'],
        ['author' => 'testimonial3_author', 'location' => 'testimonial3_location', 'comment' => 'testimonial3_comment', 'photo' => 'testimonial3_photo']
    ];
?>
    <!-- Start Hero Area -->
    <div class="hero-area">
        <div class="page-header dark">
            <div class="container">
                <!-- Breadcrumb -->
                <?php get_breadcrumb(get_the_ID()); ?>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
        <div class="content padding-b0">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-7">
                        <img src="<?php echo $featured_image_src[0]; ?>" alt="" class="align-left">
                        <h2><?php echo get_post_meta(get_the_ID(), 'sub_title', true); ?></h2>
                        <p>
                            <?php
                            $content_post = get_post(get_the_ID());
                            echo $content_post->post_content; 
                            ?>
                        </p>
                        <div class="spacer-30"></div>
                        <hr class="sm">
                        <h2>Our Team</h2>
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="team-slider" data-columns="2" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                    <?php
                                    foreach ($our_teams as $our_team) {
                                        $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id($our_team->ID), 'thumbnail_size' ); 
                                    ?>
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="<?php echo $featured_image_src[0]; ?>" class="magnific-image media-box"><img src="<?php echo $featured_image_src[0]; ?>" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3><?php echo $our_team->post_title; ?></h3>
                                                <span class="meta-data"><?php echo get_post_meta($our_team->ID, 'role', true); ?></span>
                                                <p><?php echo $our_team->post_content; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php    
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5">
                        <div class="widget sidebar-widget text_widget">
                            <div class="feature-block">
                                <h5>Contact Info</h5>
                                <p>Suite 300 Houston<br>Texas - 77042 USA</p><br>
                                <p><strong>Call us toll free</strong><br><span class="accent-color">1800-9090-8089</span></p><br>
                            </div>
                        </div>
                        <div class="widget sidebar-widget">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <?php
                                        // Get recent testimonials custom posts.
                                        $testimonial_args = array(
                                            'numberposts'      => -1,
                                            'orderby'          => 'date',
                                            'order'            => 'DESC',
                                            'post_type'        => 'testimonials',
                                            'post_status'      => 'publish',
                                        );

                                        $testimonial_posts = get_posts( $testimonial_args );

                                        foreach ($testimonial_posts as $item) {
                                            $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), 'thumbnail_size' );
                                        ?>
                                        <li class="item">
                                            <div class="testimonial-block">
                                                <blockquote>
                                                    <p><?php echo $item->post_content; ?></p>
                                                </blockquote>
                                                <div class="testimonial-avatar"><img src="<?php echo $featured_image_src[0]; ?>" alt="" height="60" width="60"></div>
                                                <div class="testimonial-info">
                                                    <div class="testimonial-info-in">
                                                        <strong><?php echo $item->post_title; ?></strong><span><?php echo get_post_meta($item->ID, 'location', true); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php    
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-40"></div>
        </div>
    </div>
<?php
get_footer();