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
              <li><a href="eng/servis_eng.php">ENG</a></li>
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
		<h3>Servis plovila</h3>
          <p>Počeci Brodogradilišta sežu u 1922. godinu, kada osnivač i prvi vlasnik Brodogradilišta Nikola Zorić na površini od 1654m2 s 11 radnika kreće u posao brodogradnje. </p>
		  <p>Na samo dva navoza gradili su se najčešće drveni motorni jedrenjaci do 350 t nosivosti. Bili su to tragete, leuti, brodovi za teret, ribarice i jahte - sve od drva, po čemu je ovo brodogradilište postalo nadaleko poznato.
			Osamdesetih godina prošlog stoljeća, puntarsko je Brodogradilište najveće za gradnju drvenih brodova u Hrvatskoj. </p>
		  <p>Nekada orijentirano isključivo na drvo kao brodograđevni materijal, danas Brodogradilište sa svojim kapacitetima i povezanim društvima te u suradnji sa kooperantima pruža potpunu uslugu remonta svih vrsta radnih plovila i mega jahti do 50 m dužine. </p>
          <br/><br/><h4>Oprema</h4>
		  <p>   - Travel lift 50t<br/>
				- Travel lift 100t<br/>
				- Kolica za transport brodova kopnom do 20t<br/>
				- Kolica za transport brodova kopnom do 30t<br/>
				- Teleskopska platforma za rad na visini do 21m<br/>
				- Remorker za tegalj plovila
		  </p>
		  <br/><h4>Navozi</h4>
		  <p>   - Navoz 600 t za jednotrupna nosivosti do 50m<br/>
				- Navoz 450 t za dvotrupna plovila do 50m<br/>
				- Navoz 150 t za jednotrupna nosivosti do 30m
		  </p>
		  <br/><h4>Brodograđevne hale</h4>
		  <p>
				- Hala, dimenzija 60x20x10m sa mosnom dizalicom 50x11m, nosivosti 3t<br/>
				- Hala, dimenzija 38x9, 2x8m<br/>
				- Nadstrešnica, dimenzija 50x22x5m<br/>
		  </p><br/>
		  <p>Za plovila, koja zbog veličine nije moguće smjestiti u halu, postoji mogućnost izrade šatora na navozima i u servisnoj zoni. Osiguran energetski razvod po čitavom radnom prostoru brodogradilišta, 
		  sa priključcima stlačenog zraka, vode i električne energije.</p>
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