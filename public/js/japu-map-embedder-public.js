'use strict'
function japuMapEmbedInit() {
	const japuMapWrapperElement = document.querySelector(".japumap-wrapper");
	const japuFullScreenButtonElement = document.querySelector("#japumap-toggle-full-screen");
	japuFullScreenButtonElement.addEventListener('click', function () {
		japuMapWrapperElement.classList.toggle('fullscreen');
		japuFullScreenButtonElement.classList.toggle('fullscreen');
	});
}
if (window.addEventListener) {
	window.addEventListener('load', japuMapEmbedInit, false);
}
else if (window.attachEvent) {
	window.attachEvent("onload", japuMapEmbedInit);
}
else {
	window.onload = japuMapEmbedInit;
};