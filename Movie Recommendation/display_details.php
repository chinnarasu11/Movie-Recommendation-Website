<?php
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-image: url("reg_bg.jpg");
			
        }

        .movie-container {
            width: 300px;
            height: 400px; /* Adjust the height as needed */
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer; /* Add cursor style to indicate clickable */
            transition: transform 0.2s ease-in-out;
            background-color: #fff;
			border-radius:10px;
        }

        .movie-container:hover {
            transform: scale(1.05);
        }

        .movie-container img {
            max-width: 100%;
            max-height: 70%; /* Adjust the max-height for images */
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .movie-container video {
            width: 100%;
            height: 70%; /* Adjust the height for videos */
            margin-top: 10px;
            border-radius: 8px;
        }

        .movie-details {
            flex-grow: 1;
        }

        hr {
            margin-top: 10px;
            margin-bottom: 10px;
            border: 0;
            border-top: 1px solid #eee;
        }
		 .movie-details strong {
            text-decoration: none; /* Remove underline from strong tags */
        }
    </style>
    <title>Movie Details</title>
</head>
<body>

<?php
// Create connection
$conn = Connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve movie details from the database
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        // Start a new row after every 3 movies
        if ($count % 3 == 0 && $count != 0) {
            echo '<br>';
        }

        // Movie container with a link to the play page
        echo '<a href="play_video.php?id=' . $row["id"] . '" class="movie-container">';
        
        // Display image
        $imagePath = 'pic/' . $row["image_filename"];
        if (file_exists($imagePath)) {
            echo '<img src="' . $imagePath . '" alt="Movie Image"><br>';
        } else {
            echo 'Image not found!<br>';
        }

        // Movie details
        echo "<div class='movie-details'>";
        echo "<strong>Movie Name:</strong> " . $row["movie_name"] . "<br>";
        echo "<strong>Director:</strong> " . $row["movie_dir"] . "<br>";
        echo "<strong>Hero:</strong> " . $row["movie_hero"] . "<br>";
        echo "<strong>Heroine:</strong> " . $row["movie_herione"] . "<br>";
        echo "<strong>Year:</strong> " . $row["movie_year"] . "<br>";
        echo "</div>";

        echo "<hr>"; // Separation between information and image
        echo '</a>';
        $count++;
    }
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>

</body>
</html>
