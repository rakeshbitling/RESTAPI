<?php
require_once "includes/config.php";
$user = new userInformation();
$put = array();
parse_str(file_get_contents('php://input'), $put);
$response_data = $user->update($put);

header( 'Content-Type: application/json' );
if($response_data){
	echo json_encode( 'User Updated Successfully' );	
}else{
	echo json_encode( 'User Already Updated Before' );	
}
exit();
?>