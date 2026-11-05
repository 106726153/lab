<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($username === 'admin' && $password === '123456') {
        session_regenerate_id(true);
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit;
    }
}

header('Location: login.php?error=1');
exit;
