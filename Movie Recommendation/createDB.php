<?php 
 $con=mysqli_connect("localhost","root","");
 if(!$con)
 {
 die("connect failed:".mysqli_connect_error());
  }
$sql="CREATE DATABASE MOVIES";
if(mysqli_query($con,$sql))
{
	echo "database created successfully";
}
 else
 {
echo "404 error creating database".mysqli_error($con); 
 }
 mysqli_close($con);
  ?>