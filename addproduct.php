
<?php
include('dbconnect/connection.php');
if(isset($_GET['uid']))
{

$id = $_GET['uid'];
 $esql= "select * from `pbt_product` where `id` = '$id'";
$esql = mysql_query($esql);
$erow  = mysql_fetch_array($esql);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>my product</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data" >

		<table align="center" border="2">
		<tr>
		<td>Product Name</td>
		<td><input type="text" value="<?php if(isset($_GET['uid'])){ echo $erow[1]; }?>" name="pname"></td>



		</tr>


		<tr>
			<td>	IMAGE </td>	
			<td><input type="file" name="pimg" value="<?php if(isset($_GET['uid'])){echo $erow[2];}?>"></td>
		
		 </tr>


		<tr>
			<td>	Product Size </td>	
			<td><input type="text" name="psize" value="<?php if(isset($_GET['uid'])){ echo $erow[3]; }?>" ></td>
		
		 </tr>


		
		 	
		<tr>
			<td>	Product Brand </td>	
			<td><input type="text" name="pbrand" value="<?php if(isset($_GET['uid'])){echo $erow[4];}?>"></td>
		
		 </tr>

		
		<tr>
			<td>	Product Quantity </td>	
			<td><input type="text"  name="pquantity" value="<?php if(isset($_GET['uid'])){echo $erow[5];}?>"></td>
		
		 </tr>
		 <tr>
			<td>	Price </td>	
			<td><input type="text" name="pprice" value="<?php if(isset($_GET['uid'])){echo $erow[6];}?>"></td>
		
		 </tr>
		 <tr>
			<td>	Colour</td>
			<td><input type="text" name="pclour" value="<?php if(isset($_GET['uid'])){echo $erow[7];}?>"></td>
		
		 </tr>
		 <tr>
			<td>	Type </td>	
			<td><input type="text" name="ptype" value="<?php if(isset($_GET['uid'])){echo $erow[8];}?>"></td>
		
		 </tr>
		 <tr>
			<td>	Category </td>	
			<td><input type="radio" name="pcategory" value="male" <?php if($erow[9]=="male"){echo 'checked'; } ?> >M</td>
			<td><input type="radio" name="pcategory" value="female" <?php if($erow[9]=="female"){echo 'checked';}?> >F
			</td>
		
		 </tr>
		 <tr>
			<td>	Discription</td>	
			<td><input type="text" name="pdiscription" value="<?php if(isset($_GET['uid'])){echo $erow[10];}?>"></td>
		
		 </tr>
		 <tr>
			<td>	Status </td>	
			<td><input type="text" name="pstatus" value="<?php if(isset($_GET['uid'])){echo $erow[11];}?>"></td>
		
		 </tr>
		 <tr>
			<td>	Note </td>	
			<td>

				<input type="text" name="pnote" value="<?php if(isset($_GET['uid'])){echo $erow[12];}?>">
				<?php
					if(isset($_GET['uid'])){
				?>
				<input type="hidden" name="pid" value="<?php if(isset($_GET['uid'])){echo $erow[0];}?>">

				<?php
					}
				?>
			</td>
		
		 </tr>

		 <tr>
		 	<td align="center">
		 	
		 		<?php
		 		if(isset($_POST['uid'])){

		 			echo "<button name='pupdate'>Update</button>";

		 		}else{
		 			echo "<button name='padd'>Add</button>";
		 		}

		 		?>
		 		
		 		

		 	
		 	</td>

		 </tr>

		
	 </table>

	</form>


	<?php

	if((isset($_POST['padd'])) OR (isset($_GET['pupdate'])))
	 {
		

	$fname= $_FILES['pimg']['name'];
	echo $fname;
	$ftemp= $_FILES['pimg']['tmp_name'];
	echo $fname;
	$fsize= $_FILES['pimg']['size'];
	echo $fname;
	$path = "image/".$fname;
	move_uploaded_file($ftemp, $path);
	explode(delimiter, string)


	$pname= $_POST['pname'];
	$psize= $_POST['psize'];
	$pbrand= $_POST['pbrand'];
	$pprice= $_POST['pprice'];
	$pclour= $_POST['pclour'];
	$pptype= $_POST['ptype'];
	$pcategory= $_POST['pcategory'];
	$pnote= $_POST['pnote'];

	$pdiscription= $_POST['pdiscription'];
	$pstatus= $_POST['pstatus'];
	$pquantity= $_POST['pquantity'];
	
	if(isset($_POST['pupdate']))
	 {
	 	$proid=$_POST['pid'];

			 $qury="update `pbt_product` SET `name`= '$pname',`size`='$psize',`brand`='$pbrand',`quantity`='$pquantity',`price`='$pprice',`colour`='$pclour',`type`='$pptype',`gen_catagory`='$pcategory',`description`='$pdiscription',`status`='$pstatus',`note`='$pnote' where `p_id`='$proid'";
		}else{
			$qury= "insert into `pbt_product` (`name`,`size`,`brand`,`quantity`,`price`,`colour`,`type`,`gen_catagory`,`description`,`status`,`note`)values('$pname','$psize','$pbrand','$pquantity','$pprice','$pclour','$pptype','$pcategory','$pdiscription','$pstatus','$pnote')";
		}
	   mysql_query($qury);

		//header('location:productdetails.php');
	}


?>





</body>
</html>