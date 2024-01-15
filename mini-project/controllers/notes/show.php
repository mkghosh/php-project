<?php
require basePath('Core/Response.php');

$user_id = 2;
$config = basePath('utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

$note = $dbCon->query('select * from posts where id=:id', ['id' => $_GET['id']])->findOrAbort();

authorize($note, $user_id);

view('notes/show.php', [
    'heading' => 'My Note',
    'note' => $note
]);