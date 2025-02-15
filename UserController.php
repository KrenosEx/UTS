<?php
    $_POST = json_decode(file_get_contents("php://input"), true);
    session_start();
    switch($_POST['action']){
        case "register":
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode(["success" => true]);
            exit(0);
        case "login":
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];

            if($_POST['username'] !== $username){
                $_SESSION['ERROR'] = "Incorrect Username";
                http_response_code(401);
                header('Content-Type: application/json');
                echo json_encode(["success" => false]);
                exit(0);
            }else if($_POST['password'] !== $password){
                $_SESSION['ERROR'] = "Incorrect Password";
                http_response_code(401);
                header('Content-Type: application/json');
                exit();
            }else{
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode(["success" => true]);
                exit(0);
            }
            exit(0);
    }
?>