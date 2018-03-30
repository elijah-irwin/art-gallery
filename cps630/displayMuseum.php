<?php 
    include 'headers/indexHeader.php'; 
    include 'headers/dropdownbarHeader.php';
    include 'scripts/museum.php';
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

$value = $_POST['MuseumId'];
// make query for the searching of the function
$sql = "SELECT * FROM Museums WHERE MuseumId=$value";
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

?>

<?php include 'headers/indexFooter.php'; ?>