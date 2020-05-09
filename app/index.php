<?php

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

try {
    $pdo = new PDO("mysql:host=mysql;dbname=receiv-db", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM debts");
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_OBJ);
    
    echo "<h2>Users</h2>";
    echo "<ul>";
    foreach ($users as $user ) {
        echo "<li>".$user->title."</li>";
    }
    echo "</ul>";

} catch(PDOException $e) {
    echo $e->getMessage();
}

