<?php 
    include 'headers/indexHeader.php'; 
    include 'headers/dropdownbarHeader.php';
    include 'scripts/artwork.php';
    include 'scripts/artist.php';
    include 'scripts/museum.php';
?>

<?php 
include 'scripts/dbconnect.php';

$value = $_POST['item'];
// make query for the searching of the function
$sql = "SELECT * FROM Artworks WHERE Name='$value'";
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
    }
} 

$conn->close();


// Artist Stuff --------------------------------------------------------------------------------

include 'scripts/dbconnect.php';

$value = $_POST['item'];
// make query for the searching of the function
$sql = "SELECT * FROM Artists WHERE Name='$value'";
$result = $conn->query($sql);

// variables 
$ArtistId = 0;
$Photo = 0;
$Name = 0;
$DofB = 0;
$PofL = 0;
$Genre = 0;
$FamousWorks = 0;
$Description = 0;

// getting the info from the db
if ($result->num_rows > 0) {
    // store data of each row
    while($row = $result->fetch_assoc()) {
        $ArtistId = $row["ArtistId"];
        $Photo = $row["Photo"]; 
        $Name = $row["Name"];
        $DofB = $row["DofB"];
        $Genre = $row["Genre"];
        $FamousWorks = $row["FamousWorks"];
        $Description = $row["Description"];

        // create Artist Object
        $artist = new Artist();
        $artist->ArtistId = $ArtistId;
        $artist->Photo = $Photo;
        $artist->Name = $Name;
        $artist->DofB = $DofB;
        $artist->Genre = $Genre;
        $artist->FamousWorks = $FamousWorks;
        $artist->Description = $Description;

        // display the object
        $artist->displayArtist();

        $artist->writeModal();
    }
} 

$conn->close();

// Museum Stuff --------------------------------------------------------------

include 'scripts/dbconnect.php';

$value = $_POST['item'];
// make query for the searching of the function
$sql = "SELECT * FROM Museums WHERE Name='$value'";
$result = $conn->query($sql);

// variables 
$MuseumId = 0;
$Photo = 0;
$Name = 0;
$DofC = 0;
$Loc = 0;
$PplInvolved = 0;
$History = 0;
$FamousWorks = 0;

// getting the info from the db
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $MuseumId = $row["MuseumId"];
        $Photo = $row["Photo"]; 
        $Name = $row["Name"];
        $DofC = $row["DofC"];
        $Loc = $row["Loc"];
        $PplInvolved = $row["PplInvolved"];
        $History = $row["History"];
        $FamousWorks = $row["FamousWorks"];

        // create Artist Object
        $museum = new Museum();
        $museum->MuseumId = $MuseumId;
        $museum->Photo = $Photo;
        $museum->Name = $Name;
        $museum->DofC = $DofC;
        $museum->Loc = $Loc;
        $museum->PplInvolved = $PplInvolved;
        $museum->History = $History;
        $museum->FamousWorks = $FamousWorks;

        // display the object
        $museum->displayMuseum();

        $museum->writeModal();
    }
}

$conn->close();
?>

<?php include 'headers/indexFooter.php'; ?>