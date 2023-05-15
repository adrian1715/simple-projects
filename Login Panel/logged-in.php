<?php

session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

    <style>
      body {
        margin: 0;
      }

      nav {
        display: flex;
        background: rgb(238, 235, 235);
        text-align: center;
        padding: 15px 50px;
      }

      nav ul {
        display: flex;
        margin: 0px;
        width: 15%;
        list-style: none;
        justify-content: space-between;
      }

      nav a {
        text-decoration: none;
        color: black;
      }

      nav a:hover {
        text-decoration: underline;
      }

      #logout-btn {
        display: flex;
        align-items: center;
        margin-left: auto;
        margin-right: 40px;
        justify-content: flex-end;
      }

      #logout-btn:hover {
        text-decoration: none !important;
      }

      nav button:hover {
        cursor: pointer;
      }

      section {
        max-width: 75%;
        margin: auto;
      }

      h1 {
        font-size: 40px;
      }
    </style>
  </head>

  <body>
    <nav>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Link</a></li>
      </ul>
      <a href="controller/logout.php" id="logout-btn"><button>Logout</button></a>
    </nav>

    <section>
      <h1>Welcome, <?php echo $_SESSION['username'] ?>!</h1>
    </section>
  </body>
<?php } else {
  header("Location: index.php");
}
?>

  </html>