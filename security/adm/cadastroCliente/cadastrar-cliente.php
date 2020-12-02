<?php

require_once '../../utils/autoloader.php';
$state = true;
try {

	$cliente = new Cliente();
	$cliente->setNomeCliente($_POST['txtNomeCliente']);
	$cliente->setCpfCliente($_POST['txtCpfCliente']);
	$cliente->setEmailCliente($_POST['txtEmailCliente']);
	$cliente->setFoneCliente($_POST['txtFoneCliente']);

	echo $cliente->cadastrar($cliente);

	Header('Location: ./index.php?cli_cad=' . $state);
} catch (Exception $e) {
	echo '<pre>';
	print_r($e);
	echo '</pre>';
	echo $e->getMessage();
	$state = false;
}
