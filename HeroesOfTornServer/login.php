<?php
require_once 'app_config.php';
$dbh = connect();
 
$name = $_GET['username'];
$password = $_GET['password'];
$query = "SELECT * FROM users WHERE Username = '". $name."'" ;
 
$result = $dbh->query($query)->fetchObject();
 
if (is_object($result)) {
    echo $result->Password;
    echo (",");
    echo $result->iId;
} else {
    die('nope');
}