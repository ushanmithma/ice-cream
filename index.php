<?php


	if (isset($_GET['error']) && !empty($_GET['error'])) {

		$error_type = $_GET['error'];
		if ($error_type == "empty") {
			$messages = '<p style="color: red;">Fill all fields</p>';
		} else if ($error_type == "name") {
			$messages = '<p style="color: red;">Invalid name</p>';
		} else if ($error_type == "contact") {
			$messages = '<p style="color: red;">Invalid contact number</p>';
		} else if ($error_type == "email") {
			$messages = '<p style="color: red;">Invalid email address</p>';
		} else if ($error_type == "city") {
			$messages = '<p style="color: red;">Invalid city</p>';
		} else if ($error_type == "category") {
			$messages = '<p style="color: red;">Invalid category</p>';
		} else if ($error_type == "weight") {
			$messages = '<p style="color: red;">Invalid weight</p>';
		} else if ($error_type == "date") {
			$messages = '<p style="color: red;">Invalid date</p>';
		} else if ($error_type == "dateless") {
			$messages = '<p style="color: red;">The delivery date must be today or later</p>';
		} else {
			$messages = '<p style="color: red;">Something went wrong</p>';
		}

	} else if (isset($_GET['success']) && !empty($_GET['success'])) {
		$messages = '<p style="color: green;">We are delivering order soonly</p>';
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="img/icon1.png" sizes="16x16 32x32" type="image/png">
	<title>Vanilla Ice cream Cafe - The best traditional ice cream</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Roboto:400,500,700&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="background"></div>
	<header>
		<nav>
			<ul>
				<li><a class="scroll" href="#overview">Overview</a></li>
				<li><a class="scroll" href="#products">Products</a></li>
				<li><a class="scroll" href="#dessert">Dessert</a></li>
				<li><a href="index.php"><img src="img/logo.png" alt="logo"></a></li>
				<li><a class="scroll" href="#flavours">Flavours</a></li>
				<li><a class="scroll" href="#special">Special</a></li>
				<li><a class="scroll" href="#orders">Orders</a></li>
			</ul>
		</nav>
	</header>
	<div class="welcome" id="home">
		<div class="content">
			<h1>Vanilla Ice Cream Cafe</h1>
			<h3>- The best traditional ice cream -</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex tempore consectetur officiis, impedit illo nihil ut, doloribus at earum, inventore blanditiis nisi provident quis architecto nulla. Ullam, culpa. Quos, rem?</p>
		</div>
	</div>
	<div class="container">
		<div class="overview" id="overview">
			<img src="img/icon7.png" alt="icon">
			<h1>Welcome to Ice Cream</h1>
			<div class="overview-content">
				<div class="overview-item">
					<img src="img/w1.jpg" alt="welcom-image">
					<h3>Hot Chocolate Cream</h3>
					<p>Chco Chips</p>
				</div>
				<div class="overview-item">
					<img src="img/w2.jpg" alt="welcom-image">
					<h3>Cool Scoop Ice Cream</h3>
					<p>Coffee</p>
				</div>
				<div class="overview-item">
					<img src="img/w3.jpg" alt="welcom-image">
					<h3>Banana with Chocolate</h3>
					<p>Exotic Flavour</p>
				</div>
				<div class="overview-item">
					<img src="img/w4.jpg" alt="welcom-image">
					<h3>Cool Scoop Ice Cream</h3>
					<p>Coffee</p>
				</div>
			</div>
		</div>
		<div class="trendings" id="products">
			<img src="img/icon3.png" alt="icon">
			<h1>Trending Products</h1>
			<div class="trendings-category">
				<div class="trendings-cate-item"><h3>Butter Scotch</h3></div>
				<div class="trendings-cate-item"><h3>Blur Moon</h3></div>
				<div class="trendings-cate-item"><h3>Butter Pecan</h3></div>
			</div>
			<div class="trendings-content">
				<div class="trendings-item">
					<img src="img/t1.jpg" alt="trending-ice-crem">
					<h3>Neapolitan Ice Cream</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t2.jpg" alt="trending-ice-crem">
					<h3>Nestle Extreme Salted Caramel</h3>
					<h4>$312.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t3.jpg" alt="trending-ice-crem">
					<h3>Magnum Solero Ice Cream</h3>
					<h4>$329.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t4.jpg" alt="trending-ice-crem">
					<h3>Cookies and Cream Ice Cream</h3>
					<h4>$222.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t5.jpg" alt="trending-ice-crem">
					<h3>Kellys Rocky Road Ice Cream</h3>
					<h4>$218.00 <s>$315.00</s></h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t6.jpg" alt="trending-ice-crem">
					<h3>Extreme Raspberry Double Cream Ice Cream</h3>
					<h4>$528.00 <s>$600.00</s></h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t7.jpg" alt="trending-ice-crem">
					<h3>Cold Stone Creamery</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t8.jpg" alt="trending-ice-crem">
					<h3>Cornetto Unicorn</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t9.jpg" alt="trending-ice-crem">
					<h3>Cadbury Button Ice Cream</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t10.jpg" alt="trending-ice-crem">
					<h3>Battered Ice Cream</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t11.jpg" alt="trending-ice-crem">
					<h3>Chocolate Cone Ice Cream</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="trendings-item">
					<img src="img/t12.jpg" alt="trending-ice-crem">
					<h3>Strawberry Blonde Cold Stone</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
			</div>
		</div>
		<div class="dessert" id="dessert">
			<div class="dessert-content">
				<img src="img/icon5.png" alt="icon">
				<h1>Celebrate Food with Dessert</h1>
				<h2>Ice Cream and Candies Start From $14</h2>
				<a href="#">Read more</a>
			</div>
		</div>
		<div class="flavours" id="flavours">
			<img src="img/icon6.png" alt="icon">
			<h1>Flavours of Ice Cream</h1>
			<div class="flavours-image">
				<div class="floavours-item">
					<img src="img/image1.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Peanut Butter Cup</h4>
						<p>Peanut butter cups and ripples collide with chocolate ice cream.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image2.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Heaps of Love</h4>
						<p>Oreos, brownies, cookie dough, pecans, chocolate and caramel ripples in vanilla ice cream.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image3.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Cotton Candy Twist</h4>
						<p>Two cotton candy ice creams swirled together.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image4.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Fat Elvis</h4>
						<p>Sweet banana ice cream, salty peanut butter ripple and chocolate chips.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image5.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Black Cherry</h4>
						<p>Simply sweet black cherry ice cream with boat-loads of whole black cherries.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image6.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Blue Moon</h4>
						<p>Sweet Furit Loops taste and a wacky blue color.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image7.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Kitty Kitty Bang Bang</h4>
						<p>Cheesecake ice cream, raspberry ripples, Oreos and chunks of chocolate.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image8.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Cappuccino Break</h4>
						<p>Crisp coffee-infused ice cream chrned with chocolate-covered toffee and candy coated almonds.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image9.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Superman</h4>
						<p>Cherry, Blue and Vanilla ice creams combine forces to bring you one super scoop!</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image10.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Zangilar</h4>
						<p>Chocolate that tastes just like a fudge brownie.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image11.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Mint Avalanche</h4>
						<p>Minty green ice cream with Ande's Candies and Grasshopper cookies topped off with a chocolate fudge swirl.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image12.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Butter Pecan</h4>
						<p>Butter pecan ice cream with lightly roasted salted pecans.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image13.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Strawberry</h4>
						<p>Award-winning strawberry.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image14.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Old Fashioned Vanilla</h4>
						<p>Vanilla ice cream with pure Madagascar vanilla.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image15.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Pomberry Cascade</h4>
						<p>Blueberry and pomegranate ripples swirled into a sugar free vanilla ice cream.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image16.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Raspberry Lemon Italian Ice</h4>
						<p>The top two Italian Ice flavours twisted into a smooth combination.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image17.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Cookie Dough</h4>
						<p>Sweet cookie-flavored ice cream with heaps of soft chocolate chip cookie dough chunks and tons of rich chocolate chips.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image18.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Just got Serious</h4>
						<p>Smooth salted caramel ice cream brimming with rich sea salt fudge and salted chashews.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image19.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Super Thick Milkshakes</h4>
						<p>Vanilla, Chocolate, Strawberry, Oreo and Espresso.</p>
					</div>
				</div>
				<div class="floavours-item">
					<img src="img/image20.jpg" alt="image">
					<div class="floavours-image-item-overlay">
						<h4>Real Fruit Smothies</h4>
						<p>Strawberry, Pina Colada, Mango, and Triple Berry.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="services" id="services">
			<img src="img/icon4.png" alt="icon">
			<h1>Our Services</h1>
			<div class="service">
				<div class="service-item">
					<img src="img/truck.png" alt="truck-icon">
					<div class="ser-icon">
						<h4>Free Shipping</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci porro nam neque pariatur nostrum, consectetur</p>
					</div>
				</div>
				<div class="service-item">
					<img src="img/refresh.png" alt="refresh-icon">
					<div class="ser-icon">
						<h4>Free Returns</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci porro nam neque pariatur nostrum, consectetur error, maiores dolorem iste?</p>
					</div>
				</div>
				<div class="service-item">
					<img src="img/help.png" alt="help-icon">
					<div class="ser-icon">
						<h4>Customer Support</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci porro nam neque pariatur nostrum</p>
					</div>
				</div>
			</div>
		</div>
		<div class="clients">
			<div class="client-head">
				<img src="img/icon8.png" alt="icon">
				<h1>Clients are saying</h1>
			</div>
			<div class="clients-msg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque recusandae quae natus, voluptatibus vel suscipit repellendus quod temporibus explicabo cum magnam excepturi at similique vitae illum. Nisi, tenetur ipsum magni!</p>
				<div class="client-avatar">
					<img src="img/person.jpg" alt="person">
					<div class="person-details">
						<h4>Client Name</h4>
						<p>Client Level</p>
					</div>
				</div>
			</div>
			<div class="clients-msg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque recusandae quae natus, voluptatibus vel suscipit repellendus quod temporibus explicabo cum magnam excepturi at similique vitae illum. Nisi, tenetur ipsum magni!</p>
				<div class="client-avatar">
					<img src="img/person.jpg" alt="person">
					<div class="person-details">
						<h4>Client Name</h4>
						<p>Client Level</p>
					</div>
				</div>
			</div>
		</div>
		<div class="special-products" id="special">
			<img src="img/icon9.png" alt="icon">
			<h1>Special Products</h1>
			<div class="special-products-content">
				<div class="s-products-item">
					<img src="img/sp1.jpg" alt="special-products-item">
					<h3>Choco Bar Ice Cream</h3>
					<h4>$218.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp2.jpg" alt="special-products-item">
					<h3>Saffron Strawberry</h3>
					<h4>$221.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp3.jpg" alt="special-products-item">
					<h3>Swiss Mocha</h3>
					<h4>$329.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp4.jpg" alt="special-products-item">
					<h3>Rocky Road</h3>
					<h4>$80.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp5.jpg" alt="special-products-item">
					<h3>Choco Bar Ice Cream</h3>
					<h4>$218.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp6.jpg" alt="special-products-item">
					<h3>Choco Bar Ice Cream</h3>
					<h4>$218.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp7.jpg" alt="special-products-item">
					<h3>Rocky Road</h3>
					<h4>$80.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp8.jpg" alt="special-products-item">
					<h3>Choco Bar Ice Cream</h3>
					<h4>$218.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
				<div class="s-products-item">
					<img src="img/sp9.jpg" alt="special-products-item">
					<h3>Choco Bar Ice Cream</h3>
					<h4>$218.00</h4>
					<img src="img/3-star.png" alt="3-star">
					<a href="#">Order Now</a>
				</div>
			</div>
		</div>
		<div class="context">
			<div class="caption">
				<h1>Best Ice Cream For <br>Lowest Cost</h1>
			</div>
		</div>
		<div class="orders" id="orders">
			<img src="img/icon10.png" alt="icon">
			<h1>Choose Your Order</h1>
			<div class="order-form">
				<?php if (isset($messages) && !empty($messages)) { echo $messages; } ?>
				<form action="php/get-order.php" method="get" id="order-form">
					<div class="order-item">
						<label for="name">Name</label>
						<input type="text" name="name" maxlength="500" required>
					</div>
					<div class="order-item">
						<label for="contact">Contact No</label>
						<input type="text" name="contact" required>
					</div>
					<div class="order-item">
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>
					<div class="order-item">
						<label for="address">Address</label>
						<input type="text" name="address" required>
					</div>
					<div class="order-item">
						<label for="date">Delivery Date</label>
						<input type="date" name="delivery-date" min="<?php echo date("Y-m-d"); ?>" required>
					</div>
					<div class="order-item">
						<label for="city">City</label>
						<select name="city" required>
							<option value="Colombo">Colombo</option>
							<option value="Kandy">Kandy</option>
							<option value="Kadawatha">Kadawatha</option>
							<option value="Gampaha">Gampaha</option>
						</select>
					</div>
					<div class="order-item">
						<label for="category">Category</label>
						<select name="category" required>
							<option value="Chocolate">Chocolate</option>
							<option value="Vanilla">Vanilla</option>
							<option value="Strawberry">Strawberry</option>
							<option value="Mix">Mix</option>
						</select>
					</div>
					<div class="order-item">
						<label for="weight">Weight (g)</label>
						<input type="number" name="weight" min="1" max="1000" required>
					</div>
					<div class="order-item">
						<button type="submit" name="order">Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="nav-links">
			<ul>
				<li class="active"><a class="scroll" href="#overview">Overview</a></li>
				<li><a class="scroll" href="#products">Products</a></li>
				<li><a class="scroll" href="#dessert">Dessert</a></li>
				<li><a class="scroll" href="#flavours">Flavours</a></li>
				<li><a class="scroll" href="#special">Special</a></li>
				<li><a class="scroll" href="#orders">Orders</a></li>
			</ul>
		</div>
		<div class="footer-details">
			<div class="poweredby">
				<img src="img/clogo1.jpg" alt="clogo">
				<img src="img/clogo2.png" alt="clogo">
				<img src="img/clogo3.png" alt="clogo">
				<img src="img/clogo4.png" alt="clogo">
				<img src="img/clogo5.png" alt="clogo">
				<img src="img/clogo6.png" alt="clogo">
			</div>
			<div class="logo">
				<img src="img/logo.png" alt="logo">
			</div>
			<div class="copyright-notice">
				<p>Copyright © 2019 | Design By Your Name</p>
				<img src="img/icon1.png" alt="icon">
			</div>
		</div>
	</footer>
</body>
<script src="js/main.js"></script>
</html>