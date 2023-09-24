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
<link rel="stylesheet" type="text/css" href="./simulator.css">

<title>Ghost Archery Simulator</title>
</head>

<main>
	<body>

		<!--- Check PHP URL Arguments --->
		<?php

		try {
			// Get the values of the variables from the GET request
			$max_points = $_GET["max_points"];
			$min_points = $_GET["min_points"];
			$type = $_GET["type"];
			$location = $_GET["location"];
			$modality = $_GET["modality"];

			// Validate that all the variables are present
			if (!isset($max_points)) {
				throw new Exception("The value of the max_points variable could not be obtained.");
			}

			if (!isset($min_points)) {
				throw new Exception("The value of the min_points variable could not be obtained.");
			}

			if (!isset($type)) {
				throw new Exception("The value of the type variable could not be obtained.");
			}

			if (!isset($location)) {
				throw new Exception("The value of the location variable could not be obtained.");
			}

			if (!isset($modality)) {
				throw new Exception("The value of the modality variable could not be obtained.");
			}

			//Check that all variables meet the requirements

			if (filter_var($max_points, FILTER_VALIDATE_INT) == false) {
				throw new Exception("The value of the max_points variable needs to be a Int.");
			}

			if (filter_var($min_points, FILTER_VALIDATE_INT) == false) {
				if ($min_points != 0){
					throw new Exception("The value of the max_points variable needs to be a Int.");
				}
			}

			if ($min_points < 0){
				throw new Exception("The value of the max_points and the type value are incompatible");
			}

			if ( $max_points <= $min_points){
				throw new Exception("The value of the max_points needs to be bigger than min_points");
			}

			if ( $type != "qualifiers"){
				if ( $type != "competition"){
					throw new Exception("The value of the type variable needs to be qualifiers or competition");
				}
			}

			if ($type == "qualifiers"){
				if ($max_points > 30){
					throw new Exception("The value of the max_points and the type value are incompatible");
				}
			}

			if ( $location != "indoor"){
				if ( $type != "outdoor"){
					throw new Exception("The value of the type variable needs to be indoor or outdoor");
				}
			}

			if ($location == "indoor"){
				if ($max_points > 30){
					throw new Exception("The value of the max_points and the type & location value are incompatible");
				}
			}

			if ($location == "outdoor"){
				if ($type == "competition"){
					if ($max_points > 60){
						throw new Exception("The value of the max_points and the type & location value are incompatible");
					}
				}
			}

			if ( $modality != "compound"){
				if ( $modality != "other"){
					throw new Exception("The value of the type variable needs to be compound or other");
				}
			}


			} catch (Exception $e) {
			// Display an error message and redirect the user to the home page
			echo '
			<div class="simulation_form">
				<h1 style="color:red;">Error</h1>
				<p>La configuración no se ha realizado correctamente, pulse le botón a continuación para volver a la página de configuración.</p>
				<br>
				<p>ERROR: ' . $e . '<p>
				<a href="./"><button>Volver a la configuración</button></a>
			</div>
			';
			die();
		}

		?>

    <a href="./" ><button>🏠 Home</button></a>
	<br>

    <div class="simulation_form">
    	<p class="issue_message"> 💡 Consejo: Para poder acceder más rapido a la configuración que estas usando ahora mismo añade esta página como marcador</p>
    	<!--- Web Page Banner --->
    	<center>
    		<img src="./images/Archery_Ghost_Simulator.png" alt="Ghost Simulator Logo" width="150" height="150">
        	<h1>Simulator</h1>
    	</center>
    	<hr>

    	<!--- Simulator Setting Display --->
    	<h3>⚙️ Ajustes</h3>
    	<?php
			//Max / Min Points
			echo 'Puntos Máximos: ' . htmlspecialchars($_GET["max_points"]) . ' | ' . 'Puntos Mínimos: ' . htmlspecialchars($_GET["min_points"]);

			//Location
			echo ' | ';
			if ($_GET["location"] == "indoor"){
				echo 'Localización: Interior';
			}
			else{
				echo 'Localización: Exterior';
			}


			//Type
			echo ' | ';
			if ($_GET["type"] == "qualifiers"){
				echo 'Tipo: Eliminatorias';
			}
			else{
				echo 'Tipo: Competición';
			}

			//Modality
			echo ' | ';
			if ($_GET["modality"] == "compound"){
				echo 'Modalidad: Compuesto';
			}
			else{
				echo 'Modalidad: Olímpico, Tradicional, LogBow o Desnudo';
			}

			//Competiton Split
			// I have used this method replacing $_GET["competition_split"], because if the argument is not in the URL the server may generate WARNINGS or ERRORS.
			$url = $_SERVER['REQUEST_URI'];
			if (str_contains($url, "competition_split")) {
				echo ' | ';
				echo 'Media Competicion: Activado';
			}
    	?>
    	<hr>
    	<!--- Simulator PHP Area --->
		<?php
			$max_points = $_GET["max_points"];
			$min_points = $_GET["min_points"];
			$type = $_GET["type"];
			$location = $_GET["location"];
			$modality = $_GET["modality"];
			// Ghost Data Display
			$Ghost_R1 = rand($min_points, $max_points);
			$Ghost_R2 = rand($min_points, $max_points);
			$Ghost_R3 = rand($min_points, $max_points);
		?>

		<center>
			<table class="simulator_table" id="ghost_table">
				<tr>
					<th>Ghost</th>
					<th>Usted</th>
				</tr>
				<tr>
					<td><?php echo $Ghost_R1; ?></td>
					<td id="User_R1"></input></td>
				</tr>
				<tr>
					<td hidden id="Row2_ghost"><?php echo $Ghost_R2; ?></td>
					<td><input id="User_R2" placeholder="Puntos entrada 2"></input></td>
				</tr>
				<tr>
					<td hidden id="Row3_ghost"><?php echo $Ghost_R3; ?></td>
					<td><input id="User_R3" placeholder="Puntos entrada 3"></input></td>
				</tr>
			</table>
		</center>
		<center>
			<h3>Total</h3>
			<table class="simulator_table" id="ghost_table">
				<tr>
					<th>Ghost</th>
					<th>Usted</th>
				</tr>
				<tr>
					<td id="ghost_total"></input></td>
					<td id="user_total"></input></td>
				</tr>
			</table>
		<center>


		<!--- Make table data visible --->

		<br>
		<center>
			<button class="shadow__btn" id="end_button">Terminar</button>
		</center>

		<script>
		//End Button Script
		function stop_simulation() {
			//Get Input values by ID
			const user_total = document.getElementById(user_total);
			const ghost_total = document.getElementById(user_total);

			const User_R3 = document.getElementById(User_R3);
			const User_R2 = document.getElementById(User_R2);
			const User_R1 = document.getElementById(User_R1);

			//Check Inputs

			//Check if variables are defined
			if (typeof User_R3 === "undefined" || typeof User_R2 === "undefined" || typeof User_R1 === "undefined") {
				// Display Error
				alert("El Simulador ha tenido un comportamiento inesperado, vuelva a intentarlo recargando la pagina. Si el problema persiste, por favor contacte con el administrador (archery.ghost.simulator@gmail.com). ERROR: The user input variables were not defined correctly.");
				return;
  			}


			//Check if variables are empty 
			if (User_R3.value === "" || User_R2.value === "" || User_R1.value === "") {
				// Display Error
				alert("Para poder finalizar la simulación debe haber terminado todas las entradas y haber introducido todos los puntos. ERROR: One or more variables are empty");
				return;
			}
		}
		document.getElementById("end_button").onclick = stop_simulation;
		</script>
    </div>
	<br>
	</body>
	<footer>
		<center><a href="https://piscinadeentropia.es">Creado por: Isaac Hernán Martí </a></center>
		<center><a href="https://github.com/Isaaker/Ghost_Simulator_ES/blob/main/LICENSE.txt">© CC BY-NC-ND 4.0 </a></center>
	</footer>
</main>

</html>