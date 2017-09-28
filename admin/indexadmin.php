<?php include'header.php';?>
<?php
// Start the session
include_once '../con-config.php'; 
//session_start(); 
?>

<?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
$photErr="";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
?>
<div class="">
 

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
		 <?php
 
 	$sqls="SELECT * FROM coverimg ";
        $results = mysqli_query($conn, $sqls);
	
  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

$idt = $rows["id"];
$tit = $rows["title"];
$pri = $rows["price"];
$det = $rows["detail"];
$loc = $rows["location"];
$img1 = $rows["img"];

$post=strpos($det , ' ', 10);
$dett= substr($det,0,$post ); 

echo     '<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div style="background-image: url('.$img1.');" class="bg-img"></div>
              <h2><a href="#">'.$tit.'</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>'.$loc.'</p>
              <p>'.$dett.'</p>
              <cite>'.$pri.'</cite>
              </blockquote>
            </div>
  </div>';}}
 
 ?>
      
          
         



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
   <button class="btn btn-success"  onclick="window.location.href='addcimg1.php'">Change Cover Images</button>
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        
          <div class="row">
		  <form method="POST"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="sale.php"> 
 
            <div class="col-lg-6 col-sm-6 ">
             <select name="cat2" class="form-control">
    	<option value="HOUSES">HOUSES</option>
				 <option value="INDUSTRIAL">INDUSTRIAL</option>
				 <option value="COMMERCIAL">COMMERCIAL</option>
                <option value="PLOTS">PLOTS</option>
				<option value="FARMLANDS">FARM LANDS</option>
              </select>
            </div>
            <div class="col-lg-6 col-sm-6">
             <select name="loc" class="form-control">
                <option value="KAMPALA">KAMPALA</option>
				  <option value="KAMPALA LUZIRA">-----KAMPALA LUZIRA</option>
				    <option value="KAMPALA BOGOLOBI">-----KAMPALA BOGOLOBI</option>
				 <option value="GULU">GULU</option>
                <option value="MUKONO">MUKONO</option>
				<option value="INDUSTRIALSHOPS"></option>
				<option value="INDUSTRIALSTORES">INDUSTRIAL STORES</option>
                <option value="FARMAGRICULTURAL">FARM AGRICULTURAL</option>
				 <option value="FARMREARING">FARM  REARING</option>
              </select>
            </div>
            
             <div class="col-lg-12">
            PRICE (in UGX)
            </div>
			 <div class="col-lg-4">
             <input name="low" type="number" class="form-control" placeholder="LOWEST">
            </div>
			 <div class="col-lg-4">
             <input name="hig" type="number" class="form-control" placeholder="HIGHEST">
            </div>
             
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  type="submit">Find Now</button>
              </div>
			  </form>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="sale.php" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
	
	<?php
	
		$sqls="SELECT * FROM property ORDER BY id DESC LIMIT 10";
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

$poss=strpos($tit , ' ', 3);
$titt= substr($tit,0,$poss ); 

echo ' <div class="properties">
        <div class="image-holder"><img src="'.$img1.'" class="img-responsive" alt="properties"/>
          <div class="status sold"></div>
        </div>
        <h4><a href="property-detail.php">'.$titt.'...</a></h4>
        <p class="price">Price:'.$pri.'</p>
        <!--div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div-->
        <a class="btn btn-primary" href="property-detail.php?id='.$idt.'">View Details</a>
  </div>';}}
	
	?>
     
	  
	  


      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
		
		<?php

 
 $sqls="SELECT * FROM about ORDER BY id DESC LIMIT 1";
$results = mysqli_query($conn, $sqls);
$rows = mysqli_fetch_assoc($results);
$backg = $rows["backg"];
$compf = $rows["compprof"];

$pos=strpos($backg , ' ', 20);
$kop = substr($backg,0,$pos ); 
 
?>
        <p><?php echo $kop.'...'?><br>
		<br><a href="about.php">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
		  <?php
		  
$sqls="SELECT * FROM property ORDER BY id DESC LIMIT 10";
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
	
  echo  '<div class="item">
              <div class="row">
                <div class="col-lg-4">'.'<img src="'.$img1.'" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">'.$tit.'</a></h5>
                  <p class="price">:'.$pri.'</p>
                  <a href="property-detail.php?id='.$idt.'" class="more">More Detail</a> </div>
              </div>
            </div>';
	}}
		  ?>
		  
         
			
			
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php"></a></h5>
                  <p class="price"></p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
        
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>