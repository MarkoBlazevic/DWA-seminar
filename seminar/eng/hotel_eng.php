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
				<li><a href="../hotel.php">HRV</a></li>
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
		<h3>Hotel Kanajt</h3>
		<a href="../img/hotel.jpg" data-lightbox="ponuda"><img class="example-image" src="../img/hotel.jpg"></a><br/>
            <p>The hotel Kanajt is a perfect meeting place for navigators and all those impassioned in sea and active holiday. It is situated near Marina Punat, 50m far from the sea. </p>
		  <p>Very nice and new equipped rooms will satisfy all Your demands. Surrounded by park and olive groves, it offers a beautiful view of Punat bay and marina. Big terrace will bring You the full enjoy in the sun. </p>
		  <p>Very clean and comfortable bathrooms will satisfy the desires of the most demanding. You can choose a room with shower or bathtub.
			Every bathroom is decorated in different style and is equipped with heating and hair dryer. </p>
		  <p>The word "KANAJT" origins from latin - CANNA or CANNETUM, which means reed, cane. That tells us that reed was grown once on the territory of today's hotel.
			The name was first mentioned in 1419., found in a document in which Punat and St. Peter's chapel were described. The remains of St. Peters chapel can be seen by the hotel. Former bishop's residence in 1528, Farm, 
			orchard and vineyard nurseries, housekeeping school. </p>
		  <p>The house and property of the bishop was mentioned in 1558. After that, in 1962, at the time of the bishop Nosadin, the house was restored or destructed.
			One report states that the small building was clearly widespread, and in others that he has built a house next to St. Peter church for his new heir. </p>
		  <p>The building shows characteristic style elements from the past, particularly visible in the windows.
			Since 1956, the building has been owned by Economic Chamber of Macedonia. In 1982Marina Punat bought the the whole complex. In 1988 was established the restaurant and in 1998 was converted into a hotel of the highest category.</p>
			
		<h3>Restaurant Kanajt</h3>
		<a href="../img/restoran.jpg" data-lightbox="ponuda"><img class="example-image" src="../img/restoran.jpg"></a> <br/>
		 <p>The restaurant Kanajt will satisfy tastes of the most demanding by offering rich choice of fish and meat dishes, vegetables and domestic specialties.
			We offer You specialties of the island Krk: dishes under the baking lid, dishes grilled on wooden carbon, dishes from the pot and home made cakes. </p>
		  <p>The restaurant is furnished in maritime style and accommodates 80 persons. It is heated during winters and air conditioned during summers.
			We organize group lunches, with visit of closer Island Košljun.</p>
		  <p>Big and spacious terrace with sea view, will bring the full enjoyment while eating some of the Mediterranean specialtiesa.
			In the park there is an old olive press, made of 250 kg rock.
			Enjoy in big choice of breakfast buffet everyday from 07.00 - 12.00
			Special offer for "Days of Olives" - olive oil tastes, how to collect olives, factory visit. </p>
		  
          
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