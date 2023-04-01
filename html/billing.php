<!DOCTYPE html>
<html>
<head>
   
    <title>Billing Details</title>
    <link rel="stylesheet" type="text/css" href="../css/billing.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>
    <center><a href="../homepage.php"><img src="../images/head_logo2.jpg" id="header"></a></center>
    <div id="nav">
    <a href="../homepage.php">Home</a>
            <a href="../Design.php">Products</a>
            <a href="../Materials.php">Materials</a>
            <a href="job.html">Careers</a>
            <a href="AddDesign.html">Add Design</a>
            <a href="News.html">News</a>
            <a href="Contact Us.html">Contact Us</a>
    </div>
    <img src="../images/background .jpg" width="100%">
    <div class="container32">
        <h2><b><center>Payment Details</h2></b></center><br><br>
        <img src = "../images/Visa.png " id="visa">
        <img src = "../images/Paypal.png" id="paypal">
        <img src = "../images/Master.png" id="master">
        <img src = "../images/American.png" id="american">

    <form action = "../billing.php" method = "post">
            
            <label for="Card_holder_name"><b>Card holder name:</b></label>
            <input type="text" name="Card_holder_name" placeholder="Card number" required>
            <label for="Card_name"><b>Card name:</b></label>
            <input type="text" name="Card_name" placeholder="Card name" required>
            <label for="Card_No"><b>Card number:</b></label>
            <input type="text" name="Card_No" placeholder="91xx-xx-xxx-xx" required>
            <br><br>
            <div id="zip">
                <label for="Exp_year"><b>
                    Year:</b>
                    <select id="Exp_yea" name="Exp_year">
                        <option>Select</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                    
                <label for="Exp_month"><b>
                    Month:</b>
                    <select id="Exp_month" name="Exp_month">
                    <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March<">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </label>
                <label for="CVV"><b>
                    CVV:</b>
                    <input  type="text" value="" id="zip1" name="CVV" placeholder="CVV" required>
                </label>
                        <div>
                        <div class="container12">
                        <h2><b><center>Billing Details</h2></b></center>
                    <form><b>
                    <label for="First_name"><b>First Name:</b></label>
                    <input type="text" name="First_name" placeholder="First name" required>
                    <label for="Last_name"><b>Last Name:</b></label>
                    <input type="text" name="Last_name" placeholder="Last name" required>
                    <label for="Email"><b>Email:</b></label>
                    <input type="text" name="Email" placeholder="user@gmail.com" required>
                    <label for="Shipping_address"><b>Adress:</b></label>
                    <input type="text" name="Shipping_address" placeholder="Province/District/City" required>
                    <label for="P_num"><b>Phone Number:</b></label>
                    <input type="text" name="P_num" placeholder="07x-xxx-xxxx" required>
                    <div id="zip">
                <label for="Province"><b>
                    Province:</b>
                    <select id="Province" name="Province">
                        <option value="Western">Western</option>
                        <option value="Southern">Southern</option>
                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                        <option value="Uva">Uva</option>
                        <option value="Central">Central</option>
                        <option value="North Westen">North Westen</option>
                        <option value="North Central">North Central</option>
                        <option value="North Central">North Central</option>
                        <option value="Northern">Northern</option>
                        <option value="Eastern<">Eastern</option>
                    </select>
                <label for="District"><b>
                    District:</b>
                    <select id="District" name="District">
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Rathnapura">Rathnapura</option>
                        <option value="Baddulla">Baddulla</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Hambantota">Hambantota</option>
                    </select>
                </label>
                <label for="Zip_Code"><br><br>
                    Zip code:
                        <input  type="text" name="Zip_Code"value="" id="zip1" placeholder="zipcode" >
                </label>
                <div class="container15">
                    <button type="submit" class="btn" name="btn" onclick="openpopup()">Pay</button>
                    <div class="popup" id="popup">
                        <img src="../images/correct.png">
                        <h2>Thank You!</h2>
                        <p>Your Pament Sucessfully</p>
                        <button type="button" onclick="closepopup()"><a href="billing.php">ok</button></a>
                    </div>
                </div>
            </div>
            </div>
            </div>
    
</header>


<script>
    let popup= document.getElementById("popup");
function  openpopup(){
    popup.classList.add("open-popup");
}
function  closepopup(){
    popup.classList.remove("open-popup");
}
</script>
</body>
</html>