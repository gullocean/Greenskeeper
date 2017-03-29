<?php
/*
Template Name: Service
*/
get_header(); ?>
    <!-- Start Hero Area -->
    <div class="hero-area">
        <div class="page-header" style="background-image:url(http://placehold.it/1400x300&amp;text=IMAGE+PLACEHOLDER); background-repeat:no-repeat; background-position:center center;">
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
                        <p class="lead">Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa.</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui. Sed eu risus vel lacus varius varius. Vivamus blandit arcu quis turpis molestie, vulputate vulputate mi ullamcorper. Nunc lacinia eget libero ac cursus. Ut laoreet magna vitae lorem ornare scelerisque. Sed gravida imperdiet leo, ac mollis urna venenatis sit amet. Sed vitae lacus in libero tempor elementum. Cras eleifend hendrerit velit, vel tincidunt enim ornare nec. Proin nec purus leo.</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-block text-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/tree-autumn.jpg" alt="Autumn">
                                    <h5>Tips &amp; Tricks to follow before Autumn</h5>
                                </div>
                            </div>
                            <div class="spacer-30 visible-sm visible-xs"></div>
                            <div class="col-md-8">
                            <div class="spacer-50"></div>
                                <div class="accordion" id="toggleArea">
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Lorem ipsum dolor sit amet, consectetur adipiscing elit <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                        <div id="collapseOne" class="accordion-body collapse">
                                            <div class="accordion-inner">Just add data-toggle="collapse" and a data-target to the element to automatically assign control of a collapsible element. The data-target attribute accepts a CSS selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you'd like it to default open, add the additional class in.
            
            To add accordion-like group management to a collapsible control, add the data attribute data-parent="#selector". Refer to the demo to see this in action.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Cras eleifend hendrerit velit <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                        <div id="collapseTwo" class="accordion-body collapse">
                                            <div class="accordion-inner">Just add data-toggle="collapse" and a data-target to the element to automatically assign control of a collapsible element. The data-target attribute accepts a CSS selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you'd like it to default open, add the additional class in.
            
            To add accordion-like group management to a collapsible control, add the data attribute data-parent="#selector". Refer to the demo to see this in action.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Etiam viverra <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                        <div id="collapseThird" class="accordion-body collapse">
                                            <div class="accordion-inner">Just add data-toggle="collapse" and a data-target to the element to automatically assign control of a collapsible element. The data-target attribute accepts a CSS selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you'd like it to default open, add the additional class in.
            
            To add accordion-like group management to a collapsible control, add the data attribute data-parent="#selector". Refer to the demo to see this in action.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFourth"> Nulla sagittis convallis neque at <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                        <div id="collapseFourth" class="accordion-body collapse">
                                            <div class="accordion-inner">Just add data-toggle="collapse" and a data-target to the element to automatically assign control of a collapsible element. The data-target attribute accepts a CSS selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you'd like it to default open, add the additional class in.
            
            To add accordion-like group management to a collapsible control, add the data attribute data-parent="#selector". Refer to the demo to see this in action.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-group panel">
                                        <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFifth"> Lorem ipsum dolor sit amet, consectetur adipiscing elit <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                        <div id="collapseFifth" class="accordion-body collapse">
                                            <div class="accordion-inner">Just add data-toggle="collapse" and a data-target to the element to automatically assign control of a collapsible element. The data-target attribute accepts a CSS selector to apply the collapse to. Be sure to add the class collapse to the collapsible element. If you'd like it to default open, add the additional class in.
            
            To add accordion-like group management to a collapsible control, add the data attribute data-parent="#selector". Refer to the demo to see this in action.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-60"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image margin-20"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui. Sed eu risus vel lacus varius varius.</p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image margin-20"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui. Sed eu risus vel lacus varius varius.</p>
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