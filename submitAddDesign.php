<?php
    require 'config.php';
    if(isset($_POST["btnSubmit"])){
        $dName = $_POST["desName"];
        $dType = $_POST["desType"];
        $dColor = $_POST["desColor"];
        $dPrice = $_POST["desPrice"];
        $dGender =  $_POST["gender"];
        $dComment = $_POST["desComment"];
        $dImag = $_POST["desImg"];

        $sql = "INSERT INTO add_design (name,Type,Color,req_Price,gender,Comment,dimage) values ('$dName','$dType','$dColor','$dPrice','$dGender','$dComment','$dImag')";

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
    $con->close();
?>