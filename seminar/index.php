<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marko Blažević & Petar Tomorad-Rudec">
    <title>Marina Punat</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="fontello/css/fontello.css">
	
	<!-- skripte za slider -->
	<script type='text/javascript' src='camera/scripts/jquery.min.js'></script>
    <script type='text/javascript' src='camera/scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='camera/scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='camera/scripts/camera.min.js'></script> 
	<link rel='stylesheet' href='camera/css/camera.css' type='text/css'> 
	<script>
		jQuery(function(){
			
			jQuery('#camera_wrap').camera({
				loader: 'bar',
				playPause:false,
				time:4000,
				loader: 'pie',
				hover:false,
				fx:'scrollLeft'

			});
		});
	</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style><script>window["_GOOG_TRANS_EXT_VER"] = "1";</script></head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		<a class="navbar-brand" href="#">Marina Punat</a>
		  </div>
			<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
				<li class="active"><a href="#">HRV</a></li>
				<li><a href="eng/index_eng.php">ENG</a></li>
				<li class="dropdown visible-xs visible-sm"><a href="#" class="dropdown-toggle" data-toggle="dropdown">IZBORNIK</a>
				<ul class="dropdown-menu">
					<li><a href="marina.php">Marina</a></li>
					<li><a href="servis.php">Servis plovila</a></li>
					<li><a href="opskrba.php">Opskrba plovila</a></li>
					<li><a href="hotel.php">Hotel i restoran</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<li><a href="gdjesmo.php">Gdje se nalazimo</a></li>
				</ul>
				</li>
            
				<?php
				include('login.php');
				if(!isset($_SESSION)){
				session_start();
				}
				/* Promjenjiv izbornik ovisno o tome da li je korisnik ulogiran i da li je običan korisnik ili administrator */
				
				if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username']) && $_SESSION['dozvola']==0){
				echo '
					<li><a href="rezervacija.php">Rezerviraj vez</a></li>
					<li><a href="moje_rezervacije.php">Moje rezervacije</a></li>
					<li><a href="korisnik.php">Promijeni moje podatke</a></li>
				</ul>
		
				<form class="navbar-form navbar-right">
				<div class="form-group">
					<li class="korisnik">Korisnik: <a href="korisnik.php">'. $_SESSION['sess_username']. '</a> &nbsp;</li>
				</div>
					<a href="logout.php" class="btn btn-danger">Odjavite se</a>
				</form>';
		
				} 
				else if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username']) && $_SESSION['dozvola']==1){
				echo '
					<li><a href="admin_klijenti.php">Pregled klijenata</a></li>
					<li><a href="admin_rezervacije.php">Pregled rezervacija</a></li>
					<li><a href="dodaj_admina.php">Dodavanje administratora</a></li>
				</ul>
		
				<form class="navbar-form navbar-right">
				<div class="form-group">
					<li class="korisnik">Korisnik: <a href="korisnik.php">'. $_SESSION['sess_username']. '</a> &nbsp;</li>
				</div>
					<a href="logout.php" class="btn btn-danger">Odjavite se</a>
				</form>';
		 
				} 
				else{
				echo'
				</ul>
				<form class="navbar-form navbar-right" role="form" method="POST" action="index.php">
				<div class="form-group">
					<input type="text" name="korisnickoIme" placeholder="Korisnicko ime" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="lozinka" placeholder="Lozinka" class="form-control">
				</div>
				<button type="submit" name="login" class="btn btn-success">Ulogirajte se</button>
				<a href="registracija.php" class="btn btn-warning">Registrirajte se</a>
				</form>';
				}
				?>
        </div>
      </div>
    </div>


    <div class="container">

      <div class="row">
		<div class="col-md-3">
          <ul class="nav nav-pills nav-stacked visible-lg visible-md">
			<a href="marina.php" class="list-group-item">Marina</a>
			<a href="servis.php" class="list-group-item">Servis plovila</a>
			<a href="opskrba.php" class="list-group-item">Opskrba plovila</a>
			<a href="hotel.php" class="list-group-item">Hotel i restoran</a>
			<a href="kontakt.php" class="list-group-item">Kontakt</a>
			<a href="gdjesmo.php" class="list-group-item">Gdje se nalazimo</a>
			</ul>
        </div>

        <div class="col-md-9"> 
        <div class="camera_wrap camera_azure_skin" id="camera_wrap">
            <div data-thumb="img/marina1.jpg" data-src="img/marina1.jpg">
                
            </div>
			<div data-thumb="img/marina2.jpg" data-src="img/marina2.jpg">
                
            </div>
			<div data-thumb="img/marina3.jpg" data-src="img/marina3.jpg">
                
            </div>
			<div data-thumb="img/marina4.jpg" data-src="img/marina4.jpg">
                
            </div>
			 
        </div>

	  </div>

	   </div>
	   <div class="row">
	
		<div class="col-md-3"></div>
		<div class="col-md-4">	
			<h1> Marina</h1>
			<p>U prosjeku tijekom zadnjih dviju sezona u marini je smješteno što u moru što na kopnu čak 1250 brodova (500 mjesta na suhom vezu), s dolaskom oko 3000 tranzitnih brodica u ljetnim mjesecima! </p> 
			<a href="marina.php"><button type="button" class="btn btn-info">Pročitajte više</button></a>
		</div>
		<div class="col-md-4">	
			<h1> Servis plovila</h1>
			<p>Nudimo kvalitetne i pouzdane usluge servisa i održavanja vašeg plovila. Svi radovi se obavljaju u za to specijaliziranim prostorima, gdje posebno vodimo brigu o zaštiti okoliša, zbrinjavanju otpadnih voda, maziva, ulja, goriva i akumulatora.!</p> 
			<a href="servis.php"><button type="button" class="btn btn-info">Pročitajte više</button></a>
		</div>
		<div class="col-md-1"></div>
      
		<div class="col-md-3"></div>
		<div class="col-md-4">	
			<h1> Opskrba plovila</h1>
			<p>U trgovinama Supermarket i Diskont možete se opskrbiti svim prehrambenim artiklima i svježim namirnicama potrebnim za višednevni boravak u plovidbi, sa velikim izborom finih vrhunskih vina i ostalih alkoholnih napitaka. </p> 
			<a href="opskrba.php"><button type="button" class="btn btn-info">Pročitajte više</button></a>
		</div>
		<div class="col-md-4">	
			<h1> Hotel i restoran</h1>
			<p>Hotel "Kanajt" idealno je sastajalište za nautičare i za sve ljubitelje mora i aktivnog odmora. Hotel je smješten u neposrednoj blizini Marine Punat, udaljen 50 m od mora.</p> 
			<a href="hotel.php"><button type="button" class="btn btn-info">Pročitajte više</button></a>
		</div>
		<div class="col-md-1"></div>
      
	</div>
	</div>
	
	<footer>
	 
	  <div class="footer">
	  <hr>
        <p>Marina Punat d.o.o. © 2014 </p>
		<p><i class="icon-home"></i> Puntica 7, 51521 Punat, Hrvatska</p>
		<p><i class="icon-mobile"></i> +385 51 654 111</p>
		<i class="icon-mail"></i>
		<i class="icon-twitter-rect"></i>
		<i class="icon-facebook-rect"></i>
      
	  </div>
	 </footer>

    <!-- Bootstrap core JavaScript-->
	<!-- zakomentirano kako bi radio slider -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body></html>