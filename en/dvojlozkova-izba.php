<?php

include 'header.php';

?>

	<header class="header-back-dvojka">
		<?php

		include 'nav.php';

		?>

		<div class="container header-text-wrapper">
			<h1 class="header-text">Double room Deluxe </h1>
		</div>

		<div class="container box-center">
			<a href="rezervacia.php" class="link-btn">Check availability</a>
		</div>
	</header>

<!-- MAIN ------------------------------------>

	<main>
		<div class="izba-space"></div>
		<section class="izba container group">
			<div class="izba-text-1 show-text left">
				<h2 id="text-dvojka">For couples and business trips</h2>
			</div>
			<div class="right none"><img src="../assets/img/dvojka/second(2).jpg" alt="prezentation-room"></div>
		</section>

		<section class="izba container group">
			<div class="izba-text-2 show-text right">
				<h2>Room equipment:</h2>
				<ul>
					<li>Modern shower, especially couples will appreciate</li>
					<li>Fully equipped bathroom with a hairdryer</li>
					<li>LED television with satellite</li>
					<li>View of the town</li>
					<li>Free WiFi</li>
					<li>25 m<sup>2</sup></li>
				</ul>
			</div>
			<div class="left none"><img src="../assets/img/dvojka/second(1).jpg" alt="dvojka" ></div>
		</section>
		<section>
			<div class="container cena-wrapper">
				<span class="cena">Price from 45€</span>
			</div>
		</section>

	</main>

	<div class="space"></div>

<?php

include 'footer.php';

?>