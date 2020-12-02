let index = 1;

$(document).ready(() => {
	$('.item:first-child').css('display', 'grid');
	$('.item:first-child').addClass('to-right');

	$('#btn-next').click(async () => {
		await $('.item').map(function () {
				$(this).css('display', 'none');
				$(this).attr('class', 'item');
		});

		index++;

		if (index > $('.item').length) index = 1;

		const element = await $('.item:nth-child(' + index + ')').css('display', 'grid');

		$(element).addClass('to-right');

	});

	$('#btn-prev').click(async () => {
		await $('.item').map(function () {
				$(this).css('display', 'none');
				$(this).attr('class', 'item');
		});

		index--;

		if (index < 1) index = $('.item').length;

		const element = await $('.item:nth-child(' + index + ')').css('display', 'grid');

		$(element).addClass('to-left');

	});
});

function findIndex() {

}
