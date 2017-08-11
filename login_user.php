<?php
	include 'klaset.php';
	session_start();
	
	if(isset($_POST['Kycu'])){
		
		$username = $pwd = $error = "";
		
		if(empty($_POST['shfrytezuesi']) || empty($_POST['fjalekalimi'])){
			$error = "Username ose Fjalekalimi eshte gabim!";
		}
		else{
			$username = testInput($_POST['shfrytezuesi']);
			$pwd = md5(testInput($_POST['fjalekalimi']));
		}
		
		$conn = mysqli_connect('localhost','root','', 'healthcare') or die("Connection failed: " . mysqli_connect_error());
		$query = "SELECT * FROM users where password='$pwd' AND (username='$username' OR email='$username'";
		if(!mysqli_query($conn, $query));
				
		$rows = mysqli_affected_rows($query);
		if($rows == 1){
			$_SESSION['pozita'] = 	
			$_SESSION['login-user'] = $username;
		}else{
			$error = "Username ose Fjalekalimi eshte gabim!";
		}
		
	}
	
		
	function testInput($teDhenat){
		$teDhenat = trim($teDhenat);
		$teDhenat = htmlspecialchars($teDhenat);
		$teDhenat = stripslashes($teDhenat);
		return $teDhenat;
	}
?>
<html>
<head>
<title> Login </title>

		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/jquery.min.js"></script>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
</head>
<body style="//background-color: rgb(55,128,142); color:rgb(53,121,136)">

<div class="header">
	<div class="container">
		<div class="logo">
			<a href="indexi.html"><img src="images/logo1.png" title="healthcare"/></a>
		</div>
		<div class="top-nav">
			<span class="menu"> </span>
			<ul style="margin-top:2%">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about_us.html">Rreth nesh</a></li>
				<li><a href="registerPacient.php">Regjistrohu</a></li>
				<li><a href="login_user.php">Login</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="container" style="margin-top:7%;">
	<div class="contact-grids">
		<div class="contact-form">
			<form action="" method="post">
			<div class="contact-form-row">
				<div style="margin-left:30%">
				<span>Shfrytezuesi/e-mail:</span>
				<input type="text" name="shfrytezuesi" class="text" placeholder="Shfrytezuesi/e-mail">
				</div>
			</div>
			<div class="clearfix"> </div>
				<div class="contact-form-row">
				<div style="margin-left:30%; margin-top:5%">
				<span>Fjalekalimi:</span>
				<input type="password" name="password" class="text" placeholder="Fjalekalimi">
				</div>									
			</div>
			<div class="clearfix"> </div>
				<input type="submit" name="Kycu" value="KyÃ§u" style="margin-left:42%; margin-top:3%">
			</form>
		</div>
	</div>
</div>
		

<div class="footer" style="position:relative; margin-top:13.5%">
	<div class="container">
	<!-- <p class="copy-right">HealthCare</p> -->
	</div>
</div>		
	
</body>
</html>