<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>act10a</h1>
    Bienvenido tu nombre es: <?php echo $_REQUEST["nombre"]; ?><br>

    <?php
    if ($_REQUEST["salario"]==1){
        echo "Tu salario esta entre 1 y 1000 euros";
    }
    else if($_REQUEST["salario"]==2){
        echo "Tu salario esta entre 1001 y 3000";
    }
    else if($_REQUEST["salario"]==3){
        echo "Tu salario es mas de 3000 y debes pagar impuestos";
    }
    ?>

    </body>
    </html>