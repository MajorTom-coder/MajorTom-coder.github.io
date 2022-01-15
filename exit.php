<?php
    setcookie('user', $user_name['login'], time() - 3600, "/");
    header('Location: /');
?>