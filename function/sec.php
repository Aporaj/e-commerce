<?php
session_start();

if(!ISSET($_SESSION['ref']))
	{
		echo "<script>window.location = 'index.php';</script>";
	}
	

?>