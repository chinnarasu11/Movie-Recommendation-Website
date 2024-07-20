<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Place</title>
</head>
<style>
html {
    height: 100%;
}

body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("reg_bg.jpg");
}

.login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
    border-radius: 10px;
}

.login-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: white;
    text-align: center;
}

.form-group {
    position: relative;
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.form-group label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.form-control:focus ~ label,
.form-control:valid ~ label {
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
}

.form-group input[type="file"] {
    color: white;
}

.submit {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
    background: transparent;
    border: 2px solid #03e9f4;
    border-radius: 5px;
}

.submit:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
}

</style>
<body>
    <div class="login-box">
	<h1> </h1><br>
        <h2>Admin Upload</h2>
        <form align="center" role="form" action="moviedetails.php" enctype="multipart/form-data" method="POST">
            <br style="clear: both">
            <div class="form-group">
                <input type="text" class="form-control" id="car_name" name="movie_name" placeholder="Movie NAME" required autofocus="">
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" id="car_model" name="movie_dir" placeholder="Dircetor Name" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" id="year" name="movie_hero" placeholder="Hero Name" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" id="km" name="movie_herione" placeholder="Heroine Name" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" id="PH" name="movie_year" placeholder="year" required>
            </div><br>

            <div class="form-group">
                <label for="uploadedimage">Image:</label>
                <input type="file" name="uploadedimage" accept="image/*" placeholder="Upload Image">
            </div><br>

            <div class="form-group">
                <label for="uploadedvideo">Video:</label>
                <input type="file" name="uploadedvideo" accept="video/*" placeholder="Upload Video">
            </div><br>

            <center><button type="submit" id="submit" name="submit" class="submit">Submit</button></center>
        </form>
    </div>
</body>
</html>
