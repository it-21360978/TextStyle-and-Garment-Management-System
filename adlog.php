<?php 
session_start();

include "config.php"; 

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
        $data = stripslashes($data);
       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        
        header("Location: adminlogin.php?error=User Name is required");
        exit();

    }else if(empty($pass)){

        header("Location: adminlogin.php?error=Password is required");
        exit();

    }else{

        $sql = "SELECT * FROM staff_account WHERE Username='$uname' AND Password='$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $uname && $row['Password'] === $pass) {

                echo "Logged in!";
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Password'] = $row['Password'];
                header("Location: Admin Page 1.php");
                exit();
            }else{
                header("Location: adminlogin.php?error=Incorect User name or password");
                exit();
            }
        }else{

            header("Location: adminlogin.php?error=Incorect User name or password");
            exit();

        }
     }
}else{

    header("Location: adminlogin.php");
    exit();
}