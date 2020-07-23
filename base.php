<?
	     /////////////////////////////////////////////
	    ///									      ///
	   ///   Author: MOLOTOW(Mikhail Letushev)   ///
	  ///   Name: Form converter                ///
	 ///									   ///
    /////////////////////////////////////////////

	ob_start();
	session_start();

	$mysqli = mysqli_connect("server", "user", "pass", "db");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());exit();
	}mysqli_query($mysqli, "SET NAMES utf8");




?>