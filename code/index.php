<?php
echo phpinfo();
// $dbUser = 'postgres';
// $dbPassword ='test';
// $sgbd='psql';
// $dbHost = '192.168.99.100';
// $dbPort = '5432';
// $dbName = 'test';

// try{
//     $dbh = new PDO("pgsql:host=192.168.99.100;port=5432;dbname=test;user=postgres;password=test");
//     $rows = $dbh->query('SELECT * FROM test');
//     foreach($rows as $row){
//         echo $row;
//     }
// }catch (PDOException $e){
//     print("Erreur pdo exception : $e");
//     die();
// }