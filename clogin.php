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
        
        header("Location: index.php?error=User Name is required");
        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");
        exit();

    }else{

        $sql = "SELECT * FROM registered_customer WHERE Username='$uname' AND cpassword='$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $uname && $row['cpassword'] === $pass) {

                echo "Logged in!";
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['password'] = $row['password'];
                header("Location: homepage.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect Userdasda name or password");
                exit();
            }
        }else{

            header("Location: index.php?error=Incorect Userss name or password");
            exit();

        }
     }
}else{

    header("Location: index.php");
    exit();
}