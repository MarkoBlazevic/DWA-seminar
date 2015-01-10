<?php
$lozinka = $ponLozinka="";
$lozinkaErr = $ponLozinkaErr="";

if (isset($_POST['azuriraj'])){

  
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
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>