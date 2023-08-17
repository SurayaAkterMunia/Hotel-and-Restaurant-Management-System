<?php 
	session_start();
	$con = mysqli_connect("localhost","root","","hotel");
	
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
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

	function isReception()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'Reception' ) {
			return true;
		}else{
			return false;
		}
	}

	function isWaiter()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'Waiter' ) {
			return true;
		}else{
			return false;
		}
	}

	function isResturant()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'Resturant' ) {
			return true;
		}else{
			return false;
		}
	}
?>