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
              <li><a href="../dodaj_admina.php">HRV</a></li>
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
		include('dodaj_admina_provjera_eng.php');
		include('login_eng.php');
		if(!isset($_SESSION)){
		session_start();
		}
		if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username']) && $_SESSION['dozvola']==1){
			echo '
			<li><a href="admin_klijenti_eng.php">List of clients</a></li>
		<li><a href="admin_rezervacije_eng.php">List of reservations</a></li>
		<li><a href="dodaj_admina_eng.php">New administrator</a></li>
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
			<h3>New administrator</h3><br/>
			<!--<div class="col-md-8">-->
			<p><span class="error">* Needed fields.</span></p>
			<form name="unos" method="POST" action="dodaj_admina_eng.php">
				<label for="korIme">Username:</label>
				<input id="korIme" type="text" name="korIme" value="<?php if (isset($korIme)) echo $korIme; ?>"/>
				<span class="error">* <?php echo $korImeErr;?></span>
				<br/><br/>
				
				<label for="lozinka">Password:</label>
				<input id="lozinka" type="password" name="lozinka"/>
				<span class="error">* <?php echo $lozinkaErr;?></span>
				<br/><br/>
				
				<label for="ponLozinka">Repeat password:</label>
				<input id="ponLozinka" type="password" name="ponLozinka"/>
				<span class="error">* <?php echo $ponLozinkaErr;?></span>
				<br/><br/>
				
				<label for="email">Email:</label>
				<input id="email" type="text" placeholder="primjer@gmail.com" name="email" value="<?php if (isset($email)) echo $email; ?>"/>
				<span class="error">* <?php echo $emailErr;?></span>
				<br/><br/>
				
				<label for="imeKlijent">Name:</label>
				<input id="imeKlijent" type="text" name="imeKlijent" value="<?php if (isset($imeKlijent)) echo $imeKlijent; ?>"/>
				<span class="error">* <?php echo $imeKlijentErr;?></span>
				<br/><br/>
				
				<label for="prezimeKlijent">Surname:</label>
				<input id="prezimeKlijent" type="text" name="prezimeKlijent" value="<?php if (isset($prezimeKlijent)) echo $prezimeKlijent; ?>"/>
				<span class="error">* <?php echo $prezimeKlijentErr;?></span>
				<br/><br/>
				
				<label for="datumRodjenja">Date of birth:</label>
				<input type="date" name="datumRodjenja" value="<?php if (isset($datumRodjenja)) echo $datumRodjenja; ?>">
				<span class="error">* <?php echo $datumRodjenjaErr;?></span>
				<br/><br/>
				
				
				<label for="brojTelefona">Phone:</label>
				<select name="prefix">
					<option value="+385" selected>+385 Croatia</option>
					<option value="+30">+30 Greek</option>
					<option value="+31">+30 Neederlands</option>
					<option value="+32">+32 Belgium</option>
					<option value="+33">+33 France</option>
					<option value="+34">+34 Spain</option>
					<option value="+350">+350 Gibraltar</option>
					<option value="+351">+351 Portugal</option>
					<option value="+352">+220 Luksemburg</option>
					<option value="+353">+353 Ireland</option>
					<option value="+354">+354 Island</option>
					<option value="+355">+355 Albania</option>
					<option value="+356">+356 Malta</option>
					<option value="+357">+357 Cipar</option>
					<option value="+358">+358 Finland</option>
					<option value="+359">+359 Bulgaria</option>
					<option value="+36">+36 Hungary</option>
					<option value="+370">+370 Litva</option>
					<option value="+371">+371 Latvia</option>
					<option value="+372">+372 Estonia</option>
					<option value="+373">+373 Moldova</option>
					<option value="+374">+374 Armenia</option>
					<option value="+375">+375 Byelorussia</option>
					<option value="+376">+376 Andora</option>
					<option value="+377">+377 Monaco</option>
					<option value="+378">+378 San Marino</option>
					<option value="+379">+379 Vatikan</option>
					<option value="+380">+380 Ukraine</option>
					<option value="+381">+381 Serbia</option>
					<option value="+382">+382 Montenegro</option>
					<option value="+386">+386 Slovenia</option>
					<option value="+387">+387 BIH</option>
					<option value="+389">+389 Macedonia</option>
					<option value="+39">+39 Italy</option>
					<option value="+40">+40 Romania</option>
					<option value="+41">+41 Switzerland</option>
					<option value="+420">+420 Czech Republic</option>
					<option value="+421">+421 Slovakia</option>
					<option value="+423">+423 Liechtenstein</option>
					<option value="+43">+43 Austria</option>
					<option value="+44">+44 United Kingdom</option>
					<option value="+45">+45 Denmark</option>
					<option value="+46">+46 Sweden</option>
					<option value="+48">+48 Poland</option>
					<option value="+49">+49 Germany</option>
				</select>	
				<span class="error">* <?php echo $prefixErr;?></span>
				
				<input id="brojTelefon" type="text" placeholder="991234567" name="brojTelefona" value="<?php if (isset($brojTelefona)) echo $brojTelefona; ?>"/>
				<span class="error">* <?php echo $brojTelefonaErr;?></span>
				<br/><br/>
				
				
				<?php
					if (isset($_POST['registriraj']) && $korImeErr == '' && $lozinkaErr == '' && $ponLozinkaErr == '' && $emailErr == '' && $imeKlijentErr == '' && $prezimeKlijentErr == '' && $datumRodjenjaErr == '' && $prefixErr == '' && $brojTelefonaErr == '' ) {
					
						function createSalt()
							{
							$text = md5(uniqid(rand(), true));
							return substr($text, 0, 3);
							}
						$hash = hash('sha256', $lozinka);
						$salt = createSalt();
						$lozinka = hash('sha256', $salt . $hash);
						$conn = mysqli_connect('localhost', 'root', '123', 'seminar');
						
						mysqli_query($conn, "SET NAMES 'utf8'");
						mysqli_query($conn, "SET CHARACTER_SET 'utf8'");
		 
						$query = "INSERT INTO podaci (korisnickoIme, lozinka, salt, email) VALUES ('$korIme', '$lozinka', '$salt', '$email');";
						$result = mysqli_query($conn,$query);
						
						$query1 = "SELECT MAX(id) AS zadnjiID FROM podaci;";
						$result1 = mysqli_query($conn, $query1);
						$row = mysqli_fetch_array($result1);
						$zadnji = $row["zadnjiID"];
						
						$query2 = "INSERT INTO klijent ( idProba, imeKlijent, prezimeKlijent, datumRodjenja, predbroj, telefon, dozvola )
						VALUES ( '$zadnji', '$imeKlijent', '$prezimeKlijent', '$datumRodjenja', '$prefix', '$brojTelefona', 1 );";
						$result2 = mysqli_query($conn, $query2);
						
						if(!$result || !$result2) { echo 'Nekaj ne valja' . mysqli_error($conn); }
		 
						mysqli_close($conn);
						echo "<script>alert('New admin added!!')</script>";
						echo "<script>window.location = 'admin_klijenti_eng.php';</script>";
					}
					else{
						$korImeErr = $lozinkaErr = $ponLozinkaErr = $emailErr = $imeKlijentErr = $prezimeKlijentErr ="";
						$datumRodjenjaErr = $prefixErr = $brojTelefonaErr = "";
						echo "<input type='submit' name='registriraj' class='btn btn-default' value='Dodaj'/>";
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