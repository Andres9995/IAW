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
<h1>Agregar un nuevo articulo</h1>

<?php
$con = mysqli_connect("localhost","andres","123456","shop");
$sql=" SELECT * FROM category order by code asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act22b.php" method="GET">
    Nombre del nuevo articulo <input name="articulo1"><br>
    Descripcion del articulo <input name="desc1"><br>
    Percio del articulo <input name="precio"><br>
    <select name="categoria">
        <?php
        while($row=mysqli_fetch_array($rs)){
            echo "<option value='".$row['code']."'>".$row['name']."</option>";
        }
        ?>
    </select><br>
    <input type='checkbox' value='ganga' name="si"> Ganga<br>
    <input type='checkbox' value='Normal' name="no">Normal<br>
    <input type="submit" value="ENVIAR OSTIA YA" /> <br>
</form>
</body>
</html>