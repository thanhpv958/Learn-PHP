<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	?>
	<div class="login-wrap">
		<h2>Login</h2>
		
		<div class="form">
			<form action="#" method="POST">
				<input type="text" placeholder="Username" name="username"  />
				<input type="text" placeholder="Email" name="email"  />
				<input type="password" placeholder="Password" name="password"  />

				<button> Sign in </button>
				<a href="#"> <p> Don't have an account? Register </p></a>
			</form>
		</div>
	</div>
</body>
</html>