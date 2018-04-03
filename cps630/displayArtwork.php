<?php 
    include 'headers/indexHeader.php'; 
    include 'headers/dropdownbarHeader.php';
    include 'scripts/artwork.php';
?>

<?php 
include 'scripts/dbconnect.php';

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
        echo "<h1 class='contentHeader'>There were no results! :(</h1>";
    echo "</div>";
    $conn->close();
    exit();
}

$conn->close();

// create Artist Object
$artwork = new Artwork();
$artwork->ArtworkId = $ArtworkId;
$artwork->Photo = $Photo;
$artwork->Name = $Name;
$artwork->Artist = $Artist;
$artwork->Price = $Price;
$artwork->Description = $Description;

// display the object
$artwork->displayArtwork();

//write the modal code for the pop-up box with more info
$artwork->writeModal();

?>


<?php include 'headers/indexFooter.php'; ?>