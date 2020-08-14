<!DOCTYPE html>
<html class="bck" >
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Real Estate</title>
		
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,100&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/queries.css">
		
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
		<link rel="manifest" href="favicons/site.webmanifest">
		<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	
	<body class="all">
		<div>
			<header>
				<div class="logo-pages">
					<a href="index.html#down"><img alt="artchi tech logo" src="img/Logo.svg"></a>
				</div>
				<div class="nav-blured navigation">
					<div class="mobile-icon js--nav-icon"><img alt="mobile hamburger icon" src="img/hamburger-icon.svg"></div>
					<div>
						<ul class="nav-pages js--main-nav">
							<li><a href="real-estate.html#right">Real Estate</a></li>
							<li><a href="about.html#right">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<ul class="soc-icons-pages">
							<li><a target="_blank" href="mailto:vicentijevic.j@gmail.com"><img alt="email artchi tech" src="img/mail.svg"></a></li>
							<li><a target="_blank" href="https://www.facebook.com/"><img alt="facebook artchi tech" src="img/facebook.svg"></a></li>
							<li><a target="_blank" href="https://www.instagram.com/"><img alt="instagram artchi tech" src="img/instagram.svg"></a></li>
							<li><a target="_blank" href="https://www.twitter.com/"><img alt="twitter artchi tech" src="img/twitter.svg"></a></li>
						</ul>
					</div>
				</div>
			</header>
			<main>
				<div class="page-heading"><h2>Contact</h2></div>
				<div class="grid form-section">
					<div class="status">
							<?php
								if(isset($_POST['submit']))
								{
									$User_name = $_POST['name'];
									$User_email = $_POST['email'];
									$User_message = $_POST['message'];

									$email_from = 'noreply@architech.com';
									$email_subject = "Message for Archi Tech Properties";
									$email_body = "Name: $User_name.\n".
													"User email: $User_email.\n".
													"User message: $User_message.\n";
									
									$to_email = "vicentijevic.j@gmail.com";
									$headers = "From: $email_from\r\n";
									$headers .= "Reply-To: $User_email\r\n";

									$secretKey = "6Lc1Ub4ZAAAAAO-5tgu9pLFOFo8uMuujMclPxv1q";
									$responseKey = $_POST['g-recaptcha-response'];
									$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";

									$response = file_get_contents($url);
									$response = json_decode($response);
									
									if($response->success){
										echo "<p>Message sent successfully</p>";
										mail($to_email, $email_subject, $email_body, $headers);
									}
									else{
										echo "<p><span>Invalid captcha! Please, try again.</span></p>";
									}
								}
							?>
						</div>
					<div class="form">
						<form method="post" action="" class="contact-form">
							<div class="row">
								<div class="left">
									<label for="name">Name</label>
								</div>
								<div class="right">
									<input name="name" type="text" id="name" placeholder="Your name" required>
								</div>
							</div>
							<div class="row">
								<div class="left">
									<label for="email">Email</label>
								</div>
								<div class="right">
									<input name="email" type="email" id="email" placeholder="Your e-mail" required>
								</div>
							</div>
							<div class="row">
								<div class="left">
									<label for="find-us">How did you find us?</label>
								</div>
								<div class="right">
									<select name="find-us" id="find-us">
										<option value="friends" selected>Social networks</option>
										<option value="search">Search engine</option>
										<option value="ad">Advertisement</option>
										<option value="other">Friend</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="left">
									<label>Message</label>
								</div>
								<div class="right">
									<textarea name="message" placeholder="Your message" required></textarea>
								</div>
							</div>
							<div class="row val">
								<div class="g-recaptcha" data-sitekey="6Lc1Ub4ZAAAAANE6xjKO0mL5kPIx1mAPrIY5_Ywn"></div>
							</div>
							<div class="row btn-row">
									<label class="btn">&nbsp;</label>
									<input type="submit" name="submit" value="Send">
							</div>
						</form>
		
					</div>
				</div>
			</main>
		</div>
		
	<!-- SCRIPTS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.js"></script>
		<script src="js/jquery.smoothState.js"></script>
        <script src="js/script.js"></script>
	</body>
	
</html>