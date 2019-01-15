<!DOCTYPE html>
<html lang="en">
<body>
<h1> hola primer html </h1>
<?php
    $y=5;
    function myTest(){
        $x=3;
        echo $x;
        global $y;
        echo "<br>";
        echo $y;
    }
    myTest();
?>
<?php
$y=5;
function myTest1(){
    $x=0;
    static $x;
    echo $x;
    echo "<br>";
    $x++;
}
myTest1();
myTest1();
myTest1();
?>
</body>
</html>