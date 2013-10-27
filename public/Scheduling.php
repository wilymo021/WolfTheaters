<html>
	<head> 
		<title> Scheduling </title> 
	</head>

	<body>
		<?php
		try{
			$db = new PDO('mysql:host=localhost;dbname=Scheduling', 'root', 'cutters1993');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
		
		<form action = "add_employee.php" method="post">
		  <prst Name
		</form>
		
		
		
		
	    ?>



</body>

</html>