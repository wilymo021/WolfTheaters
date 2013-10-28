<html>
  <head>
    <title>
      Add New Employee
    </title>
    <body>

    <?php require_once("../includes/connect_db.php"); ?>
      <form action="create_schedule_form.php" method="post">
        <p>Enter the name of the employee whose schedule you would like to delete: </p>
        First Name: <input type="text" name="FName" value='' /><br />
        Last Name: <input type="text" name="LName" value='' /><br />
        <br />
        <input type="submit" name="submit" value="Next" />
      </form>
      <a href ="admin.php"> Cancel</a>
    </body>

  </head>
</html>