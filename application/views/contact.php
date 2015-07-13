<?php $this->load->view('header'); ?>

    <section class="header_contact">


        <!--
            You need to include this script on any page that has a Google Map.
            When using Google Maps on your own site you MUST signup for your own API key at:
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key
            After your sign up replace the key in the URL below or paste in the new script tag that Google provides.
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcrBawVgCJkfQoPKZI4AYLnupOXFFPqH0&sensor=false"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(50.850340, 4.351710), //

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(50.850340, 4.351710),
                    map: map,
					icon: '<?php echo base_url(); ?>assets/images/pointer.png',
                    title: 'Snazzy!'
                });
            }
        </script>

	<div id="map"></div>

	</section>


    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
				<div class="col-lg-6 contact_form ">
				<p>Have a Question?</p>
				<h2>Want An Offer?</h2>
					
					<?php
						$show = 'hide';
						if($this->session->userdata('show'))
						{
							$show = 'show';
						}
						
						$this->session->unset_userdata('show');
					?>
                    <div class="row <?php echo $show; ?>">
                        <div class="col-xs-12">

                            <!-- contact__title -->
                            <div class="alert alert-success">Thank you for your email, we'll get back to you asap</div>
                            <!-- /contact__title -->

                        </div>
                    </div>
					<form class="form-inline" role="form" method="post" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact/contact_us">
					  <div class="form-group">
						<input type="text" class="form-control" id="contact__name" name="contact__name" placeholder="Full Name"/>

						<input type="text" class="form-control" id="contact__phone" name="contact__phone" placeholder="Phone Number"/>
					  <br/>
						<input type="email" class="form-control" id="contact__mail" name="contact__mail" placeholder="Email Address"/>

						<input type="text" class="form-control" id="contact__company" name="contact__company" placeholder="Company"/>
					  <br/>
						<textarea class="form-control c_textarea" id="contact__message" name="contact__message" placeholder="Type Your Message Here..."></textarea>
					<br/>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-4 contact_details">
					<div class="col-lg-12">

					<p>More Info</p>
					<h2>Where We Are?</h2>
					<ul>
						<li> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Rue Blaes 249, 1000 Bruxelles,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Centre-Ville, Marolles.</li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 02 511 03 18</li>
						<li><span class="icon_mail glyphicon"></span> info@perfectabrussels.be</li>
					</ul>
					</div>
					<div class="col-lg-12 social_sec">
					<p>Stay Tuned</p>
					<h2>Follow Us</h2>
					<div class="social">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="linked-in"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </div>
					</div>
				</div>
		</div>

    </section>
	<section class="footer_contact">
		<div class="container">
            <div class="row">
				<div class="col-lg-9">
					<h2 class="thick-font">Discover Our Work Clothing</h2>
				</div>
				<div class="col-lg-3">
						<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing"><button>Browse Our Catalog</button></a>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('footer'); ?>