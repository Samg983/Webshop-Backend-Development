<!doctype html>
<html lang="nl">

<head>
	<title>Smootness Smoothies</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initialscale=1, minimum-scale=1">
	<link rel="icon" type="image/x-icon" href="img/smooth_logo.png">

	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/materialize.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet" type="text/css" />
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="js/materialize.js"></script>
	<script src="js/dropify.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>

<body class="hansHendrick">

	<!--NAV-->
	<ul id="slide-out" class="side-nav fixed">
		<li>
			<img id="logo_menu" alt="logo Smooth" src="img/smooth_logo.svg">
		</li>
		<li>

			<div class="input-field">
				<input id="search" type="search" required>
				<label class="label-icon" for="search"><i class="material-icons">search</i></label>
				<i class="material-icons">close</i>
			</div>


		</li>
		<li><a class="waves-effect waves-red" href="index.php">Home <i class="material-icons">store</i></a></li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header waves-effect waves-red">Smoothies <i class="material-icons">arrow_drop_down</i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="smoothies_fruit.php">Fruit</a></li>
							<li><a href="smoothies_groenten.php">Groenten</a></li>
							<li><a href="smoothies_hartig.php">Hartig</a></li>
							<li><a href="toebehoren.php">Toebehoren</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li><a class="waves-effect waves-red " href="winkelmandje.php">Winkelmandje <i class="material-icons">shopping_cart</i>  <span class="new badge red" data-badge-caption="item(s)">1</span></a></li>
		<li><a class="waves-effect waves-red" href="account.php">Account <i class="material-icons">account_circle</i></a></li>
		<li><a class="waves-effect waves-red" href="contact.php">Contact <i class="material-icons">info_outline</i></a></li>
		<li><a class="waves-effect waves-red" href="admin.php">Admin <i class="material-icons">supervisor_account</i></a></li>
	</ul>
	<a href="#" data-activates="slide-out" id="nav_icon" class="button-collapse hide-on-large-only">Menu<i class="material-icons">menu</i></a>
	<!--END NAV-->

	<header>
		<div class="carousel carousel-slider" data-indicators="true">
			<div class="carousel-item backgroundOne left-align" href="#one!">
				<div class="position-text-left">
					<h2>Smootness Smoothies</h2>
					<p>The best you can get!</p>
				</div>
			</div>
			<div class="carousel-item backgroundTwo right-align" href="#two!">
				<div class="position-text-right">
					<h2>Smootness Smoothies</h2>
					<p>Every sip is a hit!</p>
				</div>
			</div>
			<div class="carousel-item backgroundThree left-align" href="#three!">
				<div class="position-text-left white-text">
					<h2>Smootness Smoothies</h2>
					<p>Fresh fruit every day!</p>
				</div>
			</div>
			<div class="carousel-item backgroundFour right-align" href="#four!">
				<div class="position-text-right white-text">
					<h2>Smootness Smoothies</h2>
					<p>Awesome freshness!</p>
				</div>
			</div>
		</div>

	</header>


	<main class="wrapper">

		<div class="row" style="margin-top:1em">
			<h4 class="col s12 red-border">Account</h4>
		</div>

	</main>

	<footer class="page-footer red darken-4">
		<div class="wrapper">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Smoothness Smoothies</h5>
					<p class="grey-text text-lighten-4">Smooth levert u de meest frisse en lekkere smoothies! Bestel nu en de levering is binnen 1 uur!</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Site navigatie</h5>
					<ul class="footer-ul">
						<li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Smoothies</a>
							<ul class="footer-ul-second">
								<li><a class="grey-text text-lighten-3" href="smoothies_fruit.php">Fruit</a></li>
								<li><a class="grey-text text-lighten-3" href="smoothies_groenten.php">Groenten</a></li>
								<li><a class="grey-text text-lighten-3" href="smoothies_hartig.php">Hartig</a></li>
								<li><a class="grey-text text-lighten-3" href="toebehoren.php">Toebehoren</a></li>
							</ul>
						</li>
						<li><a class="grey-text text-lighten-3" href="winkelmandje.php">Winkelmandje</a></li>
						<li><a class="grey-text text-lighten-3" href="contact.php">Contact</a></li>
						<li><a class="grey-text text-lighten-3" href="admin.php">Admin</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="wrapper">
				&copy; 2017 Smooth
			</div>
		</div>
	</footer>
</body>

</html>