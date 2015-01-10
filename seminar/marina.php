<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marko Blažević & Petar Tomorad-Rudec">
    <title>Marina Punat</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/lightbox.css" rel="stylesheet" />
	<link rel="stylesheet" href="fontello/css/fontello.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style><script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>
  <script src="bootstrap/js/jquery-1.11.0.min.js"></script>
  <script src="bootstrap/js/lightbox.min.js"></script></head>

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
		 <a class="navbar-brand" href="index.php">Marina Punat</a>
		  </div>
			<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
				<li class="active"><a href="#">HRV</a></li>
				<li><a href="eng/marina_eng.php">ENG</a></li>
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
          <form class="navbar-form navbar-right" role="form" method="POST" action="login.php">
            <div class="form-group">
              <input type="text" name="korIme" placeholder="Korisnicko ime" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name"lozinka" placeholder="Lozinka" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Ulogirajte se</button>
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
		<h3>O marini</h3>
          <p>Marina Punat nastala je davno 1964. godine i razvila se na bogatoj brodograditeljskoj tradiciji. </p>
		  <p>U većini slučajeva o marinama se govori brojkama i statistikama. Kako svaki vez nije marina, tako se niti sva ka marina ne može ponositi nazivom nautičkog centra Hrvatske. Marina Punat posebna je po tome što o njenoj kvaliteti svjedoče iskusni mornari, zato i može ponijeti ovako prestižnu titulu. </p>
		  <p>Prvi nautičar, s kojim je i povezano rođenje marine, bio je William R. Nesher.Njemu su, još davne 1962. godine na sajmu u Zagrebu preporučili Brodogradilište Punat za gradnju novih brodova u drvu. Iskusni nauta preporuku je poslušao, 
			pa su tri izgrađene brodice, simboličnih oznaka A, B i C, postale prva strana plovila ostavljena na čuvanju u Hrvatskoj, a Nesher, Amerikanac iz Kalifornije s prebivalištem u Njemačkoj, prvi gost i do kraja svog života 2004. godine i stalni gost Marine. 
			Ni on ni djelatnici koji su se okupili na taj dan rođenja, 13. ožujka 1964. godine, nisu mogli slutiti da će njihovo djelo izrasti u prvi i pravi nautički biser Hrvatske. </p>
		  <p>Do 1978. Marina je poslovala u sklopu Brodogradilišta, a tijekom 1994. dovršena je pretvorba poduzeća. Danas Marina Punat i Brodogradilište Punat posluju neodvojivo povezani kao dvije najznačajnije tvrtke u sklopu Marina Punat Grupe.
			Broj vezova je u međuvremenu od tri brodice 1965. narastao do današnjih dana na 850 brodica. Ilustracije radi, u prosjeku tijekom zadnjih dviju sezona u marini je smješteno što u moru što na kopnu čak 1250 brodova (500 mjesta na suhom vezu), 
			s dolaskom oko 3000 tranzitnih brodica u ljetnim mjesecima! </p>
		  <p>U marini u Puntu 1998. ponosno se zavijorila prva Plava zastava u Hrvatskoj, što ju dodjeljuje prestižna Europska zaklada za očuvanje okoliša, i do danas je istaknuta na njenom jarbolu. Od 2000. g. Marina Punat i povezana društva certificirani su u skladu s normom ISO 9001, a od godine 2010. 
			u marini se primjenjuje sustav upravljanja zaštitom okoliša prema zahtjevima norme ISO 14001:2004. </p>
		</div>
		</div> 
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<ul class="thumbernail">
			<li class="col-md-4"><a href="img/marina5.jpg" data-lightbox="roadtrip"><img class="example-image" src="img/marina5.jpg" style="height: 170px; width: 280px;"></a></li>
			<li class="col-md-4"><a href="img/marina6.jpg" data-lightbox="roadtrip"><img class="example-image" src="img/marina6.jpg" style="height: 170px; width: 280px;"></a></li>
			<li class="col-md-4"><a href="img/marina7.jpg" data-lightbox="roadtrip"><img class="example-image" src="img/marina7.jpg" style="height: 170px; width: 280px;"></a></li>
			</ul>
			</div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  

</body></html>