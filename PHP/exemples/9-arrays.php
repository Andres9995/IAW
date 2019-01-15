<!DOCTYPE html>
<html lang="en">
<body>
    <h1> ARRAYS </h1>
    <br>
    <h3>ARRAYS INDEXADOS</h3>
        <?php
            $cars=array("CAGON","TOLAI","TOYOTO"); //definir valores
            echo "me gusta ".$cars[0]." , ".$cars[1]." , ".$cars[2];
        ?>
    <br>
    <br>
        <?php //CONTAR las casilla que tiene una array
            $cars=array("CAGON","TOLAI","TOYOTO");
            echo count($cars);
        ?>
    <br>
    <h3>BUCLE FOR</h3>
        <?php
            echo "<ul>"; //lista no numerada dentro del array
            $cars=array("CAGON","TOLAI","TOYOTO");   //bucle en una array
            $n=count($cars);
            for($i=0;$i<$n;$i++) {  //asi recorreria la array dependientemente indepentientemente de lo largo que es la array
                echo "<li>".$cars[$i]."</li>";
            }
            echo "</ul>";
        ?>
    <br>
    <h3>ARRAYS ASOCIATIVOS</h3>
        <?php
            $age=array("sergio"=>"21","andres"=>"24"); //aassignar informacion, andres tiene 24
            echo "andres ".$age["andres"]."yearslod.";
        ?>
    <br>
    <h3>ARRAYS ASOCIATIVOS BUCLE</h3>
    <?php
    $age=array("sergio"=>"21","andres"=>"24");
    foreach ($age as $key=>$value){
        echo "key=".$key.", value=".$value;
        echo "<br>";
    }
    ?>

</body>
</html>