<?php 
    ob_start();
    define( 'SITE_URL', 'https://asrafuzzaman.github.io/' );
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sheikh Ashrafuzzaman - Portfolio Showcase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="https://avatars1.githubusercontent.com/u/40714244?s=460&v=4" alt="Sheikh Ashrafuzzaman" /></span>
							<h1 id="title">Sheikh <br> Ashrafuzzaman</h1>
							<p>Web Design & Developer</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon fa-home">Home</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://twitter.com/shahid_tt" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://facebook.com/shahid.im" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://github.com/asrafuzzaman" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="https://bd.linkedin.com/in/shahidtt" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
							<li><a href="mailto:online.knock@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! I'm <strong>Sheikh Ashrafuzzaman</strong></h2>
								<p>Hello, I’m a Sheikh Ashrafuzzaman, web-developer based on bangladesh. I have rich experience in web site design & building and customization. Also I am good at html, css, wordpress, php, jquery, bootstrap.</p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">View Portfolio</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Portfolio</h2>
							</header>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/01.jpg" alt="" /></a>
										<header>
											<h3>Twist - PSD to HTML</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/04.jpg" alt="" /></a>
										<header>
											<h3>PSD to HTML</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="http://ael.technoapogee.com/" class="image fit"><img src="images/05.jpg" alt="portfolio" /></a>
										<header>
											<h3>Apogee Engineering - Frontend</h3>
										</header>
									</article>
									<!-- <article class="item">
										<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
										<header>
											<h3>Natoque Vitae</h3>
										</header>
									</article> -->
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/03.jpg" alt="" /></a>
										<header>
											<h3>LMSedu - PSD to HTML</h3>
										</header>
									</article>
									<!-- <article class="item">
										<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
										<header>
											<h3>Orci Convallis</h3>
										</header>
									</article> -->
								</div>
							</div>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>
<?php
    $hasError = false;
    $sent = false;

    if ( isset($_POST['submitform']) ) {
        $name       = trim(htmlspecialchars($_POST['name'], ENT_QUOTES));
        $email      = trim($_POST['email']);
        $subject    = trim(htmlspecialchars($_POST['subject'], ENT_QUOTES));
        $message    = trim(htmlspecialchars($_POST['message'], ENT_QUOTES));

        $fieldsArray = array(
            'name'      => $name,
            'email'     => $email,
            'subject'   => $subject,
            'message'   => $message
        );

        $errorArray = array();

        foreach ($fieldsArray as $key => $val) {
            switch ($key) {
                case 'name':
                case 'subject':
                case 'message':
                    if ( empty($val) ) {
                        $hasError = true;
                        $errorArray[$key] = ucfirst($key) . " field was left empty.";
                    }
                    break;
                case 'email':
                    if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                        $hasError = true;
                        $errorArray[$key] = "Invalid Email Address entered.";
                    } else {
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                    }
                    break;
            }
        }

        if ( $hasError !== true ) {
            $to = 'online.knock@gmail.com';
            $subject = "$subject";
            $msgcontents = "Name: $name<br>Email: $email<br>Message: $message";
            $headers = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
            $headers .= "From: $name <$email> \r\n";
            $mailsent = mail($to, $subject, $msgcontents, $headers);

            if ( $mailsent ) {
                $sent = true;
                unset($name);
                unset($email);
                unset($subject);
                unset($message);
            }
        }
    }
?>

							<form method="post" id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<?php  
		                            if ( $sent === true ) {
		                                echo "<h2 class='success'>Thanks, your message has been sent successfully</h2>";
		                                $site_url   =   SITE_URL;
		                                header("Refresh: 20; url=$site_url");
		                            } elseif( $hasError === true ) {
		                                echo '<ul class="errorlist"></ul>';
		                                foreach ($errorArray as $key => $val) {
		                                    echo "<li>" . ucfirst($key) . " field error - $val</li>";
		                                }
		                                echo '</ul>';
		                            }
		                        ?>
		                        <div class="messages"></div>
								<div class="row">
									<div class="col-6 col-12-mobile">
										<input type="text" id="form_name" name="name" value="<?php echo (isset($name) ? $name : "" ); ?>" placeholder="Name" required="required" />
									</div>
									<div class="col-6 col-12-mobile">
										<input type="text" id="form_email" name="email" value="<?php echo ( isset($email) ? $email : "" ); ?>" placeholder="Email" required="required" />
									</div>
									<div class="col-12">
										<input type="text" id="form_subject" name="subject" value="<?php echo ( isset($subject) ? $subject : "" ); ?>" placeholder="Subject" required="required" />
									</div>
									<div class="col-12">
										<textarea name="message" id="form_message" placeholder="Message" required="required"><?php echo ( isset($message) ? $message : "" ); ?></textarea>
									</div>
									<div class="col-12">
										<input type="submit" name="submitform" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
				<ul class="copyright">
					<li>&copy; Sheikh Ashrafuzzaman</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>

			</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
			$("#contact-form").validate();
		</script>
		<?php ob_end_flush(); ?>
	</body>
</html>