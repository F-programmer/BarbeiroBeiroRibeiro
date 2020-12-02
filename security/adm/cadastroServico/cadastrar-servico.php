<?php
require_once '../../utils/autoloader.php';
$state = true;
try {

	Header('Location: ./index.php?ser_cad=' . $state);
	if (isset($_POST['txtDescricaoServico'])) {
		$servico = new Servico($_POST['txtDescricaoServico']);
		$servico->cadastrar();
	}

} catch (Exception $e) {
	echo '<pre>';
	print_r($e);
	echo '</pre>';
	echo $e->getMessage();
	$state = false;
}
