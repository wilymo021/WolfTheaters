<?php require_once("../includes/connect_db.php"); ?>
<?php
	if(isset($_POST['submit'])) {

		//process form
		$WorkDate = $_POST["WorkDate"];
		$ShiftStart = $_POST["ShiftStart"];
		$ShiftEnd = $_POST["ShiftEnd"];
		$ID = $_POST["EID"];
		$First = $_POST["First"];
		$Last = $_POST["Last"]; 

		try {
		  $query = $connection->prepare(
		    	'INSERT INTO `Schedule` (EID, WorkDate, ShiftStart, ShiftEnd)
		    	  VALUES ("'.$ID.'", "'.$WorkDate.'", "'.$ShiftStart.'", "'.$ShiftEnd.'")' 
		  );

		  $query->execute();

		  #header("Location: ../public/create_schedule_form.php");
		  #exit;
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}



	} else {

		//otherwise redirect b/c no form submission was made

		header("Location: create_employee.php");
		exit;
	}
	
?>

<html>
	<head> 
		<title>Add Schedule</title>
	</head>

	<body>

       <form action="create_schedule_form2.php" method="post">
        <p>Add another work date or the employee or click 'Done':</p> 

        Date:       <input type="date" name="WorkDate" />    <br />
        Start Time: <input type="time" name="ShiftStart">    <br />
        End Time:   <input type="time" name="ShiftEnd">      <br />
              	    <input type="hidden" name="EID" value=<?php echo $ID ?> > <br />
                    <input type="hidden" name="First" value=<?php echo $First ?> > <br />
                    <input type="hidden" name="Last" value=<?php echo $Last ?> > <br />
        <br />

        <input type="submit" name="submit" value="Add Schedule" />
       
       </form>

       <a href="create_schedule.php">Done</a>

	</body>

</html>
