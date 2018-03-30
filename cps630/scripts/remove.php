<?php
	// sql to delete a record
	$sql = "DELETE FROM shoppingcart WHERE ArtworkId=$ArtworkId";

	if ($conn->query($sql) === TRUE) {
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
?> 
