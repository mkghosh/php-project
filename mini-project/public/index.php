<? 
// phpinfo();
// die();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'utils/functions.php';

spl_autoload_register(function ($class) {
    require basePath("Core/{$class}.php");
});

require basePath("utils/router.php");






// $config = basePath('utils/config.php');
// $dbCon  = new DBConnection($config['dbConf'], 'root', 'Purna@2020');

// $query = "select * from posts where id = ?";
// $params = [$_GET['id']];
// $posts = $dbCon->query($query, $params)->getAll();
// dd($posts);
// foreach ($posts as $post) {
//     # code...
//     echo "<li>" . $post['title'] . "</li>";
// }