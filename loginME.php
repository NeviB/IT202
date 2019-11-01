<?php
	$username = $_POST['username'];
	$password = $_POST['password'];








	$link = mysql_connect("sql1.njit.edu", "nab54","affirm86");
	mysql_select_db("nab54");

	if (!$link) {
    die('Could not connect: ' . mysql_error());
}


		$result = mysql_query("select * from Login where username = '$username' and password = '$password'") or die("failed to query database " .mysql_error());

		$row = mysql_fetch_array($result);
		if ($row['username'] == $username && $row['password'] == $password )
		{
				echo "login success!!! Welcome";
		}

		else
    {
			echo "Failed login";
      
		}


		
		?>