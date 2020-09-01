<!DOCTYPE html>
<html lang="pl">
<head>
	<?php include '_partials/head.php'; ?>

	<meta name="keywords" content="penzion, poprad, ubytovanie, rezervacia, darinka, free, rooms, booking, spisska sobota, vysoke tatry, ubytko, aquacity, rodinna izba, centrum, pod tatrami">
	<meta name="description" content="Penzión Darinka oferuje komfortowe zakwaterowanie pod Tatrami Wysokimi w spokojnej części Popradu - Spisska Sobota, zaledwie 600 metrów od AquaCity Poprad.">
	<title>Zakwaterowanie Poprad - Wysokie Tatry | Penzión Darinka</title>
</head>
<body>
	<div class="page-rezervacia">

		<!-- HEADER -->
		<header>
			<!-- NAVIGATION -->
			<?php include '_partials/navigation.php'; ?>

			<h1>Check availability of rooms with the best price offer</h1>

			<div>
				<a href="#rezevacia-id" class="btn">Go to the reservation form</a>
			</div>
		</header>

		<!-- MAIN -->
		<main id="rezevacia-id" class="container">
			<section>
			<h2>Check availability by sending a form</h2>
			<p>Your response will be dealt with immediately and we will reply in a while</p>

				<form action="contactform1.php" method="post" name="contactform" autocomplete="on" class="form-style">
					<div class="row">
						<label>Arrival
							<input id="today" type="date" name="start" required>
						</label>

						<label>Departure
							<input id="tomorrow" type="date" name="end" required>
						</label>
					</div>

					<label>Number of adults
						<input id="adults" type="number" name="pocetdospelych" value="2" min="1" max="30" required>
					</label>

					<label>Number of children
						<input id="children" type="number" name="pocetdeti" value="0" min="0" max="10">
					</label>

					<div class="radiobox">
						<h3>Room type</h3>
						<div>
					  		<label>
					  			<input type="radio" name="izba" value="Dvojlôžková Deluxe" checked> Double room Deluxe
					  		</label>
							<label>
								<input type="radio" name="izba" value="Trojlôžková Classic"> Three-bed room Classic
							</label>
					  		<label>
					  			<input type="radio" name="izba" value="Štvorlôžková Classic"> Four-bed room Classic
					  		</label>
					  		<label>
					  			<input type="radio" name="izba" value="Štúdio Deluxe"> Studio Deluxe
					  		</label>
				  		</div>
					</div>

					<label>Your name
						<input type="text" name="name" required>
					</label>

					<label>Email
						<input type="email" name="email" required>
					</label>

					<label>Phone number
						<input type="tel" name="phone" required>
					</label>

					<label>Note
						<textarea name="message" rows="4" placeholder="Any special requirement?" spellcheck="true"></textarea>
					</label>
					<label class="checkbox">
						<input type="checkbox" required>
						<span class="osobne-udaje">I agree to the processing of the above personal data by me for the purpose of preparing an offer and any subsequent reservation - <a href="../osobne-udaje.php">more here</a></span>
					</label>

					<input type="submit" value="Non-binding reservation">
				</form>
			</section>
		</main>

		<!-- FOOTER -->
		<?php include '_partials/footer.php'; ?>

		<script>
			let today = new Date().toISOString().substr(0, 10);
			document.querySelector("#today").value = today;

			let tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000).toISOString().substr(0, 10);
			document.querySelector("#tomorrow").value = tomorrow;

			let minimal = new Date().toISOString().substr(0, 10);
			document.querySelector("#today").min = today;
			document.querySelector("#tomorrow").min = tomorrow;
		</script>
	</div>
</body>
</html>