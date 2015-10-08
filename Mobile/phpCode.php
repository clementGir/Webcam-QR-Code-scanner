<?php 

if ($_POST) {

	// Winnie's favorite
	if ($_POST['userEmail'] !== "") {
		die("Die you fakin bot");
	}

	// Netoyage 
	$from = trim(strip_tags($_POST['from']));
	$to = trim(strip_tags($_POST['to']));
	$price = trim(strip_tags($_POST['price']));

	// Verifications
	$error = false;

	if ($from == '') {
		$result .= "Ville de départ? </br>";
		$error = true;
	}
	if ($to == '') {
		$result .= "Ville d'arrivé? </br>";
		$error = true;
	}
	if ($price == '') {
		$result .= "Quel prix? </br>";
		$error = true;
	}

	$result = "<div class='result'><p>" . $result . "</p></div>"; 
	$adress = "quickticket.php?from=" . $from . "&to=" . $to . "&price=" . $price;
	$draw = "bad request";

	// Validation

	if ($error == false) {
		$draw = 'draw();';
	}
	else{
		echo $result;
	}
}



?>