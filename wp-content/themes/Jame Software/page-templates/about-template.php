<?php
/*
Template Name: About
*/
get_header(); ?>
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
                        <img src="http://placehold.it/400x480&amp;text=IMAGE+PLACEHOLDER" alt="" class="align-left">
                        <h2>Get to know about the <span class="accent-color">GreensKeepers</span></h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui. Sed eu risus vel lacus varius varius. Vivamus blandit arcu quis turpis molestie, vulputate vulputate mi ullamcorper. Nunc lacinia eget libero ac cursus. Ut laoreet magna vitae lorem ornare scelerisque. Sed gravida imperdiet leo, ac mollis urna venenatis sit amet. Sed vitae lacus in libero tempor elementum. Cras eleifend hendrerit velit, vel tincidunt enim ornare nec. Proin nec purus leo.</p>
                        <div class="spacer-30"></div>
                        <hr class="sm">
                        <h2>Our Team</h2>
                        <p>Sed et dapibus erat, eget sollicitudin lacus. Etiam nec nisl nec velit iaculis ultrices. Phasellus neque arcu, rutrum ut quam et, consectetur porta libero. Morbi porttitor nunc ac ex consequat pulvinar.</p>
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="team-slider" data-columns="2" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3>Pablo Aguilar</h3>
                                                <span class="meta-data">Gardener</span>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3>Evan Lavoie</h3>
                                                <span class="meta-data">Gardener</span>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3>Christian Joss</h3>
                                                <span class="meta-data">Gardener</span>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5">
                        <div class="widget sidebar-widget widget_custom_menu">
                            <ul>
                                <li class="active"><a href="#">About us</a></li>
                                <li><a href="#">Book a service</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Frequently asked questions</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget text_widget">
                            <div class="feature-block">
                                <h5>Contact Info</h5>
                                <p>Suite 300 Houston<br>Texas - 77042 USA</p><br>
                                <p><strong>Call us toll free</strong><br><span class="accent-color">1800-9090-8089</span></p><br>
                            </div>
                        </div>
                        <div class="widget sidebar-widget text_widget">
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-file-pdf-o fa-2x"></i> Download price list</a>
                            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-file-pdf-o fa-2x"></i> Download brochure</a>
                        </div>
                        <div class="widget sidebar-widget">
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
                    </div>
                </div>
            </div>
            <div class="spacer-40"></div>
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