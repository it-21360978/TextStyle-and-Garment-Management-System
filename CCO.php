<?php

    require 'config.php' ;

    session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) 
    $sql = "SELECT Feedback FROM feedback";
    $result = mysqli_query($con, $sql);
    $res = mysqli_fetch_all($result, MYSQLI_ASSOC);




    $con->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CCO Dashboarde</title>
        <link rel="icon" type="image/jpg" href="images/comp_logo.jpg">
        <link rel="stylesheet" href="css/CCO.css">
    </head>
    <body>
        <div class="Ccolog">
        <center><img src="images/head_logo2.jpg" id="header"></a></center>
        <div>
        <a style="color:red; margin-right:0;" href="logout.php">Logout</a>
        </div>
        <div class="feedback">
            <h1>Customer feedbacks</h1>
                <div class="feed">
                <p class = "para">
                    <?php foreach($res as $res){ ?>
                        <?php echo implode("", $res)?>
                        <br>
                        <br>
                    <?php } ?>
                    </p>


                </div>
        </div>
        <div class="faq">
            <h1>Add FAQ</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="ques">
                    <label for="que"><h2>Question</h2></label>
                    <textarea cols="80" rows="5" name = "qus" placeholder="Add question here..">
                    </textarea>
                </div>
                <br><br>
                <div class="answr">
                    <label><h2>Answer</h2></label>
                    <textarea cols="80" rows="5" name="anse" placeholder="Add answer here..">
                    </textarea>
                    <br>
                    <br>
                    <input type="submit" value="Add" name="btnsubmit">
                </div>
            </form>
        </div>     
        <?php
            require 'config.php';
                if(isset($_POST["btnsubmit"])){

                    $Q = $_POST['qus'];
                    $A = $_POST['anse'];
            
                    $sql2 = "INSERT INTO faq(ques,ans) VALUES ('$Q','$A')";
                    if($con->query($sql2)){
                        echo '<script type="text/javascript">';
                        echo ' alert("Successful")';  
                        echo '</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript">';
                        echo ' alert("Error")';  
                        echo '</script>';
                    }
                }
                $con->close(); 
        ?>        

    </body>
</html>