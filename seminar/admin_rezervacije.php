<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marko Blažević & Petar Tomorad-Rudec">
    <title>Marina Punat</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/lightbox.css" rel="stylesheet" />
	<link rel="stylesheet" href="fontello/css/fontello.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style><script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>
  <script src="bootstrap/js/jquery-1.11.0.min.js"></script>
  <script src="bootstrap/js/lightbox.min.js"></script></head>

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
				<li><a href="eng/admin_rezervacije_eng.php">ENG</a></li> 
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
		include('login.php');
		if(!isset($_SESSION)){
			session_start();
		}
		/* Stranici može pristupiti samo ulogirani korisnik */
		if(isset($_SESSION['sess_username']) && !empty($_SESSION['sess_username']) && $_SESSION['dozvola']==1){
			echo '
			<li><a href="admin_klijenti.php">Pregled klijenata</a></li>
		<li><a href="admin_rezervacije.php">Pregled rezervacija</a></li>
		<li><a href="dodaj_admina.php">Dodavanje administratora</a></li>
		</ul>
		
		<form class="navbar-form navbar-right">
		<div class="form-group">
		<li class="korisnik">Korisnik: <a href="korisnik.php">'. $_SESSION['sess_username']. '</a> &nbsp;</li>
		</div>
		<a href="logout.php" class="btn btn-danger">Odjavite se</a>
		</form>';
		
		} 
		else{
			echo "<script>window.location = 'index.php';</script>";
		}
		  ?>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
		<div class="col-md-2">
          <ul class="nav nav-pills nav-stacked visible-lg visible-md">
			<a href="marina.php" class="list-group-item">Marina</a>
			<a href="servis.php" class="list-group-item">Servis plovila</a>
			<a href="opskrba.php" class="list-group-item">Opskrba plovila</a>
			<a href="hotel.php" class="list-group-item">Hotel i restoran</a>
			<a href="kontakt.php" class="list-group-item">Kontakt</a>
			<a href="gdjesmo.php" class="list-group-item">Gdje se nalazimo</a>
			</ul>
        </div>
        <div class="col-md-10">
			<h3>Popis aktivnih rezervacija</h3>
			
			<?php
			$conn = mysqli_connect('localhost', 'root', '123', 'seminar');
			mysqli_query($conn, "SET NAMES 'utf8'");
			mysqli_query($conn, "SET CHARACTER_SET 'utf8'");
			$query = "SELECT * FROM rezervacija;";
			$result = mysqli_query($conn, $query);
			$count=mysqli_num_rows($result);
			?>
				<form name="form1" method="POST" action="admin_rezervacije.php">
				<div class="table-responsive">
				<table class='table'>
				<thead>
					<tr>
					<th>#</th>
					<th>Id Rezervacije</th>
					<th>Id Klijenta</th>
					<th>Id Veza </th>
					<th>Id Usluge</th>
					<th>Datum početka</th>
					<th>Datum kraja</th>
					</tr>
				</thead>
				<tbody>
				
				<?php
				while($rows=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><input name="checkbox[]" type="checkbox" id="checkbox[]" value=" <?php echo $rows['idRezervacija']; ?> "></td>
					<td> <?php echo $rows['idRezervacija']; ?> </td>
					<td> <?php echo $rows['idKlijenta']; ?> </td>
					<td> <?php echo $rows['idVeza']; ?> </td>
					<td> <?php echo $rows['idUsluga']; ?> </td>
					<td> <?php echo $rows['datumPocetak']; ?> </td>
					<td> <?php echo $rows['datumKraj']; ?> </td>
				</tr>
				</tbody>
				<?php
				}
				?>
				</table>
				</div>
					<input name="delete1" type="submit" id="delete1" class="btn btn-default" value="Obriši">
				
				<?php
				/* brisanje rezervacije */
				if(isset($_POST['delete1'])){
				 $checkbox = $_POST['checkbox'];
					for($i=0;$i<count($checkbox);$i++){
						$del_id = $checkbox[$i];
						$sql = "DELETE FROM rezervacija WHERE idRezervacija = '$del_id';";
						$result = mysqli_query($conn, $sql);
					}
					if($result){
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin_rezervacije.php\">";
					}
				}
				mysqli_close($conn);
				?>
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