<!DOCTYPE html>
<html lang="en">
<body>
    <h1> switch</h1>
        <?php
            $favcolor="amarillo"; //para recorrer unos valores
            switch ($favcolor)
            {
                case "rojo":
                    echo "este es tu color favorito el rojo";
                    break;
                case "azul":
                    echo "este es tu color favorito el azul";
                    break;
                case "verde":
                    echo "este es tu color favorito el verde";
                    break;
                default:
                    echo "tu favorito no es ni el rojo, ni verde, ni azul";
            }
        ?>
</body>
</html>