const permitedFiles = [
	'png',
	'bitmap',
	'jpg',
	'jpeg',
];

const drop_ = document.querySelector('.area-upload #upload-file');
drop_.addEventListener('dragenter', function () {
	document.querySelector('.area-upload .label-upload').classList.add('highlight');
});
drop_.addEventListener('dragleave', function () {
	document.querySelector('.area-upload .label-upload').classList.remove('highlight');
});
drop_.addEventListener('drop', function () {
	document.querySelector('.area-upload .label-upload').classList.remove('highlight');
});

document.querySelector('#upload-file').addEventListener('change', function () {
	const files = this.files;
	if (files.length > 0) {
		const file = files[0];
		const fileState = {
			span: "",
		}
		const valido = validarArquivo(file);
		if (valido.permited) {
			const span = $('<span />', {
				id: 'nome-arquivo',
				class: 'nome-arquivo',
			});
			$(span).text(file.name);
			fileState.span = span;
		} else {
			const span = $('<span />', {
				id: 'nome-arquivo',
				class: 'nome-arquivo error',
			});
			if (valido.occorence == 'invalid') {
				$(span).text('Formato de arquivo inválido!');
				fileState.span = span;
			} else if (valido.occorence == 'bigger') {
				$(span).text('Arquivo muito grande!');
				fileState.span = span;
			} else {
				$(span).text('erro');
				fileState.span = span;
			}
		}
		$('#selected-file').text("Arquivo selecionado: ");
		$('#selected-file').append(fileState.span);
	}
});

function validarArquivo(file) {
	const name = file.name;
	const extensao = String(name).split('.')[1];
	
	// Tipos permitidos
	if (permitedFiles.indexOf(extensao) == -1)
		return { permited: false, occorence: 'invalid' };

	// Apenas 10MB é permitido
	if (file.size > 5 * 1024 * 1024) return { permited: false, occorence: 'bigger' };

	// Se der tudo certo
	return { permited: true, occorence: '' };
}