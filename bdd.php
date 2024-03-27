<?php

$DB_NAME ='hdk';
$USER = 'root';
$PASS = '';
$localhost= 'localhost';
try{
$db = new PDO("mysql:host=" . $localhost .";dbname=" . $DB_NAME, $USER, $PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
}
catch(PDOException $e){
    echo $e ;
;}
?>