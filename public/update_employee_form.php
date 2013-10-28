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
		    	    AND FName = "'.$First.'" ';

		  $stmt = $connection->query($query);
		  $result = $stmt->setFetchMode(PDO::FETCH_NUM);

		  	$ID = $stmt->fetch();
		  	$EID = $ID[0];

//		  header("Location: ../public/update_employee2.php");
//		  exit;
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

	} else {
		//otherwise redirect b/c no form submission was made
		header("Location: update_employee.php");
		exit;
	}

?>


<html>
  <head>
    <title>
      Update Employee Information
    </title>
    <body>

    <?php require_once("../includes/connect_db.php"); ?>
      <p>Update the information you'd like to change: </p>
      <form action="update_employee_form2.php" method="post">
      	ID: <input type="text" name="EID" value=<?php echo $EID ?> /> <br />
        First Name: <input type="text" name="FName" value=<?php echo $First ?> /><br />
        Last Name: <input type="text" name="LName" value=<?php echo $Last ?> /><br />
        <br />
        <input type="submit" name="submit" value="Update Information" />
      </form>
      <a href ="admin.php"> Cancel</a>
    </body>

  </head>
</html>