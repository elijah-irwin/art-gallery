<?php 
	include 'headers/indexHeader.php';
	include 'headers/dropdownbarHeader.php';
?>

<div class="container">
	<h2 id="shoppingTitle">Shopping Cart</h2>
	<a href="index.php" id="continueShopping">Continue Shopping</a>
	<div class="items">
		<?php 
			include 'scripts/dbconnect.php';
			include 'scripts/artworkQuery.php';
			include 'scripts/insertToCart.php';
			include 'scripts/displayCart.php';

			$conn->close();
		?>
	</div>
</div>
<script type="text/javascript" src="scripts/checkoutModal.js"></script>

<?php include 'headers/indexFooter.php';?>

