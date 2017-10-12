<?php


$id = $_GET['idt'];

$mess = $_GET['mess'];
$subject='Need Property';
$our ='okotemmanuel22@yahoo.com';

if(empty($_GET['email']) )
{
echo $emailerr ="email is needed";
echo '<a href="http://www.timepropertymarket.com/property-detail.php?id=$id">click to go back</a>';

	}
else{
$email = $_GET['email'];
}


if(empty($_GET['number']) )
{
echo $emailerr ="telephone number is needed<br>";
echo '<a href="http://www.timepropertymarket.com/property-detail.php?id=$id">click to go back</a>';
	}
else{
$num = $_GET['number'];
}
if(empty($id)){
	$subject = 'Contact timepropert market';
	$headers = "FROM : ".$email."\r\n";
	$tim = 'timepropertymarket@gmail.com';
$headers .= "Reply-To:".$email."\r\n";
$headers .= "Return-Path:". $email."\r\n";
$headers .= "CC:".$email."\r\n";
$headers .= "BCC:".$tim ."\r\n";
	mail($our,$subject,$mess,$headers);
header("location:http://www.timepropertymarket.com/contact.php");
exit;
}

elseif(!empty($num) && !empty($email) ){

$tim = 'timepropertymarket@gmail.com';
//$our ='tmepropertymarket@yahoo.com';
$our ='okotemmanuel22@yahoo.com';
$link = 'http://www.timepropertymarket.com/property-detail.php?id='.$id;

$tom = 'Email - '.$email.' ,Tel - '.$num.',Interested in this property - '.$link.' MESSAGE - '.$mess;
$headers = "FROM : ".$email."\r\n";
$headers .= "Reply-To:".$email."\r\n";
$headers .= "Return-Path:". $email."\r\n";
$headers .= "CC:".$email."\r\n";
$headers .= "BCC:".$tim ."\r\n";

if ( mail($our,$subject,$tom,$headers) ) {
   echo "The email has been sent!";
   header("location:http://www.timepropertymarket.com/property-detail.php?id=$id");
exit;
   } else {
   echo "The email has failed!";
   }

}
//}



/*
$id = '5';
$email = 'okotemmanuel22@gmail.com';
$num = '10';
$mess = 'hello ';
$subject='need this';
*/


?>