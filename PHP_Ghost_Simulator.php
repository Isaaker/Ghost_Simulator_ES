<!doctype html>
<html
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<title>Ghost Archery Simulator</title>
</head>

<body>
	<?php
	//Desing Settings
	//Head2
	echo "<h1> Ghost Archery Simulator </h1>";
	echo "<hr>";
 	//Variables

	//ArcoCompuestoSub15AireLibreHombre
	$ACS15ALH = rand(127 , 150);

  //ArcoCompuestoSub15AirelibreMujer
  $ACS15ALM = "No Data";

  //Arco Olimpico Sub 15 Aire Libre Hombre
  $AOS15ALH = rand(27 , 30 );

  //ArcoOlimpicoSub15AireLibreMujer
  $AOS15ALM = rand(25 , 30);

	//ArcoCompuestoSub19AireLibreHombre
	$ACS19ALH = rand(140 , 150);

	//ArcoCompuestoSub19AireLibreMujer
	$ACOS19ALM = rand(135 , 150);

	//ArcoOlimpicoSub19AireLibrHombre
	$AOS19ALM = rand(27 , 30);

	//ArcoOlimpicoSub19AireLibreMujer
	$AOS19ALM = rand(26, 30);

        //Echos

        //Exterior
	echo "<h2> Aire Libre</h2>";
        echo "<hr>";

	//Menores
	echo "<b>> 14</b>";
	echo "<hr>";

        //ArcoCompuestoSub15AireLibreHombre
        //Variable: $ACS15ALH
        echo "<b>Arco Compuesto Sub 15 Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ACS15ALH . " (Round Completo)";
        echo "<br>";

        //ArcoCompuestoSub15AirelibreMujer
        //Variable: $ACS15ALM
        echo "<b>Arco Compuesto Sub 15 Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: DATA NOT AVAILABLE";
        echo "<br>";

	//Olimpico
        echo "<hr>";

	//ArcoOlimpicoSub15AireLibreHombre
	//Variable: $AOS15ALH
	echo "<b>Arco Olimpico  Sub 15 Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $AOS15ALH. " (Round Completo)";
	echo "<br>";

	//ArcoOlimpicoSub15AireLibreMujer
	//Variable: $AOS15ALM
	echo "<b>Arco Olimpico  Sub 15 Aire Libre Mujer</b>";
	echo "<br>";
	echo "Puntuación a Batir: " .  $AOS15ALM. " (Round Completo)";
	echo "<br>";

	//Cadete
	echo "<hr>";
        echo "<b> > 19</b>";
        echo "<hr>";

	//ArcoCompuestoSub19AireLibreHombre
	echo "<b>Arco Compuesto  Sub 19 Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $ACS19ALH. " (Round Completo)";
        echo "<br>";

	//ArcoCompuestoSub19AireLibreMujer
        echo "<b>Arco Compuesto  Sub 19 Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $ACS19ALM. " (Round Completo)";
        echo "<br>";

	//Olimpico
	echo "<hr>";

	//ArcoOlimpicoSub19AireLibreHombre
        //Variable: $AOS19ALH
        echo "<b>Arco Olimpico  Sub 19 Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $AOS19ALH. " (Round Completo)";
        echo "<br>";

	//ArcoOlimpicoSub19AireLibreMujer
        //Variable: $AOS19ALM
        echo "<b>Arco Olimpico  Sub 19 Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $AOS19ALM. " (Round Completo)";

	//Conservar esto
	?>
</body>
</html>
