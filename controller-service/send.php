<?php 
include'connect.php';

$command = $_POST['command'];
$type = $_POST['type'];
$console = "";

$sql = "INSERT INTO test (command, type, console)VALUES ('$command', '$type', '$console')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            echo 1;
            $conn->close();
            header("Location:index.php"); //Remove to see Error
          

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $conn->close();
            header("Location:index.php"); //Remove to see Error
            
        }

?>
