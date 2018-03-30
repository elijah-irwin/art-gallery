<?php 

class Artwork{
	public $ArtworkId;
	public $Photo;
	public $Name;
	public $Artist;
	public $Price;
	public $Description;

	public function displayArtwork() {
		echo "<h1 class='contentHeader'></h1>";
		echo "<div class='container'>";
			echo "<div class='row'>";
				echo "<div class='col-md-6'>";
					echo "<img id='photo' src='$this->Photo'>";
				echo "</div>";

				echo "<div class='col-md-6 right'>";
					echo "<a id='name'>$this->Name</a>";
					echo "<p id='description'><strong>Description: </strong>$this->Description</p>";
					echo "<p id='price'><strong>Price: </strong>\$$this->Price</p>";
					echo "<form action='addToShoppingCart.php' method='post'>";
						echo "<button class='addToCart' name='ArtworkId' value='$this->ArtworkId' type='submit'>Add to Cart</button>";
					echo "</form>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}

	public function writeModal() {
		echo "<div id='myModal' class='modal'>";
		    echo "<div class='modal-content'>";
		    	echo "<div class='modal-header'>";
			        echo "<span class='close'>&times;</span>";
			        echo "<h2 id='title'>$this->Name</h2>";
		    	echo "</div>";

				echo "<div class='modal-body'>";
				    echo "<img src='$this->Photo' style='max-width: 450px;'>";
					echo "<div id='info'>";
						echo "<p><strong>Artist: </strong>$this->Artist</p>";
						echo "<p><strong>Price: </strong>\$$this->Price</p>";		
					echo "</div>";
			    echo "</div>";
			echo "</div>";
		echo "</div>";
	}
}

?>