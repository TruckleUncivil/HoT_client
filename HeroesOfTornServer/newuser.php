<?php
 
require_once 'app_config.php';
 
$dbh = connect();

 
$name = $_GET['name'];
$pass = $_GET['pass'];


    $query = 
       " INSERT INTO `users`(`Username`, `Password`) VALUES ('$name','$pass')";

$result = $dbh->query($query);

 
     $queryt = "SELECT * FROM users WHERE Username = '$name'" ;

$resultt = $dbh->query($queryt)->fetchObject();

if (is_object($resultt)) 
{
    echo $resultt->Gold;
}

 else
 {
    die('nope');
}




 