<!-- menyimpan info login register -->
<?php
    session_start();
    switch($POST_['action']){
        case "register":
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            header('Location: dashboard.php');
            break;
        case "login":
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];

            if($_POST['username'] != $username){
                $_SESSION['ERROR'] = "Incorrect Username";
                header('Location: login.php');
                exit();
            }else if($_POST['password'] != $password){
                $_SESSION['ERROR'] = "Incorrect Password";
                header('Location: login.php');
                exit();
            }else{
                header('Location: dashboard.php');
            }
    }
?>