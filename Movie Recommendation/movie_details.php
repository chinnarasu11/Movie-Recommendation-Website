<!-- movie_details.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        video {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>

<?php
// Retrieve details from the URL parameters
$movie_name = $_GET['name'] ?? '';
$movie_dir = $_GET['director'] ?? '';
$movie_hero = $_GET['hero'] ?? '';
$movie_heroine = $_GET['heroine'] ?? '';
$movie_year = $_GET['year'] ?? '';
$car_img = $_GET['image'] ?? '';
$car_video = $_GET['video'] ?? '';
?>

<div>
    <h3><?php echo $movie_name; ?></h3>
    <p>Director: <?php echo $movie_dir; ?></p>
    <p>Hero: <?php echo $movie_hero; ?></p>
    <p>Heroine: <?php echo $movie_heroine; ?></p>
    <p>Year: <?php echo $movie_year; ?></p>

    <?php
    if (!empty($car_img)) {
        echo "<img src='$car_img' alt='$movie_name'>";
    } elseif (!empty($car_video)) {
        echo "<video controls>
                  <source src='$car_video' type='video/mp4'>
                  Your browser does not support the video tag.
              </video>";
    }
    ?>

    <br>
    <a href='add_information.php'><button type='submit' id='submit' name='submit'>Back to Form</button></a>
</div>

</body>
</html>
