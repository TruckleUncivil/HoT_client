<?php
 
require_once 'app_config.php';
 
$dbh = connect();



$message = $_GET['message'];
$name = $_GET['name'];


$query = "SELECT * FROM Rooms WHERE RoomName = '".$name."'" ;
$result = $dbh->query($query)->fetchObject();



if (is_object($result)) 
{
 
$curlog =  $result->Log;
   

}
else {
    die('cant get cur log');
}

$newlog = $curlog . '*' . $message;


$queryt = "UPDATE `Rooms` SET `Log`= '".$newlog."' WHERE RoomName = '".$name."'" ;
$resultt = $dbh->query($queryt)->execute();
