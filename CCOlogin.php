<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CCO Login</title>
    <link rel="stylesheet" href="css/CCOlogin.css">
  </head>
  <body>
    <div class="logoo">
      <center><a href="homepage.html"><img src="images/head_logo2.jpg" id="header"></a></center>
      </div>
      <div class="center">
      <h1>Customer Officer Login</h1>
      <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <form method="post" action="elogin.php">
        <div class="txt_field">
          <label for="uname">CCO Username</label>
          <input type="text" name="uname" name="username" placeholder="ex: jone doe">
        </div>
        <div class="txt_field">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="ex: jonedow123">
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
