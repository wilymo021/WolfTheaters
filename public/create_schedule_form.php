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
 		<title>Add Employee Schedule</title>
 	</head>
 	<body>

       <form action="create_schedule_form2.php" method="post">
        <p>Enter the Employee's Schedule:</p> 
        <?php 

        	#can add as many scheduled days as they'd like
        	#submit button adds day that they've added
        	#brings them back to this page
        	#option of adding another day
        	#or being done and leaving page
        	#**deal w/ input errors later**
        	#possibly implement in different way
        		#using 'week' input type
        			#adding schedule by week instead

        ?> 
        Date:       <input type="date" name="WorkDate" />    <br />
        Start Time: <input type="time" name="ShiftStart">    <br />
        End Time:   <input type="time" name="ShiftEnd">      <br />
              	    <input type="hidden" name="EID" value=<?php echo $EID ?> > <br />
                    <input type="hidden" name="First" value=<?php echo $First ?> > <br />
                    <input type="hidden" name="Last" value=<?php echo $Last ?> > <br />
        <br />

        <input type="submit" name="submit" value="Add Schedule" />
       
       </form>
       
       <a href ="create_schedule.php"> Cancel </a>

 	</body>


 </html>

