<?php
require_once 'app_config.php';
$dbh = connect();


$name = $_GET['name'];
$query = "SELECT * FROM Rooms WHERE RoomName = '".$name."'" ;
$result = $dbh->query($query)->fetchObject();



if (is_object($result)) 
{
    echo $result->Players;
    echo('#');
 echo $result->Log;
   

}
else {
    die('nope');
}


