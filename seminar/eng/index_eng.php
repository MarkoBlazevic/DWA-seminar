<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marko Blažević & Petar Tomorad-Rudec">
    <title>Marina Punat</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
				<li><a href="../index.php">HRV</a></li>
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
        <div class="camera_wrap camera_azure_skin" id="camera_wrap">
            <div data-thumb="../img/marina1.jpg" data-src="../img/marina1.jpg">
                
            </div>
			<div data-thumb="../img/marina2.jpg" data-src="../img/marina2.jpg">
                
            </div>
			<div data-thumb="../img/marina3.jpg" data-src="../img/marina3.jpg">
                
            </div>
			<div data-thumb="../img/marina4.jpg" data-src="../img/marina4.jpg">
                
            </div>
			 
        </div>

	  </div>

	   </div>
	   <div class="row">
	
		<div class="col-md-3"></div>
		<div class="col-md-4">	
			<h1> Marina</h1>
			<p>During the last two seasons there were on average 1250 ships placed in the marina (500 on dry docks), with an addition of 3000 transit ships arriving in the summer months. </p> 
			<a href="marina_eng.php"><button type="button" class="btn btn-info">Read more</button></a>
		</div>
		<div class="col-md-4">	
			<h1> Yacht servis</h1>
			<p>We provide quality, reliable service and maintenance for your vessel. All the works are performed in specializied areas, all environment protection measures are applied, all in compliance with the wastwater, oil, lubricants and fuel disposal regulations.</p> 
			<a href="servis_eng.php"><button type="button" class="btn btn-info">Read more</button></a>
		</div>
		<div class="col-md-1"></div>
      
		<div class="col-md-3"></div>
		<div class="col-md-4">	
			<h1> Ship suplies</h1>
			<p>In Supermarket and Diskont stores we offer all foods and fresh products, which are necessary for a longer sailing, with a large selection of fine wines and various alcoholic beverages remaining.</p> 
			<a href="opskrba_eng.php"><button type="button" class="btn btn-info">Pročitajte više</button></a>
		</div>
		<div class="col-md-4">	
			<h1> Hotel and restaurant</h1>
			<p>The hotel Kanajt is a perfect meeting place for navigators and all those impassioned in sea and active holiday. It is situated near Marina Punat, 50m far from the sea.</p> 
			<a href="hotel_eng.php"><button type="button" class="btn btn-info">Read more</button></a>
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