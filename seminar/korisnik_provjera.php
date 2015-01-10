<?php
 
$email = $adresa = $drzava = $prefix = $brojTelefona = $brojKartice = "";
		
 $emailErr = $adresaErr = $drzavaErr = $prefixErr = $brojTelefonaErr = $brojKarticeErr = "";

if (isset($_POST['azuriraj'])){
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Upišite email!";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $emailErr = "Pogrešan email format!"; 
    }
  }
  
    
  if (empty($_POST["datumRodjenja"])) {
    $datumRodjenjaErr = "Unesite datum!";
	} 
	else{
    $datumRodjenja = test_input($_POST["datumRodjenja"]);
    }
	
 
	if (empty($_POST["adresa"])) {
    $adresaErr = "Unesite adresu!";
  } else {
    $adresa = test_input($_POST["adresa"]);
  }
  
  if (empty($_POST["drzava"])) {
    $drzavaErr = "Odaberite državu!";
  } else {
    $drzava = test_input($_POST["drzava"]);
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
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>