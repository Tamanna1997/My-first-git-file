<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
$sql = "DELETE FROM usertb WHERE id = " . $_GET['id'];
if (mysqli_query($conn, $sql)) {
  session_start();
  $_SESSION["message"] = "User deleted successfully";
  header('Location: user.php');
  exit;
} else {
  echo "Error updating record: " . mysqli_error($conn);
}