<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    
    <body>
        <?php
        function espacios($espacio){
            for($i=0; $i<2*$espacio-1; $i++){
                echo "&nbsp";
            }
        }
        
        function ceros($espacio){
            for($i=0; $i<2*$espacio-1; $i++){
                echo "0";
            }
        }
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"."*";
        for($espacio=0; $espacio<10; $espacio=$espacio+1){
            espacios(10-$espacio);
            ceros($espacio);
            echo "<br>";
        }
        ?>
    </body>
</html>
