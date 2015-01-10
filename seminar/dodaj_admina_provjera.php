<?php
$korIme = $lozinka = $ponLozinka = $email = $imeKlijent = $prezimeKlijent ="";
$datumRodjenja = $prefix = $brojTelefona = $brojKartice = "";
$datProba="";
		
$korImeErr = $lozinkaErr = $ponLozinkaErr = $emailErr = $imeKlijentErr = $prezimeKlijentErr ="";
$datumRodjenjaErr = $prefixErr = $brojTelefonaErr = $brojKarticeErr = "";

if (isset($_POST['registriraj'])){
if (empty($_POST["korIme"])) {
    $korImeErr = "Upišite korisničko ime!";
  } else {
    $korIme = test_input($_POST["korIme"]);
  }
  
  if (empty($_POST["lozinka"])) {
  $lozinkaErr = "Upišite lozinku";
  } else {
    $lozinka = test_input($_POST["lozinka"]);
  }
  
   if (empty($_POST["ponLozinka"])) {
    $ponLozinkaErr = "Ponovite lozinku!"; 
  } else {
    $ponLozinka = test_input($_POST["ponLozinka"]);
  }
  
  if (($lozinka)!=($ponLozinka)) {
    $ponLozinkaErr = "Lozinke se ne poklapaju!";
  } 
  
  if (empty($_POST["email"])) {
    $emailErr = "Upišite email!";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $emailErr = "Pogrešan email format!"; 
    }
  }
  
  if (empty($_POST["imeKlijent"])) {
    $imeKlijentErr = "Upišite ime!";
  } else {
    $imeKlijent = test_input($_POST["imeKlijent"]);
    if (!preg_match("/^[a-zA-ZčšžđćČŠŽĐĆ ]*$/",$imeKlijent)) {
      $imeKlijentErr = "Dozvoljena su samo slova i razmaci!"; 
    }
  }
  
  if (empty($_POST["prezimeKlijent"])) {
    $prezimeKlijentErr = "Upišite prezime!";
  } else {
    $prezimeKlijent = test_input($_POST["prezimeKlijent"]);
    if (!preg_match("/^[a-zA-ZčšžđćČŠŽĐĆ ]*$/",$prezimeKlijent)) {
      $prezimeKlijentErr = "Dozvoljena su samo slova i razmaci!"; 
    }
  }
  
  if (empty($_POST["datumRodjenja"])) {
    $datumRodjenjaErr = "Unesite datum!";
	} 
	else{
    $datumRodjenja = test_input($_POST["datumRodjenja"]);
    }
	
  if (empty($_POST["prefix"])) {
    $prefixErr = "Odaberite predbroj!";
  } else {
    $prefix = test_input($_POST["prefix"]);
  }
  if (empty($_POST["brojTelefona"])) {
    $brojTelefonaErr = "Upišite broj telefona!";
  } else {
    $brojTelefona = test_input($_POST["brojTelefona"]);
  }
  
 /* if (empty($_POST["brojKartice"])) {
    $brojKarticeErr = "Upišite broj kartice!";
  } else {
    $brojKartice = test_input($_POST["brojKartice"]);

  } */
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>