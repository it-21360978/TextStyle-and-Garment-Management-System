<?php 
    require 'config.php';

session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) 

    $sql = "SELECT Description FROM technical_issue";
    $result = mysqli_query($con, $sql);
    $res = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql2 = "SELECT Feedback FROM feedback";
    $result2 = mysqli_query($con, $sql2);
    $res2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Vivacious Designs And Textile </title>
        <link rel = "icon" type="image/jpg" href="images/comp_logo.jpg">
        <link rel = "stylesheet" type = "text/css" href = "css/header.css">
        <link rel = "stylesheet" type = "text/css" href = "css/Admin Page 2.css">
    </head>

    <body style = "margin: 0px">
        <center><a href="homepage.html"><img src="images/head_logo2.jpg" id="header"></a></center>
        <div class = "line">
        <a style="color:red; margin-right:0;" href="logout.php">Logout</a>
        </div>
        <div class = "content">
            <h2 class = "main_Heading">Admin Dashboard</h2>
            <div class = "technical_Issues">
                <h2 id = "heading_1">Technical Issues</h2>
                <div class = "row">
                    <br><br><br><br><br>
                    <?php foreach($res as $res){ ?>
                        <p class = "para"><br><?php echo implode("", $res)?></p>
                    <?php } ?>
                </div>
            </div>

            <div class = "feedbacks_Given">
                <h2 id = "heading_2">Feedbacks Given</h2>
                <div class = "row2">
                    <br><br><br><br><br>
                    <?php foreach($res2 as $res2){ ?>
                        <p class = "para2"><br><?php echo implode("", $res2)?></p>
                    <?php } ?>
                </div>
            </div>

            <div class = "rting">

                <h2 class = "rting_heading">Average Rating for <br> Quality of <br> Service </h2>
                <div class = "rting_content">
                    <?php require 'config.php';
                    
                        //php code to the addition of the ratings given
                        $sql1 = "SELECT sum(Rating_no) FROM rating";
                        $result1 = mysqli_query($con, $sql1);
                        $row = mysqli_fetch_array($result1);

                        //php code to get the total number of users who has given a rating
                        $sql2 = "SELECT user_no FROM rating";
                        $result2 = mysqli_query($con, $sql2);
                        $tot = mysqli_num_rows($result2);
                                
                        $average = $row[0] / $tot;//getting the average number of stars

                        echo "$average";
                        echo "<br>";
                        $whole = intval($average);//only getting the whole number due to difficulty in displaying a quarter or a half of a star

                            
                            for($i = 0; $i < $whole; $i++)
                            {
                                echo"★";
                            }

                            if($i < 5)
                            {
                                $x = $i - $whole;
                                while($x < (5-$whole))
                                {
                                    echo "☆";
                                    $x++;                                
                                }

                                $i = 5;
                            }
                        
                    ?>
                </div>
            </div>

            
        </div>
        
    </body>

    <?php
        $con->close();
    ?>

</html>