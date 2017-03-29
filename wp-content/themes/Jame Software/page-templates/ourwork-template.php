<?php
/*
Template Name: Our Work
*/

get_header(); 

// Get our works custom posts.
$cat_group = [];
$args = array(
    'numberposts'      => -1,
    'orderby'          => 'date',
    'order'            => 'ASC',
    'post_type'        => 'our_work',
    'post_status'      => 'publish',
);

$custom_posts = get_posts( $args );

foreach ($custom_posts as $custom_post) {
    $term = get_the_category($custom_post->ID);

    if (!in_array($term[0]->cat_name, $cat_group)) {
        array_push($cat_group, $term[0]->cat_name);
    }
}

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
                <div class="grid-filter">
                    <ul class="nav nav-pills sort-source" data-sort-id="projects" data-option-key="filter">
                        <li data-option-value="*" class="active"><a href="#"><span>Show All</span></a></li>
                        <?php
                        foreach ($cat_group as $cat) {
                        ?>
                        <li data-option-value=".<?php echo strtolower($cat); ?>"><a href="#"><span><?php echo $cat; ?></span></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="row">
                    <ul class="sort-destination isotope project-items" data-sort-id="projects">
                        <?php
                        foreach ($custom_posts as $custom_post) {
                            $thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id($custom_post->ID), 'thumbnail_size' );
                            $cat = get_the_category($custom_post->ID);
                        ?>
                        <li class="col-md-4 col-sm-6 col-xs-6 grid-item project-grid-item <?php echo strtolower($cat[0]->cat_name); ?> format-standard">
                            <a href="<?php echo get_permalink($custom_post->ID); ?>" class="media-box">
                                <img src="<?php echo $thumb_src[0]; ?>">
                            </a>
                            <a href="<?php echo get_permalink($custom_post->ID); ?>" class="project-title"><?php echo $custom_post->post_title; ?></a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();