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
$con = mysqli_connect("localhost","andres","123456","shop");
$sql=" SELECT * FROM category order by name asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act19e.php" method="GET">
    <select name="categoria">
        <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['code']."'>".$row['name']."</option>";
            }
        ?>
    </select>
    <input type="submit" value="ENVIAR OSTIA YA" /> <br>
</form>
</body>
</html>