<html>
  <head>
    <title>
      Update Employee Information
    </title>
    <body>

    <?php require_once("../includes/connect_db.php"); ?>
      <p>Change the necessary information: </p>
      <form action="update_form2.php" method="post">
        First Name: <input type="text" name="FName" value='' /><br />
        Last Name: <input type="text" name="LName" value='' /><br />
        <br />
        <input type="submit" name="submit" value="Update Information" />
      </form>
      <a href ="admin.php"> Update</a>
    </body>

  </head>
</html>