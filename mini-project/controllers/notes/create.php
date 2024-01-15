<?php
$heading = 'Create Note';
$user_id = 2;
$config = require basePath('utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $body = $_POST['body'];
    if (! Validator::string($body, 1, 1000)) {
        $errors['body'] = 'A body of less then 1000 chars is required';
    } 

    if (empty($errors)) {
        $dbCon->query('insert into posts (title, body, user_id) values (:title, :body, :u_id)', [
            'title' => 'test',
            'body' => $body,
            'u_id' => $user_id
        ]);
    }
}
view('/notes/create.view.php', [
    'heading' => 'Create Note',
    'errors' => $errors
]);
