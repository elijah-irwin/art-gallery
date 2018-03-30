<?php  	
	// Searches the DB and returns the Artwork with the corresponding value
	$value = $_POST['ArtworkId'];
	// make query for the searching of the function
	$sql = "SELECT * FROM Artworks WHERE ArtworkId=$value";
	$result = $conn->query($sql);

	// variables 
	$ArtworkId = 0;
	$Photo = 0;
	$Name = 0;
	$Artist = 0;
	$Price = 0;
	$Description = 0;

	// getting the info from the db
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $ArtworkId = $row["ArtworkId"];
	        $Photo = $row["Photo"]; 
	        $Name = $row["Name"];
	        $Artist = $row["Artist"];
	        $Price = $row["Price"];
	        $Description = $row["Description"];
	    }
	} else {
	    echo "<div class='container'>";
	        echo "<h1 class='contentHeader'>Something went wrong! :(<br>Please try again later!</h1>";
	    echo "</div>";
	    $conn->close();
	    exit();
	}
	// ----------------------------------------------------------------------
?>	