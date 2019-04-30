<?php 
$serverName = "finalproject454.c65lv0szmmed.us-east-1.rds.amazonaws.com";
    $connectionOptions = array(
	"Uid" => "mohan",
        "PWD" => "mohan454"
	);
 $conn = sqlsrv_connect($serverName, $connectionOptions) or DIE("Failed to connect to database");
if ($conn) {
	echo("connected succesfully!");
} else {
	//echo ("connection failed!");
}

?>
