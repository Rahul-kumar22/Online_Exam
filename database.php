<?php
// Database connection using mysqli
$cn = mysqli_connect("localhost", "root", "", "quiz");

// Check the connection
if (!$cn) {
    die("Could not connect to MySQL: " . mysqli_connect_error());
}
?>
