<?php
/*
Template Name: HomePage
*/
get_header();

    $gallery_group = [
        ['title' => 'gallery1_title', 'desc' => 'gallery1_description', 'img' => 'gallery1_image'],
        ['title' => 'gallery2_title', 'desc' => 'gallery2_description', 'img' => 'gallery2_image'],
        ['title' => 'gallery3_title', 'desc' => 'gallery3_description', 'img' => 'gallery3_image'],
        ['title' => 'gallery4_title', 'desc' => 'gallery4_description', 'img' => 'gallery4_image']
    ];

    // Get all sub pages in services page.
    $services_page_obj = get_page_by_title( 'Services' );

    $args = array(
        'post_parent' => $services_page_obj->ID,
        'post_type'   => 'page',
        'order'       => 'ASC',
        'post_status' => 'publish' 
    );
    $service_pages = get_children( $args );

    // Get accordion info from custom fields.
    $accordion_group = [
        ['title' => 'reason1', 'desc' => 'reason1_description'],
        ['title' => 'reason2', 'desc' => 'reason2_description'],
        ['title' => 'reason3', 'desc' => 'reason3_description'],
        ['title' => 'reason4', 'desc' => 'reason4_description']
    ];

    // Get featured images on homepage.
    $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );

    // Get recent our_work custom posts.
    $args = array(
        'numberposts'      => 5,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'our_work',
        'post_status'      => 'publish',
    );

    $custom_posts = get_posts( $args );    

    $testimonial_group = [
        ['author' => 'testimonial1_author', 'location' => 'testimonial1_location', 'comment' => 'testimonial1_comment', 'photo' => 'testimonial1_photo'],
        ['author' => 'testimonial2_author', 'location' => 'testimonial2_location', 'comment' => 'testimonial2_comment', 'photo' => 'testimonial2_photo'],
        ['author' => 'testimonial3_author', 'location' => 'testimonial3_location', 'comment' => 'testimonial3_comment', 'photo' => 'testimonial3_photo']
    ];
