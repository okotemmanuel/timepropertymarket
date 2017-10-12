<?php include'header.php';?>
<!-- banner -->
<?php
// Start the session
include_once 'con-config.php'; 
//session_start(); 

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
$photErr="";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

?>
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Interested</span>
    <h2>INTERESTED</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<?php
	$sqls="SELECT * FROM property WHERE salerent='SALE' ORDER BY id DESC LIMIT 5";
        $results = mysqli_query($conn, $sqls);
	
  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

$idt = $rows["id"];
$tit = $rows["title"];
$pri = $rows["price"];
$det = $rows["details"];
$loc = $rows["location"];
$img1 = $rows["img1"];

$prii = $pri;
echo '<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="admin/'.$img1.'" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php?id='.$idt.'">'.$tit.'</a></h5>
                  <p class="price">: '.$prii.'</p> </div>
  </div>';}}

?>

</div>



<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">
<?php

$idt = $_GET['id'];

$sqls="SELECT * FROM property WHERE id='$idt' ORDER BY id DESC LIMIT 1";
$results = mysqli_query($conn, $sqls);
$rows = mysqli_fetch_assoc($results);
$idt = $rows["id"];
$tit = $rows["title"];
$pris = $rows["price"];
$det = $rows["details"];



$locat = $rows["location"];
$lat = $rows["lati"];

$loc = $rows["loc"];
$img1 = $rows["img1"];
$img2 = $rows["img2"];
$img3 = $rows["img3"];
$img4 = $rows["img4"];
//$pri = number_format($pris);
$pri =$pris;
?>
<h2><?php echo $tit?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="<?php echo 'admin/'.$img1?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="<?php echo 'admin/'.$img2?>" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="<?php echo 'admin/'.$img3?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="<?php echo 'admin/'.$img4?>" class="properties" alt="properties" />
          
        </div>
        <!-- # Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <?php echo $det?>
  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well">

  <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  
    <div id="map"></div>
    <script type="text/javascript">
		
			
    function initMap() {
	var a = <?php echo $locat?>;
		var b = <?php echo $lat?>;
  var myLatLng = {lat: a, lng: b};

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

	


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9uuOzL3Skk7R7Abjlm7ZDhy9yzYv6cOM&callback=initMap">
    </script>
  </div>

  </div>  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price"><?php echo ''.$pri?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span><?php echo $loc?></p>
  
  <!--div class="profile">
  <span class="glyphicon glyphicon-user"></span> 
  <p><br></p>
  </div-->
</div>

    <!--h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <!--span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div-->

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">


  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
<form action="propemail.php" method="POST">  
			 <input name="idt" type="hidden" value="<?php echo $idt?>"/>
                <input name="email" type="text" class="form-control" placeholder="your Email"/>
                <input name="number" type="text" class="form-control" placeholder="your Telephone number"/>
                <textarea name="mess" rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include'footer.php';?>