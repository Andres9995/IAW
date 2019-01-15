<!DOCTYPE html>
<html lang="en">
<body>
<h1> FOR </h1>
<?php
    for ($i=0; $i<=10; $i++)
        {
            echo $i * 2;
            echo "<br>";
        }
?>
<br>
<h1> WHILE</h1>
<?php
    $i = 0;
    while ($i<=10)
    {
        echo $i * 2;
        echo "<br>";
        $i++;
    }
?>
<br>
<h1> DO WHILE</h1>
<?php
    $i = 0;
    do {
        echo $i * 2;
        echo "<br>";
        $i++;
    }
    while ($i<=10);
?>
</body>
</html>