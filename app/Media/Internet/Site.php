<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.13
 * Time: 13.54
 */

namespace Media\Internet;

class Site
{
    private $data = array();
    
    public function __set($site, $value)
    {
        echo "Setting '$site' to '$value' | __set" . PHP_EOL;
        $this->data[$site] = $value;
    }

    public function __get($site)
    {
        echo "Getting '$site' | __get" . PHP_EOL;
        if (array_key_exists($site, $this->data)) {
            return $this->data[$site];
        }
        return null;
    }

    public function __isset($site)
    {
        echo "Is '$site' set? | __isset" . PHP_EOL;
        return isset($this->data[$site]);
    }

    public function __unset($site)
    {
        echo "Unsetting '$site' | __unset" . PHP_EOL;
        unset($this->data[$site]);
    }

}