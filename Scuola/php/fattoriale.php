<html>  
    <head>  
        <title>Fattoriale di un numero </title>  
    </head>  
    <body>  
        <form method="post">  
            Inserisci un numero : <br>  
            <input type="number" name="number" id="number">  
            <input type="submit" name="submit" value="Calcola" />  
        </form>  
    <?php   
        if($_POST){  
            $fact = 1;  
            //getting value from input text box 'number'  
            $number = $_POST['number'];  
              
            //start loop  
            for ($i = 1; $i <= $number; $i++){ 
                if($number > 10)        
                    break;
                $fact = $fact * $i;  
                if($i==$number){
                    echo "Fattoriale di  $number:<br><br>";
                    echo $fact . "<br>";
                }
            }  
              
        }  
    ?>  
    </body>  
</html>  