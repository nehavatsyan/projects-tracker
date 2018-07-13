<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "module";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$pid=$_GET["pid"];
$sql = "DELETE FROM platform_module WHERE pid=".$pid;
if ($conn->query($sql) === TRUE) {
    header("location:platform.php");
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>