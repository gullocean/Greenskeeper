<?php
/**
 * The template for displaying our work custom post.
 */

get_header(); ?>
    <!-- Start Hero Area -->
    <div class="hero-area">
    	<div class="page-header dark">
        	<div class="container">
                <!-- Breadcrumb -->
                <?php echo get_breadcrumb(get_the_ID()); ?>
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
                    	<a href="http://placehold.it/550x550&amp;text=IMAGE+PLACEHOLDER" class="magnific-image"><img src="http://placehold.it/550x550&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                    </div>
                	<div class="col-md-4 col-sm-6">
                    	<span class="label label-default label-pic">After</span>
                    	<a href="http://placehold.it/550x550&amp;text=IMAGE+PLACEHOLDER" class="magnific-image"><img src="http://placehold.it/550x550&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                    </div>
                </div>
                <div class="spacer-40 visible-sm visible-xs"></div>
                <div class="parallax parallax1 parallax-light padding-tb75" style="background-image:url(http://placehold.it/1200x750&amp;text=IMAGE+PLACEHOLDER);">
                	<div class="overlay-accent"></div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" height="60" width="60"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong>Arthur Henry</strong><span>Florida</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="testimonial-block">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                        </blockquote>
                                        <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" height="60" width="60"></div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-in">
                                                <strong>Willie &amp; Heather Obrien</strong><span>Laketown</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
              	</div>
                <div class="spacer-40"></div>
                <h2>Request a free quote</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec.</p>
                <form class="quick-quote">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" placeholder="Your Name" class="form-control input-lg">
                        </div>
                        <div class="col-md-3">
                            <input type="email" placeholder="Your Email" class="form-control input-lg">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control selectpicker input-lg">
                                <option>Select Service</option>
                                <option>Fall and Spring Cleanup</option>
                                <option>Lawn Care</option>
                                <option>Landscape Design</option>
                                <option>Plants, Flowers, Soils</option>
                                <option>Tree, Shrub, Turf</option>
                                <option>Gutter Cleaning</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" value="Submit" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
   	</div>
<?php
get_footer();
