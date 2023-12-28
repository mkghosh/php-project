<?php
require 'consts/Response.php';
$heading = 'My Note';
$user_id = 2;
$config = require('./utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$note = $dbCon->query('select * from posts where id=:id', ['id' => $_GET['id']])->findOrAbort();
// dd($note);

authorize($note, $user_id);
require('views/note.view.php');
