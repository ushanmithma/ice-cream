<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "ice_cream");

if (isset($_GET['order'])) {
	$name = mysqli_real_escape_string($con, $_GET['name']);
	$contact = mysqli_real_escape_string($con, $_GET['contact']);
	$email = mysqli_real_escape_string($con, $_GET['email']);
	$address = mysqli_real_escape_string($con, $_GET['address']);
	$delivery_date = mysqli_real_escape_string($con, $_GET['delivery-date']);
	$city = mysqli_real_escape_string($con, $_GET['city']);
	$category = mysqli_real_escape_string($con, $_GET['category']);
	$weight = mysqli_real_escape_string($con, $_GET['weight']);

	if (empty($name) || empty($contact) || empty($email) || empty($address) || empty($delivery_date) || empty($city) || empty($category) || empty($weight)) {
		header('Location: ../index.php?error=empty#orders');
	} else if (!preg_match("/^[a-zA-Z]*$/", trim($name)) || strlen($name) > 500) {
		header('Location: ../index.php?error=name#orders');
	} else if (!is_numeric($contact) || strlen(trim($contact)) > 15) {
		header('Location: ../index.php?error=contact#orders');
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header('Location: ../index.php?error=email#orders');
	} else if (!preg_match("/^[a-zA-Z]*$/",$city) && !isset($city)) {
		header('Location: ../index.php?error=city#orders');
	} else if (!preg_match("/^[a-zA-Z]*$/",$category) && !isset($category)) {
		header('Location: ../index.php?error=category#orders');
	} else if (!is_numeric($weight)) {
		header('Location: ../index.php?error=weight#orders');
	} else {

		if (isset($delivery_date)) {
			$exploded_date = explode("-", $delivery_date);
			if (!checkdate($exploded_date[1], $exploded_date[2], $exploded_date[0])) {
				header('Location: ../index.php?error=date#orders');
			} else {
				if (strtotime($delivery_date) < strtotime(date("Y-m-d"))) {
					header('Location: ../index.php?error=dateless#orders');
				} else {

					$query = "INSERT INTO orders (name, contact, email, address, delivery_date, city, category, weight) VALUES ('{$name}', '{$contact}', '{$email}', '{$address}', '{$delivery_date}', '{$city}', '{$category}', '{$weight}')";
					if (!mysqli_query($con, $query)) {
						header('Location: ../index.php?error=something#orders');
					} else {
						header('Location: ../index.php?success=ordered#orders');
					}

				}
			}
		}

	}
}

?>