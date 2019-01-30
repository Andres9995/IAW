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

echo "<table border='1'>";
echo "<tr><th>code</th><th>name</th></tr>";
$sql ="SELECT *  FROM category order by 1 asc";
$res= mysqli_query($con,$sql);
$i=1;
while($row= mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row[1]."</td>"; //per que torni la columna 0 de la taula que sera el nom
    echo "</tr>";
    $i++;
}
echo "</table>";

mysqli_close($con);
?>