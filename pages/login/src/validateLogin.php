<?php

$nome = $_POST['txtNome'];

$pass = $_POST['txtPass'];

if ($nome == 'adm' && $pass == "1234") {

	session_start();
	$_SESSION['login-session'] = $nome;
	$_SESSION['pass-session'] = $pass;
	header('Location: ../../../security/adm/home/index.php');
}

else header('Location: ../login.php');

?>
