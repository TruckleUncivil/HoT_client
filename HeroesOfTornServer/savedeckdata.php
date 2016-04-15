<?php
require_once 'app_config.php';
$dbh = connect();

$user = $_GET['user'];
$deck = $_GET['deck'];
$data = $_GET['data'];



$deckstring = "Deck"."$deck"; 
$query =
"UPDATE `users` SET $deckstring = '$data' WHERE  Username = '$user'" ;
    
    
    
$result = $dbh->query($query)->execute();




