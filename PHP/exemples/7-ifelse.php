<!DOCTYPE html>
<html lang="en">
<body>
    <h1> PLANTILLA </h1>
        <?php
            $t=date("H:m"); //para enseñar la hora, y minutos
        if ($t<"20")
            {
                echo "son menos de las 20, "." son las ".$t;
            }
        else {
                echo "son mas de las 20, "." son las ".$t;
            }
        ?>

        <?php
            $t=date("H:m"); //para enseñar la hora, y minutos
         if ($t<"10")
            {
                echo "son menos de las 10, "." son las ".$t;
            }
         else if($t<"20")
         {
             echo "menos de las 20".$t;
         }
        else {
                echo "mas tarde de las 20".$t;
            }
        ?>
</body>
</html>