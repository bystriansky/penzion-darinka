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

			<h1>Wybór pokoju wedle życzenia</h1>
			<div>
				<a href="rezervacia.php" title="Rezervovať" class="btn">Znajdujemy się tutaj</a>
			</div>
		</header>

		<!-- MAIN CONTENT-->
		<main>
			<h2>Oferujemy 4 rodzaje pokoi</h2>

			<div class="container">
				<section>
					<a href="dvojlozkova-izba.php"><img src="../assets/img/dvojka/second-back.jpg" alt="dvojlozkova-izba"></a>
					<h2>2-łóżkowy pokój Deluxe</h2>
					<p>Dla pary i podróże biznesowe</p>
					<a href="dvojlozkova-izba.php" class="btn-enter">Wchodzić</a>
				</section>

				<section>
					<a href="trojlozkova-izba.php"><img src="../assets/img/trojka/third-back.jpg" alt="trojlozkova-izba"></a>
					<h2>3-łóżkowy pokój Classic</h2>
					<p>Pokój rodzinny</p>
					<a href="trojlozkova-izba.php" class="btn-enter">Wchodzić</a>
				</section>

				<section>
					<a href="stvorlozkova-izba.php"><img src="../assets/img/stvorka/forth-back.jpg" alt="stvorlozkova-izba"></a>
					<h2>4 łóżkowy pokój Classic</h2>
					<p>Pokój rodzinny</p>
					<a href="stvorlozkova-izba.php" class="btn-enter">Wchodzić</a>
				</section>

				<section>
					<a href="apartman.php"><img src="../assets/img/apartman/stu-back.jpg" alt="stvorlozkova-izba"></a>
					<h2>Studio deluxe</h2>
					<p>Pokój rodzinny z aneksem kuchennym</p>
					<a href="apartman.php" class="btn-enter">Wchodzić</a>
				</section>
			</div>
		</main>

		<!-- GENERAL CONDITIONS -->
		<section class="conditions">
			<h2>Ogólne warunki</h2>
			<ul>
				<li><strong><i class="fas fa-sign-in-alt"></i> Przyjazd:</strong> od 15:00 do 22:00</li>
				<li><strong><i class="fas fa-sign-out-alt"></i> Wykwaterowanie:</strong> do 11:00</li>
				<li><i class="far fa-credit-card"></i> Płatność tylko gotówką</li>
				<li><i class="fas fa-times"></i> Zwierzęta domowe nie są akceptowane</li>
				<li><i class="fas fa-parking"></i> Parking darmowy (z systemem kamer)</li>
				<li><i class="far fa-calendar-times"></i> Darmowe anulowanie rezerwacji do 7 dni przed przyjazdem</li>
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