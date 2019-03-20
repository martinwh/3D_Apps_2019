<?php
	

		try
		{
			//open the database
			$dbhandle = new PDO('sqlite:test_PDO.sqlite', 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));

			//create a database table
			$dbhandle->exec("CREATE TABLE Cars (Id INTEGER PRIMARY KEY, Brand TEXT, Name TEXT, Colour TEXT)");   
			
			//insert some data...
			$dbhandle->exec("INSERT INTO Cars (Brand, Name, Colour) VALUES ('Mecedes', 'SL', 'Black');".
				"INSERT INTO Cars (Brand, Name, Colour) VALUES ('BMW', '5 Series', 'White'); " .
				"INSERT INTO Cars (Brand, Name, Colour) VALUES ('Audi', 'A5', 'Silver');");

			//now output the data to a simple html table...
			print "<table border=1>";	
			print "<tr><td>Id</td><td>Brand</td><td>Name</td><td>Colour</td></tr>";
			$result = $dbhandle->query('SELECT * FROM Cars');	
			foreach($result as $row)	
			{
				print "<tr><td>".$row['Id']."</td>";
				print "<td>".$row['Brand']."</td>";
				print "<td>".$row['Name']."</td>";
				print "<td>".$row['Colour']."</td></tr>";
			}
			print "</table>";

			// close the database connection

			$dbhandle = NULL;
		}
		catch(PDOException $e)
		{
			print 'Exception : '.$e->getMessage();
		}

?>
