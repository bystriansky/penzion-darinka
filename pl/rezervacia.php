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

			<h1>Sprawdźcie dostępność pokojów z najkorzystniejszą ofertą cenową</h1>

			<div>
				<a href="#rezevacia-id" class="btn">Przejdź do formularza</a>
			</div>
		</header>

		<!-- MAIN -->
		<main id="rezevacia-id" class="container">
			<section>
			<h2>Sprawdźcie dostępność zanim wyślecie formularz</h2>
			<p>Waszym zgłoszeniem od razu się zajmiemy i za moment wam odpowiemy</p>

				<form action="contactform1.php" method="post" name="contactform" autocomplete="on" class="form-style">
					<div class="row">
						<label>Przyjazd
							<input id="today" type="date" name="start" required>
						</label>

						<label>Wykwaterowanie
							<input id="tomorrow" type="date" name="end" required>
						</label>
					</div>

					<label>Liczba dorosłych
						<input id="adults" type="number" name="pocetdospelych" value="2" min="1" max="30" required>
					</label>

					<label>Liczba dzieci
						<input id="children" type="number" name="pocetdeti" value="0" min="0" max="10">
					</label>

					<div class="radiobox">
						<h3>Rodzaj pokoju</h3>
						<div>
					  		<label>
					  			<input type="radio" name="izba" value="Dvojlôžková Deluxe" checked> 2 łóżkowy pokój Deluxe
					  		</label>
							<label>
								<input type="radio" name="izba" value="Trojlôžková Classic"> 3 łóżkowy pokój Classic
							</label>
					  		<label>
					  			<input type="radio" name="izba" value="Štvorlôžková Classic"> 4 łóżkowy pokój Classic
					  		</label>
					  		<label>
					  			<input type="radio" name="izba" value="Štúdio Deluxe"> Studio Deluxe
					  		</label>
				  		</div>
					</div>

					<label>Wasze imię
						<input type="text" name="name" required>
					</label>

					<label>Email
						<input type="email" name="email" required>
					</label>

					<label>Numer telefonu
						<input type="tel" name="phone" required>
					</label>

					<label>Note
						<textarea name="message" rows="4" placeholder="Macie jakieś specjalne wymagania?" spellcheck="true"></textarea>
					</label>
					<label class="checkbox">
						<input type="checkbox" required>
						<span class="osobne-udaje">Wyrażam zgodę na przetwarzanie przeze mnie powyższych danych osobowych w celu przygotowania oferty i późniejszej rezerwacji - <a href="../osobne-udaje.php">więcej tutaj</a></span>
					</label>

					<input type="submit" value="Niewiążąca rezerwacja">
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