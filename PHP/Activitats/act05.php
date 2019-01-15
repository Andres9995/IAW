<!DOCTYPE html>
<html lang="en">
<body>
<h1> random </h1>
<?php
$aleatorio2=rand(1,3);
        if ($aleatorio2<"2")
            {
                echo "UNO ".$aleatorio2;
            }
        else if($aleatorio2>"2") {
                echo "TRES ".$aleatorio2;
            }
        else {
                echo "DOS ".$aleatorio2;
        }
?>
</body>
</html>