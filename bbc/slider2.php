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
			<ul id="typeselection">
				<li id="bicycle" data-value="1" class="selection">Cycle</li>
				<li id="bike" data-value="2" class="selection">Bike</li>
				<li id="car" data-value="3" class="selection">Car</li>
			</ul>
			Tyle S<input type="text" id="typeactive" />
				<div class="text-tip">
					Slide approximate distance you travel everyday.
				</div>
				<div id="slider-bg" class="slider" tabindex="-1" title="Slider">
  					<div id="slider-thumb" class="slider-handle"></div>
				</div>
				<!--
				<ul class="slider-a">
					<?php
						for($i = 0;$i <25;$i++){
							$j = 5 * $i;
							echo '<li>'.$j."</li>";
						}
					?>
				</ul>
-->
<p>Pixel value: <span id="slider-value">0</span></p>

<p>Converted value:
<input autocomplete="off" id="slider-converted-value" type="text" value="0" size="4" maxlength="4" />
</p>

<div id="bike-car" style="display:none;">
				<div class="text-tip">
					Select your Fuel Efficiency Kilometer/Liter.
				</div>
				<div id="slider-bg2" class="slider" tabindex="-1" title="Slider">
  					<div id="slider-thumb2" class="slider-handle"></div>
				</div>

				<p>Pixel value: <span id="slider-value2">0</span></p>

				<p>Your Average Fuel Usage:
				<input autocomplete="off" id="slider-converted-value2" type="text" value="0" size="4" maxlength="4" /> KM/Litre
				</p>
</div>
				<!-- End Slider Component -->
				<div id="myLogger"></div>
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