<?php

	if(isset($_POST['submit'])) {

		foreach($_POST['quantity'] as $key => $val){

			if($val==0)
				unset($_session['cart'][$key]);
			}else{
				$_session['cart'][$key]['quantity']=$val;
			}
		}
	}
?>
<h1>View Cart</h1>
<a href="shop.php?page=products">Go back to the products page</a>
<form method="post" action="shop.php?page=cart">

<table>
	<tr>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Action</th>
	</tr>

	<?php

	$ sql = "SELECT * FROM products WHERE product_id IN (";

					foreach($_session['cart'] as $id => $value) {

						$sql.=$id.",";
					}

					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);
					$totalprice=0;
					while($row=mysql_fetch_array($query)){
						$subtotal=$_session['cart'][$row['product_id']] ['quantity ']*$row['price'];
						$totalprice+=$subtotal;
					?>
					<tr>
			  			<td><?php echo $row['name'] ?></td>
			  			<td>input type="text" name="quantity"[<?php echo $row['product_id'] ?>] size="5" value="<?php echo $_session ['cart'][$row['product_id']]['quantity'] ?></td>
			
			  			<td><?php echo $row['price'] ?>$</td>
			  			<td><?php echo $_session ['cart'][$row['product_id']]['quantity']*$row['price']?>$</td>
		  			</tr>


					<?php
				}

	?>
		<tr>
			<td>Total Price: <?php echo $totalprice ?></td>
		</tr>
	</table>
	<br />
	<button type="submit" name="submit">Update Cart</button>
	</form>
	<br />
	<p>to remove an item set its quantity to 0.</p>