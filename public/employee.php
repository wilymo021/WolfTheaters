<html>

  <head>
    <title> Employees: Schedule </title>
  </head>

  <body>

    <?php require_once("../includes/connect_db.php"); 
      #require login *page for employees* if no login ; redirect to login page;
      #perhaps only connect to specific employee's row for non-manager;non-CRUD login
    ?>


    <div id = "header">
    	<h1>Wolf Theaters</h1>
    </div>

    <div id = "main">

      <div id = "navigation">
      	&nbsp;
      </div>

      <div id = "page">
        <h2> Employee Menu </h2>

        <ul>
          create links for non-manager employees
        </ul>

      </div>

     </div>

     <div id="footer">
     	&nbsp;
     </div>

  </body>
</html>