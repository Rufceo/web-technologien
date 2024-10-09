<?php
session_start();
$admin_username = 'admin';
$admin_password = '12345';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: upload.php');
        exit;
    } else {
        echo '<p>Falscher Benutzername oder Passwort. Bitte versuchen Sie es erneut.</p>';
    }
}
?>

