<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Your Address Book</title>
<link rel="stylesheet" href="hw4stylesheet.css">
</head>
<body>
<h2>Your Address Book</h2>
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

$sql = "SELECT AddressID, fname, lname FROM AddressBook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["AddressID"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>