<?php

$heading = 'My Note';

$config = require ('./utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$note = $dbCon->query('select * from posts where user_id = :u_id and id=:id', ['u_id' => 1,
    'id' => $_GET['id']])->fetch();
// dd($note);
require 'views/note.view.php';
