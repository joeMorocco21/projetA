<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/styleformulaire.css"/>
	<title>Formulaire de contact</title>
	
</head>
<body class="formulaire">
	<?php include_once ('menu.php'); ?>
	<div class="col-lg-5 offset-lg-3  col-md-5 offset-md-3">
	<div class="formulaire-contact"> 
		<h1>Formulaire de contact</h1>
		
<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom: *</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Nom" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom: *</label>
    <input type="text" name="lastName"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Prénom" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email: *</label>
    <input type="email"  name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Téléphone: *</label>
    <input type="telephone" name="phone"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Téléphone" required>
  </div>
  <button type="submit" name="submit" class="btn btn-secondary">Valider</button>
</form>
	</div>
</div>
	<?php
	if(isset($_POST["submit"])){
		$file = 'data.txt';
		$name = $_POST["name"];
		$lastName = $_POST["lastName"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$data = array($name, $lastName, $email, $phone);
		file_put_contents($file, implode(' ',$data) . PHP_EOL,FILE_APPEND | LOCK_EX);

		define ("SECRETKEY", "mysecretkey1234");
		$hashName = openssl_encrypt($name, "AES-128-ECB", SECRETKEY);
		$hashLastName = openssl_encrypt($lastName, "AES-128-ECB", SECRETKEY);
		$hashEmail = openssl_encrypt($email, "AES-128-ECB", SECRETKEY);
		$hashPhone = openssl_encrypt($phone, "AES-128-ECB", SECRETKEY);
		$link="<script>window.open('data.php?name=$hashName&lastName=$hashLastName&email=$hashEmail&phone=$hashPhone')</script>";
		echo $link;
	}
	?>
</body>
</html>