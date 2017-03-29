<?php
/**
 * The template for displaying our work custom post.
 */

    get_header(); 

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
            	<h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4 col-sm-12">
                    	<h2 class="accent-color"><?php echo get_the_title(); ?></h2>
                        <p>
	                    	<?php 
	                    	$content_post = get_post(get_the_ID());
	                        echo $content_post->post_content;
	                        ?>
                        </p>
                    </div>
                	<div class="col-md-4 col-sm-6">
                    	<span class="label label-default label-pic">Before</span>
                    	<a href="<?php echo the_field('before_image'); ?>" class="magnific-image"><img src="<?php echo the_field('before_image'); ?>" alt=""></a>
                    </div>
                	<div class="col-md-4 col-sm-6">
                    	<span class="label label-default label-pic">After</span>
                    	<a href="<?php echo the_field('after_image'); ?>" class="magnific-image"><img src="<?php echo the_field('after_image'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="spacer-40 visible-sm visible-xs"></div>
                <div class="parallax parallax1 parallax-light padding-tb75" style="background-image:url(<?php echo the_field('testimonial_background'); ?>);">
                	<div class="overlay-accent"></div>
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
<?php
get_footer();
