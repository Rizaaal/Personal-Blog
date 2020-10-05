<!DOCTYPE html>
<html lang="it">


	<head>	
		<meta charset="UTF-8">	
		<meta name="descrizione" content="questo è un blog prova">
		<meta name="author" content="Gabriele Di Grazia">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- material icons -->
		<link href= "https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<title>Blog - archivio</title>

	</head>
	
	

	<body>
<!-- main logo -->		
		<header class="logo">
			<a href="https://localhost/wordpress/">
				<img src="logo.png" alt="logo pagina">
			</a>
		</header>

<!-- I used comment to avoid whitespaces because they mess up the layout -->		

	<nav class="menu">
		<ul class="menu_elementi">

			<a href="https://localhost/wordpress/"><!--
			--><i 
				class="material-icons">create</i><br><span>post</span></a><!--
			--><a 
				href="archivio.html" style="background-color: #fdffd7"><!--
			--><i 
				class="material-icons">folder</i><br><span>archivio</span></a><!--
			--><a 
				href="galleria.php"><!--
			--><i 
				class="material-icons">photo</i><br><span>galleria</span></a><!--
			--><a 
				href="about.html"><!--
			--><i 
				class="material-icons">person_pin</i><br><span>about</span><!--
			--></a><!--
				
			--><!--ricerca on button click su mobile anzichè barra di ricerca 
			(display: none su "style.css")--><!--
			--><button class="cerca_icona_mobile"
				onclick="displaySearchBar()"><!--
			--><i class="material-icons">search</i></button>

			</ul>
		
		</nav>

		<!-- casella di ricerca sotto la navbar -->
		<input 
		id="searchbar" 
		type="text" 
		name="ricerca" 
		placeholder="Cerca...">
		
		<hr>
		<!-- accordion -->

		<h3 class="titolo_mobile">Archivio</h3>

		<div class="not_a_post_small">
			<button class="archivio">Ottobre 2018</button>
				<div class="panel">	
					<ul>
						<li><a href="Post_5.html">Post 5</a></li>
					</ul>
				</div>
			<button class="archivio">Data Sconosciuta</button>
				<div class="panel">	
					<ul>
						<li><a href="#">Post 4</a></li>
						<li><a href="#">Post 3</a></li>
						<li><a href="#">Post 2</a></li>
						<li><a href="#">Post 1</a></li>
					</ul>
				</div>
<!-- script per far scendere la tendina -->
				<script type="text/javascript">
					var acc = document.getElementsByClassName("archivio");
					var i;

					for (i = 0; i < acc.length; i++) {
					    acc[i].addEventListener("click", function() {
					        this.classList.toggle("active");
					        var panel = this.nextElementSibling;
					        if (panel.style.display === "block") {
					            panel.style.display = "none";
					        } else {
					            panel.style.display = "block";
					        }
					    });
					}
				</script>	

<!-- a note -->

		</div>
		<div class="not_a_post_small">
			<p>Nota: il fatto che funziona solo il link "post 5" è stato fatto 
			di proposito (funge da esempio).</p>
		</div>	

<!-- modal overlay for the serach bar that display only on the mobile viewport 
-->

		<div id="modal_overlay" 
		style="left: -500px; background-color: rgba(0, 0, 0, 0);">

			<input id="mobile_searchbar" 
			type="text" 
			name="ricercaMobile"
			placeholder="cerca...">

			<button id="modal_overlay_X_btn" onclick="exitOverlay()">✖</button>



		</div>

<!-- this script toggles the serarchbar on mobile viewport -->

		<script>

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

		</script>		
						
	</body>
</html>