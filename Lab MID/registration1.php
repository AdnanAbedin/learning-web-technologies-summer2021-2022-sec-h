<?php 
		$Id = "";
		$IdErrMsg= "";
		$usertype ="";
		$usertypeErrMsg ="";
		$password ="";
		$passwordErrMsg ="";
		$Confirmpassword ="";
		$ConfirmpasswordErrMsg ="";
		$Name ="";
		$NameErrMsg ="";

		if ($_SERVER['REQUEST_METHOD'] === "POST")
        { 
            function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$Id = test_input($_POST['Id']);
			
			$usertype = isset($_POST['usertype']) ? test_input($_POST['usertype']) : "";
			$password = test_input($_POST['password']);
			$Confirmpassword = test_input($_POST['confirmpassword']);
            $Name = test_input($_POST['Name']);
		

			$message = "";
			if (empty($Id)) {
				$IdErrMsg = "Id is Empty.";
				$message .= "Id is Empty.";
				$message .= "<br>";
			}
			
			
			if (empty($usertype)) {
				$usertypeErrMsg = "User Type not Selected.";
				$message .= "User Type not Selected.";
				$message .= "<br>";
			}
			if (empty($password)) {
				$passwordErrMsg = "Password is Empty.";
				$message .= "Password is Empty.";
				$message .= "<br>";
			}
    
			


			
			if (empty($Confirmpassword)) {
				$ConfirmpasswordErrMsg = "Password is incorrect.";
				$message .= "Password is incorrect.";
				$message .= "<br>";
			}
          
		
           
                if (empty($Name)) {
                    $NameErrMsg = " Name is Empty.";
                    $message .= " Name is Empty.";
                    $message .= "<br>";
                }
               
			

			if ($message === "") {
				echo "Registration Successful";
			}
			else {
				echo $message;
			}
        }
	?>
       
