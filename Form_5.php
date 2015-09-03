<?php

       

        $est = $_POST['1'];
        $estudiante2 = $_POST['2'];
        $estudiante3 = $_POST['3'];
        $estudiante4 = $_POST['4'];
        $estudiante5 = $_POST['5'];
        $array = array();
        $array[0] = $est;
        $array[1] = $estudiante2;
        $array[2] = $estudiante3;
        $array[3] = $estudiante4;
        $array[4] = $estudiante5;
        $contador = 0;
        for ($i=0;$i<=4;$i++){
        $array[$i];
                 if ($array[$i]>=18){
                     $contador = $contador+1;
        
                        }
            
        }
    
         echo "<br/>HAY ".$contador." PERSONAS MAYORES DE 18<br/>"; 
        
        $media = ($est+$estudiante2+$estudiante3+$estudiante4+$estudiante5)/5;
        echo "LA MEDIA DE LAS EDADES ES ".$media." AÑOS";
        //ALTURA
        
        
        $estudianteA1 = $_POST['A1'];
        $estudianteA2 = $_POST['A2'];
        $estudianteA3 = $_POST['A3'];
        $estudianteA4 = $_POST['A4'];
        $estudianteA5 = $_POST['A5'];
        $m2 = ($estudianteA1+ $estudianteA2+$estudianteA3+$estudianteA4+ $estudianteA5)/5;
        echo "<br/>";
        echo "<br/>";
         echo "LA MEDIA DE LA ALTURA ES ".$m2." METROS";
         echo "<br/>";
        $st = array();
        $st[0] =  $estudianteA1;
        $st[1] =  $estudianteA2;
        $st[2] =   $estudianteA3 ;
        $st[3] = $estudianteA4;     
        $st[4] = $estudianteA5 ;
         $RESU = 0;
         $JA = 1.75;
       for($n =0;$n<=4;$n++){
           
         if  ($st[$n] == $JA){
             $RESU = $RESU+1;
         }
           
       }
       echo "HAY ".$RESU. " ESTUDIANTES QUE MIDEN 1.75";
                
         
         

?>
