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

    mysqli_query($con,"UPDATE cursos SET nombrecurso='".$_REQUEST['nombre1']."' WHERE codigo=".$_REQUEST['cursos']);
    echo "ya se ha cambiado el nombre del curso por ".$_REQUEST['nombre1'];
    
    mysqli_close($con);

?>