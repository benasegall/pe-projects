let objOfArr = [
	{
		name: "sggE",
		type: "breakfast",
	},
	{
		name: "kliM",
		type: "breakfast",
	},
	{
		name: "lkim toA",
		type: "breakfast",
	},
	{
		name: "slegaB",
		type: "breakfast",
	},
	{
		name: "rettuB",
		type: "lunch",
	},
	{
		name: "yenoH",
		type: "lunch",
	},
	{
		name: "niffuM",
		type: "lunch",
	},
];

let breakfast = objOfArr.filter( function(item) {
	return item.type == 'breakfast';
});

let lunch = objOfArr.filter( function(item) {
	return item.type == 'lunch';
});

function markup(heading, list) {
	let h1 = document.createElement('h1');
	h1.textContent = heading;
	document.body.appendChild(h1);

	let listWrap = document.createElement('ul');

	list.forEach( function(item) {
	let li = document.createElement('li');
	li.textContent = item.name;
	listWrap.appendChild(li);
	});
	document.body.appendChild(listWrap);
}

markup("This is a heading", breakfast);
markup("This is a heading", lunch);
