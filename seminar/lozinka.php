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
              <li class="active"><a href="#">HRV</a></li>
              <li><a href="eng/lozinka_eng.php">ENG</a></li>
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
		include('lozinka_provjera.php');
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
		else{
		echo "<script>window.location = 'index.php';</script>";
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
			<h3>Promjena lozinke</h3><br/>
			<p><span class="error">* Potrebna polja.</span></p>
			<form name="unos" method="POST" action="lozinka.php">
				<label for="lozinka">Vaša lozinka:</label>
				<input id="lozinka" type="password" name="lozinka"/>
				<span class="error">* <?php echo $lozinkaErr;?></span>
				<br/><br/>
				
				<label for="ponLozinka">Ponovite lozinku:</label>
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
						echo "<script>alert('Uspješno ste promijenili lozinku!')</script>";
						echo "<script>window.location = 'korisnik.php';</script>";
					}
					else{
					echo "<script>alert('Došlo je do pogreške!')</script>";
					}
				}
				else{
				$lozinkaErr = $ponLozinkaErr="";
				echo "<input type='submit' name='azuriraj' value='Ažuriraj'/> &nbsp;";
				echo "<a href='korisnik.php'><button type='button'>Povratak na korisničke stranice</button></a>";
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