<?php   

    error_reporting (0);
    ini_set('display_error', '0');
 

    if($_POST['age'] == 'on'){
        $boolean = "Si";
    }
    else {
        $boolean = "No";
    }


    echo 'Il nome : ' . $_POST['nome'] . '<br>';
    echo 'Il cognome : ' .$_POST['cognome'] . '<br>';
    echo 'Maggiorenne : ' . $boolean   . '<br>';

?>   
