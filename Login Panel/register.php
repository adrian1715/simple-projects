<?php

require_once 'config.php';

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = sha1(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

if ($username && $email && $password) {
    $sql = "SELECT * FROM usuarios WHERE username = :username OR email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    // $stmt->execute([
    //     ':username' => $username,
    //     ':email' => $email,
    //     ':password' => $password
    // ]);

    if ($stmt->rowCount() == 0) { // dados ainda não registrados
        $sql = "INSERT INTO usuarios VALUES (:username, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':username' => $username,
            ':email' => $email,
            ':senha' => $password
        ));

        session_start();
        // $_SESSION['alert'] = '<div style="color: green;">Registrado com sucesso!</div>';
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: logged-in.php");
    } else {
        header("Location: http://localhost/Login%20Panel/register.html");
    }
}
