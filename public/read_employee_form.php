<?php require_once("../includes/connect_db.php"); ?>

<?php
	if(isset($_POST['submit'])) {

		//process form
		$Last = $_POST["LName"];
		$First = $_POST["FName"];

		try {
		  $query = 'SELECT EID, LName, FName 
		    	    FROM `Employees`
		    	    WHERE LName = "'.$Last.'"
		    	    AND FName = "'.$First.'" 
		    	    LIMIT 1';

		  $stmt = $connection->query($query);
		  $result = $stmt->setFetchMode(PDO::FETCH_NUM);
		  	while($row = $stmt->fetch()) {
		  		print $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
		  		//global $StID = $row[0];
		  	}
		  //also give option to print all employee information
		  //statement if employee doesn't exist



		 // header("Location: ../public/admin.php");
		 // exit;
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

	} else {
		//otherwise redirect b/c no form submission was made
		header("Location: read_employee.php");
		exit;
	}

?>
<p>
<a href = "../public/admin.php"> Done </a>
</p>