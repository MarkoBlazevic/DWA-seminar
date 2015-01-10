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
		 <a class="navbar-brand" href="index.php">Marina Punat</a>
		  </div>
			<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../lozinka.php">HRV</a></li>
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
		include('lozinka_provjera_eng.php');
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
		else{
		echo "<script>window.location = 'index_eng.php';</script>";
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
			<h3>Change password</h3><br/>
			<p><span class="error">* Needed fields.</span></p>
			<form name="unos" method="POST" action="lozinka.php">
				<label for="lozinka">Your password:</label>
				<input id="lozinka" type="password" name="lozinka"/>
				<span class="error">* <?php echo $lozinkaErr;?></span>
				<br/><br/>
				
				<label for="ponLozinka">Repeat password:</label>
				<input id="ponLozinka" type="password" name="ponLozinka"/>
				<span class="error">* <?php echo $ponLozinkaErr;?></span>
				<br/><br/>
				
				<?php
				
				if (isset($_POST['azuriraj']) && $lozinkaErr == '' && $ponLozinkaErr == '' ) {
				$kor_ime=$_SESSION['sess_username'];
				function createSalt()
					{
					$text = md5(uniqid(rand(), true));
					return substr($text, 0, 3);
					}
				$hash = hash('sha256', $lozinka);
				$salt = createSalt();
				$lozinka = hash('sha256', $salt . $hash);
				$conn = mysqli_connect('localhost', 'root', '123', 'seminar');
				if(mysqli_connect_errno()){
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
				}
 
				$query = "UPDATE podaci SET lozinka='$lozinka', salt='$salt' WHERE korisnickoIme='$kor_ime'" ;
				mysqli_query($conn,$query);
 
				mysqli_close($conn);
					if(mysqli_num_rows($result) != 0) // User not found. So, redirect to login_form again.
					{
						echo "<script>alert('You succesfully changed password!')</script>";
						echo "<script>window.location = 'korisnik_eng.php';</script>";
					}
					else{
					echo "<script>alert('There has been a mistake!')</script>";
					}
				}
				else{
				$lozinkaErr = $ponLozinkaErr="";
				echo "<input type='submit' name='azuriraj' value='Change'/> &nbsp;";
				echo "<a href='korisnik_eng.php'><button type='button'>Back to user page</button></a>";
				}
				?>
							
				
			</div>
			
			
			</form>
          
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