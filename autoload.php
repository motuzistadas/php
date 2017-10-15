<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.15
 * Time: 15.42
 */

spl_autoload_register(function($className)
{
    $namespace=str_replace("\\","/",__NAMESPACE__);
    $className=str_replace("\\","/",$className);
    $class="app/".(empty($namespace)?"":$namespace."/")."{$className}.php";
    include_once($class);
});