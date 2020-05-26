<?php

include 'header.php';

?>
	<header class="header-back-kontakt">
<?php

include 'nav.php';

?>

		<div class="container header-text-wrapper">
			<h1 class="header-text">You have not chosen?<br>Do you want to know more??</h1>
		</div>

		<div class="container box-center">
			<a href="#contact-id" class="link-btn">Write us</a>
		</div>
	</header>
<!-- main ------------------------------------>
	<main id="contact-id" class="container">

	<div class="kontakt-space"></div>
	<div class="ubyovanie-space"></div>

		<section class="box-center">
			<h2>You have not found what you have been looking for?</h2>
			<p>Send us a message, we will be pleased to help you</p>
		</section>
		<section>
			<div class="form-style">
			<form action="contactform.php" method="post" name="contactform" autocomplete="on">

				<div>
					<label>
						Your name
						<input type="text" name="name" required>
					</label>
				</div>
				<div>
					<label>
						Phone number
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
						Message
						<textarea id="" cols="30" rows="7" name="message" required></textarea>
					</label>
				</div>
				<div>
					<input type="submit" value="Send a message">
				</div>
			</form>
		</section>
	</main>

	<div class="space"></div>

	<?php

include 'footer.php';

	?>