<?php
/**
 * The template for displaying our work custom post.
 */

    get_header(); 
    $featured_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );

?>
    <!-- Start Hero Area -->
    <div class="hero-area">
    	<div class="page-header dark">
        	<div class="container">
            	<h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8 col-sm-12">
                    	<h2 class="accent-color"><?php echo get_the_title(); ?></h2>
                        <p>
	                    	<?php 
	                    	$content_post = get_post(get_the_ID());
	                        echo $content_post->post_content; 
	                        ?>
                        </p>
                    </div>
                	<div class="col-md-4 col-sm-6">
                    	<a href="<?php echo get_permalink(get_the_ID()); ?>" class="magnific-image"><img src="<?php echo $featured_image_src[0]; ?>" alt=""></a>
                    </div>
                </div>
                <div class="spacer-40 visible-sm visible-xs"></div>
            </div>
        </div>
   	</div>
<?php
get_footer();
