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

    $sql="DELETE FROM cursos";
    mysqli_query($con,$sql);
    echo "HA SIDO BORRADO TODOS LOS CURSOS";

mysqli_close($con);

?>