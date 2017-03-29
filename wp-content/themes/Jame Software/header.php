<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */

?><!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<?php $layout_class = ( function_exists( 'get_layout_class' ) ) ? get_layout_class() : ''; ?>
<body class="jame-software">
	<div class="body <?php echo esc_attr( $layout_class ); ?>">
		<!-- Start Header -->
	    <div class="header-wrapper">
	    	<header class="site-header">
	        	<div class="container">
	                <div class="site-logo">
	                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="Logo"></a>
	                </div>
	                <a href="#" id="menu-toggle">Menu</a>
	                <div class="site-header-right">
		                <nav role="menu">
		                <?php wp_custom_menu('primary'); ?>
						</nav>
	                </div>
	            </div>
	        </header>
	    </div>
	    <!-- End Header -->