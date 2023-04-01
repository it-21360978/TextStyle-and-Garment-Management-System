<?php 
    require 'config.php';

session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) 

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Vivacious Designs And Textile </title>
        <link rel = "icon" type="image/jpg" href="images/comp_logo.jpg">
        <link rel = "stylesheet" type = "text/css" href = "css/header.css">
        <link rel = "stylesheet" type = "text/css" href = "css/Admin Page 1.css">
    </head>
    <body style = "margin: 0px">
        <center><a href="homepage.html"><img src="images/head_logo2.jpg" id="header"></a></center>
        <div id = "nav">
        <ul class="nav">
            <a style="color:red; margin-right:0;" href="logout.php">Logout</a>
            </ul>
        </div>

        <!--Content begins-->

        <div class = "content">
            <h3 id = "main_heading">Admin Dashboard</h3>
            <div class = "careers">
                <img id = "career_img" src = "images/career.png">
                <h3 class = "career_heading">Jobs Posted</h3>
                <div class = "career_no">

                    <!--php code to get the total number of jobs posted on the website-->
                    <?php require 'config.php';
                        $sql = "SELECT Career_ID FROM career";
                        $result = mysqli_query($con, $sql);

                        if($tot = mysqli_num_rows($result))
                        {
                            echo "$tot";
                        }

                        else
                        {
                            echo "No Data";
                        }

                            $myfile = fopen("Report.txt", "w") or die("Unable to open file!");
                            $txt = "Total number of jobs offered: ";
                            fwrite($myfile, $txt);
                            fwrite($myfile, $tot);
                    ?>
                </div>    
            </div>
            
            <div class = "users">
                <img id = "user_img" src = "images/users_img.jpg">
                    <h3 class = "user_heading">Total Users</h3>
                    <div class = "user_no">

                        <!--php code to get the total number of users registered on the website-->
                        <?php require 'config.php';
                            $sql = "SELECT C_ID FROM registered_customer";
                            $result = mysqli_query($con, $sql);

                            if($tot = mysqli_num_rows($result))
                            {
                                echo "$tot";
                            }

                            else
                            {
                                echo "No Data";
                            }

                            $txt = "\n\nTotal number of registered customers: ";
                            fwrite($myfile, $txt);
                            fwrite($myfile, $tot);
                        ?>
                    </div>
            </div>

            <div class = "designs">
                <img id = "designs_img" src = "images/designs_img.jpg">
                    <h3 class = "designs_heading">Designs</h3>
                    <div class = "designs_no">

                        <!--php code to get the total number of designs submitted to the website-->
                        <?php require 'config.php';
                            $sql = "SELECT Design_no FROM add_design";
                            $result = mysqli_query($con, $sql);

                              if($tot = mysqli_num_rows($result))
                                {
                                   echo "$tot";
                                }

                                else
                                {
                                    echo "No Data";
                                }

                                $txt = "\n\nTotal number of designs submitted: ";
                                fwrite($myfile, $txt);
                                fwrite($myfile, $tot);
                        ?>
                    </div>
            </div>

            <div class = "products">
                <img id = "products_img" src = "images/products_img.jpg">
                    <h3 class = "products_heading">Products</h3>
                    <div class = "products_no">

                        <!--php code to get the total number of products and materials posted on the website-->
                        <?php require 'config.php';
                            $sql = "SELECT Product_ID FROM product";
                            $result = mysqli_query($con, $sql);

                              if($tot = mysqli_num_rows($result))
                                {
                                   echo "$tot";
                                }

                                else
                                {
                                    echo "No Data";
                                }

                                $txt = "\n\nTotal number of products on the website: ";
                                fwrite($myfile, $txt);
                                fwrite($myfile, $tot);    
                        ?>
                    </div>
            </div>

            <div class = "payment">   
                <img id = "payment_img" src = "images/payment.png">
                <h3 class = "payment_heading">Income</h3>
                <h3 id = "price">Rs.</h3>
                <div class = "pymtTot_no">
                        
                        <!--php code to get the total income of the website-->
                        <?php require 'config.php';
                            $sql = "SELECT sum(Tot) FROM payment";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            echo "<b>$row[0].00";

                            $txt = "\n\nTotal income: ";
                            fwrite($myfile, $txt);
                            fwrite($myfile, $row[0]);
                            fclose($myfile);
                        ?>
                </div>
                
            </div>    
            <button id = "adminpg_2" onclick = "window.location.href = 'Admin Page 2.php'">Next Page</button> <!--To go to admin dashboard 2-->

            <p id = "note">*Admin report will be generated automatically for ease of use</p>
        </div>
        <!--Content ends-->
    </body>

</html>