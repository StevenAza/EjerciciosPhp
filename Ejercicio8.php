<html>
<body style ="text-align: center;font-family: Century Gothic;font-size: 18px">

<center>
    
   
    <h1>ALGORITMO DE LA LAPTOP</h1>
    
    <form method="post" action="Ejercicio8.php">
      
         <h2>INGRESE A CONTINUACIÓN EL VALOR DE LA LAPTOP</h2>
        <input type="text" name="Valor" />
   <br/>
        <input type="submit"  value="Enviar" />
        
     <br/>
         </center>
</body>
</html>
          <?php 
         
		 
   
 if (!empty($_POST["Valor"])) {
	$Vinicial = $_POST["Valor"];
  	 
	$impuesto = $Vinicial + 300;
	$impuestoS = $Vinicial + 30;
	$Soldados = $Vinicial * 0.05;
	$valorTotal = $impuesto + 30 + $Soldados ;
	  echo"<center>EL VALOR DE LA LAPTOP ES : $valorTotal </center><br/>";
          echo "<a href = 'index.php' style ='text-decoration: none'>MENÚ PRINCIPAL</a>";
          
 }
   ?>
      

