<?php

require_once '../../utils/autoloader.php';
try {

	$cliente = new Cliente(
		$_POST['txtNomeCliente'],
		$_POST['txtCpfCliente'],
		$_POST['txtEmailCliente'],
		$_POST['txtFoneCliente']
	);

	$state = $cliente->cadastrar($cliente);
	if ($state == true) Header('Location: ./index.php?cli_cad=false');
	else  Header('Location: ./index.php?cli_cad=true');
} catch (Exception $e) {
	echo '<pre>';
	print_r($e);
	echo '</pre>';
	echo $e->getMessage();
	Header('Location: ./index.php?cli_cad=false');
}