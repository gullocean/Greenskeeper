<?php
/**
 * @package Jame Software
 */
	$cur_page_id = get_the_ID();
	$cur_page_title = get_the_title();
	$cur_page_url = get_permalink();

	$services_page_obj = get_page_by_title( 'Services' );

	$args = array(
		'post_parent' => $services_page_obj->ID,
		'post_type'   => 'page',
		'order'       => 'ASC',
		'post_status' => 'publish' 
	);
	$service_pages = get_children( $args );

?>
	<div class="widget sidebar-widget widget_custom_menu">
		<ul>
	    	<li class="<?php echo $cur_page_id == $services_page_obj->ID ? 'active' : ''; ?>"><a href="<?php echo get_permalink($services_page_obj->ID); ?>">All Services</a></li>
	    	<?php
	    	foreach ($service_pages as $service_page) {
	    	?>
	    	<li class="<?php echo $cur_page_id == $service_page->ID ? 'active': ''; ?>"><a href="<?php echo get_permalink($service_page->ID); ?>"><?php echo $service_page->post_title; ?></a></li>
	    	<?php	
	    	}
	    	?>
	    </ul>
	</div>
	<div class="widget sidebar-widget text_widget">
		<div class="accent-bg text_banner">
	    	<h4>Have questions about our services?</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
	        <a href="/contact" class="btn btn-default btn-ghost btn-light">Contact us</a>
	    </div>
	</div>