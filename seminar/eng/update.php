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

if(!isset($_SESSION)){
		session_start();
	}
$conn=mysqli_connect('localhost','root','123','seminar');
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}
$korisnickoIme=$_SESSION['sess_username'];
$query = "SELECT *
        FROM podaci
        WHERE korisnickoIme = '$korisnickoIme';";
$result = mysqli_query($conn, $query);
$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

$query1 = "SELECT * FROM klijent WHERE idProba = (SELECT id FROM podaci WHERE korisnickoIme = '$korisnickoIme');";
$result1 = mysqli_query($conn, $query1);
$userData1= mysqli_fetch_array($result1, MYSQL_ASSOC);
mysqli_close($conn);

?>