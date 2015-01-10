<?php
$korIme = $lozinka = $ponLozinka = $email = $imeKlijent = $prezimeKlijent ="";
$datumRodjenja = $prefix = $brojTelefona = $brojKartice = "";
$datProba="";
		
$korImeErr = $lozinkaErr = $ponLozinkaErr = $emailErr = $imeKlijentErr = $prezimeKlijentErr ="";
$datumRodjenjaErr = $prefixErr = $brojTelefonaErr = $brojKarticeErr = "";

if (isset($_POST['registriraj'])){
if (empty($_POST["korIme"])) {
    $korImeErr = "Type username!";
  } else {
    $korIme = test_input($_POST["korIme"]);
  }
  
  if (empty($_POST["lozinka"])) {
  $lozinkaErr = "Type password!";
  } else {
    $lozinka = test_input($_POST["lozinka"]);
  }
  
   if (empty($_POST["ponLozinka"])) {
    $ponLozinkaErr = "Repeat password!"; 
  } else {
    $ponLozinka = test_input($_POST["ponLozinka"]);
  }
  
  if (($lozinka)!=($ponLozinka)) {
    $ponLozinkaErr = "Passwords don't match'!";
  } 
  
  if (empty($_POST["email"])) {
    $emailErr = "Type email!";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $emailErr = "Pogrešan email format!"; 
    }
  }
  
  if (empty($_POST["imeKlijent"])) {
    $imeKlijentErr = "Type name!";
  } else {
    $imeKlijent = test_input($_POST["imeKlijent"]);
    if (!preg_match("/^[a-zA-ZčšžđćČŠŽĐĆ ]*$/",$imeKlijent)) {
      $imeKlijentErr = "Dozvoljena su samo slova i razmaci!"; 
    }
  }
  
  if (empty($_POST["prezimeKlijent"])) {
    $prezimeKlijentErr = "Type surname!";
  } else {
    $prezimeKlijent = test_input($_POST["prezimeKlijent"]);
    if (!preg_match("/^[a-zA-ZčšžđćČŠŽĐĆ ]*$/",$prezimeKlijent)) {
      $prezimeKlijentErr = "Dozvoljena su samo slova i razmaci!"; 
    }
  }
  
  if (empty($_POST["datumRodjenja"])) {
    $datumRodjenjaErr = "Pick date of birth!";
	} 
	else{
    $datumRodjenja = test_input($_POST["datumRodjenja"]);
    }
	
  if (empty($_POST["prefix"])) {
    $prefixErr = "Pick area code!";
  } else {
    $prefix = test_input($_POST["prefix"]);
  }
  if (empty($_POST["brojTelefona"])) {
    $brojTelefonaErr = "Type phone number!";
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