<?php

  function redirect_to($new_location) {
	header("Location: " , $new_location);
	exit;
  }

  function mysql_prep($string) {
  	global $db;
  	mysql_real_escape_string($db, $string);
  	return $escaped_string;
  }

?>