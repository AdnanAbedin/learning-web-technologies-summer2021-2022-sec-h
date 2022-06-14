<?php 
	session_start();

 
	$username = $_POST['username'];
	
	

	if($username == null ){
		echo "null username";
	}else{
		if($username == pattern("A-Za-z") && count($username)<2 ){
			$_SESSION['status'] = true;
			
		}else{
			echo "invalid user";
		}
	}

	

?>