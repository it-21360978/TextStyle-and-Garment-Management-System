<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/Clogin.css">
    
  </head>
  <body>
    <div class="logoo">
      <center><img src="images/head_logo2.jpg"  id="header"></a></center>
      </div>
    <div class="center">
      <h1>Login</h1>
      <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <form method="post" action="clogin.php">
        <div class="txt_field">
          <label for="uname">Username</label>
          <input type="text" name="uname" placeholder="ex: jone doe">
        </div>
        <div class="txt_field">
          <label for="password">Password</label>
          <input type="password" name="password"  name="password" placeholder="ex: jonedow123">
        </div>
        
        <input type="submit" value="Login">
        
      </form>
      <div>
      <button style="width: 320px; margin-left:10%; left:20%; height: 50px; border: 1px solid; background: #496ee6; border-radius: 10px; font-size: 18px; color: #ffffff; font-weight: 700; cursor: pointer; outline: none;" onclick="window.location.href = 'html/stafflogin.html'">Employee Login</button>
        <div class="signup_link">
          Not a member? <a href="html/signup.html">Signup</a>
      </div>
      
          </div>
    </div>

  </body>
</html>

