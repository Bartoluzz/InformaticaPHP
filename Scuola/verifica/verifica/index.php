<?php

    if (    !isset($_POST["cognome"])    || 
            !isset($_POST["nome"])       ||
            !isset($_POST["city"])      ||
            !isset($_POST["mese"])       || 
            !isset($_POST["attrazioni"])  ||
            !isset($_POST["giorno"])
    )
    die("Dati personali non inseriti");


    $nome = htmlentities($_POST['nome'], ENT_HTML5, 'ISO-8859-1');
    $cognome = htmlentities($_POST['cognome'], ENT_HTML5, 'ISO-8859-1');
    $city = htmlentities($_POST['city'], ENT_HTML5, 'ISO-8859-1');
    $giorno = htmlentities($_POST['giorno'], ENT_HTML5, 'ISO-8859-1');
    $mese = $_POST["mese"];
    $attrazioni = $_POST["attrazioni"];
    $numAtt = count($attrazioni);
    rsort($attrazioni);

    
    if (    strlen($nome)       == 0   ||
            strlen($cognome)    == 0   ||
            strlen($giorno)     == 0   ||
            strlen($city)       == 0   ||
            count($attrazioni)  == 0   
        )
    die("Dati personali non completi.");


    echo "A " . $city . " il " . $giorno . " del mese di " . $mese . ", hai visitato le seguenti attrazioni turistiche :";
	
    echo "<ul>";
	foreach ($attrazioni as $att) {
		echo "<li>$att</li>";
	}
	echo "</ul>";


    echo "Hai fatto n." . $numAtt . "scelte";

?>