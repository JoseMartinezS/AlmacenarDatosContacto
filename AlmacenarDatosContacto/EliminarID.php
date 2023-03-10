<?php
$idContacto = $_POST["idContacto"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datosalumno";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM Contacto WHERE idContacto='" . $idContacto . "'";

if (mysqli_query($conn, $sql)) 
{
  $conn->close();
  header("location:TabladeDatos.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>