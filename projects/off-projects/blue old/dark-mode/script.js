
const toggle = document.getElementById("darkmode-toggle");
const body = document.querySelector("body");

toggle.addEventListener("click", function() {
	this.classList.toggle("green-toggle");

	if (this.classList.toggle("checkbox")) {
		body.style.background = "black";
		body.style.color = "white"
		body.style.transition = "2s";
	} else {
		body.style.background = "white"
		body.style.color = "black";
		body.style.transition = "2s";
	}
})