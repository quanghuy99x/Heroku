<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<div id="menu_top">
			<div id="menu">
				<ul>
				<li><a href="index.php" title="HOME PAGE">HOME PAGE</a></li>
				<li><a href="product.php">PRODUCT</a></li>
				<li><a href="product.php"></a></li>
				<li><a href="news.php"></a></li>
				<li><a href="contact.php"></a></li>	
			</ul>
			</div>
		</div>
		<div id="banner">
			<img src="image/a3.jpg" alt="DO CHOI" width="1000px" />
		</div>
		<div id="main">
		          
			<div id="DO CHOI">

				<?php
		include 'dbconnector.php';
		            $sql = "SELECT productid, image,  productname FROM product";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$productid = $row['productid'];
		              	$image = $row['image'];
		              	$productname = $row['productname'];
		         
		          ?>
				<a class="col-3" href="detail.php?productid=<?= $productid; ?>">
					<img src="<?= $image; ?>"  width="220px" height="200px" />
					<h3><?= $productname; ?></h3>
				</a>
				 <?php }} 

		       ?>
 
			</div>
		</div>
		<div id="footer">
			<div class="row">
				<p>WELCOME TO ATN SHOP</p>
			</div>
		</div>
	</body>
</html>
