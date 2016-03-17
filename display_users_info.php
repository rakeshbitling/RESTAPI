<?php
	require_once "includes/config.php";
	$userArr = explode('=',$urlCond[1]);
	//Calling object and pass data...
	$user = new userInformation();
	$response_data = $user->display($userArr[1]);
	header( 'Content-Type: application/json' );
	if($response_data){
		echo json_encode( $response_data );	
	}else{
		echo json_encode("Information Not Available");
	}
	exit();
?>