<html>
<head><title> Registrazione nuovo utente</title></head>
<body>

<form action="risposta_registrazione.php" method="post">
<fieldset>
<legend>Registrazione:</legend>
<table>
<tr>
<td><label for="username">Nome: </label></td>
<td>
<input type="text" name="username" id="username" autofocus size="50" />
</td>
</tr>
<tr>
<td><label for="password">Password: </label> </td>
<td><input type="password" name="password" id="password" size="50" /></td>
</tr>
<tr>
<td><label for="email">Email: </label> </td>
<td><input type="email" name="email" id="email" size="50" /></td>
</tr>
</table>
<input type="submit" name="Submit" value="Invia">
</fieldset>
</form>  

<button onclick="window.open('index.html');">
  Indietro
</button>  
</body>
</html>
