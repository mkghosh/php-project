<?php
$user_id = 2;

// require basePath("Core/DBConnection.php");
$config = require basePath('utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$notes = $dbCon->query('select * from posts where user_id=:u_id', ['u_id' => $user_id])->getAll();
// dd($user_id);

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);
