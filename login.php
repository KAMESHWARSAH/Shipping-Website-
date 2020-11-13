<?php
include('header.php');
?>

	<!-- Section tag 1 -->
	<section class="container">
	<?php

include("dbconnect/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<h1 align="center">Login</h1>
	<br>
	<br>
<form action="" method="post" class="container">
	<table align="center" border="2" class="table table-light"> 
		<tr>
			<td align="center"><b style="font-size: 20px;"> Username</b></td>
			<td align="center"><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td align="center"><b style="font-size: 20px;" >Password</b></td>
			<td align="center"><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><button name="login" class="btn-primary">Login</button></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['login']))
 {

$user=$_POST['uname'];
$pass=$_POST['pass'];

$usql="SELECT * from `admin` where `user`='$user' AND `password`='$pass'";
$ures=mysql_query($usql);
$num=mysql_num_rows($ures);
$urow=mysql_fetch_array($ures);
if ($num) 
{
	header('location:product.php');
	session_start();
	$_SESSION['uname']=$urow[2];
	header('location:productdetails.php');
}
else
{
	echo "wrong user ";
}
}


?>
</body>
</html>
</section>

<!-- Section footer -->
<section >
	
<!-- Footer -->
<div class="abcd">

<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> India Bhopal, Corporat college</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> javacore54@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> 9123474879</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> 7079446350</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Developed BY Kameshar</h5>

        <!-- Facebook -->
        <img src="image/IMG20190730125057 (2).jpg" height="250px" width="142px">

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
</div>
</section> 
<!-- Footer section ----- start --->
<section>


</section>

</body>
</html>