<!DOCTYPE html>
<html lang="en">
<head>
<title>THE MARIAN EXPRESS PROPERTY MARKET</title>
<meta charset="UTF-8" />
<meta name="keywords" content="time property market,real estate market in uganda,time property,houses for rent/sale in uganda,land for rent/sale in uganda,houses/land in uganda">

<meta name="author" content="okot emmanuel">

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <!--li><a href="agents.php">Agents</a></li>         
                <li><a href="blog.php">Blog</a></li-->
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php">

<style>
.ihn{
height:100px;
width:250px;
position:relative;	
z-index:5;
margin-top:-10px;
margin-bottom:-10px;
}
.cal{
	position:fixed;
	z-index:5;
	
	color:green;
	height:50px;
	font-size:15px;
	background-color:white;
	margin-top:30%;
	margin-left:85%;
	border-style:solid;
	border-color:red;
	border-width:1px;
}
.cal:hover{
	height:300px;
	margin-top:10%;
	width:400px;
	margin-left:60%;
	border-color:green;
	
}
.dat{
	padding:5px;
}
</style>
<img src="images/logoo.png" class="ihn"  style="" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="sale.php">FOR SALE</a></li>
                <!--li><a href="buysalerent.php"></a></li-->         
                <li><a href="rent.php">FOR RENT</a></li>
              </ul>
</div>
<!-- #Header Starts -->

<div style="overflow-x:scroll;" class="cal">
<script type="text/javascript">
function fun(){
	var a = document.getElementById('amt').value;
	var b = document.getElementById('dol').value;
	var c = a / b ;
	document.getElementById('res').innerHTML = 'RESULT = '+c;
}

</script>

<div class="dat">
<p style="color:green;"><marquee>CURRENY CONVERSION</marquee></p> <BR>

 <div class="col-lg-10">
 <input id="amt"  type="number" class="form-control" placeholder="AMOUNT in uganda shillings">
 </div>
 
 <div class="col-lg-10">
 <input id="dol"  type="number" class="form-control" placeholder="dollar value">
  <button onclick="fun()" class="col-lg-10 btn btn-primary">Convert</button>
 </div>
  
</div><hr>
<br><br>
<div style="margin-top:20px;" class="col-lg-10" id="res"></div>
</div>





</div>