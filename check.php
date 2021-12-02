<?php
    $user_name = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $inst_name = filter_var(trim($_POST['inst_name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);



    $mysql =  new mysqli('localhost', 'root', '', 'register-bd'); # создание бд
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$user_name','$inst_name','$password')"); #отправка данных в бд
    $mysql->close(); #закрытие бд

    header('Location: https://vk.com/im'); #переадресация
?>