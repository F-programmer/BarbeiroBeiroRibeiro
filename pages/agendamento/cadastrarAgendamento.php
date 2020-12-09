<?php
require_once '../../security/utils/autoloaderGaleria.php';

if (
	isset($_POST['txtCpf']) &&
	isset($_POST['txtDate']) &&
	isset($_POST['txtTime']) &&
	isset($_POST['comboServico'])
) {

	try{
		$connection = Conexao::pegarConexao();

	$query = $connection->query("Select idCliente FROM tbcliente where cpfCliente like '" . $_POST['txtCpf'] . "'");
	

	$query = $query->fetchAll();
	$idCliente =(int) $query;

	$agendamento = new Agendamento(
		$idCliente,
		$_POST['txtDate'],
		$_POST['txtTime'],
		$_POST['comboServico']
	);

	echo $_POST['comboServico'];
	$agendamento->cadastrar();
	}catch(Exception $e){
		echo $e;
		echo $idCliente;
	}
	

	
}