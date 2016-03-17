<?php
require_once "includes/config.php";
$urlVariables = explode( "/", $_SERVER['REQUEST_URI'] );
$urlCond = explode( "?", $urlVariables[2]);

if ( $_SERVER['REQUEST_METHOD']=="GET" && $urlCond[0] == 'show.json' ) {
	include "display_users_info.php";
}else if ($_SERVER['REQUEST_METHOD']=="POST" && $urlCond[0] == 'add.json') {	
	include "add_user.php";
}else if ($_SERVER['REQUEST_METHOD']=="PUT" && $urlCond[0] == 'update.json') {	
	include "update_user.php";
}else{
	include "delete_user.php";
}
exit();
?>