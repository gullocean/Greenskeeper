<?php
/*
Template Name: Service
*/
    get_header(); 

    // Get featured images on homepage.
    $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );

    // Get accordion info from custom fields.
    $accordion_group = [
        ['title' => 'reason1', 'desc' => 'reason1_description'],
        ['title' => 'reason2', 'desc' => 'reason2_description'],
        ['title' => 'reason3', 'desc' => 'reason3_description'],
        ['title' => 'reason4', 'desc' => 'reason4_description']
    ];

?>
    <!-- Start Hero Area -->
    <div class="hero-area">
        <div class="page-header" style="background-image:url(<?php echo the_field('hero_banner_image'); ?>); background-repeat:no-repeat; background-position:center center; background-size: cover;">
            <div class="container">
                <!-- Breadcrumb -->
                <?php get_breadcrumb(get_the_ID()); ?>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <p class="lead"><?php echo get_post_meta(get_the_ID(), 'sub_title', true); ?></p>
                        <hr>
                        <p>
                            <?php
                            $content_post = get_post(get_the_ID());
                            echo $content_post->post_content; 
                            ?>
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-block text-align-center">
                                    <img src="<?php echo $featured_image_src[0]; ?>" alt="Autumn">
                                    <h5><?php echo get_the_title(); ?></h5>
                                </div>
                            </div>
                            <div class="spacer-30 visible-sm visible-xs"></div>
                            <div class="col-md-8">
                            <div class="spacer-50"></div>
                                <div class="accordion" id="toggleArea">
                                <?php
                                foreach ($accordion_group as $key => $item) {
                                ?>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#item<?php echo $key; ?>"><?php echo the_field($item['title']); ?> <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                        <div id="item<?php echo $key; ?>" class="accordion-body collapse">
                                            <div class="accordion-inner"><?php echo the_field($item['desc']); ?></div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-60"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <a href="<?php echo the_field('service_bottom_image1'); ?>" class="magnific-image margin-20"><img src="<?php echo the_field('service_bottom_image1'); ?>" alt=""></a>
                                <p><?php echo the_field('service_bottom_title1'); ?></p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <a href="<?php echo the_field('service_bottom_image2'); ?>" class="magnific-image margin-20"><img src="<?php echo the_field('service_bottom_image2'); ?>" alt=""></a>
                                <p><?php echo the_field('service_bottom_title1'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                    <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();