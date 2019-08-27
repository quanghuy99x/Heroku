<html>
    <head>
        <title>ATN Shop</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .container{
                width: 100%;
                margin: 0 auto;
            }
            .container img{
                width: 100%;

            }
            .footer{
                width: 100%;
                height: 100px;
                background-color: white;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color: white;
            }

            .image img{
                width: 100%;
            }
            .detail{
                width: 100%;
                float: right;
                text-align: center;
            }
            .title{
                background-color: white;
                font-size: 25px;
                line-height: 70px;
                padding-left: 5px;
                font-weight: bold;
                color: purple;
            }
            .detail{
                padding-left: 15px;
                box-sizing: border-box;
            }
            .des{
                color: red;
                font-size: 18px;
                padding-left: 5px;
                padding-top: 1px;
                font-weight: normal;
            }

            .list{
                width: 100%;
                padding-top: 10px;
            }
            .item{
                width: 25%;
                float: left;
                padding: 5px;
                box-sizing: border-box;
            }
            .iimage img{
                width: 100%;
                height : 50%;
            }
            .nav{
                width: 100%;
                height: 50px;
                background-color: pink;
            }
            .nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .nav a{
                color:purple;
                font-size: 30px;
                text-decoration: cornflowerblue;
                line-height: 50px;
                padding-left: 185px;
                display: block;
            }
            .nav li{
                float: left;
            }
            .nav a:hover{
                color: #792323;
            }
            .nav li:hover{
                background-color:#DCF4F6;
            }
        </style>
    </head>
	<body>
		<div id="menu_top">
			<div id="ATN">
				<a href="index.php" title="HOME PAGE">ATN SHOP</a>
			</div>
			<div id="menu">
				<ul>
				<li><a href="index.php" title="HOME PAGE">HOME PAGE</a></li>
				<li><a href="introduce.php" title="INTRODUCE">INTRODUCE</a></li>
				<li><a href="product.php" title="PRODUCT">PRODUCT</a></li>
				<li><a href="news.php" title="NEWS">NEWS</a></li>
				<li><a href="contact.php" title="CONTACT">CONTACT</a></li>	
			</ul>
			</div>
			<div id="help">
				<a href="help.php" title="HELP">HELP</a>
			</div>
		</div>
		<div id="banner">
			<img src="image/banner2.png" alt="DO CHOI" width="1000px" />
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
