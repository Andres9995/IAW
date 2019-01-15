<!DOCTYPE html>
<html lang="en">
<body>
    <h1> WHILE </h1>
        <?php
            $i=0;
            while ($i<=9){      //indicar el final
                echo $i."<br>";
                $i++;           //hacer que se incremente sinos sera infinito
            }
        ?>
    <h3>BUCLE DO WHILE</h3>
        <?php
            $i=0;
                do {        //entra una vez si se cumple la conducion de while el bucle sigue sinos solo se haria una vez
                    echo $i . "<br>";
                    $i++;
                }
                while ($i<=9);
        ?>
</body>
</html>