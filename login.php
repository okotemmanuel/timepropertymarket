<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Admin</span>
    <h2>Admin Login</h2>
</div>
</div>
<!-- banner -->
<?php
$name="";
$pwd = $email =$emailerr = $pwderr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST['email']) )
{
	$emailerr ="email is empty";
	
	}
else{
	if($_POST['email'] == 'timepropertymarket@time.com'){
		$email = $_POST['email'];
	}
	else{
		$emailerr ="email is not correct";
	}
	
	}

if(empty($_POST['pwd'])){$pwderr ="password is empty";}
else{
	if($_POST['pwd'] =='44x88y66t'){
			$pwd = $_POST['pwd'];
	}
	else{
		$pwderr ="password is not correct";
	}
}	
	
//echo $email.''.$pwd;	

if(!empty($pwd)&&!empty($email)){
echo("<script>location.href = 'admin/indexadmin.php'</script>");
	exit;
}

}


//header("location:admin/indexadmin.php");
	//exit;


	


?>
<div class="container">
<div class="spacer">
<div class="row contact">
<div class="col-lg-2 col-sm-2 ">
</div>
  <div class="col-lg-6 col-sm-6 ">
<style>
.h{
	color:red;
}
</style>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="text" name="email" class="form-control" placeholder="User Name/Email"><span class="h"><?php echo $emailerr?></span>
                <input type="password" name="pwd" class="form-control" placeholder="Password"><span class="h"><?php echo $pwderr?></span>
               
   <input style="height:60px;" type="submit" class="btn btn-success" value="Submit"></input>
          

</form>
                
        </div>
  <div class="col-lg-3 col-sm-3 ">
 </div>
</div>
</div>
</div>

<?php include'footer.php';?>