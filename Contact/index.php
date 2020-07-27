<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../icon.png" sizes="40x40" type="image/png">
	<link rel="icon" href="../icon.svg" sizes="16x16" type="image/svg">
	<meta name="description" content="Coastline Estates Goa present you Ilha do Sol, the perfect island homes at the perfect destination at Divar, Goa.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ilha do Sol</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="mainwrapper">
		<header>
			<div class="logo">
				<img src="../images/logop.png" alt="Ilha do Sol" class="img-responsive">
			</div>
			<div class="menu">
				<ul>
					<li id="home"><a href="../"><span><h2>HOME</h2></span></a></li>
					<li id="plan"><a href="../Plan/"><span><h2>PLAN</h2></span></a></li>
					<li id="gallery"><a href="../Gallery/"><span><h2>GALLERY</h2></span></a></li>
					<li class="active" id="contact"><a href="#"><span><h2>CONTACT</h2></span></a></li>
				</ul>
			</div>
		</header>
		<section class="three">
			<section class="fourth">
				<h2><span>Built around the philosophy of responsible premium living. Make it yours!</span></h2>
			</section>
			<section class="contact">
				<div id="map"></div>
				<div class="address">
					<h1>CONTACT</h1><br>
					<h2>M/S COASTLINE ESTATES</h2>
					<h2>AG1, Campo Verde</h2>
					<h2>Caranzalem, Goa</h2>
					<h2>403002</h2><br>
					<h2>Contact - Mr. A. D. Sardesai</h2>
					<h2>Tel: +91-9822486109</h2><br>
					<form action="mail.php" method="POST">
						<input type="text" name="fname" placeholder="YOUR NAME *">
						<input type="email" name="email" placeholder="YOUR EMAIL *">
						<input type="number" name="cno" placeholder="YOUR CONTACT *">
						<textarea name="message" id="message" cols="30" rows="10" placeholder="MESSAGE *"></textarea>
						<input type="submit" value="SUBMIT" id="button">
					</form>
				</div>
			</section>
		</section>
		<footer class="footer">
			<h4>© 2020 Coastline Estates. All rights reserved.</h4>
		</footer>
	</div>
	<script src="../js/lib/jquery.min.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=<API_KEY>&callback=initMap"></script>
	<script>
		function initMap() {
			var siteLocation = {lat: 15.5236638, lng: 73.8978474};
			var mapCanvas = document.getElementById('map');

			var mapOptions = {
			center: siteLocation,
			zoom: 14
			}

			var map = new google.maps.Map(mapCanvas, mapOptions)

			var markerOptions = {
			position: siteLocation,
			map: map,
			title: 'Ilha do Sol'
			}
			var marker = new google.maps.Marker(markerOptions);

			var contentString = 
			'<div><strong>Ilha do Sol</strong><br>'+
      		'Piedade, Navelim, <br> Divar, Goa <br> 403403 </div>'+
      		'<br><div style="border-top: 1px solid rgb(204, 204, 204); margin-top: 9px; padding: 6px; font-size: 13px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; font-family: Roboto, Arial;">'+
      		'<a href="https://www.google.com/maps/place/Ilha+do+Sol/@15.52351,73.8874808,14z/data=!4m5!3m4!1s0x0:0xd36de4cd4c4f7b31!8m2!3d15.5236663!4d73.8978463" target="_blank" rel="noopener" style="cursor: pointer; color: rgb(66, 127, 237); text-decoration: none;">View on Google Maps</a></div>';

			var infowindow = new google.maps.InfoWindow({
          		content: contentString
			});

			marker.addListener('click', function() {
          		infowindow.open(map, marker);
        	});
		}
		// google.maps.event.addDomListener(window, 'load', initMap);
	</script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>