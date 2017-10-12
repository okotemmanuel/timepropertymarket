<?php include'header.php';?>
<?php
// Start the session
include_once 'con-config.php'; 
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

if(strlen($tit)>'20'){
	$poss=strpos($tit , ' ', 21);
$titt= substr($tit,0,$poss );
	
}else{
	$titt = $tit;
} 


$prii = number_format($pri);

echo     '<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div style="background-image: url(admin/'.$img1.');" class="bg-img"></div>
          
            </div>
  </div>';}}
     /*<h2><a href="#">'.$titt.'</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>'.$loc.'</p>
              <p>'.$dett.'</p>
              <cite>'.$pri.'</cite>
              </blockquote>*/
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

    <!-- banner -->
    <h3>Buy & Rent</h3>
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
               		  <option value="KAMPALA LUZIRA">-----KAMPALA--</option>
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
          <a href="contact.php"><button class="btn btn-info" >JOIN</button> </a>
		 
		 </div>
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

if(strlen($tit)>'15'){
	$poss=strpos($tit , ' ', 15);
$titt= substr($tit,0,$poss );
	
}else{
	$titt = $tit;
} 


$prii = $pri;

echo ' <div class="properties">
        <div class="image-holder"><img style="height:150px;" src="admin/'.$img1.'" class="img-responsive" alt="properties"/>
          <div class="status sold"></div>
        </div>
        <h4><a href="property-detail.php">'.$titt.'...</a></h4>
        <p class="price">Price:'.$prii.'</p>
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
                <div class="col-lg-4">'.'<img src="admin/'.$img1.'" class="img-responsive" alt="properties"/></div>
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