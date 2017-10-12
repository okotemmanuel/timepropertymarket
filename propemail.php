<?php
$success="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $id = $_POST['idt'];
$email = $_POST['email'];
$number = $_POST['number'];
$msgg = $_POST['mess'];

echo("<script>location.href = 'http://www.webranker.orgfree.com/file/email.php?mess=$msgg&email=$email&number=$number&idt=$id'</script>");
	exit;

}

?>