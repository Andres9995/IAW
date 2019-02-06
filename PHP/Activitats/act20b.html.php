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
<h1>Click para eliminar todos cursos</h1>

<?php
$con = mysqli_connect("localhost","andres","123456","base1");
$sql=" SELECT * FROM cursos order by nombrecursos asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act20b.php" method="GET">
    <input type="submit" value="ELIMINARAN TODOS CURSOS" /> <br>
</form>
</body>
</html>