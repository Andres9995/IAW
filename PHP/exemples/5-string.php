<!DOCTYPE html>
<html lang="en">
<body>
<h1> hola primer html </h1>
<?php

$txt="hola manolo";
$txt2= " vas en patinete haciendo el pino";
echo $txt.$txt2;    // concatenar

$n= strlen($txt);   //contar los strings
echo "<br>";
echo $txt.$n;
echo "<br>";

$lletra="a";        //en que numero esta esa letra en un string
$p=strpos($txt,$lletra);
echo $p;
?>

</body>
</html>