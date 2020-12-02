<?php
session_start();
if (
  ($_SESSION['login-session'] != 'adm') || 
  ($_SESSION['pass-session'] != '1234')
) header('Location: ../../../index.php');
?>