<?php

require '/var/www/mysql-pdo-dsn.php';

// Tip: This should be wrapped in a try-catch. We'll learn how, soon.
$pdo = new PDO($dsn);

// Connect to the MySQL database.
$pdo->exec('use laracasts');

$statement = $pdo->prepare("select * from posts where id = 1");
$statement->execute();

$post = $statement->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['title'] . "</li>";
