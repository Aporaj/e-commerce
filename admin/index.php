<?php
	
	if(isset($_SESSION['ref'])){
			include('admin_home.php');
	}else{
		include("admin_index.php");
		}
		
	if(!isset($_SESSION['ref']) || (trim($_SESSION['ref']) == ''))
	{
		header("location:admin_index.php"); 
		exit();
	}
?>