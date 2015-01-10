<?php
 
$email = $adresa = $drzava = $prefix = $brojTelefona = $brojKartice = "";
		
 $emailErr = $adresaErr = $drzavaErr = $prefixErr = $brojTelefonaErr = $brojKarticeErr = "";

if (isset($_POST['azuriraj'])){
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Type email!";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $emailErr = "Pogrešan email format!"; 
    }
  }
  
    
  if (empty($_POST["datumRodjenja"])) {
    $datumRodjenjaErr = "Insert date!";
	} 
	else{
    $datumRodjenja = test_input($_POST["datumRodjenja"]);
    }
	
 
	if (empty($_POST["adresa"])) {
    $adresaErr = "Type address!";
  } else {
    $adresa = test_input($_POST["adresa"]);
  }
  
  if (empty($_POST["drzava"])) {
    $drzavaErr = "Pick country!";
  } else {
    $drzava = test_input($_POST["drzava"]);
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
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>