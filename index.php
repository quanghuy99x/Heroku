<!DOCTYPE html>
<html>
	<head>
		<title>ATN SHOP</title>
		<link rel="stylesheet" type="text/css" href="home.css">		
	</head>
	<body>
		<div id="menu_top">
			<div id="ATN">
				<a href="index.php" title="HOME PAGE">ATN SHOP</a>
			</div>
			<div id="menu">
				<ul>
				<li><a href="index.php" title="HOME PAGE">HOME PAGE</a></li>
				<li><a href="introduce.php" title="INTRODUCE">LEGO</a></li>
				<li><a href="product.php" title="PRODUCT">MOTORBIKE</a></li>
				<li><a href="news.php" title="NEWS">FIGURE</a></li>
				<li><a href="contact.php" title="CONTACT">DOLL</a></li>	
			</ul>
			</div>
			<div id="help">
				<a href="help.php" title="HELP">ADMIN</a>
			</div>
		</div>
		<div id="banner">
			<img src="image/a3.jpg" alt="DO CHOI" width="1000px" />
		</div>
		<div id="main">
                                <div class="col-6">
					<a> <img src="image/dochoi1.jpg" width="500px"/></a>
					<h3>do choi 1</h3>
				</div>
				<div class="col-6">
					<a> <img src="image/dochoi1.jpg" width="500px" /></a>
					<h3>do choi 2</h3>
				</div>
				<div class="col-6">
					<a> <img src="image/dochoi1.jpg" width="500px" /></a>
					<h3>do choi 3</h3>
				</div>
				<div class="col-6">
					<a> <img src="image/dochoi1.jpg" width="500px" /></a>
					<h3>do choi 4</h3>
				</div>
			</div>

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
