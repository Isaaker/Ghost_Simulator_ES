<!doctype html>
<html
<head>

<meta charset="utf-8">
<meta name="robots" content="noindex">

<!--- Favicon --->
<link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
<link rel="manifest" href="./images/site.webmanifest">
<meta name="msapplication-TileColor" content="#fade95">
<meta name="theme-color" content="#fade95">


<!--- CSS Style --->
<link rel="stylesheet" type="text/css" href="home.css">

<title>Ghost Archery Simulator</title>
</head>

<main>
	<body>
		<br>
		<!--- Web Page Banner --->
		<img src="./images/archery.png" width="100%" height=auto>
		<br>
		<!--- Simulation Settings --->

		<h2>Ajustes del Simulador</h2>

		<br>

		<h4>Puntos<h4>

		<div class="aling-container">

			<div class="coolinput">
		    <label for="input" class="text">Max:</label>
		    <input type="text" placeholder="Puntos Máximos" name="max_points" class="input">
			</div>

			<div class="coolinput">
		    <label for="input" class="text">Min:</label>
		    <input type="text" placeholder="Puntos Minimos" name="min_points" class="input">
			</div>

		</div>

		<h4>Tipo<h4>

		<div class="aling-container">

			<div class="radio-inputs">
			  <label class="radio">
			    <input type="radio" name="simulation_type" checked="">
			    <span class="name">Eliminatorias</span>
			  </label>
			  <label class="radio">
			    <input type="radio" name="simulation_type">
			    <span class="name">Competición</span>
			  </label>
			</div>
		</div>

		<h4>Localización<h4>

		<div class="aling-container">

			<div class="radio-inputs">
			  <label class="radio">
			    <input type="radio" name="simulation_location" checked="">
			    <span class="name">Interior</span>
			  </label>
			  <label class="radio">
			    <input type="radio" name="simulation_location">
			    <span class="name">Exterior</span>
			  </label>
			</div>
		</div>

		<h4>Avanzado<h4>
		<label class="container">
			 <input type="checkbox">
			 <div class="checkmark"></div>
		</label>

	<br>
	</body>
	<footer>
		<center><a href="https://piscinadeentropia.es">© Isaac Hernán Martí</a></center>
		<br>
		<div align='center'>Agradecimientos especiales: Antonio J. Hernán Obispo y  Erica Hernán Martí</div>
	</footer>
</main>


</html>
