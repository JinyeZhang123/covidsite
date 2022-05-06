<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
	<?php include 'style.css';
	include 'Patient.css';
	?>
</style>

<body>
	<div id="Continer">
		<div id="Filter">
			<header>
				<img src="/image/logo.png" alt="logo">
				<nav>
					<ul id="menu">
						<li><a href="covid.php">Home</a></li>
						<li><a href="Patient.php">Patient</a></li>
						<li><a href="work.php">Stuff</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="aboutus.php">something</a></li>
					</ul>
				</nav>
			</header>
			<h1 id="first">Choose a vaccine and see where it is avaliable</h1>
			<div id="avaliablity">

				<form method="POST" action="vaccine.php">
					<input type='text' value='fun3' name='fun' class='cheat'>
					<input type="submit" value="Johnson" name="PatientSubmit" class="button">
				</form>
				<form method="POST" action="vaccine.php">
					<input type='text' value='fun4' name='fun' class='cheat'>
					<input type="submit" value="Moderna" name="PatientSubmit" class="button">
				</form>
				<form method="POST" action="vaccine.php">
					<input type='text' value='fun5' name='fun' class='cheat'>
					<input type="submit" value="Pfizer" name="PatientSubmit" class="button">
				</form>
			</div>
			<div id="content">
				<h1>Getting your vaccine</h1>
				<ul>
					<li>
						<span id="red">PLEASE NOTE</span>: Masks are required at all Ontario Public Health Vaccination clinics.
					</li>
					<li>Our community clinics and after-school COVID-19 vaccination clinics are open for drop-ins
						to everyone eligible for a first dose, second dose and booster dose of the COVID-19 vaccine.</li>
					<li>Various other locations offer the vaccine in Ottawa such as select pharmacies, clinics for Inuit
						populations, mobile vaccine clinics for workplaces and the Kids Come First Health Team vaccination clinics.</li>
					<li>Please read our frequently asked questions about COVID-19 vaccination and do not hesitate to call us at
						613-580-6744 to speak to a public health nurse who can answer your questions and support you with your COVID-19 vaccination.</li>
				</ul>
				<h1>Who can receive first, second, third or fourth doses of the vaccine?</h1>
			</div>
			<div id="dropdowns">
				<div class="dropdown">
					<p>Who can receive their first and second dose?</p>
					<div class="dropdown-content">
						<ul>
							<li>Everyone aged five years or older at the time of
								their appointment is currently eligible to receive a COVID-19 vaccine.</li>
							<li>The Pfizer-BioNTech, Moderna and AstraZeneca/COVISHIELD vaccines require two doses.
								All residents are encouraged to get vaccinated as soon as they can, and to receive
								further doses as soon as they are eligible to ensure maximum protection against COVID-19.</li>
						</ul>
					</div>
				</div>
				<div class="dropdown">
					<p>How can individuals access the Johnson & Johnson (Janssen) vaccine)?</p>
					<div class="dropdown-content">
						Individuals need to complete the following form to pre-register to receive the
						Johnson & Johnson COVID-19 vaccine: https://secureforms.ottawapublichealth.ca/vaccines/janssen/Request-Janssen-Vaccine
					</div>
				</div>
				<div class="dropdown">
					<p>Who can receive their third dose?</p>
					<div class="dropdown-content">
						<h1>Third dose eligibility </h1>
						<ul>
							<li>Third doses of an mRNA COVID-19 vaccine (Pfizer or Moderna) are recommended in Ontario
								for youth aged 12 to 17 if at least 168 days (approximately six months) have passed since their second dose.</li>
							<li>Third doses of an approved COVID-19 vaccine are recommended in Ontario for individuals aged 18 and over
								(born in 2003 or earlier) if at least 84 days (approximately three months) have passed since they have received their
								second dose (or one dose of the Janssen vaccine.</li>
						</ul>
					</div>
				</div>
				<div class="dropdown">
					<p>Who can receive their fourth Dose?</p>
					<div class="dropdown-content">
						<div>You can get a fourth dose of an mRNA vaccine three months (84 days) after your third dose if you are a resident of a:</div>
						<ul>
							<li>long-term care home</li>
							<li>retirement homes</li>
							<li>elder care lodge</li>
							<li>other congregate setting that provide assisted-living and health services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>