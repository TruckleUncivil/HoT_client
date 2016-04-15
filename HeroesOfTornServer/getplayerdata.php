<?php
require_once 'app_config.php';
$dbh = connect();


$name = $_POST['user'];
$query = "SELECT * FROM users WHERE Username = '".$name."'" ;
$result = $dbh->query($query)->fetchObject();


if (is_object($result)) 
{
 echo $result->Gold;
    echo (",");
    echo $result->Dust;
     echo (",");
    echo $result->Rank;
     echo (",");
  
    echo $result->Deck1;
    echo (",");
    echo $result->Deck2;
    echo (",");
    echo $result->Deck3;
    echo (",");
    echo $result->Deck4;
    echo (",");
    echo $result->Deck5;
    echo (",");s
    echo $result->Deck6;
    echo (",");
    echo $result->Deck7;
    echo (",");
    echo $result->Deck8;
    echo (",");
    echo $result->Deck0;


}
else {
    die('nope');
}


