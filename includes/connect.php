<?php
//why is this important? why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
//$mysqli->connect_error then we want it to die and have this message
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connection_errno . ')'
		. $mysqli->connection_errno);
}
else {
	echo"Connect made";
}
$mysqli->close();

?>