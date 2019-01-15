<!DOCTYPE html>
<html lang="en">
<body>
<h1> hola primer html </h1>
<?php
  $nom = "PACO";
  $edad= "23";
  $peso= "70kg";
  $categoria="empresario";
  $campeon=true;
?>
<table border="2px"
    <tr>
        <td>Nombre</td>
        <td>Edad </td>
        <td>Peso</td>
        <td>Categoria</td>
        <td>Campeon</td>

    </tr>
    <tr>
        <td><?php echo $nom; ?></td>
        <td><?php echo $edad; ?></td>
        <td><?php echo $peso; ?></td>
        <td><?php echo $categoria; ?></td>
        <td><?php echo $campeon; ?></td>
    </tr>
</table>
</body>
</html>