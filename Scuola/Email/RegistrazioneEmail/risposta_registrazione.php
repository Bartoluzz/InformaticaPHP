<?php //verifica l'esistenza dei parametri di ingresso
if (!isset($_POST['username'])) die('manca username');
else $username=$_POST['username'];
if (!isset($_POST['password'])) die('manca password');
else $password=$_POST['password'];
if (!isset($_POST['email'])) die('manca email');
else $email=$_POST['email'];

//genera un codice casuale di conferma
$codice_conferma=rand(-1E+18,+1E+18);
$connection = new PDO("mysql:host=localhost;dbname=utenti","root","");

//$query = "SELECT * FROM utente WHERE username = '$username'";
//$result = $connection->query($query);
//if ($result->num_rows != 0)
//echo " L'utente $username &egrave; gi&agrave;presente nel database.";
//else{
$password = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO utente(username,password,email,confermato,codice_conferma) VALUES ('$username','$password','$email',0,'$codice_conferma')";
$connection->query($query);

//invia mail all'indirizzo fornito
$subject="richiesta registrazione community";
$mailmsg="Caro $username,\r\nper completare la registrazione clicca sul seguente link\r\nhttp://databasexxx.altervista.org/Email2/conferma_registrazione.php?username=$username&codice_conferma=$codice_conferma\r\nCordiali saluti,\r\nl'amministratore della community\r\n";
$headers="From: webmaster@community\r\nReply-To: webmaster@communty\r\n";
@mail($email,$subject,$mailmsg,$headers);
?>

<html>
<head>
<title>Risposta registrazione</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
Grazie per la richiesta di registrazione <b><?php echo $username
?></b><br>
Una mail contenente le istruzioni per completare la registrazione &egrave stata
mandata all'indirizzo <b><?php echo $email ?></b>.<br>
A presto!
</body>
</html>
