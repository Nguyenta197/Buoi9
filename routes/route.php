<?php
use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

// khu vực cần quan tâm -----------
// Đây là nơi khai báo các đường dẫn
// Cú pháp:
// GET/POSTPOST
// $router->phương thức HTTP('tên đường dẫn', phương thức trong controller muốn trỏ)
$router->get('/nguyentt',[HomeController::class,'index']);
$router->get('/add',[HomeController::class,'add']);


// Tạo một phương thức add trong HomeController
// Hiển thị ra màn hình "Xin chào các bạn"
// Tạo 1 route trỏ tới phương thức trên

// Nhóm đường dẫn
$router->group(['prefix' => 'admin'], function ($router) {
    // Định nghĩa các router của group trong đây
    $router->get('login', function() {
        return 'Trang dang nhap admin';
    });
});

// khu vực cần quan tâm -----------

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>