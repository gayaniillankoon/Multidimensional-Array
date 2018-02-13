<!DOCTYPE html>
<html>
<body>
<?php
$marks =array("Gayani"=>array("Physics"=> 75,
                              "Maths"=> 65,
                              "Chemistry"=> 82),
             "Nayani"=>array("Physics"=> 45,
                              "Maths"=> 69,
                              "Chemistry"=> 80),
             "Jayani"=>array("Physics"=> 70,
                              "Maths"=> 85,
                              "Chemistry"=> 93)
         );
/*Accessing multi-dimension array values*/
echo "marks for Gayani in Physics:";
echo $marks['Gayani']['Physics']."<br/>";          
echo "marks for Nayani in Maths:";
echo $marks['Nayani']['Maths']."<br/>";  
echo "marks for Jayani in Chemistry:";
echo $marks['Jayani']['Chemistry']."<br/>";  

?>
</body>
</html>