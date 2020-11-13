 
	<?php

	 echo $c=$_GET['stdclassnm'];
	$c1=  array(1=>'Amrit', 2=>'sumit',3=>'umesh', 2=>'akash',1=>'ankit');
	$c2=  array(1=>'Deep', 2=>'priyanshu',3=>'anil', 4=>'sumant',5=>'deepak');
	$c3=  array(1=>'kameshwar', 2=>'vipul',3=>'rohit', 4=>'sunny',5=>'kanchan');	
	$c4=  array(1=>'prince', 2=>'nishant',3=>'shudhanshu', 4=>'bullet',5=>'durgesh');
	$c5=  array(1=>'ranjeet', 2=>'sandeep',3=>'monu', 4=>'sonu',5=>'rupesh');
	$c6=  array(1=>'Abhishek', 2=>'dheeraj',3=>'Ramlal', 4=>'prdeep',5=>'gulam');
	$c7=  array(1=>'surj', 2=>'lakhan',3=>'AAki', 4=>'sumant',5=>'deepak');
	$c8=  array(1=>'pappu', 2=>'karan',3=>'uganter', 4=>'deeplal',5=>'ankur');	
	$c9=  array(1=>'nilesh', 2=>'meraj',3=>'jaya', 4=>'kanchan',5=>'gauri');
	$c10=  array(1=>'jabbar', 2=>'pnakaj',3=>'rakesh', 4=>'shubham',5=>'aadi');
	if($c==1){
		foreach($c1 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==2){
		foreach($c2 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==3){
		foreach($c3 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==4){
		foreach($c4 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==5){
		foreach($c5 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==6){
		foreach($c6 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==7){
		foreach($c7 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==8){
		foreach($c8 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==9){
		foreach($c9 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
	if($c==10){
		foreach($c10 as $ky=>$vl){
			echo "<option>$vl</option>";
		}
	}
    


	?>