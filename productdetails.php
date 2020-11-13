<?php
session_start();
$username=$_SESSION['uname'] ;
if (!isset($username)) 
{
	header('location:login.php');
}
include('dbconnect/connection.php');

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>product details</title>
</head>
<body>
	<!-- Section -->

<table class="table">
	<tr>
		<td align="left" > Name:<?php echo $username ?></td>
		<td align="right"> <button> LOGOUT</button></td>
	</tr>
	
</table>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<td>p_id</td>

			<td>name</td>
			<td>pimage</td>
			<td>size</td>
			<td>brand</td>
			<td>quantity</td>
			<td>price</td>
			<td>colour</td>
			<td>type</td>
			<td>gen_catagory</td>
			<td>description</td>
			
			<td>action</td>
			
			
			
		</tr>
		<?php
			$sql = "select * from `pbt_product`";
			$result = mysql_query($sql);
			while($row= mysql_fetch_array($result))

			{
			?>
		<tr>
			<td>
				<?php echo $row[0]; ?> </td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><?php echo $row[6]; ?></td>
			<td><?php echo $row[7]; ?></td>
			<td><?php echo $row[8]; ?></td>
			<td><?php echo $row[9]; ?></td>
			<td><?php echo $row[10]; ?></td>
			<td>
				<a href="addproduct.php?uid=<?php echo $row[0];?>"><button>Edit</button>
				<a href="del.php?uid=<?php echo $row[0];?>"><button>Delete</button></a>	
			</td>
			
			
			
			
		</tr>
		<?php
	}
	?>
	</table>

	
</div>
</body>
</html>