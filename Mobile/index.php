<?php 
include 'phpCode.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>qrcode</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<style type="text/css">
		#qrcode {
		  margin: 0 auto;
		  width:256px;
		  height:256px;
		  margin-top:200px;
		  margin-bottom: 200px;
		}
	</style>
</head>
<body>
	<h1>Hello</h1>
	<h2>Quel ticket desires tu?</h2>
	<form method="POST">
		<ul>
			<li style="display:none;">
				<label for="userEmail">userEmail</label>
				<input id="userEmail" name="userEmail">
			</li>
			<li>
				<label for="from">De</label>
				<input type="texte" id="from" name="from">
			</li>
			<li>
				<label for="to">A</label>
				<input type="texte" id="to" name="to">
			</li>
			<li>
				<label for="price">Prix</label>
				<input type="texte" id="price" name="price">
			</li>
			<li>
				<input type="submit" id="submit">
			</li>
		</ul>
	</form>
	<div id="qrcode"></div>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="qrcode.js"></script>
	<script type="text/javascript">
		var qrcode = new QRCode("qrcode");
		
		function draw(){
			var adresse = "<?php echo $adress; ?>"; 
			 qrcode.makeCode(adresse);
		}

		<?php echo $draw ?>

		    
	</script>
</body>
</html>