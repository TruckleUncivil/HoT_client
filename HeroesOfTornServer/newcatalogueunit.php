<?php
require_once 'app_config.php';
$dbh = connect();


$CatalogueID = $_GET['CatalogueID'];
$DamageType = $_GET['DamageType'];

$Attack = $_GET['Attack'];
$Accuracy = $_GET['Accuracy'];
$Dodge = $_GET['Dodge'];
$HitPoints = $_GET['HitPoints'];
$MovementSpeed = $_GET['MovementSpeed'];
$Magic = $_GET['Magic'];
$MagicResistance = $_GET['MagicResistance'];
$FireResistance = $_GET['FireResistance'];
$SlashResistance = $_GET['SlashResistance'];
$PiercingResistance = $_GET['PiercingResistance'];
$BludgeoningResistance = $_GET['BludgeoningResistance'];
$Abilities = $_GET['Abilities'];
$MinAttRange = $_GET['MinAttRange'];
$MaxAttRange = $_GET['MaxAttRange'];

$Owner = $_GET['Owner'];




$query = "INSERT INTO `UnitVault`(`Attack`, `Accuracy`, `Dodge`, `HitPoints`, `Magic`, `MagicResistance`, `FireResistance`, `SlashResistance`, `PiercingResistance`, `BludgeoningResistance`, `MovementSpeed`, `MinAttRange`, `MaxAttRange`, `Experience`, `Level`, `Abilities`, `Owner`, `CatalogueID`) VALUES ('$Attack','$Accuracy','$Dodge','$HitPoints','$Magic','$MagicResistance','$FireResistance','$SlashResistance','$PiercingResistance','$BludgeoningResistance','$MovementSpeed','$MinAttRange','$MaxAttRange','0','1','$Abilities', '$Owner','$CatalogueID')";
    


    
    
    
    
$result = $dbh->query($query);





echo $dbh->lastInsertId();

//http://www.willdevforfood.x10host.com/newcatalogueunit.php?CatalogueID=3&Armour=3&Strength=7&Speed=4&Abilities=Battle Cry(0*Berserk(0*Charge(0&MinAttRange=1&MaxAttRange=1&Owner=rere




