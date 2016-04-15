<?php
require_once 'app_config.php';
$dbh = connect();

$query = "SELECT * FROM UnitCatalogue" ;
$allresult = $dbh->query($query)->fetchAll();
if (is_array($allresult)) 
{
    foreach($allresult as $result)
    {
 echo $result[CatalogueID];
    echo (">");
    echo $result[Name];
    echo (">");
     echo $result[UnitType];

    echo (">");
     echo $result[Faction];
    echo (">");
    echo $result[Rarity];
       echo (">");
     echo $result[Collection];
    echo (">");
    echo $result[Race];
   
    echo (">");
    echo $result[DamageType];
        echo (">");
    echo $result[Attack];
       echo (">");
     echo $result[Accuracy];
    echo (">");
           echo $result[Dodge];
    echo (">");
           echo $result[HitPoints];
    echo (">");
           echo $result[MovementSpeed];
    echo (">");
           echo $result[Magic];
    echo (">");
           echo $result[MagicResistance];
    echo (">");
           echo $result[FireResistance];
    echo (">");
           echo $result[SlashResistance];
    echo (">");
           echo $result[PiercingResistance];
    echo (">");
           echo $result[BludgeoningResistance];
    echo (">");
        
    echo $result[MinAttackRange];
   
    echo (">");
    echo $result[MaxAttackRange];
           echo (">");
     echo $result[Abilities];
    echo (">");
    echo $result[Artist];
   
    echo (">");
    echo $result[FlavourText];
    echo ("@");

}
}
else {
    die('nope');
}


