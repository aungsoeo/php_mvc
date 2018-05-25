<?php

namespace Core;

/**
 * View
 *
 * PHP version 7.0
 */
class View
{
    public static function render($view, $data = [])
    {
        extract($data, EXTR_SKIP);
        $file = dirname(__DIR__) . "/App/Views/$view";  // relative to Core directory
        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}
