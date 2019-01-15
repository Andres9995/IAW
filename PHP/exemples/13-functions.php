<!DOCTYPE html>
<html lang="en">
<body>
    <h1> funciones </h1>
        <?php
            function printHello(){ //se crea la funcion y dentro lo que queremos que haga
                echo "hola"."<br>";
            }
            printHello();
            printHello();           //llama a la funcion
        ?>
    <h3>CON VALORES</h3>
        <?php
        function printHello1($nom){
            echo "hola".$nom."<br>";
        }
        printHello1("ANDRES");
        printHello1("PACO");
        ?>
    </h3>
    <H3>RETORNA VALORS</H3>
    <?php
    function add($x,$y)
    {
        $total=$x+$y;
        return $total;
    }
    echo "1 + 16 = " . add(1,16);
    ?>
</body>
</html>