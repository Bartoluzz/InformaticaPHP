<?php 
session_start();
?>

<html>
<head>
    <title></title>
</head>

<body>
    <form method="POST">
        <input type="submit" value="destroy" name="distruggi">
        <input type="submit" value="unset" name="smonta">
    </form>

    <?php 
    $ora = time();

    if (!isset($_SESSION['ora'])) {
        $_SESSION['ora'] = $ora; // Inizializza la variabile "ora" della sessione
    }

    $tempo = $ora - $_SESSION["ora"];
    echo "Sono trascorsi $tempo secondi dall'inizio della sessione<br>";

    if (isset($_POST['distruggi'])) {
        session_destroy();
        echo "Sessione distrutta.";
    }

    if (isset($_POST['smonta'])) {
        session_unset();
        echo "Variabili di sessione smontate.";
    }
    ?>
</body>
</html>
