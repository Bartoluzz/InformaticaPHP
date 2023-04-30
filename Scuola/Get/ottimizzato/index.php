<?php 

    //controllo se sono stati cliccati i vati campi  
    if (    !isset($_GET["cognome"])    || 
            !isset($_GET["nome"])       ||
            !isset($_GET["place"])      ||
            !isset($_GET["mese"])       || 
            !isset($_GET["citazione"])  ||
            !isset($_GET["regioni"])
        )
    die("Dati personali non inseriti");


    $nome      = htmlentities($_GET["nome"], ENT_HTML5, 'ISO-8859-1');
    $cognome   = htmlentities($_GET["cognome"], ENT_HTML5, 'ISO-8859-1');
    $place     = htmlentities($_GET["place"], ENT_HTML5, 'ISO-8859-1');
    $regioni   = $_GET["regioni"];
    $mese      = $_GET["mese"];
    $citazione = htmlentities($_GET["citazione"], ENT_QUOTES);


    //controllo se sono stati compilati i vari campi
    if (    strlen($nome) == 0      ||
            strlen($cognome) == 0   ||
            count($mese) == 0       ||
            strlen($citazione) == 0 ||
            count($regioni) == 0    
        )
    die("Dati personali non completi.");

    echo "Ciao $nome $cognome. <br>";
    echo "Hai scelto il ";
    echo $place .".";
    echo "<br>Precisamente : ";
    for ($i = 0; $i < count($regioni); $i++){ //staccare gli operatori dei metodi 
        echo $regioni[$i];
    }
    echo " nei mesi di ";
    for ( $i= 0;  $i< count($mese); $i++)
        echo $mese[$i]." "; 

    echo "<br>La tua citazione preferita &egrave:<br>";
    echo "<em>$citazione</em><br><br>";
?>