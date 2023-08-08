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
	echo "<button> <a href='https://forms.gle/CGVYM4LKMh8xNckEA'>Ayuda</a> </button>" .  "<button> <a href='https://github.com/Isaaker/Ghost_Simulator_ES'>Codigo Fuente</a> </button>" .  "<button> <a href='https://forms.gle/sbXYCztpQM5Qr3VS7'>Registrarse</a> </button>";
	echo "<br>";
	echo '<img src="./images/archery.png" width="100%" height=auto>';
	echo "<hr>";
	echo "<button> <a href=".">Recargar Fantasma</a> </button>" . "<button> <a href='./ghost.php? '>Resetear Categorías</a> </button>" . "<button> <a href='./ghost.php?personalize=true'>Personalizar Fantasma</a> </button>";
	echo "<hr>";
 	//Base de Datos

	//Variable a mostrar
	$category = $_GET["category"];
	$age = $_GET["age"];
	$sex = $_GET["sex"];
	$personalize = $_GET["personalize"];
	$personalize_max = $_GET["personalize_max"];
	$personalize_min = $_GET["personalize_min"];
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

	//Personalize
	if ($personalize == "true"){
		echo "<b>Introducir rango de puntuaciones:</b>";
		echo ""
		echo "<input type="number" name="personalize_max" />"
	}
	//Select
	echo "<b>Selecciona entre las siguientes opciones:</b>";
	echo "<br>";
	echo "Sexo:";
	echo "<br>";
	echo "<button><a href='./ghost.php?sex=h'>Hombre</a></button>" . " " . "<button><a href='./ghost.php?sex=m'>Mujer</a></button>";
	//If URL
	//Sexo
	if ($sex == "h"){
		echo "<br>";
		echo "Categoría:";
		echo "<br>";
		echo "<button><a href='./ghost.php?sex=h&category=c'>Compuesto</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=o'>Olímpico</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=i'>Instintivo</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=lb'>Long Bow</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=d'>Desnudo</a></button>";
		//Compuesto
		if ($category == "c"){
			echo "<br>";
               		echo "Edad:";
                	echo "<br>";
                	echo "<button><a href='./ghost.php?sex=h&category=c&age=s15'>Sub 15</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=c&age=s19'>Sub 19</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=c&age=s21'>Sub 21</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=c&age=a'>Absoluto</a></button>";
			echo "<hr>";
			if ($age == "s15"){
			echo "<b>Arco Compuesto Sub 15 Aire Libre Hombre</b>";
			echo "<br>";
			echo "Puntuacion a batir: " . $ACS15ALH;
			}

			if ($age == "s19"){
			echo "<b>Arco Compuesto Sub 19 Aire Libre Hombre</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $ACS19ALH;
			}

			if ($age == "s21"){
                	echo "<b>Arco Compuesto Sub 21 Aire Libre Hombre</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $ACS19ALH;
                	}

			if ($age == "a"){
                	echo "<b>Arco Compuesto Absoluto Aire Libre Hombre</b>";
               		echo "<br>";
                	echo "Puntuacion a batir: " . $ACAALH;
                	}
		}
		//Olímpico
		if ($category == "o"){
			echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=h&category=o&age=s15'>Sub 15</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=o&age=s19'>Sub 19</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=o&age=s21'>Sub 21</a></button>" . " " . "<button><a href='./ghost.php?sex=h&category=o&age=a'>Absoluto</a></button>";
                        echo "<hr>";
                	if ($age == "s15"){
                	echo "<b>Arco Olímpico Sub 15 Aire Libre Hombre</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOS15ALH;
                	}

                	if ($age == "s19"){
                	echo "<b>Arco Olímpico Sub 19 Aire Libre Hombre</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOS19ALH;
                	}

                	if ($age == "s21"){
                	echo "<b>Arco Olímpico Sub 21 Aire Libre Hombre</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOS19ALH;
                	}

			if ($age == "a"){
                	echo "<b>Arco Olímpico Absoluto Aire Libre Hombre</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOAALH;
                	}
        	}

		//Instintivo
                if ($category == "i"){
                        echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=h&category=i&age=a'>Absoluto</a></button>";
                        echo "<hr>";

                        if ($age == "a"){
                        echo "<b>Arco Instintivo Absoluto Aire Libre Hombre</b>";
                        echo "<br>";
                        echo "Puntuacion a batir: " . $AIAALH;
                        }
		}

		//LongBow
                if ($category == "lb"){
                        echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=h&category=lb&age=a'>Absoluto</a></button>";
                        echo "<hr>";

                        if ($age == "a"){
                        echo "<b>Arco Long Bow Absoluto Aire Libre Hombre</b>";
                        echo "<br>";
                        echo "Puntuacion a batir: " . $ALBAALH;
                        }
                }

		//Desnudo
                if ($category == "d"){
                        echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=h&category=d&age=a'>Absoluto</a></button>";
                        echo "<hr>";

                        if ($age == "a"){
                        echo "<b>Arco Desnudo Absoluto Aire Libre Hombre</b>";
                        echo "<br>";
                        echo "Puntuacion a batir: " . $ADAALH;
                        }
                }
        }

	if ($sex == "m"){
		echo "<br>";
		echo "Categoría:";
		echo "<br>";
		echo "<button><a href='./ghost.php?sex=m&category=c'>Compuesto</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=o'>Olímpico</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=i'>Instintivo</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=lb'>Long Bow</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=d'>Desnudo</a></button>";
		//Compuesto
		if ($category == "c"){
			echo "<br>";
               		echo "Edad:";
                	echo "<br>";
                	echo "<button><a href='./ghost.php?sex=m&category=c&age=s15'>Sub 15</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=c&age=s19'>Sub 19</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=c&age=s21'>Sub 21</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=c&age=a'>Absoluto</a></button>";
			echo "<hr>";
			if ($age == "s15"){
			echo "<b>Arco Compuesto Sub 15 Aire Libre Mujer</b>";
			echo "<br>";
			echo "Puntuacion a batir: " . $ACS15ALM;
			}

			if ($age == "s19"){
			echo "<b>Arco Compuesto Sub 19 Aire Libre Mujer</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $ACS19ALM;
			}

			if ($age == "s21"){
                	echo "<b>Arco Compuesto Sub 21 Aire Libre Mujer</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $ACS19ALM;
                	}

			if ($age == "a"){
                	echo "<b>Arco Compuesto Absoluto Aire Libre Mujer</b>";
               		echo "<br>";
                	echo "Puntuacion a batir: " . $ACAALM;
                	}
		}
		//Olímpico
		if ($category == "o"){
			echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=m&category=o&age=s15'>Sub 15</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=o&age=s19'>Sub 19</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=o&age=s21'>Sub 21</a></button>" . " " . "<button><a href='./ghost.php?sex=m&category=o&age=a'>Absoluto</a></button>";
                        echo "<hr>";
                	if ($age == "s15"){
                	echo "<b>Arco Olímpico Sub 15 Aire Libre Mujer</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOS15ALM;
                	}

                	if ($age == "s19"){
                	echo "<b>Arco Olímpico Sub 19 Aire Libre Mujer</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOS19ALM;
                	}

                	if ($age == "s21"){
                	echo "<b>Arco Olímpico Sub 21 Aire Libre Mujer</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOS19ALM;
                	}

			if ($age == "a"){
                	echo "<b>Arco Olímpico Absoluto Aire Libre Mujer</b>";
                	echo "<br>";
                	echo "Puntuacion a batir: " . $AOAALM;
                	}
        	}

		//Instintivo
                if ($category == "i"){
                        echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=h&category=i&age=a'>Absoluto</a></button>";
                        echo "<hr>";

                        if ($age == "a"){
                        echo "<b>Arco Instintivo Absoluto Aire Libre Mujer</b>";
                        echo "<br>";
                        echo "Puntuacion a batir: " . $AIAALM;
                        }
		}

		//LongBow
                if ($category == "lb"){
                        echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=m&category=lb&age=a'>Absoluto</a></button>";
                        echo "<hr>";

                        if ($age == "a"){
                        echo "<b>Arco Long Bow Absoluto Aire Libre Mujer</b>";
                        echo "<br>";
                        echo "Puntuacion a batir: " . $ALBAALM;
                        }
                }

		//Desnudo
                if ($category == "d"){
                        echo "<br>";
                        echo "Edad:";
                        echo "<br>";
                        echo "<button><a href='./ghost.php?sex=m&category=d&age=a'>Absoluto</a></button>";
                        echo "<hr>";

                        if ($age == "a"){
                        echo "<b>Arco Desnudo Absoluto Aire Libre Mujer</b>";
                        echo "<br>";
                        echo "Puntuacion a batir: " . $ADAALM;
                        }
                }
        }
	//Pie de Pagina
	echo "<hr>";
	echo "<center>© Isaac Hernán Martí</center>";
	echo "<br>";
	echo "<div align='center'>Agradecimientos especiales: Antonio J. Hernán Obispo y  Erica Hernán Martí</div><br>";
	//Conservar esto
	?>
</body>
</html>