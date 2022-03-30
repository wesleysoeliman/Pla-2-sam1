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
		<form action="backend/contactController.php" method="post">
			<div class="form-group">
				<label for="lastName">Achternaam:</label>
				<input type="text" name="lastName">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" name="email">
			</div>

			<div class="form-group">
				<input type="radio" id="complaint" name="reason" value="Klacht">
				<label for="klacht">Klacht</label>

				<input type="radio" id="question" name="reason" value="Suggestie">
				<label for="question">Vraag</label>

				<input type="radio" id="other" name="reason" value="Anders">
				<label for="anders">Anders</label>
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