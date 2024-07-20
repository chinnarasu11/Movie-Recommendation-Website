

<?php
function Connect(){
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "moviedet";

      // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>

