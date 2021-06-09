<!---
    Author: Johann Olivares
    File: index.html
    Version: 2.0
    Description: The homwpage to my porfolio website.
-->
<!doctype html>
<html lang="eng">
    <head>
        <title>Johann Olivares</title>
	   
	    <!--Google fonts-->
	    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	    <!--End of Google fonts-->
	   
        <!--CSS Styles-->
	    <link rel="stylesheet" href="css/index.css" type="text/css">
	    <!--End of CSS Styles-->	   
		
    </head>
    <body>

			<section id="cover" class="child">
				<!--Navigation Bar-->
				<nav class="nav-bar">
					<a href="index.html">Home</a>
					<a href="#portfolio">Portfolio</a>
					<a href="#form-container">Contact Me</a>
					<a href="resume.html" target="_blank">Resume</a>
				</nav>
				<!--End of Navigation Bar-->
				
				<!--Greeting-->
				<div id="greeting">
					<h1>Hello and Welcome</h1>
					<article>
						<p> My name is Johann Olivares, I am Web Developer who 
							desgins and builds amazing web applications.
						</p>
						<a id="home-btn" href="#portfolio">View Projects</a>
					</article>
				</div>
				<!--End of Greeting-->
			</section>

					<!--Projects-->
			<section id="portfolio" class="child">
				<div id="work-header"> 
					<h1>My Work</h1> 
				</div>

				<div class="grid-container">
					<div class="grid-item">
						<form class="project">
							<video width="800" height="600" controls>
								<source src="files/efitvid1.mp4" type="video/mp4">
							</video>
							<article class="description">
								<p>
									Efit is a simple E-Commerce solution built and designed using 
									a full stack of HTML, CSS, PHP, MySQL, and JavaScript. It also
									uses the Paypal API to integrate a secure payment gateway.
								</p>
							</article>					
							<div class="view-btn">
								<input type="submit" value="view code">
							</div>
						</form>
					</div>

					<div class="grid-item">
						<form class="project">
							<video width="800" height="600" controls>
								<source src="files/cutters.mp4" type="video/mp4">
							</video>
							<article class="description">
								<p>
									This a fully responsive static landing page with a specific aim in
									the hairstylist/barbershop industry. This solution is built with HTML, CSS
									and JavaScript.
								</p>
							</article>
							<div class="view-btn">
								<input type="submit" value="view code">
							</div>
						</form>
					</div>	

					<div class="grid-item">
						<form class="project">
							<!--
							<img onmouseover="changeURL(this, 'https://media.giphy.com/media/ExkCgcHI7Gqx4hsNny/giphy.gif')" 
							onmouseout="changeURL(this, 'imgs/projectImgs/port.png')" src="imgs/projectImgs/port.png" alt="Web Developer Portfolio">
							-->
							<video width="800" height="600" controls>
								<source src="files/port.mp4" type="video/mp4">
							</video>
							<article class="description">
								<p>
									MY Portfolio site which you are now navigating is created 
									using vanilla HTML, CSS, JavaScript and a bit of PHP.
								</p>
							</article>
							<div class="view-btn">
								<input type="submit" value="view code">
							</div>
						</form>
					</div>

							
				</div>
			</section>
			<!--End of Projects-->	


			<!--Email Form-->
			<section id="form-container" class="child">
			
				<form class="contact-form"  method="post">
					<h1>Feel Free to Contact Me</h1>

					<label>Email</label>
					<input type="text" name="email" placeholder="Enter Email" required/>

					<label>Subject</label>
					<input type="text" name="subject" placeholder="Enter Subject" required/>

					<label>Message</label>
					<textarea name="msg" rows=11 cols=50 maxlength=250 placeholder="Leave a message..." required></textarea>
					
					<input type="submit" name="submit" value="Submit"></button>
				</form>

			</section>
			<!--End of Email Form-->


    </body>

	<!--JavaScript-->
    <script src="js/hover.js"></script>
	<!--JavaScript-->
<?php
	//if submit button was clicked
    if( isset($_POST['submit']) ) {
 
        //Get Form input
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg =  $_POST['msg'];

        //Validatae input
        $msg = wordwrap($msg,70);

        //Setup Email
        $to = "example@gmail.com";
        $headers = 'From: ' . $email;

        mail($to, $subject, $msg, $headers);

        
    
?>
        <script>
            window.alert("Message sent!");
        </script>
<?php
    }
?>

</html>
