<?hh
require_once __DIR__.'/vendor/hh_autoload.php';

use Facebook\HackRouter\{
  HttpMethod,
  NotFoundException
};

$router = new Router();
$path = $_SERVER['REQUEST_URI'];
try {
  list($controller_name, $_) = $router->routeRequest(HttpMethod::GET, $path);
  $controller = new $controller_name();
  var_dump($controller);
} catch (NotFoundException $e) {
   $controller = new NotFoundController();
}

$controller = $controller->renderTotalPage();
