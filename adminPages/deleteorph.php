
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "orphan";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

$id = $_GET["idorphan"];
$sql = "DELETE FROM `addorphan` WHERE idorphan = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: profileAdmin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}




?>
