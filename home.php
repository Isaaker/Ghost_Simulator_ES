<!doctype html>
<html
<head>

<!--- Responsive Platform --->
<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt>

<meta charset="utf-8">
<meta name="robots" content="noindex">

<!--- Favicon --->
<link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
<link rel="manifest" href="./images/site.webmanifest">
<meta name="msapplication-TileColor" content="#fade95">
<meta name="theme-color" content="#fade95">

<!--- Check JavaScript --->
<noscript>
	<meta http-equiv="refresh" content="0;URL='./javascript_disabled.html'" />
</noscript>

<!--- CSS Style --->
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="menu.css">

<title>Ghost Archery Simulator</title>
</head>

<main>
	<header>
		<img src="/images/Archery_Ghost_Simulator.png" alt="ghost simulator logo" width="40" height="40"></img>
		Archery Ghost Simulator
		<div class="UI_icons">
			<a href="/about.html"><img src="/images/ui_icons/info.svg" alt="about"><img></a>
			<a href="/settings.html"><img src="/images/ui_icons/settings.svg" alt="settings"><img></a>
			<a href="https://ghostsimulator.eu.auth0.com/oidc/logout"><img src="/images/ui_icons/log-out.svg" alt="logout"><img></a>
		</div>
		
	</header>

	<body>
		<br>
		<!--- Web Page Banner --->
		<img src="./images/archery.png" width="100%" height=auto>
		<br>

		<!--- URL Variables for PHP --->

		<script>
		function validateInput(){
		  // Get the values of the two input fields
		  var max_points = document.getElementById("max_points").value;
		  var min_points = document.getElementById("min_points").value;
			var location = document.querySelector('input[name="simulation_location"]:checked').value;
			var type = document.querySelector('input[name="simulation_type"]:checked').value;
			var modality = document.querySelector('input[name="modality"]:checked').value;


		  // Check if the two fields are empty
		  if (max_points === "" || min_points === "") {
		    alert("Por favor complete todas las opciones obligatorias");
		    return;
		  }

		  // Check the value of the points fields

			//Qualifiers

			//Compound
		    if (type === "qualifiers") {
				if (max_points > 31 || min_points < 0 || min_points >= max_points) {
			    alert("Los puntos introduciodos son incompatibles");
		      	return;
		    }
			}

			//Competition

			if (type === "competition" && location === "indoor") {
				if (max_points > 31 || min_points < 0 || min_points >= max_points) {
			    alert("Los puntos introduciodos no son validos");
		      	return;
		    }
			}

			if (type === "competition" && location === "outdoor") {
				if (max_points > 61 || min_points < 0 || min_points >= max_points) {
			    alert("Los puntos introduciodos son incompatibles");
		      	return;
		    }
			}


		  // Check if the two fields contain only numbers
		  if (!/^[0-9]+$/.test(max_points) || !/^[0-9]+$/.test(min_points)) {
		    alert("Por favor introduzca solo numeros en el area de puntos");
		    return;
		  }


      //Build the URL

			try{
				var competition_split = document.querySelector('input[name="competition_split"]:checked').value;
				// Build the URL to pass the arguments to the PHP page with competition_split
			  	var url = "simulator.php?max_points=" + max_points + "&min_points=" + min_points + "&type=" + type + "&location=" + location + "&modality=" + modality + "&competition_split=" + competition_split;
			}catch (error) {
				// Build the URL to pass the arguments to the PHP page without competition_split
			  	var url = "simulator.php?max_points=" + max_points + "&min_points=" + min_points + "&type=" + type + "&location=" + location + "&modality=" + modality;
			}

		  // Redirect to the PHP page
		  window.location.href = url;
		}
		</script>


		<center>
			<button id="startSimulationBtn" onclick="validateInput()" class="shadow__btn">Empezar Simulación</button>
		</center>

		<!--- Simulation Settings --->

		<h2>Ajustes del Simulador</h2>

		<a class="required-text">* Las opciones indicadas con un asterisco rojo son obligatorias</a>

		<br>

		<!--- Max and Min points --->

		<h4>Puntos<h4>

		<div class="aling-container">

			<a class="required-text">*</a>
			<div class="coolinput">
		    <label for="input" class="text">Max:</label>
		    <input type="text" placeholder="Puntos Máximos" id="max_points" class="input">
			</div>

			<a class="required-text">*</a>
			<div class="coolinput">
		    <label for="input" class="text">Min:</label>
		    <input type="text" placeholder="Puntos Minimos" id="min_points" class="input">
			</div>

		</div> <b>Los puntos introducidos deben de ser por entrada por entrada</b>

		<!--- Simulation modality --->

		<h4>Modalidad<h4>

		<div class="aling-container">

			<a class="required-text">*</a>
			<div class="radio-inputs">
			  <label class="radio">
			    <input type="radio" name="modality" checked="" value="compound">
			    <span class="name">Compuesto</span>
			  </label>

			  <label class="radio">
			    <input type="radio" name="modality" checked="" value="other">
			    <span class="name">Olimpico, Tradicional, LongBow o Desnudo</span>
			  </label>
			</div>
		</div>

		<!--- Simulation type --->

		<h4>Tipo<h4>

		<div class="aling-container">
			<a class="required-text">*</a>
			<div class="radio-inputs">
			  <label class="radio">
			    <input type="radio" name="simulation_type" checked="" value="qualifiers">
			    <span class="name">Eliminatorias</span>
			  </label>

			  <label class="radio">
			    <input type="radio" name="simulation_type" checked="" value="competition">
			    <span class="name">Competición</span>
			  </label>
			</div>
		</div>

		<!--- Simulation location --->
		<h4>Localización<h4>

		<div class="aling-container">

			<a class="required-text">*</a>
			<div class="radio-inputs">
			  <label class="radio">
			    <input type="radio" name="simulation_location" checked="" value="indoor">
			    <span class="name">Interior</span>
			  </label>

			  <label class="radio">
			    <input type="radio" name="simulation_location" value="outdoor">
			    <span class="name">Exterior</span>
			  </label>
			</div>
		</div>

	<br>
	</body>
	<footer>
		<center><a href="https://piscinadeentropia.es">Creado por: Isaac Hernán Martí </a></center>
		<center><a href="https://github.com/Isaaker/Ghost_Simulator_ES/blob/main/LICENSE.txt">© CC BY-NC-ND 4.0 </a></center>
	</footer>
</main>


</html>
