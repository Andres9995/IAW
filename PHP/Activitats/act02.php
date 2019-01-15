<!DOCTYPE html>
<html lang="en">
<body>
<h1> random </h1>
<?php
$aleatorio1=rand(0,10);
        if ($aleatorio1>"5")
            {
                echo "Aprovado el examen ".$aleatorio1;
            }
        else {
                echo "Suspendido ".$aleatorio1;
            }

?>
</body>
</html>