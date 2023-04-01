<?php 
session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) {

}
require '../config.php';

if(isset($_POST['btn']))
{
    $uphoto=$_POST['uphoto'];
    $Email=$_POST['Email'];
    $Contact_no=$_POST['Contact_no'];
    $user = $_SESSION['Username'];


    $sql = "UPDATE registered_customer SET uphoto='$uphoto' , Email='$Email',Contact_no='$Contact_no' WHERE Username='$user'";
   
    if($con->query($sql)){
            
        echo '<script type="text/javascript">';
        echo ' alert("Sucessfull")';  
        echo '</script>';
            
    }
    else{
        echo "Error : ".$con->error;
        echo '<script type="text/javascript">';
        echo ' alert("Error try again")';  
        echo '</script>';
    }
}
else{
    echo "Error : ".$con->error;
    echo '<script type="text/javascript">';
    echo ' alert("Error try again")';  
    echo '</script>';
}
$con->close();
?>