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
<h1>Inserta nombre de curso</h1>

<?php
$con = mysqli_connect("localhost","andres","123456","base1");
$sql=" SELECT * FROM cursos order by nombrecurso asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act19d.php" method="GET">
    <select name="cursos">
        <option value="0">ALL</option>
        <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['codigo']."'>".$row['nombrecurso']."</option>";
            }
        ?>
    </select>
    <input type="submit" value="ENVIAR OSTIA YA" /> <br>
</form>
</body>
</html>