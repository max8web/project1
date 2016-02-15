<?php
	$db_location='localhost';
	$db_name='max-web';
	$db_user='root';
	$db_password='';
	$db_con=mysql_connect ($db_location, $db_user, $db_password);
	if (!$db_con) { 
		exit ('no connect server');
	}
	$db_sel=mysql_select_db ($db_name, $db_con);
	if (!$db_sel) {
		exit ('no connect db');
	}
	@mysql_query ("SET NAMES 'utf8'");
?>