?>
    <!-- Start Hero Area -->
    <div class="hero-area">
    	<div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
            <ul class="slides">
                <li class="parallax" style="background-image: url(<?php echo get_field('slider1_image'); ?>);">
                	<div class="flex-caption text-align-center">
                    	<div class="container">
                        	<div class="flex-caption-table">
                            	<div class="flex-caption-cell">
                                	<div class="flex-caption-text">
                                        <h2><?php the_field('slider1'); ?></h2>
                                        <a href="/services" class="basic-link">Let's get started</a>
                                    </div>
                               	</div>
                          	</div>
                        </div>
                    </div>
                </li>
                <li class="parallax" style="background-image: url(<?php echo get_field('slider2_image'); ?>);">
                	<div class="flex-caption text-align-center">
                    	<div class="container">
                        	<div class="flex-caption-table">
                            	<div class="flex-caption-cell">
                                	<div class="flex-caption-text">
                                        <h2><?php the_field('slider2'); ?></h2>
                                        <a href="/services" class="basic-link">Let's get started</a>
                                    </div>
                               	</div>
                          	</div>
                        </div>
                    </div>
                </li>
          	</ul>
       	</div>
    </div>
    <div class="lgray-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/leaves3.png); background-repeat:repeat">
        <div class="container">
            <h4 class="stacked-title">Seasonal Self Help Tips</h4>
            <div class="row">
            <?php
            foreach ($gallery_group as $gallery) {
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-block">
                        <img src="<?php the_field($gallery['img']); ?>">
                        <h5><?php the_field($gallery['title']); ?></h5>
                        <p><?php the_field($gallery['desc']); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
            <div class="spacer-50"></div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8">
                        <h2>Services we offer</h2>
                        <hr class="sm">
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="services-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no">
                                <?php
                                foreach ($service_pages as $service_page) {
                                    $thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id($service_page->ID), 'thumbnail_size' );
                                ?>
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="<?php echo get_permalink($service_page->ID); ?>" class="media-box"><img src="<?php echo $thumb_src[0]; ?>" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h4><a href="<?php echo get_permalink($service_page->ID); ?>"><?php echo $service_page->post_title; ?></a></h4>
                                                <p><?php echo substr($service_page->post_content, 0, 200); ?>...</p>
                                                <a href="<?php echo get_permalink($service_page->ID); ?>" class="more">View service details</a>
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
                    <div class="spacer-40 visible-sm visible-xs"></div>
                    <div class="col-md-4">
                        <h2>Why choose us</h2>
                        <hr class="sm">
                        <div class="spacer-30"></div>
                        <div class="accordion" id="accordionArea">
                            <?php
                            foreach ($accordion_group as $key => $item) {
                            ?>
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize">
                                    <a class="accordion-toggle <?php echo $key == 0 ? 'active': ''; ?>" data-toggle="collapse" data-parent="#accordionArea" href="#item<?php echo $key; ?>"><?php echo the_field($item['title']); ?><i class="fa fa-angle-down"></i> </a>
                                </div>
                                <div id="item<?php echo $key; ?>" class="accordion-body <?php echo $key == 0 ? 'in': ''; ?> collapse">
                                    <div class="accordion-inner"><?php echo the_field($item['desc']); ?></div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
               	</div>
          	</div>
          	<div class="spacer-60"></div>
            <div class="dgray-bg parallax-light" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/leaves3.png); background-repeat:repeat">
            	<div class="container">
                	<h4 class="stacked-title">Recently Our Works</h4>
                    <div class="spacer-30"></div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="projects-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                            <?php
                            foreach ($custom_posts as $custom_post) {
                                $thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id($custom_post->ID), 'thumbnail_size' );
                            ?>
                                <li class="item">
                                    <div class="project-grid-item format-image">
                                        <a href="<?php echo get_permalink($custom_post->ID); ?>" class="media-box">
                                            <img src="<?php echo $thumb_src[0]; ?>" alt="">
                                        </a>
                                        <h4><a href="#"><?php echo $custom_post->post_title; ?></a></h4>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                          	</ul>
                      	</div>
                  	</div>
                    <div class="spacer-60"></div>
                </div>
            </div>
            <div class="padding-tb75 lgray-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/leaves1.png); background-repeat:repeat">
                <div class="container">
                	<div class="text-align-center">
                        <h2>Latest News</h2>
                        <hr class="sm">
                    </div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="blog-slider" data-columns="2" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <li class="item">
                                    <div class="blog-list-item format-standard">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                    <span class="date">
                                                        <span class="day">05</span>
                                                        <span class="month">Apr</span>
                                                    </span>
                                                </a>
                                                <div class="blog-item-info">
                                                	<a href="#" class="meta-data"><i class="fa fa-comments"></i> 10 Comments</a>
                                                	<div class="meta-data"><i class="fa fa-tags"></i> <a href="#">Benefits</a>, <a href="#">How to</a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7">
                                                <h4><a href="#">Time to stay with your family using our services</a></h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta...</p>
                                                <a href="#" class="basic-link">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="blog-list-item format-standard">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                    <span class="date">
                                                        <span class="day">01</span>
                                                        <span class="month">Apr</span>
                                                    </span>
                                                </a>
                                                <div class="blog-item-info">
                                                	<a href="#" class="meta-data"><i class="fa fa-comments"></i> 10 Comments</a>
                                                	<div class="meta-data"><i class="fa fa-tags"></i> <a href="#">Tips</a>, <a href="#">Tricks</a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7">
                                                <h4><a href="#">How to Care for your Lawn and Landscaping Before the Winter</a></h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta...</p>
                                                <a href="#" class="basic-link">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="blog-list-item format-standard">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                    <span class="date">
                                                        <span class="day">21</span>
                                                        <span class="month">Mar</span>
                                                    </span>
                                                </a>
                                                <div class="blog-item-info">
                                                	<a href="#" class="meta-data"><i class="fa fa-comments"></i> 10 Comments</a>
                                                	<div class="meta-data"><i class="fa fa-tags"></i> <a href="#">Tips</a>, <a href="#">Tricks</a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7">
                                                <h4><a href="#">How to make your lawn &amp; landscape look it's best?</a></h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta...</p>
                                                <a href="#" class="basic-link">Read more</a>
                                            </div>
                                        </div>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax parallax1 parallax-light padding-tb75" style="background-image:url(<?php echo $featured_image_src[0]; ?>);">
            	<div class="text-align-center">
                	<h2>We are your one stop location for all of<br>your outdoor needs,for both residential<br>and commercial properties.</h2>
                   	<a href="/services" class="btn btn-default btn-ghost btn-light">Explore our services</a>
                </div>
            </div>
            <div class="padding-tb75">
                <div class="container">
                	<div class="text-align-center">
                        <h2>What our clients says about us</h2>
                        <hr class="sm">
                    </div>
                    <div class="spacer-20"></div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <?php
                                foreach ($testimonial_group as $item) {
                                ?>
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p><?php echo the_field($item['comment']); ?></p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="<?php echo the_field($item['photo']); ?>" alt="" height="60" width="60"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong><?php echo the_field($item['author']); ?></strong><span><?php echo the_field($item['location']); ?></span>
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
            <div class="padding-tb45 shadow-row parallax-light accent-bg counters" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/leaves1.png); background-repeat:repeat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-tree fa-4x"></i> </div>
                            <div class="timer" data-perc="1500"> <span class="count">6400</span> </div>
                            <span class="fact">Trees Planted</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-users fa-4x"></i> </div>
                            <div class="timer" data-perc="36"> <span class="count">36</span> </div>
                            <span class="fact">Team Members</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-map-signs fa-4x"></i> </div>
                            <div class="timer" data-perc="24"> <span class="count">24</span> </div>
                            <span class="fact">Office Locations</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-hand-peace-o fa-4x"></i> </div>
                            <div class="timer" data-perc="1000"> <span class="count">1000</span> </div>
                            <span class="fact">Projects Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   	</div>
<?php
get_footer();