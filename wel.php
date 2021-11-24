<?php
	session_start();
	?>
<html>
<head>
<title>PORTFOLIO | Photos | Music | Design</title>
<link rel= "Stylesheet" href="style.css">
</head>
<body>
<header>
	<nav>
	<h1>Online Portfolio Portal</h1>
	<ul id="nav">
		<li><a class="homered" href="wel.php">HOME</a></li>
		<li><a button
				<?php
				if(!(isset($_SESSION['uname'])))
				{					
					echo "onclick='myFunction()' href='register.html'";					
					}
					else{
					echo "href='images.html'";
					}
					echo ">IMAGES</a></li>";
					?>
		<li><a button"; 
				<?php
				if(!(isset($_SESSION['uname'])))
				{
					echo "onclick='myFunction()' href='register.html'";					
					}
					else{		
					echo "href='videos.html'";
					}
					echo ">VIDEOS</a></li>";
				?>
		<li><a class="homeblack" href="about.html">ABOUT US</a></li>
		<li><a class="homeblack" href="contact.html">CONTACT</a></li>
		<li><a class="homeblack" href="register.html">REGISTER</a></li>
		<?php
		if(!(isset($_SESSION['uname'])))
			echo "<li><a class='homeblack' href='loginform.html'>LOGIN</a></li>";
		else 
			echo "<li><a class='homeblack' href='logout.php'>LOGOUT</a></li>";
		?>
	</ul>	
	</nav>
</header>
<div class="divider"></div>
<h2 class="homesub">HELLO GUYS WELCOME TO <span style="color:white">PORTFOLIO</span> AND ENJOY</h2>
<h1 class="homedes">VIDEOS & </h1>
<h1 class="homepho">PHOTOGRAPHY </h1>
<br>
<script>
function myFunction() {
  alert("Please Login or register first.");
}
</script>
<li><button class="buttonhome" href="wel.html">PORTFOLIO </button></li><br>
<h2 class="homesub">Send us your best photos and videos and we will upload it for your</h2>
</body>
</html>	 