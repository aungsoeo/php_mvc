<?php 

namespace app\libs;
/**
* 
*/
class View
{
	public static function render($view, $data = [])
    {	
        extract($data, EXTR_SKIP);
        $file = dirname(__DIR__) . "/Views/$view".".php";
        if (is_readable($file)) {
            require $file;
        }
    }
}
