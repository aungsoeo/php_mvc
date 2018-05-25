<?php 

namespace app\Controllers;

use app\libs\BaseController;
use app\libs\View;
use app\Models\User;
/**
* 
*/
class UserController  extends BaseController
{
	public function index ()
    {	
    	$users = User::getAll();
    	View::render("user",$users);
    }

    public function create()
    {
    	View::render("new");
    }

    public function insert() 
    {	
		$name = $_POST['name'];
		$result = User::insert($name);
		if ($result) {
			header("location: http://localhost/mvc/");
		}else{
			echo "Error in saving!";
		}
		
	}

	public function delete($id)
	{
		echo $id;
	}
}
