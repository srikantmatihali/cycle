<?php
//Index Page
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Bicycle vs Bike vs Cars</title>
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/slider/assets/skins/sam/slider.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="//use.typekit.net/jhh2pxe.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>
	<body>
		<div id="wrap">
			<ul id="blocks">
				<li id="block1" class="blk">
					<!-- Type Selection Block -->
					<div>
						<div><span class="text-title">Choose your vehicle.</span><span class="steps">Step 1 of 2</span></div>
						<ul id="typeselection">
							<li id="bicycle" data-value="1" class="selection cycle"></li>
							<li id="bike" data-value="2" class="selection bike"></li>
							<li id="car" data-value="3" class="selection car"></li>
						</ul>
					</div>
				</li>
				<li id="block2" class="blk">
					<!-- Distance, Fuel and other stuff -->
					<div>
						
					</div>
				</li>
				<li class="blk">
					<!-- Report -->
				</li>
			</ul>
		</div>
		<!-- All the JS code falls here -->
		<script src="js/yui-min.js"></script>
		<!-- Slider skin (optional) --> 
		<!-- Dependencies --> 
		<script src="js/yahoo-dom-event.js"></script>
		<script src="js/dragdrop-min.js"></script>
		<!-- Slider source file --> 
		<script src="js/slider-min.js"></script>
		<script src="js/selector-min.js"></script>
		<script src="js/event-delegate-min.js"></script>
		<script src="js/animation-min.js"></script>
		<!-- Main Script -->
		<script src="boot2.js"></script>
		<!-- End of JS code -->
	</body>
</html>