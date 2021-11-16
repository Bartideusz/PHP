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
             }
             for($i = 0; $i <= $liczba; $i++){
             echo pow(2, $liczba);
             }
           ?>
       </body>
</html>