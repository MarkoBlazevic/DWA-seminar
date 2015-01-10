<?php
$lozinka = $ponLozinka="";
$lozinkaErr = $ponLozinkaErr="";

if (isset($_POST['azuriraj'])){

  
  if (empty($_POST["lozinka"])) {
  $lozinkaErr = "Type password";
  } else {
    $lozinka = test_input($_POST["lozinka"]);
  }
  
   if (empty($_POST["ponLozinka"])) {
    $ponLozinkaErr = "Repeat password!"; 
  } else {
    $ponLozinka = test_input($_POST["ponLozinka"]);
  }
  
  if (($lozinka)!=($ponLozinka)) {
    $ponLozinkaErr = "Passwords don't match!";
  } 
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>