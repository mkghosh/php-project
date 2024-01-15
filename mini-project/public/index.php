<? 
// phpinfo();
// die();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';
require basePath("/Core/router.php");

spl_autoload_register(function ($class) {
    var_dump($class);
    require basePath("Core/{$class}.php");
});

// $query = "select * from posts where id = ?";
// $params = [$_GET['id']];
// $posts = $dbCon->query($query, $params)->fetchAll();
// // dd($posts);
// foreach ($posts as $post) {
//     # code...
//     echo "<li>" . $post['title'] . "</li>";
// }