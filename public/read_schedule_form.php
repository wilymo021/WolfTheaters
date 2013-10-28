<?php require_once("../includes/connect_db.php"); ?>

<?php
	if(isset($_POST['submit'])) {

		//process form
		$Last = $_POST["LName"];
		$First = $_POST["FName"];

		try {
		  $query = $connection->prepare(
		    	'INSERT INTO `Employees` (LName, FName) 
		    	  VALUES ("'.$Last.'", "'.$First.'") ' 
		  );

		  $query->execute();

		  header("Location: ../public/admin.php");
		  exit;
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

	} else {

		//otherwise redirect b/c no form submission was made

		header("Location: read_schedule.php");
		exit;
	}
	
?>