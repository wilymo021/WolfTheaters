
<?php include 'update_form.php' ?>
<?php require_once("../includes/connect_db.php"); ?>

<?php
	if(isset($_POST['submit'])) {

		//process form
		$ID = $_POST["ID"];
		$Last = $_POST["LName"];
		$First = $_POST["FName"];

		try {
		  $query = $connection->prepare(
		  	    'UPDATE `Employees`
		  		 SET 'LName' = "'.$Last.'" ,
		  			 'FName' = "'.$First.'"
		  		 WHERE EID = "'.$ID.'" '
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