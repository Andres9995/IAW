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

$code = $_REQUEST['categoria'];
    if($code==0){
    $sql ="SELECT *  FROM article";
  }
  else {
      $sql= "SELECT * FROM article WHERE categorycode=".$code;
  }

  $rs= mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($rs)){
    echo "<p>".$row['name']."</p>";
}
mysqli_close($con);

?>