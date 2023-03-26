<!DOCTYPE html>
<html>
<head>
	<title>Add Participants</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="logo.png">
			<h1>EXPODIA..!</h1>
		</div>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="parti.php">Participants</a></li>
				<li><a href="rev.php">Reviews</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h2>Add Participants</h2>
		<form action="connect.php" method="POST">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			
			<label for="year">Year:</label>
				<select id="year" name="year">
					<option value="I BCA">I BCA</option>
					<option value="II BCA">II BCA</option>
					<option value="III BCA">III BCA</option>
				</select>
			<label for="reg">Reg:</label>
			<input type="text" id="reg" name="reg" required>

			<label for="ph">ph:</label>
			<input type="text" id="ph" name="ph" required>
			

			<label for="expo">Expo:</label>
			<input type="text" id="expo" name="expo" required>

			<input type="submit" value="submit">
		</form>
	</main>

	<footer>
		<p>&copy; 2023 My Expo Website</p>
	</footer>
<div id="popup-message"></div>
	
</body>
</html>