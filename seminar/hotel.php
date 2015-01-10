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
				<li><a href="eng/hotel_eng.php">ENG</a></li>
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
		<h3>Hotel Kanajt</h3>
		<a href="img/hotel.jpg" data-lightbox="ponuda"><img class="example-image" src="img/hotel.jpg"></a><br/>
          <p>Hotel "Kanajt" idealno je sastajalište za nautičare i za sve ljubitelje mora i aktivnog odmora.
			Hotel je smješten u neposrednoj blizini Marine Punat, udaljen 50 m od mora. </p>
		  <p>Kvalitetno i novo opremljene sobe zadovoljiti će sve Vaše želje.Opustite se u ugodnom ugođaju prekrasnog pogleda na Puntarsku uvalu i Košljun. Velike terase pružiti će Vam potpuni užitak. </p>
		  <p>Vrlo čiste i uredne kupaonice svidjeti će Vam se na prvi pogled. Možete izabrati kupaonicu s kadom ili tuš kadom.Svaka kupaonica hotela je uređena u drugačijem stilu. Kupaonice imaju grijanje kao i fen za sušenje kose. </p>
		  <p>Ime KANAJT - dolazi od latinske riječi CANNA, CANNETUM, što znači trstika odnosno trstičnjak. To ukazuje na to da je ondje rasla trstika ili se čak možda gnojila za razne svrhe.
			Prvi put se spominje u izvorima 1419 godina i to kao naselje i kapela sv. Petra (iznad sadašnjeg Kanajta)
			Biskupski ljetnikovac iz 1528. godine, poljoprivredno dobro, voćni i lozni rasadnik, domaćinska škola. </p>
		  <p>Kuća i posjed koji pripadaju biskupu spominju se 1558 godine. Biskup B. Nosadin kuću 1692 godine ili ruši ili potpuno preuređuje. U jednom izvještaju kaže da je malu zgradu znatno povećao a u drugom da je novu s temelja sagradio kraj Sv. Petra u Kanajtu za uporabu svojim nasljednicima. </p>
		  <p>Kuća je do danas u pročelju najvećim djelom sačuvala obilježje njegovog doba, što se posebno vidi na prozorima.
			Od 1956. odmaralište u vlasništvu Trgovacke komore iz Makedonije, 1982. kupljeno od Marine Punat.
			Godine 1988. novouređeni restoran, u svibnju 1998. uređen hotel najviše kategorije. </p>
			
		<h3>Restaurant Kanajt</h3>
		<a href="img/restoran.jpg" data-lightbox="ponuda"><img class="example-image" src="img/restoran.jpg"></a> <br/>
		  <p>Restoran nudi prave specijalitete domaće kuhinje, jela pod pekom, jela s drvenog roštilja, jela iz kotlica te domaće slastice. </p>
		  <p>estoran Kanajt uređen je u maritimnom stilu, kapaciteta 80 sjedećih mjesta, a sale su opremljene grijanjem i klima-uređajem za hlađenje tijekom vrućih ljetnih mjeseci.
			Organiziramo grupne ručkove i večere sa prijevozom na otočić Košljun. </p>
		  <p>Velika i prostrana terasa s pogledom na more, pružiti će Vam potpuni užitak uz poslatice specijaliteta otoka Krka.
			U parku restorana nalazi se stari mlin za maslinovo ulje, napravljen iz klesanog kamena.
			Uživajte u velikom izboru s buffet stola za doručak svakodnevno od 07.00 - 12.00.
			Posebna ponuda u vrijeme dana maslina – razgledavanje uljare, kušanje maslinovog ulja, degustacije. </p>
		  
          
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