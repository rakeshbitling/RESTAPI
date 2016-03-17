<?php

//Concept of Autoloading....
function __autoload( $class_name ) {
//class directories
$directorys = array(
'classes/',
'classes/userOperations/',
);

//for each directory
foreach ( $directorys as $directory ) {
//see if the file exsists
if ( file_exists( $directory.$class_name . '.php' ) ) {
require_once $directory.$class_name . '.php';
//only require the class once, so quit after to save effort (if you got more, then name them something else
return;
}
}
}

//Api database connectivity...
define( 'FRONT_END_HOST', 'localhost' );
define( 'FRONT_END_USER', 'root' );
define( 'FRONT_END_PASS', '123456' );
define( 'FRONT_END_DB', 'phpgang' );
define( 'SITE_URL', 'http://localhost/api');

$conn = new mysqli( FRONT_END_HOST, FRONT_END_USER, FRONT_END_PASS, FRONT_END_DB );
if ( $conn->connect_error ) {
	die( 'Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error );
}
?>