 <!DOCTYPE html>
<?php include'header.php';?>

<?php
// Start the session
include_once '../con-config.php'; 
//session_start(); 
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

 
 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 
	 $long = $_POST['long'];
$lat = $_POST['lat'];

	 
	if (empty($_POST["title"])) {
     $titleErr = "title  is required";
   } 
	 else{
	 	  $title = $_POST['title'];
	 }
		if (empty($_POST["amount"])) {
     $amountErr = "amount  is required";
   } 
	 else{
	 	  $amount = $_POST['amount'];
	 } 
	 	if (empty($_POST["details"])) {
     $detailsErr = "details  is required";
   } 
	 else{
	 	  $details = $_POST['details'];
	 }
	 	 	if (empty($_POST["loc"])) {
     $locErr = "location  is required";
   } 
	 else{
	 	  $loc = $_POST['loc'];
	 }
 	 	if (empty($_POST["cat"])) {
     $catErr = "location  is required";
   } 
	 else{
	 	  $cat = $_POST['cat'];
	 }
	  	 	if (empty($_POST["cat2"])) {
     $cat2Err = "location  is required";
   } 
	 else{
	 	  $cat2 = $_POST['cat2'];
	 }
	 
echo $details.''.$amount.''.$title;	
	 /////////////////////////
	 

$random_digit=rand(0000,9999);
$target_dir = "uploads/";
$target_file = $target_dir . $random_digit.basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
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

       // $photErr= "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
		 $location=1;
		 $target_file2=2;
		 $target_file3=3;
		 $target_file4=4;
		 
	 
// prepare and bind
$stmt = $conn->prepare("INSERT INTO property(title,salerent,cat2,price,details,location,lati,loc,img1,img2,img3,img4) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssss",$title,$cat,$cat2,$amount,$details,$long,$lat,$loc,$target_file,$target_file2,$target_file3,$target_file4);
$stmt->execute();


$stmt->close();
 $conn->close();
	
	header("location:addimg.php");
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
<form method="POST"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
	<select class="form-control" name="cat">
                <option value="RENT">RENT</option>
                <option value="SALE">SALE</option>
              </select>
			  
			  	<select name="cat2" class="form-control">
                
				<option value="HOUSES">HOUSES</option>
				 <option value="INDUSTRIAL">INDUSTRIAL</option>
				 <option value="COMMERCIAL">COMMERCIAL</option>
                <option value="PLOTS">PLOTS</option>
				<option value="FARMLANDS">FARM LANDS</option>
				
              </select>
			  
           <input name="title" type="text" class="form-control" placeholder="Title"><span class="error"> <?php echo $titleErr;?></span>
           <input name="amount" type="text" class="form-control" placeholder="price/amount in (UGX)"><span class="error"> <?php echo $amountErr;?></span>
		  
