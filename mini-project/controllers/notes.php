<?php

$heading = 'My Notes';

$config = require ('./utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$notes = $dbCon->query('select * from posts where user_id=1')->fetchAll();
// dd($notes);
require 'views/notes.view.php';
