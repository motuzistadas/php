<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.15
 * Time: 15.42
 */

spl_autoload_register(function($className)
{

    // project-specific namespace prefix if needed
    $prefix = '';

    $base_dir = __DIR__ . '/app/';
    $len = strlen($prefix);
    if (strncmp($prefix, $className, $len) !== 0) {
        return;
    }

    $relative_class = substr($className, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});