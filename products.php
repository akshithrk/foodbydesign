<?php

if(isset($_POST['action']) && $_POST['action']==add){

	$id=intval($_POST['id']);

	if(isset($_session['cart'][$id])) {

		$_session['cart'][$id]['quantity']++;
	}else{

		$sql_s="select * from products where product_id={$id}";
		$query_s=msql_query($sql_s);
		if (mysql_num_rows($query_s) !=0){
			$row_s=mysql_fetch_array($query_s);

			$_session['cart'][row_s['product_id']]=array(
				"quantity" => 1,
				"price" => $row_s['price']
				);

		}else{

			$message="The product id is invalid!";
		}
	}
}

?>
<h2>Menu</h2>
<?php
	if(isset($message)){

		echo "<h2>$message</h2>";
	}
?>
		  	<table>
		  		<tr>
			  		<th>Name</th>
			  		<th>Description</th>
			  		<th>Price</th>
			  		<th>Action</th>
		  		</tr>

		  		<?php

		  			$sql=" SELECT * FROM products ORDER BY name asc";
		  			$query=mysql_query($sql);

		  			while ($row=mysql_fetch_array($query)) {
		  		
		  		?>

		  		<tr>
		  			<td><?php echo $row['name'] ?></td>
		  			<td><?php echo $row['description'] ?></td>
		  			<td><?php echo $row['price'] ?>$</td>
		  			<td><a href="shop.php?page=products&action=add&id=<?php echo $row['product_id'] ?>">Add to cart</a></td>
		  		</tr>
		  		</table>