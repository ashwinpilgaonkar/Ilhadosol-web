<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../icon.png" sizes="40x40" type="image/png">
	<meta name="author" content="Magnus Fernandes, Amberzile">
	<meta name="description" content="Coastline Estates Goa present you Ilha do Sol, the perfect island homes at the perfect destination at Divar, Goa.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ilhadosol</title>
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
					<li class="active" id="gallery"><a href="#"><span><h2>GALLERY</h2></span></a></li>
					<li id="contact"><a href="../Contact/"><span><h2>CONTACT</h2></span></a></li>
				</ul>
			</div>
		</header>
		<section class="pictures">
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/1.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/2.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/3.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/4.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/5.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/6.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/7.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/8.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/9.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/10.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/11.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/12.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/13.jpg" class="img-responsive" alt="Gallery"></div>
			<div class="pic"><img src="http://ilhadosol.amberzile.com/Gallery/images/14.jpg" class="img-responsive" alt="Gallery"></div>
		</section>
		<footer class="footer">
			<h4>Powered by <a href="http://www.amberzile.com" target="_blank"><span>Amber<span>Zile</span></span></a></h4>
		</footer>
	</div>
	<script src="../js/lib/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
	  function initialize() {
	    var mapCanvas = document.getElementById('map');
	    var mapOptions = {
	      center: new google.maps.LatLng(15.4776515,73.801693),
	      zoom: 14,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    }
	    var map = new google.maps.Map(mapCanvas, mapOptions)
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script type="text/javascript" src="js/main.js"></script>
</body>