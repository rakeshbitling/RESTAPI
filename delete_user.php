<?php
require_once "includes/config.php";
$user = new userInformation();
$delete = array();
parse_str(file_get_contents('php://input'), $delete);
$response_data = $user->delete($delete);
header( 'Content-Type: application/json' );
if($response_data){
	echo json_encode( 'User Deleted Successfully' );	
}else{
	echo json_encode( 'User not exists' );	
}
exit();
?>