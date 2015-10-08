<?php
	//read ticket from url
	if (isset($_GET['from'])) {
    	$from = $_GET['from'];
	}
	if (isset($_GET['to'])) {
    	$to = $_GET['to'];
	}
	if (isset($_GET['price'])) {
    	$price = $_GET['price'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Rapide</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Votre ticket rapide:</h1>
	<p>De: <strong><?php echo $from ?></strong></p>
	<p>A: <strong><?php echo $to ?></strong></p>
	<p>Prix: <strong><?php echo $price ?></strong>€</p>
	<h2>Merci de payer <strong><?php echo $price ?></strong>€</h2>
</body>
</html>