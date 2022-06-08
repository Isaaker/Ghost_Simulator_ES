<!doctype html>
<html
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<link href="./images/favicon.ico" rel="shortcut icon"/>
<title>Ghost Archery Simulator</title>
</head>

<body>
	<?php
	//Desing Settings
	//Head2
	echo '<img src="./images/archery.png" width="1500px" height="300px">';
	echo "<hr>";
	echo "<h3><a href=".">Recargar fantasmas</a></h3>";
	echo "<hr>";
 	//Base de Datos

	//Sub15

	//ArcoCompuestoSub15AireLibreHombre
	$ACS15ALH = rand(127 , 150);

        //ArcoCompuestoSub15AirelibreMujer
        $ACS15ALM = "No Data";

        //Arco Olimpico Sub 15 Aire Libre Hombre
        $AOS15ALH = rand(27 , 30 );

        //ArcoOlimpicoSub15AireLibreMujer
        $AOS15ALM = rand(25 , 30);

	//Sub19

	//ArcoCompuestoSub19AireLibreHombre
	$ACS19ALH = rand(140 , 150);

	//ArcoCompuestoSub19AireLibreMujer
	$ACS19ALM = rand(135 , 150);

	//ArcoOlimpicoSub19AireLibrHombre
	$AOS19ALH = rand(27 , 30);

	//ArcoOlimpicoSub19AireLibreMujer
	$AOS19ALM = rand(26, 30);

	//Sub21

	//ArcoCompuestoSub21AireLibreHombre
	$ACS21ALH = rand(140 , 150);

	//ArcoCompuestoSub21AireLibreMujer
	$ACS21ALM = rand(131 , 150);

	//ArcoOlimpicoSub21AireLibreHombre
	$AOS21ALH = rand(24, 30);

	//ArcoOlimpicoSub21AireLibreMujer
	$AOS21ALM = rand(25, 30);

	//Absoluto

	//ArcoCompuestoAbsolutoAireLibreHombre
	$ACAALH = rand(141, 150);

	//ArcoCompuestoAbsolutoAireLibrMujer
	$ACAALM = rand(136, 150);

	//ArcoOlimpicoAbsolutoAireLibreHombre
	$AOAALH = rand(26, 30);

	//ArcoOlimpicoAbsolutoAireLibreMujer
	$AOAALM = rand(26, 30);

	//ArcoInstintivoAbsolutoAireLibreHombre
	$AIAALH = rand(24, 30);

	//ArcoInstintivoAbsolutoAireLibreMujer
	$AIAALM = rand(23, 30);

	//ArcoLongBowAbsolutoAireLibreHombre
	$ALBAALH = rand(24, 30);

	//ArcoLongBowAbsolutoAireLibreMujer
	$ALBAALM = rand(23, 30);

	//ArcoDesnudoAbsolutoAireLibreHombre
	$ADAALH = rand(24, 30);

	//ArcoDesnudoAbsolutoAireLibreMujer
	$ADAALM = rand(20, 30);


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
        echo "Puntuación a Batir: " .  $AOS15ALH. " (Set)";
	echo "<br>";

	//ArcoOlimpicoSub15AireLibreMujer
	//Variable: $AOS15ALM
	echo "<b>Arco Olimpico  Sub 15 Aire Libre Mujer</b>";
	echo "<br>";
	echo "Puntuación a Batir: " .  $AOS15ALM. " (Set)";
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
        echo "Puntuación a Batir: " .  $AOS19ALH. " (Set)";
        echo "<br>";

	//ArcoOlimpicoSub19AireLibreMujer
        //Variable: $AOS19ALM
        echo "<b>Arco Olimpico  Sub 19 Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $AOS19ALM. " (Set)";


	//Junior
	echo "<hr>";
	echo "<b> > 21 </b>";
	echo "<hr>";

	//ArcoCompuestoSub21AireLibreHombre
	echo "<b>Arco Compuesto  Sub 21 Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $ACS21ALH. " (Round Completo)";
        echo "<br>";

	//ArcoCompuestoSub21AireLibreMujer
        echo "<b>Arco Compuesto  Sub 21 Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $ACS21ALM. " (Round Completo)";
        echo "<br>";

	//Olimpico
	echo "<hr>";


	//ArcoOlimpicoSub21AireLibreHombre
	echo "<b>Arco Olimpico Sub 21 Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $AOS21ALH. " (Round Completo)";
        echo "<br>";

	//ArcoOlimpicoSub21AireLibreMujer
	echo "<b>Arco Olimpico Sub 21 Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " .  $AOS21ALM. " (Round Completo)";
        echo "<br>";

	//Absoluto
        echo "<hr>";
        echo "<b> Absoluto </b>";
        echo "<hr>";

	//Compuesto

	//ArcoCompuestoAbsolutoAireLibreHombre
        echo "<b>Arco Compuesto  Absoluto Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ACAALH . " (Round Completo)";
        echo "<br>";

	//ArcoCompuestoAbsolutoAireLibreMujer
        echo "<b>Arco Compuesto  Absoluto Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ACAALM . " (Round Completo)";
        echo "<br>";

	//Olimpico
	echo "<hr>";

	//ArcoOlimpicoAbsolutoAireLibreHombre
	echo "<b>Arco Olimpico Absoluto Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $AOAALH . " (Set)";
        echo "<br>";


	//ArcoOlimpicoAbsolutoAireLibreMujer
        echo "<b>Arco Olimpico Absoluto Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $AOAALM . " (Set)";
        echo "<br>";

	//Instintivo
	echo "<hr>";

	//ArcoInstintivoAbsolutoAireLibreHombre
        echo "<b>Arco Instintivo Absoluto Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $AIAALH . " (Set)";
        echo "<br>";


	//ArcoInstintivoAbsolutoAireLibreMujer
        echo "<b>Arco Instintivo Absoluto Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $AIAALM . " (Set)";
        echo "<br>";

	//Arco LongBow
	echo "<hr>";

	//ArcoLongBowAbsolutoAireLibreHombre
	echo "<b>Arco Long Bow Absoluto Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ALBAALH . " (Set)";
        echo "<br>";

	//ArcoLongBowAbsolutoAireLibreMujer
        echo "<b>Arco Long Bow Absoluto Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ALBAALM . " (Set)";
        echo "<br>";


	//Arco Desnudo
	echo "<hr>";


	//ArcoDesnudoAbsolutoAireLibreHombre
        echo "<b>Arco Desnudo Absoluto Aire Libre Hombre</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ADAALH . " (Set)";
        echo "<br>";

	//ArcoDesnudoAbsolutoAireLibreMujer
        echo "<b>Arco Desnudo Absoluto Aire Libre Mujer</b>";
        echo "<br>";
        echo "Puntuación a Batir: " . $ADAALM . " (Set)";



	//Pie de Pagina
	echo "<hr>";
	echo "Creado por: " . '<a href="https://piscinadeentropia.es">Isaaker</a>' . " y " . '<a href="https://pruebadeconcepto.es">Antonio Hernán</a>' .  " | Funciona con: " . '<a href="https://www.php.net">PHP</a>' . " | " . '<a href="https://github.com/Isaaker/Ghost_Simulator_ES">Codigo Fuente</a>' . " | Datos procedentes de: " . '<a href="https://www.ianseo.net">I@nseo</a>' . " | Esta Web se ha creado sin colaboración de niguna federación y se alamacena en un servidor privado";

	//Conservar esto
	?>
</body>
</html>
