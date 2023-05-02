<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (strlen($username) != 0 && strlen($password) != 0){
		$connection = new PDO("mysql:host=localhost;dbname=utenti","root","");
        
        $query = $connection->prepare('SELECT password FROM utente WHERE username =:username');
		$query->bindParam(':username', $username,PDO::PARAM_STR);
        $query->execute();
        $user_row = $query->fetch();      
        
		if (!$user_row) {
			echo "Utente $username sconosciuto: ";
			echo " <a href=\"index.html\"> riprova.</a><br>";
		}
		else { 
		      	if (password_verify($password,$user_row['password'])) {
				echo "Password corretta: ";
				echo " <a href=\"http://www.avolta.pg.it/\"> accedi.</a><br>";
			}
			else {
				echo "Password errata: ";
				echo " <a href=\"index.html\"> riprova.</a>";
			}
		}
		$connection=NULL;
	}
	else {
		echo "Username/password non validi: " ;
		echo " <a href=\"index.html\">riprova.</a>";

	}
?>