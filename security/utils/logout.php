<?php
    session_start();
    unset($_SESSION['login-session']);
    unset($_SESSION['pass-session']);
    session_destroy();
    header("Location: ../../index.php");
?>