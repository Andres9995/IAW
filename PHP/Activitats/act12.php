<!DOCTYPE html>
<html lang="en">
<body>
    <h1> DATE </h1>
        <?php
            $dia=array("Diumenge","Dilluns","Dimarts", "Dimecres","Dijous","Divendres","Dissabte");
            $n = date("w");
            echo "Esteim a ".$dia[$n];
        ?>
</body>
</html>