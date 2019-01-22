<!DOCTYPE html>
<html lang="en">
<body>
    <h1> ACT15B </h1>
        <?php
            $contrasenya=array(
                array("MANOLETE",123),
                array("PERIQUITO",456),
                array("SOSIO",789),
                array("PEPE",135),
                array("XUPADOR",246)
            );
            $good=false;
        for ($f=0;$f<count($contrasenya);$f++) {
            $nom = $contrasenya[$f][0];
            $password = $contrasenya[$f][1];
            if ($_REQUEST["nombre"] && $password==$_REQUEST["contrasenya"]){
                echo "USUARIO CORRECTO";
                $good=true;
                break;
                }
        }
        if (!$good){
            echo "ES CORRECTO";
        }
        ?>
</body>
</html>