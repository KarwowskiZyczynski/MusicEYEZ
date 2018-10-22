<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusicEYEZ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->



<!-- TUTAJ ZACZYNAJĄ SIĘ ZMIANY -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	        <li class="nav-item active">
	            <a class="nav-link" href="#">Home</span></a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="#">Wyszukiwarka</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="#">Kontakt</a>
	        </li>

                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Nombre Apellido</strong></p>
                                        <p class="text-left small">correoElectronico@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>



	    </ul>
	</li>
	    <form class="form-inline my-2 my-lg-0">
	        <input class="form-control mr-sm-2" type="text" placeholder="Wyszukaj..." aria-label="Search">
	        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Wyszukaj</button>
	    </form>
	</div>
</nav>
<!--- Image Slider -->

<!-- <div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-15 col-lg-15 center-block">-->
<div id="slides" class="carousel slide" data-ride="carousel"> 
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/background.png" >
		<div class="carousel-caption">
			<h1 class="dispaly-2">MusicEYEZ</h1>
			<h2>Udało sięzalogować, gratulacje!</h2>
			<button type="button" class="btn btn-outline-light btn-lg">DEMO</button>
			<button type="button" class="btn btn-primary btn-lg">EXIT</button>
		</div>	
	</div>
	<div class="carousel-item">
		<img src="img/background2.png">
	</div>	
	<div class="carousel-item">
		<img src="img/background3.png">
	</div>
</div>
</div>

<!--- Meet the team -->
<div class="container-fluid">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-5">Met the team</h1>
		</div>
		<hr>
	</div>
</div>
<hr class="my-4">
<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/team1.png">
				<div class="card-body">
					<h4 class="card-title">John Doe</h4>
					<p class="card-text">Był renesansowym polihistorem, poza astronomią zajmował się również matematyką, prawem, ekonomią, strategią wojskową, astrologią, był także lekarzem oraz tłumaczem.</p>
					<a href="#" class="btn btn-outline-secondary">Sea Profile</a>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/team2.png">
				<div class="card-body">
					<h4 class="card-title">Johnny Sins</h4>
					<p class="card-text">Polski menedżer, bankowiec i polityk. Od 2017 prezes Rady Ministrów. Prezes zarządu Banku Zachodniego WBK w latach 2007–2015, wiceprezes Rady Ministrów, minister rozwoju, a następnie minister rozwoju i finansów.</p>
					<a href="#" class="btn btn-outline-secondary">Sea Profile</a>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/team3.png">
				<div class="card-body">
					<h4 class="card-title">Jane Doe</h4>
					<p class="card-text">Polska piosenkarka, wykonująca muzykę pop i dance. Od debiutu w 2004 wydała pięć albumów studyjnych i wylansowała przeboje, takie jak m.in. „Pozwól żyć”, „Słowa”, „Trochę ciepła” i „Otwórz oczy”.</p>
					<a href="#" class="btn btn-outline-secondary">Sea Profile</a>
				</div>	
			</div>
		</div>
	</div>	
</div>

<!--- Connect -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-lg-12">
		<h2>Kontakt</h2>
	</div>
	<div class="col-12 social padding">
		<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
		<a href="twitter.com"><i class="fa fa-twitter"></i></a>
		<a href="instagram.com"><i class="fa fa-instagram"></i></a>
		<a href="youtube.com"><i class="fa fa-youtube"></i></a>	
	</div>	
</div>	
</div>

<!--- Footer -->
<footer>
	<div class="container-fluid">
	<div class="row text-center">
		<div class="col-md-4">
			<img src="img/w3newbie.png">
			<hr class="light">
			<ul>
				<li>tel: 7981568</li>
				<li>adress: X</li>
				<li>e-mail: xxx@gmail.com</li>
				<li>Miasto: Gdańsk</li>
			</ul>
		</div>
		<div class="col-md-4">
			<hr>
			<h5>Godziny otwarcia</h5>
			<hr class="light">
			<p>Poniedziałek</p>
			<p>Wtorek</p>
			<p>Środa</p>
			<p>Czwartek</p> 
			<p>Piątek</p> 
		</div>
		<div class="col-md-4">
			<hr>
			<h5>Coś tam</h5>
			<hr class="light">
			<p>Jeden</p>
			<p>Dwa</p>
			<p>Trzy</p>
		</div>
		<div class="col-12">
			<hr class="light-100">
			<h5>&copy; xxx.com</h5>
	</div>
	</div>	
</footer>

</body>
</html>