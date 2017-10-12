<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->
<?php
$success="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
$email = $_POST['email'];
$number = $_POST['number'];
$msgg = $_POST['mess'];
// use wordwrap() if lines are longer than 70 characters
//$msg =$nam.'<br>'.$email.'<br>'.$number.'<br>'.$msgg ;
// send email
  // header("location:http://www.webranker.orgfree.com/file/email.php?mess=$msgg&email=$email&number=$number");
//exit;
echo("<script>location.href = 'http://www.webranker.orgfree.com/file/email.php?mess=$msgg&email=$email&number=$number'</script>");
	exit;

}

?>

<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
  <?php echo $success?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <input type="text" name="email" class="form-control" placeholder="Email Address">
                <input type="text" name="number" class="form-control" placeholder="Contact Number">
                <textarea rows="6" name="mess" class="form-control" placeholder="Message"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
          

</form>
                
        </div>
  <div class="col-lg-6 col-sm-6 ">
     <style>
       #map {
        height: 400px;
        width: 600px;
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
  });
 


}

    </script>
  
  
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9uuOzL3Skk7R7Abjlm7ZDhy9yzYv6cOM&callback=initMap">
    </script>
  </div>
</div>
</div>
</div>

<?php include'footer.php';?>