

<?php
// Start the session
include_once '../con-config.php'; 
session_start(); 


$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
$photErr="";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 
 $idt = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM property  WHERE id = ?");
$stmt->bind_param("s",$idt);
// set parameters and execute
$stmt->execute();
$stmt->close();

header("location:sale.php");
	exit;

?>
