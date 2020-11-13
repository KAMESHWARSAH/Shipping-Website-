<?php
include('dbconnect/connection.php');
?>


<?php
$id = $_GET['uid'];
echo $delqry= "delete from `pbt_product` where `p_id`='$id' ";
 mysql_query($delqry);
?>


<?php
header('location:productdetails.php');
?>