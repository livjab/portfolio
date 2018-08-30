<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact Form';
		$to = 'livjab@gmail.com';
		$subject = 'Message from Contact';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Liv Johnson Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Source+Sans+Pro" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <button type="button" class="navbar-toggle"
      data-toggle="collapse"
      data-target=".navbar-collapse">
      <span class="sr-only">Toggle Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#about">LIV JOHNSON | Developer</a>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#packages">PACKAGES</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div>
  </div>
</div>

<div id="about">
  <div class="container-fluid">
    <div class="jumbotron text-center">
      <h3> I am a Front End Developer with the intension of creating original and naturally flowing websites. I am able to create responsive websites that look good on all screen sizes. If you have a design already made, I can re-create your photoshop document into a pixel perfect website. Feel free to view my profile to see some of the projects I've worked on.</h3>
    </div>
  </div>
</div>

<div id="portfolio">
  <div class="container-fluid">
    <h2>Portfolio</h2>
    <div class="row">
      <div class="col-sm-4">
        <a href="http://www.kirstenschmidtcoaching.com" target="_blank">Kirsten Schmidt Coaching</a>
        <p>This is a custom WordPress website that I made for a client. I started with an existing theme, but basically re-coded the majority of the main page using Bootstrap in order to achieve my client's specific look.</p>
      </div>
      <div class="col-sm-4">
        <a href="http://www.messymutts.net" target="_blank">Messy Mutts</a>
        <p>This website was created by customizing a WordPress theme for a client. I created a child theme and used my knowledge of HTML,CSS, and PHP to customize the theme to my client's preferences.</p>
      </div>
      <div class="col-sm-4">
        <a href="http://www.tmceng.tech" target="_blank">TMC Engineering</a>
        <p>I created this WordPress website for a client to start his new business. ** In progress **</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <a href="jubilee/index.html" target="_blank">Jubilee Austen Page</a>
        <p>I created this web page using HTML and CSS. I learned how to duplicate a PSD using Photoshop and create a layout and styling with HTML and CSS.</p>
      </div>
      <div class="col-sm-4">
        <a href="unplugged/index.html" target="_blank">Unplugged Website</a>
        <p>This website displays my responsive web design capabilities. I learned about mobile first design and how to use media queries to add breakpoints in order to ensure that a website looks good on all screen sizes.</p>
      </div>
      <div class="col-sm-4">
        <a href="lol-cat-clock/index.html" target="_blank">LOLcat Clock</a>
        <p>The LOLcat Clock is a playful website I worked on to show off my JavaScript Skills. I learned how to set up a clock that changes by the second, and shows different pictures of cats depending on what time it is.</p>
      </div>
    </div>
  </div>
</div>

<div id="packages">
  <div class="container">
    <h2>Packages</h2>
      <div class="row">
        <div class="col-sm-6">
          <div id="toes-wet">
          <h3>Get Your Toes Wet</h3>
          <h3>$350</h3>
          <p>Great for small businesses who want to build a simple site or upgrade an existing site.</p>
          <p>What you get:<br>
            Custom website with 4-6 pages<br>
            Responsive design (looks good on all screen sizes)<br>
            1 round of revisions</p>
          <h4>Timeline: 2-3 weeks</h4>
          </div>
        </div>
        <div class="col-sm-6">
          <h3>Go For A Dip</h3>
          <h3>$600</h3>
          <p>Great if you have a specific site design in mind, and you want to take your site to the next level by using contact forms, photo galleries, or integrating your social media accounts.</p>
          <p>What you get:<br>
            Custom WordPress website<br>
            Fully responsive design<br>
            Social media integration<br>
            2 rounds of revisions</p>
          <h4>Timeline: 6-8 weeks</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h3>Dive In Head First</h3>
          <h3>$1200</h3>
          <p>Great for a business or individual who wants to build a website and integrate a shop they can begin selling from.</p>
          <p>What you get:<br>
            Custom WordPress website<br>
            Fully responsive design<br>
            Search Engine Optimization<br>
            Social media integration<br>
            e-Commerce plugin<br>
            2 rounds of revisions</p>
          <h4>Timeline: 8-12 weeks</h4>
        </div>
        <div class="col-sm-6">
          <div id="needs">
            <h3>What I Need From You:</h3>
            <p>Site content<br>
              Brand colors<br>
              Links, images, logos</p>
          </div>
          <div id="extras">
            <h3>Extras</h3>
            <p>Logo Design $50<br>
              Social Media profile or Header Image Design $25-$40<br>
              Extra rounds of revisions $40</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="contact">
  	<div class="container">
      <h2>Contact</h2>
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
