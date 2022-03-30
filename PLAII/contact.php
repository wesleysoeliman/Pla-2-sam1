<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	
	<div class="form">
		<h2>Contactformulier</h2>

		<?php 
		if(isset($_GET['msg'])){
			echo $_GET['msg'];
		}
		?>
		<form action="backend/contactController.php" method="post">
			<div class="form-group">
				<label for="lastName">Achternaam:</label>
				<input type="text" name="lastName">
			</div>


			<div class="form-group">
			<label for="straatnaam">Straatnaam:</label>
			<input id="straatnaam" type="text" name="straatnaam">
			</div>


			<div class="form-group">
				<label for="email">E-mail:</label>
				<input id="email" type="email" name="email" placeholder="test@gmail.com">
			</div>

			<div class="form-group">
				<label for="message">Uw boodschap:</label>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</div>
			
			<div class="form-group">
				<input type="submit" value="Verzend Contactformulier">
			</div>
		</form>
	</div>
	
</body>
</html>