<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.13
 * Time: 14.22
 */

namespace Media\Printings\Newspapers;

class Newspaper
{
    public $title;
    public $serialNumber;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setSerialNumber($nr) {
        $this->serialNumber = $nr;
    }

    public function getSerialNumber() {
        return $this->serialNumber;
    }

    public function __sleep() {
        return array("title");
    }

    public function __wakeup() {
        if($this->title == "Times") {
            $this->serialNumber = "x5g123";
        }
    }

}
