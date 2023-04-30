<?php   

    error_reporting (0);
    ini_set('display_error', '0');
 

    if($_GET['age'] == 'on'){
        $boolean = "Si";
    }
    else {
        $boolean = "No";
    }


    echo 'Il nome : ' . $_GET['nome'] . '<br>';
    echo 'Il cognome : ' .$_GET['cognome'] . '<br>';
    echo 'Maggiorenne : ' . $boolean   . '<br>';

?>   
