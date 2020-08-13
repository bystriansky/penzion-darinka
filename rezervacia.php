<!DOCTYPE html>
<html lang="sk">
<head>
	<?php include '_partials/head.php'; ?>

	<meta name="keywords" content="penzion, poprad, ubytovanie, rezervacia, darinka, free, rooms, booking, spisska sobota, vysoke tatry, ubytko, aquacity, rodinna izba, centrum, pod tatrami">
	<meta name="description" content="Penzión Darinka poskytuje komfortné ubytovanie pod Vysokými Tatrami v pokojnej časti Popradu – Spišskej Sobote len 600 metrov od AquaCity Poprad.">
	<title>Ubytovanie Poprad - Vysoké Tatry | Penzión Darinka</title>
</head>
<body>
	<div class="page-rezervacia">

		<!-- HEADER -->
		<header>
			<!-- NAVIGATION -->
			<?php include '_partials/navigation.php'; ?>

			<h1>Overte si dostupnosť izieb s najvýhodnejšiou cenovou ponukou</h1>

			<div>
				<a href="#rezevacia-id" class="btn">Prejsť k formuláru</a>
			</div>
		</header>

		<!-- MAIN -->
		<main id="rezevacia-id" class="container">
			<section>
			<h2>Overte si dostupnosť odoslaním formulára</h2>
			<p>Vaším podnetom sa budete okamžite zaoberať a za okamih Vám odpovieme</p>

				<form action="contactform1.php" method="post" name="contactform" autocomplete="on" class="form-style">
					<div class="row">
						<label>Príchod
							<input id="today" type="date" name="start" required>
						</label>

						<label>Odchod
							<input id="tomorrow" type="date" name="end" required>
						</label>
					</div>

					<label>Počet dospelých
						<input id="adults" type="number" name="pocetdospelych" value="2" min="1" max="30" required>
					</label>

					<label>Počet detí
						<input id="children" type="number" name="pocetdeti" value="0" min="0" max="10">
					</label>

					<div class="radiobox">
						<h3>Typ izby</h3>
						<div>
					  		<label>
					  			<input type="radio" name="izba" value="Dvojlôžková Deluxe" checked> Dvojlôžková Deluxe
					  		</label>
							<label>
								<input type="radio" name="izba" value="Trojlôžková Classic"> Trojlôžková Classic
							</label>
					  		<label>
					  			<input type="radio" name="izba" value="Štvorlôžková Classic"> Štvorlôžková Classic
					  		</label>
					  		<label>
					  			<input type="radio" name="izba" value="Štúdio Deluxe"> Štúdio Deluxe
					  		</label>
				  		</div>
					</div>

					<label>Vaše meno
						<input type="text" name="name" required>
					</label>

					<label>Email
						<input type="email" name="email" required>
					</label>

					<label>Telefónne číslo
						<input type="tel" name="phone" required>
					</label>

					<label>Poznámka
						<textarea name="message" rows="4" placeholder="Nejaké špeciálne prianie?" spellcheck="true"></textarea>
					</label>
					<label class="checkbox">
						<input type="checkbox" required>
						<span class="osobne-udaje">Súhlasím so spracovaním mnou vyššie uvedených osobných údajov na účel vypracovania ponuky a prípadnej následnej rezervácie - <a href="osobne-udaje.php">viac tu</a></span>
					</label>

					<input type="submit" value="Nezáväzná rezervácia">
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