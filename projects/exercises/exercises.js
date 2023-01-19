// todo: Connect solutions with presentable web form

function readPrompt(promptInput) {
	let prompt = promptInput;
	return prompt;
}

function score() {
	let testScore = readPrompt(prompt("Enter a score"));
	let grade = '';
	if (testScore >= 90) {
		grade = ("Your grade is A"); 
	} else if (testScore >= 80) {
		grade = ("Your grade is B"); 
	} else if (testScore >= 70) {
		grade = ("Your grade is C"); 
	} else if (testScore >= 60) {
		grade = ("Your grade is D"); 
	}  else {
		grade = ("Your grade is F");
	}
	return alert(grade);
}

// Adding Numbers

// pseudocode
// create empty array
// create function that prompts user for an input number
// if user input is a number
// push inupt to an empty array

// create function that calls above function as many times until 5 times have occured
// once 5 inputs have been reached

// loop through array and sum up numbers
// return final sum in an alert

let array = [];

function numberPrompt(userInput) {
	prompt('Please enter a number');
	if (userInput) {
	userInput = Number(userInput);
		array.push(userInput);
		console.log(array);
	}
}

function after(numOfCalls, func) {
	let counter = 0;
	return function(arg) {
		counter += 1;
		if (counter >= numOfCalls)
			return func(arg);
	}
}

function addingNumbers() {
	let sum = 0;
	array.forEach(elem => {
		sum = elem + elem;
	})
	return alert(sum);
}


after(5, numberPrompt());
addingNumbers();













