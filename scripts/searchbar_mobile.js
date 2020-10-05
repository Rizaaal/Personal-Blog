let overlay = 
			document.getElementById('modal_overlay').style;


				function displaySearchBar() {
						overlay.left = "0px";
						overlay.backgroundColor = "rgba(0, 0, 0, 0.5)";

					}

				function exitOverlay() {
					overlay.backgroundColor = "rgba(0, 0, 0 ,0)"
					overlay.left = "-500px";

					}
