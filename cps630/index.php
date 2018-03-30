<?php 
	include 'headers/indexHeader.php';
	include 'headers/dropdownbarHeader.php';
?>

<h1 class="contentHeader">Current Features</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img id="photo" src="https://s3.us-east-2.amazonaws.com/cps630photos/starryNight.jpg">
		</div>
		<div class="col-md-6 right">
			<a id="name">The Starry Night</a>
			<p id="description"><strong>Description: </strong>Painted in June 1889, it depicts the view from the east-facing window of his asylum room at Saint-Remy-de-Provence, just before sunrise, with the addition of an idealized village.</p>
			<p id="price"><strong>Price: </strong>$150000</p>
			<form action="addToShoppingCart.php" method="post">
				<button class="addToCart" name="ArtworkId" value="0" type="submit">Add to Cart</button>
			</form>
		</div>
	</div>
</div>

<div id='myModal' class='modal'>
    <div class='modal-content'>
    	<div class='modal-header'>
	        <span class='close'>&times;</span>
	        <h2 id='title'>The Starry Night</h2>
    	</div>

		<div class='modal-body'>
		    <img src='https://s3.us-east-2.amazonaws.com/cps630photos/starryNight.jpg' style='max-width: 450px;'>
			<div id='info'>
				<p><strong>Artist: </strong>Vincent Van Gogh</p>
				<p><strong>Price: </strong>$150000</p>		
			</div>
	    </div>
	</div>
</div>

<?php include 'headers/indexFooter.php';?>


