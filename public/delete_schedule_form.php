<?php require_once("../includes/connect_db.php"); ?>

<?php 								#process first form entry first
	if(isset($_POST['submit'])) {

		//process form
		$Last = $_POST["LName"];
		$First = $_POST["FName"];

		try {
		  $query =
		    	'SELECT EID
		    	 FROM `Employees`
		    	 WHERE LName = "'.$Last.'"
		    	 AND FName = "'.$First.'"
		    	 LIMIT 1';


		  $stmt = $connection->query($query);
		  $result = $stmt->setFetchMode(PDO::FETCH_NUM);

		  $ID = $stmt->fetch();
          $EID = $ID[0];

		   $query = 
		   		'SELECT *
		   		 FROM `Schedule` 
		   		 WHERE EID = "'.$EID.'"';

		   	$stmt = $connection->query($query);
		   	$result = $stmt->setFetchMode(PDO::FETCH_NUM);

		   	#display schedules for specific employee so that manager can view them
		   	#to decide what to delete, if anything
		   	int $i = 0;
		   	while($row = $stmt->fetch()) {
		   		print $i . "\t" . $row[1] . "\t" . $row[2] .  "\t" . $row[3] . "\t" . $row[4] . "\n";
		   		$i = $i + 1;
		   	}

		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

	} else {
		//otherwise redirect b/c no form submission was made
		header("Location: create_schedule.php");
		exit;
	}
	
?>

 <html>
 	<head>
 		<title>Delete Employee Schedule</title>
 	</head>
 	<body>
       <form action="create_schedule_form2.php" method="post">
        <p>Enter the index (the first number displayed before each workday above) for the day you'd like 
        to delete from the employee's schedule (up to 3 days at once; the option to delete more will be given immediately following your first deletion:</p> 
        <?php

         ?>

        <br />
        <?php /* add drop-down list w/ loop to range i (number of schedules for this employee)*/ ?>
        <input type="submit" name="submit" value="Add Schedule" />
       
       </form>
       
       <a href ="create_schedule.php"> Cancel </a>

 	</body>


 </html>