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
<style>

@media print{
	#header,#passer,#pdf,#imprimer{
		display: none;
	}
}

</style>



</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header section -->
	<header id="header" class="header-section">
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
								<a href="#"><?php echo  $_GET['id_user'];  ?></a>
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
			<img src="img/logo1.png" alt="Logo"><br><br><h4 style="color:green;">VOTRE COMMANDE</h4>
			
		</div>
	</div>
	
<form method="POST" action="ajoutCommande.php">


<center>
	<br>
	<br>
					<div class="p-review">
						<a style="color:orange;">Mr/Mme: </a><a href=""> <?= $_GET['id_user'] ?></a>			
					</div>
					<br>
					
					<div class="p-review">
						<a style="color:orange;">nombre des produits: </a><a href=""> <?= $_GET['quantite'] ?></a>			
					</div>
					<br>
					
				<div class="p-review">
						<a style="color:orange;">Date de commande: </a><a href=""> <?= $_GET['datee'] ?></a>			
					</div>
					<br>

					<div class="p-review">						
						<a style="color:orange;">Prix de commande: </a><a href=""> <?= $_GET['prix'] ?> dt</a>
					</div>


	
</center>

<br>
	<br>
<center>
	<input id="passer" type="submit" name="ajouter" value="passer commande">
</center>


<table>



<tr>

<td><input type="hidden" name="qte_prod" value="<?= $_GET['quantite'] ?>"></td>
</tr>
<tr>

<td><input type="hidden" name="prix_total" value="<?= $_GET['prix'] ?>"></td>
</tr>
<tr>

<td><input type="hidden" name="id_user" value="<?= $_GET['id_user'] ?>"></td>
</tr>
<tr>

<td><input type="hidden" name="datee" value="<?= $_GET['datee'] ?>"></td>
</tr>
<tr>



</table>
</form>
<center><a id="pdf" href="pdff.php?qte_prod=<?= $_GET['quantite'] ?>&prix_total=<?= $_GET['prix'] ?>&date=<?= $_GET['datee'] ?>"><h5>PDF</h5></a></center>
<br>
<center><a id="imprimer" href="" onclick="window.print();return false"><h5>Imprimer</h5></a></center>
<br>
<br>

</body>
</HTMl>