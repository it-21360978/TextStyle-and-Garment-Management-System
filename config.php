<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vd&t";

    //create connection object
    $con = new mysqli($servername,$username,$password,$dbname);
    //new mysqli("localhost","root","","cart");

    //Check connection
    if($con-> connect_error){
        die("Connection Failed: ".$con->connect_error);
    }

    //echo "<srcipt> alert('Connected Succesfully')";
?>