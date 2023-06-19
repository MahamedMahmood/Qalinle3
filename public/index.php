<?php 

session_start();



require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];


$routes = [
    '/index' => [ 
    'controller' => "postsController",
    'method' => 'index'
],
'/post' => [
    'controller' => "postsController",
    'method' =>'show'
],
'/Acount' => [
    'controller' => "registerController",
    'method' =>'register'
],

'/imprint' => [ 
    'controller' => "loginController",
    'method' => 'imprint'
],

'/login' => [
    'controller' => "loginController",
    'method' =>'login'
],
'/dashboard' => [
    'controller' => "loginController",
    'method' =>'dashboard'
],
'/logout' => [
    'controller' => "loginController",
    'method' =>'logout'
],
'/posts-admin' => [
    'controller' => "postsAdminController",
    'method' =>'index'
],
'/posts-edit' => [
    'controller' => "postsAdminController",
    'method' =>'edit'
],

];

if (isset($routes[$pathInfo])) {
    $route = $routes[$pathInfo];
    $controller = $container->make($route['controller']);
    $method = $route['method'];
    $controller->$method();
}

// if($pathInfo == "/blog" ) {
//     $postsController = $container->make("postsController");
//     $postsController->blog();
// } else if ($pathInfo == "/post") {
//     $postController = $container->make("postsController");
//     $postController->show();
// }
// var_dump(session_id());
// session_destroy();

?>