<?php
/**
 * The template for displaying the footer.
 */
?>
	    <!-- Site Footer -->
	    <div class="site-footer">
	    	<div class="container">
	        	<div class="row">
	            	<div class="col-md-4 col-sm-6">
	                	<div class="widget footer_widget">
	                    	<h4 class="widgettitle"><i class="fa fa-info-circle"></i> About GreensKeeper</h4>
	                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></p>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
	                    </div>
	                </div>
	            	<div class="col-md-4 col-sm-6">
	                	<div class="widget footer_widget widget_links">
	                    	<h4 class="widgettitle"><i class="fa fa-navicon"></i> Quick Links</h4>
	                        <nav role="menu">
	                        <?php wp_custom_menu('footer-menu'); ?>
	                        </nav>
	                    </div>
	                </div>
	            	<div class="col-md-4 col-sm-6">
	                	<div class="widget footer_widget">
	                    	<h4 class="widgettitle"><i class="fa fa-calculator"></i> Request an Estimate</h4>
	                        <form method="post" id="quoteform" name="quoteform" class="quick-quote clearfix" action="mail/quote.php">
	                            <input name="quote-name" id="quote-name" type="text" placeholder="Your Name" class="form-control">
	                            <input name="quote-email" id="quote-email" type="email" placeholder="Your Email" class="form-control">
	                            <select name="quote-service" id="quote-service" class="form-control selectpicker">
	                            <option>Select Service</option>
	                                <option>Fall and Spring Cleanup</option>
	                                <option>Lawn Care</option>
	                                <option>Landscape Design</option>
	                                <option>Plants, Flowers, Soils</option>
	                                <option>Tree, Shrub, Turf</option>
	                                <option>Gutter Cleaning</option>
	                            </select>
	                            <input id="quote-submit" name="quote-submit" type="submit" value="Submit" class="btn btn-primary btn-block">
	            				<div id="Quote-message" class="accent-color"></div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Site Footer -->
	    <div class="site-footer-bottom">
	    	<div class="container">
	        	<div class="row">
	            	<div class="col-md-6 col-sm-6">
	                	<div class="copyrights-col-left">
	                    	<p>&copy; 2016 GreensKeeper. All Rights Reserved</p>
	                    </div>
	                </div>
	            	<div class="col-md-6 col-sm-6">
	                	<div class="copyrights-col-right">
	                        <ul class="social-icons-rounded social-icons-colored pull-right">
	                            <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
	                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
	                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
	                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
	                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
	                        </ul>
	                    </div>
	               	</div>
	           	</div>
	      	</div>
	  	</div>
	</div>

<?php if ($pagename == 'contact') { ?>	
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDLOARVFujmJlq072j6_Z_YtIRnVAvHprs"></script> <!-- Google maps api -->
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 14,

				scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.6700, -73.9400), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('contact-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'GreensKeeper'
            });
        }
    </script>

<?php } ?>
</body>
</html>
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
<?php wp_footer(); ?>