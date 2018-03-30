<?php
	// Query to search and display all the items in the shopping cart table
	$sql = "SELECT * FROM ShoppingCart";
	$result = $conn->query($sql);

	// getting the info from the db
	if ($result->num_rows > 0) {
		echo "<table id='shoppingItems'><tr>";
			echo "<th style='padding-bottom:5px;'></th>";
			echo "<th class='cartHeader' style='padding-bottom:5px;'>Name</th>";
			echo "<th class='cartHeader' style='padding-bottom:5px;'>Price</th>";
			echo "<th style='padding-bottom:5px;'><th>";
		echo "</tr>";
	    // output data of each row
	    $TotalPrice = 0;
	    while($row = $result->fetch_assoc()) {
	        $ArtworkId = $row["ArtworkId"];
	        $Photo = $row["Photo"]; 
	        $Name = $row["Name"];
	        $Price = $row["Price"];
	        $TotalPrice = $TotalPrice + $Price;
	        echo "<tr id='itemBorder'>";
	        	echo "<td style='padding:15px 5px;'><img src='$Photo' style='max-width:300px;'></td>";
	        	echo "<td style='padding:10px 5px;'>$Name</td>";
	        	echo "<td style='padding:10px 5px;'>\$$Price</td>";
	        	echo "<td style='padding:10px 5px;'>";
	        		echo "<form action='removeFromCart.php' method='post'>";
	        			echo "<button class='removeItem' name='ArtworkId' value=$ArtworkId>X</button>";
	        		echo "</form>";
	        	echo "</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	    echo "<div id='subtotal'>Subtotal: \$$TotalPrice</div>";
	    echo "<button id='checkout'>Proceed to Checkout</button>";
	} else {
	    echo "<div class='container'>";
	        echo "<h1 class='contentHeader'>Your cart is empty!";
	    echo "</div>";
	    $conn->close();
	    exit();
	}

	$sql = "SELECT * FROM ShoppingCart";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
	    // Writing the Modal Code
	    echo "<div id='myModal' class='modal'>";
		    echo "<div class='modal-content'>";
		    	echo "<div class='modal-header'>";
			        echo "<span class='close'>&times;</span>";
			        echo "<h2 id='title'>Checkout</h2>";
		    	echo "</div>";

				echo "<div class='modal-body'>";
					echo "<div class='row'>";
						
						echo "<div class='col-md-6 shippingInfo'>";
							echo "<div class='modalHeadlines'>1. Select Your Shipping Method</div>";
							echo "<form>";
								echo "<input type='radio' name='shipping' value='None'> Self Pick-Up (+$0.00) <br>";
								echo "<input type='radio' name='shipping' value='Standard'> Standard 5-7 Days (+$50.00) <br>";
								echo "<input type='radio' name='shipping' value='Express'> Express 3-5 Days (+$100.00) <br>";
							echo "</form>";

							echo "<div class='modalHeadlines'>2. Shipping Information</div>";
							echo "<form>";
								echo "<div>First Name</div>";
								echo "<input type='text' name='firstName' required>";
								echo "<div>Last Name</div>";
								echo "<input type='text' name='lastName' required>";
								echo "<div>Email</div>";
								echo "<input type='Email' name='email' required>";
								echo "<div>";
									echo "<div>Address</div>";
									echo "<input type='text' name='address' required>";
									echo "<div>Province</div>";
									echo "<input type='text' name='province' required>";
									echo "<div>City</div>";
									echo "<input type='text' name='city' required>";
									echo "<div>Postal Code</div>";
									echo "<input type='text' name='postalCode' required>";
								echo "</div>";
							echo "</form>";

							echo "<div class='modalHeadlines'>3. Confirm Order</div>";
							echo "<button>Place Order</button>";
						echo "</div>";

						echo "<div class='col-md-6'>";
							echo "<div class='modalHeadlines'>Your Order:</div>";
							echo "<table id='modalTable'><tr><th>Name</th><th>Price</th></tr>";
								while($row = $result->fetch_assoc()) {
							        $Name = $row["Name"];
							        $Price = $row["Price"];
							        echo "<tr><td>$Name</td><td>\$$Price</td></tr>";
							    }
							echo "</table>";
							echo "<div class='costInfo'>Subtotal: \$$TotalPrice</div>";
							echo "<div class='costInfo'>Shipping: $50</div>";
							echo "<div class='costInfo'>Total: \$$TotalPrice + Shipping & Tax</div>";
						echo "</div>";

					echo "</div>";
			    echo "</div>";
			echo "</div>";
		echo "</div>";
	}
?>