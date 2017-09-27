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
$photErr="";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
  $idt = $_GET['id'];
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 

	  $idt = $_POST['id'];
	 /////////////////////////
	 

$random_digit=rand(0000,9999);
$target_dir = "uploads/";
$target_file = $target_dir . $random_digit.basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	
    if($check !== false ) {
        $photErr= "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $photErr= "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists

if ($uploadOk == 0) {
    $photErr= "Sorry, your file was not uploaded.";
}
 else {
 	// if (!empty($title) && !empty($amount) && !empty($details)) {	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ) {
		 $sqls="SELECT * FROM property ORDER BY id DESC LIMIT 1";
        $results = mysqli_query($conn, $sqls);
		$rows = mysqli_fetch_assoc($results);
$idt = $rows["id"];
echo $idt;
		 
// prepare and bind
$stmt = $conn->prepare("UPDATE property SET img3=? WHERE id = ?");
$stmt->bind_param("ss",$target_file,$idt);
// set parameters and execute
$stmt->execute();
$stmt->close();

	
	header("location:addeimg4.php?id=$idt");
	exit;

} 
 }}
 
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
  
      <a href="<?php echo "editproperty.php?id=$idt" ?>"><div class="col-lg-3 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">Detail,img1</button>
   </div></a>
       <a href="<?php echo "addeimg.php?id=$idt" ?>"><div class="col-lg-3 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image2</button>
   </div></a>
     <a href="<?php echo "addeimg3.php?id=$idt" ?>"><div class="col-lg-3 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image3</button>
   </div></a>
    <a href="<?php echo "addeimg4.php?id=$idt" ?>"><div class="col-lg-3 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image4</button>
   </div></a>
   <hr>
  
  
  
<form method="POST"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
  <input type="hidden" name="val" value="<?php echo $idt?>"></input>
	
		
<div>		  
<div>photo 3:    <input type="file" name="fileToUpload" id="fileToUpload"><span class="error"><?php echo $photErr;?></span>

 </div>
            	   		          
      <button style="height:60px;"type="submit" class="btn btn-success" name="Submit">Edit Image 3</button>
          

</form>
                
        </div>
  <div class="col-lg-3 col-sm-3 ">
 </div>
</div>
</div>
</div>

<?php include'footer.php';?>