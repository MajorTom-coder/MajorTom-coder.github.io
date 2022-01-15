<?php
    $user_name = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."i2fyoul5o5oki2nto15");


    $mysql =  new mysqli('localhost', 'root', '', 'register-bd'); # создание бд
    $result = $mysql->query("SELECT * FROM 'users' WHERE 'login' = '$user_name' AND 'password' = '$password' ")

    $user = $result->fetch_assoc();
    if(count($user_name) == 0) {
        echo "User is not defind";
        exit();
    }

    
    setcookie('user', $user_name['login'], time() + 3600);
        
        
        
    $mysql->close(); #закрытие бд

    header('Location: /'); #переадресация
?>