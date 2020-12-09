<?php
require_once '../../utils/autoloader.php';
$state = false;
Header('Location: ./index.php?img_cad=' . (boolval($state) ? 'true' : 'false'));
try {
	if (
		isset($_FILES['inputFile'])
		&& isset($_POST['comboServico'])
		&& isset($_POST['txtDescricaoImagen'])
	) {
		$imagen = new Imagen(
			'imagem1.png',
			'security/uploads/',
			$_POST['txtDescricaoImagen']
		);
		while (file_exists(
			'../../../' . $imagen->getUrl() . $imagen->getNome()
		)) {
			$imagen->setNome(formatFileName($imagen->getNome()));
		}
		move_uploaded_file(
			$_FILES['inputFile']['tmp_name'],
			'../../../' . $imagen->getUrl() . $imagen->getNome()
		);
		$imagen->cadastrar($_POST['comboServico']);
		$state = true;
		echo '' . (boolval($state) ? 'true' : 'false');
	}
} catch (Exception $e) {
	echo $e;
	$state = false;
}

function formatFileName($fileName)
{
	$numberFile = str_replace('imagem', '', explode('.', $fileName)[0]);
	$newNumberFile = intval($numberFile) + 1;
	return 'imagem' . $newNumberFile . '.png';
}
