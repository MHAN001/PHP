<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="����")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	else
	{
		echo "<script>javascript:location.href='left.html';</script>";
	}
		
?>