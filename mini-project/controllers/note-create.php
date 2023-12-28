<?php
$heading = 'Create Note';
$user_id = 2;
include 'utils/Validator.php';
$config = require('./utils/config.php');
$dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
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

require('views/note-create.view.php');
