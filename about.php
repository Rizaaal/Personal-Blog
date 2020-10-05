<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="descrizione" content="questa è un blog di prova">
		<meta name="author" content="Gabriele Di Grazia">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- material icons per le icone -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" 
		rel="stylesheet">
		<title>Blog - about</title>
	</head>
	<body>
		<header class="logo">
			<a href="https://localhost/wordpress/">
				<img src="logo.png" alt="logo pagina">
			</a>
		</header>
				
		<nav class="menu">
			<ul class="menu_elementi">

				<a href="https://localhost/wordpress/"><!-- 
			--><i
				class="material-icons">create</i><br><span>post</span></a><!--
			--><a
				href="archivio.php"><!-- 
			--><i
				class="material-icons">folder</i><br><span>archivio</span></a><!-- 
			--><a
				href="galleria.php"><!-- 
			--><i
				class="material-icons">photo</i><br><span>galleria</span></a><!-- 
			--><a
				href="about.php" style="background-color: #fdffd7"><!-- 
			--><i
				class="material-icons">person_pin</i><br><span>about</span><!-- 
			--></a><!--
				ricerca on button click su mobile anzichè barra di ricerca 
				(display: none su "style.css")
			--><button class="cerca_icona_mobile"
			onclick="displaySearchBar()">
				<i class="material-icons">search</i></button>

			</ul>
		
		</nav>
				
			<!-- searchbar under navbar -->
			<input 
			id="searchbar"
			type="text" 
			name="ricerca" 
			placeholder="Cerca...">
			
			<hr>

			<h3 class="titolo_mobile">About</h3>

			<img src="https://placeimg.com/1000/500/any" style="margin-bottom: 38px; display: block; margin-left: auto; margin-right: auto;">
			
			<div class="not_a_post">Lorem ipsum dolor sit amet, consectetuer
			adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
			Cum sociis natoque penatibus et magnis dis parturient montes, 
			nascetur 
			ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
			pretium 
			quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
			fringilla vel, 
			aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
			imperdiet a, 
			venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
			Integer 
			tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean 
			vulputate 
			eleifend tellus.</div><br>

			<div class="not_a_post">Lorem ipsum dolor sit amet, consectetuer 
			adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
			Cum sociis natoque penatibus et magnis dis parturient montes, 
			nascetur 
			ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
			pretium 
			quis, sem. Nulla consequat massa quis enim.</div>
			
			<footer class="not_a_post_small">
				<h2>Contatti</h2>
				<h3>E-mail:</h3>
					<ul>
						<li>example@mail.com</li>
						<li>example2@mail.org</li>
					</ul>
				<h3>Telefono</h3>	
					<ul>
						<li>123456789</li>
						<li>123456789</li>
					</ul>
				<h3>Social</h3>	
					<ul>
						<li><a href="#" style="color:white;">Twitter</a></li>
						<li><a href="#" style="color:white;">Facebook</a></li>
					</ul>
			
			</footer>

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















