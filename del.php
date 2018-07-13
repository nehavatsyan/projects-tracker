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
$kid=$_GET["kid"];
$sql = "DELETE FROM keyword_module WHERE kid=".$kid;
if ($conn->query($sql) === TRUE) {
    header("location:keyword_display.php");
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>