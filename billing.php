<?php

	require 'config.php';
// get the post records
if(isset($_POST['btn']))
{
	$Card_holder_name = $_POST['Card_holder_name'];
	$Card_name = $_POST['Card_name'];
	$Card_no = $_POST['Card_No'];
	$Exp_month = $_POST['Exp_month'];
	$Exp_year = $_POST['Exp_year'];
	$CVV = $_POST['CVV'];


//for billing details
	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$Email = $_POST['Email'];
	$Shipping_address = $_POST['Shipping_address'];
	$P_num = $_POST['P_num'];
	$Province = $_POST['Province'];
	$District = $_POST['District'];
	$Zip_Code = $_POST['Zip_Code'];



// database insert SQL code
$sql = "INSERT INTO payment(First_name,Last_name,Email,Shipping_address,P_num,Province,District,Zip_Code,Card_holder_name,	Card_No,Card_name,Exp_month,Exp_year,CVV)
VALUES ('$First_name','$Last_name','$Email','$Shipping_address','$P_num','$Province','$District','$Zip_Code','$Card_holder_name','$Card_name','$Card_no','$Exp_month','$Exp_year','$CVV' )";

if($con->query($sql)){
	
	echo 'Successfull!!';
}
else{
	echo "Error : ".$con->error;
	echo '<script type="text/javascript">';
	echo ' alert("Error try again")';  
	echo '</script>';
}
}

?>