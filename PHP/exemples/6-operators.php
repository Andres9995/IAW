<!DOCTYPE html>
<html lang="en">
<body>
    <h1> operadors</h1>
        <?php
            $x=4;
            $y=$x++;        //se assigna despues asi que no se suma a la y
            echo "x:".$x."<br>";
            echo "y:".$y."<br>";
        ?>
        <br>
        <?php
            $x=4;
            $y=++$x;        //se assigna antes y se suma a la X
            echo "x:".$x."<br>";
            echo "y:".$y."<br>";
        ?>
</body>
</html>