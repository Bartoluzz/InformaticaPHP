<?php

//creare un array dei corso dello studente 
//Restituire la seguente frase
//"Lo studente ............della classe ......., 
//ha scelto di iscriversi a n. ....... corsi:".

//Elencare infine i corsi scelti dallo studente ordinati alfabeticamente.


    $nome = $_POST["Nome"];
    $cognome = $_POST["Cognome"];
    $classi = $_POST["classi"];
    $corso = $_POST["corso"];
    $numeroCorsi = count($corso);
    sort($corso);

    echo "Lo studente: " . $nome . " ". $cognome ." della classe ". $classi . " ha deciso di iscriversi a n." .$numeroCorsi." corsi : ";

    for($i=0;$i < count($corso); $i++){
        echo $corso[$i] ." ";
    }
?>

