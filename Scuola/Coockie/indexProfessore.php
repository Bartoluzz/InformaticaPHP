<!DOCTYPE html> 
<?php	// esempio tratto da https://www.w3schools.com/php/php_cookies.asp
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time()+10); // la funzione setcookie() deve apparire prima del tag <html>
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) { // controlla se � stato definito il cookie con un determinato nome
     echo "Cookie named '" . $cookie_name . "' is not set!";
} 
else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name]; // visualizza il valore del cookie memorizzato nell'array $_COOKIE
}
echo "<br>";

if(count($_COOKIE) > 0) { // metodo alternativo per verificare se esistono cookie in memoria
  echo "***Cookies are enabled***"; //esiste almeno un cookie nell'array $_COOKIE
} else {
  echo "***Cookies are disabled***";
}

?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>X-UA-Compatible