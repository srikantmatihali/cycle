<!DOCTYPE html>
<html>
	<head>
		<script src="js/yui-min.js"></script>
		<!-- Slider skin (optional) --> 
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/slider/assets/skins/sam/slider.css">
		<style type="text/css">
*:focus
			{
			    outline: none;
			}
    #slider-bg,#slider-bg2 {
			    //background:url(images/slider-handle.png) 5px 0 no-repeat;
			}
			#slider-thumb,#slider-thumb2{
			    left: 0;
			}
			.slider-handle{
				background:url(images/slider_handle.png) no-repeat 43% 120%;
				width:27px;
				height:27px;
				top: -8px !important;
				margin: 0px;
			}

			.slider-handle:hover{
				background:url(images/slider_handle.png) no-repeat 43% 0%;
				cursor: pointer;
			}
			.slider{
				position: relative;
				text-align: left;
				background: #D7D7D7;
				width:627px;
				height:8px;

				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px;
			}

			.slider-a{
				margin-left: -28px;
				margin-top: 9px;
				display:block;
			}

			.slider-a li{
				float: left;
				margin-right: 12px;
				list-style-type: none;
				list-style-image: none;
				font-size: 12px;
			}

			.selection{
				cursor: pointer;
			}
</style>

	</head>
	<body>
		<div id="wrapper">
			<input type="text" id="distancedata"/>
			<div id="distance">Submit</div>
			<div>Cycle Fuel Cost: <span id="cycle_cost"></span></div>
			<div>Bike Fuel Cost: <span id="bike_cost"></span></div>
			<div>Car Fuel Cost: <span id="car_cost"></span></div>
			<hr/>
			<div>Cycle Time: <span id="cycle_time"></span></div>
			<div>Bike Time: <span id="bike_time"></span></div>
			<div>Car Time: <span id="car_time"></span></div>
		</div>
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
	</body>
</html>