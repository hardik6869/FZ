<?php

	session_start();

	if(isset($_SESSION['admin'])){
		
	}
	else{
		header('location: login.php');	
	}


include('../conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM dishes WHERE id = $id";

mysqli_query($con,$sql);

header('location:../admin/dishes.php');

?>