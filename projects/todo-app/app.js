function log(note = "") {
	console.log(`–${note}`);
	console.log("todo:", todos);
}

const todos = [];
let count = 0;

function add(content) {
	let todo = {
		id: `${count++}`,
		content: content
	};
	todos.push(todo);
	log(`Added ${content}`);
}

function remove(index) {
	log(`Removed ${index}`);
	todos.splice(index, 1);
}

function completed(index) {
	todos[index].completed = true;
	log(`completed ${todos[index].content}`);
}

function update(newContent) {
	todos[index].content = newContent;
}

add("Complete todo app");

completed(0);

add("Complete 1 new JavaScript form");
add("Browse appartments");
add("Eat dinner.")

remove(3);

add("Get ready for bed")

update(todos[2].content = "This is an updated list item")