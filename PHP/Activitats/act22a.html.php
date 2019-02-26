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
<h1>Agregar un nuevo alumno a un curso</h1>

<?php
$con = mysqli_connect("localhost","andres","123456","base1");
$sql=" SELECT * FROM cursos order by codigo asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act22a.php" method="GET">
    <select name="cursos">
        <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['codigo']."'>".$row['nombrecurso']."</option>";
            }
        ?>
    </select>
    Nombre del nuevo alumno <input name="alumno1"><br><br>
    <input type="submit" value="ENVIAR OSTIA YA" /> <br>
</form>
</body>
</html>