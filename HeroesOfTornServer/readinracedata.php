<?php
require_once 'app_config.php';
$dbh = connect();

$query = "SELECT * FROM Races" ;

$allresult = $dbh->query($query)->fetchAll();
if (is_array($allresult)) {
 
    foreach($allresult as $result)
    {
 echo $result[Name];
    echo (">");
    echo $result[Description];
    echo (">");
     echo $result[Attack];

    echo (">");
     echo $result[Dodge];
            echo (">");
     echo $result[Accuracy];
            echo (">");
     echo $result[HitPoints];
            echo (">");
     echo $result[Magic];
            echo (">");
     echo $result[MovementSpeed];
            echo (">");
     echo $result[FireResistance];
            echo (">");
     echo $result[MagicResistance];
            echo (">");
     echo $result[SlashResistance];
            echo (">");
     echo $result[PiercingResistance];
            echo (">");
     echo $result[BludgeoningResistance];

    echo ("#");
    
    }
}
else {
    die('nope');
}

