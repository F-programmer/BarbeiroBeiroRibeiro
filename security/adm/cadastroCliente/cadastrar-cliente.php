<?php

require_once '../../utils/autoloader.php';
try {
	Header('Location:./index.php?cli_cad=true');
	$cliente = new Cliente(
		$_POST['txtNomeCliente'],
		$_POST['txtCpfCliente'],
		$_POST['txtEmailCliente'],
		$_POST['txtFoneCliente']
	);

	$cliente->cadastrar($cliente);
	
} catch (Exception $e) {
	echo '<pre>';
	print_r($e);
	echo '</pre>';
	echo $e->getMessage();
	
}