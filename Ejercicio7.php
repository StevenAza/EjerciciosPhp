
<html>
    <head>
        <title></title>
    </head>
    <body style ="text-align: center;font-family: Century Gothic;font-size: 18px">
        <form action="Ejercicio7.php" method="POST">
              
            <h1>INGRESE EL NÚMERO(ESTE CORRESPONDE A MILLAS)</h1>
           
            <br/>
             <input  TYPE ="text" name="millas">
            <input type="submit" name ="enviar"> 
        </form>
    </body>
</html>







<?php

 if (!empty($_POST['millas'])){
$millas = $_POST['millas'];
$milimetros= $millas * 1609000;
$centimetros= $millas * 160930 ;
$metros = $millas * 1609.344 ;
$pies=$millas* 5280;
$pulgadas=$millas* 63360;

ECHO "<center>";
echo  "EN MILIMETROS ES: $milimetros</center></h1><br/>";
echo  "EN CENTIMETROS ES: $centimetros<br/><br/>";
echo  "EN METROS ES: $metros<br/> </br>";
echo  "A PIES ES : $pies</br><br/>";
echo  "A PULGADAS ES : $pulgadas</br><br/>";
ECHO "</center>";
 }
?>








