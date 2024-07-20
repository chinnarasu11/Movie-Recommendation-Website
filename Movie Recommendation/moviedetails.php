<?php
require 'database.php';

// Create connection
$conn = Connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$movie_name = mysqli_real_escape_string($conn, $_POST['movie_name']);
$movie_dir = mysqli_real_escape_string($conn, $_POST['movie_dir']);
$movie_hero = mysqli_real_escape_string($conn, $_POST['movie_hero']);
$movie_herione = mysqli_real_escape_string($conn, $_POST['movie_herione']);
$movie_year = mysqli_real_escape_string($conn, $_POST['movie_year']);

// Adjusted file paths
$uploadsDirectory = __DIR__ . "/pic/";
$image_path = $uploadsDirectory . basename($_FILES['uploadedimage']['name']);
$video_path = $uploadsDirectory . basename($_FILES['uploadedvideo']['name']);

// Move uploaded files to a specific directory
move_uploaded_file($_FILES['uploadedimage']['tmp_name'], $image_path);
move_uploaded_file($_FILES['uploadedvideo']['tmp_name'], $video_path);

// Extract filenames from paths
$image_filename = basename($_FILES['uploadedimage']['name']);
$video_filename = basename($_FILES['uploadedvideo']['name']);

try {
    // Alter the table to add new columns if they don't exist
    $conn->query("ALTER TABLE movies ADD COLUMN IF NOT EXISTS movie_dir VARCHAR(255) NOT NULL AFTER movie_name");
    $conn->query("ALTER TABLE movies ADD COLUMN IF NOT EXISTS movie_hero VARCHAR(255) NOT NULL AFTER movie_dir");
    $conn->query("ALTER TABLE movies ADD COLUMN IF NOT EXISTS movie_herione VARCHAR(255) NOT NULL AFTER movie_hero");
    $conn->query("ALTER TABLE movies ADD COLUMN IF NOT EXISTS movie_year INT NOT NULL AFTER movie_herione");
    $conn->query("ALTER TABLE movies ADD COLUMN IF NOT EXISTS image_filename VARCHAR(255) NOT NULL AFTER movie_year");
    $conn->query("ALTER TABLE movies ADD COLUMN IF NOT EXISTS video_filename VARCHAR(255) NOT NULL AFTER image_filename");
} catch (Exception $e) {
    // Ignore if the columns already exist
}

// Insert data into the table
$sql = "INSERT INTO movies (movie_name, movie_dir, movie_hero, movie_herione, movie_year, image_filename, video_filename)
        VALUES ('$movie_name', '$movie_dir', '$movie_hero', '$movie_herione', $movie_year, '$image_filename', '$video_filename')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
