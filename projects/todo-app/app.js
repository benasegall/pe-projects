// function Constructor(name, age) {
// 	this.name = name,
// 	this.age = age,

// 	this.sound = function() {
// 		alert(`${name}`);
// 	}
// }

// const toby = new Constructor("Tobuscus", 15);
// const rick = new Constructor("Richard", 2);

// toby.sound();
// rick.sound();

// Constructor.prototype.greeting = function() {
// 	console.log(`... ${this.name} says, "Hewo my hooman"`)
// }

// toby.greeting();



function todoApp() {
	this.todos = [];
	this.todosId = 0,

	this.log = function(note = '') {
	console.log(`-${note}`);
	console.log('todo:', this.todos);
	},

	this.add = function(content) {
		let todo = {
			id: `${this.todosId++}`,
			content: content
		}
		this.todos = [...this.todos, todo];
		this.log(`Added ${content}`);
	},

	this.remove = function(id) {
		this.log(`Removed ${id}`);
		this.todo.splice(id, 1);
	},

	this.update = function(id, newContent) {
		this.todos.splice(id, 1);
		this.add(newContent);
	}

}

const todo = new todoApp();

todo.add("Brush your teeth");
todo.add("Put on the dishwasher");
todo.add("Complete a Constructor function");
todo.update(3, "Onto the next lesson!");

todoApp.prototype.completed = function(id) {
	this.todos[id].completed = true;
	this.log(`completed ${this.todos[id].content}`);
}

todo.completed(2);


// const todoApp = {

// 	todos: [],
// 	todoId: 0,

// 	log(note = "") {
// 		console.log(`–${note}`);
// 		console.log("todo:", this.todos);
// 		// debugger;
// 	},

// 	add(content) {
// 		let todo = {
// 			id: `${this.todoId++}`,
// 			content: content
// 		};
// 		this.todos = [...this.todos, todo];
// 		this.log(`Added ${content}`);
// 	},

// 	remove(id) {
// 		this.log(`Removed ${id}`);
// 		this.todos.splice(id, 1);
// 	},

// 	completed(id) {
// 		this.todos[id].completed = true;
// 		this.log(`completed ${this.todos[id].content}`);
// 	},

// 	update(newContent) {
// 		this.todos[id].content = newContent;
// 	},
// }

// todoApp.add("Complete todo list day 2");
// todoApp.add("Complete Constructor functions and debugger");
// todoApp.completed(1);