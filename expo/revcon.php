<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "expo";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['name']) && isset($_POST['dpt']) && isset($_POST['reg']) && isset($_POST['id']) && isset($_POST['rating'])) {
    $name = $_POST['name'];
	$dpt = $_POST['dpt'];
	$reg = $_POST['reg'];
	$id = $_POST['id'];
	$rating = $_POST['rating'];

    $query = mysqli_prepare($conn, "INSERT INTO review(uname, udpt, ureg, eventid, score) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($query, "sssss", $name, $dpt, $reg, $id, $rating);
    mysqli_stmt_execute($query);

    if (mysqli_stmt_error($query) == "") {
		echo "done";
        //echo "<script>window.open('rev.php','_self')</script>";
    } else {
        echo "Error inserting data: " . mysqli_stmt_error($query);
    }

    mysqli_stmt_close($query);
}

mysqli_close($conn);
?> 