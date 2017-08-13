<!DOCTYPE HTML>
<html>
<head>
	<title>Regjistrohu</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery.min.js"></script>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="index.html"><img src="images/logo1.png" title="healthcare"/></a>
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

<div class="container" style="margin-top:3%;">
	<div class="contact-grids">
		<div class="contact-form">
			<form action="" method="post">
			<div class="contact-form-row">
				<div style="margin-left:30%">
				<span>Username:</span>
				<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="contact-form-row">
				<div style="margin-left:30%; margin-top:2%">
				<span>Email:</span>
				<input type="email" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}">
				</div>
			</div>
			<div class="clearfix"> </div>
				<div class="contact-form-row">
				<div style="margin-left:30%; margin-top:2%">
				<span>Fjalekalimi:</span>
				<input type="password" class="text" value="Fjalekalimi" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fjalekalimi';}">
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="contact-form-row">
				<div style="margin-left:30%; margin-top:2%">
				<span>Ri-shkruaj fjalekalimin:</span>
				<input type="password" class="text" value="Fjalekalimi" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fjalekalimi';}">
				</div>
			</div>
			<div class="clearfix"> </div>
				<input type="submit" value="Regjistrohu" style="margin-left:38%; margin-top:3%">
			</form>
		</div>
	</div>
</div>
			
<div class="footer" style="position:relative; margin-top:7%">
	<div class="container">
	<!-- <p class="copy-right">HealthCare</p> -->
	</div>
</div>

</body>
</html>

