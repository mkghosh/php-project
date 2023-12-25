<?php

require './utils/functions.php';
require './utils/router.php';

require 'classes/DBConnection.php';

$config = require ('./utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$query  = 'select * from posts where id = ?';
$params = [$_GET['id']];
$posts  = $dbCon->query($query, $params)->fetchAll();
dd($posts);
foreach ($posts as $post) {
    // code...
    echo '<li>' . $post['title'] . '</li>';
}
