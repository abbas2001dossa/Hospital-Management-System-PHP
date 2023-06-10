<?php
    session_start();

    $_SESSION['userId']="";
    $_SESSION['name']="";
    session_destroy();
    header("Location: home.php");

?>