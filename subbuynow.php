<?php
    require 'config.php';
    
        $Size = $_POST['size'];
        $Color = $_POST['colors'];
        $qty = $_POST['qnt'];

        $sql = "INSERT INTO cart(size,color,quantity) VALUES ('$Size','$Color','$qty')";
            if($con->query($sql)){

                header("Location: html/billing.php");
                echo '<script type="text/javascript">';
                echo ' alert("Successful")';  
                echo '</script>';
            }
            else
            {
                echo "Error : ".$con->error;
                echo '<script type="text/javascript">';
                echo ' alert("Error")';  
                echo '</script>';
            }
        $con->close();
    ?>