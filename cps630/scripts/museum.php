<?php 

class Museum{
	public $MuseumId;
	public $Photo;
	public $Name;
	public $DofC;
	public $Loc;
	public $PplInvolved;
	public $History;
	public $FamousWorks;

	public function displayMuseum() {
		echo "<h1 class='contentHeader'></h1>";
		echo "<div class='container'>";
			echo "<div class='row'>";
				echo "<div class='col-md-6'>";
					echo "<img id='photo' src='$this->Photo'>";
				echo "</div>";

				echo "<div class='col-md-6 right'>";
					echo "<a id='name'>$this->Name</a>";
					echo "<p id='description'><strong>History: </strong>$this->History</p>";
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
						echo "<p><strong>Date of Completion: </strong>$this->DofC</p>";
						echo "<p><strong>Location: </strong>$this->Loc</p>";		
						echo "<p><strong>Director: </strong>$this->PplInvolved</p>";		
						echo "<p><strong>Famous Works: </strong>$this->FamousWorks</p>";		
					echo "</div>";
			    echo "</div>";
			echo "</div>";
		echo "</div>";
	}	
}

?>