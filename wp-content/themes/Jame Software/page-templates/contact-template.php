<?php
/*
Template Name: Contact Us
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
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-7">
                        <h3>Get in touch</h3>
                        <p>We would be delighted to serve you with our services, just use the form below or choose the services you are interested in and we will be in touch with you in few hours. We’re available from Monday to Saturday, 06:00-18:00 to take your call.</p>
                        <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="mail/contact.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>Your Name (required)</label>
                                    <input type="text" id="name" name="name" class="form-control input-lg">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label>Your Email (required)</label>
                                    <input type="email" id="email" name="email" class="form-control input-lg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>Your Phone (required)</label>
                                    <input type="text" id="phone" name="phone" class="form-control input-lg">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label>Your Address</label>
                                    <input type="text" id="address" name="address" class="form-control input-lg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your message</label>
                                    <textarea class="form-control input-lg" id="comments" name="comments" rows="6"></textarea>
                                    
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg">Contact now</button>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>
                    <div class="spacer-40 visible-xs"></div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="accent-bg text_banner">
                            <h4 class="short">Working Hours</h4>
                            <ul class="working_hours">
                                <li>
                                    <span>Monday</span>
                                    <strong>06:00 - 18:00</strong>
                                </li>
                                <li>
                                    <span>Tuesday</span>
                                    <strong>06:00 - 18:00</strong>
                                </li>
                                <li>
                                    <span>Wednesday</span>
                                    <strong>06:00 - 18:00</strong>
                                </li>
                                <li>
                                    <span>Thursday</span>
                                    <strong>06:00 - 18:00</strong>
                                </li>
                                <li>
                                    <span>Friday</span>
                                    <strong>06:00 - 18:00</strong>
                                </li>
                                <li>
                                    <span>Saturday</span>
                                    <strong>06:00 - 18:00</strong>
                                </li>
                                <li>
                                    <span>Sunday</span>
                                    <strong>CLOSED</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="feature-block">
                            <h5>Contact Info</h5>
                            <p>Suite 300 Houston<br>Texas - 77042 USA</p><br>
                            <p><strong>Call us toll free</strong><br><span class="accent-color">1800-9090-8089</span></p><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div id="contact-map"></div>
            <div class="spacer-50"></div>
            <div class="container">
                <h5 class="short">Quick Contact</h5>
                <hr class="fw">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-text">
                            <h2>Sales</h2>
                            <p>John Bason</p>
                            <a href="mailto:sales@greenskeeper.com">sales@greenskeeper.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-text">
                            <h2>Services</h2>
                            <p>Nicole Elmes</p>
                            <a href="mailto:services@greenskeeper.com">services@greenskeeper.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-text">
                            <h2>Accounts</h2>
                            <p>Christine Harvey</p>
                            <a href="mailto:accounts@greenskeeper.com">accounts@greenskeeper.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-text">
                            <h2>Store</h2>
                            <p>Nicholas Carter</p>
                            <a href="mailto:store@greenskeeper.com">store@greenskeeper.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();