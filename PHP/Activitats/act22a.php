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
    $email = $_REQUEST['alumno1']."@".$_REQUEST['alumno1'].".com";
    $sql="INSERT INTO alumnos (nombre, mail, codigocurso) values ('".$_REQUEST['alumno1']."','".$email."','".$_REQUEST['cursos']."')";
echo $sql."<br>";
mysqli_query($con,$sql);
    echo "ya se ha insertado el alumno: ".$_REQUEST['alumno1'];
    mysqli_close($con);

?>