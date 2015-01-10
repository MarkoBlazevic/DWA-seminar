<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marko Blažević & Petar Tomorad-Rudec">
    <title>Marina Punat</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bootstrap/css/lightbox.css" rel="stylesheet" />
	<link rel="stylesheet" href="fontello/css/fontello.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style><script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>
  <script src="../bootstrap/js/jquery-1.11.0.min.js"></script>
  <script src="../bootstrap/js/lightbox.min.js"></script></head>

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
				<li><a href="../marina.php">HRV</a></li>
                <li class="active"><a href="#">ENG</a></li> 
				<li class="dropdown visible-xs visible-sm"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU</a>
				<ul class="dropdown-menu">
					<li><a href="marina_eng.php">Marina</a></li>
					<li><a href="servis_eng.php">Yacht servis</a></li>
					<li><a href="opskrba_eng.php">Ship supplies</a></li>
					<li><a href="hotel_eng.php">Hotel and restaurant</a></li>
					<li><a href="kontakt_eng.php">Contact</a></li>
					<li><a href="gdjesmo_eng.php">Where are we</a></li>
				</ul>
				</li>
            
        <?php
		include('login_eng.php');
		if(!isset($_SESSION)){
		session_start();
		}
		if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username']) && $_SESSION['dozvola']==0){
			echo '
			<li><a href="rezervacija_eng.php">Reserve</a></li>
		<li><a href="moje_rezervacije_eng.php">Reservations</a></li>
		<li><a href="korisnik_eng.php">Change my data</a></li>
		</ul>
		
		<form class="navbar-form navbar-right">
		<div class="form-group">
		<li class="korisnik">User: <a href="korisnik_eng.php">'. $_SESSION['sess_username']. '</a> &nbsp;</li>
		</div>
		<a href="logout.php" class="btn btn-danger">Log out</a>
		</form>';
		
		} 
		else if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username']) && $_SESSION['dozvola']==1){
			echo '
			<li><a href="admin_klijenti_eng.php">List of clients</a></li>
			<li><a href="admin_rezervacije_eng.php">List of reservations</a></li>
			<li><a href="dodaj_admina_eng.php">New administrator</a></li>
			</ul>
		
		<form class="navbar-form navbar-right">
		<div class="form-group">User: <a href="korisnik_eng.php">'. $_SESSION['sess_username']. '</a> &nbsp;</li>
		</div>
		<a href="logout.php" class="btn btn-danger">Log out</a>
		</form>';
		
		} 
		else{
		echo'
			</ul>
          <form class="navbar-form navbar-right" role="form" method="POST" action="login_eng.php">
            <div class="form-group">
              <input type="text" name="korIme" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name"lozinka" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Log in</button>
			<a href="registracija_eng.php" class="btn btn-warning">Register</a>
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
			<a href="marina_eng.php" class="list-group-item">Marina</a>
			<a href="servis_eng.php" class="list-group-item">Yacht servis</a>
			<a href="opskrba_eng.php" class="list-group-item">Ship suplies</a>
			<a href="hotel_eng.php" class="list-group-item">Hotel and restaurant</a>
			<a href="kontakt_eng.php" class="list-group-item">Contact</a>
			<a href="gdjesmo_eng.php" class="list-group-item">Where are we</a>
			</ul>
        </div>
        <div class="col-md-9">
		<h3>About marina</h3>
          <p>Marina Punat developed almost 40 years ago from a rich shipbuilding tradition. </p>
		  <p>In most cases marinas are referred to in figures and statistics. As not every berth can be called a marina, not every marina can proudly be named the center of nautical tourism in Croatia. 
		  Marina Punat is specific for one reason – it's quality is confirmed by experienced seamen, and that is why it carries such a prestigious title. </p>
		  <p>The first sailor, with whom the birth of the marina is related, was William R. Nesher. Back in 1962 the Punat shipyard was recommended to him on a fair in Zagreb as an excellent place to build wooden boats. 
		  The experienced sailor took the advice and three boats were built, symbolically named A,B, and C. Those boats were the first foreign boats left for safekeeping in Croatia. Mr. Nesher, the American with residence in 
		  Germany became the first, and to the end of his life in 2004, ongoing guest of Marina Punat. Neither he, nor the workers who gathered on the day of the birth on March 13th 1964 could have imagined their work to become 
		  a genuine nautical pearl in Croatia. </p>
		  <p>By 1978 the marina conducted business within the shipyard, and during 1994 the transformation of the company was completed. Marina Punat and Punat Shipyard now operate inseparably linked as the most important two 
		  companies within the Marina Punat Group. Meanwhile, the number of berths has grown from 3 ships in 1965 to 850 ships today. To illustrate, during the last two seasons there were on average 1250 ships placed in the 
		  marina (500 on dry docks), with an addition of 3000 transit ships arriving in the summer months. </p>
		  <p> Marina Punat was honored with the „Blue Flag" in 1978 which is awarded annually by the prestigious Foundation for Environmental Education in Europe – FEE- The Blue Flag has been awarded to Marina Punat every 
		  year since. From the year 2000 Marina Punat and it's related companies have been certified in accordance with the ISO 9001 standard, and from 2010 the environmental management system in accordance with the 
		  ISO 14001:2001 standard has been implemented. </p>
		</div>
		</div> 
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<ul class="thumbernail">
			<li class="col-md-4"><a href="../img/marina5.jpg" data-lightbox="roadtrip"><img class="example-image" src="../img/marina5.jpg" style="height: 170px; width: 280px;"></a></li>
			<li class="col-md-4"><a href="../img/marina6.jpg" data-lightbox="roadtrip"><img class="example-image" src="../img/marina6.jpg" style="height: 170px; width: 280px;"></a></li>
			<li class="col-md-4"><a href="../img/marina7.jpg" data-lightbox="roadtrip"><img class="example-image" src="../img/marina7.jpg" style="height: 170px; width: 280px;"></a></li>
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