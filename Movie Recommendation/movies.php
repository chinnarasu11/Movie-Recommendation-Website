<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <style>
        .container {
            margin-top: 55px;
        }

        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
           
        }

        .car-box {
            width: 30%;
            margin: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            background-color:#F8F8FF;
            box-shadow:10px 10px 30px  #8A2BE2;
        -webkit-box-shadow:0px 0px 10px  #20B2AA;
        }

        .car-box img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="car-container">
            <?php
            // Include your database connection code here
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "preowned";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from the database
            $sql = "SELECT * FROM cars";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='car-box'>";
                    if (!empty($row['car_img'])) {
                        echo "   <img src='" . $row['car_img'] . "' alt='Car Image'>";
                    } else {
                        echo "   <p>No Image Available</p>";
                    }
                    echo "   <p>Car Name: " . $row['car_name'] . "</p>";
                    echo "   <p>Car Model: " . $row['car_model'] . "</p>";
                    echo "   <p>Year: " . $row['year'] . "</p>";
                    echo "   <p>Kilometers: " . $row['km'] . "</p>";
                    echo "   <p>phone number (ph): " . $row['ph'] . "</p>";
                    echo "   <p>Color: " . $row['color'] . "</p>";

                    // Display the image if the car_img column contains the file path or URL
                    

                    echo "</div>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>