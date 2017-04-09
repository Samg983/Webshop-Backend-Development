<!doctype html>
<html lang="nl">
<?php
        include_once 'head.php';
        ?>

<body class="hansHendrick">

	<?php
        include_once 'upper.php';
        ?>


	<main class="wrapper">

		<div class="row" style="margin-top:1em">
			<h4 class="col s12 red-border">Contact</h4>
		</div>

		<div class="row">



			<div class="col s12 m8">
				<p>Indien u vragen of suggesties heeft, gelieve ons te contacteren via onderstaand formulier</p>
				<form>
					<div class="input-field col s12 m4">
						<input id="first_name" type="text" class="validate">
						<label for="first_name">Voornaam</label>
					</div>
					<div class="input-field col s12 m4">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Achternaam</label>
					</div>

					<div class="input-field col s12 m4">
						<input id="email" type="email" class="validate">
						<label for="email" data-error="Gelieve een juist email adres in te vullen">Email</label>
					</div>
					<div class="input-field col s12">
						<textarea id="reviewtext" class="materialize-textarea"></textarea>
						<label for="reviewtext ">Uw vraag of suggestie</label>
					</div>

					<button class="col s12 btn waves-effect waves-light red darken-4 " type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>

			<div class="col s12 m4">
				<p>Wie zijn we, wat doen we, wat zijn onze kenmerken. Dit kan u hier terugvinden. Lorum ipsum tekst enzoo</p>
			</div>

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