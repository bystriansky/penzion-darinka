<?php

include 'header.php';

?>
	<header class="header-back-kontakt">
<?php

include 'nav.php';

?>

		<div class="container header-text-wrapper">
			<h1 class="header-text">Nic sobie nie wybraliście?<br>Chcecie dowiedzieć się więcej?</h1>
		</div>

		<div class="container box-center">
			<a href="#contact-id" class="link-btn">Napiszcie do nas</a>
		</div>
	</header>
<!-- main ------------------------------------>
	<main id="contact-id" class="container">

	<div class="kontakt-space"></div>
	<div class="ubyovanie-space"></div>

		<section class="box-center">
			<h2>Nie znaleźliście tego, czego szukaliście?</h2>
			<p>Proszę nam wysłać wiadomość, chętnie wam pomożemy</p>
		</section>
		<section>
			<div class="form-style">
			<form action="contactform.php" method="post" name="contactform" autocomplete="on">

				<div>
					<label>
						Wasze imię
						<input type="text" name="name" required>
					</label>
				</div>
				<div>
					<label>
						Numer telefonu
						<input type="tel" name="phone" required>
					</label>
				</div>
				<div>
					<label>
						Email
						<input type="email" name="email" required>
					</label>
				</div>
				<div>
					<label>
						Wiadomość
						<textarea id="" cols="30" rows="7" name="message" required></textarea>
					</label>
				</div>
				<div>
					<input type="submit" value="Wyślij wiadomość">
				</div>
			</form>
		</section>
	</main>

	<div class="space"></div>

	<?php

include 'footer.php';

	?>