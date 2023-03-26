<!DOCTYPE html>
<html>
	<head>
		<title>Participant Page</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		<style>
		
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
		<header>
			<nav>
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="parti.php">Participants</a></li>
					<li><a href="rev.php">Reviews</a></li>
				</ul>
			</nav>
		</header>
		<table class="table-style">
		<tr>
			<th>Participants</th>
			<th>Dpt</th>
			<th>RegNo</th>
			<th>ph</th>
			<th>Event</th>
			<th>Rating</th>
		</tr>
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

			// Retrieve data from database
    // Query to retrieve data from the database
    $sql = "SELECT * FROM participants";
    $result = mysqli_query($conn, $sql);
    
    // Display data in table format
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["regno"] . "</td>";
        echo "<td>" . $row["ph"] . "</td>";
        echo "<td>" . $row["expo"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No data available</td></tr>";
    }
    
    // Close connection
    mysqli_close($conn);
		?>
	</div>
	</body>
</html>