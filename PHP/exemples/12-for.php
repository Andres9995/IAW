<!DOCTYPE html>
<html lang="en">
<body>
    <h1> PLANTILLA </h1>
        <?php
            for ($i=1; $i<=5; $i++)
                {
                echo "The number is " . $i . "<br>";
                }
            ?>
    <h3>FOREACH</h3>
        <?php
            $x=array("one","two","three");  //SE IMPRMIRIAN LOS DATOS DEL ARRAY
            foreach ($x as $value)
            {
            echo $value . "<br>";
            }
        ?>
</body>
</html>