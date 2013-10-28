<html>

  <head>
    <title> Admin: Scheduling </title>
  </head>

  <body>

    <?php require_once("../includes/connect_db.php"); 
      #require login *page for managers only* if no login ; redirect to login page;
    ?>


    <div id = "header">
    	<h1>Wolf Theaters</h1>
    </div>

    <div id = "main">

      <div id = "navigation">
      	&nbsp;
      </div>

      <div id = "page">
        <h2> Admin Menu </h2>

        <ul>
        	<li><a href="read_employee.php">View Employee Information</a></li>
        	<li><a href="create_employee.php">Add New Employee</a></li>
        	<li><a href="update_employee.php">Update Employee Information</a></li>
        	<li><a href="delete_employee.php">Remove Employee</a></li>
          <li><a href="read_schedule.php">View Employee Schedules</a></li>
          <li><a href="create_schedule.php">Add Employee Schedule</a></li>
          <li><a href="update_schedule.php">Update Employee Schedule</a></li>
          <li><a href="delete_schedule.php">Delete Employee Schedule</a></li>
        	<li><a href="logout.php">Logout</a></li>
        </ul>

      </div>

     </div>

     <div id="footer">
     	&nbsp;
     </div>

  </body>
</html>