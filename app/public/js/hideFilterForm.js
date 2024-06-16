function arrowSwitchRight() {
	let arrowLeft = $('#filter-arrow-left')[0];
	let arrowRight = $('#filter-arrow')[0];
	let filter = $('#filterForm')[0];
	let text = $('#filterText')[0];
	text.style.writingMode = "vertical-rl";
	text.style.textOrientation = "upright";
  // text.style.background="#24252A";
  // text.style.background.
	text.style.right = "-250px";
	filter.style.right = "-250px";
	arrowLeft.style.display = 'block';
	arrowRight.style.display = 'none';
}

function arrowSwitchLeft() {
	let arrowLeft = $('#filter-arrow-left')[0];
	let arrowRight = $('#filter-arrow')[0];
	let filter = $('#filterForm')[0];
	let text = $('#filterText')[0];
	text.style.writingMode = "horizontal-tb";
	filter.style.right = "10px";
	arrowLeft.style.display = 'none';
	arrowRight.style.display = 'block';
}

// const headingClasses = document.querySelector("h1").classList;
// const button = document.querySelector("#toggle");
//
// function changeTextOrientation() {
//   if (headingClasses.contains("text-orientation")) {
//     headingClasses.remove("text-orientation");
//   } else {
//     headingClasses.add("text-orientation");
//   }
// }
//
// button.addEventListener("click", changeTextOrientation);
