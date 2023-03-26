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

// Get form data
$participant_id = $_POST['participant_id'];
$event_name = $_POST['event_name'];
$rating = $_POST['rating'];

// Insert review into database
$sql = "INSERT INTO reviews (participant_id, event_name, rating) VALUES ('$participant_id', '$event_name', '$rating')";

if (mysqli_query($conn, $sql)) {
    echo "Review submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>