<?php
	$connectionInfo = array("Database"=>"test", "CharacterSet" => "UTF-8", "UID" => "test", "PWD" => "test");
	$dblink = sqlsrv_connect("127.0.0.1", $connectionInfo);

	$user = $_GET['test'];
	$sql = "SELECT * FROM user where name = '$user' and active = 1";
	$result = sqlsrv_query($dblink, $sql);
	$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
	
?>