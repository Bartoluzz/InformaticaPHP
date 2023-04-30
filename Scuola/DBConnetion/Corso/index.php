<?php
    $MonteOre=filter_input(INPUT_POST,'MonteOre',FILTER_SANITIZE_NUMBER_INT);
    //$MonteOre=$_POST["MonteOre"];

    
    try{
        $connection= new PDO("mysql:host=localhost;dbname=my_bartolinicompany","root","");
        $result = $connection->prepare('SELECT CodCorso, MonteOre FROM corso WHERE MonteOre>:MonteOre');
        $result->bindParam(':MonteOre', $MonteOre, PDO::PARAM_INT);
        $result->execute();

        print("<TABLE BORDER>");
        print("<TR><TD> CodCorso</TD><TD> MonteOre </TD><TR>");
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            print("<TR><TD>".$row['CodCorso']."</TD>");
            print("<TD>".$row['MonteOre']."</TD></TR>");
        } 
        print("</TR></TABLE>");


        $conntection = null;

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>