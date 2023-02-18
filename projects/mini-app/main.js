import {
	setScreen,
	$output,
	renderUnit
} from './set-screen.js';

import {
	unitList
} from './units.js';

let $unitList = document.querySelector('#unitListSection');

window.addEventListener("click", function(event) {

	if (event.target.matches("[data-screen]")) {
		// click - button - data - screen = ?
		setScreen(event.target.dataset.screen);
	}

	if (event.target.matches("#viewMore")) {
		$unitList.append(renderUnit(unitList));
	}
});