<?php 
$serverName = "samp454.database.wind.com";
    $connectionOptions = array(
        "Database" => "CIS454",
	"Uid" => "JohnDoe",
        "PWD" => "password"
	);
 $conn = sqlsrv_connect($serverName, $connectionOptions) or DIE("Failed to connect to database");
if ($conn) {
	//echo("connected succesfully!");
}

?>
