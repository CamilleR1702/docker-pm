<?php
// echo phpinfo();
$dbUser = 'postgres';
$dbPassword ='test';
$sgbd='psql';
$dbHost = '192.168.99.100';
$dbPort = '5432';
$dbName = 'test';

try{
    $dbh = new PDO("pgsql:host=192.168.99.100;port=5432;dbname=panam;user=postgres;password=test");
    $rows = $dbh->query('SELECT * FROM test');
    echo '<ul>';
    foreach($rows as $row){
        $value = $row['label'];
        echo 
            "<li>
                <p>t : $value</p>
            </li>";
    }
    echo '</ul>';
}catch (PDOException $e){
    print("Erreur pdo exception : $e");
    die();
}