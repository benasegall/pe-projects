import {
	setScreen,
	$output,
	renderUnits,
	renderUnit
} from './set-screen.js';

import {
	unitList
} from './units.js';


function getData(key) {
	return JSON.parse(localStorage.getItem(key));
}

function setData(key, value) {
	return localStorage.setItem(key, JSON.stringify(value));
}

// initialize on page reload
function initialize() {
	// check storage for units
	if (!getData("userUnits")) {
		setData("userUnits", unitList);
	}
}
initialize();

// 
function addNewUnit(name, desc, feat) {
	let unitsData = getData("userUnits");
	let newUnit = {
		name: name,
		description: desc,
		features: feat
	};
		unitsData.push(newUnit);
		console.log("create new data");
		setData("userUnits", unitsData);
}

let $newUnitList = document.querySelector('#unitListSection');

let $userInput = document.querySelector('#filter');

window.addEventListener("click", function(event) {

	if (event.target.matches("[data-screen]")) {
		// click - button - data - screen = ?
		setScreen(event.target.dataset.screen);
	}

	if (event.target.matches("#viewMore")) {
		$newUnitList.insertAdjacentHTML("beforeend",renderUnits(unitList));
	}
});

window.addEventListener("input", function(event) {

	if (event.target.matches("#filter")) {
		let userInput = event.target.value;
		let filterdUnits = unitList.filter(function(unit) {
			return unit.features.includes(userInput);
		})
		$newUnitList.innerHTML = renderUnits(filterdUnits);
	}
});

window.addEventListener("submit", function(event) {
	event.preventDefault();
	console.log(event.target)
		let $name = event.target.querySelector("#name");
		let $desc = event.target.querySelector("#desc");
		let $feat = event.target.querySelector("#feat");

		addNewUnit($name.value, $desc.value, $feat.value);
})

export {
	addNewUnit
}


