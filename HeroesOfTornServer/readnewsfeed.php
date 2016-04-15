<?php
require_once 'app_config.php';
$dbh = connect();

$query = "SELECT * FROM NewsFeed" ;

$allresult = $dbh->query($query)->fetchAll();
if (is_array($allresult)) {
 
    foreach($allresult as $result)
    {
 echo $result[Title];
    echo (",");
    echo $result[Body];
    echo (",");
     echo $result[URL];

    echo (",");
     echo $result[ImageURL];
   
    echo ("#");
    
    }
}
else {
    die('nope');
}

