<?php 
	session_start();
	include("connect.php");
	
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM user WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isCustomer()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'customer' ) {
			return true;
		}else{
			return false;
		}
	}

?>