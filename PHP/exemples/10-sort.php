<!DOCTYPE html>
<html lang="en">
<body>
    <h1> SORT CON ARRAYS ASCENDENTE </h1>
        <?php
            $cars=array("Volvo","BMW","Toyota"); //ordena ascendentemente a partir de algo que imprima
            sort($cars);
        $n=count($cars);
        for($i=0;$i<$n;$i++) {  //asi recorreria la array dependientemente indepentientemente de lo largo que es la array
            echo "<li>".$cars[$i]."</li>";
        }
         ?>
    <BR>
    <h1> SORT CON ARRAYS descendente </h1>
    <?php
    $cars=array("Volvo","BMW","Toyota"); //ordena descendente a partir de algo que imprima
    rsort($cars);
    $n=count($cars);
    for($i=0;$i<$n;$i++) {  //asi recorreria la array dependientemente indepentientemente de lo largo que es la array
        echo "<li>".$cars[$i]."</li>";
    }
    ?>
    <h3>ARRAYS ASOCIATIVOS ascendente por value</h3>
    <?php
    $age=array("sergio"=>"21","andres"=>"24");
    asort($age);        //ordena ascendente por value
    foreach ($age as $key=>$value){
        echo "key=".$key.", value=".$value;
        echo "<br>";
    }
    ?>
    <h3>ARRAYS ASOCIATIVOS descendente por value</h3>
    <?php
    $age=array("sergio"=>"21","andres"=>"24");
    arsort($age);        //ordena descendente por value
    foreach ($age as $key=>$value){
        echo "key=".$key.", value=".$value;
        echo "<br>";
    }
    ?>
    <h3>ARRAYS ASOCIATIVOS ascendente por key</h3>
    <?php
    $age=array("sergio"=>"21","andres"=>"24");
    ksort($age);        //ordena descendente por key
    foreach ($age as $key=>$value){
        echo "key=".$key.", value=".$value;
        echo "<br>";
    }
    ?>
    <h3>ARRAYS ASOCIATIVOS descendente key</h3>
    <?php
    $age=array("sergio"=>"21","andres"=>"24");
    krsort($age);        //ordena descendente por key
    foreach ($age as $key=>$value){
        echo "key=".$key.", value=".$value;
        echo "<br>";
    }
    ?>
</body>
</html>