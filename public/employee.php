<html>

  <head>
    <title> Employee: Home</title>
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
          //create links for non-manager employees
          //display schedule in calendar form
          //so database has access to row for specific employee
          //no managerial access; no CRUD capebilities except for request off
          //???possibly create table in SQL of request for days off
            //primary key is employee id
            //their name
            //day they want off
            //reason they want it off
          //ability to request off
          <li><a href="request_off.php">Request Off</a></li>
        </ul>

      </div>

     </div>

     <div id="footer">
     	&nbsp;
     </div>

  </body>
</html>