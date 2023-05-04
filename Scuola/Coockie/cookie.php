<!DOCTYPE html>
<html>

<body>
    <form method="get">
        Nome: <input type="text" name="nome">
        Città: <input type="text" name="citta">
        Età: <input type="number" name="eta">

        <input type="submit" value="crea" name="crea">
        <input type="submit" value="visualizza" name="visualizza">
        <input type="submit" value="elimina" name="elimina">
    </form>
    <?php

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL | E_STRICT);

    if (isset($_GET["crea"])) { // Verifica che il bottone sia stato premuto

        if ($_GET["nome"] != "") { // Verifica che il campo "nome" non sia vuoto
            $valore_cookie = $_GET["nome"]; // Assegna un valore al cookie
            $scadenza_cookie = time() + 1000; // Imposta la scadenza del cookie (10 secondi)
            setcookie("nome_cookie", $valore_cookie, $scadenza_cookie); // Crea il cookie
            echo "Cookie creato con successo!";
        } else {
            echo "Cookie non creato per mancanza di dati";
        }
    }

    if (isset($_GET["visualizza"])) { // Verifica che il bottone sia stato premuto

        if (isset($_COOKIE["nome_cookie"])) { // Verifica che il cookie esista
            $valore_cookie = $_COOKIE["nome_cookie"];
            echo "Valore del cookie: $valore_cookie";
        } else {
            echo "Il cookie non esiste";
        }
    }

    if (isset($_GET["elimina"])) { // Verifica che il bottone sia stato premuto
        setcookie("nome_cookie", "", time() - 3600); // Elimina il cookie
        echo "Cookie eliminato con successo!";
    }
    ?>
</body>

</html>