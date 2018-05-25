<?php 

namespace app\libs;

use app\libs\View;

class BaseController
{
	
	public function __construct()
	{
		$this->view = new View();
	}
}