<?php
include('dbconnect/connection.php');
?>



<?php
include('header.php');
?>


<!-- Section 1 -->
<section class="container">
<h2 style="color: blue">FEATURED BRANDS</h2>
<div class="">

<div class="row offer2	">
<div class="featured_brands_new">
<a href="https://www.fashos.com/brand/action.html"><img src="https://www.fashos.com/pub/media/wysiwyg/hp_images/2019/brand_logo/action_logo.jpg" alt="" ><a href="https://www.fashos.com/brand/bata.html"><img src="https://www.fashos.com/pub/media/wysiwyg/hp_images/2019/brand_logo/bata_logo.jpg" alt="" /></a><a href="https://www.fashos.com/brand/fausto.html"><img src="https://www.fashos.com/pub/media/wysiwyg/hp_images/2019/brand_logo/fausto.jpg" alt="" /></a><a href="https://www.fashos.com/brand/sparx.html"><img src="https://www.fashos.com/pub/media/wysiwyg/hp_images/2019/brand_logo/sparx.jpg" alt="" /></a><a href="https://www.fashos.com/brand/lancer.html"><img src="https://www.fashos.com/pub/media/wysiwyg/hp_images/2019/brand_logo/lancer.jpg" alt="" /></a><a class="all_brand_link" href="https://www.fashos.com/all-brands" style="font-size: 50px">All Brands</a>

</div>
</div>
	
</section>

<!-- section  1 brand  -->
<section>
<div>
	<div></div>
	<div></div>
</div>
</section>



<!-- section 2-->

<section >
	<div class="height">
<div class="container">
<div class="card-group">

<?php
$sql = "select * from `pbt_product`";
$res = mysql_query($sql);
while ($row= mysql_fetch_array($res)) {


?>

  <div class="card">
    <img src="image/<?php echo $row[2] ?> "height="352px" class="card-img-top" alt="...">


    <div class="card-body">
      <span class="card-title"><BUTTON>ADD TO CART</BUTTON></br><span class="card-title"><BUTTON>BUY NOWS</BUTTON>
       <h1> <?php echo $row[1] ?></h1> </span></br>
      <span class="card-title">COLOUR <?php echo $row[7] ?></span>
      <span class="card-text"></span>
      <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span>
    </div>

  </div>
<?php
}
?>
</div>
</div>
</div>

</section>
<h1></h1>
<br>
<h1></h1>
<h1></h1>
<br>
<h1></h1>
<h1></h1>
<h1></h1>
<br>
<h1></h1>
<h1></h1>
<h1></h1>
<br>
<h1></h1>
<h1></h1>
<h1></h1>
<br>
<h1></h1>
<br>

<!-- Section footer -->
<?php
include('footer.php');
?>
