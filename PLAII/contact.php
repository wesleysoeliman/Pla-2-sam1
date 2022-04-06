<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="formh2">
		<h2>Contactformulier</h2>
	</div> 
	<div class="form">
		<?php 
		if(isset($_GET['msg'])){
			echo $_GET['msg'];
		} 
		?>
		<form action="backend/contactController.php" method="post">
			<div class="form-group">
				<label for="titel">Titel:</label>
				<input id="titel" type="text" name="titel">
			</div>


			<div class="form-group">
				<label for="message">Inhoud:</label>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</div>

			<div class="form-group">
				<label for="naam">Naam:</label>
				<input id="naam" type="text" name="naam">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input id="email" type="email" name="email" placeholder="test@gmail.com">
			</div>
			
			<div class="form-group">
				<input type="submit" value="Verzend Contactformulier">
			</div>
		</form>
	</div>
	
</body>
</html>