let todos = [];
let id = 0;
const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

function add(content) {
	const todo = {
		id: `${id++}`,
		content: content,
		complete: false,
	};

	todos = [...todos, todo];
	renderTodos(todos);
}

function remove(id) {
	// filter through the todo list
	const filtered = todos.filter(function(todo) {
		// if todo id is not equal to the id being checked
		// return all but that id
		return todo.id != id;
	});

	todos = [...filtered];
	renderTodos(todos);
}

function complete(id) {
	for (let i = 0; i < todos.length; i++) {
		if (todos[i].id == id) {
			todos[i].complete = true;
		}
	}
	renderTodos(todos);
}

function renderTodo(todo) {
	return `
	<li data-id='${todo.id}'>
		<todo-card class='${todo.complete ? 'complete' : ''}'>
			<h2>${todo.content}</h2>

			<actions>
				<button>complete</button>
				<button>clear</button>
			</actions>
		</todo-card>
	</li>
	`;
}

function renderTodos(todos) {
	let template = "<ul>";
	todos.forEach(function(todo) {
		template += renderTodo(todo);
	});
	template += "</ul>";
	$output.innerHTML = template;
}

add("So much todo")


$form.addEventListener('submit', function(event) {
	event.preventDefault();

	add($input.value);
	$input.value = "";
	console.log('todos: ', todos);
});

$output.addEventListener('click', function(event) {

	if (event.target.textContent == 'clear') {
		const id = event.target.closest('li').dataset.id;
		remove(id);
	}

		if (event.target.textContent == 'complete') {
		const id = event.target.closest('li').dataset.id;
		complete(id);
	}
});
