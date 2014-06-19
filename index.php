<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Skrollr-breakpoints</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/compiled/style.css">

		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/too-small.css" media="all and (min-width:0px) and (max-width:699px)" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/small.css" media="all and (min-width:700px) and (max-width:799px)" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/large.css" media="all and (min-width:800px) and (max-width:999px)" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/x-large.css" media="all and (min-width:1000px)" data-skrollr-stylesheet />
	</head>

		<div id="dashboard-skrollr-x"></div>
		<?php include('img/cross-fixed.svg');?>
		<div id="skrollr-body">

			<div id="period">
				<div id="element">
					<div id="info"></div>
					<div class="sperator"></div>
					<div id="breakpoint"></div>
				</div>
				<ul class="blocks green">
					<li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li>
					<li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li>
				</ul>
				<?php include('img/cross.svg');?>
			</div>

		</div>

		<script src="vendors/jquery/jquery-1.11.1.min.js"></script>
		<script src="vendors/skrollr/skrollr.min.js"></script>
		<script src="vendors/skrollr/skrollr.stylesheets.min.js"></script>
		<script src="vendors/wlib/wlib.enhancements.js"></script>
		<script src="vendors/wlib/wlib.console.js"></script>
		<script src="vendors/wlib/wlib.events.js"></script>
		<script src="vendors/wlib/wlib.viewport.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>