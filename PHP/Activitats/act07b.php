<!DOCTYPE html>
<html>
<body>
    Este es tu nombre: <?php echo $_REQUEST["nombre"]; ?>!<br>
    <?php
    if ($_REQUEST["edad"]>=18){
        echo $_REQUEST ["nombre"]." es adulto, ";
    }
    else{
        echo $_REQUEST ["nombre"]." no es adulto, ";
    }
    ?>
</body>
</html>
