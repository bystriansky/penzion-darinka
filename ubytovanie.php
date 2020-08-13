<!DOCTYPE html>
<html lang="sk">
<head>
	<?php include '_partials/head.php'; ?>

	<meta name="keywords" content="penzion, poprad, ubytovanie, rezervacia, darinka, free, rooms, booking, spisska sobota, vysoke tatry, ubytko, aquacity, rodinna izba, centrum, pod tatrami">
	<meta name="description" content="Penzión Darinka poskytuje komfortné ubytovanie pod Vysokými Tatrami v pokojnej časti Popradu – Spišskej Sobote len 600 metrov od AquaCity Poprad.">
	<title>Ubytovanie Poprad - Vysoké Tatry | Penzión Darinka</title>
</head>
<body>
	<div class="page-ubytovanie">

		<!-- HEADER -->
		<header>
			<!-- NAVIGATION -->
			<?php include '_partials/navigation.php'; ?>

			<h1>Vyberte si izbu podľa Vašich predstáv</h1>
			<div>
				<a href="rezervacia.php" title="Rezervovať" class="btn">Rezervovať teraz</a>
			</div>
		</header>

		<!-- MAIN CONTENT-->
		<main>
			<h2>Ponúkame 4 typy izieb</h2>

			<div class="container">
				<section>
					<a href="dvojlozkova-izba.php"><img src="assets/img/dvojka/second-back.jpg" alt="dvojlozkova-izba"></a>
					<h2>Dvojlôžková Deluxe</h2>
					<p>Určená pre páry a biznis cesty</p>
					<a href="dvojlozkova-izba.php" class="btn-enter">Vstúpiť</a>
				</section>

				<section>
					<a href="trojlozkova-izba.php"><img src="assets/img/trojka/third-back.jpg" alt="trojlozkova-izba"></a>
					<h2>Trojlôžková Classic</h2>
					<p>Rodinná izba</p>
					<a href="trojlozkova-izba.php" class="btn-enter">Vstúpiť</a>
				</section>

				<section>
					<a href="stvorlozkova-izba.php"><img src="assets/img/stvorka/forth-back.jpg" alt="stvorlozkova-izba"></a>
					<h2>Štvorlôžková Classic</h2>
					<p>Rodinná izba</p>
					<a href="stvorlozkova-izba.php" class="btn-enter">Vstúpiť</a>
				</section>

				<section>
					<a href="apartman.php"><img src="assets/img/apartman/stu-back.jpg" alt="stvorlozkova-izba"></a>
					<h2>Štúdio deluxe</h2>
					<p>Rodinná izba s kuchynkou</p>
					<a href="apartman.php" class="btn-enter">Vstúpiť</a>
				</section>
			</div>
		</main>

		<!-- GENERAL CONDITIONS -->
		<section class="conditions">
			<h2>Všeobecné podmienky</h2>
			<ul>
				<li><strong><i class="fas fa-sign-in-alt"></i> Príchod:</strong> od 15:00 do 22:00</li>
				<li><strong><i class="fas fa-sign-out-alt"></i> Odchod:</strong> do 11:00</li>
				<li><i class="far fa-credit-card"></i> Platba len v hotovosti</li>
				<li><i class="fas fa-times"></i> Domáce zvieratá sú zakázané</li>
				<li><i class="fas fa-parking"></i> Parkovanie zdarma (s kamerovým systémom)</li>
				<li><i class="far fa-calendar-times"></i> Storno do 7 dní pred príchodom zdarma</li>
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