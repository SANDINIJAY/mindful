 
<?php 
session_start(); 
include "insert.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	    exit();
	}else if(empty($password)){
    header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM email_pass WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {

              $_SESSION['email'] = $row['email'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];
              
            	
            	header("Location: Events.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect Email  or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}

