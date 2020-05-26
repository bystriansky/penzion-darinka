<?php

include 'header.php';

?>
	<header class="header-back-rezervacia">
		<?php

		include 'nav.php';

		?>

		<div class="container header-text-wrapper">
			<h1 class="header-text">Check availability of rooms with the best price offer</h1>
		</div>

		<div class="container box-center">
			<a href="#rezevacia-id" class="link-btn">Go to the reservation form</a>
		</div>
	</header>
<!-- main ------------------------------------>
	<div class="akcia container">
		<h2><a href="Akciove-ponuky.pdf" target="_blank">Try out our special offers .pdf <i class="fas fa-file-pdf"></i></a></h2>
	</div>

	<main id="rezevacia-id" class="container">

		<div class="kontakt-space"></div>
		<div class="ubyovanie-space"></div>

		<h2 class="box-center">Check availability by sending a form</h2>
		<p class="box-center">Your response will be dealt with immediately and we will reply in a while</p>
		<div class="form-style">
		<form action="contactform1.php" method="post" name="contactform"autocomplete="on">

			<div class="row-1">
				<label>
					Arrival
					<input id="today" min="value" type="date" name="start" required>
				</label>
			</div>

			<div class="row-1">
				<label>
					Departure
					<input id="tomorrow" type="date" name="end" required>
				</label>
			</div>
			<br>
			<div class="row-1">
				<label>
					Number of adults
					<input id="adults" type="number" name="pocetdospelych" value="2" min="1" max="30" required>
				</label>
			</div>

			<div class="row-1">
				<label>
					Number of children
					<input id="children" type="number" name="pocetdeti" value="0" min="0" max="10">
				</label>
			</div>

			<div class="check-box">
				<h3>Room type</h3>
		  		<label>
		  			<p><input type="radio" name="izba" value="Dvojlôžková Deluxe" checked> Double room Deluxe</p>
		  		</label>
				<label>
					<p><input type="radio" name="izba" value="Trojlôžková Classic"> Three-bed room Classic</p>
				</label>
		  		<label>
		  			<p><input type="radio" name="izba" value="Štvorlôžková Classic"> Four-bed room Classic</p>
		  		</label>
		  		<label>
		  			<p><input type="radio" name="izba" value="Štúdio Deluxe"> Studio Deluxe</p>
		  		</label>
			</div>

			<div>
				<label>Your name
					<input type="text" name="name" required>
				</label>
			</div>

			<div>
				<label>Email<input type="email" name="email" required></label>
			</div>

			<div>
				<label>Phone number<input type="tel" name="phone" required></label>
			</div>

			<div>
				<label>Note
					<textarea id="message" name="message" rows="4" placeholder="Any special requirement?" spellcheck="true"></textarea>
				</label>
			</div>

			<div>
				<input type="submit" value="Non-binding reservation">
			</div>
		</form>

		</div>

	</main>
	<div class="space"></div>

<!-- CONTACT-US ----------------------------------------------->

<div class="contact container group">
	<h2>Ask, book, discover </h2>

	<div class="left">
		<h3>Write us</h3>
		<p>Directly via the application or email:  </p>
		<a href="mailto:info@penziondarinka.sk" title="Write us"><span>info@penziondarinka.sk</span></a>
	</div>

	<div class="left">
		<h3>Call us</h3>
		<p>We will be pleased to answer all your questions at::</p>
		<a href="tel:+421905604161" title="Call us">+421 905 604 161</a>
	</div>

	<div class="left">
		<h3>Visit us</h3>
		<p>Boženy Němcovej 1/B Poprad - Spišská Sobota</p>
		<a href="https://www.google.com/maps/place/Pension+Darinka/@49.0642535,20.3087003,17z/data=!3m1!4b1!4m7!3m6!1s0x473e3aef0b8aeed5:0xb0e3434c9d86cf9f!5m1!1s2018-08-26!8m2!3d49.06425!4d20.310889" title="Príďte k nám" target="_blank">We are located here <i class="fas fa-external-link-alt"></i></a>
	</div>
</div>

<div class="space"></div>

<!-- FOOTER -------------------------------------------------->

<footer>
	<div class="container group">
		<section class="left">
			<h4>Contact</h4>
			<p><a href="tel:+421905604161" title="Call us"><i class="fas fa-phone-square"></i> +421 905 604 161</a></p>
			<p><a href="mailto:info@penziondarinka.sk" title="Write us"><i class="fas fa-envelope-square"></i> info@penziondarinka.sk</a></p>
			<p><a href="https://www.facebook.com/darinkapoprad/" title="Facebook" target="_blank"><i class="fab fa-facebook-square"></i> facebook</a></p>
			<p><a href="https://www.instagram.com/penziondarinka/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i> instagram</a></p>
			<ul class="language">
				<li><a href="../index.html"><img src="../assets/img/flags/sk.svg" alt="SK"></a></li>
				<li><img src="../assets/img/flags/gb.svg" alt="EN" title="EN"></li>
				<li><a href=""><img src="../assets/img/flags/pl.svg" alt="PL" title="PL"></a></li>
			</ul>
		</section>
	</div>

	<div class="container post-footer">
		&copy; Penzión Darinka
	</div>
</footer>

<!-- END ------------------------------------------->

<script src="../assets/js/script.js"></script>
<script src="../assets/js/jquery-3.3.1.js"></script>
<script>

	let today = new Date().toISOString().substr(0, 10);
	document.querySelector("#today").value = today;

	let tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000).toISOString().substr(0, 10);
	document.querySelector("#tomorrow").value = tomorrow;

	let minimal = new Date().toISOString().substr(0, 10);
	document.querySelector("#today").min = today;
	document.querySelector("#tomorrow").min = tomorrow;

</script>
</body>
</html>