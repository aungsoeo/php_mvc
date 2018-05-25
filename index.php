<?php 

require_once __DIR__ .'./vendor/autoload.php';

use app\Controllers\UserController;
use app\Controllers\CategoryController;



$userController = new UserController();
$categoryController = new CategoryController();


//router
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$action = end($link_array);


$id = $_GET['id'];

$header = $action;
switch($header){
	case "":
		$userController->index();
		break;

	case "user":
		$userController->index();
		break;

	case "new_user":
		$userController->create();
		break;
		
	case "user_add":
		$userController->insert();
		break;

	case "del?id=1":
		$userController->delete($id);
		break;

	case "category":
		$categoryController->index();
		break;

	default:
		echo json_encode(array('result' => '404'));
		break;
}
