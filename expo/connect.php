<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "expo";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['reg']) && isset($_POST['ph']) && isset($_POST['expo'])) {
    $name = $_POST['name'];
	$year = $_POST['year'];
	$reg = $_POST['reg'];
    $ph = $_POST['ph'];
    $expo = $_POST['expo'];

    $query = mysqli_prepare($conn, "INSERT INTO participants(name, year, regno, ph, expo) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($query, "sssss", $name, $year, $reg, $ph, $expo);
    mysqli_stmt_execute($query);

    if (mysqli_stmt_error($query) == "") {
        echo "<script>window.open('add.php','_self')</script>";
    } else {
        echo "Error inserting data: " . mysqli_stmt_error($query);
    }

    mysqli_stmt_close($query);
}

mysqli_close($conn);
?> 