<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.14
 * Time: 14.02
 */

namespace Media\Printings;

class Printing
{
    public $country;
    public $edition;
    private $myArray = array();

    public function __invoke($var)
    {
        var_dump($var);
    }

    public static function __set_state($array)
    {
        $ob = new Printing;
        $ob->country = $array['country'];
        $ob->edition = $array['edition'];
        return $ob;
    }

    function countries($var) {
        array_push($this->myArray, $var);
    }

    function getCountries() {
        return $this->myArray;
    }

}