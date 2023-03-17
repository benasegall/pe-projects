
// access toggle switch
const toggle = document.getElementById("darkmode-toggle");

// allow js acces to html doc
const html = document.querySelector("html");

// after toggle is switched alter html theme
toggle.addEventListener("click", function() {
	html.classList.toggle("dark-theme");
})