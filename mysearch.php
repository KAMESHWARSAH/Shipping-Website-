<?php
include('dbconnect/connection.php');

$c= $_GET['newsrcdata'];
$myser="select * from `pbt_product` where `name` like('$c%')";

$res= mysql_query($myser);
while ($row = mysql_fetch_array($res)  )
 {
  echo "<option>".$row['name']."</option>";
  //echo "aa";
}
?>