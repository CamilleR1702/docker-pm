<?php
$dbUser = 'postgres';
$dbPassword ='test';
$sgbd='psql';
$dbHost = '192.168.99.100';
$dbPort = '5432';
$dbName = 'test';

try{
    $dbh = new PDO("$sgbd:host=$dbHost:$dbPort", $dbUser, $dbPassword);
    $rows = $dbh->query('SELECT * FROM test');
    foreach($rows as $row){
        echo $row;
    }
}catch (PDOException $e){
    print("Erreur pdo exception : $e");
    die();
}