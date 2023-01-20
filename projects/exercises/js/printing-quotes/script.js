console.clear();

const $form = document.querySelector('form');
const $quote = $form.querySelector('#quote');
const $author = $form.querySelector('#author');
const $output = document.querySelector('#output');

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($quote.value && $author.value) {
		let quoteRes = $quote.value;
		let authorRes = $author.value;
		$output.innerHTML = `<p>${authorRes} says, "${quoteRes}".</p>`;
	} else {
		$output.innerHTML = `<p>Forgot something?</p>`;
	}
});