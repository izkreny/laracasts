<?php

require 'functions.php';
require '/var/www/mysql-pdo-dsn.php';

// Tip: This should be wrapped in a try-catch. We'll learn how, soon.
$pdo = new PDO($dsn);

// Connect to the MySQL database.
$pdo->exec('use laracasts');

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
