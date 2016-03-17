<?php
require_once "includes/config.php";
$user = new userInformation();
$response_data = $user->add($_POST);
header( 'Content-Type: application/json' );
if($response_data){
	echo json_encode( 'User Added Successfully' );	
}else{
	echo json_encode("Email Address Already Present!!!");
}
exit();


?>