<?php
/*
Template Name: Services
*/
get_header(); 

// Get all sub pages in services page.
$services_page_obj = get_page_by_title( 'Services' );

$args = array(
    'post_parent' => $services_page_obj->ID,
    'post_type'   => 'page',
    'order'       => 'ASC',
    'post_status' => 'publish' 
);
$service_pages = get_children( $args );

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
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-9 col-sm-8">
                    	<ul class="isotope-grid row">
                            <?php
                            foreach ($service_pages as $service_page) {
                            $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id($service_page->ID), 'thumbnail_size' );
                            ?>
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="<?php echo get_permalink($service_page->ID); ?>" class="media-box"><img src="<?php echo $featured_image_src[0]; ?>" alt=""></a>
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
                    <div class="col-md-3 col-sm-4">
                    <?php get_sidebar(); ?>
                    </div>
                </div>
           	</div>
        </div>
   	</div>
<?php
get_footer();