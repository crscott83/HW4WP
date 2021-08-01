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

	$addressID = $_POST['AddressID'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];

$sql = "UPDATE AddressBook (AddressID, fname, lname, address)
VALUES ('$addressID',‘$fname',‘$lname', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
