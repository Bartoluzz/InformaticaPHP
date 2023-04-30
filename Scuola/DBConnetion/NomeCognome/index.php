<?php

//$matricola=filter_input(INPUT_POST,'matricola', FILTER_SANITIZE_STRING);
//OPPURE
//$matricola=$_POST["matricola"];
// blocco try/catch di gestione delle eccezioni:

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];


function add()
{

    try {

        global $nome;
        global $cognome;

        // stringa di connessione al DBMS
        $connection = new PDO("mysql:host=localhost;dbname=scuola", "root", "");
        // selezione dei dati estratti
        //INSERT INTO `utenti`(`Nome`, `Cognome`) VALUES ('[value-1]','[value-2]')
        $result = $connection->prepare('INSERT INTO utenti VALUES  (:nome , :cognome)');
        $result->bindParam(':nome', $nome, PDO::PARAM_STR);
        $result->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $result->execute();
        //SELECT `Nome`, `Cognome` FROM `utenti` WHERE 1

        $result = $connection->prepare('SELECT *  FROM utenti ');
        $result->execute();

        print("<TABLE BORDER>");
        print("<TR><TD> nome </TD><TD> cognome </TD></TR>");
        // estrazione di record con il metodo fetch
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            print("<TR><TD>" . $row['Nome'] . "</TD>");
            print("<TD>" . $row['Cognome'] . "</TD></TR>");
        }
        print("</TR></TABLE>");
        $connection = null; // chiusura della connessione
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


function remove()
{
    try {


        global $nome;
        global $cognome;

        // stringa di connessione al DBMS
        $connection = new PDO("mysql:host=localhost;dbname=scuola", "root", "");
        // selezione dei dati estratti
        //INSERT INTO `utenti`(`Nome`, `Cognome`) VALUES ('[value-1]','[value-2]')
        $result = $connection->prepare('DELETE FROM utenti WHERE :nome = Nome AND :cognome = Cognome');
        $result->bindParam(':nome', $nome, PDO::PARAM_STR);
        $result->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $result->execute();
        //SELECT `Nome`, `Cognome` FROM `utenti` WHERE 1

        $result = $connection->prepare('SELECT *  FROM utenti ');
        $result->execute();

        print("<TABLE BORDER>");
        print("<TR><TD> nome </TD><TD> cognome </TD></TR>");
        // estrazione di record con il metodo fetch
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            print("<TR><TD>" . $row['Nome'] . "</TD>");
            print("<TD>" . $row['Cognome'] . "</TD></TR>");
        }
        print("</TR></TABLE>");
        $connection = null; // chiusura della connessione
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function show()
{

    $connection = new PDO("mysql:host=localhost;dbname=scuola", "root", "");
    $result = $connection->prepare('SELECT *  FROM utenti ');

    $result->execute();
    print("<TABLE BORDER>");
    print("<TR><TD> nome </TD><TD> cognome </TD></TR>");
    // estrazione di record con il metodo fetch
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        print("<TR><TD>" . $row['Nome'] . "</TD>");
        print("<TD>" . $row['Cognome'] . "</TD></TR>");
    }
    print("</TR></TABLE>");
}

if (isset($_POST["add"]))
    add();

if (isset($_POST["remove"]))
    remove();

if (isset($_POST["show"]))
    remove();


?>

<br><input type="button" onclick=window.history.go(-1) value="go back"> <!-- torna alla pagina prima -->