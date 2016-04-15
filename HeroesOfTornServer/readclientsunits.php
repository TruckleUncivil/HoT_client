<?php
require_once 'app_config.php';
$dbh = connect();

$name = $_GET['username'];
$query = "SELECT * FROM UnitVault WHERE Owner = '". $name."'" ;

$allresult = $dbh->query($query)->fetchAll();
if (is_array($allresult)) {
 
    foreach($allresult as $result)
    {
 echo $result[ID];
    echo (",");
    echo $result[CatalogueID];
    echo (",");
     echo $result[DamageType];

    echo (",");
     echo $result[Attack];
    echo (",");
            echo $result[Accuracy];
    echo (",");
            echo $result[Dodge];
    echo (",");
            echo $result[HitPoints];
    echo (",");
            echo $result[MovementSpeed];
    echo (",");
            echo $result[Magic];
    echo (",");
            echo $result[MagicResistance];
    echo (",");
            echo $result[FireResistance];
    echo (",");
            echo $result[PiercingResistance];
    echo (",");
            echo $result[SlashResistance];
    echo (",");
            echo $result[BludgeoningResistance];
    echo (",");
            echo $result[MinAttRange];
    echo (",");
            echo $result[MaxAttRange];
    echo (",");
    echo $result[Experience];
       echo (",");
     echo $result[Level];
    echo (",");
    echo $result[Abilities];
   
    echo (",");
    echo ("#");
    
    }
}
else {
    die('nope');
}


