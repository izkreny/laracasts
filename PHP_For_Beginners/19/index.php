<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('/var/www/mysql-config.php');
$db = new Database($config);

$posts = $db->query("select * from posts")->fetchAll();

dd($posts);
