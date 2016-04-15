<?php
require_once 'app_config.php';
$dbh = connect();

$room = $_GET['room'];


$query =
"UPDATE `Rooms` SET WaitingForPlayer = 'false' WHERE  RoomName = '$room'" ;
    
    
    
$result = $dbh->query($query)->execute();




