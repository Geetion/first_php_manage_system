<?php

	require_once(config.php);

	if (!($con = mysql_connect(HOST,USERNAME,PASSWORD)){
		echo mysql_error();
	}


	if (!mysql_select_db(database_name)){
		echo mysql_error();
	}

	mysql_query('set names utf8');
?>