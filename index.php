<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/bootstrap.php';

if (!empty($_POST)) {
    $users = json_decode(file_get_contents(__DIR__ .'/data/user.json'), 1);
    foreach ($users as $user) {
        if ($user['user'] === $_POST['user'] &&
        $user['password'] === md5($_POST['password'])) {
            $_SESSION['login'] = 1;
            $_SESSION['role'] = $user['role'];
            header('Location: ./list.php');
            die();
        }
    }
    if (!isset($_SESSION['login']) || (isset($_SESSION['login']) && $_SESSION['login'] !== 1)) {
        failureMessage('Login Failed');
    }
}

if (isset($_GET['logout'])) {   
}

require __DIR__ . '/header.php';

setBody();
setHeader();
echo '<style> ' . file_get_contents(__DIR__ . '/css/main.css') . '</style>';
echo '<div class="main">';
echo '<div class="container login-container">';
echo '<form action="?" method="post">';
echo '<span>User Name: </span><input class="login-input" type="text" name="user"><br>';
echo '<span>User Password: </span><input class="login-input" type="password" name="password"><br>';
echo '<button type="submit">Login</button>';
echo '</form>';
echo '</div></div>';

setFooter();
