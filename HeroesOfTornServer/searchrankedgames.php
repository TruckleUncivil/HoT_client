<?php

require_once 'app_config.php';
$dbh = connect();





$query = "SELECT * FROM Rooms " ;
$allresult = $dbh->query($query)->fetchAll();

if (is_array($allresult)) 
{
    foreach($allresult as $result)
    {
 echo $result[RoomName];
     echo ',';
    echo $result[Rank];
      echo ',';
    echo $result[WaitingForPlayer]; 
      echo '#';
    
    }
}

else {
    die('nope');
}




 