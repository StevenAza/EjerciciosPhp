
<body style ="text-align: center;font-family: Century Gothic;font-size: 18px">
<center>

<form id="form1" name="form1" method="post" action="">
    
    
    
    
     
          <label><h2>INGRESE EL NÚMERO</h2></label>
        <input type="text" name="numero" name ="numero" />
        
   
     
        <input type="submit" value="Enviar" />
        
        
</form>
        </center>
            </body>
<?php
if (!empty($_POST["numero"])) {
    
	 $numero = $_POST["numero"];
         $cadena = (string)$numero;
         $result =  strrev($cadena);
         echo"<h1><center> El valor al reves es:</h1><h2><center>$result</center></h2></center><br/>";
         echo "<a href = 'index.php' style ='text-decoration: none'>MENÚ PRINCIPAL</a>";
         
         
}
         
         
         
            
                  
    
         
 
?>
