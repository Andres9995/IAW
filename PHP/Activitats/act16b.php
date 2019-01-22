<!DOCTYPE html>
<html lang="en">
<body>
    <h1> ACT16B </h1>
        <?php
        function contrasenya()
        {
            if ($_REQUEST["password1"]==$_REQUEST["password2"]) {
                echo "Contraseña CORRECTO";
            }
            else {
                echo "contraseña mala";
            }
        }
        contrasenya();
        ?>
</body>
</html>