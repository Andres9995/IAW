<?php
// Create connection
$con=mysqli_connect("localhost","andres","123456","base1");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}
else {
    echo "<p>OK: Connected to the Database.</p>";
}

$curso = $_REQUEST['nombre'];
$sql= "SELECT * FROM cursos WHERE nombrecurso='".$curso."'";
$rs= mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==0){
    echo "NO EXISTR";
}
else {
    echo "EXISTE"."<br>";
    $sql="DELETE FROM cursos WHERE nombrecurso='".$curso."'";
    mysqli_query($con,$sql);
    echo "HA SIDO BORRADO";
}
mysqli_close($con);

?>