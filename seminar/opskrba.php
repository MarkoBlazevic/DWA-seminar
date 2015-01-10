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
		  <!-- <img src="images/object0.png" alt="Marina Punat" height="153" width="153" style="position:absolute; z-index: 1000;display: block;"> -->
		  </div>
			<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">HRV</a></li>
              <li><a href="eng/opskrba_eng.php">ENG</a></li>
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
            
		  <!--<div class="btn-group btn-group-xs navbar-brand">
			<button type="button" class="btn btn-default active"><a href="#">HRV</a></button>
			<button type="button" class="btn btn-default "><a href="#">ENG</a></button>
			</div>-->
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
		<h4>SUPERMARKET</h4>
          <p>Kvarner Punat Trgovine d.o.o.
				u centralnom dijelu marine, kraj restorana </p><br/>
		<h4>DISKONT</h4>
		  <p>Kvarner Punat Trgovine d.o.o.
				preko puta marine, uz suhu marinu Brodica </p>
		  <p>U trgovinama Supermarket i Diskont možete se opskrbiti svim prehrambenim artiklima i svježim namirnicama potrebnim za višednevni boravak u plovidbi, sa velikim izborom finih vrhunskih vina i ostalih alkoholnih napitaka.
			Također, u ovim trgovinama možete se opskrbiti i svim važnijim kuhinjskim priborom i potrepštinama, kao i artiklima za čišćenje, sredstvima za osobnu njegu i higijenu lica i tijela, čak i stranim dnevnim novinama i magazinima.
			Diskont ima u ponudi, osim osnovnih, trajnijih namirnica, i velik izbor svih vrsta alkoholnih i bezalkoholnih napitaka, po povoljnim cijenama. </p><br/>
		  <p>Ljetno radno vrijeme:<br/><br/>
			Ponedjeljak – četvrtak 7 – 21 h<br/>
			Petak – subota 7 – 22 h<br/>
			Nedjeljom: 8-13 h; od 1.7.: 8-21 h </p>
		  
          
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