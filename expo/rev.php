<!DOCTYPE html>
<html>
	<head>
		<title>Review Page</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<style>
		.rating {
		font-size: 36px;
		color: #ddd;
		display: inline-block;
		cursor: pointer;
		}

		.rating .star:hover,
		.rating .star:hover ~ .star {
		color: #FFD700;
		}

		.rating .star.active,
		.rating .star.active ~ .star {
		color: #FFD700;
		}
		
		.table-style {
		border-collapse: collapse;
		width: 100%;
		max-width: 800px;
		margin: 0 auto;
		font-family: Arial, sans-serif;
		font-size: 14px;
		}

		.table-style th {
		background-color: #4CAF50;
		color: white;
		font-weight: bold;
		text-align: left;
		padding: 8px;
		}

		.table-style td {
		border: 1px solid #ddd;
		padding: 8px;
		}

		.table-style tr:nth-child(even) {
		background-color: #f2f2f2;
		}
		</style>
	</head>
	<body>
	<?php
			// Connect to the database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "expo";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			?>
		<header>
			<nav>
				<ul>

				</ul>
			</nav>
		</header>
		<main>
			<section id="review-form">
				<h2>Write a Review</h2>
				<fieldset>
				<form action="revcon.php" method="POST">
					
					<label for="name">Your Name:</label>
					<input type="text" id="name" name="name">
					<label for="dpt">Your Department:</label>
					<input type="text" id="dpt" name="dpt">
					<label for="reg">Your Regno:</label>
					<input type="text" id="reg" name="reg">
					<label for="id">Event ID:</label>
					<input type="int" id="id" name="id">
					<label for="rating">Your Rating:</label>
						<select name="rating" id="rating">
							<option value="0">Select your Rating</option>
							<option value="5">Execellent</option>
							<option value="4">Awesome</option>
							<option value="3">Good</option>
							<option value="2">Need improvement</option>
							<option value="1">Poor</option>
						</select>
					<input type="submit" value="submit">
				</form>
			</fieldset>
			<table class="table-style">
		<tr>
			<th>ID</th>
			<th>Participants</th>
			<th>Event</th>
		</tr>
			<?php
			$sql = "SELECT * FROM participants";
    $result = mysqli_query($conn, $sql);
    
    // Display data in table format
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
		echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["expo"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No data available</td></tr>";
    }
    
    // Close connection
    mysqli_close($conn);
	?>
	</body>
</html>

		