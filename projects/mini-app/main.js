import {
	setScreen,
	$output
} from './set-screen.js';

window.addEventListener("click", function(event) {

	if (event.target.matches("[data-screen]")) {
		// click - button - data - screen = ?
		setScreen(event.target.dataset.screen);
	}
});