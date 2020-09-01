<!DOCTYPE html>
<html lang="pl">
<head>
	<?php include '_partials/head.php'; ?>

	<meta name="keywords" content="penzion, poprad, ubytovanie, rezervacia, darinka, free, rooms, booking, spisska sobota, vysoke tatry, ubytko, aquacity, rodinna izba, centrum, pod tatrami">
	<meta name="description" content="Penzión Darinka oferuje komfortowe zakwaterowanie pod Tatrami Wysokimi w spokojnej części Popradu - Spisska Sobota, zaledwie 600 metrów od AquaCity Poprad.">
	<title>Zakwaterowanie Poprad - Wysokie Tatry | Penzión Darinka</title>
</head>
<body>
	<div class="page-ubytovanie">

		<!-- HEADER -->
		<header>
			<!-- NAVIGATION -->
			<?php include '_partials/navigation.php'; ?>

			<h1>Choose a room according to your wishes</h1>
			<div>
				<a href="rezervacia.php" title="Rezervovať" class="btn">Reserve now</a>
			</div>
		</header>

		<!-- MAIN CONTENT-->
		<main>
			<h2>We offer 4 types of rooms</h2>

			<div class="container">
				<section>
					<a href="dvojlozkova-izba.php"><img src="../assets/img/dvojka/second-back.jpg" alt="dvojlozkova-izba"></a>
					<h2>Double room Deluxe</h2>
					<p>For couples and business trips</p>
					<a href="dvojlozkova-izba.php" class="btn-enter">Enter</a>
				</section>

				<section>
					<a href="trojlozkova-izba.php"><img src="../assets/img/trojka/third-back.jpg" alt="trojlozkova-izba"></a>
					<h2>Three-bed room Classic</h2>
					<p>Family room</p>
					<a href="trojlozkova-izba.php" class="btn-enter">Enter</a>
				</section>

				<section>
					<a href="stvorlozkova-izba.php"><img src="../assets/img/stvorka/forth-back.jpg" alt="stvorlozkova-izba"></a>
					<h2>Four-bed room Classic</h2>
					<p>Family room</p>
					<a href="stvorlozkova-izba.php" class="btn-enter">Enter</a>
				</section>

				<section>
					<a href="apartman.php"><img src="../assets/img/apartman/stu-back.jpg" alt="stvorlozkova-izba"></a>
					<h2>Studio deluxe</h2>
					<p>Family room with kitchen</p>
					<a href="apartman.php" class="btn-enter">Enter</a>
				</section>
			</div>
		</main>

		<!-- GENERAL CONDITIONS -->
		<section class="conditions">
			<h2>General conditions</h2>
			<ul>
				<li><strong><i class="fas fa-sign-in-alt"></i> Arrival:</strong> od 15:00 do 22:00</li>
				<li><strong><i class="fas fa-sign-out-alt"></i> Departure:</strong> do 11:00</li>
				<li><i class="far fa-credit-card"></i> Pay only in cash</li>
				<li><i class="fas fa-times"></i> Pets not permitted</li>
				<li><i class="fas fa-parking"></i> Parking free (with CCTV)</li>
				<li><i class="far fa-calendar-times"></i> Free cancel possible within 7 days prior to arrival</li>
			</ul>
		</section>

		<!-- VIDEO	 -->
		<div class="container video">
			<iframe src="https://www.youtube.com/embed/Di-mN71w4XQ" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" title="Video Penzión Darinka" allowfullscreen></iframe>
		</div>

		<!-- FOOTER -->
		<?php include '_partials/footer.php'; ?>

	</div>
</body>
</html>