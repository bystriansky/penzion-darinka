<?php include 'header.php'; ?>

<header class="header-back-ubytovanie">

	<?php include 'nav.php'; ?>

		<div class="container header-text-wrapper">
			<h1 class="header-text">Choose a room according to your wishes</h1>
		</div>

		<div class="container box-center">
			<a href="rezervacia.php" class="link-btn">Reserve now</a>
		</div>
	</header>
<!-- main ------------------------------------>
	<div class="akcia container">
		<h2><a href="Akciove-ponuky.pdf" target="_blank">Try out our special offers .pdf <i class="fas fa-file-pdf"></i></a></h2>
	</div>
	<main class="container ubytovanie group">
		<div class="space"></div>
		<div class="box-center">
			<h2>We offer 4 types of rooms</h2>
		</div>
		<section>
			<a href="dvojlozkova-izba.php"><img src="../assets/img/dvojka/second-back.jpg" alt="dvojlozkova-izba"></a>
			<h2>Double room Deluxe</h2>
			<p>For couples and business trips</p>
			<a href="dvojlozkova-izba.php" class="link-room">Enter</a>
		</section>
		<section>
			<a href="trojlozkova-izba.php"><img src="../assets/img/trojka/third-back.jpg" alt="trojlozkova-izba"></a>
			<h2>Three-bed room Classic</h2>
			<p>Family room</p>
			<a href="trojlozkova-izba.php" class="link-room">Vstúpiť</a>
		</section>
		<section>
			<a href="stvorlozkova-izba.php"><img src="../assets/img/stvorka/forth-back.jpg" alt="stvorlozkova-izba"></a>
			<h2>Four-bed room Classic</h2>
			<p>Family room</p>
			<a href="stvorlozkova-izba.php" class="link-room">Enter</a>
		</section>
		<section>
			<a href="apartman.php"><img src="../assets/img/apartman/stu-back.jpg" alt="stvorlozkova-izba"></a>
			<h2>Studio deluxe</h2>
			<p>Family room with kitchen</p>
			<a href="apartman.php" class="link-room">Vstúpiť</a>
		</section>
	</main>




	<div class="container pripomienky">
			<h3>General conditions</h3>
			<ul>
				<li><strong><i class="fas fa-sign-in-alt"></i> Arrival:</strong> from 15:00 to 22:00</li>
				<li><strong><i class="fas fa-sign-out-alt"></i> Departure:</strong> to 11:00</li>
				<li><i class="far fa-credit-card"></i> Pay only in cash</li>
				<li><i class="fas fa-times"></i> Pets not permitted</li>
				<li><i class="fas fa-parking"></i> Parking free (with CCTV)</li>
				<li><i class="far fa-calendar-times"></i> Free cancel possible within 7 days prior to arrival</li>
			</ul>
		</div>

<?php include 'footer.php'; ?>