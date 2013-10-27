<?php

  	$dbuser = "root";
  	$dbpass = "cutters1993";
  	$connection = new PDO('mysql:host=localhost;dbname=wolfDB', $dbuser, $dbpass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
  	if(mysqli_connect_errno()) {
  		die("Database connection failed: " .
  			mysqli_connect_error() .
  			" (" . mysqli_connect_errno() . ")"
  		);

  	}

?>