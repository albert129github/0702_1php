<?php
	$dblink = mysql_pconnect("127.0.0.1", "test", "test");
	mysql_select_db("test", $dblink);
	mysql_query("SET NAMES 'UTF8'", $dblink);

	$user = $_POST['test'];
	$sql = "SELECT * FROM user where name = '$user' and active = 1";
	$result = mysql_query($sql, $dblink);
	$row = mysql_fetch_row($result);

?>