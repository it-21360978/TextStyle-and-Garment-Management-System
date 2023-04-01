<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','vd&t');

// get the post records
$fName = $_POST['fname'];
$lName = $_POST['lname'];
$e_mail = $_POST['Email'];
$adress = $_POST['addres'];
$birth = $_POST['birthday'];
$phone = $_POST['phone'];
$profes = $_POST['profession'];
$user = $_POST['user'];
$pass = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `registered_customer` (`F_name`, `S_name`, `Email`, `Address`, `DOB`, `Contact_no`, `Title`,`Username`, `cpassword`) VALUES ('$fName','$lName','$e_mail','$adress','$birth ','$phone','$profes','$user','$pass')";

// insert in database 


if($con->query($sql))
{
	echo "Registered Successfully";
	header("Location: homepage.php");
}
else
{
	echo '<script type="text/javascript">';
	echo ' alert("Error")'; 
	echo '</script>';
	header("Location: html/signup.html"); 
}
$con->close();
?>