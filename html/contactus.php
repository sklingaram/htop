<?php include "header.php"; ?>
<?php include "navbar.php"; ?>

<div class="contact_page">
	<div class="container">
	<div class="contact_us">
		<h2>Contact Us</h2>
		<p>Zerobug Academy <br> No.19, Little mount,<br>Velachery Road,<br>Saidapet, Chennai-600 015<br>PH: +91-9750061584 / 9791040581</p>
	</div>
	</div>
	<div id="mapCanvas"></div>
	</div>
</div>


<?php include "footer.php"; ?>	
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPOFG7bs8HA9zRQEM-BdXn4XOj6_QYTrw&libraries=drawing,places"
     ></script>
		        <script type="text/javascript">
		var infoWindow = new google.maps.InfoWindow();

var infowindow = new google.maps.InfoWindow({
  size: new google.maps.Size(100, 50)
});
var geocoder = new google.maps.Geocoder();

               function initialize() {
                var latLng = new google.maps.LatLng(12.9888254, 80.222356);
                var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                    zoom: 15,
                    center: latLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
					
                });
                var marker = new google.maps.Marker({
                    position: latLng,
                    title: 'Point A',
                    map: map,
                   // draggable: true
					
                });
				google.maps.event.addListener(marker, 'click', function() {
				infoWindow.open(map, marker);
      });
	   
            }
		
	         // Onload handler to fire off the app.
            google.maps.event.addDomListener(window, 'load', initialize);
				</script>