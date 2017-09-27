 <!DOCTYPE html>
<?php include'header.php';?>

<?php
// Start the session
include_once '../con-config.php'; 
session_start(); 
?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Add Property</h2>
</div>
</div>
<!-- banner -->
<?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 

 
 
 
 $titleErr =$amountErr =$detailsErr = $photErr=$locErr="";
$cat=$cat2=$title=$amount=$details=$loc="";

$sqls="SELECT * FROM about ORDER BY id DESC LIMIT 1";
$results = mysqli_query($conn, $sqls);
$rows = mysqli_fetch_assoc($results);
$backg = $rows["backg"];
 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	
	 	if (empty($_POST["details"])) {
     $detailsErr = "details  is required";
   } 
	 else{
	 	  $details = $_POST['details'];
	 }

	 
	$idt =1; 
// prepare and bind
$stmt = $conn->prepare("UPDATE about SET backg=? WHERE id = ?");
$stmt->bind_param("ss",$details,$idt);
// set parameters and execute
$stmt->execute();
$stmt->close();
	
	header("location:about.php");
	exit;

} 
 
 
 ?>



<style>
.error{
	color:red;
}
</style>


<div class="container">
<div class="spacer">
<div class="row contact">
<div class="col-lg-2 col-sm-2 ">
</div>
  <div class="col-lg-6 col-sm-6 ">
<form method="POST"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 

 <textarea name="details" rows="10" class="form-control" placeholder="Details"><?php echo $backg;?></textarea><span class="error"> </span>
           
		
         
      <button style="height:60px;"type="submit" class="btn btn-success" name="Submit">Edit Business background</button>
          

</form>
                
        </div>
  <div class="col-lg-3 col-sm-3 ">
 </div>
</div>
</div>
</div>

<?php include'footer.php';?>