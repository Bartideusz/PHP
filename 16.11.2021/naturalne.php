<!DOCTYPE html>
<html>
    <head>
    </head>
       <body>
           <form action = " " method = "post">
           Podaj liczbę: <input type = "number" name = "liczba">
           <input type = "submit" value = "Wyślij">
</form>
           <?php
           if(!empty($_POST['liczba'])){
               $liczba = $_POST['liczba'];
               $x = $liczba - 1;
           }
           for ($x; $x <= 0; $x--){
               echo $x;
           }
           ?>
       </body>
</html>