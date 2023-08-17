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

<!--- Check JavaScript --->
<noscript>
	<meta http-equiv="refresh" content="0;URL='./javascript_disabled.html'" />
</noscript>

<!--- CSS Style --->
<link rel="stylesheet" type="text/css" href="simulator.css">

<title>Ghost Archery Simulator</title>
</head>

<main>
	<body>

    <script>
    function checkArguments() {
        // Get the query string from the URL
        const queryString = window.location.search;

        // Split the query string into an object
        for (const [key, value] of queryString.split('&').map(entry => entry.split('='))) {
        if (key === '') {
          queryObject.first_argument = value;
        } else {
          queryObject[key] = value;
        }

        // Check if the required arguments are present in the query string
        if (!queryObject.hasOwnProperty('max_points') || !queryObject.hasOwnProperty('min_points') || !queryObject.hasOwnProperty('type') || !queryObject.hasOwnProperty('location') || !queryObject.hasOwnProperty('modality')) {
          // If the required arguments are not present, show an alert and redirect to the home page
          alert('La configuracion del simulador no se realizo correctamente, ERROR: Arguments required max_points, min_points, location, type y modality.');
          window.location.href = './home.html';
          return;
        }

        // Check if the max_points and min_points arguments are numbers
        if (!isNaN(queryObject.max_points) && !isNaN(queryObject.min_points)) {
          // The max_points and min_points arguments are numbers
        } else {
          // The max_points and min_points arguments are not numbers
          alert('No se completo la configuracion de puntos correctamente, ERROR: The max_points and min_points argument must be either numbers');
          window.location.href = './home.html';
          return;
        }

        // Check if the location argument is indoor or outdoor
        if (queryObject.location === 'indoor' || queryObject.location === 'outdoor') {
          // The location argument is valid
        } else {
          // The location argument is not valid
          alert('No se completo la configuracion de localizacion correctamente, ERROR: The location argument must be either outdoor or indoor');
          window.location.href = './home.html';
          return;
        }

        // Check if the type argument is competitions or qualifiers
        if (queryObject.type === 'competitions' || queryObject.type === 'qualifiers') {
          // The type argument is valid
        } else {
          // The type argument is not valid
          alert('No se completo la configuracion de localizacion correctamente, ERROR: The type argument must be either competition or qualifiers');
          window.location.href = './home.html';
          return;
        }

        // Check if the modality argument is other or compound
        if (queryObject.modality === 'other' || queryObject.modality === 'compound') {
          // The modality argument is valid
        } else {
          // The modality argument is not valid
          alert('No se completo la configuracion de localizacion correctamente, ERROR: The modality argument must be either other or compound');
          window.location.href = './home.html';
          return;
        }

        // Check if the competition_split argument is true
        if (queryObject.competition_split === 'true') {
          // The competition_split argument is valid
        } else {
          // The competition_split argument is not valid
          alert('No se completo la configuracion correctamente, ERROR: The competition split argument should only be included in the URL if it has the value true');
          window.location.href = './home.hmtl';
          return;
        }

        // All the arguments are valid
        return true;
      }
    }

    // Call the checkArguments function when the page loads
    window.onload = checkArguments;
    </script>


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
        echo 'Modalidad: Olímpico, Tradiciónal, LogBow o Desnudo';
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



      // Ghost Data Display
      echo '
      <table style="simulator_table" id="ghost_table">
         <center>
           <h1>Ghost</h1>
         </center>
         <tr>
           <th>Entrada</th>
           <th>Total</th>
         </tr>
         <tr>
           <td>Celda 1</td>
           <td>Celda 2</td>
         </tr>
         <tr>
           <td>Celda 3</td>
           <td>Celda 4</td>
         </tr>
      </table>
      ';

      
      ?>


      <!--- Control Table --->
      <script>
      // This function will add a line to the two tables
      function addLine() {
        // Get the first table
        var ghost_table = document.getElementById("ghost_table");

        // Create a new row
        var row = document.createElement("tr");

        // Add two cells to the row
        var cell1 = document.createElement("td");
        var cell2 = document.createElement("td");

        // Set the text content of the cells
        cell1.textContent = "New line 1";
        cell2.textContent = "New line 2";

        // Add the row to the table
        row.appendChild(cell1);
        row.appendChild(cell2);

        ghost_table.appendChild(row);

        // Get the second table
        var user_table = document.getElementById("user_table");

        // Create a new row
        var row = document.createElement("tr");

        // Add two cells to the row
        var cell1 = document.createElement("td");
        var cell2 = document.createElement("td");

        // Set the text content of the cells
        cell1.textContent = "New line 1";
        cell2.textContent = "New line 2";

        // Add the row to the table
        row.appendChild(cell1);
        row.appendChild(cell2);

        ghost_table.appendChild(row);
      }

      // Add an event listener to the "addButton" button
      document.getElementById("next_button").addEventListener("click", addLine);
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
