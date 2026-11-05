<?php
session_start();

if (!isset($_SESSION['user']) || !is_string($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$username = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
$pageTitle = 'Welcome';
include 'header.inc';
?>
    <h1>Welcome, <?= $username ?>!</h1>
<?php include 'footer.inc'; ?>
