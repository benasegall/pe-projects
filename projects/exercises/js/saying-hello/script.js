console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

$form.addEventListener('submit', function(event) {
	event.preventDefault();
	if ($input.value) {
		let message = `Hello there, ${$input.value}, thanks for trying out the demo!`;
		$output.innerHTML = `<p>${message}</p>`;
	} else {
		$output.innerHTML = `<p>Forgot something?</p>`;
	}
});