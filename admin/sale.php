<?php include'header.php';?>
<!-- banner -->
<?php
// Start the session
include_once '../con-config.php'; 
//session_start(); 
?>


<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / for sale</span>
    <h2>FOR SALE</h2>
</div>
</div>
<!-- banner -->
<?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 

 
$higErr=$lowErr="";
$low=$hig=$cat2=$loc="";

 


 
 ?>

<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">
<form method="POST"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  
    <!--input type="text" class="form-control" placeholder="Search of Properties"-->
	 
           <select name="cat2" class="form-control">
	<option value="HOUSES">HOUSES</option>
				 <option value="INDUSTRIAL">INDUSTRIAL</option>
				 <option value="COMMERCIAL">COMMERCIAL</option>
                <option value="PLOTS">PLOTS</option>
				<option value="FARMLANDS">FARM LANDS</option>
              </select>
			  
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
			
    <div class="row">
          
            <div class="col-lg-12">
            PRICE (in UGX)
            </div>
			 <div class="col-lg-6">
             <input name="low" type="number" class="form-control" placeholder="LOWEST">
            </div>
			 <div class="col-lg-6">
             <input name="hig" type="number" class="form-control" placeholder="HIGHEST">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Find Now</button>
</form>
  </div>



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



echo '<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="'.$img1.'" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php?id='.$idt.'">'.$itt.'</a></h5>
                  <p class="price"> UGX : '.$pri.'</p> </div>
  </div>';}}

?>


</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">RELATED PROPERTIES<br></div>
  <div class="pull-right">
 </div>

</div>
<div class="row">
<?php
if( empty($_POST['cat2']) && empty($_POST['loc']) && empty($_POST['low']) && empty($_POST['hig'])){
    
	$sqls="SELECT * FROM property WHERE salerent='SALE' ORDER BY id DESC LIMIT 50";
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
$img2 = $rows["img2"];
$img3 = $rows["img3"];
$img4 = $rows["img4"];

if(strlen($tit)>'20'){
	$poss=strpos($tit , ' ', 17);
$titt= substr($tit,0,$poss );
	
}else{
	$titt = $tit;
}
$pri = number_format($pri);
echo     '<div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder">'.'<img src="'.$img1.'" class="img-responsive" alt="properties">'.'
          <div class="status sold"></div>
        </div>
        <h4><a href="property-detail.php">'.$titt.'..</a></h4>
        <p class="price">Price:'.$pri.'</p>
        
		<p><a class="btn btn-primary" href="property-detail.php?id='.$idt.'">View Details'.'</a></p>
		<p><a class="btn btn-primary" href="editproperty.php?id='.$idt.'">Edit property Details'.'</a></p>
        <p><a class="btn btn-primary" href="del.php?id='.$idt.'">Remove property '.'</a></p>
      </div>
      </div>';

}}}else{


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   
	   $cat2 = $_POST['cat2'];
	    $loc = $_POST['loc'];

if (empty($_POST["low"])) {
     $lowErr = "lowest value is required";
   } 
	 else{
	 	 	  $low = $_POST['low'];
	 }
	 	  	if (empty($_POST["hig"])) {
     $higErr = "title  is required";
   } 
	 else{
	 	 	  $hig = $_POST['hig'];
	 }
	 
	//echo $cat2.''.$loc.''. $low.''.$hig;
	 
	 if( !empty($cat2) && !empty($loc) && !empty($low) && !empty($hig)){
$sqls="SELECT * FROM property WHERE salerent='SALE' AND  price BETWEEN $low AND $hig ORDER BY id DESC LIMIT 50";
///cat='$cat2' 4 AND loc='$loc' AND
      
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
$img2 = $rows["img2"];
$img3 = $rows["img3"];
$img4 = $rows["img4"];

if(strlen($tit)>'20'){
	$poss=strpos($tit , ' ', 21);
$titt= substr($tit,0,$poss );
	
}else{
	$titt = $tit;
}
$pri = number_format($pri);

echo     '<div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder">'.'<img src="'.$img1.'" class="img-responsive" alt="properties">'.'
          <div class="status sold"></div>
        </div>
        <h4><a href="property-detail.php">'.$titt.'</a></h4>
        <p class="price">Price:'.$pri.'</p>
        
		<p><a class="btn btn-primary" href="property-detail.php?id='.$idt.'">View Details'.'</a></p>
		<p><a class="btn btn-primary" href="editproperty.php?id='.$idt.'">Edit property Details'.'</a></p>
      	<p><a class="btn btn-primary" href="del.php?id='.$idt.'">Remove property '.'</a></p>
	  </div>
      </div>';
		 
		 
	 }
	 
}else{
	echo '<br><br>no results found';
}
}
}}
?>
     <!-- properties>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold"></div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Price: $234,900</p>
        
		<a class="btn btn-primary" href="property-details.php">View Details</a>
      </div>
      </div>
      <!-- properties -->


      
</div>
<a href="addproperty.php"><button class="btn btn-primary">ADD NEW PROPERTY</button></a>

</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>