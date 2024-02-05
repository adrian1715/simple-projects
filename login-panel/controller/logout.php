<?php

session_start();
session_destroy();
session_start();
$_SESSION['message'] = "<div style='color: #DAA520'>Logged out!</div>";
header("Location: ../index.php");
