<?php

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  header("Location: logged-in.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Login</h1>
  <div class="container">
    <form action="login.php" method="POST">
      <label for="username">Username</label>
      <input type="text" name="username" />
      <br /><br />
      <label for="password">Password</label>
      <input type="password" name="password" />
      <br /><br />
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'] . "<br>";
        unset($_SESSION['message']);
      }
      ?>
      <a href="register.html" style="margin-right: 5px">Register a new account</a>
      <button type="submit">Log In</button>
    </form>
  </div>
</body>

</html>