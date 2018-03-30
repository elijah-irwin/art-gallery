<?php  	
	// Inserts the corresponding item information into the shopping cart table
	$sql = "INSERT INTO shoppingcart (ArtworkId, Photo, Name, Price) VALUES ('$ArtworkId', '$Photo', '$Name', '$Price')";

	if ($conn->query($sql) === TRUE) {
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    $conn->close();
	    exit();
	}
	// -----------------------------------------------------------------------
?>