<?php

require_once '../../security/models/Conexao.php';
require_once '../../security/models/Agendamento.php';

if (
	isset($_POST['txtCpf']) &&
	isset($_POST['txtDate']) &&
	isset($_POST['txtTime']) &&
	isset($_POST['comboServico'])
) {

	$connection = Conexao::pegarConexao();

	$query = $connection->query("Select idCliente FROM tbCliente where cpfCliente like '" . $_POST['txtCpf'] . "'");

	$idCliente = $query->fetchAll()[0][0];

	$agendamento = new Agendamento(
		$idCliente,
		$_POST['txtDate'],
		$_POST['txtTime'],
		$_POST['comboServico']
	);

	echo $_POST['comboServico'];

	// $agendamento->cadastrar();
}