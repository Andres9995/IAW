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
    $ganga=0;
    if(isset($_REQUEST['si'])){
        $ganga=1;
    }
    $sql="INSERT INTO article (name, description, price, categorycode, bargain) values ('".$_REQUEST['articulo1']."','".$_REQUEST['desc1']."','".$_REQUEST['precio']."','".$_REQUEST['categoria']."','".$ganga."')";
echo $sql."<br>";
mysqli_query($con,$sql);
    echo "ya se ha insertado el articulo: ".$_REQUEST['articulo1'];
    mysqli_close($con);

?>