<?php
class userInformation{

	//GET
	public static function display($name) {
		global $conn;
		$user_data = array();
		$query = "SELECT * FROM restAPI WHERE name='$name'";
		$result = mysqli_query( $conn, $query );
		$data   = mysqli_fetch_assoc($result);
		if($result->num_rows>0){
			$user_data = array('Id'=>$data['id'],'email'=>$data['email'],'password'=>$data['password']);
			return $user_data;	
		}else{
			return NULL;
		}		
	}


	//POST
	public function add($data) {
		global $conn;
		$user_data = array();
		
		//Check email exists already..
		$Check = "SELECT * FROM restAPI where email='".$data[email]."'";
		$result = mysqli_query( $conn, $Check );
		if($result->num_rows > 0){
			return false;
		}else{
		$query = "INSERT INTO restAPI (name,email) VALUES ('".$data['username']."','".$data['email']."')";
		$result = mysqli_query( $conn, $query );
		  if($result){
			return true;
		 }
	    }//else...
	}//add function end...

	//PUT
	public function update($data) {
		global $conn;
		$query = "UPDATE restAPI SET email='".$data[email]."' WHERE id='".$data[id]."'";
		
		$result = mysqli_query( $conn, $query );
  	     if($result){
			return true;
		 }else{
		 	return false;
		 }
	}

	//PUT
	public function delete($data) {
		global $conn;
		$query = "DELETE FROM restAPI WHERE id='".$data[id]."'";
		$result = mysqli_query( $conn, $query );
  	     if($result){
			return true;
		 }else{
		 	return false;
		 }
	}	
	
}
?>