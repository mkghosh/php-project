<?php 
require ('utils/functions.php');
require ('classes/DBConnection.php');

require ('utils/router.php');

// $query = "select * from posts where id = ?";
// $params = [$_GET['id']];
// $posts = $dbCon->query($query, $params)->fetchAll();
// // dd($posts);
// foreach ($posts as $post) {
//     # code...
//     echo "<li>" . $post['title'] . "</li>";
// }