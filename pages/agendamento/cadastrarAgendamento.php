<?php
require_once '../../security/utils/autoloaderGaleria.php';

if (
	isset($_POST['txtCpf']) &&
	isset($_POST['txtDate']) &&
	isset($_POST['txtTime']) &&
	isset($_POST['comboServico'])
) {

	try{
	Header('Location: ./index.php');
	$connection = Conexao::pegarConexao();

	$query = $connection->query("Select idCliente FROM tbcliente where cpfCliente like '" . $_POST['txtCpf'] . "'");
	

	$resultList = $query->fetchAll(); 
	$idCliente = null;
	
	foreach ( $resultList as &$item) {
			
		$idCliente = $item['idCliente'];
	}
	

	$agendamento = new Agendamento(
		$idCliente,
		$_POST['comboServico'],
		$_POST['txtDate'],
		$_POST['txtTime'],
	);

	
	$agendamento->cadastrar();

	}catch(Exception $e){
		echo $e;
	}
	

	
}