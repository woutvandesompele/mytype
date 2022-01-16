<?php
// set routes
$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'index'
  ),
  'planner' => array(
    'controller' => 'Pages',
    'action' => 'planner'
  ),
  'detail' => array(
    'controller' => 'Pages',
    'action' => 'detail'
  ),
  'userlist' => array(
    'controller' => 'Pages',
    'action' => 'userlist'
  ),
  'logout' => array(
    'controller' => 'Pages',
    'action' => 'logout'
  ),
  'api-search' => array(
    'controller' => 'Pages',
    'action' => 'apiSearch'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
