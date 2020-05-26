<!DOCTYPE html>
<html lang="sk">
<head>
	<?php include '_partials/head.php'; ?>

	<meta name="keywords" content="penzion, poprad, ubytovanie, rezervacia, darinka, free, rooms, booking, spisska sobota, vysoke tatry, ubytko, aquacity, rodinna izba, centrum, pod tatrami">
	<meta name="description" content="Penzión Darinka poskytuje komfortné ubytovanie pod Vysokými Tatrami v pokojnej časti Popradu – Spišskej Sobote len 600 metrov od AquaCity Poprad.">
	<title>Ubytovanie Poprad - Vysoké Tatry | Penzión Darinka</title>
</head>
<body>
	<div class="page-contact">

		<!-- HEADERR -->
		<header>
			<!-- NAVIGATION -->
			<?php include '_partials/navigation.php'; ?>

			<h1>Nevybrali ste si?<br>Chcete sa dozvedieť viac?</h1>

			<div>
				<a href="#contact-id" class="btn">Napíšte nám</a>
			</div>
		</header>

		<!-- MAIN -->
		<main id="contact-id" class="container">
			<section>
				<h2>Nenašli ste to, čo ste hľadali?</h2>
				<p>Pošlite nám správu, radi Vám pomôžeme</p>

				<form action="contactform.php" method="post" name="contactform" autocomplete="on" class="form-style">
					<label>
						Vaše meno
						<input type="text" name="name" required>
					</label>

					<label>
						Telefónne číslo
						<input type="tel" name="phone">
					</label>

					<label>
						Email
						<input type="email" name="email" required>
					</label>

					<label>
						Správa
						<textarea rows="7" name="message" required></textarea>
					</label>

					<label class="checkbox">
						<input type="checkbox" required>
						<span>Súhlasím so spracovaním mnou vyššie uvedených osobných údajov na účel vypracovania ponuky a prípadnej následnej rezervácie - <a href="osobne-udaje.php">viac tu</a></span>
					</label>

					<input type="submit" value="Odoslať správu">
				</form>
			</section>
		</main>

		<!-- FOOTER -->
		<?php include '_partials/footer.php'; ?>
	</div>
</body>
</html>