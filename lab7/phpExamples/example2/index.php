<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My PHP If...Else Example 2</title>
</head>

<body>
	<p><a href="index.php">Home</a> | 
       <a href="index.php?id=work">Work</a> | 
       <a href="index.php?id=about">About</a>
    </p>
       <?php
	    	$page = $_GET['id'];
			if ($page == "work")
			{
				echo"<p><b>Work</b> Here is my work. </p>";
			}
			else if ($page == "about")
			{
				echo"<p><b>About</b> Read about me. </p>";
			}
			else
			{
				echo"<p><b>Home</b> Welcome to my website. </p>";
			}
       ?>
</body>
</html>