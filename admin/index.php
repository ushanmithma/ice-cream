<?php session_start(); ?>
<?php if (isset($_SESSION['admin'])) { header('Location: view-order.php'); } ?>
<?php

if (isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$password = $_POST['password'];

	if (empty($username) || empty($password)) {
		header('Location: index.php?error=empty');
	} else {
		
		if ($username == "admin" && $password == "admin") {
			$_SESSION['admin'] = "Logged In";
			header('Location: view-order.php');
		} else {
			header('Location: index.php?error=invalid');
		}

	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../img/icon1.png" sizes="16x16 32x32" type="image/png">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<style>
* {margin: 0;padding: 0;box-sizing: border-box;}
body { font-family: 'Roboto', sans-serif; background-color: #f8f9fa; }
form {
	width: 400px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
fieldset {
	padding: 10px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	border: 3px solid #444;
}
p.error { font-size: 0.6rem; color: red; text-align: right; }
fieldset .form-item {
	display: flex;
	flex-direction: column;
	margin-bottom: 20px;
}
fieldset .form-item label {
	font-size: 0.7rem;
	color: #444;
	margin-bottom: 12px;
}
fieldset .form-item input, button {
	border: 3px solid #444;
	border-radius: 8px;
	font-size: 0.9rem;
	padding: 12px 8px;
	font-weight: bolder;
}
fieldset .form-item button {
	background-color: #444;
	color: #fff;
}
fieldset .form-item input:focus, button:focus {
	outline: 0;
}
button:hover {
	cursor: pointer;
}
</style>
<body>
	<div class="login-form">
		<form action="index.php" method="post">
			<fieldset>
				<legend><h2>Log In</h2></legend>
				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == 'empty') {
						echo '<p class="error">Fill all the fields!</p>';
					} else if ($_GET['error'] == 'invalid') {
						echo '<p class="error">Invalid username or password!</p>';
					}
				}
				?>
				<div class="form-item">
					<label for="username">Username:</label>
					<input type="text" name="username">
				</div>
				<div class="form-item">
					<label for="password">Password:</label>
					<input type="password" name="password">
				</div>
				<div class="form-item">
					<button type="submit" name="submit">Log In</button>
				</div>
			</fieldset>
		</form>
	</div>
</body>
</html>