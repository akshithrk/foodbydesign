<?php
	session_start();
	require_once('databaseConnection.php');
	if(isset($POST ['page'])){

		$pages=array("products","cart");

		if(in_array($POST['page'], $pages)) {

			$_page=$_POST['page'];


		}else{

			$_page="products";
		
		}


	}else{

		$page="products";
	}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shop_fbd</title>
    <meta name="keywords" content="restaurant company, free website template, CSS, HTML, fbd.com" />
    <meta name="description" content="restaurant company - free website template, HTML CSS layout" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="fbd_style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="fbd.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    $(function() {

    });
    </script>

</head>

<body>

    <div id="fbd_container">

       <div class="fbd_topmenu">
          <ul>
            <li><a href="home.html">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="shop.html" class="current">MENUS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
       </div>

       <div id="fbd_topsection">FOOD BY DESIGN</div>
   
       <div id="fbd_headersection">
	      <img src="images/fbd_header_photo.jpg" class="reflect rheight20 ropacity25" alt="fbd.com" width="806" height="166"  />
	      </div>

       <div id="fbd_content_section">
          <?php require($page.".php") ?> 	
		</div>

		<div id="sidebar">
			<h1>Cart Items</h1>
			<?php

				if (isset($_session['cart'])){
					$ sql = "SELECT * FROM products WHERE product_id IN (";

					foreach($_session['cart'] as $id => $value) {

						$sql.=$id.",";
					}

					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);
					while($row=mysql_fetch_array($query)){
					?>
					<p><?php echo $row['name'] ?> x <?php echo $_session['cart'][$row['product_id']]['quantity'] ?></p>
					<?php
					
					}
				?>

					<hr />
					<a href="shop.php?page=cart">Go to cart</a>
				<?php

				}else{

					echo "<p>your cart is empty. please add some products.</p>";
				}
			?>
	</div>
</body>
</html>