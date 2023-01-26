const todoApp = {

	todos: [],
	todoId: 0,

	log: function(note = "") {
		console.log(`–${note}`);
		console.log("todo:", this.todos);
	},

	add: function(content) {
		let todo = {
			id: `${this.todoId++}`,
			content: content
		};
		this.todos = [...this.todos, todo];
		this.log(`Added ${content}`);
	},

	remove: function(id) {
		this.log(`Removed ${id}`);
		this.todos.splice(id, 1);
	},

	completed: function(id) {
		this.todos[id].completed = true;
		this.log(`completed ${this.todos[id].content}`);
	},

	update: function(newContent) {
		this.todos[id].content = newContent;
	},
}

todoApp.add("Complete todo list day 2");
todoApp.add("Complete Constructor functions and debugger");
todoApp.completed(1);