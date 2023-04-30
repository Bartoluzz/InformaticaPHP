<!DOCTYPE html>
<html>
<title>tabellina</title>
<body>
	<center>
		<h1 style="color: green;">
			BonaSera
		</h1>

		<h3>
			Programma che calcola la tabellina <br>
			di qualsiasi numero in PHP
		</h3>

		<form method="POST">
			Inserisci un numero:
			<input type="text" name="number">
			
			<input type="Submit"
				value="Tabellina">
		</form>
	</center>
</body>

</html>

<?php
if($_POST) {
	$num = $_POST["number"];
		

	for ($i = 1; $i <= 10; $i++) {
        if($num == 0){
            echo ("<h1 style='text-align: center; color : red'> Errore </h1>");
            break;
        }
           
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p>
		");
	}

}
?>
