<?php
require 'database.php';
$conn = Connect();

function GetImageExtension($imagetype)
{
    if (empty($imagetype)) return false;

    switch ($imagetype) {
        case 'image/bmp':
            return '.bmp';
        case 'image/gif':
            return '.gif';
        case 'image/jpeg':
            return '.jpg';
        case 'image/png':
            return '.png';
        default:
            return false;
    }
}

$movie_name = $conn->real_escape_string($_POST['movie_name']);
$movie_dir = $conn->real_escape_string($_POST['movie_dir']);
$movie_hero = $conn->real_escape_string($_POST['movie_hero']);
$movie_herione = $conn->real_escape_string($_POST['movie_herione']);
$movie_year = $conn->real_escape_string($_POST['movie_year']);

if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name = $_FILES["uploadedimage"]["name"];
    $temp_name = $_FILES["uploadedimage"]["tmp_name"];
    $imgtype = $_FILES["uploadedimage"]["type"];
    $ext = GetImageExtension($imgtype);
    $imagename = $_FILES["uploadedimage"]["name"];
    $target_path = "pic/image/" . $imagename;

    // Check if the directory exists, if not, create it
    if (!is_dir("pic/image/")) {
        mkdir("pic/image/");
    }

    if (move_uploaded_file($temp_name, $target_path)) {
        $query = "INSERT into movieinfo(movie_name, movie_dir, car_img, movie_year, movie_hero, movie_herione) VALUES('" . $movie_name . "','" . $movie_dir . "','" . $target_path . "','" . $movie_year . "','" . $movie_hero . "','" . $movie_herione . "')";
        $success = $conn->query($query);

        // Display movie details on the HTML page
        echo "<body>";
        echo "<section id='max'>";
        echo "<img src='" . $target_path . "' width='200' height='400'>";
        echo "</section>";
        echo "<h1>CAR DETAILS UPLOAD SUCCESSFULLY</h1>";
        echo "<p>Movie Name: " . $movie_name . "</p>";
        echo "<p>Movie Director: " . $movie_dir . "</p>";
        echo "<p>Movie Hero: " . $movie_hero . "</p>";
        echo "<p>Movie Heroine: " . $movie_herione . "</p>";
        echo "<p>Movie Year: " . $movie_year . "</p>";
        echo "<a href='add_information.php'><button type='submit' id='submit' name='submit' class='submit'> Submit </button></a>";
        echo "</body>";
    }
}

$conn->close();
?>
