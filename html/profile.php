<?php 
    require '../config.php';

session_start();

if (isset($_SESSION['Password']) && isset($_SESSION['Username'])) 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Your profile</title>
    <link rel = "icon" type="image/jpg" href="../images/comp_logo.jpg">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body >
    <center><a href="../homepage.php"><img src="../images/head_logo2.jpg" id="header"></a></center>
    <div id="nav">
        <ul class="nav">
            <a href="../homepage.php">Home</a>
                <a href="../Design.php">Products</a>
                <a href="../Materials.php">Materials</a>
                <a href="job.html">Careers</a>
                <a href="AddDesign.html">Add Design</a>
                <a href="News.html">News</a>
                <a href="Contact Us.html">Contact Us</a>
            
        </ul>
    </div>
    
<div class="profile_page">
    <div class="container">
        <img src="../images/profile.png">
        <form action="profil1.php" method="post">
            <div class="inputBox">
                <?php
                    if(isset($_SESSION['Username']))
                    {
                        echo"<h4 style='text-align:center; font-size:30px;'>".$_SESSION['Username']."</h4>";
                        //unset($_SESSION['status']);
                    }

                ?>

                <label for="uphoto">Upload a photo:</label>
                <input type="file"   name="uphoto" required>
            </div>
            <div class="inputBox">
                <label for="Email">Email:</label>
                <input type="email" name="Email" required>
            </div>
            <br/>
            <div class="inputBox">
                <label for="Contact_no">Contact Number:</label>
                <input type="text" name="Contact_no" required><br><br>
            </div>
   
                <input type = "submit" value="Update Profile" name = "btn" id="btn" >
                

            
        </form>

    </div>
    </div>
    <div id="footer" style="font-family: system-ui;">
        <ul class="footer-list" style="float:left">
            <li style="font-size: 20px;">
                The Company
            </li>
            <li>
                <a href="About Us.html" > About Us</a>
            </li>
            <li>
                <a href="Contact Us.html">Contact Us</a>
            </li>
            <li>
                <a href="Legal.html">Legal</a>
            </li>
            <li>
                <a href="Privacy.html">Privacy and Cookies</a>
            </li>
        </ul>
        <ul class="footer-list" id="help" style="float: left;" >
            <li style="font-size: 20px;" >
                Need Help ?
            </li>
            <li>
                <a href="FAQ.html"> FAQ</a>
            </li>
            <li>
                <a href="News.html">News</a>
            </li>
            <li>
                <a href="profile.php">Profile</a>
            </li>
        </ul>
        <ul class="footer-list" id="" style="float:left;">
        <li style="font-size: 20px;">
            Branches
        </li>
        <li>
              <a href="https://goo.gl/maps/r2CcUiyGTNyMXmQZ6" target="_blank">New York</a> 
        </li>
        <li>
                <a href="https://goo.gl/maps/CjJc3i758Z2n1q5n8" target="_blank">London</a>
        </li>
        <li>
                <a href="https://goo.gl/maps/bBfAJDcQCc1JR26Y7" target="_blank">Melbourn</a>
        </li>
        <li>
                <a href="https://goo.gl/maps/DqiXAtwWkLjj1G6U8" target="_blank">Tokyo</a>
        </li>
        </ul>
        <br><br><br><br><br><br>
        <ul class="social">
            <li class="social">
                 <a href="https://www.facebook.com/Vivacious-Designs-And-Textile-100517169330619" id="link" target="_blank"> <img src="../images/fb_icon.png" class="fb" >     Facebook   </a> 
            </li>
            <li class="social">
                 <a href="https://www.instagram.com/vivaciousdesignsandtextile/" id="link1" onMouseOver="this.style.color='#C13584'" onmouseout="this.style.color='#FFFFFF'" target="_blank"><img src="../images/ig_Logo.png" class="ig" >      Instagram </a> 
            </li>
            <li class="social"> 
                 <a href="https://linkedin.com/in/vivacious-designs-744853239/" id="link2" onMouseOver="this.style.color='#0072b1'" onmouseout="this.style.color='#FFFFFF'" target="_blank"><img src="../images/in_logo.png" class="in" >   Linkedin     </a> 
            </li>
            <li class="social"> 
                <a href="https://twitter.com/VivaciousDesig" id="link3" onMouseOver="this.style.color='#00acee'" onmouseout="this.style.color='#FFFFFF'" target="_blank"><img src="../images/twitter.png" class="twitter" >    Twitter  </a>
            </li>
            <li style="text-align: center;"><br><br>
                <p id="copyright" >© 2022 Vivacious Designs And Textile - All rights reserved</p>
            </li>
        </ul>
    </div>









    
</body>
</html>