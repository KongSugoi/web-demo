<?php
	include 'config.php';
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<title> Welcome to my website </title>
	<link rel="stylesheet" href="style_in.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
	body {
 	 background-image: url(https://github.com/dnamgithub33/test2/blob/main/tuyen_tv_isp.JPG?raw=true);
	 background-repeat: no-repeat;
 	 background-attachment: fixed;  
 	 background-size: cover;
	}
    </style>
</head>
<section>
	<div class="information">
		<div class="form">
		<form action="signin_submit.php" method="POST">
			<div class="input-form">
				<span><b> Username </b></span>
				<input type="text" name="username">
			</div>
			<div class="input-form">
				<span><b> Password </b></span>
				<input type="password" name="password">
			</div>
			<div class="remember">
				<label><input type="checkbox" name="">Remember me</label>
			</div> 
			<div class="input-form">
				<button class="submit" name="submit">
					Sign in
				</button>
			</div>
		</form>
			<div class="input-form">
				<p> You don't have account? <a href="signup.php"><b>Sign up</b></a></p>
			</div>
		</div>
	</div>
</section>
<body>
</body>
</html>
/*Are you sure this is real flag? -> ISPCTF{L34rn1ng_Web_15_3z}*/