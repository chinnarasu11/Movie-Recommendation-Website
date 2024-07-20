<!DOCTYPE html>
<html>

<head>
    <title>Movie Recommendation Website</title>

</head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px 10px;
            margin: 20px 0;
            display: inline-block;
            border: 2px solid #ccc;
            box-sizing: border-box;
        }

        .imgcontainer {
            text-align: center;
            margin: 20px 20px 0;
            position: relative;
        }

        button {
            background-color: #0095ff;
            border: 1px solid transparent;
            border-radius: 3px;
            box-shadow: rgba(255, 255, 255, .4) 0 1px 0 0 inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, system-ui, "Segoe UI", "Liberation Sans", sans-serif;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.15385;
            margin: 0;
            outline: none;
            padding: 8px .8em;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            white-space: nowrap;
        }

        .button-7:hover,
        .button-7:focus {
            background-color: #07c;
        }

        .button-7:focus {
            box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
        }

        .button-7:active {
            background-color: #0064bd;
            box-shadow: none;
        }

        a {
            color: #FFFFFF
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 28px;
        }

        span.pcw {
            float: right;
            padding-top: 16px;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            color:white;
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 30px;
        }

        /* Modal Content/Box */
        .modal-content {
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 60%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: black;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: red;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: block;
            color: red;
        }

        .topnav .icon {
            display: none;
        }

        .tab {
            display: none;
        }

        .tab.active {
            display: block;
        }
    </style>

<body bgcolor="black">

    <img src="logo.jpg" alt="Trulli" width="1350" height="100">

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href='about.html'>About</a>
        <a href="#contact" onclick="openLoginPopup()">Admin</a>
        <a href="userlogin.php" onclick="openLoginPopup1()">User</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <img src="mainimage.jpg" alt="Trulli" width="1350" height="700" alt="Snow">

    <div id="id01" class="modal">
        <form class="modal-content animate" action="validate1.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal"></span>
                <img src="profile.jpg" alt="Avatar" class="avatar">
            </div>
			
		
           <div class="container">
    <div class="tab" id="loginTab">
        <label for="youname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="youpass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br>

        <input type="checkbox" checked="checked" name="remember"> Remember me<br>

        <label>
            <button type="button" onclick="document.getElementById('id02').style.display='none'"
                            class="cancelbtn">Cancel</button>
            <input type="submit" name="submit" value="Submit">
        </label>
    </div>
</div>
        </form>
    </div>




    <script>
        function openLoginPopup() {
            document.getElementById('id01').style.display = 'block';
            document.getElementById('loginTab').classList.add('active');
            document.getElementById('registerTab').classList.remove('active');
        }

        function openLoginPopup1() {
            document.getElementById('id02').style.display = 'block';
            document.getElementById('registerTab').classList.add('active');
            document.getElementById('loginTab').classList.remove('active');
        }

        function submitRegistration() {
            // Perform registration form submission logic here
            alert('Registration submitted!');
            document.getElementById('id02').style.display = 'none';
        }
    </script>

</body>

</html>
