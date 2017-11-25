 <?php
 
// Note : When creating a signature the URL should not have a trailing slash "/". But add the slash when sending the 
// request. 
echo 'emma';
$url = 'https://vendors.pay-leo.com/api/v2/test/deposit';
$transactionId =  rand(10000000, 99999999);

$msisdn = "256779815657";
$amount = "2000"; 
$narration = "testing";

$consumerSecret = "J5dJfAQAZVuPaZny2s127OGFN11509507009";
$merchantCode = "96248";
$consumerKey = "LMCtNwAifwUzjOJRAo2APaivG11509507009";


$data = $url."&".$msisdn."&".$amount."&".$merchantCode."&".$transactionId."&".$narration;
$signature = hash_hmac("sha256", $data, $consumerSecret);

$PostData = array(
	"msisdn"=> $msisdn,
	"amount"=> $amount,
	"merchantCode"=> $merchantCode,
	"transactionId"=> $transactionId,
	"consumerKey"=> $consumerKey,
	"auth_signature"=> $signature,
	"narration"=> $narration
); 

$postDatas = json_encode($PostData);
$resp = postReq($postDatas);
var_dump($resp); 	

function postReq($data){
 $url = "https://vendors.pay-leo.com/api/v2/test/deposit/";
 $ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	$content=curl_exec($ch);
	curl_close($ch);
	return $content;
}

?>
