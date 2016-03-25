<?php
require("CustomerClass.php");
require("dbmock.php");

$dbDataJson = getDdData();

echo $dbDataJson . "\n";

$dbDataObj = json_decode($dbDataJson);

print_r($dbDataObj);


$c1 = new Customer($dbDataObj->fname, $dbDataObj->lname, $dbDataObj->phone, $dbDataObj->email);
print_r($c1);


?>
