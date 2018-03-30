<?php 
    include 'headers/indexHeader.php'; 
    include 'headers/dropdownbarHeader.php';
    include 'scripts/artist.php';
?>

<?php 

// info to connect to db
$servername = "localhost";
$username = "root";
$password = "cps630group43";
$dbname = "cps630";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$value = $_POST['ArtistId'];
// make query for the searching of the function
$sql = "SELECT * FROM Artists WHERE ArtistId=$value";
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

?>

<?php include 'headers/indexFooter.php'; ?>