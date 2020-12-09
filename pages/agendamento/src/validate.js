/*

function igor() {}

() => {}

igor = 'teste';

VAR igor = 'teste';

LET igor = 'teste';

CONST igor = 'teste';

*/

let valueAgendamento = "";

let step = 1;

$(document).ready(() => {

	$("#demo01").animatedModal();

	$('#login_form').submit(async (e) => {

		if (step == 1) {
			const elements = $('#login_form .fieldCpf');
			const values = await elements.map(function () {

				const filho = $(this).children()[1];

				if (String($(filho).attr('class')) == "pseudo-field")

					return validateFields($(filho).children()[0]);

				return validateFields(filho);
			});

			if (!percorrer(values)) {
				e.preventDefault();
				elements.map(function () {
					const filho = $(this).children()[1];

					if (String($(filho).attr('class')) == "pseudo-field") {

						const pseudo = $(filho).children()[0];
						pseudo.value = '';

					} else

						filho.value = '';
				});

				// animacao
				$('#login').toggleClass('acces-denied');
				delay = setTimeout(() => {
					$('.modal-content').text('');
					$('#login').toggleClass('acces-denied');
					$('.modal-content').append(
						"<h3>Atenção!</h3>" +
						"<br>" +
						"<h4>Não utilize caracteres especiais desnecessários</h4>" +
						'<h3>-_= &nbsp; :> &nbsp; *-° &nbsp; ;) &nbsp; etc.</h3>'
					);
					$('#demo01').click();

					elements.map(function () {
						const filho = $(this).children()[1];

						if (String($(filho).attr('class')) == "pseudo-field") {

							const pseudo = $(filho).children()[0];
							$(pseudo).addClass('red-placeholder');

						} else

							$(filho).addClass('red-placeholder');
					});

				}, 310);
			} else {
				e.preventDefault();
				$('fieldset input').attr('readonly', true);
				hidBtn('#initial-btns');
				showBtn('#final-btns');
				setRandomValue();
				$('#randonValue').text("R$: " + (valueAgendamento / 100));
				$('#price').attr('class', 'show-price');
				step = 2;
			}
		} else if (step == 2) {

		}

	});

	$('#rollback').click((e) => {
		e.preventDefault();
		$('fieldset input').attr('readonly', false);
		showBtn('#initial-btns');
		hidBtn('#final-btns');
		setRandomValue();
		$('#randonValue').text("R$: " + (valueAgendamento / 100));
		$('#price').attr('class', 'price');
		step = 1;
	});
});

function validateFields(element) {
	const elemento = $(element);

	if (String($(elemento).val()) == "") {
		return false;
	}

	const chars = "$#()[]{}!%&*/|<>+";
	for (let i = 0; i < String($(elemento).val()).length; i++) {
		for (let j = 0; j < chars.length; j++) {
			if (String($(elemento).val()).charAt(i) == chars.charAt(j)) {
				return false;
			}
		}
	}

	return true;
}

function percorrer(array) {
	let state = true;
	for (i = 0; i < array.length; i++) {
		if ($(array)[i] == false) {
			state = false;
			break;
		}
	}

	return state;
}


function hidBtn(botao) {
	$(botao).attr('class', 'btn hidden');
}

function showBtn(botao) {
	$(botao).attr('class', 'btn');
}


function setRandomValue() {
	valueAgendamento = parseInt(Math.random() * (25000 - 5000) + 5000);
}
