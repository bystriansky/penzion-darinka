<?php include 'header.php'; ?>

	<header class="header-back-apartman">

<?php include 'nav.php'; ?>

		<div class="container header-text-wrapper">
			<h1 class="header-text">Studio Deluxe</h1>
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
				<h2 id="text-apartman">Family room with kitchen </h2>
			</div>
			<div class="right none"><img src="../assets/img/apartman/stu(1).jpg" alt="prezentation-room"></div>
		</section>

		<section class="izba container group">
			<div class="apartman-text-2 show-text right">
				<h2>Room equipment: </h2>
				<ul>
					<li>Fully equipped bathroom with a hairdryer</li>
					<li>Smart LED-TV with satellite</li>
					<li>Fully equipped kitchen</li>
					<li>Fridge</li>
					<li>View of the lake</li>
					<li>Free WiFi</li>
					<li>35 m<sup>2</sup></li>
				</ul>
			</div>
			<div class="left none"><img src="../assets/img/apartman/stu(2).jpg" alt="breakfast" ></div>
		</section>
		<section>

			<div class="container cena-wrapper">
				<span class="cena">Price from 49€</span>
			</div>

		</section>

	</main>


	<div class="space"></div>

<?php

include 'footer.php';

?>