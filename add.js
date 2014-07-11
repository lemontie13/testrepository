(function() {

	window.onload = function() {
		document.getElementById("back").onclick = goBack;

	};

	function goBack() {
		window.location.assign("test.html");
	}


})();
