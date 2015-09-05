<html>
<body  style ="text-align: center;font-family: Century Gothic;font-size: 18px">
    
    
 <center>
     <form  action="Kilometros.php" name="form1" method="post" >
   
        
      
        
        <label><h2>INGRESE EL TOTAL DE KILOMETROS RECORRIDOS:</h2></label>
        <input type="text" name="kilometros" id="kilometros" />
     
          <br/>
        <input type="submit" value="ENVIAR" />
    </form>
    </center>
      </body>
      </html>
        <?php
        
    if (!empty($_POST["kilometros"])) {
       $kilometros= $_POST["kilometros"];
     $litros=1/16.4;
     $resultado=$litros;
     $total=$resultado*$kilometros;
     
     $total = round($total);
     echo $total." son el total de litros gastados";
     
        }

        ?>
