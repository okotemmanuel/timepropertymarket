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
$titErr = $locErr = $priErr =$detErr =  "";
$tit =$loc =$pri = $det =""; 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	if (empty($_POST["tit"])) {
     $titErr = "title  is required";
   } 
	 else{
	 	  $tit = $_POST['tit'];
	 }
	 if (empty($_POST["loc"])) {
     $locErr = "title  is required";
   } 
	 else{
	 	  $loc = $_POST['loc'];
	 }
	  if (empty($_POST["pri"])) {
     $priErr = "title  is required";
   } 
	 else{
	 	  $pri = $_POST['pri'];
	 }
	   if (empty($_POST["det"])) {
     $detErr = "title  is required";
   } 
	 else{
	 	  $det = $_POST['det'];
	 }
	 
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
		 $sqls="SELECT * FROM coverimg ORDER BY id DESC LIMIT 1";
        $results = mysqli_query($conn, $sqls);
		$rows = mysqli_fetch_assoc($results);
$idt = '1';

		 
// prepare and bind   ,  sss
$stmt = $conn->prepare("UPDATE coverimg SET img=? , title=? ,detail=? ,price=? , location=? WHERE id = ?");
$stmt->bind_param("ssssss",$target_file,$tit,$det,$pri,$loc,$idt);
// set parameters and execute
$stmt->execute();
$stmt->close();

	
	header("location:addcimg2.php");
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
  <div class="col-lg-8 col-sm-8 ">
          
		  <a href="<?php echo "addcimg1.php" ?>"><div class="col-lg-2 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image 1</button>
   </div></a>
       <a href="<?php echo "addcimg2.php" ?>"><div class="col-lg-2 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image 2</button>
   </div></a>
     <a href="<?php echo "addcimg3.php" ?>"><div class="col-lg-2 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image 3</button>
   </div></a>
    <a href="<?php echo "addcimg4.php" ?>"><div class="col-lg-2 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image 4</button>
   </div></a>
      <a href="<?php echo "addcimg5.php" ?>"><div class="col-lg-2 col-sm-3 ">
   <button type="submit" class="btn btn-success" name="Submit">image 5</button>
   </div></a>
   <hr>
  
  
<form method="POST"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
	 <input name="tit" type="text" class="form-control" placeholder="title"><span class="error"> <?php echo $titErr;?></span>
	<input name="loc" type="text" class="form-control" placeholder="location"><span class="error"> <?php echo $locErr;?></span>
	<input name="det" type="text" class="form-control" placeholder="details"><span class="error"> <?php echo $detErr;?></span>
	<input name="pri" type="text" class="form-control" placeholder="price"><span class="error"> <?php echo $priErr;?></span>
		  
		
<div>		  
<div>Cover Image 1:    <input type="file" name="fileToUpload" id="fileToUpload"><span class="error"><?php echo $photErr;?></span>

 </div>
            	   		          
      <button style="height:60px;"type="submit" class="btn btn-success" name="Submit">Add 1 st Image</button>
          

</form>
                
        </div>
  <div class="col-lg-3 col-sm-3 ">
 </div>
</div>
</div>
</div>

<?php include'footer.php';?>