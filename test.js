(function() {

	window.onload = function() {
		document.getElementById("switch").onclick = switchPage;
	};

	function switchPage() {
		window.location.assign("add.html");
	}
})();
