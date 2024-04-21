<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Snowy Resort</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>
<body>
	<header>
		

		<nav class="navbar">
			<a href="#home" class="active">home</a>
			<a href="#about">about</a>
			<a href="#menu">menu</a>
			<a href="#team">team</a>
			<a href="#reservation">reservation</a>
			<a href="#blog">blog</a>
            <a href="resvcheck.php">check reservation status</a>
		</nav>

		<div class="icons">
			<i class="fas fa-bars" id="menu"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-heart"></i>
		</div>
	</header>

	<div class="home" id="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper wrapper">
				<div class="swiper-slide slide slide1">
					<div class="content">
						<img src="img/img2.jpg">

						<h3>flavours for royalty</h3>
						<h1>gift voucher</h1>
						<p>
							to our beloved customers
						</p>
						<a href="#" class="btn">order now</a>
					</div>
				</div>

				<div class="swiper-slide slide slide2">
					<div class="content">
						<img src="img/img3.jpg">

						<h3>life is short make it sweet</h3>
						<h1>the fresh</h1>
						<p>
							food restuarant
						</p>
						<a href="order.html" class="btn">order now</a>
					</div>
				</div>

				<div class="swiper-slide slide slide3">
					<div class="content">
						<img src="img/img1.jpg">

						<h3>now off 10% on dishes</h3>
						<h1>fresh fruits</h1>
						<p>
							you will love it!
						</p>
						<a href="order.html" class="btn">order now</a>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>

	<section class="welcome" id="about">
		<h1 class="heading">WELCOME TO SNOWY</h1>
		<center><h3 class="sub-heading"> ~ Luxury and Quality ~</h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="img/img6.jpg">
				</div>	

				<div class="content">
					<h3>PROFESSIONAL LEVEL</h3>
					<p>To have glittering smiles, on the faces of our customers, by delivering crafted experiences”. And our mission is to “Create the perfect place, to meet and greet, where every customer can spend, quality time with their loved ones.</p>

					<a href="#" class="btn">Read More</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="img/img6.jpg">
				</div>	

				<div class="content">
					<h3>FRESH FOOD GUARANTEED</h3>
					<p>People who like to eat are always the best people. Nothing brings people together like good and fresh food.</p>

					<a href="#" class="btn">Read More</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="img/img8.png">
				</div>	

				<div class="content">
					<h3>THE MENU IS PLENTIFUL</h3>
					<p>It's not your customer's job to remember you, it is your obligation & responsibility to make sure they don't have the chance to forget you.Don't deliver a product, deliver an experience.</p>

					<a href="#" class="btn">Read More</a>
				</div>
			</div>
		</div>
	</section>


	<section class="our-menu" id="menu">
		<h1 class="heading">food menu</h1>
		<center><h3 class="sub-heading"> ~here's what we offer~</h3></center>

		<div class="menu-container">

			<div class="item">
				<div class="item-name">
					<h2>APPETIZERR</h2>
					<img src="img/img.png">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Pepper Chesse Balls</h3>
						<span class="dots"></span>
						<h3>420</h3>

						<ul>
							<li><a href="#">Italian/</a></li>
							<li><a href="#">Sausage/</a></li>
							<li><a href="#">Sessioning</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Afgani Paneer Tikka</h3>
						<span class="dots"></span>
						<h3>450</h3>

						<ul>
							<li><a href="#">panner saffron</a></li>
							<li><a href="#">in cardamon,</a></li>
							<li><a href="#">flavoured yougurt,</a></li>
							<li><a href="#">and cream cheese</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Ting-Ming Mushroom</h3>
						<span class="dots"></span>
						<h3>440</h3>

						<ul>
							<li><a href="#">Garli tomato</a></li>
							<li><a href="#"> chilli sauce,</a></li>
							<li><a href="#">soya and herb infused,</a></li>
							<li><a href="#">tossed with mushroom</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="item-name">
					<h2>SOUPS AND SALADSS</h2>
					<img src="stick1.jpg">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Watermelon and feta salad</h3>
						<span class="dots"></span>
						<h3>270</h3>

						<ul>
							<li><a href="#">watermelon/</a></li>
							<li><a href="#">feta cheese</a></li>
							<li><a href="#">with mix lettuce</a></li>
 						</ul>
					</div>

					<div class="item-menu">
						<h3>Cream of Soup</h3>
						<span class="dots"></span>
						<h3>230</h3>

						<ul>
							<li><a href="#">Mushroom/</a></li>
							<li><a href="#">Tomato/</a></li>
							<li><a href="#">Broccoli/</a></li>
							<li><a href="#">Chicken</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Soups</h3>
						<span class="dots"></span>
						<h3>250</h3>

						<ul>
							<li><a href="#">Manchow//</a></li>
							<li><a href="#">Sweetcorn/</a></li>
							<li><a href="#">Hot&Sour/</a></li>
							<li><a href="#">Lemon Coriander</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="item-name">
					<h2>COCKTAILSS</h2>
					<img src="stick1.jpg">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Cuba Libre</h3>
						<span class="dots"></span>
						<h3>700</h3>

						<ul>
							<li><a href="#">Bacardi,</a></li>
							<li><a href="#">Lime wedges,</a></li>
							<li><a href="#">Cola</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>French75</h3>
						<span class="dots"></span>
						<h3>$25</h3>

						<ul>
							<li><a href="#">Gin,</a></li>
							<li><a href="#">Lime Juice,</a></li>
							<li><a href="#">sugar syrup,</a></li>
							<li><a href="#">champagne</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Whisky Sour</h3>
						<span class="dots"></span>
						<h3>$25</h3>

						<ul>
							<li><a href="#">Bourbon whisky,</a></li>
							<li><a href="#">egg white,</a></li>
							<li><a href="#">lime juice,</a></li>
							<li><a href="#">gomme syrup</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="item-name">
					<h2>MAINSS</h2>
					<img src="stick1.jpg">
				</div>

				<div class="item-body">
					<div class="item-menu">
						<h3>Paneer Rajwada</h3>
						<span class="dots"></span>
						<h3>580</h3>

						<ul>
							<li><a href="#">fried finger,</a></li>
							<li><a href="#">cut panner</a></li>
							<li><a href="#">in red gravy</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Vegetable Angara</h3>
						<span class="dots"></span>
						<h3>530</h3>

						<ul>
							<li><a href="#">Asorted indian vegetables,</a></li>
							<li><a href="#">with hot pungent gravy,</a></li>
							<li><a href="#">delight of spicy food lovers</a></li>
						</ul>
					</div>

					<div class="item-menu">
						<h3>Green Thai Curry</h3>
						<span class="dots"></span>
						<h3>550</h3>

						<ul>
							<li><a href="#">Traditional thai style,</a></li>
							<li><a href="#">green curry with exotic vegetables</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="item-name">
					<h2>INDIAN BREADSS</h2>
					<img src="stick1.jpg">
				</div>
				<div class="item-body">
					<div class="item-menu">
						<h3>Butter Roti</h3>
						<span class="dots"></span>
						<h3>60</h3>
					</div>
					<div class="item-menu">
						<h3>Garlic Naan</h3>
						<span class="dots"></span>
						<h3>85</h3>
					</div>
					<div class="item-menu">
						<h3>Chesse Naan</h3>
						<span class="dots"></span>
						<h3>100</h3>
					</div>
					<div class="item-menu">
						<h3>Lachha Paratha</h3>
						<span class="dots"></span>
						<h3>90</h3>
					</div>
					<div class="item-menu">
						<h3>Kulcha</h3>
						<span class="dots"></span>
						<h3>95</h3>
					</div>
				</div>
			</div>


		</div>
	</section>


	<section class="our-team" id="team">
		<h1 class="heading">Our Talented Chefs</h1>
		<center>
			<h3 class="sub-heading">~Experiance $ Enthusiasm</h3>
		</center>
		<div class="our-chef">
			<div class="item">
				<div class="image">
					<img src="chef1.jpg">
				</div>

				<div class="chef-info">
					<div>
					<h3>Sanjeev Kapoor</h3>
					<span>Master chef</span>

					<ul>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image">
					<img src="chef2.jpg">
				</div>
				<div class="chef-info">
					<div>
					<h3>Vikas Khanna</h3>
					<span>Master chef</span>
					<ul>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image">
					<img src="chef3.jpg">
				</div>
				<div class="chef-info">
					<div>
					<h3>Garima Arora</h3>
					<span>Master chef</span>
					<ul>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="reservation" id="reservation">

		<div class="image">
			
		</div>
		<div class="form">
			<h1 class="heading">Reserve a table</h1>
			<center><h3 class="sub-heading"> ~check out our place~ </h3></center>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-holder">
					<div>
						<select name="noofpeople">
							<option value="1">1 people</option>
							<option value="2">2 people's</option>
							<option value="3">3 people's</option>
							<option value="4">4 people's</option>
							<option value="5">5 people's</option>
							<option value="6">6 people's</option>
							<option value="7">7 people's</option>
							<option value="8">8 people's</option>
							<option value="9">9 people's</option>
							<option value="10">10 people's</option>
							<option value="11">11 people's</option>
							<option value="12">12 people's</option>
						</select>
						<input type="Time" id="Time" name="time" placeholder="Time" min="11:00" max="22:00" required>
						<input type="Phone No" name="phoneno" placeholder="Phone" min="10" required>
					</div>
					<div>
						<input type="Date" name="dateofresv" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2023-09-31" required>
						<input type="Name" name="nameofresv" placeholder="Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" required>
						<input type="Email" name="emailresv" placeholder="Email">
					</div>
				</div>
			 <center><input type="submit" value="submit"></center>
			</form>
		</div> 
	</div>


	<section class="blog welcome" id="blog">
		<h1 class="heading">Latest News</h1>
		<center><h3 class="sub-heading">~great articles~</h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="reserve1.jpg">
				</div>
				<div class="content">
					<h3>Professional level</h3>
					<p>To have glittering smiles, on the faces of our customers, by delivering crafted experiences”. And our mission is to “Create the perfect place, to meet and greet, where every customer can spend, quality time with their loved ones.</p>
					<a href="#">Read More</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="reserve2.jpg">
				</div>
				<div class="content">
					<h3>FRESH FOOD GUARANTEED</h3>
					<p>People who like to eat are always the best people. Nothing brings people together like good and fresh food.</p>
					<a href="#">Read More</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="reserve3.jpg">
				</div>
				<div class="content">
					<h3>THE MENU IS PLENTIFUL</h3>
					<p>It's not your customer's job to remember you, it is your obligation & responsibility to make sure they don't have the chance to forget you.Don't deliver a product, deliver an experience.</p>
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
	</section>


	<section class="footer">
		<img src="img.png" class="logo">
		<div class="container">
			<div>
				<h3>ABOUT US</h3>
				<p>Driven by passion and a deep understanding of consumer behavior</p>
			</div>
			<div>
				<h3>GET NEWS & OFFERS</h3>
				<input type="email" name="" placeholder="Enter your Email">
				<ul>
					<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
			</div>
			<div>
				<h3>CONTACT US</h3>
				<span>Snowy Resort pvt ltd</span>
				<span>+ (91) 8922136711</span>
				<span>Snowyresort11@gmail.com</span>
				<span>www.snowyresort.in</span>
			</div>
		</div>
		<p>&copy;2021 Reserved by Snowy Resort</p>
	</section>


	<a href="#"><button class="topbtn"><i class="fa fa-angle-up"></i></button></a>

	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".home-slider", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
    });
  </script>

	<script type="text/javascript">
		let menu = document.querySelector('#menu');
		let navbar = document.querySelector('.navbar');

		menu.onclick = () =>{
			menu.classList.toggle('fa-times');
			navbar.classList.toggle('active');
		}
	</script>
</body>
</html>

<?php

$nopl=$_POST['noofpeople'];
$timersv=$_POST['time'];
$phno=$_POST['phoneno'];
$datersv=$_POST['dateofresv'];
$namersv=$_POST['nameofresv'];
$emmail=$_POST['emailresv'];

echo "$nopl, $timersv ,$phno, $datersv, $namersv, $emmail <br>";

$host="localhost";
$usrnme="root";
$password="";
$dbame= "abc";
$conn= new mysqli($host,$usrnme,$password, $dbame);

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if($conn->connect_error){

		exit("Connection Failed". $conn->connect_error);

	}else{

		echo "Connected <br>";
		$sql="INSERT INTO `resvstorage`(`noofppl`, `timeofrsv`, `phoneno`, `dateofrsv`, `namee`, `email`) VALUES ('$nopl','$timersv','$phno','$datersv','$namersv','$emmail')";
		if($conn->query($sql)){
			echo "Insert Successful";
			echo'<script>alert("Reservation Successful");</script>';
		}else{
			echo "Insert Error";
		}

	}
}

?>
