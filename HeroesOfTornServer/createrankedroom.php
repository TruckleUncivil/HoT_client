<?php
 
require_once 'app_config.php';
 
$dbh = connect();

$roomname = $_GET['roomname'];
$rank = $_GET['rank'];
$regplayer = $_GET['regplayer'];

$query = "INSERT INTO Rooms( RoomName, Rank, WaitingForPlayer, Players ) 
VALUES (
'$roomname',  '$rank',  'true', '$regplayer')";


$result = $dbh->query($query);


 
if (is_object($result)) {
    echo ("success");
  
} 
else {
    
    die('nope');
}