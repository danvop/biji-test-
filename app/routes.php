<?php

/* GET */
//$router->get('' , 'PagesController@home');
$router->get('', 'TasksController@index');
$router->get('login', 'PagesController@login');
$router->get('register', 'PagesController@register');
$router->get('tasks/create' , 'PagesController@createTask');

$router->get('tasks/filter', 'TasksController@filter');
$router->get('tasks', 'TasksController@index');

$router->get('users/login', 'AuthController@login');
$router->get('logout', 'AuthController@logout');

/*POST*/
$router->post('users/register', 'AuthController@register');


$router->post('tasks', 'TasksController@store');
$router->post('tasks/status', 'TasksController@updateStatus');
$router->post('tasks/update' , 'TasksController@updateText');




