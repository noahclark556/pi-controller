<?php

// Connect to PI DB
// DB INFO:
// TABLE: test
// collumns
//  id - int
//  type - varchar
//  command - varchar
//  console - varchar
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
