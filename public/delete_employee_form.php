<?php require_once("../includes/connect_db.php"); ?>

<?php
	if(isset($_POST['submit'])) {

		//process form
		$Last = $_POST["LName"];
		$First = $_POST["FName"];

		try {
		  $query = $connection->prepare(
		    	'DELETE FROM `Employees` 
		    	WHERE LName = "'.$Last.'"
		    	AND FName = "'.$First.'" 
		    	LIMIT 1 '

		  );

		  $query->execute();

		  header("Location: ../public/admin.php");
		  exit;
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

	} else {
		//otherwise redirect b/c no form submission was made
		header("Location: create_employee.php");
		exit;
	}

?>