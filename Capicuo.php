<html>
    <head>
        <title>Capicuo</title>
    </head>
    <body style ="text-align: center;font-family: Century Gothic;font-size: 18px">
    <center>
        <form action="Capicuo.php" method="GET">
        <p>INGRESE UN NÚMERO ENTRE 0 Y 9999</p>
        
        <br/>
        
        <input type="text" name="numero">
        <input type ="submit" name="boton" value ="Enviar">
        
        </form>
        
        </center>

    </body>
</html>








          <?php
ECHO "<center>";
	 if (!empty($_GET["numero"])) {
	  $numero = $_GET ["numero"];
	  $numero2 = strrev ($numero);
     if ($numero == $numero2) {
	  echo '<p>'; 
         echo "EL NUMERO : ".$numero.", ES CAPICUO";
     echo '</p>';
          
	  } else {
	 echo "EL NUMERO  $numero ES CAPICUO";	 
	 }
 }
 echo "<a href = 'index.php' style ='text-decoration: none'>MENÚ PRINCIPAL</a>";
 echo "</center>"

	?>




