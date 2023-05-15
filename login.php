<?php

require_once 'config.php';

session_start();

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = sha1(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

echo $username,  $password;

if ($username && $password) {
    $query = "SELECT * FROM usuarios WHERE username = :username AND senha = :password";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() != 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: logged-in.php");
        echo "LOGGED IN!";
    } else {
        $_SESSION['message'] = "<div style='color: red'>Bad credentials!</div>";
        header("Location: http://localhost/Login%20Panel/");
    }
}
