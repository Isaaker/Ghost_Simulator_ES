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

		<!--- Unsaved Changes Alert --->

		<script>
			"use strict";
			(() => {
			const modified_inputs = new Set;
			const defaultValue = "defaultValue";
			// store default values
			addEventListener("beforeinput", (evt) => {
				const target = evt.target;
				if (!(defaultValue in target || defaultValue in target.dataset)) {
						target.dataset[defaultValue] = ("" + (target.value || target.textContent)).trim();
				}
			});
			// detect input modifications
			addEventListener("input", (evt) => {
				const target = evt.target;
				let original;
				if (defaultValue in target) {
						original = target[defaultValue];
				} else {
						original = target.dataset[defaultValue];
				}
				if (original !== ("" + (target.value || target.textContent)).trim()) {
						if (!modified_inputs.has(target)) {
								modified_inputs.add(target);
						}
				} else if (modified_inputs.has(target)) {
						modified_inputs.delete(target);
				}
			});
			// clear modified inputs upon form submission
			addEventListener("submit", (evt) => {
				modified_inputs.clear();
				// to prevent the warning from happening, it is advisable
				// that you clear your form controls back to their default
				// state with evt.target.reset() or form.reset() after submission
			});
			addEventListener("save_button", (evt) => {
				modified_inputs.clear();
				// to prevent the warning from happening, it is advisable
				// that you clear your form controls back to their default
				// state with evt.target.reset() or form.reset() after submission
			});
			// warn before closing if any inputs are modified
			addEventListener("beforeunload", (evt) => {
				if (modified_inputs.size) {
						const unsaved_changes_warning = "Si sale ahora los datos de la simulacion no se guardaran";
						evt.returnValue = unsaved_changes_warning;
						return unsaved_changes_warning;
				}
			});
			})();
		</script>

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
				if ( $location != "outdoor"){
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
			<button class="shadow__btn" id="save_button">Guardar</button>
		</center>

		<script>
		//End Button Script
		function stop_simulation() {



			//Disable Unsaved changes alert
			disable_unsaved_alert()
		}
		document.getElementById("save_button").onclick = stop_simulation();
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
