console.clear();

const $form = document.querySelector('form');
const $question = $form.querySelector('#question');
const $output = document.querySelector('#output');

$form.addEventListener('submit', function(event) {
	event.preventDefault();
	const randomNumber = Math.floor(Math.random() * 4);
	const eightBall = randomNumber;
	if ($question.value) {
		let questionRes = $question.value;
		let answerRes = '';

		switch (eightBall) {
		case 0:
			answerRes = "Yes";
			break;
		case 1:
			answerRes = "No";
			break;
		case 2:
			answerRes = "Maybe";
			break
		case 3:
			answerRes = "Ask again later.";
			break;
		}
		$output.innerHTML = `What's your question? ${questionRes} ${answerRes}`;
	} else {
		$output.innerHTML = `Forgot something?`;
	}
});
