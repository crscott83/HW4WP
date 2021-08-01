<?php
$servername = "localhost";
$username = "cscott83";
$password = "cscott83";
$dbname = "cscott83";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$addressID = $_POST['deleteID'];

$sql = "DELETE FROM AddressBook WHERE id = $addressID";

if ($conn->query($sql) === TRUE) {
  echo "record deleted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
