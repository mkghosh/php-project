<?php
$heading = 'My Notes';
$user_id = 2;

$config = require ('utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$notes = $dbCon->query('select * from posts where user_id=:u_id', ['u_id' => $user_id])->getAll();
// dd($user_id);
require ('views/notes.view.php');
