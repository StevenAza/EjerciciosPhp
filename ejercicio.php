<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
        
        $segundos = 800*24*60*60;
        $distancia = $segundos*299792;
        $resultado = $distancia/100;
        echo '<p style = "font-family:Century Gothic; color: gray;text-align:center;font-size:30px">La distancia que recorre la luz en 800 días es igual a : '.$resultado."</p>";
        echo '<a href = "Menu.php">MENÚ PRINCIPAL</a>';
        
        ?>
    </body>
</html>
