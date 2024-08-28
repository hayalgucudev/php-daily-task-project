
<?php  
include "database.php";

$id = $_GET["id"];
$sql = "DELETE FROM `tasks` WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
  header("Location: data.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}