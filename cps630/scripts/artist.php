<?php 

class Artist {
	public $ArtistId;
	public $Photo;
	public $Name;
	public $DofB;
	public $PofL;
	public $Genre;
	public $FamousWorks;
	public $Description;

	// echos html to display the artists information on the main screen
	public function displayArtist() {
		echo "<h1 class='contentHeader'></h1>";
		echo "<div class='container'>";
			echo "<div class='row'>";
				echo "<div class='col-md-6'>";
					echo "<img id='photo' src='$this->Photo'>";
				echo "</div>";

				echo "<div class='col-md-6 right'>";
					echo "<a id='name'>$this->Name</a>";
					echo "<p id='description'><strong>Description: </strong>$this->Description</p>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}

	// echo html to write the modal which contains further information about the artist in the popup modal box
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
						echo "<p><strong>Date of Birth: </strong>$this->DofB</p>";
						echo "<p><strong>Place of Living: </strong>$this->PofL</p>";		
						echo "<p><strong>Art Genre: </strong>$this->Genre</p>";		
						echo "<p><strong>Famous Works: </strong>$this->FamousWorks</p>";		
					echo "</div>";
			    echo "</div>";
			echo "</div>";
		echo "</div>";
	}
}

?>