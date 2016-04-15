<?php
 
require_once 'app_config.php';
 
$dbh = connect();



$query = "SELECT * FROM Maps" ;
$allresult = $dbh->query($query)->fetchAll();

if (is_array($allresult)) 
{
    foreach($allresult as $result)
    {
 echo $result[Name];
    echo (",");
    echo $result[Expansion];
    echo (",");
     echo $result[Players];

    echo (",");
     echo $result[GameType];
   
    echo ("#");

}
}

else {
    die('nope');
}










