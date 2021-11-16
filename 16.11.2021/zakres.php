<!DOCTYPE html>
<html>
    <head>
    </head>
       <body>
           <?php
           $w = 0;
              for($i = 0; $i <= 150; $i+=2){
                 echo $i." ";
                 $w += $i;
              }
              echo "Suma liczb wynosi: ".$w;
           ?>
       </body>
</html>