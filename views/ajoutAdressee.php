<?PHP
include "../cores/panier_core.php";
include "../conf.php";


$DB = new DBA();
$panier=new panier_core($DB);

if(isset($_GET['del'])){
	$panier->del($_GET['del']);
}

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kem | éléctromenager</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="../?core=user&action=client_page" class="site-logo">
							<img src="../css_js_templates/template_admin/images/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span><?= $panier->count(); ?></span>
								</div>
								<a href="./views/cart.php">Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="../?core=user&action=client_page">Home</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Jewelry
						<span class="new">New</span>
					</a></li>
					<li><a href="#">Shoes</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4 style="color:green;">LIVRAISON</h4>
			
		</div>
	</div>
<center>	
<form method="POST" action="ajoutAdresse.php">

<table>



<tr>
<td>Votre pseudo: </td><td><input type="text" name="id_user" required="" placeholder="PSEUDO"></td>
</tr>

<tr>
<td>pays: </td><td><input type="text" name="pays" required="" value="tunisie" placeholder="PAYS"></td>
</tr>

<tr>
<td>ville: </td><td><input type="text" name="ville" required="" placeholder="VILLE"></td>
</tr>

<tr>
<td>adresse: </td><td><input type="text" name="adress" required="" placeholder="avenue,rue..."></td>
</tr>

<tr>
<td>code postal: </td><td><input type="number" name="code_postal" required="" placeholder="code de poste"></td>
</tr>

<tr>
<td></td><td><input type="submit" name="ajouter" value="passer livraison"></td>
</tr>
<tr>
	<td></td>
<td><center>
								<a href="../map/user-map.php">
								<input type="image" src="../uploads/map.png" alt="Submit" width="48" height="48">your location
							</a>
							</center></td>
</tr>


</table>
</form>
</center>
</body>
</HTMl>