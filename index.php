<?php
$request = $_SERVER['REQUEST_URI'];
session_start();
isset($_SESSION['status']) == FALSE;
if (isset($_SESSION['status']) == FALSE){  
    $link = '/pages/login.php';
}else{
    $link = '/pages/main.php';
}
if (isset($_GET['edit'])){
    require __DIR__ . '/pages/users_edit.php';
}
elseif(isset($_GET['add'])){
    require __DIR__ . '/pages/users_add.php';
}
elseif(isset($_GET['doAdd'])){
    require __DIR__ . '/module/doAddUser.php';
}
elseif(isset($_GET['doEdit'])){
    require __DIR__ . '/module/doEditUser.php';
}
elseif(isset($_GET['delUser'])){
    require __DIR__ . '/module/doDelUser.php';
}
elseif(isset($_GET['editServer'])){
    require __DIR__ . '/module/doEditServer.php';
}
switch ($request) {
    case '/' :
        require __DIR__ . $link;
        break;
    case '/login/' :
        require __DIR__ . '/module/doLogin.php';
        break;
    case '/logout/' :
        require __DIR__ . '/module/doLogout.php';
        break;
    case '/server' :
        require __DIR__ . '/pages/server.php';
        break;
    case '/users' :
        require __DIR__ . '/pages/users.php';
        break;
    case '/users?' :
        require __DIR__ . '/pages/users.php';
        break;
    case '/users/edit' :
        require 'pages/users_edit.php';
        break;
    case '/users/add' :
        require __DIR__ . '/pages/users_add.php';
        break;
    case '/graph/interface' :
        require __DIR__ . '/pages/graph_interface.php';
        break;
    case '/graph/client' :
        require __DIR__ . '/pages/graph_client.php';
        break;
    case '/client/drop' :
        require __DIR__ . '/pages/drop.php';
        break;
    case '/client/billing' :
        require __DIR__ . '/pages/billing.php';
        break;        
    case '/queue' :
        require __DIR__ . '/pages/queue.php';
        break;
    case '/report' :
        require __DIR__ . '/pages/report.php';
        break;
     default:
        http_response_code(404);
         require __DIR__ . '/pages/404.php';
         break; 
}
?>