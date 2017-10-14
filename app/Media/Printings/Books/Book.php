<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.13
 * Time: 14.19
 */

namespace Media\Printings\Books;

class Book
{
    protected $title;

    public function __construct($title)
    {
        $this->title = "\"". $title ."\"";
        print "Opened a book ". $this->title ." | __construct" . PHP_EOL;
    }

    public function __destruct()
    {
        print "Finished using book: " . $this->title . " | __destruct" . PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        print "Calling object method '$name' " . implode(", ", $arguments) . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' " . implode(', ', $arguments). PHP_EOL;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function __debugInfo() {
        return [
            'someInfo' => $this->title . " | __debug",
        ];
    }


}

