let $output = document.querySelector('[data-output="main"]');

function setScreen(screen) {
	console.log("Set screen: ", screen);

	// from pages array dot notation name
	$output.innerHTML = pages[screen];
}

let pages = {};

pages.logo = `
	<h1>Landing</h1>
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
	$output
};