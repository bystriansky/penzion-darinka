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

			<h1>Nic sobie nie wybraliście?<br>Chcecie dowiedzieć się więcej?</h1>

			<div>
				<a href="#contact-id" class="btn">Napiszcie do nas</a>
			</div>
		</header>

		<!-- MAIN -->
		<main id="contact-id" class="container">
			<section>
				<h2>Nie znaleźliście tego, czego szukaliście?</h2>
				<p>Proszę nam wysłać wiadomość, chętnie wam pomożemy</p>

				<form action="contactform.php" method="post" name="contactform" autocomplete="on" class="form-style">
					<label>
						Wasze imię
						<input type="text" name="name" required>
					</label>

					<label>
						Numer telefonu
						<input type="tel" name="phone">
					</label>

					<label>
						Email
						<input type="email" name="email" required>
					</label>

					<label>
						Wiadomość
						<textarea rows="7" name="message" required></textarea>
					</label>

					<label class="checkbox">
						<input type="checkbox" required>
						<span class="osobne-udaje">Wyrażam zgodę na przetwarzanie przeze mnie powyższych danych osobowych w celu przygotowania oferty i późniejszej rezerwacji - <a href="../osobne-udaje.php">więcej tutaj</a></span>
					</label>

					<input type="submit" value="Wyślij wiadomość">
				</form>
			</section>
		</main>

		<!-- FOOTER -->
		<?php include '_partials/footer.php'; ?>
	</div>
</body>
</html>