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
  <title>Register</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Register</h1>
  <div class="container">
    <form action="controller/register.php" method="POST">
      <input type="text" placeholder="Username" name="username" required />
      <br /><br />
      <input type="email" placeholder="E-mail" name="email" required />
      <br /><br />
      <input type="password" placeholder="Password" name="password" required />
      <br /><br />
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      }
      ?>
      <br />
      <a href="index.php" style="margin-right: 5px">Back to Login</a>
      <button type="submit">Create account</button>
    </form>
  </div>
</body>

</html>