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
              <li><a href="eng/registracija_eng.php">ENG</a></li>
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
		include('registracija_provjera.php');
		include('login.php');
		if(!isset($_SESSION)){
		session_start();
		}
		if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username'])){
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
		echo'
		</ul>
          <form class="navbar-form navbar-right" role="form" method="POST" action="registracija.php">
            <div class="form-group">
              <input type="text" name="korisnickoIme" placeholder="Korisnicko ime" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="lozinka" placeholder="Lozinka" class="form-control">
            </div>
            <button type="submit" name="login" class="btn btn-success">Ulogirajte se</button>
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
			<h3>Registracija korisnika</h3><br/>
			<p><span class="error">* Potrebna polja.</span></p>
			<form name="unos" method="POST" action="registracija.php">
				<label for="korIme">Vaše korisničko ime:</label>
				<input id="korIme" type="text" name="korIme" value="<?php if (isset($korIme)) echo $korIme; ?>"/>
				<span class="error">* <?php echo $korImeErr;?></span>
				<br/><br/>
				
				<label for="lozinka">Vaša lozinka:</label>
				<input id="lozinka" type="password" name="lozinka"/>
				<span class="error">* <?php echo $lozinkaErr;?></span>
				<br/><br/>
				
				<label for="ponLozinka">Ponovite lozinku:</label>
				<input id="ponLozinka" type="password" name="ponLozinka"/>
				<span class="error">* <?php echo $ponLozinkaErr;?></span>
				<br/><br/>
				
				<label for="email">Vaša elektronička adresa:</label>
				<input id="email" type="text" placeholder="primjer@gmail.com" name="email" value="<?php if (isset($email)) echo $email; ?>"/>
				<span class="error">* <?php echo $emailErr;?></span>
				<br/><br/>
				
				<label for="imeKlijent">Ime:</label>
				<input id="imeKlijent" type="text" name="imeKlijent" value="<?php if (isset($imeKlijent)) echo $imeKlijent; ?>"/>
				<span class="error">* <?php echo $imeKlijentErr;?></span>
				<br/><br/>
				
				<label for="prezimeKlijent">Prezime:</label>
				<input id="prezimeKlijent" type="text" name="prezimeKlijent" value="<?php if (isset($prezimeKlijent)) echo $prezimeKlijent; ?>"/>
				<span class="error">* <?php echo $prezimeKlijentErr;?></span>
				<br/><br/>
				
				<label for="datumRodjenja">Datum rođenja:</label>
				<input type="date" name="datumRodjenja" value="<?php if (isset($datumRodjenja)) echo $datumRodjenja; ?>">
				<span class="error">* <?php echo $datumRodjenjaErr;?></span>
				<br/><br/>
				
				<label for="adresa">Vaša adresa:</label>
				<input id="adresa" type="text" name="adresa" value="<?php if (isset($adresa)) echo $adresa; ?>"/>
				<span class="error">* <?php echo $adresaErr;?></span>
				<br/><br/>
				
				<label for="drzava">Vaša država:</label>
				<select name="drzava">
					<option value="Hrvatska" selected>Hrvatska</option>
					<option value="Albanija">Albanija</option>
					<option value="Andora">Andora</option>
					<option value="Armenija">Armenija</option>
					<option value="Austrija">Austrija</option>
					<option value="Belgija">Belgija</option>
					<option value="Bjelorusija">Bjelorusija</option>
					<option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
					<option value="Bugarska">Bugarska</option>
					<option value="Cipar">Cipar</option>
					<option value="Crna Gora">Crna Gora</option>
					<option value="Češka">Češka</option>
					<option value="Danska">Danska</option>
					<option value="Estonija">Estonija</option>
					<option value="Finska">Finska</option>
					<option value="Francuska">Francuska</option>
					<option value="Gibraltar">Gibraltar</option>
					<option value="Grčka"> Grčka</option>																				
					<option value="Island">Island</option>
					<option value="Irska">Irska</option>
					<option value="Italija">Italija</option>
					<option value="Luksemburg">Luksemburg</option>					
					<option value="Latvija">Latvija</option>
					<option value="Litva">Litva</option>
					<option value="Lihtenštajn">Lihtenštajn</option>					
					<option value="Mađarska">Mađarska</option>
					<option value="Makedonija">Makedonija</option>
					<option value="Malta">Malta</option>
					<option value="Moldavija">Moldavija</option>					
					<option value="Monako">Monako</option>
					<option value="Nizozemska">Nizozemska</option>
					<option value="Njemačka">Njemačka</option>
					<option value="Poljska">Poljska</option>
					<option value="Portugal">Portugal</option>
					<option value="Rumunjska">Rumunjska</option>
					<option value="San Marino">San Marino</option>
					<option value="Slovačka">Slovačka</option>	
					<option value="Slovenija">Slovenija</option>									
					<option value="Srbija">Srbija</option>					
					<option value="Španjolska">Španjolska</option>
					<option value="Švedska">Švedska</option>
					<option value="Švicarska">Švicarska</option>															
					<option value="Ujedinjeno Kraljvstvo">Ujedinjeno Kraljvstvo</option>
					<option value="Ukrajina">Ukrajina</option>
					<option value="Vatikan">Vatikan</option>
				</select>	
				<span class="error">* <?php echo $drzavaErr;?></span>
				<?$error?>
				<br/><br/>
				
				<label for="brojTelefona">Kontakt telefon:</label>
				<select name="prefix">
					<option value="+385" selected>+385 Hrvatska</option>
					<option value="+30">+30 Grčka</option>
					<option value="+31">+30 Nizozemska</option>
					<option value="+32">+32 Belgija</option>
					<option value="+33">+33 Francuska</option>
					<option value="+34">+34 Španjolska</option>
					<option value="+350">+350 Gibraltar</option>
					<option value="+351">+351 Portugal</option>
					<option value="+352">+220 Luksemburg</option>
					<option value="+353">+353 Irska</option>
					<option value="+354">+354 Island</option>
					<option value="+355">+355 Albanija</option>
					<option value="+356">+356 Malta</option>
					<option value="+357">+357 Cipar</option>
					<option value="+358">+358 Finska</option>
					<option value="+359">+359 Bugarska</option>
					<option value="+36">+36 Mađarska</option>
					<option value="+370">+370 Litva</option>
					<option value="+371">+371 Latvija</option>
					<option value="+372">+372 Estonija</option>
					<option value="+373">+373 Moldavija</option>
					<option value="+374">+374 Armenija</option>
					<option value="+375">+375 Bjelorusija</option>
					<option value="+376">+376 Andora</option>
					<option value="+377">+377 Monako</option>
					<option value="+378">+378 San Marino</option>
					<option value="+379">+379 Vatikan</option>
					<option value="+380">+380 Ukrajina</option>
					<option value="+381">+381 Srbija</option>
					<option value="+382">+382 Crna Gora</option>
					<option value="+386">+386 Slovenija</option>
					<option value="+387">+387 Bosna i Hercegovina</option>
					<option value="+389">+389 Makedonija</option>
					<option value="+39">+39 Italija</option>
					<option value="+40">+40 Rumunjska</option>
					<option value="+41">+41 Švicarska</option>
					<option value="+420">+420 Češka</option>
					<option value="+421">+421 Slovačka</option>
					<option value="+423">+423 Lihtenštajn</option>
					<option value="+43">+43 Austrija</option>
					<option value="+44">+44 Ujedinjeno Kraljvstvo</option>
					<option value="+45">+45 Danska</option>
					<option value="+46">+46 Švedska</option>
					<option value="+48">+48 Poljska</option>
					<option value="+49">+49 Njemačka</option>
				</select>	
				<span class="error">* <?php echo $prefixErr;?></span>
				
				<input id="brojTelefon" type="text" placeholder="991234567" name="brojTelefona" value="<?php if (isset($brojTelefona)) echo $brojTelefona; ?>"/>
				<span class="error">* <?php echo $brojTelefonaErr;?></span>
				<br/><br/>
				
				
				<?php
					if (isset($_POST['registriraj']) && $korImeErr == '' && $lozinkaErr == '' && $ponLozinkaErr == '' && $emailErr == '' && $imeKlijentErr == '' && $prezimeKlijentErr == '' && $datumRodjenjaErr == '' && $adresaErr == ''&& $drzavaErr == '' && $prefixErr == '' && $brojTelefonaErr == '' ) {
						$conn = mysqli_connect('localhost', 'root', '123', 'seminar');
						mysqli_query($conn, "SET NAMES 'utf8'");
						mysqli_query($conn, "SET CHARACTER_SET 'utf8'");
						
						/*provjera da li je korisničko ime zauzeto */ 
						$sql="SELECT * FROM podaci WHERE korisnickoIme='" .mysqli_real_escape_string($conn, $korIme). "';";
						$res = mysqli_query($conn, $sql);

					
						if(mysqli_num_rows($res)>0){
						echo "<script>alert('Korisničko ime je zauzeto!')</script>";
						}
						else{

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
						
						$query2 = "INSERT INTO klijent ( idProba, imeKlijent, prezimeKlijent, datumRodjenja, adresa, drzava, predbroj, telefon, dozvola )
						VALUES ( '$zadnji', '$imeKlijent', '$prezimeKlijent', '$datumRodjenja', '$adresa', '$drzava', '$prefix', '$brojTelefona', 0 );";
						$result2 = mysqli_query($conn, $query2);
						
						if(!$result || !$result2) { echo 'Nekaj ne valja' . mysqli_error($conn); }
		 
						mysqli_close($conn);
						echo "<script>alert('Uspješno ste se registrirali!')</script>";
						echo "<script>window.location = 'index.php';</script>";
						}
					}
					
					else{
						$korImeErr = $lozinkaErr = $ponLozinkaErr = $emailErr = $imeKlijentErr = $prezimeKlijentErr ="";
						$datumRodjenjaErr = $adresaErr = $drzavaErr = $prefixErr = $brojTelefonaErr = "";
						echo "<input type='submit' name='registriraj' value='Registriraj'/>";
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