<?php session_start(); ?>
<?php if (!isset($_SESSION['admin'])) { header('Location: index.php'); } ?>
<?php
if (isset($_GET['logout'])) {
	session_unset();
	session_destroy();
	header('Location: index.php');
	exit();
}
?>
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "ice_cream");

$query = "SELECT * FROM orders";
$result_set = mysqli_query($con, $query);

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
header {
	width: 100%;
	height: 8vh;
	background-color: #ff3399;
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	align-items: center;
}
header h1 {
	width: 50%;
	text-align: center;
	color: #444;
}
header form {
	width: 50%;
	display: flex;
	flex-direction: row;
	justify-content: flex-end;
}
header form button {
	display: block;
	border: 3px solid #444;
	border-radius: 8px;
	font-size: 0.9rem;
	padding: 8px 12px;
	font-weight: bolder;
	margin: 0 60px;
}
button:hover {
	cursor: pointer;
}
table {
	width: 90%;
	margin: 20px auto 20px auto;
	border-collapse: collapse;
}
table tr th {
	background: #ff3399;
	text-align: left;
	color: #444;
}
table tr th, tr td {
	padding: 10px;
	border-bottom: 3px solid #ff3399;
}
</style>
<body>
	<header>
		<h1>Admin</h1>
		<form action="view-order.php" method="get">
			<button type="submit" name="logout">Log Out</button>
		</form>
	</header>
	<div class="view-orders">
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Address</th>
				<th>Delivery Date</th>
				<th>City</th>
				<th>Category</th>
				<th>Weight</th>
			</tr>
			<?php
			
			while ($row = mysqli_fetch_assoc($result_set)) {
				$id = $row['id'];
				$name = $row['name'];
				$contact = $row['contact'];
				$email = $row['email'];
				$address = $row['address'];
				$delivery_date = $row['delivery_date'];
				$city = $row['city'];
				$category = $row['category'];
				$weight = $row['weight'];

				echo '<tr>
						<td>'.$id.'</td>
						<td>'.$name.'</td>
						<td>'.$contact.'</td>
						<td>'.$email.'</td>
						<td>'.$address.'</td>
						<td>'.$delivery_date.'</td>
						<td>'.$city.'</td>
						<td>'.$category.'</td>
						<td>'.$weight.'</td>
					</tr>';

			}
			?>
		</table>
	</div>
</body>
</html>