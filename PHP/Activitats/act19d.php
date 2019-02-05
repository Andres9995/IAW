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

$codigo = $_REQUEST['cursos'];
    if($codigo==0){
    $sql ="SELECT *  FROM alumnos";
  }
  else {
      $sql= "SELECT * FROM alumnos WHERE codigocurso=".$codigo;
  }

  $rs= mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($rs)){
    echo "<p>".$row['nombre']."</p>";
}
mysqli_close($con);

?>