console.clear();

const $form = document.querySelector('form');
const $noun = $form.querySelector('#noun');
const $verb = $form.querySelector('#verb');
const $adverb = $form.querySelector('#adverb');
const $adjective = $form.querySelector('#adjective');
const $output = document.querySelector('#output');

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($noun.value && $verb.value && $adverb.value && $adjective.value) {
		let nounRes = $noun.value;
		let verbRes = $verb.value;
		let adverbRes = $adverb.value;
		let adjectiveRes = $adjective.value;
		$output.innerHTML = `<p>This ${nounRes}, is such a ${verbRes}, that I am about to ${adverbRes}! Yeah, and they were like, it's is a total ${adjectiveRes}.</p>`;
	} else {
		$output.innerHTML = `<p>Forgot something?</p>`;
	}
});