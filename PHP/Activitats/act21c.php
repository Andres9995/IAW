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
    echo "<p>OK: Connected to the Database.</p>";
}

    $sql= "UPDATE `article` SET `price`=`price`*1.10";
    mysqli_query($con,$sql);
    echo "ya se ha cambiado el nombre del curso";
    
    mysqli_close($con);

?>