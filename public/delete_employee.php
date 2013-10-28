<html>
  <head>
    <title>
      Delete Employee
    </title>
    <body>

    <?php require_once("../includes/connect_db.php"); ?>
      <p>Enter the name of the employee you would like to delete: </p>
      <form action="delete_employee_form.php" method="post">
        First Name: <input type="text" name="FName" value='' /><br />
        Last Name: <input type="text" name="LName" value='' /><br />
        <br />
        <input type="submit" name="submit" value="Delete Employee" />
      </form>
      <a href ="admin.php"> Cancel</a>
    </body>

  </head>
</html>