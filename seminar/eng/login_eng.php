<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Marko Blažević & Petar Tomorad-Rudec">
	</head>
</html>
<?php
	ob_start();
	if(!isset($_SESSION)){
		session_start();
	}
	
	
	if (isset($_POST['login'])){
	$korisnickoIme=$_POST['korisnickoIme'];
	$lozinka=$_POST['lozinka'];
	$conn=mysqli_connect('localhost','root','123','seminar');
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}
	$korisnickoIme = mysqli_real_escape_string($conn,$korisnickoIme);
	$query = "SELECT lozinka, salt, id
        FROM podaci
        WHERE korisnickoIme = '$korisnickoIme';";
	
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) == 0) 
	{
    echo "<script>alert('Username doesn't exist'.')</script>";
	}
	
		
	$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
	$id=$userData['id'];
	
	$query1 = "SELECT dozvola
        FROM klijent
        WHERE idProba = '$id';";
	$result1 = mysqli_query($conn, $query1);
	
	$kor=mysqli_fetch_array($result1, MYSQL_ASSOC);
	$_SESSION['dozvola']=$kor['dozvola'];
	
	$lozinka= hash('sha256', $lozinka);
	$hash = hash('sha256', $userData['salt'] . $lozinka );
	mysqli_close($conn);
	if($hash != $userData['lozinka']) 
	{	echo "<script>alert('Incorrect password.')</script>";
	}else{
		if($_SESSION['dozvola']==0){
		$_SESSION['sess_username'] = $korisnickoIme;
		echo "<script> alert('You succesfully logged in.')</script>";
		echo "<script>window.location = 'index_eng.php';</script>";
		}
		if($_SESSION['dozvola']==1){
		$_SESSION['sess_username'] = $korisnickoIme;
		echo "<script> alert('You succesfully logged in.')</script>";
		echo "<script>window.location = 'admin_klijenti_eng.php';</script>";
		
		}
		
	}
	}
?>