<div>		  
<div>photo 1:    <input type="file" name="fileToUpload" id="fileToUpload"><span class="error"><?php echo $photErr;?></span>

 </div>
 
 
    	    <select name="loc" class="form-control">
              
				  <option value="KAMPALA LUZIRA">-----KAMPALA---------</option>
				  <option value=" Bwebajja"> Bwebajja  </option>
					<option value="Abayitababiri">Abayitababiri </option>
					<option value="Bbunga">Bbunga  </option>
					<option value="Bugolobi">Bugolobi </option>
					<option value="Bukasa">Bukasa </option>
					<option value="Bukoto">Bukoto </option>
					<option value="Bulenga">Bulenga </option>
					<option value="Bunamwaya">Bunamwaya  </option>
					<option value="Bunga">Bunga </option>
					<option value="Bunga-Kawuku">Bunga-Kawuku </option>
					<option value="Butabika">Butabika </option>
					<option value="Buwaate">Buwaate </option>
					<option value="Buwate">Buwate </option>
					<option value="Buziga road">Buziga road </option>
					<option value="BUZIGA">BUZIGA </option>
					<option value="Bwebajja">Bwebajja </option>
					<option value="Bweyogerere">Bweyogerere </option>
					<option value="Entebbe kajjansi">Entebbe kajjansi </option>
					<option value="Entebbe">Entebbe </option>
					<option value="Gayaza">Gayaza </option>
					<option value="Ggaba">Ggaba </option>
					<option value="Kabalagala">Kabalagala </option>
					<option value="Kabuusu">Kabuusu  </option>
					<option value="Kajjansi">Kajjansi  </option>
					<option value="Kalangala">Kalangala  </option>
					<option value="Kampala">Kampala  </option>
					<option value="Kamwokya">Kamwokya  </option>
					<option value="Kansanga">Kansanga </option>
					<option value="Kasanga">Kasanga   </option>
					<option value="Kasangati">Kasangati  </option>
					<option value="Katabi">Katabi  </option>
					<option value="Kawanda">Kawanda </option>
					<option value="Kawempe">Kawempe  </option>
					<option value="Kawuku Entebbe">Kawuku Entebbe  </option>
					<option value="Kibuye">Kibuye </option>
					<option value="Kigungu">Kigungu  </option>
					<option value="Kiira">Kiira  </option>
					<option value="Kira">Kira  </option>
					<option value="Kireka">Kireka  </option>
					<option value="Kirinya">Kirinya </option>
					<option value="kisaasi kyanja">kisaasi kyanja </option>
					<option value="Kisaasi">Kisaasi </option>
					<option value="Kisasi">Kisasi </option>
					<option value="Kisubi">Kisubi </option>
					<option value="Kisugu">Kisugu </option>
					<option value="Kitante">Kitante  </option>
					<option value="Kitebi">Kitebi </option>
					<option value="Kiteezi">Kiteezi</option>
					<option value="Kitende">Kitende </option>
					<option value="Kitinda">Kitinda  </option>
					<option value="Kitintale">Kitintale </option>
					<option value="Kiwafu  Muyenga">Kiwafu  Muyenga </option>
					<option value="Kiwafu">Kiwafu </option>
					<option value="Kiwanga">Kiwanga </option>
					<option value="Kiwatule">Kiwatule  </option>
					<option value="Kololo">Kololo </option>
					<option value="Konge">Konge </option>
					<option value="Kulambilo">Kulambilo </option>
					<option value="Kulambiro">Kulambiro </option>
					<option value="Kungu">Kungu</option>
					<option value="Kyaliwajjala">Kyaliwajjala </option>
					<option value="Kyambogo">Kyambogo</option>
					<option value="Kyanja">Kyanja</option>
					<option value="Kyebando">Kyebando</option>
					<option value="Lower Naguru">Lower Naguru  </option>
					<option value="Lubowa">Lubowa  </option>
					<option value="Lugala">Lugala </option>
					<option value="Lugogo">Lugogo </option>
					<option value="Lungujja">Lungujja </option>
					<option value="Luteete">Luteete </option>
					<option value="Luziira">Luziira  </option>
					<option value="Luzira">Luzira  </option>
					<option value="Lweza">Lweza  </option>
					<option value="Makindye">Makindye </option>
					<option value="Masanafu">Masanafu   </option>
					<option value="Mawanda road">Mawanda road  </option>
					<option value="Mbalwa">Mbalwa  </option>
					<option value="Mbuya">Mbuya </option>
					<option value="Mengo">Mengo </option>
					<option value="Mpala">Mpala </option>
					<option value="Mpelerwe">Mpelerwe </option>
					<option value="Mpererwe">Mpererwe  </option>
					<option value="Mulago">Mulago</option>
					<option value="Munyonyo">Munyonyo</option>
					<option value="Mutundwe">Mutundwe </option>
					<option value="Mutungo hill">Mutungo hill</option>
					<option value="Mutungo">Mutungo </option>
					<option value="Muyenga  Bukasa">Muyenga  Bukasa </option>
					<option value="Muyenga Bukasa">Muyenga Bukasa </option>
					<option value="Muyenga">Muyenga  </option>
					<option value="Naalya">Naalya   </option>
					<option value="Naguru">Naguru</option>
					<option value="Najjanankumbi">Najjanankumbi </option>
					<option value="Najjeera">Najjeera </option>
					<option value="Najjera">Najjera  </option>
					<option value="Nakasero">Nakasero </option>
					<option value="Nakwero">Nakwero</option>
					<option value="Nalumunye">Nalumunye </option>
					<option value="Naly">Naly   </option>
					<option value="Nalya">Nalya  </option>
					<option value="Namanve">Namanve  </option>
					<option value="Namirembe">Namirembe </option>
					<option value="Namugongo">Namugongo </option>
					<option value="Namugongo Mbalwa">Namugongo Mbalwa   </option>
					<option value="Namugongo Sonde">Namugongo Sonde  </option>
					<option value="Namugongo">Namugongo</option>
					<option value="Namulanda">Namulanda   </option>
					<option value="Namuwongo">Namuwongo  </option>
					<option value="Nansana">Nansana  </option>
					<option value="Ndejje">Ndejje </option>
					<option value="Nkumba">Nkumba  </option>
					<option value="Nsambya">Nsambya </option>
					<option value="Ntinda stretcher">Ntinda stretcher   </option>
					<option value="Ntinda">Ntinda  </option>
					<option value="Rubaga">Rubaga  </option>
					<option value="Salaama">Salaama </option>
					<option value="Seeta">Seeta </option>
					<option value="Seguku katale">Seguku katale </option>
					<option value="Seguku">Seguku </option>
					<option value="Sonde">Sonde </option>
					<option value="Wakiso">Wakiso </option>
					<option value="wandegeya">wandegeya </option>
					<option value="Zana">Zana </option>
					<option value="Zzana">Zzana </option>

				<option value="KAMPALA BOGOLOBI">------------------</option>
				
				 <option value="GULU">GULU</option>
                <option value="MUKONO">MUKONO</option>
				 <option value="Masaka">Masaka</option>
				<option value="Kasese">Kasese</option>
				<option value="Hoima">Hoima</option>
				<option value="Mbarara">Mbarara</option>
				<option value="Lira">Lira</option>
				
				
              </select>     

		   <textarea name="details" rows="10" class="form-control" placeholder="Details"></textarea><span class="error"> <?php echo $detailsErr;?></span>
           
		   
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well">


  <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  
    <div id="map"></div>
    <script>
	
    function initMap() {
  var myLatLng = {lat: 0.315, lng: 32.634};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',
	draggable: true
  });
 
    google.maps.event.addListener(marker, 'dragend', function (evt) {
    document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
   document.getElementById('long').value = evt.latLng.lng().toFixed(3) ;
    document.getElementById('lat').value = evt.latLng.lat().toFixed(3);
	
	});

}

    </script>
	<div id="current"> </div>

	
	<input name="long" type="hidden" value="" id="long">
	<input name="lat" type="hidden" value="" id="lat">
	

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9uuOzL3Skk7R7Abjlm7ZDhy9yzYv6cOM&callback=initMap">
    </script>



</div>
  </div>		   
			
         
      <button style="height:60px;"type="submit" class="btn btn-success" name="Submit">Add Property</button>
          

</form>
                
        </div>
  <div class="col-lg- col-sm- ">
 </div>
</div>
</div>
</div>

<?php include'footer.php';?>