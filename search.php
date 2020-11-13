<!DOCTYPE html>
<html>
<head>
	<title>search </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/pbt.css">
	
</head>
<script type="text/javascript">
		function serachClass(srcdata){
			var n = srcdata;
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET","mysearch.php?newsrcdata="+n,true);
			xhttp.send("");
			 
			xhttp.onreadystatechange=function(){
				if(this.readyState == 4 && this.status==200){

					document.getElementById('inputState').innerHTML =this.responseText;
					//alert(this.responseText);
					

				}
			}

		}
	</script>
<body>
	<div class="container">
		
		
		<div class="form-group md-6">
			<h1>Search</h1>
      <label for="inputState"></label>
      <!-- Search form -->
<input class="form-control" type="text" oninput="serachClass(this.value)" placeholder="Search" aria-label="Search">
      
      <select id="inputState" size="" class="form-control">
        <option ></option>
       <!-- <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>12</option>-->
        
      </select>
    </div>
	

	
    
    </div>

</body>
</html>