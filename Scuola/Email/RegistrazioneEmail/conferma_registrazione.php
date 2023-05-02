<?php //verifica l'esistenza dei parametri di ingresso
if (!isset($_GET['username'])) die('manca username');
else $username=$_GET['username'];
if (!isset($_GET['codice_conferma'])) die('manca codice conferma');
else $codice_conferma=$_GET['codice_conferma'];
//cerca utente in banca dati
$connection = new PDO("mysql:host=localhost;dbname=utenti","root","");
$query="SELECT * FROM utente WHERE username='$username' AND codice_conferma='$codice_conferma'";
$result=$connection->query($query);
foreach($result as $row){
$email=$row['email'];
//convalida l'utente
$query="UPDATE utente SET confermato=1 WHERE username='$username'";
$result=$connection->query($query);

//invia un email all'indirizzo specificato
$subject="conferma registrazione community";
$mailmsg="Registrazione completata $username\r\nCordiali
saluti,\r\nl'amministratore della community\n";
$headers="From: webmaster@community\r\nReply-To: webmaster@communty\r\n";
mail($email,$subject,$mailmsg,$headers);
}
?>
<html>
<head><title>Conferma registrazione</title></head>
<body>
<p>Grazie per la registrazione <b><?php echo $username ?></b><br>
Ora puoi accedere alle aree autenticate usando la tua username e password.</p>
<p><a href="index.html">indietro</a><br>
</p>
</body>
</html>
