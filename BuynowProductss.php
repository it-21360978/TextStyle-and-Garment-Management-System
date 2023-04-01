<?php
    require 'config.php';

    $ID = $_GET['id'];

    $sql = "SELECT * FROM product WHERE Product_id = $ID";
        if($result=$con->query($sql)){
            while($row=$result->fetch_assoc()){
                $name = $row['Name'];
                $discripton = $row['Description'];
                $price = $row['Price'];
                $photo = $row['pic'];
                $cat = $row['Category'];
                $photo2 = $row['2_pic'];
            }
        }
        else{
            echo "Error ".$con->error;
        }
   
?>
<!DOCTYPE html>
<html>
<head>
    <title> Vivacious Designs And Textile </title>
    <link rel="icon" type="image/jpg" href="images/comp_logo.jpg">
    <link rel ="stylesheet" type="text/css" href = "css/header.css">
    <link rel = "stylesheet" type="text/css" href="css/buynow.css">
</head>
<body style="margin: 0px;">
    <center><a href="homepage.php"><img src="images/head_logo2.jpg" id="header"></a></center>
    
    <div id="nav">
            <a href="homepage.php">Home</a>
            <a href="Design.php">Products</a>
            <a href="Materials.php">Materials</a>
            <a href="html/job.html">Careers</a>
            <a href="html/AddDesign.html">Add Design</a>
            <a href="html/News.html">News</a>
            <a href="html/Contact Us.html">Contact Us</a>
        </div>
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("nav");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                 navbar.classList.add("sticky");
            }
            else
            {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <div class="bigbox">
    
             <div class="imgbox">
                <img src= "<?php echo $photo ?>" class="img1">
                <br/><br>
                <img src="<?php echo $photo2 ?>" class="img2">
                <img src="<?php echo $photo2 ?>" class="img2">
                <img src="<?php echo $photo2 ?>" class="img2">
                <img src="<?php echo $photo2 ?>" class="img2">
            </div>
            <div class="des">
                <center> <?php echo '<h3 style="font-size: 35px; font-family: Century Gothic; color:#143d59">'. $name .'</h3>'?></center>
                <h3 style="font-size: 18px;font-family: Century Gothic; color:#143d59">Price : RS <?php  echo '<font style="font-size: 18px;font-family: Century Gothic; color:#FF7D00">' .$price. '</font>'?> </h3>
                <h4 style="font-size: 18px;font-family: Century Gothic; color:#143d59">Category : <?php echo '<font style="font-size: 18px;font-family: Century Gothic; color:#143d59">' .$cat. '</font>' ?></h4>
                <h3 style="font-size: 24px;font-family: Verdana; color:#143d59"> Descripton</h3>
                <p><?php echo '<font style="font-size: 14px;font-family: Verdana; color:#143d59">'.$discripton.'</font>' ?></p>
            </div>
            <div class="info">
                <form method="post" action="subbuynow.php" name="buynow" class="formm">
                 Size 
                <input type="radio" name="size" value="S"> S
                <input type="radio" name="size" value="M"> M
                <input type="radio" name="size" value="L"> L
                <input type="radio" name="size" value="XL"> XL<br><br><br><br>
                <label for="colors">Choose a Color</label>
                <select id="colors" name="colors">
                    <option value="Blue">Blue</option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                </select>
                <br><br></br><br>
                Quantity <input type="number" name="qnt" placeholder=" Quantity" class="box1">
                <br><br><br><br>   
            </div>
            </div>
            <input type="submit" value="Buy Now" id="buynowbtn" class="btn">
            </form>
            <br>
            <img src="images/visa.png" style="width: 50px; height: 25px;">
            <img src="images/Master.png" class="img3">
            <img src="images/AE.png" class="img3">
            <img src="images/paypal.png" class="img3">
    
    <?php
        $con->close();
    ?>
</body>
    <footer>
    <div id="footer" style="font-family: system-ui;" >
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
                <a href="html/profile.php">Profile</a>
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
                 <a href="https://www.facebook.com/Vivacious-Designs-And-Textile-100517169330619" id="link" target="_blank"> <img src="images/fb_icon.png" class="fb" >     Facebook   </a> 
            </li>
            <li class="social">
                 <a href="https://www.instagram.com/vivaciousdesignsandtextile/" id="link1" onMouseOver="this.style.color='#C13584'" onmouseout="this.style.color='#FFFFFF'" target="_blank"><img src="images/ig_Logo.png" class="ig" >      Instagram </a> 
            </li>
            <li class="social"> 
                 <a href="https://linkedin.com/in/vivacious-designs-744853239/" id="link2" onMouseOver="this.style.color='#0072b1'" onmouseout="this.style.color='#FFFFFF'" target="_blank"><img src="images/in_logo.png" class="in" >   Linkedin     </a> 
            </li>
            <li class="social"> 
                <a href="https://twitter.com/VivaciousDesig" id="link3" onMouseOver="this.style.color='#00acee'" onmouseout="this.style.color='#FFFFFF'" target="_blank"><img src="images/twitter.png" class="twitter" >    Twitter  </a>
            </li>
            <li style="text-align: center;">
                <p id="copyright" >© 2022 Vivacious Designs And Textile - All rights reserved</p>
            </li>
        </ul>
    </div>
    </footer>
    
</html>
