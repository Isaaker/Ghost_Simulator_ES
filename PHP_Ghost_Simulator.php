<!doctype html>
<html
<head>
<meta charset="utf-8">
<title>Ghost Archery Simulator</title>
</head>

<body>
	<?php
	//Conservar esto
	//Head2
	echo "<h1> Ghost Archery Simulator </h1>";
	echo "<hr>";
 	//Variables

	//ArcoCompuestoSub15AireLibreHombre
	$ACS15AH = rand(127 , 150);

        //ArcoCompuestoSub15AirelibreMujer
        $ACS15ALM = "No Data";

        //Arco Olimpico Sub 15 Aire Libre Hombre
        $AOS15ALH = rand(27 , 30 );

        //ArcoOlimpicoSub15AireLibreMujer
        $AOS15ALM = rand(25 , 30);
        //Echos

        //Exterior
	echo "<h2> Aire Libre</h2>";
        echo "<hr>";
	//Menores
	//echo "<h3> > 14</h3>";
        //echo "<hr>";
	//Compuesto
	echo "<h4> Arco Compuesto</h4>";
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
	echo "<h4> Arco Olimpico</h4>";
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
	//Conservar esto
	?>
