<!DOCTYPE html>
<html lang="pl">
<head>
	<?php include '_partials/head.php'; ?>

	<meta name="keywords" content="penzion, poprad, ubytovanie, rezervacia, darinka, free, rooms, booking, spisska sobota, vysoke tatry, ubytko, aquacity, rodinna izba, centrum, pod tatrami">
	<meta name="description" content="Penzión Darinka oferuje komfortowe zakwaterowanie pod Tatrami Wysokimi w spokojnej części Popradu - Spisska Sobota, zaledwie 600 metrów od AquaCity Poprad.">
	<title>Zakwaterowanie Poprad - Wysokie Tatry | Penzión Darinka</title>
</head>
<body>
	<div class="page-contact">

		<!-- HEADERR -->
		<header>
			<!-- NAVIGATION -->
			<?php include '_partials/navigation.php'; ?>

			<h1>You have not chosen?<br>Do you want to know more?</h1>

			<div>
				<a href="#contact-id" class="btn">Write us</a>
			</div>
		</header>

		<!-- MAIN -->
		<main id="contact-id" class="container">
			<section>
				<h2>You have not found what you have been looking for?</h2>
				<p>Send us a message, we will be pleased to help you</p>

				<form action="contactform.php" method="post" name="contactform" autocomplete="on" class="form-style">
					<label>
						Your name
						<input type="text" name="name" required>
					</label>

					<label>
						Phone number
						<input type="tel" name="phone">
					</label>

					<label>
						Email
						<input type="email" name="email" required>
					</label>

					<label>
						Message
						<textarea rows="7" name="message" required></textarea>
					</label>

					<label class="checkbox">
						<input type="checkbox" required>
						<span class="osobne-udaje">I agree to the processing of the above personal data by me for the purpose of preparing an offer and any subsequent reservation - <a href="../osobne-udaje.php">more here</a></span>
					</label>

					<input type="submit" value="Send a message">
				</form>
			</section>
		</main>

		<!-- FOOTER -->
		<?php include '_partials/footer.php'; ?>
	</div>
</body>
</html>