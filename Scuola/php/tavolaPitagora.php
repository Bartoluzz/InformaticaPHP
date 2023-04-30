<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>tavola pitagorica </title>
    </head>
    <!--CSS PER I BORDI DELLE CELLE-->
    <style> 
    td, th 
        {
         border: 1px solid #dddddd;
         text-align: center;
         padding: 5px;
        }
    </style>
    <body>
     
 
<?php
    //--FUNZIONE PER LA STAMPA DELLA TAVOLA
    function tavolaPitagorica()
    {
        $tavola;
        ?><table><?php
        for($i = 1; $i <= 10; $i++)
        {
            ?>
            <tr><?php
            for($y = 1; $y <= 10; $y++)
            {
                ?><td><?php echo ($i*$y);?></td><?php
            }
            ?></tr><?php
        }
        ?></table><?php
    }
 

tavolaPitagorica();
 
 
?>
         
         
    </body>
</html>