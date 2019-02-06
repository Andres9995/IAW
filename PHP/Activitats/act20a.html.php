<html>
<head>
    <title>Base de dades</title>
    <style>
        * {
            margin-left: 20px;
        }
    </style>
</head>
<body>
<h1>Inserta nombre de curso para eliminar</h1>

<?php
$con = mysqli_connect("localhost","andres","123456","base1");
$sql=" SELECT * FROM cursos order by nombrecursos asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act20a.php" method="GET">
    Nombre de curso <input name="nombre">
    <input type="submit" value="ENVIAR OSTIA YA" /> <br>
</form>
</body>
</html>