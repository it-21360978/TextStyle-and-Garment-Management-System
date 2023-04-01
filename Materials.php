<!DOCTYPE html>
<html>
    <head>
        <title> Vivacious Designs And Textile </title>
        <link rel = "icon" type="image/jpg" href="images/comp_logo.jpg">
        <link rel = "stylesheet" type = "text/css" href = "css/header.css">
        <link rel = "stylesheet" type = "text/css" href = "css/Materials.css">
        <link rel = "stylesheet" type = "text/css" href = "css/Slideshow.css">
        
    </head>
    <body  style = "margin: 0px; font-size: 1vw;">
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
                     navbar.classList.add("sticky")
                }
                else
                {
                    
                    navbar.classList.remove("sticky");
                }
            }
        </script>
        
        <div class = "content">
            <h3 id = "heading_pt_1">Material</h3>
            <h3 id = "heading_pt_2">Selection</h3>
            <h3 id = "heading_pt_3">For</h3>
            <h3 id = "heading_pt_4">20</h3>
            <h3 id = "heading_pt_5">22</h3>
        </div>

        <div class = "background_img">

            <div class="background_slideshow">

                <div class="slides">
                    <img src="images/image_1.jpg" class = "slide_img">
                </div>

                <div class="slides">
                    <img src="images/image_3.jpg" class = "slide_img">
                </div>

                <div class="slides">
                    <img src="images/image_2.jpg" class = "slide_img">
                </div>
                
                <div class="slides">
                    <img src="images/image_4.jpg" class = "slide_img">
                </div>

            </div>

            <div class="img"></div> 
            <div class="img"></div> 
            <div class="img"></div>
            <div class="img"></div> 
            
            <div class = "horizontal_line"></div> 
        </div>

        <div class = "material_details">
            <div class = "material_1">
                <img src = "images/material_1.jpg" height = "40%" width = "80%" id = "material_1_img">
                <h2 id = "material_1_heading">CHIFFON</h2>
                <p id = para_1>Light weight and  resilient</p>
                <centre><div class = "button"><a href = "BuynowProductss.php?id=1" class = "Buy_Now">Buy Now</a></div></centre>
                <div class = "rating"><font class = "size">★★★★☆</font>
                <p class = "price_color">Rs.550.00</p>
                </div>

            </div>
            <div class = "material_2">
                <img src = "images/material_2.jpg" height = "40%" width = "80%" id = "material_2_img">
                <h2 id = "material_2_heading">COTTON</h2>
                <p id = para_1>Wild cotton imported from Egypt</p>
                <centre><div class = "button"><a href = "BuynowProductss.php?id=2" class = "Buy_Now">Buy Now</a></div></centre>
                <div class = "rating"><font class = "size">★★★☆☆</font>
                    <p class = "price_color">Rs.400.00</p>
                </div>
            </div>
            <div class = "material_3">
                <img src = "images/material_3.jpg" height = "40%" width = "80%" id = "material_3_img">
                <h2 id = "material_3_heading">SILK</h2>
                <p id = para_1>Shimmering and lustrous</p>
                <centre><div class = "button"><a href = "BuynowProductss.php?id=3" class = "Buy_Now">Buy Now</a></div></centre>
                <div class = "rating"><font class = "size">★★★★★</font>
                    <p class = "price_color">Rs.850.00</p>
                </div>
            </div>
            <div class = "material_4">
                <img src = "images/material_4.jpg" height = "40%" width = "80%" id = "material_4_img">
                <h2 id = "material_4_heading">DENIM</h2>
                <p id = para_1>Enriched with warp-faced twill weaving from France</p>
                <centre><div class = "button"><a href = "BuynowProductss.php?id=4" class = "Buy_Now">Buy Now</a></div></centre>
                <div class = "rating"><font class = "size">★★☆☆☆</font>
                    <p class = "price_color">Rs.600.00</p>
                </div>
            </div>
            <div class = "material_5">
                <img src = "images/material_5.jpg" height = "40%" width = "80%" id = "material_5_img">
                <h2 id = "material_5_heading">WOOL</h2>
                <p id = para_1>A protein to keep you warm</p>
                <centre><div class = "button"><a href = "BuynowProductss.php?id=5" class = "Buy_Now">Buy Now</a></div></centre>
                <div class = "rating"><font class = "size">★★★☆☆</font>
                    <p class = "price_color">Rs.1300.00</p>
                </div>
            </div>
            <div class = "material_6">
                <img src = "images/material_6.jpg" height = "40%" width = "80%" id = "material_6_img">
                <h2 id = "material_6_heading">SYNTHETIC</h2>
                <p id = para_1>Ease of maintainability</p>
                <centre><div class = "button"><a href = "BuynowProductss.php?id=6" class = "Buy_Now">Buy Now</a></div></centre>
                <div class = "rating"><font class = "size">★★★★☆</font>
                    <p class = "price_color">Rs.350.00</p>
                </div>
            </div>
        </div>

        <div id="footer" style="font-family: system-ui;">
            <ul class="footer-list" style="float:left">
                <li style="font-size: 20px;">
                    The Company
                </li>
                <li>
                    <a href="html/About Us.html" > About Us</a>
                </li>
                <li>
                    <a href="html/Contact Us.html">Contact Us</a>
                </li>
                <li>
                    <a href="html/Legal.html">Legal</a>
                </li>
                <li>
                    <a href="html/Privacy.html">Privacy and Cookies</a>
                </li>
            </ul>
            <ul class="footer-list" id="help" style="float: left;" >
                <li style="font-size: 20px;" >
                    Need Help ?
                </li>
                <li>
                    <a href="html/FAQ.html"> FAQ</a>
                </li>
                <li>
                    <a href="html/News.html">News</a>
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
    </body>
    <script type = "text/javascript" src = "js/Slideshow.js"></script>
</html>