<html>
  <head>
    <title>Numeri Primi</title>
  </head>
  <body>
        <form method="post">  
            Inserisci un numero : <br>  
            <input type="number" name="number" id="number">  
            <input type="submit" name="submit" value="Calcola" />  
        </form> 

        <?php
        function primenumber($MyNum) {
          $n = 0;
          if ($MyNum == 2 || $MyNum == 3){
            echo $MyNum." ";
          } 
          elseif ($MyNum % 6 == 1 || $MyNum % 6 == 5) {
            for($i = 2; $i*$i <= $MyNum; $i++) {
              if($MyNum % $i == 0){
                $n++;
                break;
              }
            }

            if ($n == 0){
              echo $MyNum." ";
            } 
          } 
        }


        if($_POST){
          $x = $_POST['number'];
          echo "Prime numbers less than ".$x." are: \n";          
          for($i = 2; $i < $x + 1; $i++) {
            primenumber($i);
          }
        }

        ?>









  </body>  

</html>

