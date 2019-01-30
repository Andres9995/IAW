<?php
// Create connection
$con=mysqli_connect("localhost","andres","123456","shop");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}
else {
    echo "<p> OK: conenctando a la base de datos </p>";
}

// Create table
$ncategory = $_REQUEST['ncategory'];

$sql = "INSERT INTO category (name) values
        ('$ncategory')";

// Execute query
if (mysqli_query($con,$sql))
{
    echo "Datos insertados correctamente";
}
else
{
    echo "Error en insertar datos: " . mysqli_error($con);
}

mysqli_close($con);
?>