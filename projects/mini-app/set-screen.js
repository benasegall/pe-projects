import {
	unitList
} from './units.js';

let $output = document.querySelector('[data-output="main"]');

function setScreen(screen) {
	console.log("Set screen: ", screen);

	// from pages array dot notation name
	$output.innerHTML = pages[screen];
}

function renderUnit(unitList) {
	let unit = "";

	unitList.forEach(function(unitItem) {
		unit += 
		`<div class="unit-card">
			<img data-screen="unitDetails" src="${unitItem.image}">
			<h2>${unitItem.name}</h2>
			<p>${unitItem.description}</p>
			<button>Save for later</button>
		</div>`;
	})
	return unit;
}


let pages = {};

pages.logo = `
	<h1>Landing</h1>
	<section class="hero">
		<h1>The easiest way to rent, buy & sell your home</h1>

		<div class="search">
			<form>
				<input type="text" placeholder="Add a filter" name="filter">
				<button>Go</button>
			</form>
		</div>
	</section>

	<section id=unitListSection class='units'>
		${renderUnit(unitList)}
		<button id=viewMore>View More</button>
	</section>

`;

pages.unitDetails = `
	<h1>Details</h1>
	<button data-screen="logo">Back</button>
`;



pages.savedHomes = `
	<h1>Saved</h1>

`;



pages.addNew = `
	<h1>New</h1>

`;



setScreen("logo"); // default landing page

export {
	setScreen,
	$output,
	renderUnit
};