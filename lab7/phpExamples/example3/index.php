<?php
	include "header.php" ;
	include "menu.php";
	$page = $_GET['id'];
	if ($page == "home")
	{
		include "home.php";
	}
	else if ($page == "coke")
	{
		include "coke.php";
	}
	else if ($page == "sprite")
	{
		include "sprite.php";
	}
	else if ($page == "pepper")
	{
		include "pepper.php";
	}
	include "footer.php";
?>
