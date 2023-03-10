<?php
$actualizar=$_GET["actualizar"];
$nombre=$_GET["nombre"];
$correo=$_GET["correo"];
$tabla=$_GET["tabla"];
$inicial=$_GET["inicial"];
$limite=$_GET["limite"];
$resultado=$_GET["resultado"];

require_once('config.inc.php');



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE datostabla SET nombre='$nombre' WHERE idDatosTabla='" . $actualizar . "'";
$sql = "UPDATE datostabla SET correo='$correo' WHERE idDatosTabla='" . $actualizar . "'";
$sql = "UPDATE datostabla SET tabla='$tabla' WHERE idDatosTabla='" . $actualizar . "'";
$sql = "UPDATE datostabla SET inicial='$inicial' WHERE idDatosTabla='" . $actualizar . "'";
$sql = "UPDATE datostabla SET limite='$limite' WHERE idDatosTabla='" . $actualizar . "'";
$sql = "UPDATE datostabla SET resultado='$resultado' WHERE idDatosTabla='" . $actualizar . "'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>