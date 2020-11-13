<!DOCTYPE html>
<html>
<head>
	<title>sudent name</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/pbt.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	

</head>
<body >
	<script type="text/javascript">
		function stdClass(classnm){
			var n = classnm;
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET","stdname.php?stdclassnm="+n,true);
			xhttp.send("");
			 
			xhttp.onreadystatechange=function(){
				if(this.readyState == 4 && this.status==200){

					document.getElementById('select2').innerHTML =this.responseText;
					//alert(this.responseText);
					

				}
			}

		}
	</script>

	<div class="container">
		
		
		<div class="form-group col-md-4">
      <label for="label1">Class</label>
      <select id="select1" onchange="stdClass(this.value)" class="form-control">
        <option selected>Class Choose</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
        <option value="5">5th</option>
        <option value="6">6th</option>
        <option value="7">7th</option>
        <option value="8">8th</option>
        <option value="9">9th</option>
        <option value="10">10th</option>
        <option value="11">12th</option>
        <option value="12">B.Tech</option>
        <option value="13">M.Tech</option>
        
      </select>
    </div>
	

	<div class="form-group col-md-4">
      <label for="label2">Student Name</label>
      <select id="select2" class="form-control">
        <option selected>Choose Student name</option>
        
      </select>
    </div>
    </div>

</body>
</html>